<?php
include_once("content/header.php");
?>
<div style="width: 100%;min-height: 100vh;display: flex;align-items: center;justify-content: center;background-image: url('img/test1.png');background-size: cover;background-position: center; background-repeat: no-repeat;">
    <div id="login-container">
        <div id="img-container">
            <img src="img/folha.jfif">
        </div>
        <div id="form-container">
            <div id="form-title">
                <img src="<?= $BASE_URL ?>img/logo.png">
                <h1>Bem-vindo de volta</h1>
                <p>Por favor preencha suas informações</p>
            </div>
            <form id="form-login">
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">account_circle</i>
                        <label for="nome">Usuário:</label>
                    </div>
                    <input type="text" name="nome" placeholder="Digite seu usuário">
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">lock</i>
                        <label for="senha">Senha:</label>
                    </div>
                    <input type="password" name="senha" placeholder="Digite seu senha">
                </div>
                <div class="form-elements">
                    <button>Entrar</button>
                </div>
                <div id="redirect">
                    <small>Não tem uma conta ainda? Cadastre-se clicando <span><a href="register.php">aqui</a></span></small>
                </div>
            </form>

        </div>
    </div>
</div>