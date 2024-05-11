<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        'maps',
        'visibility',
    ];
    
    protected $attributes = [
        'image' => '',
        'visibility' => false,
    ];


    public function mainPhoto(): BelongsTo
    {
        return $this->belongsTo(Photos::class, 'id', 'property_id')
        ->where('type', 0);
    }

    public function additionalInformation(): BelongsTo
    {
        return $this->belongsTo(additionalInformation::class, 'id', 'property_id');
    }
}
