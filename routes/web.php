<?php

use App\Services\ApiService;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});
Route::get('/artikel', function () {
    return view('pages.artikel');
});

Route::get('/test', function () {
    // return 'sdsdsdsd';

    $url = 'http://127.0.0.1:8000/api/app/articles';
    $response = Http::get($url);
    try {
        return $response->body();
    } catch (\Throwable $th) {
        abort(500);
    }

});

Route::get('/test/{id}', function (ApiService $api, string $id) {
    return $api->get('articles/' . $id);
});

