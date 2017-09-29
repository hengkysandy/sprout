<?php

namespace App\Http\Controllers;

use App\Area;
use App\BusinessCategory;
use App\BuyLead;
use App\BuyLeadBusinessCategory;
use App\BuyLeadCompany;
use App\BuyLeadStatus;
use App\CloudinaryMapping;
use App\Company;
use App\Division;
use App\Group;
use App\Section;
use App\ShippingTerm;
use App\Unit;
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

}