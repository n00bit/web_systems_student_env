<?php
/*
 * Класс предоставляет методы для рабоыт с данными юзера.
 * */
class UserModel{

    private $personalInfo = array(
        'login' => '',
        'password' => '',
        'email' => '',
        'name' => '',
        'surname' => '',
        'patronymic' => '',
        'birthday' => '',
        'gender' => '',
        'PassportSeries' => '',
        'PassportNumber' => '',
        'PassportDepartment' => '',
        'PassportAddress' => '',
        'PassportGetDate' => '',
        'phoneContact' => ''
    );

    private function __contsruct($login,$password){
        $this->personalInfo['login'][] = $login;
        $this->personalInfo['password'][] = $password;
    }

}