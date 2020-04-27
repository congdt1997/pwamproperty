<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
class LocationController extends Controller
{
    //
    public function getList()
    {
        $location = Location::all();
        return view('admin.location.list', ['location'=>$location]);
    }
    public function getAdd()
    {
        return view('admin.location.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'locationName' => 'required|min:3'
            ],[
                'locationName.required'=>'You must input this field!!!',
                'locationName.min'=>'You must more than 3 characters!',
            ]);
        $location = new Location();
        $location -> locationName = $request -> locationName;
        $location -> save();
        return redirect('admin/location/add')->with('notification', 'Add successfully');
    }

    public function getEdit($id)
    {
        $location = Location::find($id);
        return view('admin.location.edit',['location'=>$location]);
    }
    public function postEdit(Request $request,$id)
    {
        $location = Location::find($id);
        $this -> validate($request,
            [
                'locationName' => 'required|min:3|unique:locations'
            ],[
                'locationName.required'=>'You must input this field!!!',
                'locationName.unique'=>'this is already exist!',
                'locationName.min'=>'You must more than 3 characters!',
            ]);
        $location -> locationName = $request -> locationName;
        $location -> save();
        return redirect('admin/location/list')->with('notification', 'Edit successfully');
    }

    public function getDelete($id)
    {
        $location = Location::find($id);
        $location -> delete();
        return redirect('admin/location/list')->with('notification', 'Delete successfully');
    }
}
