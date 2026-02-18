<?php

namespace App\Services;

use Cache;
use Illuminate\Support\Facades\Http;

class ApiBlogServices
{
    protected int $defaultTtl = 30;
    protected string $url = '';
    protected string $consId = '';
    protected string $apiKey = '';

    public function __construct()
    {
        $config = config('services.api_blog');
        $this->url = $config['url'];
        $this->consId = $config['cons_id'];
        $this->apiKey = $config['api_key'];
    }


    public function get(string $endpoint, array $params = [], int $ttl = null)
    {
        $ttl ??= $this->defaultTtl;

        $cacheKey = $this->makeCacheKey($endpoint, $params);

        return Cache::remember(
            $cacheKey,
            now()->addSeconds($ttl),
            function () use ($endpoint, $params) {
                $response = Http::timeout(5)
                    ->withHeaders($this->headers())
                    ->get($this->url.$endpoint, $params);

                if ($response->failed()) {
                    return [];
                }

                return $response->json();
            }
        );
    }
    protected function headers(): array
    {
        return [
            'X-Cons-ID' => $this->consId,
            'X-API-Key' => $this->apiKey,
            'Accept' => 'application/json',
        ];
    }

    protected function makeCacheKey(string $endpoint, array $params): string
    {
        return 'api_blog:'.md5($endpoint.serialize($params));
    }
}
