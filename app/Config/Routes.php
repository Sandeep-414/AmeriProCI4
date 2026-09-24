<?php

use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');
$routes->get('services', 'Services::index');
$routes->get('services/(:segment)', 'Services::detail/$1');
$routes->get('about', 'About::index');
$routes->get('solutions', 'Solutions::index');
$routes->get('solutions/(:segment)', 'Solutions::detail/$1');
$routes->get('careers', 'Careers::index');
$routes->get('contact', 'Contact::index');
$routes->post('/contact/submit', 'Contact::submit');