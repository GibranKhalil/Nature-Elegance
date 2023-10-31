<?php
include_once("conexaodb.php");

$catalogo = [];
$categorias = [];

$query = "SELECT * FROM carrinho";
$stmt = $con->prepare($query);
$stmt->execute();
$catalogo = $stmt->fetchAll();