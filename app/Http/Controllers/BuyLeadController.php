<?php

namespace App\Http\Controllers;

use App\Area;
use App\BusinessCategory;
use App\BuyLead;
use App\BuyLeadBusinessCategory;
use App\BuyLeadCompany;
use App\BuyLeadStatus;
use App\BuyLeadUser;
use App\CloudinaryMapping;
use App\Company;
use App\CompanyStatus;
use App\CompanyBusinessCategory;
use App\Division;
use App\Group;
use App\Quotation;
use App\QuotationStatus;
use App\Revise;
use App\Section;
use App\ShippingTerm;
use App\Unit;
use App\UserPreDefine;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;
use Laravolt\Indonesia\Indonesia;

class BuyLeadController extends Controller
{
    public function postBuyLead() {
        $data['unitData'] = Unit::latest('created_at')->get();
        $data['sectionData'] = Section::all();
        $data['areaData'] = Area::all();
        $data['userCompany'] = UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->get();
        $indo = new Indonesia();
        $data['provinceData'] =  $indo->allProvinces()
        ->map(function ($val) {
           $search = array('Dki', 'Di');
           $replace = array('DKI', 'DI');
           $val->map_name = str_replace($search, $replace, $val->name);

            return $val;
        });

        $data['shippingData'] = ShippingTerm::all();
        // $data['buyLeadData'] = BuyLead::latest('created_at')->get();
        // return $data['buyLeadData'][1]->User()->first()->Company()->first()->CompanyStatusBy()->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id)->get();
        // if(!$data['buyLeadData'][0]->User()->first()->Company()->first()->CompanyStatusBy()->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id)->first()){
        //     return 'ada data';
        // }else{
        //     return 'tidak ada data';
        // }
        //=========================
        // $procurementRoleArr = [2,3,4];
        // $salesRoleArr = [5,6];

        // $data['buyLeadData'] = [];

        // if(in_array(session()->get('userSession')[0]->role_id, $procurementRoleArr)){
        //     // $data['buyLeadData'][] = ;
        //     foreach (BuyLead::all() as $key => $blData) {
        //         if($blData->User()->first()->id_company == session()->get('companySession')[0]->id){
        //             $data['buyLeadData'][] = $blData;
        //         }
        //     }
        // }else if(in_array(session()->get('userSession')[0]->role_id, $salesRoleArr)){
        //     foreach (BuyLead::latest('created_at')->get() as $key2 => $blData) {
        //         if($blData->User()->first()->Company()->first()->CompanyStatusBy()->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id)->first()){
        //             $data['buyLeadData'][] = $blData;
        //         }
        //     }
        // }
        // return $data['buyLeadData'];
        //==============

        $data['postBuyLead'] = BuyLead::whereHas('User', function($user) {
            $user->where('id_company', session()->get('companySession')[0]->id);
        })->get();

        $data['buyLeadList'] = BuyLead::whereHas('User', function($user) {
                $user->whereHas('Company', function($company){
                    $company->whereHas('CompanyStatusBy', function($companyStatusBy){
                        $companyStatusBy->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id);
                    });
                });
            })->whereHas('BuyLeadStatus',function($buyLeadStatus){
                $buyLeadStatus->where('id_status',2);
            });

        if( session()->get('userSession')[0]->role_id == 6 ){ //sales staff
            if( BuyLeadUser::where('id_user', session()->get('userSession')[0]->id)->where('status','active')->first() ){
                $data['buyLeadList'] = $data['buyLeadList']->doesntHave('quotation')->orWhereHas('BuyLeadUser',function($buyLeadUser){

                });
            }else if( BuyLeadUser::where('id_user', session()->get('userSession')[0]->id)->where('status','inactive')->first() ){
                $data['buyLeadList'] = $data['buyLeadList']->doesntHave('quotation');
            }else{
                $data['buyLeadList'] = $data['buyLeadList']->doesntHave('quotation')->doesntHave('BuyLeadUser');
            }
            
        }


        $data['buyLeadList'] =  $data['buyLeadList']->get();


        // $data['buyLeadList'] = BuyLead::whereHas('User', function($user) {
        //         $user->whereHas('Company', function($company){
        //             $company->whereHas('CompanyStatusBy', function($companyStatusBy){
        //                 $companyStatusBy->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id);
        //             });
        //         });
        //     })->get();

