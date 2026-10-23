
<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about-sarah', function () {
    return view('about-sarah');
});

Route::get('/about-nafisah', function () {
    return view('about-nafisah');
});

Route::get('/contact', function () {
    return view('contact');
});
