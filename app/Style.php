<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Style extends Model
{
    protected $table = "styles";

    protected $fillable = [
        'name',
        'price',
        'time',
    ];

    public function order(){
        return $this->belongsTo('App\Order');
    }
}
