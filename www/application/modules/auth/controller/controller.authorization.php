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

            $login = null;
            $password = null;
            if($_SERVER['REQUEST_METHOD']=='POST'){//времаенная обработка методов для авторизациии, ПОДЛЕЖИТ УНИЧТОЖЕНИЮ
                $login = $_POST['login'];          //ПУТЕМ ИСКЛЮЧЕНИЯ ВОЗМОЖНОСТИ ОБРАБОТКИ GET
                $password = $_POST['password'];
            }
            else{
                $login = $_GET['login'];
                $password = $_GET['password'];
            }

            $userTools = $this->getUser($login);
            $user = $userTools->verifyPassword($password);

            if (!is_null($user)) {
                $this->signInAccount($user->getPersonalID());
                $this->gotoUserHome($user->getPersonalID());
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

        public function showLoginFormForDimas(){//показать форму авторизации К УНИЧТОЖЕНИЮ
            $view = new AuthorizationViewer();
            $view->showLoginFormForDimas();
        }

    }