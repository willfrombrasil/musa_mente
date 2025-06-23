<?php

namespace App\View\Components\admin;

use Illuminate\View\Component;

class cardIndex extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $resultado;

    public function __construct($resultado)
    {
        $this->resultado = $resultado;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.admin.cardIndex');
    }
}
