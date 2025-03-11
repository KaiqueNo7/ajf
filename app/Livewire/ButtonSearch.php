<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Component;

class ButtonSearch extends Component
{
    public $search = '';

    public function render()
    {
        $search = '';

        if($this->search){
            $search =  "%".($this->search)."%";
        }

        return view('livewire.button-search', [
           'searchProperties' => Property::whereLike('name', $search)->get(),
        ]);
    }
}
