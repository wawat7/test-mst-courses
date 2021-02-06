<?php

namespace App\Containers\AssignStudentToCourses\UI\API\Transformers;

use App\Containers\AssignStudentToCourses\Models\AssignStudentToCourses;
use App\Ship\Parents\Transformers\Transformer;

class AssignStudentToCoursesTransformer extends Transformer
{
    /**
     * @var  array
     */
    protected $defaultIncludes = [

    ];

    /**
     * @var  array
     */
    protected $availableIncludes = [

    ];

    /**
     * @param AssignStudentToCourses $entity
     *
     * @return array
     */
    public function transform(AssignStudentToCourses $entity)
    {
        $response = [
            'object' => 'AssignStudentToCourses',
            'id' => $entity->getHashedKey(),
            'student_id' => $entity->student_id,
            'courses_id' => $entity->courses_id,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,

        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
