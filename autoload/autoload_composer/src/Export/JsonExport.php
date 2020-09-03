<?php 
namespace Export; 
use Export\Contract\FileExport; 

class JsonExport //implements FileExport
{

    public function doExport()
    {

        return "Json ";
    }   
}

$je=new JsonExport();
