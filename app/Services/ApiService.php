<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\Response;

class ApiService
{
    protected string $baseUrl;
    protected string $apiKey;
    protected $url;

    public function __construct()
    {
        $this->baseUrl = config('services.api.base_url');
        $this->apiKey = config('services.api.key');
        $this->cons_id = config('services.api.cons_id');
    }
    // CREATE CONFIG DONOT REPEAT YOURSELF
    public function get(string $endpoint, array $params = []): Response
    {
        return Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-API-KEY' => $this->apiKey,
            'X-CONS-ID' => $this->cons_id
        ])
            ->get($this->baseUrl.$endpoint, $params);
    }

    public function post(string $endpoint, array $data = []): Response
    {
        return Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'X-API-KEY' => $this->apiKey,
            'X-CONS-ID' => $this->cons_id
        ])
            ->post($this->baseUrl.$endpoint, $data);
    }

    // Add more methods: put, delete, etc.
}
