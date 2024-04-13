<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    use HasFactory;

    protected $attributes = [
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
}
