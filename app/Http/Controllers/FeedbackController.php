<?php

namespace App\Http\Controllers;

use App\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function getList(){
        $feedback = Feedback::all();
        return view('admin.feedback.list',['feedback' => $feedback]);
    }
    public function getDelete($id){
        $feedback = Feedback::find($id);
        $feedback -> delete();
        return redirect('admin/feedback/list')->with('notification', 'Delete Successfully');
    }
    public function getListStaff(){
        $feedback = Feedback::all();
        return view('staff.feedback.list',['feedback' => $feedback]);
    }
    public function getDeleteStaff($id){
        $feedback = Feedback::find($id);
        $feedback -> delete();
        return redirect('staff/feedback/list')->with('notification', 'Delete Successfully');
    }
}
