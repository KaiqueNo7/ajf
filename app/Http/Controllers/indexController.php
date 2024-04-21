<?php

namespace App\Http\Controllers;

use App\Models\AdditionalInformation;
use App\Models\Photos;
use App\Models\Property;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class indexController extends Controller
{   

    public function index(): View
    {
        $properties = Property::all();

        return view('index', ['properties' => $properties]);
    }

    public function show(String $name, Int $id): View
    {
        $property = Property::where('id', $id)->first();

        $additionalInformation = AdditionalInformation::where('property_id', $id)->get();
        $photos = Photos::where('property_id', $id)->get();

        return view('property', [
            'property' => $property, 
            'additionalInformation' => $additionalInformation,
            'photos' => $photos,
        ]);
    }
}
