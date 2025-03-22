<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Photos extends Model
{
    use HasFactory;

    protected $fillable = [
        'property_id',
        'photo',
        'type',
        'order',
    ];

    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::startsWith($this->photo, ['http://', 'https://'])
                ? $this->photo
                : asset('storage/'.$this->photo),
        );
    }

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'order' => 0,
    ];
}
