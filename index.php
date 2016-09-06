<?php

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use Nikapotomus\blog\View;


$underConstructon = false;
$renderVariables = [];

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
