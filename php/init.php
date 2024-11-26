<?php
// Autoload required files
require_once 'class/config.php';
require_once 'class/viewLog.php';

spl_autoload_register(function($class) {
    require_once $_SERVER['DOCUMENT_ROOT'].'/doorcontrol/php/class/'.$class.'.php';
});
?>