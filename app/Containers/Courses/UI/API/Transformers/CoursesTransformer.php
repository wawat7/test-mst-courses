<?php

namespace App\Containers\Courses\UI\API\Transformers;

use App\Containers\Courses\Models\Courses;
use App\Ship\Parents\Transformers\Transformer;

class CoursesTransformer extends Transformer
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
     * @param Courses $entity
     *
     * @return array
     */
    public function transform(Courses $entity)
    {
        $response = [
            'object' => 'Courses',
            'id' => $entity->getHashedKey(),
            'name' => $entity->name,
            'description' => $entity->description,
            'grade' => $entity->grade,
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
