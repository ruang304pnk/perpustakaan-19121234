<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/anggota', 'AnggotaController::tampil');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->post('/anggota', 'AnggotaController::create');

$routes->post('/anggota/hapus', 'AnggotaController::delete');

$routes->get('/anggota/edit/(:num)', 'AnggotaController::edit/$1');
$routes->get('/anggota/foto/(:num).png', 'AnggotaController::foto/$1');

$routes->get('/login', 'LoginController::form');
$routes->post('/login', 'LoginController::masuk');
$routes->get('/logout', 'LoginController::keluar');

