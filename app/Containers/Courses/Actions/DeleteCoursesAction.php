<?php

namespace App\Containers\Courses\Actions;

use App\Ship\Parents\Actions\Action;
use App\Ship\Parents\Requests\Request;
use Apiato\Core\Foundation\Facades\Apiato;

class DeleteCoursesAction extends Action
{
    public function run(Request $request)
    {
        return Apiato::call('Courses@DeleteCoursesTask', [$request->id]);
    }
}
