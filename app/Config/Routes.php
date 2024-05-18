<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/beranda', 'Beranda::beranda');
$routes->get('/', 'Home::Index');


$routes->get('/aboutme', 'Home::aboutme');
$routes->get('/edukasi', 'Home::edukasi');
