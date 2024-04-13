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
        'address',
        'maps',
    ];

    public function photos(): BelongsTo
    {
        return $this->belongsTo(Photos::class);
    }
    public function additionalInformation(): BelongsTo
    {
        return $this->belongsTo(additionalInformation::class, 'id', 'property_id');
    }
}
