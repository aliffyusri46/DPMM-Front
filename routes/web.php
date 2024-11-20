<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/bm', function () {
    return view('bm.index');
})->name('bm.index');