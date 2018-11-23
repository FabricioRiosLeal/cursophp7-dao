<?php

require_once("config.php");

$root = new usuario();

$root->loadbyId(3);

echo $root;


?>