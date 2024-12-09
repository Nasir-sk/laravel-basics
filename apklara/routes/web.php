<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/welcome', function () {
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});

Route::view('user-form', 'user-form');
Route::post('adduser', [UserController::class, 'addUser']);
