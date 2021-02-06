<?php

namespace App\Containers\AssignStudentToCourses\UI\API\Controllers;

use App\Containers\AssignStudentToCourses\UI\API\Requests\CreateAssignStudentToCoursesRequest;
use App\Containers\AssignStudentToCourses\UI\API\Requests\DeleteAssignStudentToCoursesRequest;
use App\Containers\AssignStudentToCourses\UI\API\Requests\GetAllAssignStudentToCoursesRequest;
use App\Containers\AssignStudentToCourses\UI\API\Requests\FindAssignStudentToCoursesByIdRequest;
use App\Containers\AssignStudentToCourses\UI\API\Requests\UpdateAssignStudentToCoursesRequest;
use App\Containers\AssignStudentToCourses\UI\API\Transformers\AssignStudentToCoursesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\AssignStudentToCourses\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateAssignStudentToCoursesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createAssignStudentToCourses(CreateAssignStudentToCoursesRequest $request)
    {
        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@CreateAssignStudentToCoursesAction', [$request]);

        return $this->created($this->transform($assignstudenttocourses, AssignStudentToCoursesTransformer::class));
    }

    /**
     * @param FindAssignStudentToCoursesByIdRequest $request
     * @return array
     */
    public function findAssignStudentToCoursesById(FindAssignStudentToCoursesByIdRequest $request)
    {
        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@FindAssignStudentToCoursesByIdAction', [$request]);

        return $this->transform($assignstudenttocourses, AssignStudentToCoursesTransformer::class);
    }

    /**
     * @param GetAllAssignStudentToCoursesRequest $request
     * @return array
     */
    public function getAllAssignStudentToCourses(GetAllAssignStudentToCoursesRequest $request)
    {
        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@GetAllAssignStudentToCoursesAction', [$request]);

        return $this->transform($assignstudenttocourses, AssignStudentToCoursesTransformer::class);
    }

    /**
     * @param UpdateAssignStudentToCoursesRequest $request
     * @return array
     */
    public function updateAssignStudentToCourses(UpdateAssignStudentToCoursesRequest $request)
    {
        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@UpdateAssignStudentToCoursesAction', [$request]);

        return $this->transform($assignstudenttocourses, AssignStudentToCoursesTransformer::class);
    }

    /**
     * @param DeleteAssignStudentToCoursesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAssignStudentToCourses(DeleteAssignStudentToCoursesRequest $request)
    {
        Apiato::call('AssignStudentToCourses@DeleteAssignStudentToCoursesAction', [$request]);

        return $this->noContent();
    }
}
