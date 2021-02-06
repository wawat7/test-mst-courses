<?php

namespace App\Containers\AssignStudentToCourses\Tasks;

use App\Containers\AssignStudentToCourses\Data\Repositories\AssignStudentToCoursesRepository;
use App\Ship\Exceptions\CreateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class CreateAssignStudentToCoursesTask extends Task
{

    protected $repository;

    public function __construct(AssignStudentToCoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run(array $data)
    {
        try {
            return $this->repository->create($data);
        }
        catch (Exception $exception) {
            throw new CreateResourceFailedException();
        }
    }
}
