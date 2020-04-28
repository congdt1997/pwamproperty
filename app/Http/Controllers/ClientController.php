<?php

namespace App\Http\Controllers;

use App\News;
use App\TypeOfProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Property;
use App\User;
use App\Role;
use App\Location;
use App\Review;
use Monolog\Handler\IFTTTHandler;

class ClientController extends Controller
{
    public function getError()
    {
        return view('client.home.error');
    }
    public function getAbout()
    {
        return view('client.home.about');
    }
    public function getContact()
    {
        return view('client.home.contact');
    }
    public function getHome()
    {
        $properties = Property::orderBy('created_at', 'desc')->take(6)->get();
        $user = User::all();
        return view('client.home.home',['user'=> $user, 'properties'=> $properties]);
    }

    public function getProfile()
    {
        $id = Auth::user()->id;
        $properties = Property::orderBy('created_at', 'desc')->take(6)->get();
        $user = User::find($id);
        $role = Role::all();
        return view('client.profile.detail',['user'=> $user, 'role'=> $role]);
    }
    public function postProfile(Request $request)
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        $this->validate($request, [
            'fullname' => 'min:5',
            'phone' => 'regex:/(09)[0-9]{8}/',
            'facebook' => 'required|url|regex:/http(?:s):\/\/(?:www\.)facebook\.com\/.+/i',
            'password' => 'same:confirmPassword|min:8',
            'address' => 'required',
            'dateOfBirth' => 'required',
            'gender' => 'required',
        ], [
            'name.min' => 'You must input more than 5 characters',
            'phone.regex' => 'You have to enter correct phone number',
        ]);

        $user->fullname = $request->fullname;
        $user->facebook = $request->facebook;
        $user->phone = $request->phone;
        if($request -> hasFile('image'))
        {
            $file = $request -> file('image');
            $image = $file ->getClientOriginalName();
            $file -> move('admin_asset/images/upload/user', $image);
            $user -> image = $image;
        }
//        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user -> dateOfBirth = $request -> dateOfBirth;
        if ($request->checkpassword == "1") {
            $user->password = bcrypt($request->password);
            echo "success";
        }
        $user -> gender = $request -> gender;
        $user->save();
        return redirect('client/profile/detail')->with('notification', 'Update successfully');
    }
    public function getProperty($id)
    {
        $count = 0;
        $properties = Property::find($id);
        $user = User::all();
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $review = Review::all();
        foreach($review as $re){
            if ($re -> idProperty == $properties -> id){
                $count++;
            }
        }
        return view('client.product.detail',['typeproperties'=> $typeproperties, 'count'=> $count, 'review'=> $review, 'location'=> $location, 'user'=> $user, 'properties'=> $properties]);
    }

    public function  getListproduct(){
        $properties = Property::orderBy('created_at', 'desc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $user = User::all();
        return view('client.product.listproduct',['typeproperties'=> $typeproperties, 'location'=> $location, 'user'=> $user, 'properties'=> $properties]);
    }

    public function getListnews(){
        $news = News::orderBy('created_at', 'desc')->paginate(4);
        return view('client.news.listnews',['news'=> $news]);
    }

    public function getNewsdetail($id){
        $news = News::find($id);
        return view('client.news.newsdetail',['news'=> $news]);
    }
    // sort price low to high
    public function postSortProperty(){
        $properties = Property::orderBy('price', 'asc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        return view('client.product.listproduct',['typeproperties'=> $typeproperties, 'location'=> $location,'properties'=> $properties]);
    }
    // sort price high to low
    public function postSortProperty2(){
        $properties = Property::orderBy('price', 'desc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        return view('client.product.listproduct',['typeproperties'=> $typeproperties, 'location'=> $location,'properties'=> $properties]);
    }

//    public function postSearchproduct(Request $request){
//        $properties = Property::orderBy('created_at', 'desc')->paginate(8);
//        $locationName = $request -> locationName;
////        $typeProperty = $request -> typeProperties;
//        $location = Location::where('id', 'like', "%$locationName%")->get();
//        $typeproperties = TypeOfProperty::all();
//        return view('client.product.showproduct',['locationName'=> $locationName, 'typeproperties'=> $typeproperties, 'location'=> $location,'properties'=> $properties]);
//    }
    public function postSearchproduct(Request $request){

        $locationName = $request -> locationName;
        $typeProperty = $request -> typeProperties;
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $properties = Property::orderBy('created_at', 'desc')->paginate(8);
        return view('client.product.showproduct',['typeProperty'=> $typeProperty, 'locationName'=> $locationName, 'typeproperties'=> $typeproperties, 'location'=> $location,'properties'=> $properties]);
    }
}
