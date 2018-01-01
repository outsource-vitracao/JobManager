<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    
    protected $table = "orders";

    public function job(){
        return $this->belongsTo('App/Job');
    }

    public function style(){
        return $this->hasOne('App\Style');
    }
}
