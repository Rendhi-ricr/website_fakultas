<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/Admin/Agenda', 'Admin\Agenda::index');
$routes->get('/Admin/News', 'Admin\News::index');
$routes->get('/Admin/Page', 'Admin\Page::index');
$routes->get('/Admin/System', 'Admin\System::index');
$routes->get('/Admin/mp', 'Admin\mp::index');
$routes->get('/Admin/Slider', 'Admin\Slider::index');
$routes->get('/Admin/Gallery', 'Admin\Gallery::index');
$routes->get('/Admin/Message', 'Admin\Message::index');
$routes->get('/Admin/Contact', 'Admin\Contact::index');
$routes->get('/Admin/Staff', 'Admin\Staff::index');
$routes->get('/Admin/Agenda/tambah', 'Admin\Agenda::tambah');
$routes->get('/Admin/News/tambah', 'Admin\News::tambah');
$routes->get('/Admin/Page/tambah', 'Admin\Page::tambah');
$routes->get('/Admin/Slider/tambah', 'Admin\Slider::tambah');
$routes->get('/Admin/Gallery/tambah', 'Admin\Gallery::tambah');
$routes->get('/Admin/Staff/tambah', 'Admin\Staff::tambah');
