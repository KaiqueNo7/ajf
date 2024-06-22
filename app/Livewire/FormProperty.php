<?php

namespace App\Livewire;

use App\Models\Property;
use Illuminate\Support\Facades\Storage;
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
    public $propertyId;
    public $formAction = 'create';
    public $action = 'Incluir';
    public $visibility = false;
    public $allStatus = ['Lançamento', 'Pronto', 'Finalizando obras', 'Novas unidades'];

    #[Validate(['photo' => 'image|max:1024'])]
    public $photo;

    #[Validate(['sendPhoto' => 'image|max:1024'])]
    public $sendPhoto;

    public function create()
    {
        $validated = $this->validate([ 
            'name' => 'required|min:3',
            'status' => 'required|min:3',
            'project' => 'required|min:3',
            'plant' => 'required|min:3',
            'size' => 'required|min:3',
            'bedrooms' => 'required|min:3',
            'bathrooms' => 'required|min:3',
            'address' => 'required|min:3',
        ]);

        $property = Property::create($validated);

        if($property){
            flash()->success('Imóvel adicionado com sucesso.');
            return redirect()->to('edit/' . $property->id);
        }

        flash()->error('Erro ao adicionar imóvel.');
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
        ]); 

        flash()->success('Informações atualizadas com sucesso.');
    }

    public function changeVisibility($id)
    {
        $property = Property::find($id);

        $property->update([
            'visibility' => !$property->visibility,
        ]);

        flash()->success('Visualização alterada com sucesso.');
    }

    public function addPhoto($id)
    {
        $this->validate([
            'sendPhoto' => 'image|max:1024',
        ]);

        $property = Property::find($id);

        $property->update([
            'image' => $this->sendPhoto->store('property/' . strtolower($property->name), 'public'),
        ]);

        flash()->success('Foto adicionada com sucesso.');
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

        flash()->success('Foto deletada com sucesso.');
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
            $this->visibility = $property->visibility;
            $this->photo = $property->image;
            $this->formAction = 'update(' . $property->id . ')';
            $this->action = 'Salvar';
        }
        
        return view('livewire.form-property');
    }
}
