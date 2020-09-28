<?php

require_once("config/init.php");

if($_SESSION["logged_in"]){
  $template = new Template("template/adminpage.php");

  echo $template;  
}else{
    header("Location: ../index.php");
}

