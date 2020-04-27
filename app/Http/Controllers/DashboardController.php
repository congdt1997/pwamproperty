<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
class DashboardController extends Controller
{
    //
    public function getShowdata()
    {
        $payment = Payment::count();
        $calcu = ($payment * 20000)/23000;
        $pricecalcu = number_format($calcu, 2);
        return view('admin.dashboard.showdata', ['pricecalcu'=>$pricecalcu, 'payment'=>$payment, 'calcu'=>$calcu]);
    }
}