        if(session()->get('userSession')[0]->role_id == 2){
            $data['buyLeadList'] = BuyLead::whereHas('Quotation', function($quo) {
                $quo->whereIn('id_user', array_pluck(UserPreDefine::where('id_company',session()->get('companySession')[0]->id)->get(),'id'));
            })->get();
        }
        
        


        // else if(in_array(session()->get('userSession')[0]->role_id, $salesRoleArr)){
        //     foreach (BuyLead::latest('created_at')->get() as $key2 => $blData) {
        //         if($blData->User()->first()->Company()->first()->CompanyStatusBy()->where('id_status',16)->where('id_company_for',session()->get('companySession')[0]->id)->first()){
        //             $data['buyLeadData'][] = $blData;
        //         }
        //     }
        // }


        $data['anotherCompany'] = Company::where('company.id','!=',session()->get('companySession')[0]->id)
            ->get();

        return view('post-buy-lead.master-user.post-buy-lead', $data);
    }

    public function historyRfq()
    {
        $data['buyLeadDataDone'] = BuyLead::join('buy_lead_status','buy_lead_status.id_buy_lead','=','buy_lead.id')->where('id_status',2)->select('buy_lead.*','buy_lead_status.id_status')->get(); //2 = release
        return view('post-buy-lead.history-rfq', $data); 
    }

    public function doAssignCompanyBuyLead(Request $request)
    {
        for ($i=0; $i < count($request->listOfCompanyId); $i++) {
            CompanyStatus::create([
                'id_company_by' => session()->get('companySession')[0]->id,
                'id_company_for' => $request->listOfCompanyId[$i],
                'id_status' => 16, //assigned
                'status' => 'active',
            ]);
        }

        $response = [];
        $notAssignedComp = [];
        $assignedComp = [];

        $data['anotherCompany'] = Company::where('company.id','!=',session()->get('companySession')[0]->id)
            ->get();

        foreach ($data['anotherCompany'] as $acKey => $acData) {
            if(empty($acData->CompanyStatusFor()->first())){
                $r['notAssigned'] = $acData;
                $notAssignedComp[] = $r['notAssigned'];
            }else if($acData->CompanyStatusFor()->where('id_status','!=',16)->first() ){
                $r['notAssigned'] = $acData;
                $notAssignedComp[] = $r['notAssigned'];
            }
        }

        $response['notAssigned'] = $notAssignedComp;

        foreach ($data['anotherCompany'] as $acKey => $acData) {
            if($acData->CompanyStatusFor()->where('id_status','=',16)->first() && $acData->CompanyStatusFor()->where('id_company_by',session()->get('companySession')[0]->id)->first()){
                $r['assigned'] = $acData;
                $assignedComp[] = $r['assigned'];
            }
            
        }
        
        $response['assigned'] = $assignedComp;

        return response()->json($response);
    }

    public function doRemoveAssignedCompany(Request $request)
    {
        $currData = CompanyStatus::where('id_company_by', session()->get('companySession')[0]->id)
            ->where('id_company_for',$request->id)
            ->where('id_status',16)
            ->first();

        $currData->delete();

        $response = [];
        $notAssignedComp = [];
        $assignedComp = [];

        $data['anotherCompany'] = Company::where('company.id','!=',session()->get('companySession')[0]->id)
            ->get();

        foreach ($data['anotherCompany'] as $acKey => $acData) {
            if(empty($acData->CompanyStatusFor()->first())){
                $r['notAssigned'] = $acData;
                $notAssignedComp[] = $r['notAssigned'];
            }else if($acData->CompanyStatusFor()->where('id_status','!=',16)->first() ){
                $r['notAssigned'] = $acData;
                $notAssignedComp[] = $r['notAssigned'];
            }
        }

        $response['notAssigned'] = $notAssignedComp;

        foreach ($data['anotherCompany'] as $acKey => $acData) {
            if($acData->CompanyStatusFor()->where('id_status','=',16)->first() && $acData->CompanyStatusFor()->where('id_company_by',session()->get('companySession')[0]->id)->first()){
                $r['assigned'] = $acData;
                $assignedComp[] = $r['assigned'];
            }
            
        }
        
        $response['assigned'] = $assignedComp;

        return response()->json($response);
    }

    public function doInsertBuyLead(Request $request)
    {
        // item: "Plate Material",
        // amount: "11",
        // shortDescription: "Ini harganya harus bisa murah dan kualitas bagus",
        // unit: "2",
        // totalPrice: "50000000",
        // paymentTerm: "Down Payment 50%, Installment 6 Months",
        // shippingTerm: "1",
        // province: "12",
        // city: "1203",
        // closedDate: "2017-12-07",
        // deliveryDays: "2",
        // area: "2",
        // section: [
        // "13",
        // null
        // ],
        // division: [
        // "-"
        // ]
        $company_id = Company::find(session()->get('userSession')[0]->id_company)->id;
        $dateNow = Carbon::now()->format('mdy');
        $buyLeadId = count(BuyLead::all())+1;
        $code = $company_id.$dateNow.$buyLeadId;

        $maskedFileUrl = $request->has('document') ? $this->cloudinaryMaskingFile($request->document) : "";

        $currBuyLead = BuyLead::create([
            'buy_lead_code' => $code,
            'admin_id' => NULL,
            'id_user' => session()->get('userSession')[0]->id,
            'id_city' => $request->city,
            'id_province' => $request->province,
            'id_unit' => $request->unit,
            'id_shipping_item' => $request->shippingTerm,
            'id_area' => $request->area,
            'item' => $request->item,
            'amount' => $request->amount,
            'short_description' => $request->shortDescription,
            'total_price' => $request->totalPrice,
            'payment_term' => $request->paymentTerm,
            'closed_date' => $request->closedDate,
            'delivery_day' => $request->deliveryDays,
            'document' => $maskedFileUrl,
            // 'approved_vendor_only' => $vendor,
            'status' => 'pending',
        ]);

        for ($i=0; $i < count($request->section); $i++) {
 
            if( $request->section[$i] != NULL){

                $divId = (
                ( empty($request->division[$i]) ) ? NULL :
                 ( ( $request->division[$i] == "-" ) ? NULL :  $request->division )
                );

                $groupId = (
                ( empty($request->group[$i]) ) ? NULL :
                 ( ( $request->group[$i] == "-" ) ? NULL :  $request->group )
                );

                $currBC = BusinessCategory::create([
                    'id_section' => $request->section[$i],
                    'id_division' => $divId,
                    'id_group' =>$groupId,
                    'status' => 'active'
                ]);

                BuyLeadBusinessCategory::create([
                    'buy_lead_id' => $currBuyLead->id,
                    'business_category_id' => $currBC->id,
                    'status' => 'active',
                ]);
            }

            

        }

        BuyLeadCompany::create([
            'id_buy_lead' => $currBuyLead->id,
            'id_company' => $company_id,
            'status' => 'active',
        ]);

        BuyLeadStatus::create([
            'id_buy_lead' => $currBuyLead->id,
            'id_status' => 10, //pending
            'status' => 'active',
        ]);

        return back();
        
    }

    public function doChangeStatusBuyLead(Request $request)
    {
        $data = BuyLeadStatus::where('id_buy_lead',$request->idBuyLead)->first();
        $data->id_status = $request->idStatus;
        $data->save();

        return back();
    }

    public function listBuyLead(request $request)
    {
        $userid = session()->get('userSession')[0]->id;
        $buylead = BuyLead::leftjoin('shipping_term','buy_lead.id_shipping_item','=','shipping_term.id')
            ->leftjoin('user','buy_lead.id_user','=','user.id')
            ->leftjoin('company','user.id_company','=','company.id')
            ->leftjoin('quotation','quotation.id_buy_lead','=','buy_lead.id')
            ->leftjoin('quotation_status','quotation_status.id_quotation','=','quotation.id')
            ->leftjoin('status','quotation_status.id_status','status.id')
            ->leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')
            ->leftjoin(DB::Raw('(select buy_lead_user.id_user, buy_lead_user.status, buy_lead_user.id_buy_lead from buy_lead left join buy_lead_user on buy_lead.id = buy_lead_user.id_buy_lead where linked_for = 0)tablea'),'tablea.id_buy_lead','=','buy_lead.id')
            ->whereNull('quotation.id')
            ->orWhere('quotation.id_user', $userid)
            ->groupby('buy_lead.id');

        if(session()->get('userSession')[0]->role_id == 5)
        {
            $buylead = $buylead->leftjoin(DB::raw('(select count(buy_lead_user.id) as count, buy_lead_user.id_buy_lead, buy_lead_user.status as request_status from buy_lead left join buy_lead_user on buy_lead.id = buy_lead_user.id_buy_lead where linked_for = 1 group by buy_lead.id)tableb'),'tableb.id_buy_lead','=','buy_lead.id')
                ->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name', 'company.business_entity as c_entity','quotation.id as q_id','status.name','tablea.id_user as user_assign','tablea.status as assign_status', 'tableb.count','tableb.request_status')
                ->get();

            return view('search-buy-lead.sales-manager.buy-lead-list', compact('buylead'));
        }
        else if(session()->get('userSession')[0]->role_id == 6)
        {
            $buylead = $buylead->leftjoin(DB::raw('(select count(buy_lead_user.id) as count, buy_lead_user.id_buy_lead, buy_lead_user.status as request_status from buy_lead left join buy_lead_user on buy_lead.id = buy_lead_user.id_buy_lead where linked_for = 1 and buy_lead_user.id_user ='.$userid.' group by buy_lead_user.id)tableb'),'tableb.id_buy_lead','=','buy_lead.id')
                ->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name', 'company.business_entity as c_entity','quotation.id as q_id','status.name', 'tablea.id_user as user_assign', 'tablea.status as assign_status','tableb.count','tableb.request_status')
                ->get();

            return view('search-buy-lead.sales-staff.buy-lead-list', compact('buylead'));
            return $buylead;
        }
    }

    public function showItem(Request $request, $id)
    {
        $data['sectionData'] = Section::all();
        $buylead = BuyLead::leftjoin('shipping_term','buy_lead.id_shipping_item','=','shipping_term.id')
            ->leftjoin('user','buy_lead.id_user','=','user.id')
            ->leftjoin('company','user.id_company','=','company.id')
            ->leftjoin('indonesia_cities','buy_lead.id_city','=','indonesia_cities.id')
            ->leftjoin('unit','buy_lead.id_unit','=','unit.id')
            ->leftjoin('indonesia_provinces','indonesia_cities.province_id','=','indonesia_provinces.id')
            ->leftjoin('area','buy_lead.id_area','=','area.id')
            ->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name','indonesia_cities.name as city_name', 'unit.name as unit' ,'indonesia_provinces.name as province_name','area.name as a_name')
            ->where('buy_lead.id',$id)
            ->get();
        $buyleaduserassign = BuyLead::leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')
            ->leftjoin('user','user.id','=','buy_lead_user.id_user')
            ->where('buy_lead.id',$id)
            ->where('linked_for',0)
            ->select('buy_lead.id','buy_lead_user.*','user.first_name','user.last_name')
            ->first();

        $buyleaduserrequest = BuyLead::leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')
            ->leftjoin('user','user.id','=','buy_lead_user.id_user')
            ->where('buy_lead.id',$id)
            ->where('linked_for',1)
            ->select('buy_lead.id','buy_lead_user.*','user.first_name','user.last_name');
        $area = Area::all();
        $shippingterm = ShippingTerm::all();
        if( in_array(session()->get('userSession')[0]->role_id, [2,5]) )
        {
            $userid = session()->get('userSession')[0]->id;
            $user = UserPreDefine::where('created_by', $userid)->get();
            $buyleaduserrequest = $buyleaduserrequest->get();
/*            return $buyleaduserrequest;
*/            return view('search-buy-lead.sales-manager.item', compact('buylead','area','shippingterm','user','buyleaduserassign','buyleaduserrequest'));
        }
        else if(session()->get('userSession')[0]->role_id == 6){
            $userid = session()->get('userSession')[0]->id;
            $buyleaduserrequest = $buyleaduserrequest->where('buy_lead_user.id_user', $userid)->first();
            /*return $buyleaduserrequest;*/
            return view('search-buy-lead.sales-staff.item', compact('buylead','area','shippingterm','buyleaduserassign','buyleaduserrequest'));
        }else if(session()->get('userSession')[0]->role_id == 3){ //procurement manager
            $data['quotation'] = Quotation::where('id_buy_lead',$id)->get();
            $data['buyLead'] = BuyLead::find($id);
            // $data['quotation'][0]->BuyLead()->first();
            return view('post-buy-lead.item', $data);
        }
        return 'tidak ada view untuk role ini';
    }

    public function detailItem($id)
    {
        $data['quotation'] = Quotation::where('id',$id)->latest('created_at')->first();
        $data['buyLead'] = BuyLead::find($data['quotation']->id_buy_lead);
        $data['revise'] = Revise::where('id_quotation',$data['quotation']->id)->orderBy('created_at','ASC')->get();
        $data['shippingTerm'] = ShippingTerm::all();

        $indo = new Indonesia();
        $data['city'] = $indo->allCities();

        $data['area'] = Area::all();


        return view('post-buy-lead.detail-item', $data);
    }

    public function doCreateRevise(Request $request)
    {
        // quotation_id: "5",1
        // amount: "20",1
        // totalPrice: "50000000",1
        // city: "Kota Jakarta Barat",1
        // shippingTerm: "1",1
        // delivery_day: "1",1
        // area: "2", 
        // paymentTerm: "Down Payment 50%, Installment 6 Months",
        // quotationDocument: { }1

        $maskedFileUrl = $this->cloudinaryMaskingFile($request->quotationDocument);

        $currQuotation = Quotation::find($request->quotation_id);

        Revise::create([
            'id_quotation' => $currQuotation->id,
            'id_user' => $currQuotation->id_user,
            'total_price' => $currQuotation->total_price,
            'document' => $currQuotation->document,
            'status' => 'active',
            'city' => $currQuotation->city,
            'id_shipping_term' => $currQuotation->id_shipping_term,
            'delivery_day' => $currQuotation->delivery_day,
            'id_area' => $currQuotation->id_area,
            'payment_term' => $currQuotation->payment_term,
            // 'id_province' => $currQuotation->id_province, //gak ada province di form
            'amount' => $currQuotation->amount
        ]);

        $currQuotation->amount = $request->amount;
        $currQuotation->total_price = $request->totalPrice;
        $currQuotation->city = $request->city;
        $currQuotation->amount = $request->amount;
        $currQuotation->id_shipping_term = $request->shippingTerm;
        $currQuotation->delivery_day = $request->delivery_day;
        $currQuotation->document = $maskedFileUrl;
        $currQuotation->id_user = session()->get('userSession')[0]->id;
        $currQuotation->id_area = $request->area;
        // $currQuotation->id_province = $request->amount; //gak ada province di form
        $currQuotation->payment_term = $request->paymentTerm;
        $currQuotation->save();

        return back();
    }

    public function acceptBuyLead(Request $request, $id)
    {   
        $userid = session()->get('userSession')[0]->id;
        BuyLeadUser::where('id_user',$userid)->where('id_buy_lead',$id)->update([
            'status' => 'active',
            ]);
        return back();
    }

    public function doApproveQuotation(Request $request)
    {
        QuotationStatus::where('id_quotation',$request->id)->update([
            'id_status' => 6, //approved
            ]);
        return back();
    }

    public function createQuotation(Request $request)
    {
        $maskingFile = file_get_contents('images/masking.png');
        $images = file_get_contents($request->document->path());
        $originalName = $request->file('document')->getClientOriginalName();        
        $newPath = 'cache/'.strtotime(date('c')).'.'.$originalName.'.png';
        $newBLI = $maskingFile."".$images;
        file_put_contents($newPath, $newBLI);
        $response = Cloudder::upload(public_path()."/".$newPath)->getResult();
        $imageURL = $response['url'];
        unlink($newPath);

        $cm = new CloudinaryMapping();
        $cm->url = $response['url'];
        $cm->original_filename = $originalName;
        $cm->save();

        $quotation = Quotation::create([
            'id_buy_lead' => $request->buylead,
            'id_user' => session()->get('userSession')[0]->id,
            'city' => $request->city,
            'id_shipping_term' => $request->shippingTerm,
            'id_area' => $request->area,
            'amount' => $request->amount,
            'total_price' => $request->totalPrice,
            'payment_term' => $request->paymentTerm,
            'delivery_day' => $request->deliveryDays,
            'document' => $imageURL,
            'status' => 'submitted',
        ]);

        $quotationstatus = QuotationStatus::create([
            'id_quotation' => $quotation->id,
            'id_status' => 14, //submitted 
            'status' => 'active',
            ]);
        return redirect('detailItem/'.$quotation->id); 
    }

    public function assignUser(Request $request, $id)
    {
        for ($i=0; $i < count($request->assign); $i++) { 
            BuyLeadUser::create([
            'id_buy_lead' => $id,
            'id_user' => $request->assign[$i],
            'linked_for' => 0, //0 for assign
            'status' => 'inactive',
            ]);
        }
        return back();
    }

    public function requestBuyLead(Request $request, $id)
    {
        $userid = session()->get('userSession')[0]->id;
        BuyLeadUser::create([
            'id_buy_lead' => $id,
            'id_user' => $userid,
            'linked_for' => 1, //0 for assign
            'status' => 'inactive',
        ]);
        return back();
    }
    public function acceptRequest(Request $request, $buylead, $user)
    {
        BuyLeadUser::where('id_buy_lead',$buylead)->where('id_user',$user)->where('linked_for','=','1')->update([
            'status' => 'active',
        ]);
        BuyLeadUser::where('id_buy_lead',$buylead)->where('id_user','<>',$user)->where('linked_for','=','1')->delete();
        return back();
    }

    public function companyDatabase()
    {
        $procurementRoleArr = [3,4];
        $salesRoleArr = [5,6];
        $procurementStatusArr = [5,6,7];
        $salesStatusArr = [4,15];

        if( session()->get('userSession')[0]->role_id == 2 ) $usedArr = [5,6,7,4,15];
        
        if(in_array(session()->get('userSession')[0]->role_id, $procurementRoleArr)){
            $usedArr = $procurementStatusArr;
        }else if(in_array(session()->get('userSession')[0]->role_id, $salesRoleArr)){
            $usedArr = $salesStatusArr;
        }
        $currCompanyCategoryEloquent = CompanyBusinessCategory::where('id_company', session()->get('userSession')[0]->id_company)->get();
        $listOfSectionId = [];
        foreach ($currCompanyCategoryEloquent as $companyBC) {
            $listOfSectionId[] = $companyBC->BusinessCategory->Section->id;
        }

        $r['companyBC'] = CompanyBusinessCategory::whereHas('BusinessCategory',function($bc) use ($listOfSectionId){
            $bc->whereIn('id_section',$listOfSectionId)
                ->where('status','company category');
        })
        ->where('id_company','!=',session()->get('userSession')[0]->id_company)
        ->get();

        $response = [];
        foreach ($r['companyBC'] as $val) {
            $r['company'] = $val->Company()->first();

            $r['company_city'] = $r['company']->City()->first()->name;

            $r['section'] = Section::find($r['companyBC'][0]->BusinessCategory->id_section);

            $r['company_status'] = CompanyStatus::where('id_company_for',$r['company']->id)
                                    ->where('id_company_by', session()->get('userSession')[0]->id_company)
                                    ->whereIn('id_status',$usedArr)
                                    ->get();
            foreach ($r['company_status'] as $key => $value) {
                $r['company_status_arr'][] = $value->id_status;
            }
            

            $response[] = $r;
        }
        // return $response;
        $sectionData = Section::all();

        return view('post-buy-lead.master-user.company-database',compact('response','sectionData')); 
        // return view('post-buy-lead.company-database')->with('response',$response); 
        // return view('post-buy-lead.company-database')->with('response',json_decode(json_encode($response)));
    }

    public function doChangeCompanyStatus(Request $request)
    {
        $procurementRoleArr = [3,4];
        $salesRoleArr = [5,6];
        $procurementStatusArr = [5,6,7];
        $salesStatusArr = [4,15];

        if(in_array(session()->get('userSession')[0]->role_id, $procurementRoleArr) || $request->type == "procurement"){
            $usedArr = $procurementStatusArr;
        }else if(in_array(session()->get('userSession')[0]->role_id, $salesRoleArr) || $request->type == "sales"){
            $usedArr = $salesStatusArr;
        }
        $checkData = CompanyStatus::where('id_company_for',$request->id)
                                    ->where('id_company_by', session()->get('userSession')[0]->id_company)
                                    ->whereIn('id_status', $usedArr)
                                    ->first();

        if($checkData){
            //update data
            $checkData->id_status = $request->status;
            $checkData->save();
        }else{
            //insert new data
            CompanyStatus::create([
                'id_company_by' => session()->get('userSession')[0]->id_company,
                'id_company_for' => $request->id,
                'id_status' => $request->status,
                'status' => 'active',
            ]);
        }

        return back();

    }

}