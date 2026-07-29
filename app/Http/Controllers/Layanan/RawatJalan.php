<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use App\Services\ApiService;
use Illuminate\Http\Request;

class RawatJalan extends Controller
{
    protected $api;

    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }
    public function index()
    {
        return view('pages.layanan.rawat-jalan', [
            'title' => ucfirst(request()->segment(1)) . ' - ' . 'Rawat Jalan',
            'dokter' => $this->dokter(),
        ]);
    }
    public function dokter()
    {
        $dokter = $this->api->get('specialists')->json();
        return collect($dokter['data'] ?? [])
            ->values()
            ->toArray();
    }

}
