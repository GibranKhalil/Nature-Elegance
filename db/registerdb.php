<?php

//Criar classe
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

        try {
            $stmt->execute();
            header("Location: " . $BASE_URL . "../login.php");
        } catch (PDOException $e) {
            $error = $e->getMessage();
            echo "Erro: $error";
        }        $stmt->execute();
        header("Location: " . $BASE_URL . "../login.php");
    }
}