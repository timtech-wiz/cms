<?php

require_once("config/init.php");

$post = new Posts();

$cat_id = isset($_GET['delete_cat']) ? $_GET['delete_cat'] : null;

if($post->deleteCat($cat_id)){
    header("category.php?Category Deleted");
}


$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($pos['submit'])){
    $data = array();
    $data['cat_title'] = $pos['cat_title'];
    
    if($post->addCat($data)){
        header("Location: category.php?category Added");
    }else{
        echo "something went wrong";
    }
    
}


if($_SESSION["logged_in"]){
  $template = new Template("template/allCat.php");
  $template->categories = $post->getCat();
  echo $template;  
}else{
    header("Location: ../index.php");
}






 