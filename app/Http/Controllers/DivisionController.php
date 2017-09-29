<?php

namespace App\Http\Controllers;

use App\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function doInsertDivision(Request $request)
    {
        Division::create([
            'section_id' => $request->sectionId,
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active'
        ]);

        return back();
    }

    public function doDeleteDivision(Request $request)
    {
        $data = Division::find($request->id);
        $data->delete();

        return back();
    }

    public function getDivisionDataAjax($id)
    {
        $response = [];
        $data = Division::find($id);
        $response['division'] = $data;
        return $response;
    }

    public function doUpdateDivision(Request $request,$id)
    {
        $currData = Division::find($id);
        $currData->section_id = $request->sectionId;
        $currData->name = $request->name;
        $currData->description = $request->description;
        $currData->save();

        return back();
    }

    public function loadDivisionDataAjax($sectionId)
    {
        $data = Division::where('section_id',$sectionId)->get();
        return $data;
    }
}
