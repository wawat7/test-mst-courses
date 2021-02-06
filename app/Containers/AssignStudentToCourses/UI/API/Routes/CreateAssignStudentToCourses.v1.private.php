<?php

/**
 * @apiGroup           AssignStudentToCourses
 * @apiName            createAssignStudentToCourses
 *
 * @api                {POST} /v1/assign-student-to-courses Endpoint title here..
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
$router->post('assign-student-to-courses', [
    'as' => 'api_assignstudenttocourses_create_assign_student_to_courses',
    'uses'  => 'Controller@createAssignStudentToCourses',
    'middleware' => [
      'auth:api',
    ],
]);
