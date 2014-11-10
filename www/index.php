<?php
$page = 'start';
$required_page = $_GET['page'];
if (isset($required_page)) {
    if(!is_file('controllers/'.$required_page.'php')){
        ob_start();
        require_once('controllers/' . $required_page . '.php');
        $content = ob_get_contents();
        ob_end_clean();
    }
    else{
        $required_page = $page;
    }
    $page = $required_page;
}
require_once('views/layout.php');