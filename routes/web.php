<?php

use App\Http\Controllers\Autenticar;

Route::get('/', function () {
    return view('canCruz');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    
});
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/reservation', 'ReservationController');
