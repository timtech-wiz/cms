<?php

include_once("config/init.php");

$post = new Posts();
$template = new Template("template/frontpage.php");
$pos = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

if(isset($pos['submit'])){
     $data = array();
    $data["search"] = $pos["search"];
     
     $template->posts = $post->searchPost($data);
         
     
        
} 








 

$template->categories = $post->getCat();

echo $template;