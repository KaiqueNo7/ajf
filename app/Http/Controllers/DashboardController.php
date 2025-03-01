<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Views;
use Illuminate\Contracts\View\View;

class DashboardController
{
    public function show(): View
    {
        $countProperties = Property::count();
        $countViews = Views::count();

        $moreViews = Property::withCount('views')
        ->where('visibility', '=', 1)
        ->orderByDesc('views_count')
        ->pluck('name')
        ->first();

        if(!$moreViews){
            $moreViews = 'Nenhum';
        }

        $countViewsToday = Views::whereDate('created_at', today())->count();

        return view('dashboard', [
            'countProperties' => $countProperties,
            'countViews' => $countViews,
            'moreViews' => $moreViews,
            'countViewsToday' => $countViewsToday,
        ]);
    }
}
