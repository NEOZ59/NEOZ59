<?php 

abstract class BDConnection{
    private static $pdo;

    private static function setBDO(){
        self::$pdo = new PDO('mysql:host=localhost;dbname=projetpro;port=3308;charset=utf8','root','');
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    }

    protected function getBDD(){
        if(self::$pdo === null){
            self::setBDO();
        }
        return self::$pdo;
    }
}