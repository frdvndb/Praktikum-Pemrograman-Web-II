<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('CRUDController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->group('', ["filter" => "auth"], static function($routes){

    // Alamat pertama yang akan dikunjungi
    $routes->get('/', 'CRUDController::index');

    // Alamat tambah data buku
    $routes->get('/tambahdata', 'CRUDController::createView');
    $routes->post('/tambahdata', 'CRUDController::createAdd');
    
    // Alamat edit data buku
    $routes->get('/editdata/(:num)', 'CRUDController::editView/$1');
    $routes->post('/editdata/(:num)', 'CRUDController::editUpdate/$1');
    
    // Alamat hapus data buku
    $routes->delete('/hapus/(:num)', 'CRUDController::delete/$1');
    
    // Alamat logout
    $routes->get('/logout', 'AuthController::logout');

    // Alamat pencarian buku
    $routes->get('/search', 'CRUDController::search');
});

// Alamat login
$routes->get('/login', 'AuthController::index');
$routes->post('/login', 'AuthController::login');

// Alamat buat akun untuk login
$routes->get('/register', 'CRUDController::createAccountView');
$routes->post('/register', 'CRUDController::createAccountAdd');

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