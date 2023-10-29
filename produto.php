<?php
include_once("content/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($catalogo as $cat) {
        if ($cat['id'] == $postId) {
            $currentPost = $cat;
        }
    }
}
?>
<main>
    <div id="produtos-container">
        <div id="produtos-img">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>">
            <div id="produtos-small-container">
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="produtos-small">
                        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>">
                    </div>
                <?php endfor; ?>
                <button>+</button>
            </div>
        </div>
        <div id="desc-container">
            <div id="marca-container">
                <img id="logo-produto" src="<?= $BASE_URL ?>/img/logo.png">
                <p>Nature & Elegance</p>
            </div>
            <h2 id="produto-title"><?= $currentPost['nome'] ?></h2>
            <h1 id="produto-price">R$<?= $currentPost['precoDesconto'] ?></h1>
            <div id="color-container">
                <p id="color-title">
                    Color
                </p>
                <ul id="color-list">
                    <?php foreach ($cores as $cor) : ?>
                        <li class="color-text">
                            <button style="background-color: <?= $cor ?>;"></button>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="size-container">
                <p id="size-title">
                    Size
                </p>
                <ul id="size-list">
                    <?php foreach ($currentPost['tamanho'] as $size) : ?>
                        <li class="size-text"><button><?= $size ?></button></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div id="button-container">
                <form action="<?= $BASE_URL ?>db/car.php" method="POST">
                    <input type="hidden" name="type" value="add">
                    <input type="hidden" name="id" value="<?= $currentPost["id"]?>">
                    <input type="hidden" name="img" value="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>">
                    <input type="hidden" name="nome" value="<?= $currentPost['nome'] ?>">
                    <input type="hidden" name="preco" value="<?= $currentPost['precoDesconto'] ?>">
                    <button id="button-pay"><i class="material-icons">shopping_cart</i>Adicionar ao Carrinho</button>
                </form>
                <button id="button-heart"><i class="material-icons">favorite_border</i></button>
            </div>
        </div>
    </div>
</main>

<?php
include_once("content/footer.php");
?>