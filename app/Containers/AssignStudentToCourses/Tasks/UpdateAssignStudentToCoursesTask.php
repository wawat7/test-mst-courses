<?php

namespace App\Containers\AssignStudentToCourses\Tasks;

use App\Containers\AssignStudentToCourses\Data\Repositories\AssignStudentToCoursesRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateAssignStudentToCoursesTask extends Task
{

    protected $repository;

    public function __construct(AssignStudentToCoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id, array $data)
    {
        try {
            return $this->repository->update($data, $id);
        }
        catch (Exception $exception) {
            throw new UpdateResourceFailedException();
        }
    }
}
