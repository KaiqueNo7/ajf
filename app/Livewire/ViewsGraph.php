<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ViewsGraph extends Component
{
    public function render()
    {
        $propertyViews = Property::withCount('views')->get();

        return view('livewire.views-graph', ['propertyViews' => $propertyViews]);
    }
}
