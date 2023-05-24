<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contact;

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
        
        $saveContact=new Contact; 
        $saveContact->from_name=$this->contactName;
        $saveContact->from_email=$this->contactEmail;
        $saveContact->from_phone=$this->contactPhone;
        $saveContact->subject=$this->contactSubject;
        $saveContact->message_body=$this->contactMessage;
        $saveContact->type="message";
        $saveContact->read_status=false; 
        $saveContact->save();

        session()->flash('MessageSent', "Thanks for contacting us $this->contactName. We have received your message. Please allow a few moments for us to respond.");
        $this->resetValues();
    }

    public function resetValues(){
        $this->contactName="";
        $this->contactEmail="";
        $this->contactPhone="";
        $this->contactSubject="";
        $this->contactMessage="";
    }

}
