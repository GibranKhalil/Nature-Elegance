<?php
include_once("content/header.php");
include_once("db/catalogodb.php");
include_once("db/categoriasdb.php");
?>
<main id="catalogo-container">
    <aside id="sidebar-catalogo">
        <div class="text-container">
            <div class="text-title">
                <p>Gênero</p>
            </div>
            <div class="field-content">
                <div>
                    <input type="checkbox" value="Masculino"> Masculino
                </div>
                <div>
                    <input type="checkbox" value="Masculino"> Feminino
                </div>
            </div>
        </div>
        <div class="text-container">
            <div class="text-title">
                <p>Tipo de produto</p>
            </div>
            <div class="field-content">
                <?php foreach ($categorias as $text) : ?>
                    <div>
                        <input type="checkbox" value="<?= $text['nome'] ?>"> <?= $text['nome'] ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="text-container">
            <div class="text-title">
                <p>Preço</p>
            </div>
            <div class="field-content">
                <input type=range value="0" min="0" max="150" name="price">
                <div id="preco-rate">
                    <div id="min-price">
                        <p>Mínimo</p>
                        <input type="number" placeholder="0" name="minimo">
                    </div>
                    <div id="max-price">
                        <p>Máximo</p>
                        <input type="number" placeholder="150" name="maximo">
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <div id="cards-container">
        <?php foreach ($catalogo as $produto) : ?>
            <div class="cards">
                <div class="desconto">
                <a href="<?= $BASE_URL ?>produto.php?id=<?= $produto['id'] ?>"><img src="<?= $produto['img'] ?>"></a>
                    <p>-<?= $produto['desconto'] ?> OFF</p>
                </div>
                <div class="desc">
                <h1><?= $produto['nome'] ?></h1>
                <p><del>R$<?= $produto['preco'] ?></del></p>
                <p id="price">R$<?= $produto['preco'] ?></p>
                </div>
                
            </div>
        <?php endforeach; ?>
    </div>
</main>
<?php
include_once("content/footer.php");
?>