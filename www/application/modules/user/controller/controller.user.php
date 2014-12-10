<?php

/*
 * Setter - устанавливает значения приватных полей класса.
 * Getter - получает значения приватных полей класса.
 * Добавить методы - взятие данных из вне, расфасовка по полям (массиву), закачка в бд.
 * Проверить/переписать текущие методы класса.
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
    private $birthday = null;
    private $gender = null;
    private $PassportSeries = null;
    private $PassportNumber = null;
    private $PassportDepartment = null;
    private $PassportAddress = null;
    private $PassportGetDate = null;
    private $phoneContact = null;
    private $loginPhone = null;
    private $password = null;
    private $email = null;

    private $setMapping = array(
        'name' => 'setName',
        'surname' => 'setSurname',
        'patronymic' => 'setPatronymic',
        'birthday' => 'setbirthday',
        'gender' => 'setGender',
        'PassportSeries' => 'setPassportSeries',
        'PassportNumber' => 'setPassportNumber',
        'PassportDepartment' => 'setPassportDepartment',
        'PassportAddress' => 'setPassportAddress',
        'PassportGetDate' => 'setPassportGetDate',
        'phoneContact' => 'setPhoneContact',
        'password' => 'setPassword',
        'email' => 'setEmail'
    );

    private function load($id)
    {

    }


    private function setData($data)
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

    public function getbirthday()
    {
        $birthday = $this->birthday;
        return $birthday;
    }

    public function getGender()
    {
        $gender = $this->gender;
        return $gender;
    }

    public function getPassportSeries()
    {
        $PassportSeries = $this->PassportSeries;
        return $PassportSeries;
    }

    public function getPassportNumber()
    {
        $PassportNumber = $this->PassportNumber;
        return $PassportNumber;
    }

    public function getPassportAddress()
    {
        $pAdr = $this->PassportAddress;
        return $pAdr;
    }

    public function getPassportGetDate()
    {
        $PassportGetDate = $this->PassportGetDate;
        return $PassportGetDate;
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

    public function setbirthday($birthday)
    {
        $pattern = '\d{2}[.|,|\-|\/]\d{2}[.|,|\-|\/]\d{4}';
        if (preg_match($pattern, $birthday)) {
            $this->birthday = $birthday;
        } else {
            throw new Exception('Wrong birthday');
        }

    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setPassportSeries($PassportSeries)
    {
        $pattern = '\d{4}';
        if (preg_match($pattern, $PassportSeries)) {
            $this->PassportSeries = $PassportSeries;
        } else {
            throw new Exception('Wrong Passport series');
        }
    }

    public function setPassportNumber($PassportNumber)
    {
        $pattern = '\d{6}';
        if (preg_match($pattern, $PassportNumber)) {
            $this->PassportNumber = $PassportNumber;
        } else {
            throw new Exception('Wrong Passport series');
        }
    }

    public function setPassportAddress($pAdr)
    {
        $pattern = '\w+';
        if (preg_match($pattern, $pAdr)) {
            $this->PassportAddress = $pAdr;
        }
        else {
            throw new Exception('Wrong address');
        }
    }

    public function setPassportGetDate($PassportGetDate)
    {
        $pattern = '/\d{2}[.|,|\-|\/]\d{2}[.|,|\-|\/]\d{4}/';
        if (preg_match($pattern, $PassportGetDate)) {
            $this->PassportGetDate = $PassportGetDate;
        }
        else {
            throw new Exception('Wrong date get Passport');
        }
    }

    public function setPhoneContact($phoneCont)
    {
        $pattern = '/((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}/';
        /*
        +79261234567
        89261234567
        79261234567
        +7 926 123 45 67
        8(926)123-45-67
        123-45-67
        9261234567
        79261234567
        (495)1234567
        (495) 123 45 67
        89261234567
        8-926-123-45-67
        8 927 1234 234
        8 927 12 12 888
        8 927 12 555 12
        8 927 123 8 123*/
        if(preg_match($pattern,$phoneCont)) {
            $this->phoneContact = $phoneCont;
        }
        else {
            throw new Exception('Wrong contact phone number');
        }
    }

    /*Set'eр на логин не нужен. его нельзя изменить.*/

    public function setPassword($pass)
    {
        $pattern = '/\w{20}/';
        if(preg_match($pattern,$pass)) {
            $this->password = $pass;
        }
        else {
            throw new Exception('Wrong password');
        }
    }

    public function setEmail($email)
    {
        $pattern = '/[^(\w)|(\@)|(\.)|(\-)]/';
        if(preg_match($pattern, $email)) {
            $this->email = $email;
        }
        else {
            throw new Exception('Wrong E-mail');
        }
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
