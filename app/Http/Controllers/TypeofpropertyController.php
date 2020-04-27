<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TypeOfProperty;
class TypeofpropertyController extends Controller
{
    public function getList()
    {
        $typeofproperties = TypeOfProperty::all();
        return view('admin.typeproperty.list', ['typeofproperties'=>$typeofproperties]);
    }

    public function getAdd()
    {
        return view('admin.typeproperty.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'typeProperty' => 'required|min:3'
            ],[
                'typeProperty.required'=>'You must input this field!!!',
                'typeProperty.min'=>'You must more than 3 characters!'
            ]);
        $typeofproperties = new TypeOfProperty();
        $typeofproperties -> typeProperty = $request -> typeProperty;

        $typeofproperties -> save();
        return redirect('admin/typeproperty/add')->with('notification', 'Add successfully');
    }
    public function getEdit($id)
    {
        $typeofproperties = TypeOfProperty::find($id);
        return view('admin.typeproperty.edit',['typeofproperties'=>$typeofproperties]);
    }
    public function postEdit(Request $request,$id)
    {
        $typeofproperties = TypeOfProperty::find($id);
        $this -> validate($request,
            [
                'typeProperty' => 'required|min:3'
            ],[
                'typeProperty.required'=>'You must input this field!!!',
                'typeProperty.min'=>'You must more than 3 characters!'
            ]);
        $typeofproperties -> typeProperty = $request -> typeProperty;

        $typeofproperties -> save();
        return redirect('admin/typeproperty/list')->with('notification', 'Add successfully');
    }

    public function getDelete($id)
    {
        $typeofproperties = TypeOfProperty::find($id);
        $typeofproperties -> delete();
        return redirect('admin/typeproperty/list')->with('notification', 'Delete successfully');
    }
}
