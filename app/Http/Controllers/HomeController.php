<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Property;

class HomeController extends Controller
{
    public function index() 
        {   
            $locations=Location::where('status', 'enabled')->get();
            $properties=Property::where('featured', true)->where('type', 'Real Estate')->get();
            return view('home', compact(['locations', 'properties']));
        }
    
}
