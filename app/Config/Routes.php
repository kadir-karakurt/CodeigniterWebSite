<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Anasayfa işlemleri
$routes->get('/', 'Anasayfa::index');
$routes->addRedirect('index', '/');

$routes->match(['get','post'], 'login','Anasayfa::login');
$routes->match(['get','post'], 'kullanici_kayit','Anasayfa::kullanici_kayit');

$routes->get('logout', 'Anasayfa::logout');
$routes->get('incele/(:segment)', 'Anasayfa::incele/$1');

$routes->get('iletisim', 'Anasayfa::iletisim');
$routes->get('about', 'Anasayfa::about');
$routes->get('servis', 'Anasayfa::servis');
$routes->get('ozellikler', 'Anasayfa::ozellikler');



// Panel işlemleri
$routes->get('panel', 'Panel::index');
$routes->match(['get','post'], 'kayit_ekle','Panel::kayit_ekle');
$routes->get('kayit_listele', 'Panel::kayit_listele');
$routes->get('kayit_sil/(:num)', 'Panel::kayit_sil/$1');
$routes->match(['get','post'],'kayit_duzenle/(:num)', 'Panel::kayit_duzenle/$1');