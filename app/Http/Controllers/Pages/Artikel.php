<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Services\ApiService;

class Artikel extends Controller
{
    protected $api;

    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        return view('pages.artikel', [
            'categories' => $this->category(),
            'newArticles' => $this->newArticles()
        ]);
    }

    public function get(string $slug)
    {
        $artikel = $this->api->get("articles/$slug")->json();

        $data = $artikel['data'] ?? [];

        return view('components.pages.read-artikel', [
            'artikel' => $data,
            'title' => $data['title'] ?? 'RSIA Aisyiyah Pekajangan',
        ]);
    }
    protected function category()
    {
        $response = $this->api->get('categories')->json();

        return collect($response['data'] ?? [])
            ->shuffle()
            ->take(10)
            ->values()
            ->toArray();
    }
    protected function newArticles()
    {
        $response = $this->api->get('articles')->json();

        return collect($response['data'] ?? [])
            ->sortByDesc('created_at')
            ->take(4)
            ->values()
            ->toArray();
    }

}
