<?php

namespace App\View\Components\Beranda;

use App\Services\ApiService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Carousel extends Component
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
        return view('components.beranda.carousel', [
            'carousels' => $this->carousel(new ApiService()),
        ]);
    }
    public function carousel(ApiService $api)
    {
        $body = $api->get('carousels')->body();
        $bodyJson = json_decode($body, true);

        return $bodyJson['data'];
    }
}
