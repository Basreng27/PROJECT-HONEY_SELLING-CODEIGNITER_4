<?php

namespace Config;

$routes = Services::routes();

if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// users not login
$routes->get('/', 'Main::index');
$routes->get('/product', 'Main::product');

// user login
$routes->get('/keranjang', 'User\Users::keranjang');

// admin
$routes->get('/admin-madu', 'Admin\Admins::index');
$routes->get('/admin-product', 'Admin\Admins::product');
$routes->get('/admin-review', 'Admin\Admins::review');
$routes->get('/admin-admin', 'Admin\Admins::admin');
// product
$routes->post('/tambah-product', 'Admin\Product::prosesTambahProduct');
$routes->post('/update-product', 'Admin\Product::prosesUpdateProduct');
// $routes->delete('/delete-product/(:any)', 'Admin\Product::deleteProduct/$1');
$routes->post('/delete-product', 'Admin\Product::deleteProduct');
// review
$routes->post('/tambah-review', 'Admin\Review::prosesTambahReview');
$routes->post('/update-review', 'Admin\Review::prosesUpdateReview');
$routes->post('/delete-review', 'Admin\Review::deleteReview');

// login
$routes->get('/login', 'Login::index');
$routes->post('/login-proses', 'Login::prosesLogin');
$routes->get('/logout', 'Login::logout');

// regist
$routes->get('/regist', 'Regist::index');
$routes->post('/regist-proses', 'Regist::prosesRegist');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
