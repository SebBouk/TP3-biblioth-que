<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/home','Home::index', ['filter' => \App\Filters\AuthenticatedFilter::class]);
$routes->get('/login','Connection::index');
$routes->post('/login','Connection::attemptLogin');
$routes->get('/addUser','AddUser::index');
$routes->get('gestionAbonne','GestionAbonne::index');
$routes->get('gestionLivre','GestionLivre::index');