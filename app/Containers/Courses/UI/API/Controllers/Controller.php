<?php

namespace App\Containers\Courses\UI\API\Controllers;

use App\Containers\Courses\UI\API\Requests\CreateCoursesRequest;
use App\Containers\Courses\UI\API\Requests\DeleteCoursesRequest;
use App\Containers\Courses\UI\API\Requests\GetAllCoursesRequest;
use App\Containers\Courses\UI\API\Requests\FindCoursesByIdRequest;
use App\Containers\Courses\UI\API\Requests\UpdateCoursesRequest;
use App\Containers\Courses\UI\API\Transformers\CoursesTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Courses\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateCoursesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCourses(CreateCoursesRequest $request)
    {
        $courses = Apiato::call('Courses@CreateCoursesAction', [$request]);

        return $this->created($this->transform($courses, CoursesTransformer::class));
    }

    /**
     * @param FindCoursesByIdRequest $request
     * @return array
     */
    public function findCoursesById(FindCoursesByIdRequest $request)
    {
        $courses = Apiato::call('Courses@FindCoursesByIdAction', [$request]);

        return $this->transform($courses, CoursesTransformer::class);
    }

    /**
     * @param GetAllCoursesRequest $request
     * @return array
     */
    public function getAllCourses(GetAllCoursesRequest $request)
    {
        $courses = Apiato::call('Courses@GetAllCoursesAction', [$request]);

        return $this->transform($courses, CoursesTransformer::class);
    }

    /**
     * @param UpdateCoursesRequest $request
     * @return array
     */
    public function updateCourses(UpdateCoursesRequest $request)
    {
        $courses = Apiato::call('Courses@UpdateCoursesAction', [$request]);

        return $this->transform($courses, CoursesTransformer::class);
    }

    /**
     * @param DeleteCoursesRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteCourses(DeleteCoursesRequest $request)
    {
        Apiato::call('Courses@DeleteCoursesAction', [$request]);

        return $this->noContent();
    }
}
