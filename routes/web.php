<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('content.home');
});

Route::get('/contact', function () {
    return view('content.contact');
});

Route::get('/services', function () {
    return view('content.services');
});
