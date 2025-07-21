<?php

use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/artikel', [App\Http\Controllers\Pages\Artikel::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [App\Http\Controllers\Pages\Artikel::class, 'get'])->name('artikel.read');

