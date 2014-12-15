<?php

//персонаж - оператор одного из отделов
Class StaffModel{//инструменты для работы с БД

    private static $connection_container = null;

    private $login = null;//логин персонажа
    private $password = null;//пароль персонажа
    private $id = null;//id персонажа

    /*Если static, то обращение self::*/
    private function installConnection(){//установка соединения с базой данных(через уже существующий класс работы с базой данных)
        self::$connection_container = Connection::getInstance();
        return self::$connection_container->getConnection();
    }

    public function __construct(){//инициализация класса работы с персоналом

    }

    public function verifyLoginAndPassword($login,$password){//проверка пароля и логина на валидность
        $this->login = $login;
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

    public function getAllPersonalScore($id){//возвращение данных об оценках деятельности персонажа
        $data = new StaffData();
        $personalScores = $this->getStaffScore($id);
        $data->setScoreData($personalScores);
        return $data;
    }


    private function getStaffScore($id){//получение средних оценок персонажа
        $current_connection = $this->installConnection();
        $query="SELECT
	(AVG(r.operator_rating_speed)+AVG(t.rating_speed))/2,
	(AVG(r.operator_rating_efficiency)+AVG(t.rating_efficiency))/2,
	(AVG(r.operator_rating_service)+AVG(t.ratig_quality))/2
FROM
	request_card r
INNER JOIN ticket t
	ON r.operator_id = t.operator_id
WHERE
	r.operator_id = $id";
        $result =  $current_connection->query($query);//выполнение запроса
        return $result;
    }
}

