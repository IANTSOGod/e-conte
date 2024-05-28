<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/','userController::index');
$routes->post('/Login','userController::login');
$routes->get('/signUp','userController::signup');
$routes->post('/createAccount','userController::createAccount');
$routes->get('/home', 'NavigateController::home');
$routes->get('/forgot','userController::forgot');
$routes->get('/checkEmail','userController::checkEmail');
$routes->post('/checkEmail','userController::checkEmail');
