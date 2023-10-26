<?php

include_once("conexaodb.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];
    $confirme = $_POST["confirme"];
    if($senha != $confirme){
        echo "As senhas não coincidem. Por favor, tente novamente.";
    }
    else{
        $stmt = $con->prepare("INSERT INTO usuario(usuario,email,senha) VALUES(:usuario,:email,:senha)");

        $stmt->bindParam(":usuario", $usuario);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);

        $stmt->execute();

    }
}