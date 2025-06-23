<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $usuario;

    public function __construct($usuario)
    {
        $this->usuario = $usuario;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.menu');
    }
}
