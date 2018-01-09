<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Order;
use App\JobStatus;

class JobCheckController extends Controller
{
    public function index(){

        $jobStatus = JobStatus::where('status','Edit xong')->get();

        if($jobStatus->first() == NULL){
            return view('QA.index');
        }
        
        //Cho danh sách job_id 
        $jobs_id = array();
        foreach($jobStatus as $status){
            $jobs_id[] = $status->job_id;
        }
        
        $jobs = Job::find($jobs_id);
        
        return view('QA.index',compact('jobs'));
    }

    public function working(){

        $jobStatus = JobStatus::where('status','Đang kiểm tra')->get();

        if($jobStatus->first() == NULL){
            return view('QA.working');
        }
        
        //Cho danh sách job_id 
        $jobs_id = array();
        foreach($jobStatus as $status){
            $jobs_id[] = $status->job_id;
        }
        
        $jobs = Job::find($jobs_id);
        
        return view('QA.working',compact('jobs'));
    }

    public function show($id){

        $job = Job::find($id);

        return view('QA.detail',compact('job'));
    }

    public function getJob($id){

        $jobStatus = JobStatus::where('job_id',$id)->first();
        if($jobStatus == NULL){
            return redirect()->action('JobCheckController@index');
        }
        $jobStatus->status = "Đang kiểm tra";
        $jobStatus->save();

        return redirect()->action('JobCheckController@show', ['id' => $id]);
        
    }

    public function finishJob($id){

        $jobStatus = JobStatus::where('job_id',$id)->first();
        $jobStatus->status = "Kiểm tra xong";
        $jobStatus->save();

        return redirect()->action('JobCheckController@index');
        
    }
}
