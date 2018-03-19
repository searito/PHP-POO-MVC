<?php
    define('DS', DIRECTORY_SEPARATOR);
    define('ROOT', realpath(dirname(__FILE__)). DS);
    define('URL', "http://localhost/POOMVC/");

    require_once("Config/Autoload.php");
    Config\Autoload::run();
    require_once"Views/template.php";

    #new Config\Request();
    #$test = new Config\Request();
    Config\Enrutador::run(new Config\Request());
?>