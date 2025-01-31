<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/transaksi', 'Transaksi::index');
$routes->post('/transaksi/proses', 'Transaksi::proses');

