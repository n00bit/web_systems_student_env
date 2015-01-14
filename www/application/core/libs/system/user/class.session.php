<?php

/**
 * Created by PhpStorm.
 * User: Dmitriy
 * Date: 18.12.2014
 * Time: 15:31
 */
class Session
{

    private static $id = null;

    private function __construct($id)
    {
        if (is_numeric($id)) {
            self::$id = $id;
        }
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    public function sessionStart()
    {
        if (isset($_SESSION)) {
            session_start();
            $_SESSION['id'] = self::$id;
        }

    }

    public function sessionStatus()
    {

    }

    public function sessionClose()
    {
        session_unset();
        session_destroy();
    }
}