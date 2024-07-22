<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Pages']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Pages']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog Pages']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Pages']);
});
