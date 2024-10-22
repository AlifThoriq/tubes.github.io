<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// $routes->get('/permohonan-rapat', 'RapatController::create');



$routes->get('/notulen', 'RapatController::mow');
$routes->get('/notulen/hasil_rapat', 'RapatController::hasil');
$routes->get('/agenda-rapat', 'RapatController::agenda');
// $routes->get('/absensi', 'RapatController::absen');
$routes->get('/auth', 'RapatController::register');
$routes->get('/auth', 'RapatController::login');
$routes->get('/persetujuan-notulen', 'RapatController::persetujuan');
$routes->get('/', 'RapatController::index');
$routes->get('/users', 'Users::index');
