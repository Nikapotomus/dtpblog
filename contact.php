<?php

include(__DIR__ . '/settings.php');
include(__DIR__ . '/vendor/autoload.php');


use Nikapotomus\blog\View;


$underConstructon = false;
$renderVariables = [];

$view = new View(__DIR__ . "/views");

$view->render("contact-template", $renderVariables);

exit(0);
?>
