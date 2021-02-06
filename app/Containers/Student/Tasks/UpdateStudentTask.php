<?php

namespace App\Containers\Student\Tasks;

use App\Containers\Student\Data\Repositories\StudentRepository;
use App\Ship\Exceptions\UpdateResourceFailedException;
use App\Ship\Parents\Tasks\Task;
use Exception;

class UpdateStudentTask extends Task
{

    protected $repository;

    public function __construct(StudentRepository $repository)
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
