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
            #new = null;
            print "What's up, dock?";//детектор работоспособности
            $current_id = 0;
            $data = new AuthorDB();//инициализация класса работы с базой данных
            if (preg_match('/[A-Za-z]+/', $_POST["login"]) !== 0) {//если в логине содержутся не только цифры то логинится либо, сотрудник либо бригада
                $current_id = $data->getID("staff", "login");//поис по сотрудникам
                if(is_null($current_id)){//если по сотрудникам ничего не найдено
                    $current_id = $data->getID("brigade","login");//проверить бригады
                    if(is_null($current_id)) {//если ничего не найдено, то не корректный ввод данных
                        throw new Exception("Not find record with input date!");
                    }
                    $new = new Brigade($current_id);
                    return;
                }
                $new = new Staff($current_id);
            } else {//в логине только цифры - логинится только абонент
                $current_id = $data->getID("subscriber", "login_phone");
                if(is_null($current_id)) {//если ничего не найдено, то не корректный ввод данных
                    throw new Exception("Not find record with input date!");
                }
                $new = new User($current_id);
            }
            $data->endWork();//окончание работы с базой данных
        }
    }