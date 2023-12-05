<?php
require_once "Route.php";
require_once "DBConfig.php";

$route = new Route(name: "Glebogryzarka", grade: "IV", date: "10.10.2020", style: "Flash");

echo "\n".$route->getName();

$route->setName(name: "Ringostrada");

echo "\n".$route->getName();