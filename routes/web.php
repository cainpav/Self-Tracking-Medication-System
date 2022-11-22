<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\MedicalController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware(['auth'])->group(function (){

    //dashboard
    Route::get('/dashboard',[App\Http\Controllers\User\DashboardController::class, 'index']);

    //another way
    //Route::resource("/medicalrec", MedicalController::class);

    //view
    Route::get('/medicalrecord','App\Http\Controllers\User\MedicalController@index');

    //route to create page
    Route::get('create', function (){
    return view('user/create');
    });

    //save insert data (store)
    Route::post('/store', 'App\Http\Controllers\User\MedicalController@store');

    //show
    Route::get('/medicalrecord/{id}/show','App\Http\Controllers\User\MedicalController@show');

    //edit
    Route::get('/medicalrecord/{id}/edit','App\Http\Controllers\User\MedicalController@edit');

    //save edit update
    Route::post('/medicalrecord/{id}/update','App\Http\Controllers\User\MedicalController@update');

    //delete
    Route::get('/medicalrecord/{id}/delete','App\Http\Controllers\User\MedicalController@delete');

});
