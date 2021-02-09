<?php

$url = $_GET["url"];

$proxy = file_get_contents($url);

echo $proxy;

?>
