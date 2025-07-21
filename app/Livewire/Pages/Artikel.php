<?php

namespace App\Livewire\Pages;

use App\Services\ApiService;
use Livewire\Component;

class Artikel extends Component
{
    public $artikels;
    public $currentPage = 1;
    public function fetchArticles(ApiService $api)
    {
        $this->artikels = json_decode($api->get('articles', ['page' => $this->currentPage])->body(), true);
    }

    public function mount(ApiService $api)
    {
        $this->fetchArticles($api);
    }

    public function gotoPage($page)
    {
        if ($page < 1) {
            $page = 1;
        }
        if (isset($this->artikels['meta']['last_page']) && $page > $this->artikels['meta']['last_page']) {
            $page = $this->artikels['meta']['last_page'];
        }

        $this->currentPage = $page;
        $this->fetchArticles(new ApiService());
    }

    public function render()
    {
        return view('livewire.pages.artikel', [
            'artikels' => $this->artikels,
        ]);
    }
}