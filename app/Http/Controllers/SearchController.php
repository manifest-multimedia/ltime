<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;

class SearchController extends Controller
{
    public function search(Request $request){

        $search=$request->search; 
        $location=$request->location;
        $property_type=$request->property_type;
        $search_type = $request->search_type;

        // dd($search);

        $results = Property::where('type', $search_type)
    ->where(function ($query) use ($search) {
        $query->where('title', 'like', '%' . $search . '%')
            ->orWhere('property_type', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%');
    })
    ->get();

    
        if($results->count()>0){
            $query="search";
            return view('projects', compact('query', 'results'));
        } else {
            $query="empty";
            return view('projects', compact('query'));
        }

    }

   
}
