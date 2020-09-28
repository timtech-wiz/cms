<?php

include_once("config/init.php");

$post = new Posts();

$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($pos['submit'])){
    $data = array();
    
    $data['username'] =  $pos["username"];
    $data['email'] =  $pos["email"];
    $data['password'] =  $pos["password"];
 
    
     if(!$post->register($data)){
         echo "successfully registered user";
     }else{
         echo "something went wrong";
     }
    
}

$template = new Template("template/register.php");

$template->posts = $post->getPost();

$template->categories = $post->getCat();

echo $template;