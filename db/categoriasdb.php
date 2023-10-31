<?php
include_once("conexaodb.php");
$categorias = [];

$query = "SELECT * FROM categorias";
$stmt = $con->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll();