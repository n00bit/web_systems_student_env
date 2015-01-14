<?php
// ------ index.php-------------------------
#Подгрузка файла с модулями
include_once 'module.load.php';

$loader = Loader::getInstance();

if($loader){
    print'<font color="green" face="Arial" size="30px">Modules LOAD!</font><br>';
}
else {
    print '<font color="#ff00ff" face="Arial" size="30px">Modules NO LOAD!</font><br>';
}
print '<br><font color="red" face="Arial"> REQUEST METHOD:<b> '.$_SERVER["REQUEST_METHOD"].'</b></font>';
print '<br><font color="red" face="Arial"> REQUEST URI:<b> '.$_SERVER["REQUEST_URI"].'</b></font><br><br>';

print 'Успешно загруженные модули:<br>';
$loader->load_all_modules();
var_dump(date("Y-m-d"));

$r = Router::getInstance();
$r->process($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);








