<?php

use App\Controllers\StockController;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->add('get', [StockController::class, 'getData']);
