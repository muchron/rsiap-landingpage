<?php

namespace App\Http\Controllers;

use App\Services\ApiService;

class KamarController extends Controller
{
    protected ApiService $api;
    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }
    public function get(string $slug)
    {
        $kamar = $this->api->get("kamar")->json();
        $data = collect($kamar['data'] ?? [])
            ->firstWhere('slug', $slug);

        return $data;
    }

}
