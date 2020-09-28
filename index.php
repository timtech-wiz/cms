<?php

include_once("config/init.php");

$post = new Posts();

$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($pos['submit'])){
     $data = array();
    $data["email"] =  $pos["email"];
    $data["password"] = $pos["password"];

   
    if($post->login($data)){
        header("Location: admin");
    }else{
        echo "something went wrong";
    }
 

    
} 






$template = new Template("template/frontpage.php");

$category = isset($_GET['category']) ? $_GET['category'] : null;

if($category){
$template->posts = $post->getByCat($category);

 
}else{
$template->posts = $post->getPost();
 
}

$template->categories = $post->getCat();

echo $template;