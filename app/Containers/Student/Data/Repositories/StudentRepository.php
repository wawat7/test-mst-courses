<?php

namespace App\Containers\Student\Data\Repositories;

use App\Ship\Parents\Repositories\Repository;

/**
 * Class StudentRepository
 */
class StudentRepository extends Repository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        'name' => 'like',
        'gender' => '=',
        'date_of_birth' => '=',
    ];

}
