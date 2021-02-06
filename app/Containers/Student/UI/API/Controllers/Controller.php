<?php

namespace App\Containers\Student\UI\API\Controllers;

use App\Containers\Student\UI\API\Requests\CreateStudentRequest;
use App\Containers\Student\UI\API\Requests\DeleteStudentRequest;
use App\Containers\Student\UI\API\Requests\GetAllStudentsRequest;
use App\Containers\Student\UI\API\Requests\FindStudentByIdRequest;
use App\Containers\Student\UI\API\Requests\UpdateStudentRequest;
use App\Containers\Student\UI\API\Transformers\StudentTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Student\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateStudentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createStudent(CreateStudentRequest $request)
    {
        $student = Apiato::call('Student@CreateStudentAction', [$request]);

        return $this->created($this->transform($student, StudentTransformer::class));
    }

    /**
     * @param FindStudentByIdRequest $request
     * @return array
     */
    public function findStudentById(FindStudentByIdRequest $request)
    {
        $student = Apiato::call('Student@FindStudentByIdAction', [$request]);

        return $this->transform($student, StudentTransformer::class);
    }

    /**
     * @param GetAllStudentsRequest $request
     * @return array
     */
    public function getAllStudents(GetAllStudentsRequest $request)
    {
        $students = Apiato::call('Student@GetAllStudentsAction', [$request]);
        return $this->transform($students, StudentTransformer::class);
    }

    /**
     * @param UpdateStudentRequest $request
     * @return array
     */
    public function updateStudent(UpdateStudentRequest $request)
    {
        $student = Apiato::call('Student@UpdateStudentAction', [$request]);

        return $this->transform($student, StudentTransformer::class);
    }

    /**
     * @param DeleteStudentRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteStudent(DeleteStudentRequest $request)
    {
        Apiato::call('Student@DeleteStudentAction', [$request]);

        return $this->noContent();
    }
}
