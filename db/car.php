<?php
session_start();
include("conexaodb.php");
$data = $_POST;

    if (!empty($data)) {
        if ($data["type"] == "add") {
            $id = $data["id"];

            $query = "SELECT id, img, nome, preco FROM carrinho WHERE id = :id ";
            $stmt = $con->prepare($query);
            $stmt->bindParam(":id", $id);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            var_dump($result);

            if($result){
                if (!isset($_SESSION["carrinho"])) {
                    $_SESSION["carrinho"] = array();
                }
                $_SESSION["carrinho"][] = $result;
                $_SESSION["msg"] = "Produto adicionado ao carrinho com sucesso"; 
                header("Location: " . $BASE_URL . "../carrinho.php");
            }    
            else {
                $_SESSION["msg"] = "Falha ao encontrar produto. Tente novamente";
                header("Location: " . $BASE_URL . "../catalogo.php");
            }
        }
        else if($data["type"] == "delete"){
            $id = $data["id"];
            session_destroy();
            header("Location: " . $BASE_URL . "../catalogo.php");
        }
    } else {
        $id;

        if (!empty($_GET)) {
            $id = $_GET["id"];
        }
    }
