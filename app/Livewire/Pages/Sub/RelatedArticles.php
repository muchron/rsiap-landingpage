<?php

namespace App\Livewire\Pages\Sub;

use App\Services\ApiService;
use Livewire\Component;

class RelatedArticles extends Component
{
    public $articles;

    public function render()
    {
        return view('livewire.pages.sub.related-articles', [
            'articles' => $this->articles
        ]);
    }
    function mount(ApiService $api, string $slug)
    {
        $this->fetchArticlesWithCategory($api, $slug);
    }

    public function fetchArticlesWithCategory(ApiService $api, string $slug)
    {
        $response = $api->get("categories/{$slug}")->json();

        $articles = collect($response['data']['articles'] ?? []);

        $this->articles = $articles
            ->shuffle()     // random
            ->take(6)       // ambil 6 saja
            ->values()      // reset index
            ->toArray();
    }



}
