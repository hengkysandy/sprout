<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function city_area() {
        $areaData = Area::all();
    	return view('dashboard.city-area', compact('areaData'));
    }

    public function doInsertArea(Request $request)
    {
        Area::create([
            'name' =>$request->name,
            'status' => 'active'
        ]);

        return back();
    }

    public function doDeleteArea(Request $request)
    {
        $data = Area::find($request->id);
        $data->delete();

        return back();
    }

    public function getAreaDataAjax($id)
    {
        $response = [];
        $data = Area::find($id);
        $response['area'] = $data;
        return $response;
    }

    public function doUpdateArea(Request $request,$id)
    {
        $currData = Area::find($id);
        $currData->name = $request->name;
        $currData->save();

        return back();
    }
}
