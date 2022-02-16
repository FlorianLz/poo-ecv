<?php
declare(strict_types=1);
namespace App\Controller;

class Toto{
    private static ?Toto $toto = null;
    private function __construct(){}
    public static function getFromGlobals() : Toto{
        if(self::$toto === null){
            self::$toto = new self();
        }
        return self::$toto;
    }
    public function msg(){
        echo 'Toto';
    }
}