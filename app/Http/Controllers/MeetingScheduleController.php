<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MeetingSchedule;
use App\CompanyMeetingSchedule;
use App\UserPreDefine;
use App\Company;

class MeetingScheduleController extends Controller
{
    //Meeting Schedule

    public function meetingSchedule(Request $request){
        // $currentCompanyId = $request->session()->get('companySession')->id; 
        $currentCompanyId = session()->get('companySession')[0]->id; 
        $currentUserId = session()->get('userSession')[0]->id;
        $currentUserRole = UserPreDefine::join('user_role as ur','user.id','=','ur.user_id')
                            ->join('role','role.id','=','ur.role_id')
                            ->where('user.id',$currentUserId)
                            ->select('role.id as r_id')
                            ->first()
                            ->r_id;

        $companyData = Company::select('id','name')
                        ->where('status','active')
                        ->where('id','<>',$currentCompanyId)
                        ->get();

        $companyUser = Company::join('user','company.id','=','user.id_company')
                            ->where('company.id',$currentCompanyId)
                            ->select('user.id as userid')
                            ->pluck('userid')
                            ->toArray();

        $companyMeetingData = MeetingSchedule::join('company_meeting_schedule as cms','meeting_schedule.id','=','cms.id_meeting_schedule')
                                ->join('company','company.id','=','cms.id_company_assign')
                                ->where('meeting_schedule.status','active')
                                ->whereIn('meeting_schedule.id_user',$companyUser)
                                ->distinct()
                                ->select('meeting_schedule.*')
                                ->get();

        foreach ($companyMeetingData as $key => $value) {
            $recipient = CompanyMeetingSchedule::join('company','company.id','=','company_meeting_schedule.id_company_assign')
                        ->where('company_meeting_schedule.id_meeting_schedule',$value->id)
                        ->select('company.name')
                        ->pluck('name')
                        ->toArray();

            $status = CompanyMeetingSchedule::join('company','company.id','=','company_meeting_schedule.id_company_assign')
                        ->where('company_meeting_schedule.id_meeting_schedule',$value->id)
                        ->select('company_meeting_schedule.status')
                        ->pluck('status')
                        ->toArray();

            $value['recipient'] = $recipient;
            $value['status'] = $status;
        }
        $companyRequest = MeetingSchedule::join('company_meeting_schedule as cms','meeting_schedule.id','=','cms.id_meeting_schedule')
        ->join('company as r_comp','r_comp.id','=','cms.id_company_assign')
        ->leftjoin('user','user.id','=','meeting_schedule.id_user')
        ->leftjoin('company as s_comp','s_comp.id','=','user.id_company')
        ->where('id_company_assign',$currentCompanyId)
        ->select('meeting_schedule.*','cms.status','s_comp.name as sender','r_comp.name as recipient');
        if($currentUserRole == 3) // procurement role
        {
            $companyRequest = $companyRequest->where('recipient_role', 0); // recipient role for procurement
        }else if($currentUserRole == 5) // sales role
        {
            $companyRequest = $companyRequest->where('recipient_role', 1); // recipient role for sales
        }
        $companyRequest= $companyRequest->get();

        return view('post-buy-lead.procurement-manager.meeting-schedule',  compact('companyData','companyMeetingData','companyRequest'));
    }

    public function doInsertMeeting(Request $request){
        $user_id = $request->session()->get('userSession')->first()->id;
        $subject = $request->subject;
        $date = $request->date;
        $time = $request->time;
        $place = $request->place;
        $sendto = $request->sendto;
        $recipient = $request->recipient;
        $meetingtype = $request->meeting_type;

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

        if($meetingschedule->meeting_type == 1)
        {
            for ($i=0; $i <sizeof($sendto) ; $i++) { 
                $companymeetingschedule = new CompanyMeetingSchedule;
                $companymeetingschedule->id_company_assign = $sendto[$i];
                $companymeetingschedule->id_meeting_schedule = $meetingschedule->id;
                $companymeetingschedule->status = "created";
                $companymeetingschedule->save();
            }
        }
    }

    public function acceptMeeting(Request $request, $id)
    {
        $currentCompanyId = session()->get('companySession')[0]->id; 
        companymeetingschedule::where('id_meeting_schedule',$id)->where('id_company_assign',$currentCompanyId)->update([
            'status' => 'approved', 
            ]);
    }

    //meeting detail 
    public function meetingdetail(Request $request)
    {   
        $meetingType;
        $detailRecipient = collect();
        $detailArray = [];
        $id = $request->id;
        $meetingData = MeetingSchedule::where('id',$id)->first();
        $Recipient = MeetingSchedule::leftjoin('company_meeting_schedule as cms','meeting_schedule.id','=','cms.id_meeting_schedule')
                        ->leftjoin('company','company.id','=','cms.id_company_assign')
                        ->where('meeting_schedule.id',$id)
                        ->select('company.name','cms.status')
                        ->get();

        foreach ($Recipient as $key => $value) {
            $detailArray['name'] = $value->name; 
            $detailArray['status'] = $value->status;
            $detailRecipient->push($detailArray);
        }
        
        if($detailRecipient)
        {
            $meetingType = "External Meeting";
        }
        else if(!$detailRecipient)
        {
            $meetingType = 'Internal Meeting';
            $Recipient = MeetingSchedule::leftjoin('user_meeting_schedule as ums','meeting_schedule.id','=','ums.id_meeting_schedule')
                            ->leftjoin('company','company.id','=','ums.id_user_assigned')
                            ->where('meeting_schedule.id',$id)
                            ->select('user.name')
                            ->get();

            foreach($Recipient as $key => $value) {
                $detailArray['name'] = $value->name; 
                $detailArray['status'] = $value->status;
                $detailRecipient->push($detailArray);
            }
        }

        return view('post-buy-lead.procurement-manager.meeting-detail', compact('meetingData','detailRecipient','meetingType'));
   }

   public function meetingcalendar()
   {
        $currentCompanyId = session()->get('companySession')[0]->id; 
        $currentUserId = session()->get('userSession')[0]->id;
        $currentUserRole = UserPreDefine::join('user_role as ur','user.id','=','ur.user_id')
                            ->join('role','role.id','=','ur.role_id')
                            ->where('user.id',$currentUserId)
                            ->select('role.id as r_id')
                            ->first()
                            ->r_id;

        $companyUser = Company::join('user','company.id','=','user.id_company')
                        ->where('company.id',$currentCompanyId)
                        ->select('user.id as userid')
                        ->pluck('userid')
                        ->toArray();

        $tempData = MeetingSchedule::whereIn('id_user',$companyUser)->select('subject','date','time','id')->get();
        $tempRequest = MeetingSchedule::join('company_meeting_schedule as cms','meeting_schedule.id','=','cms.id_meeting_schedule')->Where('id_company_assign',$currentCompanyId)->get();
        $meetingData = collect();
        $meetingarray = [];
        foreach($tempData as $row => $value)
        {
            $meetingarray['title'] = $value->subject;
            $meetingarray['start'] = $value->date.'T'.$value->time;
            $meetingarray['color'] = '#e59400';
            $meetingarray['url'] = "meeting-detail?id=".$value->id;
            $meetingData->push($meetingarray);
        }
        foreach($tempRequest as $row => $value)
        {
            $meetingarray['title'] = $value->subject;
            $meetingarray['start'] = $value->date.'T'.$value->time;
            $meetingarray['color'] = '#044389';
            $meetingarray['url'] = "meeting-detail?id=".$value->id;
            $meetingData->push($meetingarray);
        }
        return $meetingData;
    }
}
