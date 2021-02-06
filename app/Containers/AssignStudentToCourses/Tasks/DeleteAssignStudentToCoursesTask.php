<?php

namespace App\Containers\AssignStudentToCourses\Tasks;

use App\Containers\AssignStudentToCourses\Data\Repositories\AssignStudentToCoursesRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteAssignStudentToCoursesTask extends Task
{

    protected $repository;

    public function __construct(AssignStudentToCoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->delete($id);
        }
        catch (Exception $exception) {
            throw new DeleteResourceFailedException();
        }
    }
}
