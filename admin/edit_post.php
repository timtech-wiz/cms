<?php

require_once("config/init.php");

$post = new Posts();
$post_id = isset($_GET['edit_post']) ? $_GET['edit_post'] : null;

$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if(isset($pos['submit'])){
    $data = array();
    
    $data['title'] = $pos['title'];
    $data['category'] = $pos['category'];
    $data['author'] = $pos['author'];
    $data['content'] = $pos['content'];
    
    if(!$post->postEdit($data, $post_id)){
        header("Location: posts.php?Post Added");
    }else{
        echo "Something went wrong";
    }
}


if($_SESSION["logged_in"]){
  $template = new Template("template/editPost.php");
  
$post_id = isset($_GET['edit_post']) ? $_GET['edit_post'] : null;

$template->edit_p = $post->editPosts($post_id);
  $template->categories = $post->getCat();
  echo $template;  
}else{
    header("Location: ../index.php");
}




 

 




 