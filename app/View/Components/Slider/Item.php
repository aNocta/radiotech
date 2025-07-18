<?php

namespace App\View\Components\Slider;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Item extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $shortDescription,
        public string $description,
        public string $image,
        public array $advantages,
    )
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.slider.item');
    }
}
