<?php

namespace App\Containers\Student\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class GetAllStudentsAction extends Action
{
    public function run(Request $request)
    {
        $students = Apiato::call('Student@GetAllStudentsTask', [], ['addRequestCriteria']);
        return $students;
    }
}
