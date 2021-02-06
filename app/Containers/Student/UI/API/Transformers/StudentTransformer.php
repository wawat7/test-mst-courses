<?php

namespace App\Containers\Student\UI\API\Transformers;

use App\Containers\Student\Models\Student;
use App\Ship\Parents\Transformers\Transformer;

class StudentTransformer extends Transformer
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
     * @param Student $entity
     *
     * @return array
     */
    public function transform(Student $entity)
    {
        $response = [
            'object' => 'Student',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'gender' => $entity->gender,
            'date_of_birth' => $entity->date_of_birth,
            'created_at' => $entity->created_at,
            'updated_at' => $entity->updated_at,
            'courses' => $entity->courses,
        ];

        $response = $this->ifAdmin([
            'real_id'    => $entity->id,
            // 'deleted_at' => $entity->deleted_at,
        ], $response);

        return $response;
    }
}
