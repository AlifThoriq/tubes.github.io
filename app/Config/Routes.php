<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
$routes->get('/permohonan-rapat', 'RapatController::create');
$routes->get('/notulen', 'RapatController::mow');
$routes->get('/absensi', 'RapatController::absen');
$routes->get('/auth', 'RapatController::register');
$routes->get('/auth', 'RapatController::login');
$routes->get('/admin', 'RapatController::persetujuan');
$routes->get('/', 'RapatController::index');
$routes->get('/speech', 'SpeechController::index');
$routes->post('speech/saveText', 'SpeechController::saveText');
