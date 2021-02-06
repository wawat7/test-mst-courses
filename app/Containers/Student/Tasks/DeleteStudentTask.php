<?php

namespace App\Containers\Student\Tasks;

use App\Containers\Student\Data\Repositories\StudentRepository;
use App\Ship\Exceptions\DeleteResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class DeleteStudentTask extends Task
{

    protected $repository;

    public function __construct(StudentRepository $repository)
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
