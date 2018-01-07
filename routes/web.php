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

Route::get('/manager/create-job', [ 
    'as' => 'create-job',
    'uses' => function () {
    return view('manager.createjob');
    }
]);

Route::post('/manager/create-job',[
    'as' => 'create-job',
    'uses' => 'JobController@store' 
]);

Route::get('/manager/create-order',[ 
    'as' => 'create-order',
    'uses' => function () {
    return view('manager.createorder');
    }
]);


Route::get('/manager',[
    'as' => 'manager-index',
    'uses' => 'JobController@index'
]);

Route::get('/manager/detail/{id}', [
    'as' => 'job-detail',
    'uses' => 'JobController@show'
]);

