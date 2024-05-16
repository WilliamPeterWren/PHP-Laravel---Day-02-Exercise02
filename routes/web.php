<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "This is home page";
});

Route::get('/about', function () {
    return "This is a about us page";
});

Route::get('/contact', function () {
    return "This is a contact us page";
});

Route::get('/test-view', function () {
    return view('TestRoute');
});