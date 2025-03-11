<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Property extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'project',
        'plant',
        'size',
        'bedrooms',
        'bathrooms',
        'image',
        'address',
        'visibility',
    ];

    protected $attributes = [
        'image' => '',
        'visibility' => false,
    ];

    public function url(): Attribute
    {
        return Attribute::make(
            get: fn () => url('imovel/'.Str::slug($this->name).'/'.$this->id),
        );
    }

    public function mainPhoto(): BelongsTo
    {
        return $this->belongsTo(Photos::class, 'id', 'property_id')
            ->where('type', 0);
    }

    public function additionalInformation(): BelongsTo
    {
        return $this->belongsTo(AdditionalInformation::class, 'id', 'property_id');
    }

    public function views(): BelongsTo
    {
        return $this->belongsTo(Views::class, 'id', 'property_id');
    }
}
