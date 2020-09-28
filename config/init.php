
<?php

require_once("config.php");
require_once("helpers.php");

// autoload classes
session_start();
function __autoload($class_name){
    require_once 'lib/'. $class_name .'.php';
}