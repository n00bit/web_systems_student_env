<?php

require_once 'ini.db.php';

class Connection
{

    #Состояние соединения с БД по умолчанию.


    private $connection = null;
    private static $_instance = null;

    #Создание подключения

    public function __construct(){
        $this->connection = mysqli_connect(DBSERVER,DBUSER,DBPASSWORD,DBNAME) or die('Error connect DB: ' . mysql_error());
        var_dump(DBSERVER);
        var_dump(DBUSER);
        var_dump(DBPASSWORD);
        var_dump(DBNAME);

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
        return $this->connection;
    }

    #Отключиться от БД

    public function killConnection(){
        mysqli_close($this->connection);
        $this->connection = null;
    }



//
//    private function _connectToDatabase()
//    {
//        $connection = null;
//        $connection = mysql_connect(DBSERVER, DBUSER, DBPASSWORD);
//        if (!$connection) {
//            die('Error connect DB: ' . mysql_error());
//        }
//        return $connection;
//    }
//
//    static public function setConnect()
//    {
//        if (!self::$_connection) {
//            self::$_connection = self::_connectToDatabase();
//        }
//        return self::$_connection;
//    }
//
//    static public function removeConnect()
//    {
//        mysql_close();
//        return self::$_connection = null;
//    }

}