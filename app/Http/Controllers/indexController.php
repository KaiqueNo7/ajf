<?php

namespace App\Http\Controllers;

use App\Mail\LeadClient;
use App\Models\AdditionalInformation;
use App\Models\Photos;
use App\Models\Property;
use App\Models\Views;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class indexController extends Controller
{   

    public function index(): View
    {
        $properties = Property::where('visibility', true)->get();

        return view('index', ['properties' => $properties]);
    }

    public function thanks(): View
    {
        return view('thanks');
    }

    public function show(String $name, Int $id): View
    {
        $property = Property::where('id', $id)->first();

        $sessionId = session()->getId();

        $existingView = Views::where('session_id', $sessionId)->where('property_id', $property->id)->first();

        if (!$existingView) {
            Views::create([
                'session_id' => $sessionId,
                'property_id' => $property->id,
            ]);
        }

        $additionalInformation = AdditionalInformation::where('property_id', $id)->get();
        $photos = Photos::where('property_id', $id)->get();

        return view('property', [
            'property' => $property, 
            'additionalInformation' => $additionalInformation,
            'photos' => $photos,
        ]);
    }

    public function sendMail(Request $request)
    {
        $dados = $request->all();

        Mail::to('contato@ajfimoveis.com')->send(new LeadClient($dados));

        return redirect()->route('thanks')->with('success', 'Mensagem enviada com sucesso!');
    }
}
