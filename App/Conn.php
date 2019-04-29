<?php

    namespace App;

    class Conn {
        
        public static function getDb() {
            
            //return new \mysqli('localhost', 'root', 'mysql', 'mvc');
            return new \PDO('mysql:dbname=mvc;host=localhost', 'root', 'mysql');
        }
        
    }
