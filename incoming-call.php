<?php
require_once('./vendor/autoload.php');

$script = new \FreeClimb\Api\Model\PerclScript();
$say = new \FreeClimb\Api\Model\Say();
$say->setText("Hello, World!");
$script->setCommands(array($say));
header("Content-Type: application/json");
echo $script->toJSON();

?>
