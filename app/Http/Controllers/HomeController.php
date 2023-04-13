<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class HomeController extends Controller
{
    public function index() 
        {   
            $locations=Location::where('status', 'enabled')->get();
            return view('home', compact(['locations']));
        }
    
}
