<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeOfCode;
class TypeofcodeController extends Controller
{
    public function getList()
    {
        $typeofcodes = TypeOfCode::all();
        return view('admin.typecode.list', ['typeofcodes'=>$typeofcodes]);
    }

    public function getAdd()
    {
        return view('admin.typecode.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'name' => 'required|min:3'
            ],[
                'name.required'=>'You must input this field!!!',
                'name.min'=>'You must more than 3 characters!'
            ]);
        $typeofcodes = new TypeOfCode();
        $typeofcodes -> name = $request -> name;

        $typeofcodes -> save();
        return redirect('admin/typecode/add')->with('notification', 'Add successfully');
    }
    public function getEdit($id)
    {
        $typeofcodes = TypeOfCode::find($id);
        return view('admin.typecode.edit',['typeofcodes'=>$typeofcodes]);
    }
    public function postEdit(Request $request,$id)
    {
        $typeofcodes = TypeOfCode::find($id);
        $this -> validate($request,
            [
                'name' => 'required|min:3'
            ],[
                'name.required'=>'You must input this field!!!',
                'name.min'=>'You must more than 3 characters!'
            ]);
        $typeofcodes -> name = $request -> name;

        $typeofcodes -> save();
        return redirect('admin/typecode/list')->with('notification', 'Add successfully');
    }

    public function getDelete($id)
    {
        $typeofcodes = TypeOfCode::find($id);
        $typeofcodes -> delete();
        return redirect('admin/typecode/list')->with('notification', 'Delete successfully');
    }
}
