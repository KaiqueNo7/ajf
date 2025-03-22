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

    public function getRouteKeyName(): string
    {
        return 'name';
    }

    public function resolveRouteBinding($value, $field = null)
    {
        if (is_numeric($value)) {
            return $this->where('id', $value)->firstOrFail();
        }

        return $this->whereRaw("LOWER(REPLACE(name, ' ', '-')) = ?", [Str::lower($value)])->firstOrFail();
    }

    public function url(): Attribute
    {
        return Attribute::make(
            get: fn () => url(Str::slug($this->name)),
        );
    }

    public function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn () => Str::startsWith($this->image, ['http://', 'https://'])
                ? $this->image
                : asset('storage/'.$this->image),
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
