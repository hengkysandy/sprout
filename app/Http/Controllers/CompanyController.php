<?php

namespace App\Http\Controllers;

use App\AddOn;
use App\Certificate;
use App\CloudinaryMapping;
use App\Company;
use App\CompanyAddOn;
use App\CompanyInterestedProgram;
use App\CompanyMainProduct;
use App\CompanyPackage;
use App\CompanyProductCatalogue;
use App\CompanyRequiredDocument;
use App\Package;
use App\Province;
use App\Role;
use App\UserPreDefine;
use App\UserRole;
use Carbon\Carbon;
use Illuminate\Http\Request;
use JD\Cloudder\Facades\Cloudder;
use Laravolt\Indonesia\Indonesia;

class CompanyController extends Controller
{
    public function register_1(Request $request)
    {
        // $request->session()->put('key', 'value');
        // $value = $request->session()->get('key');
        // $request->session()->flush();
        $packageData = Package::all();
        $indo = new Indonesia();
        // $provinceData = $indo->allProvinces();
        // return $provinceData;

        $provinceData =  $indo->allProvinces()
        ->map(function ($val) {
           $search = array('Dki', 'Di');
           $replace = array('DKI', 'DI');
           $val->map_name = str_replace($search, $replace, $val->name);

            return $val;
        });

        

    //     return Article::where('active', 1)
    // ->orderBy('create_date', 'desc')
    // ->get()
    // ->map(function ($article) {
    //     $article->article_desc = str_replace('ReplaceWord', '', $article->article_desc);

    //     return $article;
    // });

        return view('cust-auth.register-company.register-1', 
            compact('packageData', 'provinceData','cityData'));
    }

    public function loadCityDataAjax($provinceId)
    {
        $indo = new Indonesia();
        $provinceData = $indo->allProvinces();
        $data = $indo->allCities()[0]->where('province_id',$provinceId)->get();

        return $data;
    }

    public function register_2(Request $request)
    {
        $request->session()->put('companyData', json_encode($request->all()));
        if(!empty($request->companyLogoImg)){
            $response = Cloudder::upload($request->companyLogoImg->path())->getResult();
            $url = $response['url'];
            $request->session()->put('logoUrl', $url);    
        }

        return view('cust-auth.register-company.register-2');

        // companyName: "company name", [company] ok
        // businessEntity: "entity", [company] ok
        // companyTagline: "tagline", [company] ok
        // email: "email@gmg.css", [company] ok
        // address: "dsafdsafsadfsadfsadf address", [company] ok
        // city: "citynya", [city] ok
        // province: "13", [city] ok
        // phoneCode: "+21", [company] ok
        // phoneNumber: "123123123", [company]   ok
        // mainProduct: "main proi", [company_main_product] [ juga masukan id company yg baru regis ke [company_main_product] ] ok
        // package: "4", [compnay_package] ok
        // password: "123123", [company] ok
        // confPass: "123123", [company] ok
        // interestProgram: [// "1",// "2"// ], [company_interested_program] ok
        // companyLogoImg: { } [company] ok
    }

    public function register_3(Request $request)
    {
        if(!$request->session()->has('companyIdSession')) return back();
        return view('cust-auth.register-company.register-3');
    }

