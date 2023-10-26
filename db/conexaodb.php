<?php
include_once("../data/url.php");

$host = "localhost";
$user = "root";
$psw = "";
$db = "usuarios";

$con = new PDO("mysql:host=$host;dbname=$db", $user, $psw);
