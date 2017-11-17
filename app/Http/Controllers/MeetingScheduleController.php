<?php

namespace App\Http\Controllers;

use App\UserMeetingSchedule;
use Illuminate\Http\Request;
use App\MeetingSchedule;
use App\CompanyMeetingSchedule;
use App\UserPreDefine;
use App\Company;

class MeetingScheduleController extends Controller
{
    //Meeting Schedule

    public function meetingSchedule(Request $request)
    {
        // $currentCompanyId = $request->session()->get('companySession')->id; 
        $currentCompanyId = session()->get('companySession')[0]->id;
        $currentUserId = session()->get('userSession')[0]->id;
        $currentUserRole = UserPreDefine::join('user_role as ur', 'user.id', '=', 'ur.user_id')
            ->join('role', 'role.id', '=', 'ur.role_id')
            ->where('user.id', $currentUserId)
            ->select('role.id as r_id')
            ->first()
            ->r_id;

        $companyData = Company::select('id', 'name')
            ->where('status', 'active')
            ->where('id', '<>', $currentCompanyId)
            ->get();

        $companyUserList = UserPreDefine::where('id_company', $currentCompanyId)->where('id','<>',$currentUserId)->get()->toArray();

        $meetingExternalData = MeetingSchedule::join('company_meeting_schedule as cms', 'meeting_schedule.id', '=', 'cms.id_meeting_schedule')
            ->join('company', 'company.id', '=', 'cms.id_company_assign')
            ->where('meeting_schedule.status', 'active')
            ->where('meeting_schedule.id_user',$currentUserId)
            ->distinct()
            ->select('meeting_schedule.*');
            
        $meetingInternalData = MeetingSchedule::join('user_meeting_schedule as ums','meeting_schedule.id','=','ums.id_meeting_schedule')
            ->join('user','user.id','=','ums.id_user_assigned')
            ->where('meeting_schedule.status','active')
            ->where('meeting_schedule.id_user',$currentUserId)
            ->distinct()
            ->select('meeting_schedule.*');

        $companyMeetingData = $meetingExternalData->union($meetingInternalData)->get();

        foreach ($companyMeetingData as $key => $value) {

            // GET Recipient and status from external Meeting
            if($value->meeting_type == 1)
            {
                $recipient = CompanyMeetingSchedule::join('company', 'company.id', '=', 'company_meeting_schedule.id_company_assign')
                ->where('company_meeting_schedule.id_meeting_schedule', $value->id)
                ->select('company.name')
                ->pluck('name')
                ->toArray();

                $status = CompanyMeetingSchedule::join('company', 'company.id', '=', 'company_meeting_schedule.id_company_assign')
                ->where('company_meeting_schedule.id_meeting_schedule', $value->id)
                ->select('company_meeting_schedule.status')
                ->pluck('status')
                ->toArray();
            }
            elseif($value->meeting_type == 0)
            {
                $recipient = UserMeetingSchedule::join('user', 'user.id', '=', 'user_meeting_schedule.id_user_assigned')
                ->where('user_meeting_schedule.id_meeting_schedule', $value->id)
                ->select('user.first_name')
                ->pluck('first_name')
                ->toArray();

                $status = UserMeetingSchedule::join('user', 'user.id', '=', 'user_meeting_schedule.id_user_assigned')
                ->where('user_meeting_schedule.id_meeting_schedule', $value->id)
                ->select('user_meeting_schedule.status')
                ->pluck('status')
                ->toArray();
            }

            $value['recipient'] = $recipient;
            $value['status'] = $status;
        }

        $userRequest = MeetingSchedule::join('user_meeting_schedule as ums','meeting_schedule.id','=','ums.id_meeting_schedule')
            ->join('user as r_user','r_user.id','=','ums.id_user_assigned')
            ->leftjoin('user as s_user','s_user.id','=','meeting_schedule.id_user')
            ->where('r_user.id', $currentUserId)
            ->select('meeting_schedule.*','ums.status','s_user.first_name as sender','r_user.first_name as recipient');

        $companyRequest = MeetingSchedule::join('company_meeting_schedule as cms', 'meeting_schedule.id', '=', 'cms.id_meeting_schedule')
            ->join('company as r_comp', 'r_comp.id', '=', 'cms.id_company_assign')
            ->leftjoin('user', 'user.id', '=', 'meeting_schedule.id_user')
            ->leftjoin('company as s_comp', 's_comp.id', '=', 'user.id_company')
            ->where('id_company_assign', $currentCompanyId)
            ->select('meeting_schedule.*', 'cms.status', 's_comp.name as sender', 'r_comp.name as recipient');
            if ($currentUserRole == 3) // procurement role
            {
                $companyRequest = $companyRequest->where('recipient_role', 0); // recipient role for procurement
            } else if ($currentUserRole == 5) // sales role
            {
                $companyRequest = $companyRequest->where('recipient_role', 1); // recipient role for sales
            }
            // $companyRequest = $companyRequest->get();

        $meetingRequest = $companyRequest->union($userRequest)->get();

        // return $meetingRequest;

        return view('post-buy-lead.procurement-manager.meeting-schedule', compact('companyUserList', 'companyData', 'companyMeetingData', 'meetingRequest'));
    }

