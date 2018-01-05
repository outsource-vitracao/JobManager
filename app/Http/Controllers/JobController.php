<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job as Job;
use App\Order;

class JobController extends Controller
{

    public function index(){

        $job = Job::all();

        return $job;
    }

    public function create(){

        return view('job.create');
    }

    public function store(Request $request){
        
        $job = new Job($request->all());
        $job->save();
        dd($job);
    }

    public function show($id){

        $job = Job::find($id);

        return $job;

    }

    public function edit($id){
         
        $job = Job::find($id);

        return view('job.edit',$job);
    }

    public function update(Request $req,$id){

        $job = Job::find($id);
        
        $job = Job::update([
            'client' =>  $req['client'],
            'name' => $req['name'],
            'total' => $req['total'],
            'linkdownload' => $req['linkdownload'],
            'note' => $reg['note']
        ]);

        return $job;
    }

    public function destroy($id){

        $job = Job::find($id);
        $job->delete();

        
    }

    
}
