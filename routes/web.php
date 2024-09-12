<?php

use Illuminate\Support\Facades\Route;


Route::get('/Home', function () {
    return view('Home');
});

Route::get('/About', function () {
    return view('About');
});