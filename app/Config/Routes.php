<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// Authentication
$routes->get('/', 'Auth::login');
$routes->post('auth/processLogin', 'Auth::processLogin');
$routes->get('auth/logout', 'Auth::logout');

// Petani
$routes->get('petani', 'Petani::index');
$routes->get('data-panen', 'Petani::dataPanen');
$routes->get('petani/create', 'Petani::create');
$routes->post('petani/store', 'Petani::store');
$routes->get('petani/edit/(:num)', 'Petani::edit/$1');
$routes->post('petani/update/(:num)', 'Petani::update/$1');
$routes->get('petani/delete/(:num)', 'Petani::delete/$1');

// Penggilingan
$routes->get('penggilingan', 'Penggilingan::index');
$routes->get('data-penggilingan', 'Penggilingan::dataPenggilingan');
$routes->get('penggilingan/create', 'Penggilingan::create');
$routes->post('penggilingan/store', 'Penggilingan::store');
$routes->get('penggilingan/edit/(:num)', 'Penggilingan::edit/$1');
$routes->post('penggilingan/update/(:num)', 'Penggilingan::update/$1');
$routes->get('penggilingan/delete/(:num)', 'Penggilingan::delete/$1');

// Distributor
$routes->get('distributor', 'Distributor::index');
$routes->get('data-distribusi', 'Distributor::distribusi');
$routes->get('distributor/create', 'Distributor::create');
$routes->post('distributor/store', 'Distributor::store');
$routes->get('distributor/edit/(:num)', 'Distributor::edit/$1');
$routes->post('distributor/update/(:num)', 'Distributor::update/$1');
$routes->get('distributor/delete/(:num)', 'Distributor::delete/$1');


$routes->get(
    'traceability/qr/(:any)',
    'Traceability::qr/$1'
);
$routes->get(
    'traceability/detail/(:any)',
    'Traceability::detail/$1'
);