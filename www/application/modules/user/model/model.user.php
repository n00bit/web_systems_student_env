<?php

/*
 * Класс предоставляет методы для рабоыт с данными юзера.
 * */

class UserModel
{

    private static $_connection = null;
    private static $_db = null;

    private $id = null;

    private $authLogin = null;
    private $authPassword = null;
    private $authId = null;

    private function __contsruct($login, $password)
    {
        $this->$authLogin = $login;
        $this->$authPassword = $password;
    }

    private function setConnect()
    {
        self::$_connection = Connection::getInstance();
        return self::$_connection->getConnection();
    }

    private function initDB()
    {
        return self::$_db = Database::getInstance();
    }

    /*login????*/
    public function signIn()
    {
        $db = self::initDB();
        $requestQuery = $db->query("SELECT login FROM subscriber WHERE login = {$this->authLogin}");
        var_dump($requestQuery);
        if ($requestQuery) {
            $requestQuery = $db->query("SELECT *");
            if($requestQuery){
                $password = md5($this->authPassword);
                $requestQuery = $db->query("SELECT * FROM subscriber WHERE login = {$this->authLogin} AND password = {$password}");
                if($requestQuery){
                    $userSession = new Session(($id));
                }
                else{
                    throw new Exception('Invalid login or password!');
                }
            }
        } else {
            throw new Exception('Invalid login or password!');
        }
        $result = $db->fetchAssoc($requestQuery);
    }

    private function getStaffRecord()
    {//считать данные из БД по логину и паролю
        $current_connection = $this->installConnection();
        $query = "SELECT * FROM staff  WHERE login = '$this->login' AND password = '$this->password'";//запросЪ
        $result = $current_connection->query($query);//выполнение запроса
        return $result;
    }
}