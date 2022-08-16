<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shopping;

class ShoppingController extends Controller
{
    function list($id = null)
    {
        return  $id ? Shopping::find($id) : Shopping::all();
    }
    function add(Request $request)
    {
        $Shopping = new Shopping;
        $Shopping->Name = $request->Name;
        $Shopping->CreatedDate = $request->CreatedDate;
        $result = $Shopping->save();
        if ($result) {
            return ["Result" => "Shopping has been added"];
        } else {
            return ["Result" => "Shopping failed to added"];
        }
    }
    function update(Request $request)
    {
        $Shopping = Shopping::find($request->id);
        $Shopping->Name = $request->Name;
        $Shopping->CreatedDate = $request->CreatedDate;
        $result = $Shopping->save();
        if ($result) {
            return ["Result" => "Shopping has been updated"];
        } else {
            return ["Result" => "Shopping failed to updated"];
        }
    }
    function search($name)
    {
        return Shopping::where("Name", "like", "%" . $name . "%")->get();
    }
    function delete($id)
    {
        $Shopping = Shopping::find($id);
        $result = $Shopping->delete();
        if ($result) {
            return ["Result" => "Shopping has been deleted "];
        } else {
            return ["Result" => "Shopping failed to deleted "];
        }
    }
}
