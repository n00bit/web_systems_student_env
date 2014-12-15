<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
Class Staff{

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
        $staffData = new StaffModel();
        $this->current_data_storage = $staffData->getAllPersonalScore($id);
        var_dump($this->current_data_storage->getPersonalScore());
    }


}