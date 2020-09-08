<?php 
require __DIR__.'/../bootstrap.php';
//print __DIR__.'/../bootstrap.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$url=substr($_SERVER['REQUEST_URI'],1);
$url=explode('/',$url);

//controller a serem chamado
if(isset($url[0]) && $url[0])
    $controller=$url[0];
else   
    $controller='page';

//metodos a serem executados
if(isset($url[1]) && $url[1])
    $action=$url[1];
else
    $action='index';

//paramentros
if(isset($url[2]) && $url[2])
    $params=$url[2];
else
    $params=null;

if(!class_exists($controller="Omini\Controller\\".ucfirst($controller).'Controller'))
{
    die("404 -Pagina não encontrada!");
}

if(!method_exists($controller,$action))
{
    $action='index';
    $params=$url[1];
}

$response = call_user_func_array([new $controller,$action],[$params]);
print($response);