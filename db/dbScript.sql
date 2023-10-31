-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 31/10/2023 às 16:16
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `nature`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `tamanho` varchar(3) DEFAULT NULL,
  `descricao` text,
  `categoria` int(30) UNSIGNED NOT NULL,
  `desconto` varchar(2) DEFAULT NULL,
  `preco` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
--
-- Despejando dados para a tabela `carrinho`
--

INSERT INTO `carrinho` (`id`, `img`, `nome`, `tamanho`, `descricao`, `categoria`, `desconto`, `preco`) VALUES
(1, 'http://localhost/Nature-Elegance//img/vestido.png', 'Vestido Maxi de Seda de Tucum', 'M', 'Este vestido maxi é feito de tucum, uma fibra natural e sustentável. Além de ser luxuoso, é uma escolha ecologicamente correta para ocasiões especiais.', 1, '50', '99,99'),
(2, 'http://localhost/Nature-Elegance//img/moletom (3).jpg', 'Moletom com Materiais Reciclados', 'G', 'Este moletom com capuz é feito a partir de garrafas PET recicladas, proporcionando um toque macio e quente. Mantenha-se aconchegante e com consciência ecológica.', 2, '60', '59,99'),
(3, 'http://localhost/Nature-Elegance//img/blusa_linho.jpg', 'Blusa de Linho Sustentável', 'PP', 'Esta blusa de linho é perfeita para os dias quentes de verão. O linho é uma fibra natural e biodegradável, tornando-a uma opção ecologicamente correta para um estilo elegante e fresco.', 3, '55', '49,99'),
(4, 'http://localhost/Nature-Elegance//img/short (1).jpg', 'Short de Banho com Materiais Reciclados verde florido', 'M', 'Nossos shorts de banho são feitos a partir de materiais reciclados, ajudando a combater a poluição dos oceanos. São ideais para dias de diversão na água.', 4, '45', '34,99'),
(5, 'http://localhost/Nature-Elegance//img/short (2).jpg', 'Short de Banho com Materiais Reciclados colorido', 'G', 'Nossos shorts de banho são feitos a partir de materiais reciclados, ajudando a combater a poluição dos oceanos. São ideais para dias de diversão na água.', 4, '45', '34,99'),
(6, 'http://localhost/Nature-Elegance//img/short (3).jpg', 'Short de Banho com Materiais Reciclados florido', 'P', 'Nossos shorts de banho são feitos a partir de materiais reciclados, ajudando a combater a poluição dos oceanos. São ideais para dias de diversão na água.', 4, '45', '34,99'),
(7, 'http://localhost/Nature-Elegance//img/short (4).jpg', 'Short de Banho com Materiais Reciclados preto', 'XG', 'Nossos shorts de banho são feitos a partir de materiais reciclados, ajudando a combater a poluição dos oceanos. São ideais para dias de diversão na água.', 4, '45', '34,99'),
(8, 'http://localhost/Nature-Elegance//img/cropped (1).jfif', 'Cropped Yoga de Poliéster Reciclado Cinza', 'M', 'Desfrute do seu tempo de yoga com uma consciência limpa. Nosso vestuário para yoga é feito de poliéster reciclado, oferecendo flexibilidade e sustentabilidade.', 5, '55', '39,99'),
(9, 'http://localhost/Nature-Elegance//img/cropped (2).jfif', 'Cropped Yoga de Poliéster Reciclado Amarelo', 'XG', 'Desfrute do seu tempo de yoga com uma consciência limpa. Nosso vestuário para yoga é feito de poliéster reciclado, oferecendo flexibilidade e sustentabilidade.', 5, '55', '39,99'),
(10, 'http://localhost/Nature-Elegance//img/cropped (3).jfif', 'Cropped Yoga de Poliéster Reciclado Preto', 'GG', 'Desfrute do seu tempo de yoga com uma consciência limpa. Nosso vestuário para yoga é feito de poliéster reciclado, oferecendo flexibilidade e sustentabilidade.', 5, '55', '39,99'),
(11, 'http://localhost/Nature-Elegance//img/vestido (1).jfif', 'Vestido de Algodão Orgânico', 'PP', 'Este vestido é confeccionado com algodão orgânico de alta qualidade, proporcionando um toque suave e confortável. Uma escolha elegante e ecológica para diversas ocasiões.', 1, '50', '64,99'),
(12, 'http://localhost/Nature-Elegance//img/vestido (2).jfif', 'Vestido de Algodão Orgânico azul', 'M', 'Este vestido é confeccionado com algodão orgânico de alta qualidade, proporcionando um toque suave e confortável. Uma escolha elegante e ecológica para diversas ocasiões.', 1, '50', '64,99'),
(13, 'http://localhost/Nature-Elegance//img/vestido (3).jfif', 'Vestido de Algodão Orgânico azul', 'G', 'Este vestido é confeccionado com algodão orgânico de alta qualidade, proporcionando um toque suave e confortável. Uma escolha elegante e ecológica para diversas ocasiões.', 1, '50', '32,49'),
(14, 'http://localhost/Nature-Elegance//img/jaqueta.jfif', 'Jaqueta de Fibra Reciclada', 'P', 'Esta jaqueta é feita a partir de materiais reciclados, ajudando a reduzir o desperdício de plástico. Mantenha-se aquecido e ao mesmo tempo cuide do planeta com esta escolha sustentável.', 2, '70', '48,99'),
(15, 'http://localhost/Nature-Elegance//img/jeans.jfif', 'Calça Jeans Orgânica Slim Fit', 'G', 'Feita com algodão orgânico cultivado de forma responsável, esta calça jeans oferece estilo e conforto, sem comprometer o meio ambiente.', 6, '75', '59,99'),
(16, 'http://localhost/Nature-Elegance//img/corta-vento (1).jfif', 'Casaco Corta-vento de Poliéster Reciclado branco', 'G', 'Este casaco é perfeito para protegê-lo contra o vento e a chuva. É produzido com poliéster reciclado, ajudando a reduzir a pegada de carbono.', 7, '70', '48,99'),
(17, 'http://localhost/Nature-Elegance//img/corta-vento (2).jfif', 'Casaco Corta-vento de Poliéster Reciclado preto com branco', 'P', 'Este casaco é perfeito para protegê-lo contra o vento e a chuva. É produzido com poliéster reciclado, ajudando a reduzir a pegada de carbono.', 7, '70', '48,99'),
(18, 'http://localhost/Nature-Elegance//img/corta-vento (3).jfif', 'Casaco Corta-vento de Poliéster Reciclado preto', 'XG', 'Este casaco é perfeito para protegê-lo contra o vento e a chuva. É produzido com poliéster reciclado, ajudando a reduzir a pegada de carbono.', 7, '70', '48,99'),
(19, 'http://localhost/Nature-Elegance//img/corta-vento (4).jfif', 'Casaco Corta-vento de Poliéster Reciclado colorido', 'G', 'Este casaco é perfeito para protegê-lo contra o vento e a chuva. É produzido com poliéster reciclado, ajudando a reduzir a pegada de carbono.', 7, '70', '48,99'),
(20, 'http://localhost/Nature-Elegance//img/polo (1).jfif', 'Blusa Polo de Algodão Orgânico branca', 'M', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(21, 'http://localhost/Nature-Elegance//img/polo (2).jfif', 'Blusa Polo de Algodão Orgânico preta', 'PP', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(22, 'http://localhost/Nature-Elegance//img/polo (3).jfif', 'Blusa Polo de Algodão Orgânico marrom', 'P', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(23, 'http://localhost/Nature-Elegance//img/polo (4).jfif', 'Blusa Polo de Algodão Orgânico marrom', 'G', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(24, 'http://localhost/Nature-Elegance//img/polo (5).jfif', 'Blusa Polo de Algodão Orgânico bege', 'M', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(25, 'http://localhost/Nature-Elegance//img/polo (6).jfif', 'Blusa Polo de Algodão Orgânico branca', 'M', 'Esta blusa polo é produzida com algodão orgânico de alta qualidade, oferecendo estilo e conforto. Uma opção casual e sustentável para o seu guarda-roupa.', 3, '72', '29,99'),
(26, 'http://localhost/Nature-Elegance//img/tenis (0).png', 'Tênis EcoFit Pro Casual Branco', '43', 'O Tênis EcoFit Pro é um exemplo perfeito de moda ecológica que combina estilo, conforto e responsabilidade ambiental. Cada elemento deste tênis foi cuidadosamente projetado para minimizar o impacto ambiental e promover a sustentabilidade.', 8, '75', '59,99'),
(27, 'http://localhost/Nature-Elegance//img/tenis (1).jfif', 'Tênis EcoFit Pro Esportivo Verde', '39', 'O Tênis EcoFit Pro é um exemplo perfeito de moda ecológica que combina estilo, conforto e responsabilidade ambiental. Cada elemento deste tênis foi cuidadosamente projetado para minimizar o impacto ambiental e promover a sustentabilidade.', 8, '75', '59,99'),
(28, 'http://localhost/Nature-Elegance//img/tenis (2).jfif', 'Tênis EcoFit Pro Esportivo Preto', '42', 'O Tênis EcoFit Pro é um exemplo perfeito de moda ecológica que combina estilo, conforto e responsabilidade ambiental. Cada elemento deste tênis foi cuidadosamente projetado para minimizar o impacto ambiental e promover a sustentabilidade.', 8, '75', '59,99'),
(29, 'http://localhost/Nature-Elegance//img/tenis (3).jfif', 'Tênis EcoFit Pro Esportivo Verde Claro', '40', 'O Tênis EcoFit Pro é um exemplo perfeito de moda ecológica que combina estilo, conforto e responsabilidade ambiental. Cada elemento deste tênis foi cuidadosamente projetado para minimizar o impacto ambiental e promover a sustentabilidade.', 8, '75', '59,99');
-- --------------------------------------------------------

--
-- Estrutura para tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(10) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categorias`
--

INSERT INTO `categorias` (`id`, `img`, `nome`) VALUES
(1, 'http://localhost/Nature-Elegance//img/vestido.png', 'Vestidos'),
(2, 'http://localhost/Nature-Elegance//img/moletom (2).jpg', 'Moletons'),
(3, 'http://localhost/Nature-Elegance//img/polo (1).jfif', 'Polos'),
(4, 'http://localhost/Nature-Elegance//img/short (1).jpg', 'Shorts'),
(5, 'http://localhost/Nature-Elegance//img/cropped (3).jfif', 'Fit'),
(6, 'http://localhost/Nature-Elegance//img/jeans.jfif', 'Calças'),
(7, 'http://localhost/Nature-Elegance//img/blusa_linho.jpg', 'Camisas'),
(8, 'http://localhost/Nature-Elegance//img/tenis (0).png', 'Tênis');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `usuario` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `senha` varchar(15) DEFAULT NULL,
  `tipo` varchar(15) DEFAULT 'comum'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--


--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

ALTER TABLE carrinho
ADD CONSTRAINT fk_categoria
FOREIGN KEY (categoria) REFERENCES categorias(id);


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
