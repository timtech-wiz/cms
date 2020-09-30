<?php

require_once("config/init.php");
include_once("../lib/Messages.php");

$post = new Posts();

$cat_id = isset($_GET['delete_cat']) ? $_GET['delete_cat'] : null;




$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($pos['submit'])){
    $data = array();
    $data['cat_title'] = $pos['cat_title'];
    
    if(!$post->addCat($data)){
         Messages::setMsg('Category Added', 'success');
    } 
    
}

if(!$post->deleteCat($cat_id)){
     // Messages::setMsg('Category Deleted', 'error');
   
} 

if($_SESSION["logged_in"]){
  $template = new Template("template/allCat.php");
  $template->categories = $post->getCat();
  echo $template;  
}else{
    header("Location: ../index.php");
}






 