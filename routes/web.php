<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function(){
    return view('home');
});

Route::view('homepage', 'home');

Route::get('pdata', [MyController::class,'setdata']);