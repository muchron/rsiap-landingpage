<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class NavLink extends Component
{
    public string $href;
    public bool $active;
    public function __construct(string $href)
    {
        $this->href = $href;
        $this->active = url()->current() === $href;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.nav-link');
    }
}
