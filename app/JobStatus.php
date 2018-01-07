<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobStatus extends Model
{

    protected $statusList = [
        'Chờ thêm vào hàng đợi',
    ];

    protected $statusId = 0;

    public function set(){

        $this->job_id = $this->job->id;
        return $this->IdRedirect();

    }

    public function next(){

        $this->statusId = array_search($this->status,$this->statusList);
        $this->statusId++;

        return $this->IdRedirect();
    }

    public function IdRedirect(){
        $this->status = $this->statusList[$this->statusId];
        $this->save();
        return $this->statusId;
    }

    public function job(){
        
        return $this->belongsTo('App/Job');
    }
}
