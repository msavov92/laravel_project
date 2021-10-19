<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersControler;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/aboutus', function() {
    return view('aboutus');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::get('/', [CustomerController::class, 'index']);