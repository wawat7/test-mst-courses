<?php

namespace App\Containers\Student\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class UpdateStudentAction extends Action
{
    public function run(Request $request)
    {
        $data = $request->sanitizeInput([
            'name', 'gender', 'date_of_birth'
        ]);
        $student = Apiato::call('Student@UpdateStudentTask', [$request->id, $data]);
        return $student;
    }
}
