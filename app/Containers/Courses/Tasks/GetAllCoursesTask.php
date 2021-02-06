<?php

namespace App\Containers\Courses\Tasks;

use App\Containers\Courses\Data\Repositories\CoursesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCoursesTask extends Task
{

    protected $repository;

    public function __construct(CoursesRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
