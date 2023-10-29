<?php
//Criar classe
include_once("data/url.php");


$host = "localhost";
$user = "root";
$psw = "";
$db = "nature";

$con = new PDO("mysql:host=$host;dbname=$db", $user, $psw);
