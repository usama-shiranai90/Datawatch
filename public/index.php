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
$router->add('', ['controller' => 'Login', 'action' => 'index']);
//$router->add('{controller}/{action}');
$router->add('{Summary}/{id:\d+}/{index}', 12);

try {
  $router->dispatch($_SERVER['QUERY_STRING']);
} catch (Exception $e) {

}
