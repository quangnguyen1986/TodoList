<?php
class Database
{
    private static $dbInfo = null;
    private function __construct() {
    }
    public static function getDatabase() {
        if(is_null(self::$dbInfo)) {
            self::$dbInfo = new PDO("mysql:host=localhost;dbname=todolist", 'root', '');
        }
        return self::$dbInfo;
    }
}
?>