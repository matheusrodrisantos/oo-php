<?php 

use Export\XmlExport;
use Export\JsonExport;

function autoload($class)
{
    $baseFolder='src/';
    $class= str_replace('\\','/',$class);    
    require_once ("$baseFolder$class.php");    
}

spl_autoload_register(autoload);

if($_GET['export']=='xml')
    print(new XmlExport())->doExport();
if($_GET['export']=='json')
    print(new JsonExport())->doExport();