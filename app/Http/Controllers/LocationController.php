<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
   
    public function index()
    {
        $locations = Location::all();
        return view('heatmap', compact('locations'));
    }

    public function store(Request $request){

        Location::create([ 
            'latitude'=>$request->lat,
            'longitude'=>$request->lng
        ]);
    }
}
