<?php
/**
 * Created by PhpStorm.
 * User: Alexandr
 * Date: 26.11.2014
 * Time: 13:25
 */
    $ar1 = array("Staff","autorization");
    $ar2 = array("Staff","ticketsConstruct");
    $codes_params = array("staffHome"=>"staff_home_page","message"=>"message_box");

    $r = Router::getInstance();


    $r->get('/:staffHome',$ar1,$codes_params);//домашняя страница персонажа
    $r->get('/:message',$ar2,$codes_params);//домашняя страница персонажа
  //  $r->post('/:autor',$ar1,$codes_params); //тестовая функция доступа к аккаунту персонала