<?php

namespace App\Containers\Courses\Tasks;

use App\Containers\Courses\Data\Repositories\CoursesRepository;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class FindCoursesByIdTask extends Task
{

    protected $repository;

    public function __construct(CoursesRepository $repository)
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
