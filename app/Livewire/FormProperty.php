<?php

namespace App\Livewire;

use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormProperty extends Component
{
    use WithFileUploads;

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
    public $formAction = 'create';
    public $action = 'Incluir';
    public $visibility = false;

    #[Validate(['photo' => 'image|max:1024'])]
    public $photo;

    #[Validate(['sendPhoto' => 'image|max:1024'])]
    public $sendPhoto;

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
    }

    public function changeVisibility($id)
    {
        $property = Property::find($id);

        $property->update([
            'visibility' => !$property->visibility,
        ]);
    }

    public function addPhoto($id)
    {
        $property = Property::find($id);

        $property->update([
            'image' => $this->sendPhoto->store('property/' . strtolower($property->name), 'public'),
        ]);
    }

    public function deletePhoto($id)
    {
        $property = Property::find($id);

        $image_path = $property->image;

        $image_exists = Storage::disk('public')->exists($image_path);
        
        if($image_exists){
            Storage::disk('public')->delete($image_path);
        }

        $property->update([
            'image' => '',
        ]);
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
            $this->visibility = $property->visibility;
            $this->photo = $property->image;
            $this->formAction = 'update(' . $property->id . ')';
            $this->action = 'Salvar';
        }
        
        return view('livewire.form-property');
    }
}
