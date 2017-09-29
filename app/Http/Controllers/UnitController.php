<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function create(Request $request)
    {
        Unit::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active'
        ]);

        return back();
    }

    public function delete(Request $request)
    {
        $data = Unit::find($request->id);
        $data->delete();

        return back();
    }

    public function ajax($id)
    {
        $response = [];
        $data = Unit::find($id);
        $response['unit'] = $data;
        return $response;
    }

    public function update(Request $request,$id)
    {
        $currData = Unit::find($id);
        $currData->name = $request->name;
        $currData->description = $request->description;
        $currData->save();

        return back();
    }
}
