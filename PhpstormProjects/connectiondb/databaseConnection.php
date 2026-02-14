<?php

class databaseConnection
{
    private static ?PDO $db = null; // ? serve per inizializzare a null una variabile
    public static function getDB(array $dbconfig):PDO{
        if(!isset(self::$db)){
            try{
                self::$db = new PDO($dbconfig["dsn"], $dbconfig["username"], $dbconfig["password"], $dbconfig["options"]);
            }catch (PDOException $e){
                self::$db = null;
            }
        }
        return self::$db;
    }
}