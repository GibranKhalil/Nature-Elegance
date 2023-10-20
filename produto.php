<?php
include_once("content/header.php");
include_once("styles.php");
?>
<main>
    <div id="produtos-container">
        <div id="produtos-img">
            <img src="img/tenis.png">
            <div id="produtos-small-container">
            <?php for($i = 0; $i < 3; $i++):?>
            <div class="produtos-small">
                <img src="img/tenis.png">
            </div>
            <?php endfor;?>
            <button>+</button>
            </div>
        </div>
        <div id="produtos-description-container">
            <h2>Tênis EcoFit Pro</h2>
            <h1>R$ 50,00</h1>
            <div class="produtos-color">
                <p>Cinza</p>
            </div>
            <div>
                <p>
                     size
                </p>
            </div>
            <div>
                <button><i class="material-icons">shopping_cart</i>Adicionar ao Carrinho</button>
            </div>
        </div>
    </div>
</main>

<?php
include_once("content/footer.php");
?>