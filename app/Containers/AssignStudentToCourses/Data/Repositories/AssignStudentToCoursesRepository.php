<?php

namespace App\Containers\AssignStudentToCourses\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class AssignStudentToCoursesRepository
 */
class AssignStudentToCoursesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
