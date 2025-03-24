<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welocome');
});

Route::view('/home','home');