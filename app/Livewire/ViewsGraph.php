<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ViewsGraph extends Component
{
    public function render()
    {
        $propertyViews = Property::withCount('views')
            ->orderByDesc('views_count')
            ->get();

        return view('livewire.views-graph', ['propertyViews' => $propertyViews]);
    }
}
