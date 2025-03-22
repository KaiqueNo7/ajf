<?php

namespace App\Http\Controllers;

use App\Mail\LeadClient;
use App\Models\AdditionalInformation;
use App\Models\Photos;
use App\Models\Property;
use App\Models\Views;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class indexController
{
    public function index(): View
    {
        $properties = Property::where('visibility', true)->orderBy('updated_at', 'desc')->get();

        return view('index', ['properties' => $properties]);
    }

    public function show(Property $property): View
    {
        $sessionId = session()->getId();

        $existingView = Views::where('session_id', $sessionId)->where('property_id', $property->id)->first();

        if (! $existingView) {
            Views::create([
                'session_id' => $sessionId,
                'property_id' => $property->id,
            ]);
        }

        $additionalInformation = AdditionalInformation::where('property_id', $property->id)->get();
        $photos = Photos::where('property_id', $property->id)->orderBy('order')->get();

        return view('property', [
            'property' => $property,
            'additionalInformation' => $additionalInformation,
            'photos' => $photos,
        ]);
    }
}
