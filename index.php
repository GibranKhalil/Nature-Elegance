<?php
include_once("content/header.php");
include_once("styles.php");
?>

<main>
    <div id="index-container">
        <div id="banner-container">
            <div id="banner-img">
            </div>
        </div>
        <div id="categorias-title">
            <h1>Veja os mais procurados</h1>
        </div>
        <div id="categorias">
            <?php foreach ($categorias as $cat) : ?>
                <div id="categorias--circle-container">
                    <div class="categorias-circle">
                        <img src="img/tenis.png">
                    </div>
                    <div class="categorias-cirlce-title">
                        <p><?= $cat['nome']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div id="cards-container">
            <?php for ($i = 0; $i <= 9; $i++) : ?>
                <div class="cards">
                    <img src="img/tenis.png">
                    <div class="desconto">
                        <p>-75% OFF</p>
                    </div>
                    <h1>Tênis EcoFit Pro</h1>
                    <p><del>R$ 80,00</del></p>
                    <p id="price">R$ 59,99</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</main>

<?php

include_once("content/footer.php");

?>