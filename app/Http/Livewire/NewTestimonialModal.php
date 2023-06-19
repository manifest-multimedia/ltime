<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewTestimonialModal extends Component
{
    public $testimonial_author; 
    public $testimonial_message;
    
    public function render()
    {
        return view('livewire.new-testimonial-modal');
    }

    public function save(){
        
        $this->validate([
            'testimonial_author'=>'required', 
            'testimonial_message'=>'required',
        ], [
            'testimonial_author.required'=>"Please provide a valid name", 
            'testimonial_message.required'=>"This field cannot be blank."
        ]);

        

    }
}
