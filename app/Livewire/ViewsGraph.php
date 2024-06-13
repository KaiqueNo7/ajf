<?php

namespace App\Livewire;

use App\Models\Views;
use Livewire\Component;

class ViewsGraph extends Component
{
    public function render()
    {
        $views = Views::with('property')->get();

        return view('livewire.views-graph', ['views' => $views]);
    }
}
