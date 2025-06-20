<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/login', 'Auth::login');
$routes->post('/loginPost', 'Auth::loginPost');
$routes->get('/logout', 'Auth::logout');
$routes->get('/register', 'Auth::register');         // ⬅️ Tambah ini
$routes->post('/register', 'Auth::registerProcess'); // ⬅️ Tambah ini
$routes->get('/admin', 'Admin::index');
$routes->get('/game/level1', 'Game::level1');
$routes->post('game/level1/submit', 'Game::level1Submit');
$routes->get('/game/level2', 'Game::level2');
$routes->post('game/level2/submit', 'Game::level2Submit');
$routes->get('/game/level2_result', 'Game::level2Result');
$routes->get('/game/ending', 'Auth::logout');
$routes->get('/game/ending', 'Game::ending');

