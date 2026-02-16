<?php

use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
})->name('index');


Route::get('/layanan', function () {
    return view('errors.404');
})->name('layanan');
Route::get('/karir', function () {
    return view('errors.404');
})->name('karir');

Route::get('/artikel', [App\Http\Controllers\Pages\Artikel::class, 'index'])->name('artikel');
Route::get('/artikel/{slug}', [App\Http\Controllers\Pages\Artikel::class, 'get'])->name('artikel.read');

Route::prefix('profile')->group(function () {
    Route::get('/tentang-kami', function () {
        return view('pages.profile.tentang-kami');
    })->name('profile.tentang-kami');
    Route::get('/struktur-organisasi', function () {
        return view('errors.404');
    })->name('profile.struktur-organisasi');
    Route::get('/akreditasi', function () {
        return view('errors.404');
    })->name('profile.akreditasi');
});

Route::get('/test', function (ApiService $api) {
    return $api->get('polyclinics');
});
