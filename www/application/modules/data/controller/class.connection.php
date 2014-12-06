<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 12.11.2014
 * Time: 21:19
 */

//require_once 'ini.db.php';

class Connections
{

    private $connection = null;//текущее соединеие


    public function __construct(){//подключение к базе данных
        $this->connection = mysqli_connect("172.33.10.50","root","root","webdb");
        if(!$this->connection){

            die ("Error of connecting to database!");
        }
    }

    public function getConnection(){//вернуть соединение
        return $this->connection;
    }

    public function killConnection(){//разоравть соединение к БД
        close($this->connection);
        $this->connection = null;
    }

//    static protected $_connection = null;
//    static protected $_instance = null;
//
//    public static function getInstance()
//    {
//        if (is_null(self::$_instance)) {
//            self::$_instance = new Connections();
//        }
//        return self::$_instance;
//    }
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