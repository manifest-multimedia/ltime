<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(){
        $locations=Location::all();
        $properties=Property::where('featured', true)->where('type', 'Property')->get();
        return view('projects', compact(['properties', 'locations']));
    }
}