    public function doInsertMeeting(Request $request)
    {
        $user_id = $request->session()->get('userSession')->first()->id;
        $subject = $request->subject;
        $date = $request->date;
        $time = $request->time;
        $place = $request->place;
        $sendto = $request->sendto;
        $sendtouser = $request->sendtouser;
        $recipient = $request->recipient;
        $meetingtype = intval($request->meeting_type);

        $meetingschedule = new MeetingSchedule;
        $meetingschedule->id_user = $user_id;
        $meetingschedule->subject = $subject;
        $meetingschedule->meeting_type = $meetingtype;
        $meetingschedule->recipient_role = $recipient;
        $meetingschedule->subject = $subject;
        $meetingschedule->date = $date;
        $meetingschedule->time = $time;
        $meetingschedule->place = $place;
        $meetingschedule->status = "active";
        $meetingschedule->save();

        if ($meetingschedule->meeting_type == 1) {
            for ($i = 0; $i < sizeof($sendto); $i++) {
                $companymeetingschedule = new CompanyMeetingSchedule;
                $companymeetingschedule->id_company_assign = $sendto[$i];
                $companymeetingschedule->id_meeting_schedule = $meetingschedule->id;
                $companymeetingschedule->status = "created";
                $companymeetingschedule->save();
            }
        } else if ($meetingschedule->meeting_type == 0) {
            for ($i = 0; $i < sizeof($sendtouser); $i++) {
                $companymeetingschedule = new UserMeetingSchedule();
                $companymeetingschedule->id_user_assigned = $sendtouser[$i];
                $companymeetingschedule->id_meeting_schedule = $meetingschedule->id;
                $companymeetingschedule->status = "created";
                $companymeetingschedule->save();
            }
        }
    }

    public function acceptMeeting(Request $request, $id)
    {
        $meeting_type = MeetingSchedule::find($id)->meeting_type;

        if($meeting_type == 1) // External
        {
            $currentCompanyId = session()->get('companySession')[0]->id;
            companymeetingschedule::where('id_meeting_schedule', $id)->where('id_company_assign', $currentCompanyId)->update([
                'status' => 'approved',
            ]);
        }elseif($meeting_type == 0)
        {
            $currentUserId = session()->get('userSession')[0]->id;
            UserMeetingSchedule::where('id_meeting_schedule', $id)->where('id_user_assigned', $currentUserId)->update([
                'status' => 'approved',
            ]);
        }
    }

