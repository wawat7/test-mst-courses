<?php

namespace App\Containers\AssignStudentToCourses\Models;

use App\Ship\Parents\Models\Model;

class AssignStudentToCourses extends Model
{
    protected $table = "student_courses";
    protected $fillable = [
        'student_id', 'courses_id'
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
    protected $resourceKey = 'assignstudenttocourses';
}
