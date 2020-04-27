<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //
    protected $table = "reviews";
    public function property(){
        return $this-> belongsTo('App\Property','idProperty','id');
    }
    public function user(){
        return $this-> belongsTo('App\User','idUser','id');
    }
}
