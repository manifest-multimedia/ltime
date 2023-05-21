<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class PropertyController extends Controller
{
    public function index(){
        $query="all";
        return view('projects', compact('query'));

    }
}
