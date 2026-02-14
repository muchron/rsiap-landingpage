<?php

namespace App\View\Components\Beranda;

use App\Services\ApiService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Artikel extends Component
{
    /**
     * Create a new component instance.
     */
    public $api;
    public function __construct(ApiService $api)
    {
        $this->api = $api;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        // return $this->artikel();
        return view(
            'components.beranda.artikel',
            [
                'articles' => $this->artikel(),
                'categories' => $this->category()
            ]
        );
    }

    public function artikel()
    {
        $body = $this->api->get('articles', ['per_page' => 3])->body();
        $bodyJson = json_decode($body, true);
        return $bodyJson['data'];
    }

    public function category()
    {
        $body = $this->api->get('categories')->body();
        $bodyJson = json_decode($body, true);
        return $bodyJson['data'];
    }

}
