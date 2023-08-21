<?php

session_start();

use app\controllers\HomeController;
use app\controllers\UserController;
use app\interfaces\PaymentInterface;
use app\library\PagseguroPayment;
use core\library\Container;
use core\library\Router;
use core\library\Session;
use DI\ContainerBuilder;

require '../vendor/autoload.php';

$admin = require base_path() . '/app/routes/admin.php';

$services = base_path() . '/app/services/services.php';

// $builder = new ContainerBuilder();
// $builder->addDefinitions($services);
// $container = $builder->build();

$container = new Container;
$container->bind(PaymentInterface::class, PagseguroPayment::class);
$container = $container->build(['services']);
// $container->load(['services']);

$router = new Router($container);

$router->group('/admin', $admin);

$router->add('GET', '/', [HomeController::class, 'index']);
$router->add('POST', '/users', [UserController::class, 'index']);
$router->add('GET', '/user/{id:[0-9]+}', [UserController::class, 'show']);

$router->run();

Session::flash_remove();
