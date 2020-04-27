<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeOfProperty extends Model
{
    //
    protected $table = "type_of_properties";
    public function property()
    {
        return $this -> hasMany('App\Property','idType','id');
    }
}