    public function doRegis(Request $request)
    {
        $regis1 = json_decode($request->session()->get('companyData'));
        $interestProgram = $regis1->interestProgram;

        if(empty($regis1->yearDuration)){
            $duration = 6;
            $year = 0.5;
        }else{
            $duration = $regis1->yearDuration * 12;
            $year = $regis1->yearDuration;
        }

        $cekTagline = !empty($regis1->companyTagline) ? $regis1->companyTagline : '';
        $cekLogo = $request->session()->get('logoUrl') == NULL ? '' : $request->session()->get('logoUrl');

        // contactName: "contact name", [company] ok
        // mobileCode: "123", [company] ok
        // mobileNumber: "123123123", [company] ok
        // optionsRadios: "option1", ok
        // businessLicenseImage: { },
        // taxImage: { }
        // certificateImage: { }

        //$response = Cloudder::upload()->getResult();

        Company::create([
            'city_id' => $regis1->city,
            'province_id' => $regis1->province,
            'name' => $regis1->companyName,
            'tagline' => $cekTagline,
            'logo_image' => $cekLogo,
            'email' => $regis1->email,
            'password' => $regis1->confPass,
            'address' => $regis1->address,
            'phone' => ($regis1->phoneCode.$regis1->phoneNumber),
            'contact_name' => $request->contactName,
            'mobile_number' => ($request->mobileCode.$request->mobileNumber),
            'tax_type' => $request->optionsRadios,
            'business_entity' => $regis1->businessEntity,
            'status' => 'wait for approval',
            'zip_code' => $regis1->zipcode,
        ]);

        $getLatestCompanyId = Company::orderBy('id','DESC')->first()->id;

        $request->session()->put('companyIdSession', $getLatestCompanyId);

        if(!empty($regis1->productImage)){
            $maskedFileProductCatalogueUrl = $this->cloudinaryMaskingFile($request->productImage);

            CompanyProductCatalogue::create([
                'id_company' => $getLatestCompanyId,
                'product_catalogue_image' => $maskedFileProductCatalogueUrl,
            ]);
        }

        for ($i=0; $i < count($interestProgram); $i++) {

            CompanyInterestedProgram::create([
                'id_company' => $getLatestCompanyId,
                'id_interested_program' => $interestProgram[$i],
                'status' => 'active'
            ]);

        }

        CompanyPackage::create([
            'id_company' => $getLatestCompanyId,
            'id_package' => $regis1->package,
            'status' => 'confirmed',
            'year_duration' => $year,
            // 'expired_date' => Carbon::now()->addYear($regis1->yearDuration),
            'expired_date' => Carbon::now()->addMonth($duration),
            'insert_from_profile' => 'false',
        ]);

        //belum bisa banyak 1 main product, baru bisa 1 doang
        CompanyMainProduct::create([
            'id_company' => $getLatestCompanyId,
            'main_product_name' => $regis1->mainProduct,
            'status' => 'active'
        ]);


        $maskingFile = file_get_contents('images/masking.png');
        $businessLicenseImage = file_get_contents($request->businessLicenseImage->path());
        $BLIOriginalName = $request->file('businessLicenseImage')->getClientOriginalName();        
        $newPath = 'cache/'.strtotime(date('c')).'.'.$BLIOriginalName.'.png';
        $newBLI = $maskingFile."".$businessLicenseImage;
        file_put_contents($newPath, $newBLI);
        $response = Cloudder::upload(public_path()."/".$newPath)->getResult();
        $businessLicenseImageURL = $response['url'];
        unlink($newPath);

        $cm = new CloudinaryMapping();
        $cm->url = $response['url'];
        $cm->original_filename = $BLIOriginalName;
        $cm->save();

        $maskingFile = file_get_contents('images/masking.png');
        $taxImage = file_get_contents($request->taxImage->path());
        $taxImageON = $request->file('taxImage')->getClientOriginalName();        
        $newPath = 'cache/'.strtotime(date('c')).'.'.$taxImageON.'.png';
        $newTaxImage = $maskingFile."".$taxImage;
        file_put_contents($newPath, $newTaxImage);
        $response = Cloudder::upload(public_path()."/".$newPath)->getResult();
        $taxImageURL = $response['url'];
        unlink($newPath);

        $cm = new CloudinaryMapping();
        $cm->url = $response['url'];
        $cm->original_filename = $taxImageON;
        $cm->save();

        if(!empty($regis1->certificateImage)){
            $maskingFile = file_get_contents('images/masking.png');
            $certificateImage = file_get_contents($request->certificateImage->path());
            $certificateON = $request->file('certificateImage')->getClientOriginalName();        
            $newPath = 'cache/'.strtotime(date('c')).'.'.$certificateON.'.png';
            $newCertificateImage = $maskingFile."".$certificateImage;
            file_put_contents($newPath, $newCertificateImage);
            $response = Cloudder::upload(public_path()."/".$newPath)->getResult();
            $certificateImageURL = $response['url'];
            unlink($newPath);

            $cm = new CloudinaryMapping();
            $cm->url = $response['url'];
            $cm->original_filename = $certificateON;
            $cm->save();

             Certificate::create([
                 'id_company' => $getLatestCompanyId,
                 'certificate_image' => $certificateImageURL,
                 'status' => 'active'
             ]);
         }

         CompanyRequiredDocument::create([
             'id_company' => $getLatestCompanyId,
             'business_license_image' => $businessLicenseImageURL,
             'tax_id_image' => $taxImageURL,
             'status' => 'active'
         ]);


        return redirect('regis_3');
    }

    

