<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ViewsGraph extends Component
{
    public $properties;
    public $views;

    public function mount() 
    {
        $propertiesData = Property::withCount('views')
        ->where('visibility', '=', 1)
        ->orderByDesc('name')
        ->get();

        $this->properties = $propertiesData->pluck('name');
        $this->views = $propertiesData->pluck('views_count');
    }

    public function render()
    {
        return view('livewire.views-graph');
    }
}
