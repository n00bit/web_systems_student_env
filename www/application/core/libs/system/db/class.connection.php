<?php


class Connection
{


    /*100% Работает*/

    #Состояние соединения с БД по умолчанию.

    private static $connection = null;
    private static $_instance = null;

    #Создание подключения

    private function __construct(){
        self::$connection = new mysqli('172.33.10.50','root','root','webdb') or die('Error connect DB: ' . mysql_error());
        self::$connection->query("SET lc_time_names = 'ru_RU'");
        self::$connection->query("SET NAMES 'utf8'");
    }

    private function __clone(){

    }

    #Что бы не создавать кучу подключений, создадим только одно

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Connection();
        }
        return self::$_instance;
    }

    #Возврат соединения

    public function getConnection(){
        return self::$connection;
    }

    #Отключиться от БД

    public function killConnection(){
        mysqli_close(self::$connection);
        self::$connection = null;
    }
}