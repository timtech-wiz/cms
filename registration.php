<?php

include_once("config/init.php");
include_once("lib/Messages.php");

$post = new Posts();

$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($pos['submit'])){
    $data = array();
    
    $data['username'] =  $pos["username"];
    $data['email'] =  $pos["email"];
    $data['password'] =  $pos["password"];
 
    
     if(!$post->register($data)){
         Messages::setMsg('Registration Succesfully', 'success');
     }else{
         Messages::setMsg('Please Fill in a valid Details', 'error');
     }
    
}

$template = new Template("template/register.php");

$template->posts = $post->getPost();

$template->categories = $post->getCat();

echo $template;