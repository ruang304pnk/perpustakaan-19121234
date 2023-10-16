<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/anggota', 'AnggotaController::tampil');
$routes->get('/anggota/form', 'AnggotaController::form');
$routes->post('/anggota', 'AnggotaController::tambah');

$routes->get('/login', 'LoginController::form');
$routes->post('/login', 'LoginController::masuk');
$routes->get('/logout', 'LoginController::keluar');

