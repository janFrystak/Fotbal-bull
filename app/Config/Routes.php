<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::loadHomepage');
$routes->post('login', 'Admin::login');
