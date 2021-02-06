<?php

namespace App\Containers\Courses\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class CoursesRepository
 */
class CoursesRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

}
