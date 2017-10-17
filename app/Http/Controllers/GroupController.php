<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    public function doInsertGroup(Request $request)
    {
        Group::create([
            'division_id' => $request->divisionId,
            'name' => $request->name,
            'description' => $request->description,
            'status' => 'active'
        ]);

        return back();
    }

    public function doDeleteGroup(Request $request)
    {
        $data = Group::find($request->id);
        $data->delete();

        return back();
    }

    public function getGroupDataAjax($id)
    {
        $response = [];
        $data = Group::find($id);
        $response['group'] = $data;
        return $response;
    }

    public function doUpdateGroup(Request $request,$id)
    {
        $currData = Group::find($id);
        $currData->name = $request->name;
        $currData->description = $request->description;
        $currData->save();

        return back();
    }

    public function loadGroupDataAjax($divisionId)
    {
        $data = Group::where('division_id',$divisionId)->get();
        return $data;
    }
}
