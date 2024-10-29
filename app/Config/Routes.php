<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/permohonan-rapat', 'RapatController::create');


$routes->get('/permohonan_rapat', 'RapatController::create');
$routes->get('/notulen', 'RapatController::mow');
$routes->get('/notulen/hasil_rapat', 'RapatController::hasil');
$routes->get('/agenda-rapat', 'RapatController::agenda');
$routes->get('/undangan', 'RapatController::undangan');
$routes->get('/auth/register', 'RapatController::register');
$routes->get('/auth/login', 'RapatController::login');
$routes->get('/persetujuan-notulen', 'RapatController::persetujuan');
$routes->get('/', 'RapatController::index');
$routes->get('/users', 'Users::index');
