<?php

namespace App\View\Components\Layouts\Website;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Websiteapp extends Component
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
        return view('components.layouts.website.websiteapp');
    }
}
