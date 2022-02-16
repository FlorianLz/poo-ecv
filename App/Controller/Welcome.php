<?php
declare(strict_types=1);
namespace App\Controller;

class Welcome{
    private static ?Welcome $welcome = null;
    private function __construct(){}
    public static function getFromGlobals() : Welcome{
        if(self::$welcome === null){
            self::$welcome = new self();
        }
        return self::$welcome;
    }
    public function msg(){
        echo 'Welcome';
    }
}