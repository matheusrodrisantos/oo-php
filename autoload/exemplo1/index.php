<?php 

function autoload($class)
{
   require "class/$class.php";    
}

spl_autoload_register(autoload);

if($_GET['export']=='xml')
    print(new XmlExport())->doExport();
if($_GET['export']=='json')
    print(new JsonExport())->doExport();