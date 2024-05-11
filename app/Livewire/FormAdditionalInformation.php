<?php

namespace App\Livewire;

use App\Models\AdditionalInformation;
use Livewire\Component;

class FormAdditionalInformation extends Component
{
    public $additionalInformation;
    public $propertyId;

    public function createInformation($id)
    {
        AdditionalInformation::create([
            'property_id' => $id,
            'text' => $this->additionalInformation,
        ]);
    }

    public function updateInformation($id, $text)
    {
        $information = AdditionalInformation::find($id);

        $information->update([
            'text' => $text,
        ]);
    }

    public function render()
    {
        $additionalInformations = AdditionalInformation::where('property_id', $this->propertyId)->get();

        return view('livewire.form-additional-information', ['additionalInformations' => $additionalInformations]);
    }
}
