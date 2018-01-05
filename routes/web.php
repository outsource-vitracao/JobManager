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

Route::get('/manager/create-job', function () {
    return view('manager.createjob');
});

Route::post('/manager/create-job',[
    'as' => 'create-job',
    'uses' => 'JobController@store' 
]);

Route::get('/manager/create-order', function () {
    return view('manager.createorder');
});


Route::get('/manager', function() {
    return view('manager.index');
});

Route::get('/manager/detail', function() {
    return view('manager.detail');
});

