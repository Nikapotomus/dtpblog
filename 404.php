<?php

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use PeacockDreamsGames\PeachyWebsite\View;

$view = new View(__DIR__ . "/views");
$renderVariables = [];

//Icon References: http://fontawesome.io/icons/
$renderVariables['titleIcon'] = "bomb";

$renderVariables['titleText'] = "Error: 404";
$renderVariables['subTitleText'] = "Could not find the URL you were looking for.";

$view->render("bannerPage", $renderVariables);


exit(0);
?>
