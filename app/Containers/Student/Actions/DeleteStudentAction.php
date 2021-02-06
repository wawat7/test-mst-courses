<?php

namespace App\Containers\Student\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteStudentAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Student@DeleteStudentTask', [$request->id]);
    }
}
