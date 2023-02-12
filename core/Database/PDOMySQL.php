<?php

namespace Database;

class PDOMySQL
{

    /**
     * Database manager in order to define the connection to database for the rest of the framwork
     * Returning a unique variable already connected to the database
     * Shortcut to database
     */

    public static function getPdo():\PDO
    {

        $adresseServeurMySQL = "";
        $nomDeDatabase = "";
        $username = "";
        $password = "";

        $pdo = new \PDO("mysql:host=$adresseServeurMySQL;dbname=$nomDeDatabase",
            $username,
            $password,
            [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
            ]
        );

        return $pdo;
    }









}