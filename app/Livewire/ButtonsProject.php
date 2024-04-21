<?php

namespace App\Livewire;

use Livewire\Component;

class ButtonsProject extends Component
{
    public $activeTab = 'projeto';
    public $property;

    public function setActive($tab)
    {
        $this->activeTab = $tab;
    }

    public function render()
    {
        
        return view('livewire.buttons-project');
    }
}
