<?php

    $ar1 = array('Authorization','baseAuthorization');
    $pattern_params_collection = array("author"=>"author","just"=>"");

    $router = Router::getInstance();
    $router->post('/:author',$ar1,$pattern_params_collection);
    $router->post('/:just',$ar1,$pattern_params_collection);