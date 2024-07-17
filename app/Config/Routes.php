<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Login & Register
$routes->get('/login', 'LoginController::index');
$routes->post('/login/process', 'LoginController::process');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/process', 'RegisterController::process');
$routes->get('/logout', 'LoginController::logout');

// Luaran Penelitian
$routes->get('/luaranpenelitian', 'LuaranPenelitianController::index');
$routes->get('/luaranpenelitian/create', 'LuaranPenelitianController::create');
$routes->get('/luaranpenelitian/edit/(:num)', 'LuaranPenelitianController::edit/$1');
$routes->post('/luaranpenelitian/update/(:num)', 'LuaranPenelitianController::update/$1');
$routes->get('/luaranpenelitian/delete/(:num)', 'LuaranPenelitianController::delete/$1');
$routes->post('/luaranpenelitian/store', 'LuaranPenelitianController::store');

// Penggunaan Dana
$routes->get('/penggunaandana', 'PenggunaanDanaController::index');
$routes->get('/penggunaandana/create', 'PenggunaanDanaController::create');
$routes->get('/penggunaandana/edit/(:num)', 'PenggunaanDanaController::edit/$1');
$routes->post('/penggunaandana/update/(:num)', 'PenggunaanDanaController::update/$1');
$routes->get('/penggunaandana/delete/(:num)', 'PenggunaanDanaController::delete/$1');
$routes->post('/penggunaandana/store', 'PenggunaanDanaController::store');

// Kurikulum
$routes->get('/kurikulum', 'KurikulumController::index');
$routes->get('/kurikulum/create', 'KurikulumController::create');
$routes->get('/kurikulum/edit/(:num)', 'KurikulumController::edit/$1');
$routes->post('/kurikulum/update/(:num)', 'KurikulumController::update/$1');
$routes->get('/kurikulum/delete/(:num)', 'KurikulumController::delete/$1');
$routes->post('/kurikulum/store', 'KurikulumController::store');

// Integrasi Kegiatan Penelitian
$routes->get('/integrasikegiatan', 'IntegrasiKegiatanController::index');
$routes->get('/integrasikegiatan/create', 'IntegrasiKegiatanController::create');
$routes->get('/integrasikegiatan/edit/(:num)', 'IntegrasiKegiatanController::edit/$1');
$routes->post('/integrasikegiatan/update/(:num)', 'IntegrasiKegiatanController::update/$1');
$routes->get('/integrasikegiatan/delete/(:num)', 'IntegrasiKegiatanController::delete/$1');
$routes->post('/integrasikegiatan/store', 'IntegrasiKegiatanController::store');

// Kepuasan Mahasiswa
$routes->get('/kepuasanmahasiswa', 'KepuasanMahasiswaController::index');
$routes->get('/kepuasanmahasiswa/create', 'KepuasanMahasiswaController::create');
$routes->get('/kepuasanmahasiswa/edit/(:num)', 'KepuasanMahasiswaController::edit/$1');
$routes->post('/kepuasanmahasiswa/update/(:num)', 'KepuasanMahasiswaController::update/$1');
$routes->get('/kepuasanmahasiswa/delete/(:num)', 'KepuasanMahasiswaController::delete/$1');
$routes->post('/kepuasanmahasiswa/store', 'KepuasanMahasiswaController::store');

// Penelitian DTTPS
$routes->get('/penelitian', 'PenelitianController::index');
$routes->get('/penelitian/create', 'PenelitianController::create');
$routes->get('/penelitian/edit/(:num)', 'PenelitianController::edit/$1');
$routes->post('/penelitian/update/(:num)', 'PenelitianController::update/$1');
$routes->get('/penelitian/delete/(:num)', 'PenelitianController::delete/$1');
$routes->post('/penelitian/store', 'PenelitianController::store');