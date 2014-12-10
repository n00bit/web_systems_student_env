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

            $login = $_POST['login'];
            $password = $_POST['password'];
            $user = $this->getUser($login);
            if ($user->verifyPassword($password)) {
                $this->signInAccount($user->id(), $user->role());
                //$this->gotoHome();
            }
            else {
               // $this->showMessage('Password is wrong');
            }
        }

        private function getUser($login){//вернуть соотвтствующй модуль для дальнейшей обработки
            if (preg_match('/[A-Za-z]+/', $login) !== 0) {//если в логине не только цифры
                return new StaffModel($login);                                   //то логинется не пользователь
            }
            else{//логинится пользователь
                return null;
            }
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