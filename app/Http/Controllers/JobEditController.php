<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Order;
use App\JobStatus;

class JobEditController extends Controller
{
    public function index(){
        
        $jobs = Job::all();
        return view('editor.index',compact('jobs'));

    }
}
