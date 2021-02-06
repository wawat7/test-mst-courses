<?php

namespace App\Containers\AssignStudentToCourses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class CreateAssignStudentToCoursesAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'student_id', 'courses_id'
        ]);

        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@CreateAssignStudentToCoursesTask', [$data]);

        return $assignstudenttocourses;
    }
}
