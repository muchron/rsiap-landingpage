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
    public $schedulesList = [];
    public $currentDay = '';

    public function mount(ApiService $api)
    {
        // Set hari ini untuk label di UI nanti
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

    // public function changeDoctor()
    // {
    //     if (!$this->selectedDoctor) {
    //         // Jika pilihan dokter dihapus, tampilkan lagi jadwal semua dokter hari ini
    //         $this->fetchSchedule(new ApiService());
    //         return;
    //     }

    //     $resource = collect($this->doctorData)->firstWhere('slug', $this->selectedDoctor);

    //     // Pastikan kita mengambil key 'schedule' dari data dokter
    //     $this->schedulesList = $resource['schedule'] ?? [];
    // }

    public function changeDoctor()
    {
        if (!$this->selectedDoctor) {
            $this->fetchSchedule(app(ApiService::class));
            return;
        }

        $resource = collect($this->doctorData)->firstWhere('slug', $this->selectedDoctor);

        if ($resource) {
            $doctorName = $resource['name'];
            $polyclinicName = $resource['polyclinic']['name'] ?? $resource['polyclinic'] ?? '-';
            $this->schedulesList = collect($resource['schedule'] ?? [])->map(function ($item) use ($doctorName, $polyclinicName) {
                $item['name'] = $doctorName;
                if (!isset($item['polyclinic'])) {
                    $item['polyclinic'] = $polyclinicName;
                }
                return $item;
            })->toArray();
        }
    }
    public function fetchSchedule(ApiService $api)
    {
        $today = strtoupper(now()->locale('id')->dayName);
        $response = $api->get("schedules/day/{$today}");

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