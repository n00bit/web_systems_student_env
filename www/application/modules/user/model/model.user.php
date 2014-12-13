<?php

/*
 * Класс предоставляет методы для рабоыт с данными юзера.
 * */

class UserModel
{
    /*Правильно ли вызывать в каждом классе соединение с БД? Может быть проще поместить это в какой-то файл, и пкаждый раз цеплять
    оттуда этот метод...?*/

    private static $statusCon = null;

    private $login;
    private $password;

//    private $personalInfo = array(
//        'login' => '',
//        'password' => '',
//       'email' => '',
//        'name' => '',
//        'surname' => '',
//        'patronymic' => '',
//        'birthday' => '',
//        'gender' => '',
//        'PassportSeries' => '',
//        'PassportNumber' => '',
//        'PassportDepartment' => '',
//        'PassportAddress' => '',
//        'PassportGetDate' => '',
//        'phoneContact' => ''
//    );

    public function __construct($login, $password)
    {
        $this->login = mysql_real_escape_string($login);
        $this->password = mysql_real_escape_string($password);
        //$this->personalInfo['login'][] = $login;
        //$this->personalInfo['password'][] = $password;
    }

    public function authentication($login, $password){
        $vLog = null;
        $vPass = null;
        $subscriber = new User();
        /*Можно ли сделать ф-ю поиска логина в таблице... Либо есть другой путь?!*/
    }
}