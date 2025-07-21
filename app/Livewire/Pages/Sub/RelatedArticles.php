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
        $this->articles = json_decode($api->get("categories/{$slug}")->body(), true);
    }



}
