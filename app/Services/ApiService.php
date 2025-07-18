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
    }
    // CREATE CONFIG DONOT REPEAT YOURSELF
    public function get(string $endpoint, array $params = []): Response
    {
        return Http::withHeaders([
            'Accept' => 'application/json',
            'X-API-KEY' => $this->apiKey,
        ])
            ->get($this->baseUrl . $endpoint, $params);
    }

    public function post(string $endpoint, array $data = []): Response
    {
        return Http::withHeaders([
            'Accept' => 'application/json',
            'X-API-KEY' => $this->apiKey,
        ])
            ->post($this->baseUrl . $endpoint, $data);
    }

    // Add more methods: put, delete, etc.
}
