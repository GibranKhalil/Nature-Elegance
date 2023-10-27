<?php
include_once("data/posts.php");
include_once("data/url.php");

session_start();

if(isset($_SESSION['usuario'])){
    $userName = $_SESSION['usuario'];
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature & Elegance</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body>
    <header>
        <nav id="navbar">
            <a id="logo" href="<?=$BASE_URL?>index.php">
                <img src="<?=$BASE_URL?>img/logo.png">
            </a>
            <ul id="navlist">
                <?php foreach ($header as $title => $link) : ?>
                    <a class="navlist-item" href="<?= $BASE_URL?><?= $link?>"><?= $title ?></a>
                <?php endforeach; ?>

            </ul>
            <div id="button-nav">
                <?php if(isset($userName)) :?>
                    <p class="userName"><i class="material-icons">person</i><span><?=$userName;?></span></p>
                    <form action="<?=$BASE_URL?>db/logoutdb.php">
                    <p class="userName"><button><i class="material-icons">logout</i>Sair</button></p>
                    </form>

                <?php else:?>
                    <a href="<?= $BASE_URL ?>login.php"><button><i class="material-icons">account_circle</i><p>Entrar</p></button></a> 
                    <a href="<?= $BASE_URL ?>register.php"><button><i class="material-icons">login</i><p>Cadastrar</p></button></a>            
                <?php endif;?>
            </div>
        </nav>
    </header>