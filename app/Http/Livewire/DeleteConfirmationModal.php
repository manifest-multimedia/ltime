<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DeleteConfirmationModal extends Component
{
    public $model;
    public $itemID;

    public function render()
    {
        return view('livewire.delete-confirmation-modal');
    }

    public function delete(){
        switch ($this->model) {
            case 'user':
                # code...

                \App\Models\User::where('id', $this->itemID)->delete();
                session()->flash('deletesuccess', 'Delete request completed successfully');
                return redirect()->back(); 

                break;
            
            case 'property':
                
                \App\Models\Property::where('id', $$this->itemID)->delete();

                session()->flash('deletesuccess', 'Delete request completed successfully');

                return redirect()->back();


            default:
                # code...
                break;
        }
    }
}
