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

        $this->additionalInformation = '';

        flash()->success('Informação adicionada com sucesso.');
    }

    public function updateInformation($id, $text)
    {
        $information = AdditionalInformation::find($id);

        $information->update([
            'text' => $text,
        ]);

        flash()->success('Informação atualizada com sucesso.');
    }
    
    public function delete($id)
    {
        $information = AdditionalInformation::find($id);

        $information->delete();

        flash()->success('Informação deletada com sucesso.');
    }

    public function render()
    {
        $additionalInformations = AdditionalInformation::where('property_id', $this->propertyId)->get();

        return view('livewire.form-additional-information', ['additionalInformations' => $additionalInformations]);
    }
}
