<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
class RoleController extends Controller
{
    public function getList()
    {
        $roles = Role::all();
        return view('admin.role.list', ['roles'=>$roles]);
    }

    public function getAdd()
    {
        return view('admin.role.add');
    }
    public function postAdd(Request $request)
    {
        $this -> validate($request,
            [
                'roleName' => 'required|min:3'
            ],[
                'roleName.required'=>'You must input this field!!!',
                'roleName.min'=>'You must more than 3 characters!'
            ]);
        $roles = new Role();
        $roles -> roleName = $request -> roleName;

        $roles -> save();
        return redirect('admin/role/add')->with('notification', 'Add successfully');
    }
    public function getEdit($id)
    {
        $roles = Role::find($id);
        return view('admin.role.edit',['roles'=>$roles]);
    }
    public function postEdit(Request $request,$id)
    {
        $roles = Role::find($id);
        $this -> validate($request,
            [
                'roleName' => 'required|min:3'
            ],[
                'roleName.required'=>'You must input this field!!!',
                'roleName.min'=>'You must more than 3 characters!'
            ]);
        $roles -> roleName = $request -> roleName;

        $roles -> save();
        return redirect('admin/role/list')->with('notification', 'Add successfully');
    }

    public function getDelete($id)
    {
        $roles = Role::find($id);
        $roles -> delete();
        return redirect('admin/role/list')->with('notification', 'Delete successfully');
    }
}
