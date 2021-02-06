<?php

namespace App\Containers\Courses\Tasks;

use App\Containers\Courses\Data\Repositories\CoursesRepository;
use App\Containers\Student\Data\Repositories\StudentRepository;
use App\Ship\Parents\Tasks\Task;

class GetAllCoursesTask extends Task
{

    protected $repository;
    protected $repositoryStudent;

    public function __construct(CoursesRepository $repository, StudentRepository $repositoryStudent)
    {
        $this->repository = $repository;
        $this->repositoryStudent = $repositoryStudent;
    }

    public function run()
    {
        $courses = $this->repository->with('students')->paginate();
        $courses = $this->RemapCoursesData($courses);
        return $courses;
    }

    private function RemapCoursesData($courses)
    {
        if (!empty($courses)) {
            foreach ($courses as $courses_data) {
              if (!empty($courses_data->students)) {
                  $student_id = [];
                  foreach ($courses_data->students as $student) {
                      $student_id[] = $student->student_id;
                  }

                  if (!empty($student_id)) {
                      $students = $this->repositoryStudent->whereIn('id',$student_id)->get();
                      $courses_data->students = $students;
                  }
              }
            }
        }

        return $courses;
    }
}
