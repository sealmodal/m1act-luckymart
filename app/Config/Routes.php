<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Pages::index', ['as' => 'landing']);
$routes->get('/about', 'Pages::about', ['as' => 'about']);
$routes->get('/customers', 'Customers::customers', ['as' => 'customers']);
$routes->get('/users', 'Users::users', ['as' => 'staff']);