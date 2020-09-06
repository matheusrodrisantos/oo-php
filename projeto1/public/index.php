<?php 
require __DIR__.'/../vendor/autoload.php';
use  Omini\Controller\PageController;


$url=substr($_SERVER['REQUEST_URI'],1);
$url=explode('/',$url);

$controller = isset($url[0])&&$url[0]?$url:'page';
$action     = isset($url[1])&&$url[1]?$url:'index';

$controller="Omini\Controller\\".ucfirst($controller).'Controller';

echo "Controller default: $controller";
echo "<br>";
echo "Metodo default: $action<hr>";

$response = call_user_func_array([$controller,$action],[]);
print($response);