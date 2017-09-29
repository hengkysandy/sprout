<?php

namespace App\Http\Controllers;

use App\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function doInsertSection(Request $request)
    {
        Section::create([
            'section' => $request->section,
            'name' => $request->name,
            'status' => 'active'
        ]);

        return back();
    }

    public function doDeleteSection(Request $request)
    {
        $data = Section::find($request->id);
        $data->delete();

        return back();
    }

    public function getSectionDataAjax($id)
    {
        $response = [];
        $data = Section::find($id);
        $response['section'] = $data;
        return $response;
    }

    public function doUpdateSection(Request $request,$id)
    {
        $currData = Section::find($id);
        $currData->section = $request->section;
        $currData->name = $request->name;
        $currData->save();

        return back();
    }
}
