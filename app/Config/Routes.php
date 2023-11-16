<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Home;
use App\Controllers\PegawaiController;
use App\Controllers\LayananController;
use App\Controllers\ReservasiController;
use App\Controllers\DashboardController;
use App\Controllers\PasienController;
use App\Controllers\TerapisController;
use App\Controllers\JadwalController;
use App\Controllers\UserController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [Home::class, 'index']);
$routes->get('/register', [UserController::class, 'register']);
$routes->get('/login', [UserController::class, 'login']);

$routes->get('/admin/dashboard', [DashboardController::class, 'index']);
$routes->get('/admin/reservasi', [ReservasiController::class, 'index']);
$routes->get('/admin/layanan', [LayananController::class, 'index']);
$routes->get('/admin/pegawai', [PegawaiController::class, 'index']);
$routes->get('/admin/pasien', [PasienController::class, 'index']);
$routes->get('/admin/terapis', [TerapisController::class, 'index']);
$routes->get('/admin/jadwal', [JadwalController::class, 'index']);

$routes->get('/pegawai/dashboard', [DashboardController::class, 'indexPegawai']);
$routes->get('/pegawai/layanan', [LayananController::class, 'indexPegawai']);
$routes->get('/pegawai/dashboard', [DashboardController::class, 'indexPegawai']);
$routes->get('/pegawai/reservasi', [ReservasiController::class, 'indexPegawai']);
$routes->get('/pegawai/pasien', [PasienController::class, 'indexPegawai']);
$routes->get('/pegawai/terapis', [TerapisController::class, 'indexPegawai']);
$routes->get('/pegawai/jadwal', [JadwalController::class, 'indexPegawai']);

$routes->get('/pelanggan/reservasi', [ReservasiController::class, 'create']);
$routes->get('/pelanggan/layanan', [LayananController::class, 'indexPelanggan']);
$routes->get('/pelanggan/jadwal', [JadwalController::class, 'indexPelanggan']);

//$routes->get('/terapis/(:any)/edit', 'TerapisController::editTerapis/$1');


    // Other routes...

    // Add this route for displaying the edit page
    $routes->get('terapis/(:any)/edit', 'TerapisController::editTerapis/$1');

    // Add this route for handling the update process
    $routes->put('terapis/(:any)', 'TerapisController::updateTerapis/$1');
    $routes->get('/terapis/create', 'TerapisController::createTerapis');
    $routes->post('/terapis/create', 'TerapisController::createTerapis');
