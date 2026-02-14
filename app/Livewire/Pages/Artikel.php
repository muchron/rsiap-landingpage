<?php

namespace App\Livewire\Pages;

use App\Services\ApiService;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;

class Artikel extends Component
{
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    public $category = null;
    public $categories = [];
    protected $queryString = [
        'category' => ['except' => null],
    ];
    protected $listeners = ['filtercategory'];

    public function filterCategory($slug = null)
    {
        $this->category = $slug;
        $this->resetPage();
    }

    public function mount(ApiService $api)
    {
        $this->categories = collect(
            $api->get('categories')->json()['data'] ?? []
        )->take(10)->toArray();
    }
    public function render(ApiService $api)
    {

        $params = [
            'page' => $this->getPage(),
            'per_page' => 16,
            'with' => 'category',
        ];

        if ($this->category) {
            $params['category'] = $this->category;
        }
        $response = $api->get('articles', $params);

        $json = $response->json();

        $artikels = new LengthAwarePaginator(
            $json['data'],
            $json['meta']['total'],
            $json['meta']['per_page'],
            $json['meta']['current_page'],
            [
                'path' => request()->url(),
                'query' => request()->query(),
            ]
        );

        return view('livewire.pages.artikel', compact('artikels'));
    }
}
