<?php

namespace App\Http\Controllers;

use App\Models\Property;

class PropertiesController
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

    public function edit(Property $property)
    {
        return view('layouts.new-property', ['property' => $property]);
    }

    public function additionalInformation(Property $property)
    {
        return view('layouts.additional-information', ['property' => $property]);
    }

    public function photos(Property $property)
    {
        return view('layouts.photos', ['property' => $property]);
    }
}
