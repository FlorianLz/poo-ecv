<?php
declare(strict_types=1);
namespace App\Routing;

use App\Controller\Error404;
use App\Controller\Toto;
use App\Controller\Welcome;

class Router{
    private static array $routes = [
        '/' => Welcome::class,
        '/toto' => Toto::class,
        '/404' => Error404::class
    ];
    private static string $path;

    private static ?Router $router = null;

    private function __construct(){
        self::$path = $_SERVER['PATH_INFO'] ?? '/';
    }

    public static function getFromGlobals() : Router{
        if(self::$router === null){
            self::$router = new self();
        }
        return self::$router;
    }

    public function getController(){
        $controller = self::$routes[self::$path] ?? self::$routes['/404'];
        return $controller::getFromGlobals()->msg();
    }
}