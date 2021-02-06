<?php

namespace App\Containers\Student\Tasks;

use App\Containers\Student\Data\Repositories\StudentRepository;
use App\Containers\Courses\Data\Repositories\CoursesRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllStudentsTask extends Task
{

    protected $repository;
    protected $repositoryCourses;

    public function __construct(StudentRepository $repository, CoursesRepository $repositoryCourses)
    {
        $this->repository = $repository;
        $this->repositoryCourses = $repositoryCourses;
    }

    public function run()
    {
        $students = $this->repository->with('courses')->paginate();
        $students = $this->RemapStudentData($students);
        return $students;
    }

    private function RemapStudentData($students)
    {
        if (!empty($students)) {
          foreach ($students as $student) {
              if (!empty($student->courses)) {
                  $courses_id = [];
                  foreach ($student->courses as $courses_data) {
                      $courses_id[] = $courses_data->courses_id;
                  }

                  if (!empty($courses_id)) {
                    $courses = $this->repositoryCourses->whereIn('id',$courses_id)->get();
                    $student->courses = $courses;
                }
              }
          }


        }
        return $students;
    }
}
