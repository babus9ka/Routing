<?php
require "system/Routing.php";
$url = key($_GET);

$r = new Router();
$r->addRoute("/", "main.php");
$r->addRoute("/contacts", "contacts.php");

$r->Route("/".$url);

?>