<?php

namespace App\Http\Livewire;

use App\Models\Location;
use Livewire\Component;
use App\Models\Property;

class PropertySearchPage extends Component
{
    public $properties; 
    public $locations;
    public $price_filter = [0, 5000];
    public $initializedSlider = false;
    public $highestprice; 
    public $query;
    public $results; 

    protected $listeners = ['priceFilterChanged'];

    public function mount($query,$results=null){
        $this->query=$query;

        if (isset($results)) {
            $this->results = $results;
        }
        // $this->results=$results;
        $this->highestprice=Property::max('price');
        $this->locations=Location::all();
       
    }
    public function render()
    {
        $propertyTypes= Property::distinct('type')->pluck('type');
      
        if($this->query==='all'){
          
        }else{
            
           
        }

        switch ($this->query) {
            case 'all':
                $this->properties=Property::all();
                break;
            case 'empty':
                $this->properties=[];
            default:
                $this->properties=$this->results;
                break;
        }
      
        return view('livewire.property-search-page', compact('propertyTypes'));
    }

    public function priceFilterChanged($value)
    {
        $this->price_filter = explode(" - ", $value);

        
    }
}
