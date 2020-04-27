<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    //
    protected $table = "locations";
    public function property()
    {
        return $this -> hasMany('App\Property','idLocation','id');
    }
}
