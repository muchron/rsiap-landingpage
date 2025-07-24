<?php

namespace App\Livewire\Beranda;

use App\Services\ApiService;
use Livewire\Component;
use Illuminate\Support\Collection;

class FilterPoliklinik extends Component
{
    public $doctor = ['data' => []];
    public $poliklinik = ['data' => []];
    public $selectedPolyclinic = null;
    public $selectedDoctor = null;
    public $selectedPolyclinicSlug = null;
    public $schedulesList = [];

    public function mount(ApiService $api)
    {
        $this->fetchDoctor($api);
        $this->fetchPoliklinik($api);
    }

    protected function fetchDoctor(ApiService $api)
    {
        $response = $api->get("doctors");
        $result = $response->successful()
            ? $response->json()
            : ['data' => []];

        $this->doctor = collect($result['data'])->filter(function ($doctor) {
            return $doctor['schedule'];
        })->toArray();

    }

    protected function fetchPoliklinik(ApiService $api)
    {
        $response = $api->get("polyclinics");
        $this->poliklinik = $response->successful()
            ? $response->json()
            : ['data' => []];

    }

    public function changePolyclinic()
    {
        $collect = collect($this->poliklinik['data']);
        $selected = $collect->firstWhere('slug', $this->selectedPolyclinicSlug);

        if ($selected) {
            $this->selectedPolyclinic = $selected;
            $this->schedulesList = $selected['schedules'] ?? [];
        } else {
            $this->selectedPolyclinic = null;
            $this->schedulesList = [];
        }
    }

    function changeDoctor()
    {
        $resource = collect($this->doctor)->firstWhere('slug', $this->selectedDoctor) ?? [];

        if (!$resource) {
            $this->schedulesList = [];
            return;
        }

        $doctor = collect($resource['schedule'])
            ->map(function ($schedule) {
                return $schedule;
            })
            ->groupBy('slug', false)
            ->toArray();

        $this->schedulesList = $doctor;
    }

    public function render()
    {
        return view('livewire.beranda.filter-poliklinik', [
            'doctors' => $this->doctor ?? [],
            'polyclinics' => $this->poliklinik['data'] ?? [],
            'schedule' => $this->schedulesList,
        ]);
    }
}
