<?php

namespace App\Livewire;

use App\Models\Property;
use Livewire\Attributes\On;
use Livewire\Component;

class FormProperty extends Component
{
    public $name;
    public $status;
    public $project;
    public $plant;
    public $size;
    public $bedrooms;
    public $bathrooms;
    public $address;
    public $maps;
    public $propertyId;
    public $formAction = 'submit';
    public $action = 'Incluir';

    public function create()
    {
        $property = Property::create([
            'name' => $this->name,
            'status' => $this->status,
            'project' => $this->project,
            'plant' => $this->plant,
            'size' => $this->size,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'address' => $this->address,
            'maps' => $this->maps,
        ]);

        return redirect()->to('edit/' . $property->id);
    }    

    public function update($id)
    {
        $property = Property::find($id);

        $property->update([
            'name' => $this->name,
            'status' => $this->status,
            'project' => $this->project,
            'plant' => $this->plant,
            'size' => $this->size,
            'bedrooms' => $this->bedrooms,
            'bathrooms' => $this->bathrooms,
            'address' => $this->address,
            'maps' => $this->maps,
        ]);

        return redirect()->to('edit/' . $property->id);
    }

    public function render()
    {
        if(!empty($this->propertyId)){
            $property = Property::where('id', $this->propertyId)->first();

            $this->name = $property->name;
            $this->status = $property->status;
            $this->project = $property->project;
            $this->plant = $property->plant;
            $this->size = $property->size;
            $this->bedrooms = $property->bedrooms;
            $this->bathrooms = $property->bathrooms;
            $this->address = $property->address;
            $this->maps = $property->maps;
            $this->formAction = 'update(' . $property->id . ')';
            $this->action = 'Salvar';
        }
        
        return view('livewire.form-property');
    }
}
