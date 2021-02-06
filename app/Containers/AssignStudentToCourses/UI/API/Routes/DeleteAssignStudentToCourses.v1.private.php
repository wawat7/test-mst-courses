<?php

/**
 * @apiGroup           AssignStudentToCourses
 * @apiName            deleteAssignStudentToCourses
 *
 * @api                {DELETE} /v1/assign-student-to-courses/:id Endpoint title here..
 * @apiDescription     Endpoint description here..
 *
 * @apiVersion         1.0.0
 * @apiPermission      none
 *
 * @apiParam           {String}  parameters here..
 *
 * @apiSuccessExample  {json}  Success-Response:
 * HTTP/1.1 200 OK
{
  // Insert the response of the request here...
}
 */

/** @var Route $router */
$router->delete('assign-student-to-courses/{id}', [
    'as' => 'api_assignstudenttocourses_delete_assign_student_to_courses',
    'uses'  => 'Controller@deleteAssignStudentToCourses',
    'middleware' => [
      'auth:api',
    ],
]);
