<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\Property;
class DashboardController extends Controller
{
    //
    public function getShowdata()
    {
        $payment = Payment::count();
        $properties = Property::count();
        $count_client = 0;
        $user = User::all();
        foreach($user as $us){
            if($us -> idRole == 3){
                $count_client++;
            }
        }

        $calcu = ($payment * 20000)/23000;
        $pricecalcu = number_format($calcu, 2);
        return view('admin.dashboard.showdata', ['count_client'=>$count_client, 'properties'=>$properties, 'pricecalcu'=>$pricecalcu, 'payment'=>$payment, 'calcu'=>$calcu]);
    }
}
