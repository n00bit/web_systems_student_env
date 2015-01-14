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
            print "What's up dock?";
            $current_id = null;
            $login = $_POST['login'];
            $password = $_POST['password'];
            $userTools = $this->getUser($login);
            $user = $userTools->getDataStorage();//поучить хранилище
            $controller = $userTools->verifyLoginAndPassword($login,$password);//работа с хранилищем и возвращение соответствующего я контроллеа
            if (!is_null($user)) {
                $this->signInAccount($user->getPersonalID(),$controller);
                $this->gotoUserHome($user->getPersonalID());
            }
            else {
               // $this->showMessage('Password is wrong');
            }
        }

        private function getUser($login){//вернуть соотвтствующй модуль для дальнейшей обработки
            if (preg_match('/[A-Za-z]+/', $login) !== 0) {//если в логине не только цифры
                return new StaffModel();                                   //то логинется не пользователь
            }
            else{//логинится пользователь
                return null;
            }
        }

        private function signInAccount($id, $contoller){//сохранение данных залогиненного персонажа в сессии
            session_start();
            $_SESSION['id'] = $id;
            $account = new $contoller();
            var_dump($contoller);
            $account->ticketsConstruct();


        }

        public function exitFromAccount(){//разлогинивание персонажа и отчистка кУков
            foreach($_COOKIE as $index=>$value){//зачистка куков
                setcookie($index,null);
            }
            session_unset();//зачистка сессии
            session_destroy();//разрушение сессии
            $this->gotoOvnHome();
        }

        private function gotoOvnHome(){
            print "You are not logined!";
        }

        private function gotoUserHome($id){//вызов построения нужного интерфейса
            $view = new AuthorizationViewer();
            $view->showUserHome($id);
        }

        public function showLoginForm(){//показать форму авторизации
            $view = new AuthorizationViewer();
            $view->showLoginForm();
        }


    }