<?php

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use Nikapotomus\blog\View;


$underConstructon = false;
$renderVariables = [];


//read in posts dir and filter . + .. items
$post_dir = scandir(__DIR__ . "/posts");

//lets not name anything under 2 characters long
foreach($post_dir as $key => $post){
  if (strlen($post) < 2) {
    unset($post_dir[$key]);
  }
}

//gets the contents of the posts
foreach($post_dir as $post){
  $postContents[] = explode( "--", file_get_contents(__DIR__ . "/posts/" . $post));
}

var_dump($postContents);
var_dump($post_dir);


$view = new View(__DIR__ . "/views");

$view->render("main", $renderVariables);


// if(!$underConstructon){
//   $view->render("main", $renderVariables);
// }else{
//   //Icon References: http://fontawesome.io/icons/
//   // $renderVariables['titleIcon'] = "object-group";
//   $renderVariables['titleIcon'] = "rocket";
//
//   $renderVariables['titleText'] = "Under Construction";
//   $renderVariables['subTitleText'] = "We're updating the website! Please check back shortly!";
//
//   $view->render("bannerPage", $renderVariables);
// }

exit(0);
?>
