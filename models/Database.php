<?php
    namespace Portfolio\models;
    Use PDO;

    class Database{
        // private static $user ="root";
        // private static $pass = "";
        // private static $dsn = "mysql:host=localhost;dbname=portfolio";

        private static $user ="moeasakr_personal";
        private static $pass = "AIlXI@w)+1j9";
        private static $dsn = "mysql:host=198.50.215.64;dbname=moeasakr_portfolio";
        
        private static $dbcon;

        private function __construct() {
        }

        public static function getDB() {
            if (!isset(self::$dbcon)) {
                self::$dbcon = new PDO(self::$dsn, self::$user, self::$pass);
            }
            return self::$dbcon;
        }
    }

?>