    public function doRegis3(Request $request)
    {
        $url = '';
        if(!empty($request->photoImage)){
            $response = Cloudder::upload($request->photoImage->path())->getResult();
            $url = $response['url'];
        }

        $masteruser = UserPreDefine::create([
            'id_company' => $request->session()->get('companyIdSession'),
            'email' => $request->email,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'username' => $request->username,
            'job_title' => $request->jobTitle,
            'photo_image' => $url,
            'old_password' => $request->password,
            'new_password' => NULL,
            'status' => 'Active',
        ]);

        UserRole::create([
            'user_id' => $masteruser->id,
            'role_id' => 2, // 1 => master user
            'status' => 'Active',
            ]);

        return redirect('regis_success');
    }

    public function doRegisUser(Request $request)
    {
        $response = Cloudder::upload($request->photoImage->path())->getResult();
        $url = $response['url'];

        $isHead = 0;
        $cekRole = UserPreDefine::whereHas('UserRole',function($ur) use ($request){
            $ur->whereIn('role_id',[3,5])->where('role_id',$request->role);
        })->get();
        if(empty($cekRole[0])) $isHead = 1;

        $user = UserPreDefine::create([
            'id_company' => session()->get('userSession')[0]->id_company,
            'email' => $request->email,
            'first_name' => $request->firstName,
            'last_name' => $request->lastName,
            'username' => $request->username,
            'job_title' => $request->jobTitle,
            'photo_image' => $url,
            'old_password' => $request->password,
            'new_password' => NULL,
            'status' => 'Active',
            'is_head' => $isHead,
            'created_by' => session()->get('userSession')[0]->id,
        ]);

        UserRole::create([
            'user_id' => $user->id,
            'role_id' => $request->role,
            'status' => 'Active',
            ]);
        return back();
    }

    public function registerSuccess()
    {
        return view('cust-auth.register-company.register-success');
    }

    public function doLoginCompany(Request $request)
    {
        $login = Company::where('email',$request->email)
                            ->where('password',$request->password)
                            ->where('status','active')
                            ->get();

        if(count($login) != 0){
            $request->session()->put('companySession', $login);
            return redirect('home_login');
        }
            
        return redirect('/');
        
    }

    public function logoutCompany(Request $request)
    {
        $request->session()->forget('companySession');
        return redirect('/');
    }

