<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('page.home');
});
Route::get('/about', function () {
    return view('page.about');
});
Route::get('/blog', function () {
    return view('page.blog');
});
Route::get('/project', function () {
    return view('page.project');
});
