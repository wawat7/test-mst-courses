<?php

namespace App\Containers\Courses\Models;

use App\Ship\Parents\Models\Model;

class Courses extends Model
{
    protected $fillable = [
        'name', 'description', 'grade'
    ];

    protected $attributes = [

    ];

    protected $hidden = [

    ];

    protected $casts = [

    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * A resource key to be used by the the JSON API Serializer responses.
     */
    protected $resourceKey = 'courses';
}
