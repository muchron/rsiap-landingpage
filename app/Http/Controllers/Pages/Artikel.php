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
    public function index(int $pages = null)
    {
        return view('pages.artikel', [
            'artikels' => json_decode($this->api->get('articles', ['page' => 2])->body(), true)

        ]);
    }
    public function get(string $slug)
    {
        $arikel = json_decode($this->api->get("articles/$slug")->body(), true);
        return view('components.pages.read-artikel', [
            'artikel' => $arikel['data']
        ]);
    }
}
