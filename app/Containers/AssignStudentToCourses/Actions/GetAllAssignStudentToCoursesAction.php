<?php

namespace App\Containers\AssignStudentToCourses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllAssignStudentToCoursesAction extends Action
{
    public function run(Request $request)
    {
        $assignstudenttocourses = Apiato::call('AssignStudentToCourses@GetAllAssignStudentToCoursesTask', [], ['addRequestCriteria']);
        return $assignstudenttocourses;
    }
}
