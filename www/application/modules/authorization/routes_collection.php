<?php

    $ar1 = array('Authorization','baseAuthorization');
    $ar2 = array('Authorization','exitFromAccount');
    $pattern_params_collection = array("author"=>"login","just"=>"","newWave"=>"");

    $router = Router::getInstance();
    $router->post('/login',$ar1,$pattern_params_collection);
    $router->post('/:just',$ar1,$pattern_params_collection);
    $router->post('/:newWave',$ar2,$pattern_params_collection);