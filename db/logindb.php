<?php

include_once("conexaodb.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    $stmt = $con->prepare("SELECT usuario,senha FROM usuario WHERE usuario=:usuario AND senha=:senha ");

    $stmt->bindParam(":usuario", $usuario);
    $stmt->bindParam(":senha", $senha);

    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "Autenticado com Sucesso";
    }
    else{
        echo "Credenciais inválidas";
    }
}

