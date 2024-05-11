<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPhotos extends Component
{
    use WithFileUploads;
 
    #[Validate('image|max:1024')]
    public $photo;
 

    public function render()
    {
        return view('livewire.form-photos');
    }
}
