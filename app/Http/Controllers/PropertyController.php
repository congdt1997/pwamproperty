<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;
use App\TypeOfProperty;
use App\Review;
use App\User;
use App\Property;


class PropertyController extends Controller
{
    public function getList(){
        $properties = Property::all();
        $user = User::all();
        $location = Location::all();
        $typeofproperties = TypeOfProperty::all();
        $review = Review::all();
        return view('admin.property.list',['properties'=> $properties, 'user'=> $user, 'typeofproperties'=> $typeofproperties, 'review'=> $review, 'location' => $location]);
    }
    public function getAdd(){
        $user = User::all();
        $location = Location::all();
        $typeofproperties = TypeOfProperty::all();
        return view('admin.property.add',['user'=> $user, 'typeofproperties'=> $typeofproperties, 'location' => $location]);
    }
    public function postAdd(Request $request){

        $this -> validate($request, [
            'introduction' => 'required|min:5',
            'detail' => 'required|min:5',
            'detailaddress' => 'required|min:8',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'acreage' => 'required',
            'idLocation' => 'required',
            'idType' => 'required'
        ],[
            'introduction.required' =>'You have to enter some introduction',
            'introduction.min'=>'You must input more than 5 characters',
            'detail.required' =>'You have to enter the detail of the property',
            'detail.min'=>'You must input more than 5 characters',
            'idLocation.required' =>'You have to select location',
            'idType.required' =>'You have to select type of property',
            'detailaddress.required' =>'You have to enter detail address',
            'detailaddress.min' =>'You must input more than 10 characters',
            'bedroom.required'=>'You must input the number of bedroom',
            'bathroom.required' =>'You have to enter number of bathroom',
            'acreage.required' =>'You have to enter the acreage'
        ]);


        $properties = new Property();

        $properties -> idLocation = $request -> idLocation;
        $properties -> idType = $request -> idType;
        $properties -> introduction = $request -> introduction;
        $properties -> detail = $request -> detail;
        $properties -> detailaddress = $request -> detailaddress;
        $properties -> bedroom = $request -> bedroom;
        $properties -> bathroom = $request -> bathroom;
        $properties -> acreage = $request -> acreage;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/properties', $image);
            $properties -> image = $image;
        }else{
            $properties -> image = "";
        }
        $properties -> save();
        return redirect('admin/property/add') -> with('notification','Add successfully');
    }
    public function getEdit($id){
        $properties = Property::find($id);
        $location = Location::all();
        $typeofproperties = TypeOfProperty::all();
        return view('admin.property.edit',['properties'=> $properties, 'typeofproperties'=> $typeofproperties, 'location' => $location]);
    }
    public function postEdit(Request $request, $id){
        $properties = Property::find($id);
        $this -> validate($request, [
            'introduction' => 'required|min:5',
            'detail' => 'required|min:5',
            'detailaddress' => 'required|min:8',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'acreage' => 'required',
            'idLocation' => 'required',
            'idType' => 'required'
        ],[
            'introduction.required' =>'You have to enter some introduction',
            'introduction.min'=>'You must input more than 5 characters',
            'detail.required' =>'You have to enter the detail of the property',
            'detail.min'=>'You must input more than 5 characters',
            'idLocation.required' =>'You have to select location',
            'idType.required' =>'You have to select type of property',
            'detailaddress.required' =>'You have to enter detail address',
            'detailaddress.min' =>'You must input more than 10 characters',
            'bedroom.required'=>'You must input the number of bedroom',
            'bathroom.required' =>'You have to enter number of bathroom',
            'acreage.required' =>'You have to enter the acreage'
        ]);

        $properties -> idLocation = $request -> idLocation;
        $properties -> idType = $request -> idType;
        $properties -> introduction = $request -> introduction;
        $properties -> detail = $request -> detail;
        $properties -> detailaddress = $request -> detailaddress;
        $properties -> bedroom = $request -> bedroom;
        $properties -> bathroom = $request -> bathroom;
        $properties -> acreage = $request -> acreage;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/properties', $image);
            $properties -> image = $image;
        }
        $properties -> save();
        return redirect('admin/property/list') -> with('notification','Update successfully');
    }
    public function getDelete($id){
        $properties = Property::find($id);
        $properties -> delete();
        return redirect('admin/property/list') -> with('notification','Delete successfully');
    }
}
