<?php

/*
 * Create Interfaces
 *
 * */

class User
{

    public function __construct()
    {
        /*  print "Пользователь с номером ID $id";*/
    }

    private $name = null;
    private $surname = null;
    private $patronymic = null;
    private $brithdate = null;
    private $gender = null;
    private $pasportSeries = null;
    private $pasportNumber = null;
    private $pasportDepartment = null;
    private $pasportAddress = null;
    private $pasportGetDate = null;
    private $phoneContact = null;
    private $loginPhone = null;
    private $password = null;
    private $email = null;

    private $setMapping = array(
        'name' => 'setName',
        'surname' => 'setSurname',
        'patronymic' => 'setPatronymic',
        'brithdate' => 'setBrithdate',
        'gender' => 'setGender',
        'pasportSeries' => 'setPasportSeries',
        'pasportNumber' => 'setPasportNumber',
        'pasportDepartment' => 'setPasportDepartment',
        'pasportAddress' => 'setPasportAddress',
        'pasportGetDate' => 'setPasportGetDate',
        'phoneContact' => 'setPhoneContact',
        'loginPhone' => 'setLoginPhone',
        'password' => 'setPassword',
        'email' => 'setEmail'
    );

    /*
     * Обновляет данные в БД по определенному id в таблице `users` */
    private function load($id)
    {

    }

    /*
     * Выгружает из БД данные определенного пользователя из таблицы `users` */
    private function loadData($data)
    {

        foreach ($data as $key => $value) {
            if (isset($this->setMapping[$key])) {
                $field = $this->setMapping[$key];
                $this->$field($value);
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

    public function getPatronymic()
    {
        $patron = $this->patronymic;
        return $patron;
    }

    public function getBrithdate()
    {
        $brithdate = $this->brithdate;
        return $brithdate;
    }

    public function getGender()
    {
        $gender = $this->gender;
        return $gender;
    }

    public function getPasportSeries()
    {
        $pasportSeries = $this->pasportSeries;
        return $pasportSeries;
    }

    public function getPasportNumber()
    {
        $pasportNumber = $this->pasportNumber;
        return $pasportNumber;
    }

    public function getPasportAddress()
    {
        $pAdr = $this->pasportAddress;
        return $pAdr;
    }

    public function getPasportGetDate()
    {
        $pasportGetDate = $this->pasportGetDate;
        return $pasportGetDate;
    }

    public function getPhoneContact()
    {
        $phoneCont = $this->phoneContact;
        return $phoneCont;
    }

    public function getLoginPhone()
    {
        $login = $this->loginPhone;
        return $login;
    }

    public function getPassword()
    {
        $pass = $this->password;
        return $pass;
    }

    public function getEmail()
    {
        $email = $this->email;
        return $email;
    }

    /***SET***/

    /* Обработать все ошибки*/
    public function setName($setName)
    {
        if (is_string($setName)) {
            $this->name = $setName;
        } else {
            throw new Exception('Wrong name');
        }
    }

    public function setSurname($setSurname)
    {
        if (is_string($setSurname)) {
            $this->surname = $setSurname;
        } else {
            throw new Exception('Wrong surname');
        }
    }

    public function setPatronymic($patron)
    {
        if (is_string($patron)) {
            $this->patronymic = $patron;
        } else {
            throw new Exception('Wrong patronymic');
        }
    }

    public function setBrithdate($birthday)
    {
        $pattern = '\d{2}[.|,|\-|\/]\d{2}[.|,|\-|\/]\d{4}';
        if (preg_match($pattern, $birthday)) {
            $this->brithdate = $birthday;
        } else {
            throw new Exception('Wrong birthday');
        }

    }

    public function setGender($gender)
    {

        $this->gender = $gender;
    }

    public function setPasportSeries($pasportSeries)
    {
        $pattern = '\d{4}';
        if (preg_match($pattern, $pasportSeries)) {
            $this->pasportSeries = $pasportSeries;
        } else {
            throw new Exception('Wrong pasport series');
        }
    }

    public function setPasportNumber($pasportNumber)
    {
        $pattern = '\d{6}';
        if (preg_match($pattern, $pasportNumber)) {
            $this->pasportNumber = $pasportNumber;
        } else {
            throw new Exception('Wrong pasport series');
        }
    }

    public function setPasportAddress($pAdr)
    {
        $this->pasportAddress = $pAdr;

    }

    public function setPasportGetDate($pasportGetDate)
    {
        $this->pasportGetDate = $pasportGetDate;
    }

    public function setPhoneContact($phoneCont)
    {
        $this->phoneContact = $phoneCont;

    }

    public function setLoginPhone($login)
    {
        $this->loginPhone = $login;

    }

    public function setPassword($pass)
    {
        $this->password = $pass;

    }

    public function setEmail($email)
    {
        $this->email = $email;
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
