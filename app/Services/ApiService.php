<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Client\Response;

class ApiService
{
    protected array $config;

    public function __construct()
    {
        // Mengambil semua config api dalam satu kali panggil
        $this->config = config('services.api');
    }

    /**
     * Logic OAuth2 untuk API External
     */
    protected function getExternalToken(): string
    {
        return Cache::remember('api_external_token', now()->addHours(23), function () {
            $response = Http::asJson()->post($this->config['external']['base_url'] . '/oauth/token', [
                'grant_type' => 'password',
                'client_id' => $this->config['external']['client_id'],
                'client_secret' => $this->config['external']['client_secret'],
                'username' => $this->config['external']['username'],
                'password' => $this->config['external']['password'],
                'scope' => '',
            ]);

            if ($response->successful()) {
                return $response->json()['access_token'];
            }

            throw new \Exception("OAuth External Failed: " . $response->body());
        });
    }

    /**
     * Generator Request Client
     */
    protected function builder(bool $isExternal = false)
    {
        if ($isExternal) {
            // Jalur External: Menggunakan Bearer Token
            return Http::baseUrl($this->config['external']['base_url'])
                ->withToken($this->getExternalToken())
                ->acceptJson();
        }

        // Jalur Internal: Menggunakan X-API-KEY & X-CONS-ID
        return Http::baseUrl($this->config['base_url'])
            ->withHeaders([
                'X-API-KEY' => $this->config['key'],
                'X-CONS-ID' => $this->config['cons_id'],
                'Accept' => 'application/json',
            ]);
    }

    /**
     * Method GET Universal
     */
    public function get(string $endpoint, array $params = [], bool $isExternal = false): Response
    {
        $response = $this->builder($isExternal)->get($endpoint, $params);

        // Handle Auto-Refresh Token jika External 401
        if ($isExternal && $response->status() === 401) {
            Cache::forget('api_external_token');
            return $this->get($endpoint, $params, true);
        }

        return $response;
    }

    /**
     * Method POST Universal
     */
    public function post(string $endpoint, array $data = [], bool $isExternal = false): Response
    {
        $response = $this->builder($isExternal)->post($endpoint, $data);

        if ($isExternal && $response->status() === 401) {
            Cache::forget('api_external_token');
            return $this->post($endpoint, $data, true);
        }

        return $response;
    }
}