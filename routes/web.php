<?php

use App\Http\Controllers\Layanan\RawatInap;
use App\Http\Controllers\Layanan\RawatJalan;
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
        return view('pages.profile.tentang-kami', [
            'title' => ucfirst(request()->segment(1)) . ' - ' . 'Tentang Kami',
        ]);
    })->name('profile.tentang-kami');
    Route::get('/struktur-organisasi', function () {
        return view(
            'pages.profile.struktur-organisasi',
            ['title' => ucfirst(request()->segment(1)) . ' - ' . 'Struktur Organisasi']
        );
    })->name('profile.struktur-organisasi');
    Route::get('/akreditasi', function () {
        return view(
            'pages.profile.akreditasi',
            ['title' => ucfirst(request()->segment(1)) . ' - ' . 'Akreditasi']
        );
    })->name('profile.akreditasi');
});

Route::prefix('layanan')->group(function () {
    Route::get('/', function () {
        return view('pages.layanan.index', [
            'title' => ucfirst(request()->segment(1)),
        ]);
    })->name('layanan');
    Route::get('/rawat-jalan', [RawatJalan::class, 'index'])->name('layanan.rawat-jalan');

    Route::get('/rawat-inap', [RawatInap::class, 'index'])->name('layanan.rawat-inap');


    Route::get('/ugd', function () {
return view('errors.404');
    })->name('layanan.ugd');
    Route::get('/poliklinik', function () {
        return view('errors.404');
    })->name('layanan.poliklinik');
});

Route::get('/test', function (ApiService $api) {
    return $api->get('polyclinics');
});
