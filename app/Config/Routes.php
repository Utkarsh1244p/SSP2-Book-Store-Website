<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('about', 'Home::about');


$routes->get('employee', 'EmployeesController::index');
$routes->get('contact', 'Home::contact');
$routes->get('email', 'EmailController::sendEmail');
$routes->post('send', 'EmailController::send');


$routes->get('employee/create', 'EmployeesController::create');
$routes->get('products', 'ProductController::index');
$routes->get('test', 'DatabaseTest::index');
$routes->get('users', 'UserController::index');
$routes->get('adduser', 'UserController::index');
$routes->post('form/submit', 'UserController::create');


$routes->get('login', 'LoginController::index');
$routes->post('login', 'LoginController::signin');
$routes->get('signup', 'LoginController::signup');
$routes->get('logout', 'LoginController::logout');

$routes->get('profile', 'ProfileController::index');


