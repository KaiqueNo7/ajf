<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ViewsGraph extends Component
{
    public function render()
    {
        $views = Property::withCount('views')
            ->where('visibility', '=', 1)
            ->orderByDesc('views_count')
            ->get();

        return view('livewire.views-graph', compact('views'));
    }
}
