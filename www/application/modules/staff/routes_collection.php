<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
    $ar1 = array("Staff","ticketChoose");
    $ar2 = array("Staff","ticketsConstruct");
    $ar3 = array("Staff","sendMessage");

    $codes_params = array("staffHome"=>"staff_home_page","message"=>"message_box","messageSend"=>"message");

    $r = Router::getInstance();


   // $r->get('/:staffHome',$ar1,$codes_params);//домашняя страница персонажа
    $r->post('/:message',$ar1,$codes_params);//список всех сообщений
    $r->post('/:messageSend',$ar3,$codes_params);//написание сообщения
    $r->get('/:staffHome',$ar2,$codes_params);//домашняя страница персонажа
   // $r->post('/:staffHome',$ar3,$codes_params);//домашняя страница персонажа

