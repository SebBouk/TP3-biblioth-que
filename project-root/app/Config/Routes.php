<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['filter' => 'authenticatedUser']);
$routes->get('/home','Home::index', ['filter' => 'authenticatedUser']);
$routes->get('/login','Connection::index');
$routes->post('/login','Connection::attemptLogin');
$routes->get('/addUser','AddUser::index',['filter' => 'authenticatedUser']);
$routes->get('/gestionAbonne','GestionAbonne::index', ['filter' => 'authenticatedAdmin']);
$routes->get('/gestionLivre','GestionLivre::index',['filter' => 'authenticatedUser']);
$routes->get('/logout','Connection::logout');
$routes->get('/add-livre','AddLivre::index' ,['filter'=> 'authenticatedAdmin']);