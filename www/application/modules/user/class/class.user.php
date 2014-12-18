<?php

/*
 * Setter - устанавливает значения приватных полей класса.
 * Getter - получает значения приватных полей класса.
 * Добавить методы - взятие данных из вне, расфасовка по полям (массиву), закачка в бд.
 * Проверить/переписать текущие методы класса.
 * */

class User
{

    private $auth = array();

    static private $_instance = null;

    private $id = null;
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

    private $mapping = array(
        'id' => 'setId',
        'name' => 'setName',
        'surname' => 'setSurname',
        'patronymic' => 'setPatronymic',
        'birthday' => 'setBirthday',
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

    public function __construct()
    {
        /*Если пользователь был авторизован, то присваиваем сохраненные данные.
    if (isset($_SESSION['user'])) {
      if ($_SESSION['userAuthDomain'] == $_SERVER['SERVER_NAME']) {
        $this->auth = $_SESSION['user'];
      }
    }*/
    }

    private function __clone()
    {

    }

    private function __wakeup()
    {

    }

    private function load($id)
    {

    }

    static public function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self;
        }
        return self::$_instance;
    }

    private function setData($data)
    {
        foreach ($data as $key => $value) {
            if (isset($this->mapping[$key])) {
                $field = $this->mapping[$key];
                $this->$field($value);
            }
        }
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurName()
    {
        return $this->surname;
    }

    public function getPatronymic()
    {
        return $this->patronymic;
    }

    public function getbirthday()
    {
        return $this->birthday;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getPassportSeries()
    {
        return $this->PassportSeries;
    }

    public function getPassportNumber()
    {
        return $this->PassportNumber;
    }

    public function getPassportAddress()
    {
        return $this->PassportAddress;
    }

    public function getPassportGetDate()
    {
        return $this->PassportGetDate;
    }

    public function getPhoneContact()
    {
        return $this->phoneContact;
    }

    public function getLoginPhone()
    {
        return $this->loginPhone;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /***SET***/

    public function setId($id)
    {
        if (is_numeric($id)) {
            $this->id = $id;
        } else {
            throw new Exception('Wrong id');
        }
    }

    public function setName($pName)
    {
        if (is_string($pName)) {
            $this->name = $pName;
        } else {
            throw new Exception('Wrong name');
        }
    }

    public function setSurname($pSurname)
    {
        if (is_string($pSurname)) {
            $this->surname = $pSurname;
        } else {
            throw new Exception('Wrong surname');
        }
    }

    public function setPatronymic($pPatronymic)
    {
        if (is_string($pPatronymic)) {
            $this->patronymic = $pPatronymic;
        } else {
            throw new Exception('Wrong patronymic');
        }
    }

    public function setBirthday($pBirthday)
    {
        $pattern = '\d{2}[.|,|\-|\/]\d{2}[.|,|\-|\/]\d{4}';
        if (preg_match($pattern, $pBirthday)) {
            $this->birthday = $pBirthday;
        } else {
            throw new Exception('Wrong birthday');
        }

    }

    public function setGender($pGender)
    {
        $this->gender = $pGender;
    }

    public function setPassportSeries($pPassportSeries)
    {
        $pattern = '\d{4}';
        if (preg_match($pattern, $pPassportSeries)) {
            $this->PassportSeries = $pPassportSeries;
        } else {
            throw new Exception('Wrong Passport series');
        }
    }

    public function setPassportNumber($pPassportNumber)
    {
        $pattern = '\d{6}';
        if (preg_match($pattern, $pPassportNumber)) {
            $this->PassportNumber = $pPassportNumber;
        } else {
            throw new Exception('Wrong Passport series');
        }
    }

    public function setPassportAddress($pAdr)
    {
        $pattern = '\w+';
        if (preg_match($pattern, $pAdr)) {
            $this->PassportAddress = $pAdr;
        } else {
            throw new Exception('Wrong address');
        }
    }

    public function setPassportGetDate($pPassportGetDate)
    {
        $pattern = '/\d{2}[.|,|\-|\/]\d{2}[.|,|\-|\/]\d{4}/';
        if (preg_match($pattern, $pPassportGetDate)) {
            $this->PassportGetDate = $pPassportGetDate;
        } else {
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
        if (preg_match($pattern, $phoneCont)) {
            $this->phoneContact = $phoneCont;
        } else {
            throw new Exception('Wrong contact phone number');
        }
    }

    public function setLogin($login){
        $pattern = '/\d{6}/';
        if(preg_match($pattern,$login)){
            $this->loginPhone;
        }
        else{
            throw new Exception('Wrong login');
        }
    }

    public function setPassword($pass)
    {
        $pattern = '/\w{20}/';
        if (preg_match($pattern, $pass)) {
            $this->password = $pass;
        } else {
            throw new Exception('Wrong password');
        }
    }

    public function setEmail($email)
    {
        $pattern = '/[^(\w)|(\@)|(\.)|(\-)]/';
        if (preg_match($pattern, $email)) {
            $this->email = $email;
        } else {
            throw new Exception('Wrong E-mail');
        }
    }

}