<?php

/*
 * Create Interfaces
 *
 * */

class User
{

    public function __construct($id){
        print "Пользователь с номером ID $id";
    }

    private $name = null;
    private $surname = null;
    private $patronymic = null;
    private $brithdate = null;
    private $gender = null;
    private $pasportSeries = null;
    private $pasportNumber = null;
    private $pasportDepartment = null;
    private $pasportAdres = null;
    private $pasportGetDate = null;
    private $phoneContact = null;
    private $loginPhone = null;
    private $password = null;
    private $email = null;


    private function load($id){

    }

    /*
     *@$data - assoc array*/
    private function loadData($data){

        foreach($data as $key => $value)
        {
            switch($key)
            {
                case 'name':{
                    $this->name = $value;
                    break;
                }
                case 'surname':{
                    $this->surname = $value;
                    break;
                }
            }
        }

    }

    public function getName()
    {
        $name = $this->name;
        return $name;
    }
    public function getSurName()
    {
        $surname = $this->surname;
        return $surname;
    }
}

class UserFactory
{
    public static function CreateUser($id)
    {
        return new User($id);
    }

    public static function where()
    {

    }
    public static function sort()
    {

    }
    public static function limit()
    {

    }
    /* Appeal to BD & execute query*/
    public static function execute()
    {
        $loadInDB = new Database();

    }


}

/*    public function getName();
    public function getSurname();
    public function getPatronymic();
    public function getBrithdate();
    public function getGender();
    public function getPasportSeries();
    public function getPasportNumber();
    public function getPasportAdress();
    public function getPasportDate();
    public function getPasportDepartment();
    public function getPhoneContact();
    public function getLoginPhone();
    public function getEmail();
    public function getPassword();
*/

