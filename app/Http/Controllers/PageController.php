<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Area;
use App\Certificate;
use App\CloudinaryMapping;
use App\Company;
use App\CompanyBusinessCategory;
use App\CompanyInterestedProgram;
use App\CompanyMainProduct;
use App\CompanyPackage;
use App\CompanyRequiredDocument;
use App\Division;
use App\Group;
use App\InterestedProgram;
use App\Package;
use App\Section;
use App\ShippingTerm;
use App\Unit;
use App\UserPreDefine;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;
use Laravolt\Indonesia\Indonesia;


class PageController extends Controller
{
	// For Dashboard Sprout
    public function login() {
        return view('dashboard.login');
    }

    public function doExtendCompanyPackage(Request $request)
    {
        CompanyPackage::create([
            'id_company' => session()->get('companySession')[0]->id,
            'id_package' => $request->package,
            'status' => 'active',
            'year_duration' => $request->yearDuration,
            'expired_date' => Carbon::now()->addYear($request->yearDuration),
            'insert_from_profile' => 'true',
        ]);

        return back();
    }

    public function dashHome() {
    	return view('dashboard.home');
    }

    public function businessCategory() {
        $sectionData = Section::all();
        $divisionData = Division::all();
        $groupData = Group::all();

        return view('dashboard.business-category', compact('sectionData','divisionData','groupData'));
    }

    /*tampilin Business Category Section -> division -> group*/
    public function detailBusinessCategory() {
        $section= Section::join('division','section.id','=','division.section_id')
            ->join('groups','division.id','=', 'groups.division_id')
            ->where('division.status','active')->where('groups.status','active')
            ->select('section.id','section.name')
            ->distinct()
            ->get();

        $businessCategory = collect();
        foreach ($section as $key => $svalue) {
            $division = Division::select('division.name','division.id', 'division.section_id')
                ->where('division.section_id', $svalue->id)
                ->get();

            $groupsCollection = collect();
            foreach ($division as $key => $dvalue) {
                $groups = Group::select('groups.name', 'groups.id', 'groups.division_id')
                    ->where('groups.division_id', $dvalue->id)
                    ->get();
                    $groupsCollection->push($groups);
            }
            $businessCategory->push(['section_id'=>$svalue->id, 'section_name'=>$svalue->name, 'division'=>$division, 'group'=>$groupsCollection]);
        }

        return view('dashboard.detail-business-category', compact('businessCategory'));
        return $businessCategory;
    }

    /*tampilkan data untuk modal business category*/
    public function businessCategoryModalData(Request $request){
        $id = $request->id;
        $division = Division::join('section','section.id','=','division.section_id')
            ->select('division.name', 'division.id')
            ->where('section.id',$id)
            ->distinct()
            ->get();

        $detaildivision = collect();

        foreach ($division as $key => $value) {
            $group = Group::join('division', 'division.id','=','groups.division_id')->select('groups.id','groups.name','groups.description')->where('division.id',$value->id)->get();
            $detaildivision->push(['division'=>$value->name, 'group'=>$group]);
        }
        return view('dashboard.bc-modal-content', compact('detaildivision'));
    }

    public function companyMembership() {
        $companyPackageData = CompanyPackage::where('status','active')
                                        ->where('insert_from_profile','true')
                                        ->get();
    	return view('dashboard.company-membership',compact('companyPackageData'));
    }

    public function member($id) {
        $data['company'] = Company::find($id);
        $data['companyBC'] = CompanyBusinessCategory::where('id_company', $data['company']->id)->get();
        $data['section'] = Section::all();
    	return view('dashboard.member', $data);
    }

    public function memberRequest() {
        $companyPackageData = CompanyPackage::where('status','active')
                                        ->where('insert_from_profile','false')
                                        ->get();
    	return view('dashboard.member-request',compact('companyPackageData'));
    }

    public function doChangeStatusCompanyPackage(Request $request)
    {
        $currData = CompanyPackage::find($request->id);
        $currData->status = $request->status;
        $currData->save();

        return back();
    }
    
    public function rfq() {
    	return view('dashboard.rfq');
    }

    public function login_company()
    {
        return view('cust-auth.login-company.index');
    }

    public function doLoginUser(Request $request)
    {
        $login = UserPreDefine::leftjoin('user_role','user.id','=','user_role.user_id')
                            ->leftjoin('role','role.id','=','user_role.role_id')
                            ->where('username',$request->username)
                            ->where('old_password',$request->password)
                            ->where('id_company',session()->get('companySession')[0]->id)
                            ->select('user.*','role.id as role_id')
                            ->get();

        if(count($login) != 0){
            $request->session()->put('userSession', $login);
            return redirect('home');
        }
            
        return back(); 
    }

    public function home()
    {
        if (session()->get('userSession')[0]->role_id == 5) {
            return view('search-buy-lead.sales-manager.home');
        }
        else if (session()->get('userSession')[0]->role_id == 6) {
            return view('search-buy-lead.sales-staff.home');
        }
        else{
            return view('post-buy-lead.home');
        }
    }

    public function home_login()
    {
        return view('cust-auth.login-user.login');
    }


    public function logoutUser(Request $request)
    {
        $request->session()->forget('userSession');
        return redirect('home_login');
    }

    public function logoutAdmin(Request $request)
    {
        $request->session()->forget('adminSession');
        return redirect('login');
    }

    public function doLoginAdmin(Request $request)
    {
        $login = Admin::where('name',$request->name)
                            ->where('password',$request->password)
                            ->get();

        if(count($login) != 0){
            $request->session()->put('adminSession', $login);
            return redirect('dash_home');
        }
        
        return back();
        
    }

    public function doAddCompanyBC(Request $request)
    {
        CompanyBusinessCategory::create([
            'id_company' => $request->id_company,
            'id_business_category' => $request->sectionOption,
            'status' => 'active'
        ]);

        return back();
    }

}