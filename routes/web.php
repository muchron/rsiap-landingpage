<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/artikel', function () {
    return view('pages.artikel');
});

