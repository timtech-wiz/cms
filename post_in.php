<?php

include_once("config/init.php");

$post = new Posts();
 
$template = new Template("template/post.php");

$post_id = isset($_GET['post_id']) ? $_GET['post_id'] : null;

 
$template->posts = $post->getPostId($post_id);

 
$template->categories = $post->getCat();

echo $template;