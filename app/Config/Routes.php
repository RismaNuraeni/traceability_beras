<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
// Authentication
$routes->get('/', 'Auth::login');
$routes->post('auth/processLogin', 'Auth::processLogin');
$routes->get('auth/logout', 'Auth::logout');

// Petani
$routes->get(
    'petani',
    'Petani::index',
    [
        'filter' => 'role:petani'
    ]
);
$routes->get('data-panen', 'Petani::dataPanen', [
    'filter' => 'role:petani'
]);
$routes->get('petani/create', 'Petani::create', [
    'filter' => 'role:petani'
]);
$routes->post('petani/store', 'Petani::store', [
    'filter' => 'role:petani'
]);
$routes->get('petani/edit/(:num)', 'Petani::edit/$1', [
    'filter' => 'role:petani'
]);
$routes->post('petani/update/(:num)', 'Petani::update/$1', [
    'filter' => 'role:petani'
]);
$routes->get('petani/delete/(:num)', 'Petani::delete/$1');

// Penggilingan
$routes->get('penggilingan', 'Penggilingan::index', [
    'filter' => 'role:penggilingan'
]);
$routes->get('data-penggilingan', 'Penggilingan::dataPenggilingan', [
    'filter' => 'role:penggilingan'
]);
$routes->get('penggilingan/create', 'Penggilingan::create', [
    'filter' => 'role:penggilingan'
]);
$routes->post('penggilingan/store', 'Penggilingan::store', [
    'filter' => 'role:penggilingan'
]);
$routes->get('penggilingan/edit/(:num)', 'Penggilingan::edit/$1', [
    'filter' => 'role:penggilingan'
]);
$routes->post('penggilingan/update/(:num)', 'Penggilingan::update/$1', [
    'filter' => 'role:penggilingan'
]);
$routes->get('penggilingan/delete/(:num)', 'Penggilingan::delete/$1', [
    'filter' => 'role:penggilingan'
]);

// Distributor
$routes->get('distributor', 'Distributor::index', [
    'filter' => 'role:distributor'
]);
$routes->get('data-distribusi', 'Distributor::distribusi', [
    'filter' => 'role:distributor'
]);
$routes->get('distributor/create', 'Distributor::create', [
    'filter' => 'role:distributor'
]);
$routes->post('distributor/store', 'Distributor::store', [
    'filter' => 'role:distributor'
]);
$routes->get('distributor/edit/(:num)', 'Distributor::edit/$1', [
    'filter' => 'role:distributor'
]);
$routes->post('distributor/update/(:num)', 'Distributor::update/$1', [
    'filter' => 'role:distributor'
]);
$routes->get('distributor/delete/(:num)', 'Distributor::delete/$1', [
    'filter' => 'role:distributor'
]);


$routes->get(
    'traceability/qr/(:any)',
    'Traceability::qr/$1'
);
$routes->get(
    'traceability/detail/(:any)',
    'Traceability::detail/$1'
);
