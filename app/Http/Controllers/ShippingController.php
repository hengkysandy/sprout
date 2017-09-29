<?php

namespace App\Http\Controllers;

use App\ShippingTerm;
use Illuminate\Http\Request;

class ShippingController extends Controller
{
    public function shippingTerm() {
        $shippingTermData = ShippingTerm::latest('created_at')->get();
    	return view('dashboard.shipping-term',compact('shippingTermData'));
    }

    public function doInsertShippingTerm(Request $request)
    {
        ShippingTerm::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active'
        ]);

        return back();
    }

    public function doDeleteShippingTerm(Request $request)
    {
        $data = ShippingTerm::find($request->id);
        $data->delete();

        return back();
    }

    public function getShippingTermDataAjax($id)
    {
        $response = [];
        $data = ShippingTerm::find($id);
        $response['shippingTerm'] = $data;
        return $response;
    }

    public function doUpdateShippingTerm(Request $request,$id)
    {
        $currData = ShippingTerm::find($id);
        $currData->name = $request->name;
        $currData->description = $request->description;
        $currData->save();

        return back();
    }
}
