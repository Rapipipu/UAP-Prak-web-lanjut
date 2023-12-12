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
use App\Controllers\AdminController;
use Config\Auth;

/**
 * @var RouteCollection $routes
 */

 $routes->group('', ['namespace' => 'App\Controllers'], static function ($routes) {
    // Load the reserved routes from Auth.php
    $config         = config(Auth::class);
    $reservedRoutes = $config->reservedRoutes;

    // Login/out
    $routes->get($reservedRoutes['login'], 'AuthController::login', ['as' => $reservedRoutes['login']]);
    $routes->post($reservedRoutes['login'], 'AuthController::attemptLogin');
    $routes->get($reservedRoutes['logout'], 'AuthController::logout');

    // Registration
    $routes->get($reservedRoutes['register'], 'AuthController::register', ['as' => $reservedRoutes['register']]);
    $routes->post($reservedRoutes['register'], 'AuthController::attemptRegister');

    // Activation
    $routes->get($reservedRoutes['activate-account'], 'AuthController::activateAccount', ['as' => $reservedRoutes['activate-account']]);
    $routes->get($reservedRoutes['resend-activate-account'], 'AuthController::resendActivateAccount', ['as' => $reservedRoutes['resend-activate-account']]);

    // Forgot/Resets
    $routes->get($reservedRoutes['forgot'], 'AuthController::forgotPassword', ['as' => $reservedRoutes['forgot']]);
    $routes->post($reservedRoutes['forgot'], 'AuthController::attemptForgot');
    $routes->get($reservedRoutes['reset-password'], 'AuthController::resetPassword', ['as' => $reservedRoutes['reset-password']]);
    $routes->post($reservedRoutes['reset-password'], 'AuthController::attemptReset');
});


$routes->get('/auth', [Home::class, 'auth']);
$routes->get('/', [Home::class, 'index']);
$routes->get('/register', [UserController::class, 'register']);
$routes->get('/login', [UserController::class, 'login']);

$routes->get('/dashboard', [DashboardController::class, 'index']);

$routes->get('/reservasi', [ReservasiController::class, 'index']);
$routes->get('/reservasi/create', [ReservasiController::class, 'create']);
$routes->post('/reservasi/store', [ReservasiController::class, 'store']);
$routes->get('/reservasi/cancel/(:any)', [ReservasiController::class, 'cancel']);
$routes->get('/reservasi/complete/(:any)', [ReservasiController::class, 'complete']);
$routes->get('/reservasi/riwayat', [ReservasiController::class, 'riwayat']);

$routes->get('/layanan', [LayananController::class, 'index']);
$routes->get('/layanan/create', [LayananController::class, 'create']);
$routes->post('/layanan/store', [LayananController::class, 'store']);
$routes->put('/layanan/edit/(:any)',  [LayananController::class, 'updateLayanan']);
$routes->get('/layanan/edit/(:any)', [LayananController::class, 'editLayanan']);
$routes->get('/layanan/delete/(:any)', [LayananController::class, 'deleteLayanan']);

$routes->get('/admin', [AdminController::class, 'index']);
$routes->get('/admin/turnpasien/(:any)', [AdminController::class, 'turnPasien']);

$routes->get('/pasien', [PasienController::class, 'index']);
$routes->get('/pasien/create', [PasienController::class, 'createPasien']);
$routes->post('/pasien/create', [PasienController::class, 'createPasien']);
$routes->put('/pasien/edit/(:any)',  [PasienController::class, 'updatePasien']);
$routes->get('/pasien/edit/(:any)', [PasienController::class, 'editPasien']);
$routes->get('/pasien/delete/(:any)', [PasienController::class, 'deletePasien']);
$routes->get('/pasien/turnadmin/(:any)',  [PasienController::class, 'turnAdmin']);
$routes->get('/pasien/turnpegawai/(:any)',  [PasienController::class, 'turnPegawai']);

$routes->get('/terapis', [TerapisController::class, 'index']);
$routes->get('/terapis/create', [TerapisController::class, 'create']);
$routes->post('/terapis/store', [TerapisController::class, 'store']);
$routes->get('/terapis/edit/(:any)', [TerapisController::class, 'edit']);
$routes->put('/terapis/edit/(:any)', [TerapisController::class, 'updateTerapis']);
$routes->get('/terapis/delete/(:any)', [TerapisController::class, 'deleteTerapis']);
    
$routes->get('/pegawai', [PegawaiController::class, 'index']);
$routes->get('/pegawai/edit/(:any)', [PegawaiController::class, 'editPegawai']);
$routes->post('/pegawai/edit/(:any)', [PegawaiController::class, 'updatePegawai']);
$routes->get('/pegawai/delete/(:any)', [PegawaiController::class, 'deletePegawai']);
$routes->get('/pegawai/turnpasien/(:any)', [PegawaiController::class, 'turnPasien']);