    public function profile() {
        $data['addOnManagerQuota'] = CompanyAddOn::where('expired_date','>=',Carbon::now())
                ->where('status','confirmed')
                ->where('company_id',session('companySession')[0]->id)
                ->where('add_on_id',1)->sum('quantity');

        $data['addOnStaffQuota'] = CompanyAddOn::where('expired_date','>=',Carbon::now())
                ->where('status','confirmed')
                ->where('company_id',session('companySession')[0]->id)
                ->where('add_on_id',2)->sum('quantity');
                

        $data['currCompanyAddOn'] = CompanyAddOn::where('expired_date','>=',Carbon::now())
                ->where('status','confirmed')
                ->where('company_id',session('companySession')[0]->id)
                ->latest('created_at')
                ->get();

        $data['packageData'] = Package::all();
        $data['addOnData'] = AddOn::all();
        $data['businessEntity'] = ['PT','CV','PD'];
        $data['thisCompany'] = Company::find(session()->get('companySession')[0]->id);

        $user_manager = UserPreDefine::join('user_role','user_role.user_id','=','user.id')->where('id_company',session()->get('companySession')[0]->id)->whereIn('role_id',[3,5])->get();
        $data['manager_quota'] = $data['thisCompany']->CompanyPackage()->latest('created_at')->first()->Package()->first()->manager_account +  $data['addOnManagerQuota'] - count($user_manager);

        $user_staff = UserPreDefine::join('user_role','user_role.user_id','=','user.id')->where('id_company',session()->get('companySession')[0]->id)->whereIn('role_id',[4,6])->get();
        $data['staff_quota'] = $data['thisCompany']->CompanyPackage()->latest('created_at')->first()->Package()->first()->staff_account +  $data['addOnStaffQuota'] - count($user_staff);

        // return $data['thisCompany']->CompanyPackage()->where('status','approve')->latest('created_at')->first();
        $data['thisUser'] = UserPreDefine::find(session()->get('userSession')[0]->id);
        $userid = session()->get('userSession')[0]->id;

        if (session()->get('userSession')[0]->role_id == 2) {
            // return $user = UserPreDefine::leftjoin('user_role','user.id' ,'=','user_role.user_id')->leftjoin('role','role.id','=','user_role.role_id')->where('id_company',session()->get('companySession')[0]->id)->where('created_by','=',$userid)->select('user.*','role.name as role_name')->get();

            $data['user'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->join('user_role','user_role.user_id','=','user.id')->where('role_id','!=',2)->join('role','role.id','=','user_role.role_id')->select('user.*','role.name as role_name')->get();



            $companyUser = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->whereHas('UserRole',function($ur){
                $ur->whereIn('role_id',[3,5]);
            })->get();

            $roleArr = [];
            if(!empty($companyUser)){
                foreach ($companyUser as $key => $value) {
                    $roleArr[] =  $value->UserRole->role_id;
                }
            }

            $managerAddOnQty = CompanyAddOn::where('company_id',session()->get('companySession')[0]->id)->where('add_on_id',1)->where('status','confirmed')->where('expired_date','>=', Carbon::now() ) ->sum('quantity');

            if($managerAddOnQty != 0){
                $data['role']= Role::whereIn('id',[3,5])->get();
            }else{
                $data['role']= Role::whereNotIn('id',$roleArr)->whereIn('id',[3,5])->get();
            }
            
        }else if (session()->get('userSession')[0]->role_id == 3 ) {
            // $data['user'] = UserPreDefine::leftjoin('user_role','user.id' ,'=','user_role.user_id')->leftjoin('role','role.id','=','user_role.role_id')->where('id_company',session()->get('companySession')[0]->id)->where('created_by','=',$userid)->select('user.*','role.name as role_name')->get();

            //copy from master user
            $data['user'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->join('user_role','user_role.user_id','=','user.id')->where('role_id','!=',2)->join('role','role.id','=','user_role.role_id')->select('user.*','role.name as role_name')->get();

            $data['role']= Role::whereIn('id',[4])->get();

        }else if (session()->get('userSession')[0]->role_id == 5 ) {

            // $data['user'] = UserPreDefine::leftjoin('user_role','user.id' ,'=','user_role.user_id')->leftjoin('role','role.id','=','user_role.role_id')->where('id_company',session()->get('companySession')[0]->id)->where('created_by','=',$userid)->select('user.*','role.name as role_name')->get();

            //copy from master user
            $data['user'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->join('user_role','user_role.user_id','=','user.id')->where('role_id','!=',2)->join('role','role.id','=','user_role.role_id')->select('user.*','role.name as role_name')->get();

            $data['role']= Role::whereIn('id',[6])->get();

        }else{
            $data['user'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->join('user_role','user_role.user_id','=','user.id')->where('role_id','!=',2)->join('role','role.id','=','user_role.role_id')->select('user.*','role.name as role_name')->get();

            $data['role']= Role::whereIn('id',[9999])->get();
        }

        return view('post-buy-lead.profile',$data);

    }

    public function doExtendCompanyPackage(Request $request)
    {
        $latestExpiredDate = CompanyPackage::where('id_company',session()->get('companySession')[0]->id)->where('status','confirmed')->latest('created_at')->first()->expired_date;

        $cp = CompanyPackage::create([
            'id_company' => session()->get('companySession')[0]->id,
            'id_package' => $request->package,
            // 'status' => 'pending',
            'status' => 'confirmed',
            'year_duration' => $request->yearDuration,
            'expired_date' => Carbon::createFromFormat('Y-m-d', $latestExpiredDate)->addYear($request->yearDuration),
            'insert_from_profile' => 'true',
        ]);

        CompanyAddOn::whereIn('id',$request->listOfCompAddOnId)->update([
            'expired_date' => $cp->expired_date,
            ]);

        return back();
    }

    public function doRequestCompanyAddOn(Request $request)
    {
        CompanyAddOn::create([
            'company_id' => $request->id_company,
            'add_on_id' => $request->addonId,
            'request_from' => 'request addon',
            // 'expired_date' => Carbon::now()->addYear($request->duration),
            'expired_date' => $request->expired,
            'quantity' => $request->quantity,
            'status' => 'pending',
        ]);

        return back();
    }

    public function getAddOnPriceAjax($id)
    {
        return AddOn::find($id)->price;
    }

    public function doSetUserHeadStatus(Request $request)
    {
        if($request->status == "1"){
            
            $procurementRoleArr = [3,4];
            $salesRoleArr = [5,6];

            $currUser = UserPreDefine::find($request->id_user);
            if(in_array($currUser->UserRole()->first()->role_id, $procurementRoleArr)){
                $companyUser = UserPreDefine::where('user.id_company',$currUser->id_company)
                                ->join('user_role','user_role.user_id','=','user.id')
                                ->whereIn('role_id',$procurementRoleArr);
            }else if(in_array($currUser->UserRole()->first()->role_id, $salesRoleArr)){
                $companyUser = UserPreDefine::where('user.id_company',$currUser->id_company)
                                ->join('user_role','user_role.user_id','=','user.id')
                                ->whereIn('role_id',$salesRoleArr);
            }

            foreach ($companyUser->get() as $key => $value) {
                $currData = UserPreDefine::find($value->user_id);
                $currData->is_head = "0";
                $currData->save();
            }

        }

        $newHead = UserPreDefine::find($request->id_user);
        $newHead->is_head = $request->status;
        $newHead->save();

        return back();
    }

    public function doDeleteUser(Request $request)
    {
        $currUser = UserPreDefine::find($request->id);
        $currUser->delete();

        return back();
    }

    public function doEditUser(Request $request)
    {
        $currData = UserPreDefine::find($request->userId);
        $currData->first_name = $request->firstName;
        $currData->last_name = $request->lastName;
        $currData->email = $request->email;
        $currData->username = $request->username;
        $currData->job_title = $request->jobTitle;
        $currData->old_password = $request->password;
        if($request->has('photoImage')){
            $response = Cloudder::upload($request->photoImage->path())->getResult();
            $url = $response['url'];
            $currData->photo_image = $url;    
        }
        $currData->save();

        return back();
    }

    public function getUserDataAjax($id)
    {
        $data = UserPreDefine::find($id);

        return $data;
    }
    
}
