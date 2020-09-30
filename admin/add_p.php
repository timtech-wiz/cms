<?php

require_once("config/init.php");
include_once("../lib/Messages.php");

$post = new Posts();

$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($pos['submit'])){
    $data = array();
    
    $data['post_title'] = $pos['title'];
    $data['post_category'] = $pos['category'];
    $data['post_author'] = $pos['author'];
    //$data['post_date'] = $pos['post_date'];
    $data['post_content'] = $pos['content'];
    
    if(!$post->addPost($data)){
        header("Location: posts.php");
        Messages::setMsg('Post Added', 'success');
        
    }else{
       Messages::setMsg('Please fill in a valid details', 'error');
        
    }
     
}



if($_SESSION["logged_in"]){
  $template = new Template("template/add_post.php");

  $template->categories = $post->getCat();
  echo $template;  
}else{
    header("Location: ../index.php");
}





 