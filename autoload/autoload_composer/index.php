<?php 

use Export\XmlExport;
use Export\JsonExport;


require_once(__DIR__."/vendor/autoload.php");

if($_GET['export']=='xml')
    print(new XmlExport())->doExport();
if($_GET['export']=='json')
    print(new JsonExport())->doExport();
