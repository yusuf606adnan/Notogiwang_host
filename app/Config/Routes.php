<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::index');
$routes->post('/login', 'Auth::login');
$routes->get('/register', 'Auth::register');
$routes->post('/register', 'Auth::daftar');
$routes->post('saran/kirim', 'Saran::kirim');




$routes->group('',['filter'=>'auth'], function($routes){
    $routes->get('/dashboard', 'Home::dashboard');
    $routes->get('/logout', 'Auth::logout');
  
    $routes->get('/suratkeluar', 'Suratkeluar::index');
    $routes->get('/suratkeluar/tambah', 'Suratkeluar::tambah');
    $routes->post('/suratkeluar/tambah', 'Suratkeluar::store');
    $routes->get('/suratkeluar/edit/(:num)', 'Suratkeluar::edit/$1');
    $routes->post('/suratkeluar/edit/(:num)', 'Suratkeluar::update/$1');
    $routes->get('suratkeluar/delete/(:num)', 'Suratkeluar::destroy/$1');
    $routes->get('/suratkeluar', 'Suratkeluar::list');
    $routes->get('/suratkeluar/create_pdf', 'Suratkeluar::create_pdf');

    $routes->get('/suratmasuk', 'Suratmasuk::index');
    $routes->get('/suratmasuk/tambah', 'Suratmasuk::tambah');
    $routes->post('/suratmasuk/tambah', 'Suratmasuk::store');
    $routes->get('/suratmasuk/edit/(:num)', 'Suratmasuk::edit/$1');
    $routes->post('/suratmasuk/edit/(:num)', 'Suratmasuk::update/$1');
    $routes->get('suratmasuk/delete/(:num)', 'Suratmasuk::destroy/$1');
    $routes->get('/suratmasuk', 'Suratmasuk::list');
    $routes->get('/suratmasuk/create_pdf', 'Suratmasuk::create_pdf');

    $routes->get('/undangan', 'Undangan::index');
    $routes->get('/undangan/tambah', 'Undangan::tambah');
    $routes->post('/undangan/tambah', 'Undangan::store');
    $routes->get('/undangan/edit/(:num)', 'Undangan::edit/$1');
    $routes->post('/undangan/edit/(:num)', 'Undangan::update/$1');
    $routes->get('undangan/delete/(:num)', 'Undangan::destroy/$1');
    $routes->get('/undangan', 'Undangan::list');
    $routes->get('/undangan/create_pdf', 'Undangan::create_pdf');
});