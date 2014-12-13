<?php

//персонаж - оператор одного из отделов
Class StaffModel{//инструменты для работы с БД

    private static $connection_container = null;

    private $login = null;//логин персонажа
    private $password = null;//пароль персонажа

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
        $result = $this->getStaffRecord();//получить все данные о персонаже
        if(!is_null($result)){//логин и пароль корректны
            $staff = new StaffData();//построение хранилища данных
            $staff->setAllData($result);//запомнить все все персональные данные
            return $staff;
        }
        else{//некорректные логин или пароль
            return null;
        }
    }

    private function getStaffRecord(){//считать данные из БД по логину и паролю
        $current_connection = $this->installConnection();
        $query = "SELECT * FROM staff  WHERE login = '$this->login' AND password = '$this->password'";//запросЪ
        $result =  $current_connection->query($query);//выполнение запроса
        return $result;
    }

}

