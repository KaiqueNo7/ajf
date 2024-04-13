<?php

namespace App\Http\Controllers;

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
}
