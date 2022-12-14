<?php

namespace Config;

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
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');

// Routes Mahasiswa (Dosen) 
$routes->get('/', 'Home::index');
$routes->get('/mahasiswa', 'MahasiswaController::index');
$routes->get('/create', 'MahasiswaController::create');
$routes->post('/store', 'MahasiswaController::store');
$routes->get('/edit/(:num)', 'MahasiswaController::edit/$1');
$routes->post('/update/(:num)', 'MahasiswaController::update/$1');
$routes->delete('/delete/(:num)', 'MahasiswaController::delete/$1');

$routes->get('/nilai', 'NilaiController::index');
$routes->get('/createnilai', 'NilaiController::createnilai');
$routes->post('/storenilai', 'NilaiController::storenilai');
$routes->get('/editnilai/(:num)', 'NilaiController::editnilai/$1');
$routes->post('/updatenilai/(:num)', 'NilaiController::updatenilai/$1');
$routes->delete('/deletenilai/(:num)', 'NilaiController::deletenilai/$1');

$routes->get('/profil', 'ProfilController::index');
$routes->get('/createdata', 'ProfilController::createdata');
$routes->post('/storedata', 'ProfilController::storedata');
$routes->get('/editdata(:num)', 'ProfilController::editdata/$1');
$routes->post('/updatedata/(:num)', 'ProfilController::updatedata/$1');
$routes->delete('/deletedata/(:num)', 'ProfilController::deletedata/$1');

$routes->get('/jadwal', 'JadwalController::index');
$routes->get('/createjadwal', 'JadwalController::createjadwal');
$routes->post('/storejadwal', 'JadwalController::storejadwal');
$routes->get('/editjadwal/(:num)', 'JadwalController::editjadwal/$1');
$routes->post('/updatejadwal/(:num)', 'JadwalController::updatejadwal/$1');
$routes->delete('/deletejadwal/(:num)', 'JadwalController::deletejadwal/$1');

$routes->get('/absen', 'AbsenController::index');
$routes->get('/createabsen', 'AbsenController::createabsen');
$routes->post('/storeabsen', 'AbsenController::storeabsen');
$routes->get('/editabsen/(:num)', 'NilaiController::editabsen/$1');
$routes->post('/updateabsen/(:num)', 'NilaiController::updateabsen/$1');
$routes->delete('/deleteabsen/(:num)', 'NilaiController::deleteabsen/$1');

//Routes Jadwal (Admin)
$routes->get('/jadwal', 'JadwalController::index');
$routes->get('/createjadwal', 'JadwalController::createjadwal');
$routes->post('/storejadwal', 'JadwalController::storejadwal');
$routes->get('/editjadwal/(:num)', 'JadwalController::editjadwal/$1');
$routes->post('/updatejadwal/(:num)', 'JadwalController::updatejadwal/$1');
$routes->delete('/deletejadwal/(:num)', 'JadwalController::deletejadwal/$1');

$routes->get('/home', 'MentoringController::index');

$routes->get('/index', 'Pages::index');
$routes->get('(:any)', 'Pages::view/$1');

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
