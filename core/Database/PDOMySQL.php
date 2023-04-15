<?php

namespace Database;

class PDOMySQL
{

    /**
     * Database manager in order to define the connection to database for the rest of the framwork
     * Returning a unique variable already connected to the database
     * Shortcut to database
     */


    public static $currentPdo = null;


    public static function getPdo():\PDO
    {

        $adresseServeurMySQL = "localhost";
        $nomDeDatabase = "";
        $username = "";
        $password = "";


        if(self::$currentPdo === null){

            self::$currentPdo = new \PDO("mysql:host=$adresseServeurMySQL;dbname=$nomDeDatabase",
                $username,
                $password,
                [
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
                ]
            );
        }




        return self::$currentPdo;
    }









}