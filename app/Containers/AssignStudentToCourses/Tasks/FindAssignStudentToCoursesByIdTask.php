<?php

namespace App\Containers\AssignStudentToCourses\Tasks;

use App\Containers\AssignStudentToCourses\Data\Repositories\AssignStudentToCoursesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindAssignStudentToCoursesByIdTask extends Task
{

    protected $repository;

    public function __construct(AssignStudentToCoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run($id)
    {
        try {
            return $this->repository->find($id);
        }
        catch (Exception $exception) {
            throw new NotFoundException();
        }
    }
}
