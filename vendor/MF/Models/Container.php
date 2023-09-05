<?php

namespace MF\Models;

use App\Connection;

class Container 
{

    public static function getModel($name)
    {

        $conn = Connection::getDb();

        $class = "App\\Models\\". ucfirst($name);
        
        if(class_exists($class)){
            return new $class($conn);
        }

        return null;
    }

}