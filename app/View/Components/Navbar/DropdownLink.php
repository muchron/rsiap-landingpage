<?php

namespace App\View\Components\Navbar;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DropdownLink extends Component
{
    public string $href;
    public bool $active;
    public function __construct(string $href, bool $active = false)
    {
        $this->href = $href;
        $this->active = url()->current() === $href ?? $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.navbar.dropdown-link');
    }
}
