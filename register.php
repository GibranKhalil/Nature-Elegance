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
                <img src="img/OIG.jfif">
                <h1>Cadastre-se</h1>
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
                        <i class="material-icons">email</i>
                        <label for="email">E-mail:</label>
                    </div>
                    <input type="email" name="email" placeholder="Digite seu e-mail">
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">lock</i>
                        <label for="senha">Senha:</label>
                    </div>
                    <input type="password" name="senha" placeholder="Digite sua senha">
                </div>
                <div class="form-elements">
                    <div class="label-icon">
                        <i class="material-icons">lock</i>
                        <label for="confimre">Confirme sua senha:</label>
                    </div>
                    <input type="password" name="confirme" placeholder="Confirme sua senha">
                </div>
                <div class="form-elements">
                    <button>Registrar</button>
                </div>
            </form>
        </div>
    </div>
</div>