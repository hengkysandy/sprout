<?php

namespace App\Http\Controllers;

use App\AddOn;
use App\Admin;
use App\Area;
use App\BusinessCategory;
use App\BuyLead;
use App\BuyLeadBusinessCategory;
use App\Certificate;
use App\CloudinaryMapping;
use App\Company;
use App\CompanyAddOn;
use App\CompanyBusinessCategory;
use App\CompanyInterestedProgram;
use App\CompanyMainProduct;
use App\CompanyPackage;
use App\CompanyProductCatalogue;
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

    public function dashHome() {
    	return view('dashboard.home');
    }

    public function businessCategory() {
        $data['sectionData'] = Section::all();
        $data['divisionData'] = Division::all();
        $data['groupData'] = Group::all();

        return view('dashboard.business-category', $data);
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
        $data['companyPackageData'] = CompanyPackage::where('status','pending')
                                        ->where('insert_from_profile','true')
                                        ->get();
        $data['requestAddOn'] = CompanyAddOn::where('status','pending')->get();
        $data['approvedCompany'] = Company::where('status','active')->get();
        
    	return view('dashboard.company-membership',$data);
    }

    public function member($id) {
        $data['packageData'] = Package::all();
        $data['businessEntity'] = ['PT','CV','PD'];
        $data['thisCompany'] = Company::find($id);
        $data['companyBC'] = CompanyBusinessCategory::whereHas('BusinessCategory',function($bc){
            $bc->where('status','company category');
        })->where('id_company', $data['thisCompany']->id)
        ->get();
        $data['section'] = Section::all();
        $data['addOnData'] = AddOn::all();
    	return view('dashboard.member', $data);
    }

    public function companyProfile($id) {
        $data['packageData'] = Package::all();
        $data['businessEntity'] = ['PT','CV','PD'];
        $data['thisCompany'] = Company::find($id);
        $data['companyBC'] = CompanyBusinessCategory::whereHas('BusinessCategory',function($bc){
            $bc->where('status','company category');
        })->where('id_company', $data['thisCompany']->id)
        ->get();
        $data['section'] = Section::all();
        $data['addOnData'] = AddOn::all();
        return view('post-buy-lead.company-profile', $data);
    }

    public function memberRequest() {
        // $companyPackageData = CompanyPackage::where('status','active')
        //                                 ->where('insert_from_profile','false')
        //                                 ->get();
        $data['newCompany'] = Company::where('status','wait for approval')->get();
    	return view('dashboard.member-request',$data);
    }

    public function doChangeStatusCompany(Request $request)
    {
        $currData = Company::find($request->id);
        if($request->status == "approve"){
            $currData->status = "active";
            $currData->save();
        }else{
            $currData->delete();
        }
        
        return back();
    }

    public function doChangeStatusCompanyPackage(Request $request)
    {

        $currData = CompanyPackage::find($request->id);
        $currData->status = $request->status;
        $currData->save();

        return back();
    }

    public function doChangeStatusCompanyAddOn(Request $request)
    {

        $currData = CompanyAddOn::find($request->id);
        $currData->status = $request->status;
        $currData->save();

        return back();
    }
    
    public function rfq() {
        // $currBuyLead = BuyLead::find(5);
        // return $currBuyLead->BuyLeadBusinessCategory()->get();
        $data['unitData'] = Unit::where('status','active')->latest('created_at')->get();
        $data['buyLead'] = BuyLead::all();
        $data['section'] = Section::all();
        // return $data['buyLead'][2]->BuyLeadBusinessCategory()->first()->Section()->first();
    	return view('dashboard.rfq',$data);
    }

    public function getBuyLeadDataAjax($id)
    {
        $currBuyLead = BuyLead::find($id);

        $response['buyLead'] = $currBuyLead;
        $response['user'] = $currBuyLead->User()->first();
        $response['unit'] = $currBuyLead->Unit()->first();

        return response()->json($response);
    }

    public function doEditBuyLeadBusinessCategoryAdmin(Request $request)
    {
        BuyLeadBusinessCategory::create([
            'buy_lead_id' => $request->id_buylead,
            'business_category_id' => $request->id_section, //ada salah ini
            'status' => 'active',
        ]);

        return back();
    }


    public function login_company()
    {
        // return file_get_contents('http://10.22.64.200:80/Utility/getStudentData?nim=1801400240');
        // return file_get_contents('https://www.instagram.com/explore/tags/girls/?__a=1');
        return view('cust-auth.login-company.index');
    }

    public function doLoginUser(Request $request)
    {
        $login = UserPreDefine::leftjoin('user_role','user.id','=','user_role.user_id')
                            ->leftjoin('role','role.id','=','user_role.role_id')
                            ->where('username',$request->username)
                            ->where('old_password',$request->password)
                            ->where('id_company',session()->get('companySession')[0]->id)
                            ->select('user.*','role.id as role_id','role.name as role_name')
                            ->get();

        if(count($login) != 0){
            $request->session()->put('userSession', $login);
            return redirect('home');
        }
            
        return back();
        
    }

    public function home(Request $request)
    {
        
        if($request->has('id')) $data['currUser'] = UserPreDefine::find($request->id);
        else $data['currUser'] = UserPreDefine::find(session()->get('userSession')[0]->id);
            
        $data['companyUser'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->get();

        if( $data['currUser']->UserRole->role_id == 4 ) $data['buyLeadUser'] = BuyLead::where('id_user', $data['currUser']->id )->get();
            


        return view('post-buy-lead.master-user.home',$data);

        // if (session()->get('userSession')[0]->role_id == 2) {
        //     return view('post-buy-lead.master-user.home',$data);
        // }
        // else if (session()->get('userSession')[0]->role_id == 5) {
        //     return view('search-buy-lead.sales-manager.home',$data);
        // }
        // else if (session()->get('userSession')[0]->role_id == 6) {
        //     return view('search-buy-lead.sales-staff.home',$data);
        // }
        // else{
        //     return view('post-buy-lead.home',$data);
        // }
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
        
        $group = Group::find($request->groupId);
        $cekData = BusinessCategory::where('status','company category')
                            ->where('id_group',$group->id)->first();
        if(!$cekData){

            $newBC = BusinessCategory::create([
                'id_section' => $group->Division->section_id,
                'id_division' => $group->division_id,
                'id_group' => $group->id,
                'status' => 'company category'
            ]);

            CompanyBusinessCategory::create([
                'id_company' => $request->id_company,
                'id_business_category' => $newBC->id,
                'status' => 'active'
            ]);

        }
        return back();
    }

    public function doDeleteCompanyBC(Request $request)
    {
        BusinessCategory::find($request->idBC)->delete();
        return back();
    }

    public function doDeleteProductCatalogue(Request $request)
    {
        $currData = CompanyProductCatalogue::find($request->id);
        $currData->delete();

        return back();
    }

    public function doDeleteRequiredDocument(Request $request)
    {
        $currData = CompanyRequiredDocument::find($request->id);
        $currData->delete();

        return back();
    }

    public function doDeleteCertificate(Request $request)
    {
        $currData = Certificate::find($request->id);
        $currData->delete();

        return back();
    }

    public function doDeleteCompanyLogo(Request $request)
    {
        $currData = Company::find($request->id);
        $currData->logo_image = "";
        $currData->save();

        return back();
    }

    public function doUpdateCompanyData(Request $request)
    {
        // return $request->all();


        $currCompany = Company::find($request->id_company);
        $currCompany->business_entity = $request->businessEntity;
        $currCompany->province_id = $request->id_province; //
        $currCompany->city_id = $request->id_city; //
        $currCompany->name = $request->companyName;
        $currCompany->tagline = $request->companyTagline;
        $currCompany->name = $request->companyName;
        $currCompany->address = $request->address;
        $currCompany->contact_name = $request->contactName;
        $currCompany->tax_type = $request->optionsRadios;
        $currCompany->zip_code = $request->zipcode;
        $currCompany->phone = $request->phoneCode.$request->phoneNumber;
        $currCompany->mobile_number = $request->mobileNumber;
        $currCompany->logo_image = $this->cloudinaryMaskingFile($request->logoImage);
        $currCompany->save();



        CompanyProductCatalogue::create([
            'id_company' => $request->id_company,
            'product_catalogue_image' => $this->cloudinaryMaskingFile($request->productImage),
        ]);


        $currInterestedProgram = CompanyInterestedProgram::where('id_company',$request->id_company)->get();

        if(!empty($currInterestedProgram)){
            foreach ($currInterestedProgram as $key => $value) {
                $val = CompanyInterestedProgram::find($value->id);
                $val->delete();
            }
        }
        

        for ($i=0; $i < count($request->interestProgram); $i++) {

            CompanyInterestedProgram::create([
                'id_company' => $request->id_company,
                'id_interested_program' => $request->interestProgram[$i],
                'status' => 'active'
            ]);

        }

        $currMainProduct = CompanyMainProduct::where('id_company',$request->id_company)->get();
        if(!empty($currMainProduct)){
            foreach ($currMainProduct as $key => $value) {
                $val = CompanyMainProduct::find($value->id);
                $val->delete();
            }
        }

        CompanyMainProduct::create([
            'id_company' => $request->id_company,
            'main_product_name' => $request->mainProduct,
            'status' => 'active'
        ]);


        $currPackage = CompanyPackage::where('id_company',$request->id_company)->latest('created_at')->first();
        $currPackage->id_package = $request->package;
        $currPackage->save();

        return back();

        // id_company: "19",
        // package: "3",
        // businessEntity: "CV",
        // companyName: "adfadsfadsf1",
        // companyTagline: "asdfasfsdaf1",
        // address: "safasdfas1",
        // id_province: "1",
        // id_city: "1",
        // zipcode: "13411",
        // phoneCode: "+11",
        // phoneNumber: "123987121",
        // mobileNumber: "+12132987121",
        // mainProduct: "asdfasdfasdf1",
        // contactName: "asdfasdfasd",
        // interestProgram: [
        // "1",
        // "2"
        // ],
        // optionsRadios: "Non PKP",
        // productImage: { },
        // logoImage: { }

    }

}