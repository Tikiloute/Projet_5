<?php

abstract class Model{

    private static $pdo;

    private static function setDb()
    {
        self::$pdo = new PDO("mysql:host=localhost; dbname=shop;charset=utf8", "root", "");
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //permet d'avoir un warning si erreur dans le corps du site (ERRMODE_EXCEPTION) mieux que ERRMODE_WARNING(en haut du site)
    }

    protected function getDb()
    {
        if(self::$pdo===null){
            self::setDb();
        }
        return self::$pdo;
    }

}