$routes->get('/jadwal', [JadwalController::class, 'index']);
$routes->get('/jadwal/create', [JadwalController::class, 'create']);
$routes->post('/jadwal/store', [JadwalController::class, 'store']);
$routes->get('/jadwal/delete/(:any)', [JadwalController::class, 'delete']);
$routes->group('jadwal', ['namespace' => 'App\Controllers'], function ($routes) {
    $routes->get('create', 'JadwalController::create');
    $routes->post('store', 'JadwalController::store');
    $routes->get('edit/(:any)', 'JadwalController::edit/$1');
    $routes->post('update/(:any)', 'JadwalController::update/$1');
});
$routes->get('practice', 'JadwalController::index');



 //buatan juan

// $routes->get('/admin/dashboard', [DashboardController::class, 'index']);
// $routes->get('/admin/reservasi', [ReservasiController::class, 'index']);
// $routes->get('/admin/layanan', [LayananController::class, 'index']);
// $routes->get('/admin/pegawai', [PegawaiController::class, 'index']);
// $routes->get('/admin/pasien', [PasienController::class, 'index']);
// $routes->get('/admin/terapis', [TerapisController::class, 'index']);
// $routes->get('/admin/jadwal', [JadwalController::class, 'index']);

// $routes->get('/pegawai/dashboard', 'DashboardController::indexPegawai');
// $routes->get('/pegawai/layanan', [LayananController::class, 'indexPegawai']);
// $routes->get('/pegawai/dashboard', [DashboardController::class, 'indexPegawai']);
// $routes->get('/pegawai/reservasi', [ReservasiController::class, 'indexPegawai']);
// $routes->get('/pegawai/pasien', [PasienController::class, 'indexPegawai']);
// $routes->get('/pegawai/terapis', [TerapisController::class, 'indexPegawai']);
// $routes->get('/pegawai/jadwal', [JadwalController::class, 'indexPegawai']);

// $routes->get('/pelanggan/reservasi', [ReservasiController::class, 'create']);
// $routes->get('/pelanggan/layanan', [LayananController::class, 'indexPelanggan']);
// $routes->get('/pelanggan/jadwal', [JadwalController::class, 'indexPelanggan']);


// //EDIT CREATE PATIENT ADMIN
// $routes->get('/admin/pasien/create', [PasienController::class, 'createPasien']);
// $routes->post('/admin/pasien/create', [PasienController::class, 'createPasien']);
// $routes->put('/admin/pasien/edit/(:any)',  [PasienController::class, 'updatePasien']);
// $routes->get('/admin/pasien/edit/(:any)', [PasienController::class, 'editPasien']);
// $routes->get('/admin/pasien/delete/(:any)', [PasienController::class, 'deletePasien']);

// //EDIT CREATE SERVICE ADMIN
// $routes->get('/admin/layanan/create', [LayananController::class, 'createAdmin']);
// $routes->post('/admin/layanan/create', [LayananController::class, 'createAdmin']);
// $routes->put('/admin/layanan/edit/(:any)',  [LayananController::class, 'updateLayanan']);
// $routes->get('/admin/layanan/edit/(:any)', [LayananController::class, 'editLayanan']);
// $routes->get('/admin/layanan/delete/(:any)', [LayananController::class, 'deleteLayanan']);

// //EDIT CREATE SERVICE PEGAWAI
// $routes->get('/pegawai/layanan/create', [LayananController::class, 'createPegawai']);
// $routes->post('/pegawai/layanan/create', [LayananController::class, 'createPegawai']);
// $routes->put('/pegawai/layanan/edit/(:any)',  [LayananController::class, 'updateLayananPegawai']);
// $routes->get('/pegawai/layanan/edit/(:any)', [LayananController::class, 'editLayananPegawai']);
// $routes->get('/pegawai/layanan/delete/(:any)', [LayananController::class, 'deleteLayananPegawai']);

// //$routes->get('/terapis/(:any)/edit', 'TerapisController::editTerapis/$1');


//     // Other routes...

//     // Add this route for displaying the edit page
//     $routes->get('terapis/(:any)/edit', 'TerapisController::editTerapis/$1');

//     // Add this route for handling the update process
//     $routes->put('terapis/(:any)', 'TerapisController::updateTerapis/$1');
//     $routes->get('/terapis/create', 'TerapisController::createTerapis');
//     $routes->post('/terapis/create', 'TerapisController::createTerapis');