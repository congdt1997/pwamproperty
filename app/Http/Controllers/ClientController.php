<?php

namespace App\Http\Controllers;

use App\Feature;
use App\Feedback;
use App\News;
use App\Payment;
use App\TypeOfProperty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Builder;
use App\Property;
use App\User;
use App\Role;
use App\Location;
use App\Review;
use App\TypeOfCode;
use App\Pricetag;
use Illuminate\Support\Facades\Mail;
use Monolog\Handler\IFTTTHandler;

class ClientController extends Controller
{
    public function getError()
    {
        return view('client.home.error');
    }

    public function getChecklogin()
    {
        return view('client.home.checklogin');
    }

    public function getAbout()
    {
        return view('client.home.about');
    }

    public function getContact()
    {
        return view('client.home.contact');
    }

    public function postContact(Request $request)
    {
        $this->validate($request,
            [
                'namefeedback' => 'required|min:3',
                'email' => 'required|email',
                'phone' => 'required|min:10',
                'message' => 'required|min:3'
            ], [
                'namefeedback.required' => 'You must input this field!!!',
                'namefeedback.min' => 'You must more than 3 characters!',
                'email.required' => 'You have to enter the Email',
                'phone.required' => 'You have to enter the phone number',
                'phone.min' => 'You must input phone number more than 10 number',
                'message.required' => 'You must input Message field!!!',
                'message.min' => 'You must more than 3 characters!',
            ]);
        $feedback = new Feedback();
        $feedback->nameFeedback = $request->namefeedback;
        $feedback->emailFeedback = $request->email;
        $feedback->phone = $request->phone;
        $feedback->message = $request->message;
        $feedback->save();

        $receive = Auth::User() -> email;

        Mail::send('client.email.feedback_email',[

        ], function ($message) use ($receive){
            $message ->to($receive, 'visitor') -> subject('Thank you for your feedback');
        });
        return redirect('client/home/contact')->with('notification', 'Send Feedback successfully');
    }

    public function postConsultation(Request $request)
    {
        $this->validate($request,
            [

                'email' => 'required|email',
                'message' => 'required|min:10'
            ], [
                'email.required' => 'You have to enter the Email',
                'message.required' => 'You must input Message field!!!',
                'message.min' => 'You must more than 3 characters!',
            ]);

        $receive = $request -> email;
        $emailCustomer = $request -> email;
        $content = $request -> message;
        Mail::send('client.email.consultation_email',[

        ], function ($message) use ($receive){
            $message ->to($receive, 'visitor') -> subject('Get a Free Consultation');
        });

        Mail::send('client.email.customer_email',[
            'emailCustomer' => $emailCustomer,
            'content' => $content,
        ], function ($message) use ($receive){
            $message ->from($receive, 'visitor');
            $message ->to('pwam.realestate@gmail.com', 'visitor') -> subject('Get a Free Consultation');
        });
        return redirect('client/home/home')->with('notification', 'Send request successfully');
    }

    public function postContactemail(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
                'phone' => 'required|min:10',
                'email' => 'required|email',
                'message' => 'required|min:10'
            ], [
                'name.required' => 'You have to enter your name',
                'email.required' => 'You have to enter the Email',
                'phone.required' => 'You have to enter the Phone number',
                'message.required' => 'You must input Message field!!!',
                'message.min' => 'You must more than 3 characters!',
                'phone.min' => 'You must input suitable phone number!'
            ]);
        $properties = Property::find($id);
        $title = $properties -> introduction;
        $proid = $properties -> id;
        $idU = $properties -> idUser;
        $user = User::find($idU);
        $emailContact = $user -> email;
        $receive = $request -> email;
        $phone = $request -> phone;
        $name = $request -> name;
        $content = $request -> message;
        Mail::send('client.email.consultation_email',[

        ], function ($message) use ($receive){
            $message ->to($receive, 'visitor') -> subject('Get a Free Consultation');
        });

        Mail::send('client.email.contact_email',[
            'title' => $title,
            'proid' => $proid,
            'receive' => $receive,
            'content' => $content,
            'phone' => $phone,
            'name' => $name,
        ], function ($message) use ($receive,$emailContact){
            $message ->from($receive, 'visitor');
            $message ->to($emailContact, 'visitor') -> subject('Customer want to contact to you');
        });
        return redirect('client/product/detail/'.$id)->with('notification', 'Send request successfully');
    }

    public function getHome()
    {
        $properties = Property::orderBy('created_at', 'desc')->take(6)->get();
        $count_client = 0;
        $count_location = 0;
        $user = User::all();
        $propertiesall = Property::all();
        count($propertiesall);
        foreach ($user as $us) {
            if ($us->idRole == 3) {
                $count_client++;
            }
        }
        $location = Location::all();
        foreach ($location as $loc) {
            $count_location++;
        }
        $typeproperties = TypeOfProperty::all();
        $news = News::orderBy('created_at', 'desc')->take(3)->get();

        return view('client.home.home', ['count_location' => $count_location, 'count_client' => $count_client, 'propertiesall' => $propertiesall, 'location' => $location, 'typeproperties' => $typeproperties, 'news' => $news, 'user' => $user, 'properties' => $properties]);
    }

    public function getProfile()
    {
        $id = Auth::user()->id;
        $properties = Property::orderBy('created_at', 'desc')->take(6)->get();
        $user = User::find($id);
        $role = Role::all();
        return view('client.profile.detail', ['user' => $user, 'role' => $role]);
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
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/user', $image);
            $user->image = $image;
        }
