<?php 
require 'class/JsonExport.php';
require 'class/XmlExport.php';
/*
if($_GET['export']=='xml')
    return(new XmlExport())->doExport();
if($_GET['export']=='json')
    return(new JsonExport())->doExport();