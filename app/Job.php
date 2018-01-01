<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Order;
class Job extends Model
{   

    protected $table = "jobs";

    protected $fillable = [
        'client',
        'name',
        'total',
        'linkdownload',
        'note',
    ];

    public function order(){
        return $this->hasMany('App/Order');
    }

}
