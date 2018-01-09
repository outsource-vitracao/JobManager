<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Order;
use App\JobStatus;

class JobEditController extends Controller
{
    public function index(){
        
        $jobStatus = JobStatus::where('status','Đang edit')->get();

        if($jobStatus->first() == NULL){
            return view('editor.index');
        }
        
        //Cho danh sách job_id 
        $jobs_id = array();
        foreach($jobStatus as $status){
            $jobs_id[] = $status->job_id;
        }
        
        $jobs = Job::find($jobs_id);
        
        return view('editor.index',compact('jobs'));
    }


    public function show($id){

        $job = Job::find($id);

        $availableJob = $this->findAvailableJob();
        return view('editor.detail',compact('job'));
    }



    //Get Job
    public function getJob(){
        $jobStatus = $this->findAvailableJob();
        if(isset($jobStatus)){
            $jobStatus->status = "Đang edit";
            $jobStatus->save();
            return redirect()->action('JobEditController@index');
        }

        return redirect()->action('JobEditController@index');
        
    }

    public function findAvailableJob(){

        $jobStatus = new JobStatus;

        if($this->findPrioritizeJob($jobStatus)){
            return $this->findPrioritizeJob($jobStatus);
        }else if($this->findQueuedJob($jobStatus)){
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

    //Hoành thành Job
    public function finishJob($id){

        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Edit xong";
        $jobStatus->save();

        return redirect()->action('JobEditController@index');
        
    }
}
