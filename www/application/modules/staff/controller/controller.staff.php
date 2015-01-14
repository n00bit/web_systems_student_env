<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
Class Staff{

    private $current_data_worker = null;
    private $current_data_storage = null;
    private $current_id = null;

    private function loginTest(){//проверка на залогинивание персонажа
        foreach($_COOKIE as $value){
            if(!is_null($value)){//если в куках есть идентификатор сессии
                return true;//вернуть true
            }
        }
        return false;//иначе false
    }


    public function __construct(){
        if($this->loginTest()){
            session_start();
            $this->current_id = $_SESSION['id'];
        }
        else{
            return;
        }

    }

    public function sendMessage(){//Отправка сообщения
        session_start();
        $text=$_POST['text'];
        $tickel = $_SESSION['ticket_id'];
        $this->current_data_worker =  new StaffModel();
        $this->current_data_worker->sendNewMessege($tickel, $text);
    }

    public function closeTikcet($value){//Закрытие тикета
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalTikcets($this->current_id);
        $ticket=$this->current_data_storage->getPersonalTiket($value);

        $this->current_data_worker->killTicket($ticket['id']);

    }


    public function ticketsConstruct(){//действие после авторизации/вызов демонстрации всех тикетов
        $id = $this->current_id;
        $this->current_data_worker = new StaffModel();

        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalScore($id);
        $this->current_data_worker->getAllPersonalTikcets($id);

        $personalScore = $this->current_data_storage->getPersonalScore();
        $personalTickets =$this->current_data_storage->getAllPersonalTikets();
        $viewer = new StaffViewer();
        $viewer->showPersonalData($personalScore);
        $viewer->showAllTickets($personalTickets);
    }

    private function showMessge($value){//вызов демонстрации ипостроения сообщений
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalTikcets($this->current_id);

        $ticket=$this->current_data_storage->getPersonalTiket($value);

        $this->current_data_worker->getPersonalMessegesBetween($ticket['id'],'1000-01-01','3000-01-01');

        $personalMesseges['Request'] = $this->current_data_storage->getFromPersonalMessege();

        $personalMesseges['Respond'] = $this->current_data_storage->getToPersonalMessege();



        $viewer = new StaffViewer();
        $viewer->showAllMesseges($personalMesseges);
    }

    private function newMessege($value){//вызов демонстрации ипостроения сообщений
        $this->current_data_worker =  new StaffModel();
        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalTikcets($this->current_id);
        $ticket=$this->current_data_storage->getPersonalTiket($value);

        session_start();
        $_SESSION['ticket_id'] = $ticket['id'];

        $viewer = new StaffViewer();
        $viewer->showWriteFormMessege();
    }

    public function ticketChoose(){//обработка нажатия на кнопку
        $temp = $_POST;
        foreach($temp as $index => $value ){
            switch($index){
                case "showMesseges":{
                    $this->showMessge($value);
                }break;
                case "newMessege":{
                    $this->newMessege($value);
                }break;
                case "CloseTicket":{
                    $this->closeTikcet($value);
                }break;
            }
        }
    }





}