//        $user->password = bcrypt($request->password);
        $user->address = $request->address;
        $user->dateOfBirth = $request->dateOfBirth;
        if ($request->checkpassword == "1") {
            $user->password = bcrypt($request->password);
            echo "success";
        }
        $user->gender = $request->gender;
        $user->save();
        return redirect('client/profile/detail')->with('notification', 'Update successfully');
    }

    public function getProperty($id)
    {
        $count = 0;
        $properties = Property::find($id);
        $allProperties = Property::all();
        foreach($allProperties as $allpro){
            if ($allpro -> idUser == $properties -> idUser)
            {
                $idAll = $allpro -> idUser;
            }
        }
        $allProperties2 = Property::where('idUser', 'like', "%$idAll%")->orderBy('created_at', 'desc')->take(3)->get();
        $user = User::all();
        $location = Location::all();
        $feature = Feature::all();
        $typeproperties = TypeOfProperty::all();
        $review = Review::all();
        foreach ($review as $re) {
            if ($re->idProperty == $properties->id) {
                $count++;
            }
        }
        return view('client.product.detail', ['allProperties2' => $allProperties2, 'feature' => $feature, 'typeproperties' => $typeproperties, 'count' => $count, 'review' => $review, 'location' => $location, 'user' => $user, 'properties' => $properties]);
    }

    public function getListproduct(Request $request)
    {
        $properties = Property::orderBy('created_at', 'desc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $user = User::all();
        return view('client.product.listproduct', ['typeproperties' => $typeproperties, 'location' => $location, 'user' => $user, 'properties' => $properties]);
    }

    public function getListnews()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(4);
        return view('client.news.listnews', ['news' => $news]);
    }

    public function getNewsdetail($id)
    {
        $news = News::find($id);
        $news2 = News::orderBy('created_at', 'desc')->take(2)->get();
        $properties = Property::orderBy('created_at', 'desc')->take(3)->get();
        return view('client.news.newsdetail', ['news2' => $news2, 'news' => $news, 'properties' => $properties]);
    }

    // sort price low to high
    public function postSortProperty()
    {
        $properties = Property::orderBy('price', 'asc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        return view('client.product.listproduct', ['typeproperties' => $typeproperties, 'location' => $location, 'properties' => $properties]);
    }

    // sort price high to low
    public function postSortProperty2()
    {
        $properties = Property::orderBy('price', 'desc')->paginate(4);
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        return view('client.product.listproduct', ['typeproperties' => $typeproperties, 'location' => $location, 'properties' => $properties]);
    }


//    public function postSearchproduct(Request $request){
//        $properties = Property::orderBy('created_at', 'desc')->paginate(8);
//        $locationName = $request -> locationName;
////        $typeProperty = $request -> typeProperties;
//        $location = Location::where('id', 'like', "%$locationName%")->get();
//        $typeproperties = TypeOfProperty::all();
//        return view('client.product.showproduct',['locationName'=> $locationName, 'typeproperties'=> $typeproperties, 'location'=> $location,'properties'=> $properties]);
//    }
    public function postSearchproduct(Request $request)
    {

        $locationName = $request->locationName;
        $typeProperty = $request->typeProperties;
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $properties = Property::orderBy('created_at', 'desc')->get();
        return view('client.product.showproduct', ['typeProperty' => $typeProperty, 'locationName' => $locationName, 'typeproperties' => $typeproperties, 'location' => $location, 'properties' => $properties]);
    }

    public function postSearchproductRange(Request $request)
    {
        $price_min = $request->range_min;
        $price_max = $request->range_max;
        $price_minacreage = $request->range_minacreage;
        $price_maxacreage = $request->range_maxacreage;
        $locationName = $request->locationName;
        $typeProperty = $request->typeProperties;
        $location = Location::all();
        $typeproperties = TypeOfProperty::all();
        $properties = Property::orderBy('created_at', 'desc')->get();
        return view('client.product.showproduct2', ['typeProperty' => $typeProperty,
            'locationName' => $locationName, 'typeproperties' => $typeproperties,
            'location' => $location, 'price_maxacreage' => $price_maxacreage,
            'price_minacreage' => $price_minacreage, 'price_min' => $price_min,
            'price_max' => $price_max, 'properties' => $properties]);
    }

    public function getSubmitproperty()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $location = Location::all();
        $typeofproperties = TypeOfProperty::all();
        return view('client.product.submitproperty', ['user' => $user, 'typeofproperties' => $typeofproperties, 'location' => $location]);
    }

    public function postSubmitproperty(Request $request)
    {

        $this->validate($request, [
            'introduction' => 'required|min:5',
            'detail' => 'required|min:5',
            'detailaddress' => 'required|min:8',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'acreage' => 'required',
            'idLocation' => 'required',
            'idType' => 'required'
        ], [
            'introduction.required' => 'You have to enter some introduction',
            'introduction.min' => 'You must input more than 5 characters',
            'detail.required' => 'You have to enter the detail of the property',
            'detail.min' => 'You must input more than 5 characters',
            'idLocation.required' => 'You have to select location',
            'idType.required' => 'You have to select type of property',
            'detailaddress.required' => 'You have to enter detail address',
            'detailaddress.min' => 'You must input more than 10 characters',
            'bedroom.required' => 'You must input the number of bedroom',
            'bathroom.required' => 'You have to enter number of bathroom',
            'acreage.required' => 'You have to enter the acreage'
        ]);


        $properties = new Property();

        $properties->idLocation = $request->idLocation;
        $properties->idType = $request->idType;
        $properties->idUser = $request->idUser;
        $properties->introduction = $request->introduction;
        $properties->detail = $request->detail;
        $properties->detailaddress = $request->detailaddress;
        $properties->bedroom = $request->bedroom;
        $properties->bathroom = $request->bathroom;
        $properties->acreage = $request->acreage;
        $properties->price = $request->price;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image);
            $properties->image = $image;
        } else {
            $properties->image = "";
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $image2 = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image2);
            $properties->image2 = $image2;
        } else {
            $properties->image2 = "";
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $image3 = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image3);
            $properties->image3 = $image3;
        } else {
            $properties->image3 = "";
        }
        $properties->save();

        $id1 = $properties -> idUser;
        $user = User::find($id1);
        $calcu = 1;
        $calcu2 = $user -> count;
        $result = $calcu2 - $calcu;
        $user -> count = $result;
        if($user -> count == 0){
            $user -> status = 0;
        }
        $user -> save();
        return redirect('client/product/submitproperty')->with('notification', 'Add successfully');
    }

    public function getSubmitlist()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $location = Location::all();
        $properties = Property::all();
        $typeofproperties = TypeOfProperty::all();
        return view('client.product.submitlist', ['properties' => $properties, 'user' => $user, 'typeofproperties' => $typeofproperties, 'location' => $location]);
    }

    public function getEditsubmit($id)
    {
        $id1 = Auth::user()->id;
        $user = User::find($id1);
        $properties = Property::find($id);
        $location = Location::all();
        $typeofproperties = TypeOfProperty::all();
        return view('client.product.editsubmit', ['properties' => $properties, 'user' => $user, 'typeofproperties' => $typeofproperties, 'location' => $location]);
    }

    public function postEditsubmit(Request $request, $id)
    {

        $this->validate($request, [
            'introduction' => 'required|min:5',
            'detail' => 'required|min:5',
            'detailaddress' => 'required|min:8',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'acreage' => 'required',
            'idLocation' => 'required',
            'idType' => 'required'
        ], [
            'introduction.required' => 'You have to enter some introduction',
            'introduction.min' => 'You must input more than 5 characters',
            'detail.required' => 'You have to enter the detail of the property',
            'detail.min' => 'You must input more than 5 characters',
            'idLocation.required' => 'You have to select location',
            'idType.required' => 'You have to select type of property',
            'detailaddress.required' => 'You have to enter detail address',
            'detailaddress.min' => 'You must input more than 10 characters',
            'bedroom.required' => 'You must input the number of bedroom',
            'bathroom.required' => 'You have to enter number of bathroom',
            'acreage.required' => 'You have to enter the acreage'
        ]);
        $properties = Property::find($id);
        $properties->idLocation = $request->idLocation;
        $properties->idType = $request->idType;
        $properties->introduction = $request->introduction;
        $properties->detail = $request->detail;
        $properties->detailaddress = $request->detailaddress;
        $properties->bedroom = $request->bedroom;
        $properties->bathroom = $request->bathroom;
        $properties->acreage = $request->acreage;
        $properties->price = $request->price;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $image = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image);
            $properties->image = $image;
        }
        if ($request->hasFile('image2')) {
            $file = $request->file('image2');
            $image2 = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image2);
            $properties->image2 = $image2;
        }
        if ($request->hasFile('image3')) {
            $file = $request->file('image3');
            $image3 = $file->getClientOriginalName();
            $file->move('admin_asset/images/upload/properties', $image3);
            $properties->image3 = $image3;
        }
        $properties->save();
        return redirect('client/product/submitlist')->with('notification', 'Edit successfully');
    }

    public function getDeletesubmit($id)
    {
        $properties = Property::find($id);
        $properties->delete();
        return redirect('client/product/submitlist')->with('notification', 'Delete successfully');
    }

    public function getAddfeature($id){
        $id1 = Auth::user()->id;
        $user = User::find($id1);
        $properties = Property::find($id);
        return view('client.featureproduct.addfeature', ['user' => $user, 'properties' => $properties]);
    }

    public function postAddfeature(Request $request, $id){
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
        return redirect('client/product/submitlist') -> with('notification','Add successfully');
    }
    public function getEditfeature($id){
        $id1 = Auth::user()->id;
        $user = User::find($id1);
        $feature = Feature::find($id);
        return view('client.featureproduct.editfeature', ['user' => $user, 'feature' => $feature]);
    }

    public function postEditfeature(Request $request, $id){
        $feature = Feature::find($id);
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
        $feature -> save();
        return redirect('client/product/submitlist') -> with('notification','Edit successfully');
    }

    public function getMember(){
        $id1 = Auth::user()->id;
        $user = User::find($id1);
        $typecode = TypeOfCode::all();
        $tag = Pricetag::all();
        return view('client.makepayment.becomemember', ['tag' => $tag, 'user' => $user, 'typecode' => $typecode]);
    }

    public function postMember(Request $request){
        $this->validate($request, [
            'code' => 'required|min:10',
            'serial' => 'required|min:10',
            'idTypeofcode' => 'required|max:2',
            'idPricetag' => 'required|max:2'
        ], [
            'idTypeofcode.required' => 'You have to select type of code',
            'idTypeofcode.max' => 'You have to select the type of code',
            'idPricetag.max' => 'You have to select the Price tag',
            'code.required' => 'You have to enter Code',
            'code.min' => 'You must input more than 10 characters',
            'serial.required' => 'You have to enter Serial',
            'serial.min' => 'Serial must be more than 10 characters',
        ]);
        $payment = new Payment();
        $payment->idTypeofcode = $request->idTypeofcode;
        $payment->idPricetag = $request->idPricetag;
        $payment->serial = $request->serial;
        $payment->code = $request->code;
        $payment->idUser = $request->idUser;
        $payment->save();
        return redirect('client/makepayment/becomemember')->with('notification', 'Payment successfully');
    }

    public function getHistory(){
        $id1 = Auth::user()->id;
        $user = User::find($id1);
        $payment = Payment::all();
        $typecode = TypeOfCode::all();
        $tag = Pricetag::all();
        return view('client.makepayment.historypayment', ['tag' => $tag, 'user' => $user, 'payment' => $payment, 'typecode' => $typecode]);
    }
}
