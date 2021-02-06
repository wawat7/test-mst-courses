<?php

namespace App\Containers\Courses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateCoursesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $courses = Apiato::call('Courses@UpdateCoursesTask', [$request->id, $data]);

        return $courses;
    }
}
