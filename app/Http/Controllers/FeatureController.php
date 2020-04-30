<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feature;
use App\Property;
class FeatureController extends Controller
{
    public function getAdd($id){
        $properties = Property::find($id);
        return view('admin.feature.add', ['properties' => $properties]);
    }

    public function postAdd(Request $request, $id){
        $feature = new Feature();
        $feature -> market = $request -> market;
        if ($request -> market == 1){
            $feature -> market = 1;
        } else {
            $feature -> market = 0;
        }
        $feature -> supermarket = $request -> supermarket;
        if ($request -> supermarket == 1){
            $feature -> supermarket = 1;
        } else {
            $feature -> supermarket = 0;
        }
        $feature -> gym = $request -> gym;
        if ($request -> gym == 1){
            $feature -> gym = 1;
        } else {
            $feature -> gym = 0;
        }
        $feature -> hospital = $request -> hospital;
        if ($request -> hospital == 1){
            $feature -> hospital = 1;
        } else {
            $feature -> hospital = 0;
        }
        $feature -> theater = $request -> theater;
        if ($request -> theater == 1){
            $feature -> theater = 1;
        } else {
            $feature -> theater = 0;
        }
        //echo $student -> status;
        $feature -> save();

        $properties = Property::find($id);
        $properties -> idFeature = $feature -> id;
        $properties -> save();
        return redirect('admin/property/list') -> with('notification','Add successfully');
    }
}
