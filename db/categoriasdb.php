<?php
include_once("conexaodb.php");
$categorias = [];

$query = "SELECT * FROM categorias";
$stmt = $con->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll();

$destaques = [

    [
        'id' =>15,
        'img' => "jeans.jfif",
        'nome' => "Calça Jeans Orgânica Slim Fit",
        'tamanho' => ['PP','P', 'M', 'G', 'GG','XG'],
        'desc' => "Feita com algodão orgânico cultivado de forma responsável, esta calça jeans oferece estilo e conforto, sem comprometer o meio ambiente.",
        'preco' => "79,99",
        'desconto' => "75%",
        'precoDesconto' => "59,99",
    ],
    [
        'id' => 16,
        'img' => "corta-vento (1).jfif",
        'tamanho' => ['PP','P', 'M', 'G', 'GG','XG'],
        'nome' => "Casaco Corta-vento de Poliéster Reciclado branco",
        'desc' => "Este casaco é perfeito para protegê-lo contra o vento e a chuva. É produzido com poliéster reciclado, ajudando a reduzir a pegada de carbono.",
        'preco' => "69,99",
        'desconto' => "70%",
        'precoDesconto' => "48,99",
    ],
    [
        'id' => 20,
        'img' => "polo (1).jfif",
        'tamanho' => ['PP','P', 'M', 'G', 'GG','XG'],
        'nome' => "Blusa Polo de Algodão Orgânico branca",
        'desc' => "Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.",
        'preco' => "44,99",
        'desconto' => "72%",
        'precoDesconto' => "29,99",
    ],
    [
        'id' => 28,
        'img' => "tenis (2).jfif",
        'tamanho' => [37,38,39,40,41,42,43,44],
        'nome' => "Tênis EcoFit Pro Esportivo Preto",
        'desc' => "O Tênis EcoFit Pro é um exemplo perfeito de moda ecológica que combina estilo, conforto e responsabilidade ambiental. Cada elemento deste tênis foi cuidadosamente projetado para minimizar o impacto ambiental e promover a sustentabilidade.",
        'preco' => "80,00",
        'desconto' => "75%",
        'precoDesconto' => "59,99",
    ],
];
