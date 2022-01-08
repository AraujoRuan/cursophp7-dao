<?php

spl_autoload_register(function($class_name){

$filenome = "class".DIRECTORY_SEPARATOR. $class_name.".php";

if(file_exists(($filenome))){
    require_once($filenome);
}

});

?>