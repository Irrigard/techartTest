<?php
use \application\core\Router;
define('APP_ROOT_DIR', __DIR__);
spl_autoload_register(function ($class){
    $path = $class . '.php';
    $file = dirname(__FILE__) . DIRECTORY_SEPARATOR . $path;
    if (file_exists($file)){
        require $file;
    }
});

$router = new Router();
$router->run();