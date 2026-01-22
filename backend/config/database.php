<?php
class database {
    private static $conn;
    public static function connect() {
        $user = "jaydip";
        $password = "Shriram007@";
        $database = "imagesearch";
        if (self::$conn==NULL) self::$conn = new PDO("mysql:host=localhost;dbname=$database",$user,$password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
        return self::$conn;
    }
}