<?php
include("conexaodb.php");


$data = $_POST;

    if (!empty($data)) {
        if ($data["type"] == "add") {
            $img = $data["img"];
            $nome = $data["nome"];
            $preco = $data["preco"];

            $query = "INSERT INTO carrinho(img,nome,preco) VALUES(:img, :nome, :preco)";

            $stmt = $con->prepare($query);

            $stmt->bindParam(":img", $img);
            $stmt->bindParam(":nome", $nome);
            $stmt->bindParam(":preco", $preco);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Produto adicionado ao carrinho com sucesso";
                header("Location: " . $BASE_URL . "../carrinho.php");
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro:" . $error;
            }
        }
        else if($data["type"] == "delete"){
            $id = $data["id"];

            $query = "DELETE FROM carrinho WHERE id = :id";

            $stmt = $con->prepare($query);

            $stmt->bindParam(":id", $id);

            try {
                $stmt->execute();
                $_SESSION["msg"] = "Produto removido do carrinho com sucesso";
                header("Location: " . $BASE_URL . "../carrinho.php");
            } catch (PDOException $e) {
                $error = $e->getMessage();
                echo "Erro:" . $error;
            }
        }
    } else {
        $id;

        if (!empty($_GET)) {
            $id = $_GET["id"];
        }

        if (empty($id)) {
            $carrinho = [];

            $query = "SELECT * FROM carrinho";

            $stmt = $con->prepare($query);

            $stmt->execute();

            $carrinho = $stmt->fetchAll();
        }
    }
