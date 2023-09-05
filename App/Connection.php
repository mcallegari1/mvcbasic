<?php

namespace App;

use PDO;
use PDOException;

class Connection 
{
    public static function getDb()
    {
        try {

            $conn = new PDO("mysql:host=localhost;dbname=mvc;charset=utf8",
            "root",
            "g8p6e5w8");

            return $conn;
        } catch (PDOException $e){

            echo $e->getMessage();
        }
    }
}