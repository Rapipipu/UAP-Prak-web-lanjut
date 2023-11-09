<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/register', [Home::class, 'register']);
$routes->get('/dashboard', [Home::class, 'dashboard']);
$routes->get('/pegawai', [Home::class, 'pegawai']);
$routes->get('/pelanggan', [Home::class, 'pelanggan']);
$routes->get('/admin', [Home::class, 'admin']);
$routes->get('/user/login', 'UserController::login');