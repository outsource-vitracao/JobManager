<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Order;
use App\JobStatus;

class JobEditController extends Controller
{
    public function index(){
        
        return $this->getJob();
        //return view('editor.index',compact('jobs'));
    }

    public function getJob(){
        $jobStatus = $this->findAvailableJob();
        $jobStatus->status = "Đang edit";
        return $jobStatus;
    }

    public function findAvailableJob(){

        $jobStatus = new JobStatus;

        if($this->findPrioritizeJob($jobStatus)){
            return $this->findPrioritizeJob($jobStatus);
        }else if(!$this->findQueuedJob($jobStatus)){
            return $this->findQueuedJob($jobStatus);
        }else{
            return NULL;
        }
    }

    public function findPrioritizeJob($jobStatus){
        
        return $jobStatus->where('status','Ưu tiên')->first();
    }

    public function findQueuedJob($jobStatus){
        
        return $jobStatus->where('status','Trong hàng đợi')->first();
    }

}
