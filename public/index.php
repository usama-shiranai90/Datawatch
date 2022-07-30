<?php

/**
 * Front controller
 */

/** Composer */
require dirname(__DIR__) . '/vendor/autoload.php';

/** Error and Exception handling */
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHandler');

/** Routing */
$router = new Core\Router();
$router->add('dashboard', ['controller' => 'AdministrativeController', 'action' => 'index']);
$router->add('salesSummary', ['controller' => 'AdministrativeController', 'action' => 'salesSummary']);
$router->add('productState', ['controller' => 'AdministrativeController', 'action' => 'productState']);
$router->add('uploadPage', ['controller' => 'AdministrativeController', 'action' => 'uploadPage']);
$router->add('setting', ['controller' => 'AdministrativeController', 'action' => 'setting']);
$router->add('logout', ['controller' => 'AdministrativeController', 'action' => 'logout']);


$router->add('db', ['controller' => 'EmployeeController', 'action' => 'index']);
$router->add('submission', ['controller' => 'EmployeeController', 'action' => 'submission']);
$router->add('requestDesign', ['controller' => 'EmployeeController', 'action' => 'requestDesign']);
$router->add('designList', ['controller' => 'EmployeeController', 'action' => 'designList']);
$router->add('status', ['controller' => 'EmployeeController', 'action' => 'status']);

$router->add('{Summary}/{id:\d+}/{index}', 12);
try {
  $router->dispatch($_SERVER['QUERY_STRING']);
} catch (Exception $e) {

}
