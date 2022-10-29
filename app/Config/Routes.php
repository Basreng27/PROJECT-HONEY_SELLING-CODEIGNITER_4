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

// login
$routes->get('/login', 'Login::index');

// regist
$routes->get('/regist', 'Regist::index');

if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