    public function rejectMeeting(Request $request, $id)
    {
        $meeting_type = MeetingSchedule::find($id)->meeting_type;

        if($meeting_type == 1) // External
        {
            $currentCompanyId = session()->get('companySession')[0]->id;
            companymeetingschedule::where('id_meeting_schedule', $id)->where('id_company_assign', $currentCompanyId)->update([
                'status' => 'rejected',
            ]);
        }elseif($meeting_type == 0)
        {
            $currentUserId = session()->get('userSession')[0]->id;
            UserMeetingSchedule::where('id_meeting_schedule', $id)->where('id_user_assigned', $currentUserId)->update([
                'status' => 'rejected',
            ]);
        }
    }

    //meeting detail 
    public function meetingdetail(Request $request)
    {
        $detailRecipient = collect();
        $detailArray = [];
        $id = $request->id;
        $meetingData = MeetingSchedule::where('id', $id)->first();
        $meetingType = MeetingSchedule::where('id', $id)->first()->meeting_type;;

        $Recipient = MeetingSchedule::leftjoin('company_meeting_schedule as cms', 'meeting_schedule.id', '=', 'cms.id_meeting_schedule')
            ->leftjoin('company', 'company.id', '=', 'cms.id_company_assign')
            ->where('meeting_schedule.id', $id)
            ->select('company.name', 'cms.status')
            ->get();

        foreach ($Recipient as $key => $value) {
            $detailArray['name'] = $value->name;
            $detailArray['status'] = $value->status;
            $detailRecipient->push($detailArray);
        }

        if ($meetingData->meeting_type===1) {
            $meetingType = "External Meeting";
        }else if($meetingData->meeting_type===0){
            $detailRecipient = collect();
            $meetingType = 'Internal Meeting';
            $Recipient = MeetingSchedule::leftjoin('user_meeting_schedule as ums', 'meeting_schedule.id', '=', 'ums.id_meeting_schedule')
                ->leftjoin('company', 'company.id', '=', 'ums.id_user_assigned')
                ->leftjoin('user','ums.id_user_assigned','=','user.id')
                ->where('meeting_schedule.id', $id)
                ->select('user.first_name','user.last_name','ums.status')
                ->get();

            foreach ($Recipient as $key => $value) {
                $detailArray['name'] = $value->first_name.' '.$value->last_name;
                $detailArray['status'] = $value->status;
                $detailRecipient->push($detailArray);
            }
        }

        return view('post-buy-lead.procurement-manager.meeting-detail', compact('meetingData', 'detailRecipient', 'meetingType'));
    }

    public function meetingcalendar()
    {
        $currentCompanyId = session()->get('companySession')[0]->id;
        $currentUserId = session()->get('userSession')[0]->id;
        $currentUserRole = UserPreDefine::join('user_role as ur', 'user.id', '=', 'ur.user_id')
            ->join('role', 'role.id', '=', 'ur.role_id')
            ->where('user.id', $currentUserId)
            ->select('role.id as r_id')
            ->first()
            ->r_id;

        $companyUser = Company::join('user', 'company.id', '=', 'user.id_company')
            ->where('company.id', $currentCompanyId)
            ->select('user.id as userid')
            ->pluck('userid')
            ->toArray();

        $tempData = MeetingSchedule::whereIn('id_user', $companyUser)->select('subject', 'date', 'time', 'id')->get();
        $tempRequest = MeetingSchedule::join('company_meeting_schedule as cms', 'meeting_schedule.id', '=', 'cms.id_meeting_schedule')->Where('id_company_assign', $currentCompanyId)->get();
        $meetingData = collect();
        $meetingarray = [];
        foreach ($tempData as $row => $value) {
            $meetingarray['title'] = $value->subject;
            $meetingarray['start'] = $value->date . 'T' . $value->time;
            $meetingarray['color'] = '#e59400';
            $meetingarray['url'] = "meeting-detail?id=" . $value->id;
            $meetingData->push($meetingarray);
        }
        foreach ($tempRequest as $row => $value) {
            $meetingarray['title'] = $value->subject;
            $meetingarray['start'] = $value->date . 'T' . $value->time;
            $meetingarray['color'] = '#044389';
            $meetingarray['url'] = "meeting-detail?id=" . $value->id;
            $meetingData->push($meetingarray);
        }
        return $meetingData;
    }
}
