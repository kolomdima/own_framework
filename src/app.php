<?php

use Symfony\Component\Routing;

//function is_leap_year($year = null)
//{
//    if (null === $year) {
//        $year = date('Y');
//    }
//
//    return 0 === $year % 400 || (0 === $year % 4 && 0 !== $year % 100);
//}

$routes = new Routing\RouteCollection();
$routeName = 'leap_year';

$path = '/is_leap_year/{year}';
$routeDefaultData = [
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::index',
];
$route = new Routing\Route($path, $routeDefaultData);
$routes->add($routeName, $route);

return $routes;
