<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertiesController extends Controller
{
    public function show()
    {
        $properties = Property::with('additionalInformation')->with('photos')->get();

        return view('layouts.properties', ['properties' => $properties]);
    }

    public function create()
    {
        return view('layouts.new-property');
    }
}
