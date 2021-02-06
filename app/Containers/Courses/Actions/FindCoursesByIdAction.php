<?php

namespace App\Containers\Courses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindCoursesByIdAction extends Action
{
    public function run(Request $request)
    {
        $courses = Apiato::call('Courses@FindCoursesByIdTask', [$request->id]);

        return $courses;
    }
}
