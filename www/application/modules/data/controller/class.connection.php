<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 12.11.2014
 * Time: 21:19
 */

require_once 'ini.db.php';

class Connections
{

    protected function __construct()
    {
        /*Поместить сюда подключение к БД*/
    }

    static protected $_connection = null;
    static protected $_instance = null;

    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new Connections();
        }
        return self::$_instance;
    }

    private function _connectToDatabase()
    {
        $connection = null;
        $connection = mysql_connect(DBSERVER, DBUSER, DBPASSWORD);
        if (!$connection) {
            die('Error connect DB: ' . mysql_error());
        }
        return $connection;
    }

    static public function setConnect()
    {
        if (!self::$_connection) {
            self::$_connection = self::_connectToDatabase();
        }
        return self::$_connection;
    }

    static public function removeConnect()
    {
        mysql_close();
        return self::$_connection = null;
    }

}