<?php

namespace App\View\Components\Beranda;

use App\Services\ApiService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Illuminate\Support\Facades\Log;

class Layanan extends Component
{
    public ApiService $api;

    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    public function render(): View|Closure|string
    {
        try {
            $response = $this->api->get('specialists');
            $layanan = $response->successful() ? $response->json()['data'] : [];
            $iconMap = [
                'kebidanan-dan-kandungan' => 'ri-parent-line',
                'anestesi' => 'ri-capsule-fill',
                'spesialis-anak' => 'ri-service-line',
                'spesialis-bedah' => 'ri-knife-line',
                'spesialis-penyakit-dalam' => 'ri-heart-pulse-line',
                'patologi-klinik' => 'ri-microscope-line',
                'dokter-umum' => 'ri-stethoscope-line',
                'spesialis-radiologi' => 'ri-scan-line',
            ];
        } catch (\Exception $e) {
            Log::error("Gagal mengambil data layanan: " . $e->getMessage());
            $layanan = [];
        }

        return view('components.beranda.layanan', [
            'layanan' => $layanan,
            'iconMap' => $iconMap,
        ]);
    }
}