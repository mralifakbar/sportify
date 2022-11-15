<?php

namespace Config;

use CodeIgniter\HTTP\Request;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// home
$routes->get('/', 'Home::index');
$routes->get('view', 'Home::view');
$routes->get('dashboard', 'BookerController::riwayatTransaksi');
$routes->get('admin-dashboard', 'Home::admindashboard');
$routes->get('table', 'Home::table');
$routes->get('chart', 'Home::chart');
$routes->get('login-admin', 'Home::loginadmin');
$routes->get('forget', 'Home::forget');
$routes->get('test', 'Home::test');
$routes->post('res', 'Home::konfirmasiPemesanan');
$routes->post('belom', 'Home::belom');
$routes->get('belom', 'Home::belom');

//booker
$routes->post('konfirmasi-pemesanan', 'BookerController::konfirmasiPemesanan');
$routes->get('explore', 'BookerController::explore');
$routes->get('search', 'BookerController::search');
$routes->get('riwayat-transaksi', 'BookerController::riwayatTransaksi');
$routes->get('riwayat-pembayaran', 'BookerController::riwayatPembayaran');
$routes->post('konfirmasi-pembayaran', 'BookerController::konfirmasiPembayaran');
$routes->get('detail/(:num)', 'BookerController::detailLapangan/$1');
$routes->get('order/(:num)', 'BookerController::pesanLapangan/$1');
$routes->post('bayar', 'BookerController::bayar');
$routes->get('cancel-booking/(:num)', 'BookerController::cancelBooking/$1');

// auth
service('auth')->routes($routes);

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}