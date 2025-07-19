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
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.beranda.artikel', ['articles' => $this->artikel(new ApiService())]);
    }

    public function artikel(ApiService $api)
    {
        $body = $api->get('articles', ['per_page' => 3])->body();
        $bodyJson = json_decode($body, true);

        return $bodyJson['data'];
    }

}
