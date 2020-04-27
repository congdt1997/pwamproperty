<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Review;
use App\Property;

class ReviewController extends Controller
{
    public function getDelete($id, $idProperty){
        $review = Review::find($id);
        $review -> delete();
        return redirect('admin/property/edit/'.$idProperty)->with('notification','Delete successfully');
    }

    public function postReview($id, Request $request){
        $idProperty = $id;
        $review = new Review;
        $review -> idProperty = $idProperty;
        $review -> idUser = Auth::user()->id;
        $review -> content = $request-> message;
        $review -> save();
        return redirect('client/product/detail/'.$id)->with('notification','Review successfully');
    }
}
