<?php

/**
 * @apiGroup           Courses
 * @apiName            findCoursesById
 *
 * @api                {GET} /v1/courses/:id Endpoint title here..
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
$router->get('courses/{id}', [
    'as' => 'api_courses_find_courses_by_id',
    'uses'  => 'Controller@findCoursesById',
    'middleware' => [
      'auth:api',
    ],
]);
