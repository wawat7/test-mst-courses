<?php

namespace App\Containers\AssignStudentToCourses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateAssignStudentToCoursesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            // add your request data here
        ]);

        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@UpdateAssignStudentToCoursesTask', [$request->id, $data]);

        return $assignstudenttocourses;
    }
}
