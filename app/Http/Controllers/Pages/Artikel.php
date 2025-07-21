<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;

class Artikel extends Controller
{
    protected $api;
    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }
    public function index(int $pages)
    {
        return view('pages.artikel', [
            'artikels' => json_decode($this->api->get('articles', ['page' => $pages])->body(), true)

        ]);
    }
}
