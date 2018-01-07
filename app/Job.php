<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\JobStatus;
use App\Order;

class Job extends Model
{   

    protected $table = "jobs";

    protected $fillable = [
        'name',
        'client',
        'total',
        'style',
        'linkdownload',
        'note',
    ];

    public function order(){
        return $this->hasMany('App\Order');
    }

    public function status(){
        return $this->hasOne('App\JobStatus');
    }
}
