<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricetag;
class PricetagController extends Controller
{
    //
    public function getList()
    {
        $tag = Pricetag::all();
        return view('admin.pricetag.list', ['tag'=>$tag]);
    }

    public function getAdd()
    {
        return view('admin.pricetag.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'pricetag' => 'required'
            ],[
                'pricetag.required'=>'You must input this field!!!'
            ]);
        $tag = new Pricetag();
        $tag -> pricetag = $request -> pricetag;

        $tag -> save();
        return redirect('admin/pricetag/add')->with('notification', 'Add successfully');
    }
    public function getEdit($id)
    {
        $tag = Pricetag::find($id);
        return view('admin.pricetag.edit',['tag'=>$tag]);
    }
    public function postEdit(Request $request,$id)
    {
        $tag = Pricetag::find($id);
        $this -> validate($request,
            [
                'pricetag' => 'required'
            ],[
                'pricetag.required'=>'You must input this field!!!'
            ]);
        $tag -> pricetag = $request -> pricetag;

        $tag -> save();
        return redirect('admin/pricetag/list')->with('notification', 'Add successfully');
    }

    public function getDelete($id)
    {
        $tag = Pricetag::find($id);
        $tag -> delete();
        return redirect('admin/pricetag/list')->with('notification', 'Delete successfully');
    }
}
