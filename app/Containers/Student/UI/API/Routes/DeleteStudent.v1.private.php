<?php

/**
 * @apiGroup           Student
 * @apiName            deleteStudent
 *
 * @api                {DELETE} /v1/students/:id Endpoint title here..
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
$router->delete('students/{id}', [
    'as' => 'api_student_delete_student',
    'uses'  => 'Controller@deleteStudent',
    'middleware' => [
      'auth:api',
    ],
]);
