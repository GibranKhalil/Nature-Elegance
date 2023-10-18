<?php
include_once("../data/navbar.php");
include_once("../syles.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature & Elegance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;700&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <nav id="navbar">
            <a id="logo" href="index.php">
                <img src="../img/OIG.jfif">
            </a>
            <ul id="navlist">
                <?php foreach ($header as $link) : ?>
                    <a class="navlist-item" href="#"><?= $link ?></a>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>