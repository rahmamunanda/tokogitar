<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// app/Config/Routes.php

$routes->get('/', 'Gitars::home'); // Route untuk halaman utama (home)
$routes->get('/gitars', 'Gitars::index'); // Route untuk melihat daftar gitar
$routes->get('/gitars/add', 'Gitars::add'); // Route untuk halaman tambah gitar
$routes->post('/gitars/create', 'Gitars::create'); // Route untuk memproses penambahan gitar
$routes->get('/gitars/edit/(:segment)', 'Gitars::edit/$1'); // Route untuk halaman edit gitar
$routes->post('/gitars/update/(:segment)', 'Gitars::update/$1'); // Route untuk memproses update gitar
$routes->get('/gitars/delete/(:segment)', 'Gitars::delete/$1'); // Route untuk menghapus gitar
$routes->get('/gitars/detail/(:segment)', 'Gitars::detail/$1'); // Route untuk melihat detail gitar
$routes->get('/gitars/about', 'Gitars::about'); // Route untuk Tentang Kami
$routes->get('/gitars/contact', 'Gitars::contact'); // Route untuk Kontak Kami
$routes->get('/tambah-produk', 'Gitars::add'); // Route untuk halaman tambah produk
