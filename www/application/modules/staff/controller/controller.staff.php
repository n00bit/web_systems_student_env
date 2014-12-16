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

    public function autorization(){//действие после авторизации
        $id = $this->current_id;
        $this->current_data_worker = new StaffModel();

        $this->current_data_storage = $this->current_data_worker->getDataStorage();//тестирование запроса оценок

        $this->current_data_worker->getAllPersonalScore($id);
        $this->current_data_worker->getAllPersonalTikcets($id);

        $this->current_data_worker->getPersonalMessegesBetween(3,'2012-01-01','2013-01-01');

        var_dump($this->current_data_storage->getPersonalScore());
        var_dump($this->current_data_storage->getAllPersonalTiketsID());
        var_dump($this->current_data_storage->getPersonalMessege());
    }


}