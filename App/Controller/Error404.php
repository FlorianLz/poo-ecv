<?php
declare(strict_types=1);
namespace App\Controller;

class Error404{
    private static ?Error404 $error404 = null;
    private function __construct(){}
    public static function getFromGlobals() : Error404{
        if(self::$error404 === null){
            self::$error404 = new self();
        }
        return self::$error404;
    }
    public function msg(){
        echo '404';
    }
}