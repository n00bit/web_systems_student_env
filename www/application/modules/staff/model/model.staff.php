<?php

//персонаж - оператор одного из отделов
Class StaffModel{//инструменты для работы с БД

    private static $connection_container = null;
    private $login = null;//логин персонажа
    private $password = null;//пароль персонажа
    private $id = null;//id персонажа

    private $dataStorage = null;

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
            $this->dataStorage->setAllData($result);//запомнить все все персональные данные
            return "Staff";//вернуть имя соответствующего контроллека
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

    public function getDataStorage(){//вернуть храниище данных
        $this->dataStorage= new StaffData();//построить хранилище
        return $this->dataStorage;
    }

    public function getAllPersonalScore($id){//возвращение данных об оценках деятельности персонажа
        $personalScores = $this->getStaffScore($id);
        $this->dataStorage->setScoreData($personalScores);
    }

    private function getStaffScore($id){//получение средних оценок персонажа
        var_dump($id);
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

    public function getAllPersonalTikcets($id){//возвращение данных об оценках деятельности персонажа
        $personalTikcets = $this->getPersonalTikets($id);
        $this->dataStorage->setPersonalWorkData($personalTikcets,"TICKETS");
    }

    private function getPersonalTikets($id){//получение всхе тикетов персонажа
        $current_connection = $this->installConnection();
        $query = "SELECT
                    t.id,
                    t.topic,
                    s.name,
                    s.surname,
                    sc.name,
                    sc.surname
                FROM ticket t
                INNER JOIN staff s
                ON t.operator_id = s.id
                INNER JOIN subscriber sc
                ON sc.id=t.subscriber_id
                WHERE
                    t.status = 'OPEN'  AND
                    t.operator_id = $id";
        $result = $current_connection->query($query);
        return $result;
    }

    public function getPersonalMessegesBetween($id, $beginDate, $EndDate){////получение сообщений перснажа
        $personalMessage = $this->getAbonentMesseges ($id, $beginDate, $EndDate);
        $this->dataStorage->setPersonalWorkData($personalMessage,"MESSAGES FROM PERSON");
        $personalMessage = $this->getPersonalMesseges ($id, $beginDate, $EndDate);
        $this->dataStorage->setPersonalWorkData($personalMessage,"MESSAGES TO PERSON");
    }

    private function getPersonalMesseges($id, $beginDate, $EndDate){//получение сообщений перснажа
        $current_connection = $this->installConnection();
        $query = "SELECT
                    m.text,
                    m.date,
                    s.name,
                    s.surname,
                    s.patronymic
                FROM
                    message m
                INNER JOIN ticket t
                    ON t.id=m.ticket_id
                INNER JOIN staff s
                    ON t.operator_id = s.id
                WHERE
                    m.ticket_id = $id AND
                    m.direct = 'OPERAT' AND
                    m.date BETWEEN '$beginDate' AND '$EndDate'";
        $result = $current_connection->query($query);
        return $result;
    }

    private function getAbonentMesseges($id, $beginDate, $EndDate){//получение сообщений перснажа
        $current_connection = $this->installConnection();
        $query = "SELECT
                    m.text,
                    m.date,
                    s.name,
                    s.surname,
                    s.patronymic
                FROM
                    message m
                INNER JOIN ticket t
                    ON t.id=m.ticket_id
                INNER JOIN subscriber s
                    ON t.subscriber_id = s.id
                WHERE
                    m.ticket_id = $id AND
                    m.direct = 'ABON' AND
                    m.date BETWEEN '$beginDate' AND '$EndDate'";
        $result = $current_connection->query($query);
        return $result;
    }

    public function killTicket($ticket_id){//написание нового сообщения
        $current_connection = $this->installConnection();
        $query = "UPDATE ticket t SET t.status='CLOSED' WHERE t.id= $ticket_id";
        $result = $current_connection->query($query);
    }


    public function sendNewMessege($ticket_id, $messageText){//написание нового сообщения
        $current_connection = $this->installConnection();
        $current_date = date("Y-m-d");
        $query = "INSERT INTO
                message(
                    text,
                    date,
                    direct,
                    ticket_id)
                VALUES (
                    '$messageText',
                    '$current_date',
                    'OPERAT',
                    $ticket_id)";
        $current_connection->query($query);
    }


}

