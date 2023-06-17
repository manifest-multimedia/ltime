<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DeleteConfirmation extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $modelName;
     public $itemID;

    public function __construct($modelName, $itemID)
    {
        $this->modelName=$modelName;
        $this->itemID=$itemID;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.delete-confirmation');
    }
}
