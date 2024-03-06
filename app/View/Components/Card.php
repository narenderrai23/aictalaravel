<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Card extends Component
{
    public $class;
    public $image;
    public $body;
    /**
     * Create a new component instance.
     */
    public function __construct($class, $image, $body)
    {
        $this->class = $class;
        $this->image = $image;
        $this->body = $body;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.card');
    }
}
