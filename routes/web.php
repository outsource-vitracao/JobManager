<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/manager/job/create', [ 
    'as' => 'create-job',
    'uses' => function () {
    return view('manager.createjob');
    }
]);

Route::post('/manager/job/create',[
    'as' => 'create-job',
    'uses' => 'JobController@store' 
]);


Route::get('manager/job/delete/{id}', [
    'as' => 'delete-job',
    'uses'=> 'JobController@destroy'
]);


Route::get('/manager/create-order/{job_id}',[ 
    'as' => 'create-order',
    'uses' => function () {
    return view('manager.createorder');
    }
]);

Route::post('/manager/create-order',[
    'as' => 'create-order',
    'uses' => 'OrderController@store' 
]);


Route::get('/manager',[
    'as' => 'manager-index',
    'uses' => 'JobController@index'
]);

Route::get('/manager/detail/{id}', [
    'as' => 'job-detail',
    'uses' => 'JobController@show'
]);

