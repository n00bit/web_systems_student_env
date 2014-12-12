<?php

Class StaffModel{
    //персонаж - оператор одного из отделов

    private static $connection_container = null;
    private $personalData = array(); //пероснальные данные персонажа

    private $login = null;//логин персонажа
    private $password = null;//пароль персонажа
    private $department = null;//отдел пресонажа

    /*Если static, то обращение self::*/
    private function installConnection(){//установка соединения с базой данных(через уже существующий класс работы с базой данных)
        self::$connection_container = Connection::getInstance();
        return self::$connection_container->getConnection();
    }

    public function __construct($login){//инициализация класса работы с персоналом
        $this->login = $login;
    }

    public function verifyPassword($password){//проверка пароля и логина на валидность
        $this->password = $password;
        $result = $this->getStaffRecord();//получить данные о сотруднике
        $this->parseData($result);
        if(!is_null($this->personalData)){//логин и пароль корректны
            return true;
        }
        else{//некорректные логин или пароль
            return false;
        }
    }

    private function getStaffRecord(){//считать данные из БД по логину и паролю
        $current_connection = $this->installConnection();
        $query = "SELECT * FROM staff  WHERE login = '$this->login' AND password = '$this->password'";//запросЪ
        $result =  $current_connection->query($query);//выполнение запроса
        return $result;
    }

    private function parseData($result){//
        $result = mysqli_fetch_array($result);
        foreach($result as $index => $value){
            if(preg_match('/[A-Za-z]+/',$index)){
                $this->personalData[$index] = $value;
            }
        }
    }

    public function getPersonalID(){//вернуть ID персонажа
        return $this->personalData['id'];
    }


}

