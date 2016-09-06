<?php

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use PeacockDreamsGames\PeachyWebsite\View;

$view = new View(__DIR__ . "/views");
$renderVariables = [];

//Icon References: http://fontawesome.io/icons/
$renderVariables['titleIcon'] = "ambulance";

$renderVariables['titleText'] = "Ooops!";
$renderVariables['subTitleText'] = "We're experiencing some technical difficulties. We'll be right back!";

$view->render("bannerPage", $renderVariables);


exit(0);
?>
