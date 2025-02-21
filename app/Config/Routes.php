<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/transaksi', 'Transaksi::index');
$routes->post('/transaksi/proses', 'Transaksi::proses');
$routes->get('/daftar.php', 'DaftarController::index');
$routes->post('/daftar.php/process', 'DaftarController::process');
$routes->get('/login', 'AuthController::login');
$routes->get('/about', 'About::index');




