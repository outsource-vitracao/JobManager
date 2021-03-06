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


// Manager
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

Route::get('manager/job/edit/{id}',[
    'as' => 'get-edit-job',
    'uses' => 'JobController@edit'
]);

Route::post('manager/job/edit',[
    'as' => 'edit-job',
    'uses' => 'JobController@update'
]);


Route::get('/manager/order/create/{job_id}',[ 
    'as' => 'get-create-order',
    'uses' => function () {
    return view('manager.createorder');
    }
]);

Route::post('/manager/order/create',[
    'as' => 'create-order',
    'uses' => 'OrderController@store' 
]);

Route::get('/manager/order/delete/{id}',[
    'as' => 'delete-order',
    'uses' => 'OrderController@destroy'
]);

Route::get('manager/order/edit/{id}',[
    'as' => 'get-edit-order',
    'uses' => 'OrderController@edit'
]);

Route::post('manager/order/edit',[
    'as' => 'edit-order',
    'uses' => 'OrderController@update'
]);

Route::get('/manager',[
    'as' => 'manager-index',
    'uses' => 'JobController@index'
]);

Route::get('/manager/job/detail/{id}', [
    'as' => 'job-detail',
    'uses' => 'JobController@show'
]);

Route::get('/manager/job/add-queue/{id}',[
    'as' => 'add-queue',
    'uses' => 'JobController@addQueue'
]);

Route::get('/manager/job/prioritize-queue/{id}',[
    'as' => 'prioritize-queue',
    'uses' => 'JobController@prioritizeQueue'
]);

Route::get('/manager/job/up/{id}',[
    'as' => 'up-job',
    'uses' => 'JobController@upJob'
]);



//Editor
Route::get('/editor',[
    'as' => 'editor-index',
    'uses' => 'JobEditController@index'
]);

Route::get('/editor/job/get',[
    'as' => 'get-job',
    'uses' => 'JobEditController@getJob'
]);

Route::get('/editor/job/finish/{id}',[
    'as' => 'finish-job',
    'uses' => 'JobEditController@finishJob'
]);

Route::get('/editor/job/detail/{id}',[
    'as' => 'editor-job-detail',
    'uses' => 'JobEditController@show'
]);

//QA
Route::get('/QA',[
    'as' => 'QA-index',
    'uses' => 'JobCheckController@index'
]);

Route::get('/QA/working',[
    'as' => 'QA-working',
    'uses' => 'JobCheckController@working'
]);

Route::get('/QA/job/get/{id}',[
    'as' => 'get-edited-job',
    'uses' => 'JobCheckController@getJob'
]);

Route::get('/QA/job/detail/{id}',[
    'as' => 'QA-job-detail',
    'uses' => 'JobCheckController@show'
]);

Route::get('/QA/job/finish/{id}',[
    'as' => 'finish-edited-job',
    'uses' => 'JobCheckController@finishJob'
]);

