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

    public function getConfirm(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment12;
        $payment -> save();

        $id1 = $payment -> idUser;
        $user = User::find($id1);
        $user -> status = 1;
        $user -> save();
        return redirect('admin/payment/list')->with('notification', 'Confirm success');
    }
    public function getNotConfirm(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment1;
        $payment -> save();

        $id1 = $payment -> idUser;
        $user = User::find($id1);
        $user -> status = 0;
        $user -> save();
        return redirect('admin/payment/list')->with('notification', 'Cancel success');
    }
}
