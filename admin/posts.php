<?php

require_once("config/init.php");

$post = new Posts();

$post_id = isset($_GET['delete_post']) ? $_GET['delete_post'] : null;

if($post->deletePost($post_id)){
    header("posts.php?Post Deleted");
}


if($_SESSION["logged_in"]){
  $template = new Template("template/allPost.php");
  $template->posts = $post->getPostCat();
  echo $template;  
}else{
    header("Location: ../index.php");
}






 