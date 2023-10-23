<?php
include_once("content/header.php");
?>

<main>
    <div id="index-container">
        <div id="banner-container">
            <div style="width: 60%; height: auto;padding: 150px;border-radius: 20px;background-image: url('<?= $BASE_URL ?>/img/Banner.png');background-size: cover;background-position: center;">
            </div>
        </div>
        <div id="categorias-container">
            <div class="indexsection-title">
                <h1>Você pode se interessar</h1>
            </div>
            <div id="categorias">
                <?php foreach ($categorias as $cat) : ?>
                    <div id="categorias--circle-container">
                        <div class="categorias-circle">
                            <img src="<?= $BASE_URL ?>/img/<?= $cat['img'] ?>">
                        </div>
                        <div class="categorias-cirlce-title">
                            <p><?= $cat['nome']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div id="geral-cards">
            <div class="indexsection-title">
                <h1>Ofertas da semana <small><a href="<?= $BASE_URL?>catalogo.php">Ver todas<i class="material-icons">arrow_forward</i></a></small></h1>
            </div>
            <div id="cards-container">
            <?php foreach ($destaques as $dest) : ?>
                <div class="cards">
                    <a href="<?= $BASE_URL ?>produto.php?id=<?= $dest['id'] ?>"><img src="<?= $BASE_URL ?>/img/<?= $dest['img'] ?>"></a>
                    <div class="desconto">
                        <p>-<?= $dest['desconto'] ?> OFF</p>
                    </div>
                    <h1><?= $dest['nome'] ?></h1>
                    <p><del><?= $dest['preco'] ?></del></p>
                    <p id="price"><?= $dest['precoDesconto'] ?></p>
                </div>
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>

<?php

include_once("content/footer.php");

?>