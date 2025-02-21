<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/logs', 'Logs::index');
$routes->get('/logs/detail/(:any)', 'Logs::detail/$1');
$routes->get('/transaksi', 'Transaksi::index');
$routes->post('/transaksi/proses', 'Transaksi::proses');
$routes->get('/daftar.php', 'DaftarController::index');
$routes->post('/daftar.php/process', 'DaftarController::process');
$routes->get('/', 'Home::index');
$routes->get('/login', 'Login::index');

// Daftar
$routes->get('/daftar', 'DaftarController::index'); // Menampilkan form daftar
$routes->post('/register-user', 'DaftarController::process'); // Menangani proses registrasi


// Login
$routes->get('/login', 'LoginController::index'); // Menampilkan halaman login
$routes->post('/login-user', 'LoginController::process'); // Proses login
