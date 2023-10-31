<?php
include_once("content/header.php");

if(isset($_SESSION["carrinho"])){
    $carrinho = $_SESSION["carrinho"];
}
else{
    $carrinho = array();
}
?>
<div id="carrinho-container">
    <div id="carrinho-title">
        <h1>Meu Carrinho</h1>
    </div>
    <div id="carrinho-produtos">
        <?php if (count($carrinho) > 0) : ?>
            <?php foreach ($carrinho as $produto) : ?>
                <div class="carrinho-card">
                    <div class="carrinho-img">
                        <img src="<?= $produto["img"] ?>">
                    </div>
                    <div class="carrinho-content">
                        <div class="carrinho-desc">
                            <p><?= $produto["nome"] ?></p>
                            <p>Vendido e entregue por Nature & Elegance</p>
                            <p>Cor:</p>
                            <p>Tamanho:</p>
                            <p>R$<?= $produto["preco"] ?></p>
                        </div>
                        <div class="carrinho-actions">
                            <form action="<?= $BASE_URL?>db/car.php" method="POST">
                            <input type="hidden" name="type" value="delete">
                            <input type="hidden" name="id" value="<?= $produto["id"]?>">
                            <button><i class="material-icons">cancel</i></button>
                        </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else : ?>
            <i class="material-icons">shopping_cart</i>
            <p>Seu carrinho esta vazio</p>
            <p>Adicione produtos para vê-los aqui</p>
        <?php endif; ?>
    </div>
</div>