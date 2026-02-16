<?php

namespace App\Livewire\Beranda;

use App\Services\ApiService;
use Carbon\Carbon;
use Livewire\Component;

class FilterPoliklinik extends Component
{
    public $doctorData = [];
    public $poliklinik = ['data' => []];
    public $selectedDoctor = null;
    public $selectedDate = null;
    public $schedulesList = [];
    public $currentDay = '';

    public function mount(ApiService $api)
    {

        $this->selectedDate = now()->format('d/m/Y');
        $this->currentDay = strtoupper(now()->locale('id')->dayName);

        $this->fetchDoctor($api);
        $this->fetchPoliklinik($api);
        $this->fetchSchedule($api);
    }

    protected function fetchDoctor(ApiService $api)
    {
        $response = $api->get("doctors");
        $result = $response->successful() ? $response->json() : ['data' => []];

        $this->doctorData = collect($result['data'])->filter(function ($doctor) {
            return !empty($doctor['schedule']);
        })->toArray();
    }

    protected function fetchPoliklinik(ApiService $api)
    {
        $response = $api->get("polyclinics");
        $this->poliklinik = $response->successful() ? $response->json() : ['data' => []];
    }

    // Fungsi ini akan dipanggil otomatis saat selectedDate berubah
    public function updatedSelectedDate($value)
    {
        // Konversi string dd/mm/yyyy menjadi Carbon object
        $date = Carbon::createFromFormat('d/m/Y', $value);

        // Update nama hari (biar keterangan 'Mencari jadwal untuk: SENIN' ikut berubah)
        $this->currentDay = strtoupper($date->locale('id')->dayName);

        // Panggil fungsi ambil data/jadwal Anda
        $this->fetchSchedule(app(ApiService::class));
    }

    public function changeDoctor()
    {
        // 1. Jika tidak ada dokter yang dipilih, kembalikan ke jadwal umum hari tersebut
        if (!$this->selectedDoctor) {
            $this->fetchSchedule(app(ApiService::class));
            return;
        }

        // 2. Cari data dokter berdasarkan slug
        $resource = collect($this->doctorData)->firstWhere('slug', $this->selectedDoctor);

        if ($resource) {
            $doctorName = $resource['name'];
            $polyclinicName = $resource['polyclinic']['name'] ?? $resource['polyclinic'] ?? '-';

            // 3. Ambil semua jadwal dokter tersebut, tapi FILTER hanya untuk HARI YANG DIPILIH
            $this->schedulesList = collect($resource['schedule'] ?? [])
                ->filter(function ($item) {
                    // Pastikan nama hari di jadwal cocok dengan hari yang dipilih di datepicker
                    return strtoupper($item['day']) === strtoupper($this->currentDay);
                })
                ->map(function ($item) use ($doctorName, $polyclinicName) {
                    $item['name'] = $doctorName;
                    if (!isset($item['polyclinic'])) {
                        $item['polyclinic'] = $polyclinicName;
                    }
                    return $item;
                })
                ->toArray();
        }
    }

    public function resetFilter()
    {
        $this->selectedDoctor = null;
        $this->selectedDate = now()->format('d/m/Y');
        $this->currentDay = strtoupper(now()->locale('id')->dayName);

        // Refresh jadwal ke kondisi default (semua jadwal hari ini)
        $this->fetchSchedule(app(ApiService::class));
    }
    public function fetchSchedule(ApiService $api)
    {
        // Sekarang menggunakan $this->currentDay yang dinamis
        $response = $api->get("schedules/day/{$this->currentDay}");

        if ($response->successful()) {
            $result = $response->json();
            $this->schedulesList = $result['data'] ?? [];
        } else {
            $this->schedulesList = [];
        }
    }

    public function render()
    {
        return view('livewire.beranda.filter-poliklinik', [
            'doctors' => $this->doctorData,
            'polyclinics' => $this->poliklinik['data'] ?? [],
        ]);
    }
}