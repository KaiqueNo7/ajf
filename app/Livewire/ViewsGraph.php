<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ViewsGraph extends Component
{
    public function render()
    {
        $properties = Property::withCount('views')
            ->where('visibility', '=', 1)
            ->orderByDesc('name')
            ->get()
            ->pluck('name');

        $views = Property::withCount('views')
            ->where('visibility', '=', 1)
            ->orderByDesc('name')
            ->get()
            ->pluck('views_count');

        return view('livewire.views-graph', compact('properties'), compact('views'));
    }
}
