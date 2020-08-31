<?php 
require_once 'FileExport.php';

class JsonExport implements FileExport
{

    public function doExport()
    {

        return "Json ";
    }   
}

$je=new JsonExport();
