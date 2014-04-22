<?php

$data = array();
$data['server'] = $_SERVER;
$data['get'] = $_GET;
$data['post'] = $_POST;
$data['cookie'] = $_COOKIE;
$data['env'] = $_ENV;
$data['files'] = $_FILES;
$data['time'] = date('c');

$hash = log_content_file($data);

echo "Thanks for your request!<br/>";
echo "Please send your hash $hash to the teacher!<br/>";

function log_content_file($content) {
  $content = var_export($content, TRUE);
  $name = md5($content);
  $log_directory = "./files";
  $file_path = $log_directory . "/$name.dump";
  if (!file_exists($file_path)) {
    file_put_contents($file_path, $content);
  }
  return $name;
}