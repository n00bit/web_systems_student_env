<?php

    $ar1 = array('Authorization','baseAuthorization');
    $ar2 = array('Authorization','exitFromAccount');
    $pattern_params_collection = array("author"=>"toDIE1.php","just"=>"","newWave"=>"toDIE2.php");

    $router = Router::getInstance();
    $router->post('/:author',$ar1,$pattern_params_collection);
    $router->post('/:just',$ar1,$pattern_params_collection);
    $router->post('/:newWave',$ar2,$pattern_params_collection);