<?php

/**
 * @apiGroup           Courses
 * @apiName            createCourses
 *
 * @api                {POST} /v1/courses Endpoint title here..
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
$router->post('courses', [
    'as' => 'api_courses_create_courses',
    'uses'  => 'Controller@createCourses',
    'middleware' => [
      'auth:api',
    ],
]);
