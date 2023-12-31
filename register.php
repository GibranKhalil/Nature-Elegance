<?php
include_once("content/header.php");
?>

<div style="width: 100%;min-height: 100vh;display: flex;align-items: center;justify-content: center;background-image: url('img/test1.png');background-size: cover;background-position: center; background-repeat: no-repeat;">
    <div id="login-container">
        <div id="img-container">
            <img src="<?=$BASE_URL?>img/folha.jfif">
        </div>
        <div id="form-container">
            <div id="form-title">
                <img src="img/logo.png">
                <h1>Cadastre-se</h1>
                <p>Por favor preencha suas informações</p>
            </div>
            <form action="<?=$BASE_URL?>db/registerdb.php" method="POST" id="form-login" required>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">account_circle</i>
                        <label for="nome">Usuário:</label>
                    </div>
                    <input type="text" name="usuario" placeholder="Digite seu usuário" required>
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">email</i>
                        <label for="email">E-mail:</label>
                    </div>
                    <input type="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">lock</i>
                        <label for="senha">Senha:</label>
                    </div>
                    <input type="password" name="senha" placeholder="Digite sua senha" required>
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">lock</i>
                        <label for="confimre">Confirme sua senha:</label>
                    </div>
                    <input type="password" name="confirme" placeholder="Confirme sua senha" required>
                </div>
                <div class="form-elements">
                    <button>Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>