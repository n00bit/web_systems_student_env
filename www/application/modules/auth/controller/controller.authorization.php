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
                $this->signInAccount($user->getPersonalID());
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

        private function signInAccount($id){//сохранение данных залогиненного персонажа в сессии
            session_start();
            $_SESSION['id'] = $id;
        }

        public function exitFromAccount(){//разлогинивание персонажа и отчистка кУков
            var_dump(session_id());
            var_dump($_COOKIE);
            foreach($_COOKIE as $index=>$value){//зачистка куков
                setcookie($index,null);
            }
            session_unset();//зачистка сессии
            session_destroy();//разрушение сессии
    }

    }