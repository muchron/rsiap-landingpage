<?php

namespace App\Http\Controllers;

use App\Services\ApiService;
use Illuminate\Http\Request;

class IndikatorMutuController extends Controller
{
    protected ApiService $api;

    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    public function index()
    {
        return view(
            'pages.profile.indikator-mutu-nasional',
            ['title' => ucfirst(request()->segment(1)) . ' - ' . 'Indikator Mutu Nasional', 'indikatorMutu' => $this->get()]
        );
    }

    public function get()
    {
        $indikatorMutu = $this->api->get("indikator-mutus")->json();
        return $indikatorMutu;
    }
}
