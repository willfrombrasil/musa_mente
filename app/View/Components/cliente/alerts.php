<?php

namespace App\View\Components\cliente;

use Illuminate\View\Component;

class alerts extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $errors;

    public function __construct($errors)
    {
         $this->errors = $errors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cliente.alerts');
    }
}
