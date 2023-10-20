<?php
include_once("content/header.php");
include_once("styles.php");
?>
<div id="content-login">
    <div id="login-container">
        <div id="img-container">
            <img src="img/folha.jfif">
        </div>
        <div id="form-container">
            <div id="form-title">
                <img src="img/logo.png">
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