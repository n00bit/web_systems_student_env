<?php

require_once '../../../ini.db.php';

class Connection
{

    #Состояние соединения с БД по умолчанию.

    private static $connection = null;
    private static $_instance = null;

    #Создание подключения

    public function __construct(){
        self::$connection = mysqli_connect('172.33.10.50','root','root','webdb') or die('Error connect DB: ' . mysql_error());
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