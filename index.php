<?php

echo("aaa");
die();

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use Nikapotomus\blog\View;

$underConstructon = false;
$renderVariables = [];


//read in posts dir and filter . + .. items
$post_dir = scandir(__DIR__ . "/posts");

//lets not name anything under 3 characters long
foreach($post_dir as $key => $post){
  if (strlen($post) < 3) {
    unset($post_dir[$1key]);
  }
}

//gets the contents of the posts
foreach($post_dir as $post){
  $postContents[] = explode( "--", file_get_contents(__DIR__ . "/posts/" . $post));
}

$renderVariables["posts_dir"] = $post_dir;
$renderVariables["post_contents"] = $postContents;

var_dump($renderVariables);


$view = new View(__DIR__ . "/views");

$view->render("main", $renderVariables);



exit(0);
?>
