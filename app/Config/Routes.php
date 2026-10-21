<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'HomeController::index');
$routes->get('/about', 'HomeController::about');
$routes->get('/products', 'ProductController::index');
$routes->get('/products/(:segment)', 'ProductController::detail/$1');
$routes->get('/why-us', 'HomeController::whyUs');
$routes->get('/our-process', 'HomeController::process');
$routes->get('/catalog', 'HomeController::catalog');
$routes->get('/contact', 'HomeController::contact');
