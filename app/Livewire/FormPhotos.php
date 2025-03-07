<?php

namespace App\Livewire;

use App\Models\Photos;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class FormPhotos extends Component
{
    use WithFileUploads;

    public $propertyId;

    #[Validate(['photos.*' => 'image|max:1024'])]
    public $photos = [];

    public function save($id)
    {
        $property = Property::find($id);

        foreach ($this->photos as $photo) {
            Photos::create([
                'property_id' => $id,
                'photo' => $photo->store('property/'.strtolower($property->name), 'public'),
                'type' => 1,
            ]);
        }

        flash()->success('Fotos incluídas com sucesso.');
    }

    public function updateOrder($orderedIds)
    {
        foreach ($orderedIds as $index => $id) {
            Photos::where('id', $id)->update(['order' => $index + 1]);
        }

        flash()->success('Ordem atualizada com sucesso.');
    }

    public function delete($id)
    {
        $photo = Photos::find($id);

        $image_path = $photo->photo;

        $image_exists = Storage::disk('public')->exists($image_path);

        if ($image_exists) {
            Storage::disk('public')->delete($image_path);
        }

        Photos::where('id', $id)->delete();

        flash()->success('Foto deletada com sucesso.');
    }

    public function render()
    {
        $photosProperty = Photos::where('property_id', $this->propertyId)->orderBy('order')->get();

        return view('livewire.form-photos', ['photosProperty' => $photosProperty]);
    }
}
