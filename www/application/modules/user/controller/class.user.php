<?php
class User{

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


}

interface IUserPersonalInfo{

    public function getName();
    public function getSurname();
    public function getPatronymic();

}

interface IUserPasportInfo{

    public function getPasportSeries();
    public function getPasportNumber();
    public function getPasportDepartment();
    public function getPasportAdress();
    public function getPasportGetDate();

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

