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
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/(:num)', 'Home::index/$1');
$routes->get('/travel', 'Home::travel');
$routes->get('/photographer', 'Home::photographer');
$routes->get('/legal', 'Home::legal');
$routes->get('/personal', 'Home::personal');
$routes->get('/spost', 'Home::spost');
$routes->get('/about', 'Home::about');
$routes->get('/gpost', 'Home::gpost');
$routes->get('/apost', 'Home::apost');
$routes->get('/vpost', 'Home::vpost');
$routes->get('/fwpost', 'Home::fwpost');
$routes->get('/all-post', 'Home::allpost');
$routes->get('/blog-classic-2-columns', 'Home::blogClassic2Columns');
$routes->get('/blog-classic-3-columns', 'Home::blogClassic3Columns');
$routes->get('/blog-portfolio-2-columns', 'Home::blogPortfolio2Columns');
$routes->get('/blog-portfolio-3-columns', 'Home::blogPortfolio3Columns');
$routes->get('/blog-portfolio-4-columns', 'Home::blogPortfolio4Columns');
$routes->get('/blogdetail1', 'Home::blogdetail1');
$routes->get('/blogdetail2', 'Home::blogdetail2');
$routes->get('/blogdetail3', 'Home::blogdetail3');
$routes->get('/error', 'Home::error');
$routes->get('/comming-soon', 'Home::commingSoon');
$routes->get('/contact', 'Home::contact');
$routes->get('/contact2', 'Home::contact2');
$routes->get('/admin', 'Home::admin');

$routes->get('/login', 'Login::index');
$routes->get('/register', 'Register::index');
$routes->post('/register/signup', 'Register::signup');
$routes->post('/login/login', 'Login::login');
$routes->get('/logout', 'Auth::logout');

$routes->resource('slides', ['controller' => 'Slide']);
$routes->resource('blogs', ['controller' => 'Blog']);
$routes->resource('users', ['controller' => 'User']);
$routes->resource('ads', ['controller' => 'AD']);

$routes->post('users/(:num)/avatar', 'User::image_upload/$1');
$routes->get('/company', 'Company::index');
$routes->post('/company', 'Company::update');
$routes->post('/company/logo', 'Company::logo_upload');


$routes->get('/tags', 'Tag::index');
$routes->post('/tags', 'Tag::logo_upload');

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
