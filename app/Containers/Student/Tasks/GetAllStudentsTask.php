<?php

namespace App\Containers\Student\Tasks;

use App\Containers\Student\Data\Repositories\StudentRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStudentsTask extends Task
{

    protected $repository;

    public function __construct(StudentRepository $repository)
    {
        $this->repository = $repository;
    }

    public function run()
    {
        return $this->repository->paginate();
    }
}
