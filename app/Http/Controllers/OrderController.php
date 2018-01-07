<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Job;

class OrderController extends Controller
{
    public function store(Request $request){

        $order = new Order($request->all());
        $order->save();
        return redirect()->action('JobController@show', [ 'id' => $request->job_id]);

    }
}
