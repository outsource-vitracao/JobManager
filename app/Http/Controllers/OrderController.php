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

    public function destroy($id){

        $order = Order::find($id);
        $job_id = $order->job_id;
        $order->delete();

        return redirect()->action('JobController@show', [ 'id' => $job_id]);
        
    }

    public function edit($id){

        $order = Order::find($id);
        return view('manager.editorder',compact('order'));

    }

    public function update(Request $request){

        $order = Order::find($request->id)->update($request->all());
        
        return redirect()->action('JobController@show', [ 'id' => $request->job_id]);
        
    }
}
