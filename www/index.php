<form method="POST">
    <input type = "text" value = "Login" name="login">
    <input type = "test" value = "password" name = "password">
    <input type = "submit">
</form>
<?php
// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'module.load.php';
$loader = new Loader();
$loader->load_all_modules();

print "EVERYTHING IS LOST, CHIEF, EVERYTHING!!!\n";

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);


function localTest(){
    $connection = mysqli_connect('172.33.10.50','root', 'root','webdb') or die();

    if (!$connection) {
       print "NO!";
    }
    $res=$connection->query("SELECT id FROM staff");
    var_dump($res);
}



