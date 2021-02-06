<?php

/**
 * @apiGroup           Student
 * @apiName            createStudent
 *
 * @api                {POST} /v1/students Endpoint title here..
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
$router->post('students', [
    'as' => 'api_student_create_student',
    'uses'  => 'Controller@createStudent',
    'middleware' => [
      'auth:api',
    ],
]);
