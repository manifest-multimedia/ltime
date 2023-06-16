<?php

namespace App\Http\Livewire;

use App\Models\Location;
use App\Models\Property;
use Livewire\Component;
use Livewire\WithFileUploads;

class NewPropertyModal extends Component
{
    use WithFileUploads;

    public $property_title;
    public $property_type;
    public $property_description;
    public $property_location;
    public $property_price;
    public $featured;
    public $featured_image;
    public $cover_photo;
    public $locations; 

    public function mount(){
        $this->locations=Location::all();
    }

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

            'property_title.required'=>"Please provide a title for the entry", 
            'property_description.required' => "Please provide a short description.", 
            'property_location.required'=>"Select a location",
            'property_type.required'=>"Please select a property type", 
            'property_price.required'=> "Please indicate the price for the entry",
            'featured_image.required'=> "A valid featured image is required"

        ]);

       $featured_image_path=$this->featured_image->store('properties', 'public');
      
       if(isset($this->cover_photo)){

           $cover_image_path=$this->cover_photo->store('cover_photos', 'public');
       }

       $store=new Property;
       $store->title=$this->property_title;
       $store->description=$this->property_description; 
       $store->location=$this->property_location;
       $store->type=$this->property_type;
       $store->price=$this->property_price;
       $store->featured_image=$featured_image_path;
       if(isset($this->cover_photo))
            {$store->cover_image=$cover_image_path;
        }
        $store->featured=$this->featured;

       $store->save();

       session()->flash('Entry Saved', 'New Entry Saved Successfully');

       redirect("/portal/properties");

       $this->resetValues();

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

    public function delete($model,$id){
        
    }
}
