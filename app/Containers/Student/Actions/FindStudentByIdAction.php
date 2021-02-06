<?php

namespace App\Containers\Student\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class FindStudentByIdAction extends Action
{
    public function run(Request $request)
    {
        $student = Apiato::call('Student@FindStudentByIdTask', [$request->id]);

        return $student;
    }
}
