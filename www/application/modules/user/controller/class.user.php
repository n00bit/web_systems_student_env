<?php

/*
 * Create Interfaces
 *
 * */

interface IUserPersonalInfo
{

    public function getName();

    public function getSurname();

    public function getPatronymic();

    public function getBrithday();

    public function getGender();

    public function getPhoneContact();

    /**************SET**************/

    public function setName();

    public function setSurname();

    public function setPatronymic();

    public function setBrithday();

    public function setGender();

    public function setPhoneContact();

    /*}

    interface IUserPasportInfo{*/

    public function getPasportSeries();

    public function getPasportNumber();

    public function getPasportDepartment();

    public function getPasportAdress();

    public function getPasportGetDate();

    /**************SET**************/

    public function setPasportSeries();

    public function setPasportNumber();

    public function setPasportDepartment();

    public function setPasportAdress();

    public function setPasportGetDate();

}

interface ILoginInfo
{

    public function getLogin();

    public function getPassword();

    /**************SET**************/

    public function setLogin();

    public function setPassword();

}

class User implements IUserPersonalInfo
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


    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }

    public function getBrithday()
    {
        return $this->brithdate;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getPhoneContact()
    {
        return $this->phoneContact;
    }

    public function getPasportSeries()
    {
        return $this->pasportSeries;
    }

    public function getPasportNumber()
    {
        return $this->pasportNumber;
    }

    public function getPasportDepartment()
    {
        return $this->pasportDepartment;
    }

    public function getPasportAdress()
    {
        return $this->pasportAdres;
    }

    public function getPasportGetDate()
    {
        return $this->pasportGetDate;
    }

    /**************SET**************/

    public function setName()
    {

    }

    public function setSurname()
    {

    }

    public function setPatronymic()
    {

    }

    public function setBrithday()
    {

    }

    public function setGender()
    {

    }

    public function setPhoneContact()
    {

    }

    public function setPasportSeries()
    {

    }

    public function setPasportNumber()
    {

    }

    public function setPasportDepartment()
    {

    }

    public function setPasportAdress()
    {

    }

    public function setPasportGetDate()
    {

    }


}

class UserFactory
{
    public static function Create($id)
    {
        return new User($id);
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

