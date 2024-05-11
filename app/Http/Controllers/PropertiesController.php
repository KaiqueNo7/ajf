<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertiesController extends Controller
{
    public function show()
    {
        $properties = Property::with('additionalInformation')->with('mainPhoto')->get();

        return view('layouts.properties', ['properties' => $properties]);
    }

    public function render()
    {
        return view('layouts.new-property', ['property' => '']);
    }

    public function edit($id)
    {
        $property = Property::where('id', $id)->first();

        return view('layouts.new-property', ['property' => $property]);
    }
}
