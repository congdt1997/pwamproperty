<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\TypeOfCode;
class PaymentController extends Controller
{
    public function getList()
    {
        $payment = Payment::all();
        return view('admin.payment.list', ['payment'=>$payment]);
    }
}
