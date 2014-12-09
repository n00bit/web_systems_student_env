<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 06.12.2014
 * Time: 0:35
 */
    Class Authorization{

        public function baseAuthorization()//авторизация
        {
            print "What's up, dock?";//детектор работоспособности
            $current_id = null;
            $data = new AuthorDB();//инициализация класса работы с базой данных
            $current_id=$this->subscriberTest($data,'getID');
            if(!is_null($current_id)){
                $this->signInAccount($current_id,'subscriber');
                return;
            }
            $current_id=$this->workforceTest($data,'getID','staff','login');
            if(!is_null($current_id)){
                $this->signInAccount($current_id,'staff');
                return;
            }
            $current_id=$this->workforceTest($data,'getID','brigade','login');
            if(!is_null($current_id)){
                $this->signInAccount($current_id,'brigade');
                return;
            }
            $data->endWork();//окончание работы с базой данных
        }

        private function subscriberTest($data, $method){//попытка залогинится как абонент, передаем экземпляр класса и методЪ
            if (preg_match('/[A-Za-z]+/', $_POST["login"]) !== 0) {//если в логине не только цифры
                return null;                                       //то логинется не пользователь
            }
            else{
                if(method_exists($data,$method)) {
                    var_dump($data->$method("subscriber", "login_phone"));
                    return $data->$method("subscriber", "login_phone");
                }
            }
        }

        private function workforceTest($data, $method, $table_name, $field_name){//попытка залогиниться бригаде или оперу
            if(method_exists($data,$method)) {
                var_dump($data->$method($table_name, $field_name));
                return $data->$method($table_name, $field_name);
            }
        }

        private function signInAccount($id, $type){//сохранение данных залогиненного персонажа в cookie
            setcookie("id",$id);
            setcookie("person",$type);
        }

        public function exitFromAccount(){//разлогинивание персонажа и отчистка кУков
            setcookie("id",null);
            setcookie("person",null);
        }

    }