<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    //
    protected $table = "properties";
    public function review()
    {
        return $this -> hasMany('App\Review','idProperty','id');
    }
    public function location()
    {
        return $this -> belongsTo('App\Location','idLocation','id');
    }
    public function type()
    {
        return $this -> belongsTo('App\type_of_properties','idType','id');
    }
}
