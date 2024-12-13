<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->group('jenis-uji', function($routes) {
    $routes->add('store', 'JenisUjiController::store', ['methods' => ['post']]);
    $routes->get('edit/(:num)', 'JenisUjiController::edit/$1');
    $routes->post('update', 'JenisUjiController::update');
    $routes->delete('delete/(:num)', 'JenisUjiController::delete/$1');
});

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setAutoRoute(true);
$routes->get('/user', 'UserController::index');
$routes->get('/user/fetch', 'UserController::fetch');
$routes->post('/user/store', 'UserController::store');
$routes->get('/user/edit/(:num)', 'UserController::edit/$1');
$routes->post('/user/update', 'UserController::update');
$routes->delete('/user/delete/(:num)', 'UserController::delete/$1');


//$routes->get('/', 'Home::index');
//$routes->get('home/coba', 'Home::coba');
