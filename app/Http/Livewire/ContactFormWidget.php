<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactFormWidget extends Component
{
    public $contactName;
    public $contactEmail;
    public $contactMessage;
    public $contactPhone;
    public $contactSubject; 

    public function render()
    {
        return view('livewire.contact-form-widget');
    }

    public function sendMessage(){
        $rules=[
            'contactName' => 'required', 
            'contactEmail'=> 'required', 
            'contactPhone'=> 'required',
            'contactMessage' => 'required', 
        ];

        $messages=[
            'contactName.required' => 'How should we call you?', 
            'contactEmail.required' => 'Please provide a valid email address', 
            'contactPhone.required' => 'A valid phone number is required', 
            'contactMessage.required' => 'The message field cannot be empty',
        ];

        $this->validate($rules,$messages);

    }

}
