<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\JobStatus;
use App\Order;

class JobController extends Controller
{

    public function index(){

        $jobs = Job::all();
        return view('manager.index',compact('jobs'));
    }

    public function create(){

        return view('job.create');
    }

    public function store(Request $request){
        
        $job = new Job($request->all());
        $job->save();
        
        $jobStatus = new JobStatus;
        $jobStatus->job_id = $job->id;
        $jobStatus->status = 'Chờ thêm vào hàng đợi';
        $jobStatus->save();

        return redirect()->action('JobController@show',['id'=>$job->id]);
    }

    public function show($id){

        $job = Job::find($id);

        return view('manager.detail',compact('job'));
    }

    public function edit($id){
         
        $job = Job::find($id);

        return view('manager.editjob',compact('job'));
    }

    public function update(Request $request){

        $job = Job::find($request->id)->update($request->all());

        return redirect()->action('JobController@show',['id'=>$request->id]);
    }

    public function destroy($id){

        $job = Job::find($id);
        $job->delete();

        $job->order->delete();

        return redirect()->action('JobController@index');
    }

    public function addQueue($id){
        
        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Trong hàng đợi";
        $jobStatus->save();
        
        return redirect()->back();
        
    }

    public function prioritizeQueue($id){

        $jobStatus = Job::find($id)->status;
        $jobStatus->status = "Ưu tiên";
        $jobStatus->save();
        
        return redirect()->back();

    }

    
}
