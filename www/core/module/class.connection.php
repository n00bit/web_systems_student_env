<?php
/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 12.11.2014
 * Time: 21:19
 */

require_once '../ini.db.php';

class Connections{
    static protected $_connection = null;

    protected function _connectToDatabase()
    {
        $connection = null;
        $connection = mysql_connect(DBSERVER,DBUSER,DBPASSWORD);
        if(!$connection)
        {
            die('Error connect DB: ' .mysql_error());
        }

        return $connection;
    }

    static public function setConnect(){
         if(!self::$_connection){
             self::$_connection = self::_connectToDatabase();
         }
        return self::$_connection;
    }

    static public function removeConnect(){
        return self::$_connection = null;
    }

}