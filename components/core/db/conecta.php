<?php

class conecta{
    private static $dbtype;
    private static $host;
    private static $port;
    private static $user;
    private static $password;
    private static $db;
    private static $conn;

    public static function get_conn(){
        if(!isset(self::$conn)){
            try{
                self::$conn = new PDO(self::$dbtype . ":host=" . self::$host . ";dbname=" . self::$db, self::$user, self::$password);
                self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
                self::$conn->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }

        return self::$conn;
    }

    public static function prepare($sql){
        self::confere_variavel_db();
        return self::get_conn()->prepare($sql);
    }

    private static function confere_variavel_db(){
        if(!self::$dbtype || !self::$host || !self::$port || !self::$password || !self::$db){
            self::$dbtype = $_SESSION['db_type'];
            self::$host = $_SESSION['host'];
            self::$port = $_SESSION['port'];
            self::$user = $_SESSION['user'];
            self::$password = $_SESSION['password'];
            self::$db = $_SESSION['db'];
        }
    }
}