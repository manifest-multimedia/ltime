<?php

namespace App\Http\Livewire;

use Livewire\Component;

class NewPropertyModal extends Component
{
    public $property_title;
    public $property_type;
    public $property_description;
    public $property_location;
    public $property_price;
    public $featured;
    public $featured_image;
    public $cover_photo;

    public function render()
    {
        return view('livewire.new-property-modal');
    }

    public function save(){
        $this->validate([
            'property_title'=>'required', 
            'property_description'=>'required', 
            'property_location'=>'required', 
            'property_type'=>'required', 
            'property_price'=>'required', 
            'featured_image'=>'required', 
        ],[

            'property_type.required'=>"Please select a property type", 
            'property_title.required'=>"Please provide a title for the entry", 
            'property_location.required'=>"Select a location",
            'property_type.required' => "Select property type", 
            'property_price.required'=> "Please indicate the price for the entry",
            'featured_image.required'=> "A valid featured image is required"


        ]);
    }

    public function resetValues(){
        $this->property_title='';
        $this->property_type='';
        $this->property_description='';
        $this->property_location='';
        $this->property_price='';
        $this->featured='';
        $this->featured_image='';
        $this->cover_photo='';

    }
}
