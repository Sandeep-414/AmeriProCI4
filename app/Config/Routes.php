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
// ==========================================
// AMERIPRO DESIGN 2 ROUTES
// ==========================================

$routes->get('design2', 'Design2::index');

$routes->get('design2/services', 'Design2::services');

$routes->get('design2/solutions', 'Design2::solutions');

$routes->get('design2/about', 'Design2::about');

$routes->get('design2/login', 'Design2::login');

$routes->get('design2/timesheet', 'Design2::timesheet');

// ==========================================
// AMERIPRO DESIGN 2 - SERVICE DETAIL ROUTE
// ==========================================

$routes->get(
    'design2/services/(:segment)',
    'Design2::serviceDetail/$1'
);

// ==========================================
// AMERIPRO DESIGN 2 - SOLUTION DETAIL ROUTE
// ==========================================

$routes->get(
    'design2/solutions/(:segment)',
    'Design2::solutionDetail/$1'
);

// ==========================================
// AMERIPRO DESIGN 2 - CAREERS & CONTACT
// ==========================================

$routes->get('design2/careers', 'Design2::careers');

$routes->get('design2/contact', 'Design2::contact');


// =========================================
// DESIGN 3
// =========================================

$routes->get('design3', 'Design3::index');


$routes->get('design3/about', 'Design3::about');

$routes->get('design3/services', 'Design3::services');
$routes->get('design3/services/(:segment)', 'Design3::serviceDetail/$1');

$routes->get('design3/solutions', 'Design3::solutions');
$routes->get('design3/solutions/(:segment)', 'Design3::solutionDetail/$1');

$routes->get('design3/careers', 'Design3::careers');

$routes->get('design3/contact', 'Design3::contact');
$routes->post('design3/contact/submit', 'Design3::contactSubmit');

$routes->match(
    ['GET', 'POST'],
    'design3/login',
    'Design3::login'
);