<?php

namespace App\Containers\AssignStudentToCourses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteAssignStudentToCoursesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('AssignStudentToCourses@DeleteAssignStudentToCoursesTask', [$request->id]);
    }
}
