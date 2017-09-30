<?php

namespace App\Http\Controllers;

use App\Area;
use App\BusinessCategory;
use App\BuyLead;
use App\BuyLeadBusinessCategory;
use App\BuyLeadCompany;
use App\BuyLeadUser;
use App\BuyLeadStatus;
use App\CloudinaryMapping;
use App\Company;
use App\Quotation;
use App\QuotationStatus;
use App\Division;
use App\Group;
use App\Section;
use App\ShippingTerm;
use App\UserPreDefine;
use App\Unit;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use JD\Cloudder\Facades\Cloudder;
use Laravolt\Indonesia\Indonesia;

class BuyLeadController extends Controller
{
    public function postBuyLead() {
        $data['unitData'] = Unit::latest('created_at')->get();
        $data['sectionData'] = Section::all();
        $data['divisionData'] = Division::all();
        $data['groupData'] = Group::all();
        $data['areaData'] = Area::all();
        $indo = new Indonesia();
        $data['provinceData'] = $indo->allProvinces();
        $data['cityData'] = $indo->allCities();
        $data['shippingData'] = ShippingTerm::all();
        $data['buyLeadData'] = BuyLead::latest('created_at')->get();

        return view('post-buy-lead.procurement-staff.post-buy-lead', $data);

        // if (session()->get('userSession')[0]->role_id == 2) {
        //     return view('post-buy-lead.procurement-staff.post-buy-lead', $data);
        // }else if (session()->get('userSession')[0]->role_id == 3) {
        //     return view('post-buy-lead.procurement-manager.post-buy-lead', $data);
        // }

    	
    }

    public function doInsertBuyLead(Request $request)
    {
        $company_id = Company::find(session()->get('userSession')[0]->id_company)->id;
        $dateNow = Carbon::now()->format('mdy');
        $buyLeadId = count(BuyLead::all())+1;
        $code = $company_id.$dateNow.$buyLeadId;
        $vendor = $request->has('vendorCbx') == false ? 'no' : 'yes';

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
            'document' => $imageURL,
            'approved_vendor_only' => $vendor,
            'status' => 'pending',
        ]);

        for ($i=0; $i < count($request->section); $i++) {

            $currBC = BusinessCategory::create([
                'id_section' => $request->section[$i],
                'id_group_division' => $request->group[$i],
                'status' => 'active'
            ]);

            BuyLeadBusinessCategory::create([
                'buy_lead_id' => $currBuyLead->id,
                'business_category_id' => $currBC->id,
                'status' => 'active',
            ]);

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
        $buylead = BuyLead::leftjoin('shipping_term','buy_lead.id_shipping_item','=','shipping_term.id')->leftjoin('user','buy_lead.id_user','=','user.id')->leftjoin('company','user.id_company','=','company.id')->leftjoin('quotation','quotation.id_buy_lead','=','buy_lead.id')->leftjoin('quotation_status','quotation_status.id_quotation','=','quotation.id')->leftjoin('status','quotation_status.id_status','status.id')->whereNull('quotation.id')->orWhere('quotation.id_user', $userid);
        if(session()->get('userSession')[0]->role_id == 5)
        {
            $buylead = $buylead->leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')->leftjoin(DB::Raw('(select buy_lead_user.id_user, buy_lead_user.status, buy_lead_user.id_buy_lead from buy_lead left join buy_lead_user on buy_lead.id = buy_lead_user.id_buy_lead where linked_for = 0)tablea'),'tablea.id_buy_lead','=','buy_lead.id')->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name', 'company.business_entity as c_entity','quotation.id as q_id','status.name','tablea.id_user as user_assign','tablea.status as assign_status')->get();
            /*return $buylead*/;
            return view('search-buy-lead.sales-manager.buy-lead-list', compact('buylead'));
        }
        else if(session()->get('userSession')[0]->role_id == 6)
        {
            $buylead = $buylead->leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')->leftjoin(DB::Raw('(select buy_lead_user.id_user, buy_lead_user.status, buy_lead_user.id_buy_lead from buy_lead left join buy_lead_user on buy_lead.id = buy_lead_user.id_buy_lead where linked_for = 0)tablea'),'tablea.id_buy_lead','=','buy_lead.id')->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name', 'company.business_entity as c_entity','quotation.id as q_id','status.name', 'tablea.id_user as user_assign', 'tablea.status as assign_status')->get();
            return view('search-buy-lead.sales-staff.buy-lead-list', compact('buylead'));
        }
    }

    public function showItem(Request $request, $id)
    {
        $buylead = BuyLead::leftjoin('shipping_term','buy_lead.id_shipping_item','=','shipping_term.id')->leftjoin('user','buy_lead.id_user','=','user.id')->leftjoin('company','user.id_company','=','company.id')->leftjoin('indonesia_cities','buy_lead.id_city','=','indonesia_cities.id')->leftjoin('unit','buy_lead.id_unit','=','unit.id')->leftjoin('indonesia_provinces','indonesia_cities.province_id','=','indonesia_provinces.id')->leftjoin('area','buy_lead.id_area','=','area.id')->select('buy_lead.*', 'shipping_term.name as st_name','company.name as c_name','indonesia_cities.name as city_name', 'unit.name as unit' ,'indonesia_provinces.name as province_name','area.name as a_name')->where('buy_lead.id',$id)->get();
        $buyleaduserassign = BuyLead::leftjoin('buy_lead_user','buy_lead_user.id_buy_lead','=','buy_lead.id')->leftjoin('user','user.id','=','buy_lead_user.id_user')->where('buy_lead.id',$id)->where('linked_for',0)->select('buy_lead.id','buy_lead_user.*','user.first_name','user.last_name')->first();
        $area = Area::all();
        $shippingterm = ShippingTerm::all();
        if(session()->get('userSession')[0]->role_id == 5)
        {
            $userid = session()->get('userSession')[0]->id;
            $user = UserPreDefine::where('created_by', $userid)->get();
            return view('search-buy-lead.sales-manager.item', compact('buylead','area','shippingterm','user','buyleaduserassign'));
        }
        else{
            return view('search-buy-lead.sales-staff.item', compact('buylead','area','shippingterm','buyleaduserassign'));
        }
    }

    public function acceptBuyLead(Request $request, $id)
    {   
        $userid = session()->get('userSession')[0]->id;
        BuyLeadUser::where('id_user',$userid)->where('id_buy_lead',$id)->update([
            'status' => 'active',
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
        return back(); 
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

}