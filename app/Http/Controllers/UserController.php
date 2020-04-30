<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Role;
use App\User;
class UserController extends Controller
{
    public function getList(){
        $user = User::all();
        $role = Role::all();
        return view('admin.user.list',['user'=> $user, 'role' => $role]);
    }
    public function getEdit($id){
        $user = User::find($id);
        $role = Role::all();
        return view('admin.user.edit',['user'=> $user, 'role' => $role]);
    }
    public function postEdit(Request $request,$id){
        $user = User::find($id);

        $this -> validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|min:5|email',
            'password' => 'required|min:8',
            'idRole' => 'required',
            'facebook' => 'required',
            'phone' => 'required|min:10',
            'dateOfBirth' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required'
        ],[
            'fullname.required' =>'You have to enter user name',
            'fullname.min'=>'You must input more than 5 characters',
            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'password.required' =>'You have to enter the password',
            'password.min'=>'You must input more than 8 characters',
            'idRole.required' =>'You have to select Role',
            'facebook.required' =>'You have to enter Facebook link',
            'phone.required' =>'You have to enter the phone number',
            'phone.min'=>'You must input more than 10 number',
            'dateOfBirth.required' =>'You have to enter date of birth',
            'address.required' =>'You have to enter the address',
            'address.min'=>'You must input more than 10 characters',
            'gender.required' =>'You have to select gender'
        ]);

        $user -> fullname = $request -> fullname;
        $user -> email = $request -> email;
        if ($request -> password != $user -> password){
            $user -> password = bcrypt($request -> password);
        }
        $user -> idRole = $request -> idRole;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        $user -> dateOfBirth = $request -> dateOfBirth;
        $user -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/user', $image);
            $user -> image = $image;
        }
        $user -> gender = $request -> gender;
        $user -> status = $request -> status;
        if ($request -> status == 1){
            $user -> status = 1;
        } else {
            $user -> status = 0;
        }
        //echo $student -> status;
        $user -> save();
        return redirect('admin/user/list/')-> with('notification','Update successfully');
    }

    public function getAdd(){
        $role = Role::all();
        return view('admin.user.add', ['role' => $role]);
    }
    public function postAdd(Request $request){

        $this -> validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|min:5|email|unique:users',
            'password' => 'required|min:8',
            'idRole' => 'required',
            'facebook' => 'required',
            'phone' => 'required|min:10',
            'dateOfBirth' => 'required',
            'address' => 'required|min:10',
            'gender' => 'required'
        ],[
            'fullname.required' =>'You have to enter user name',
            'fullname.min'=>'You must input more than 5 characters',
            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'password.required' =>'You have to enter the password',
            'password.min'=>'You must input more than 8 characters',
            'idRole.required' =>'You have to select Role',
            'facebook.required' =>'You have to enter Facebook link',
            'phone.required' =>'You have to enter the phone number',
            'phone.min'=>'You must input phone number more than 10 number',
            'dateOfBirth.required' =>'You have to enter date of birth',
            'address.required' =>'You have to enter the address',
            'address.min'=>'You must input address more than 10 characters',
            'gender.required' =>'You have to select gender',
        ]);

        $User = User::all();
        $user = new User;

        $count = $User -> count();

        if ($count == 0)
        {
            $user -> id = 1;
        }else{
            $array = $User[$count - 1] -> id + 1;
            $user -> id = $array;
        }

        $user -> fullname = $request -> fullname;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> idRole = $request -> idRole;
        $user -> facebook = $request -> facebook;
        $user -> phone = $request -> phone;
        $user -> dateOfBirth = $request -> dateOfBirth;
        $user -> address = $request -> address;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/user', $image);
            $user -> image = $image;
        }else{
            $user -> image = "";
        }
        $user -> gender = $request -> gender;
        $user -> status = $request -> status;
        if ($request -> status == 1){
            $user -> status = 1;
        } else {
            $user -> status = 0;
        }
        //echo $student -> status;
        $user -> save();
        return redirect('admin/user/add') -> with('notification','Add successfully');
    }

    public function getDelete($id){
        $user = User::find($id);
        $user -> delete();
        return redirect('admin/user/list') -> with('notification','Delete successfully');
    }

    public function postLogin(Request $request){
        $this -> validate($request, [
            'email' => 'required|min:5|email',
            'password' => 'required|min:8',
        ],[

            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'password.min'=>'You must input more than 8 characters',
            'password.required'=>'You must input password'

        ]);
            if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                return back();
            }else{
                return back() -> with('login_failed','Your email or password is invalid!!!');
            }
    }
    public function getLogout(){
        Auth::logout();
        return redirect('client/home/home');
    }

    public function postRegister(Request $request){
        $this -> validate($request, [
            'fullname' => 'required|min:5',
            'email' => 'required|min:5|email|unique:users',
            'password' => 'same:confirmPassword|min:8',
            'idRole' => 'required'
        ],[
            'fullname.required' =>'You have to enter user name',
            'fullname.min'=>'You must input more than 5 characters',
            'email.required' =>'You have to enter the Email',
            'email.min'=>'You must input more than 5 characters',
            'email.unique'=>'This email has already created',
            'password.min'=>'You must input more than 8 characters',
            'idRole.required' =>'You have to select Role',
        ]);

        $User = User::all();
        $user = new User;

        $count = $User -> count();

        if ($count == 0)
        {
            $user -> id = 1;
        }else{
            $array = $User[$count - 1] -> id + 1;
            $user -> id = $array;
        }

        $user -> fullname = $request -> fullname;
        $user -> email = $request -> email;
        $user -> password = bcrypt($request -> password);
        $user -> idRole = $request -> idRole;
        $user ->verified_email = 0;
        $user -> save();

        $id = $user -> id;
        $verified_email = $user -> email;

        Mail::send('client.email.verified_email',[
            'id' => $id,
        ], function ($message) use ($verified_email){
            $message ->to($verified_email, 'visitor') -> subject('Please verify your email');
        });
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
            return back();
        }
    }

    public function getVerifiedemail($id){
        $user = User::find($id);
        $user -> verified_email = 1;
        $user -> save();
        return view('client.email.verified_email_success',['user' =>$user ]);
    }
}
