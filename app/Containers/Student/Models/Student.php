<?php

namespace App\Containers\Student\Models;

use App\Ship\Parents\Models\Model;

class Student extends Model
{
    protected $fillable = [
        'name','gender','date_of_birth'
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
    protected $resourceKey = 'students';

    public function courses()
    {
        return $this->hasMany(\App\Containers\AssignStudentToCourses\Models\AssignStudentToCourses::class);
    }
}
