<?php

namespace App\Containers\AssignStudentToCourses\Tasks;

use App\Containers\AssignStudentToCourses\Data\Repositories\AssignStudentToCoursesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllAssignStudentToCoursesTask extends Task
{

    protected $repository;

    public function __construct(AssignStudentToCoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
