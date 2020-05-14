<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Payment;
use App\User;
use App\TypeOfCode;
use App\Pricetag;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class PaymentController extends Controller
{
    public function getList()
    {
        $payment = Payment::all();
        $typecode = TypeOfCode::all();
        $tag = Pricetag::all();
        return view('admin.payment.list', ['typecode'=>$typecode, 'tag'=>$tag, 'payment'=>$payment]);
    }

    public function getConfirm(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment12;
        $payment -> save();
        if ($payment->idPricetag == 1)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 5;
            $user -> count = $valuetotal;
            $user -> save();
        }elseif ($payment->idPricetag == 2)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 15;
            $user -> count = $valuetotal;
            $user -> save();
        }elseif ($payment->idPricetag == 3)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 30;
            $user -> count = $valuetotal;
            $user -> save();
        }
        return redirect('admin/payment/list')->with('notification', 'Confirm success');
    }
    public function getNotConfirm(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment1;
        $payment -> save();
        $id1 = $payment -> idUser;
        $user = User::find($id1);
        if ($user -> count > 0){
            $valuetag = $user -> count;
            $user -> count = $valuetag;
            $user -> save();
        }elseif ($user -> count == 0){
            $user -> status = 0;
            $valuetag = $user -> count;
            $user -> count = $valuetag;
            $user -> save();
        }

        return redirect('admin/payment/list')->with('notification', 'Cancel success');
    }
    public function getBlock(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment1;
        $payment -> save();
        $id1 = $payment -> idUser;
        $user = User::find($id1);
        $user -> status = 0;
        $user -> count = 0;
        $user -> save();
        $receive = $user -> email;

        Mail::send('client.email.blockaccount_email',[

        ], function ($message) use ($receive){
            $message ->to($receive, 'visitor') -> subject('Notify about blocking your account');
        });

        return redirect('admin/payment/list')->with('notification', 'Block success');
    }

    public function getListStaff()
    {
        $payment = Payment::all();
        $typecode = TypeOfCode::all();
        $tag = Pricetag::all();
        return view('staff.payment.list', ['typecode'=>$typecode, 'tag'=>$tag, 'payment'=>$payment]);
    }

    public function getConfirmStaff(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment12;
        $payment -> save();

        if ($payment->idPricetag == 1)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 5;
            $user -> count = $valuetotal;
            $user -> save();
        }elseif ($payment->idPricetag == 2)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 15;
            $user -> count = $valuetotal;
            $user -> save();
        }elseif ($payment->idPricetag == 3)
        {
            $id1 = $payment -> idUser;
            $user = User::find($id1);
            $user -> status = 1;
            $valuetag = $user -> count;
            $valuetotal = $valuetag + 30;
            $user -> count = $valuetotal;
            $user -> save();
        }
        return redirect('staff/payment/list')->with('notification', 'Confirm success');
    }
    public function getNotConfirmStaff(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment1;
        $payment -> save();

        $id1 = $payment -> idUser;
        $user = User::find($id1);
        $user -> status = 0;
        $valuetag = $user -> count;
        $user -> count = $valuetag;
        $user -> save();
        return redirect('staff/payment/list')->with('notification', 'Cancel success');
    }
    public function getBlock2(Request $request, $id)
    {
        $payment = Payment::find($id);
        $payment -> comment = $request -> comment1;
        $payment -> save();
        $id1 = $payment -> idUser;
        $user = User::find($id1);
        $user -> status = 0;
        $user -> count = 0;
        $user -> save();
        $receive = $user -> email;

        Mail::send('client.email.blockaccount_email',[

        ], function ($message) use ($receive){
            $message ->to($receive, 'visitor') -> subject('Notify about blocking your account');
        });

        return redirect('staff/payment/list')->with('notification', 'Block success');
    }
}
