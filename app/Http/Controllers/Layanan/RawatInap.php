<?php

namespace App\Http\Controllers\Layanan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RawatInap extends Controller
{
    public function index()
    {
        return view('pages.layanan.rawat-inap', [
            'title' => ucfirst(request()->segment(1)) . ' - ' . 'Rawat Inap',
        ]);
    }
}
