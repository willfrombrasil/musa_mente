<?php

namespace App\View\Components\cliente;

use Illuminate\View\Component;

class questionario extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $dad;

    public function __construct($dad)
    {
        $this->dad = $dad;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cliente.questionario');
    }
}
