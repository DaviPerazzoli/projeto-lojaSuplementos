-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 04/12/2023 às 14:22
-- Versão do servidor: 10.5.20-MariaDB
-- Versão do PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `id21408895_loja_suplementos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `avaliacao`
--

CREATE TABLE `avaliacao` (
  `ID` int(11) NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `classificacao` int(11) NOT NULL,
  `ID_produto` int(11) NOT NULL,
  `CPF_cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `CPF` varchar(20) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `UF` char(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` varchar(200) NOT NULL,
  `numero` int(11) NOT NULL,
  `complemento` varchar(200) NOT NULL,
  `senha` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`CPF`, `nome`, `email`, `UF`, `cidade`, `bairro`, `rua`, `numero`, `complemento`, `senha`) VALUES
('11111111111', 'lucas', 'genildo@gmail.com', 'SP', 'ribeirao preto', 'centro', 'rua tal', 100, 'ap 9', '12345'),
('55555555555555', 'Tiago', '1234@gmail.com', 'SC', 'fraiburgo', 'centro', 'rua tal', 100, 'sei la', '123123'),
('99999999999', 'davi', 'daviperazzoli28@gmail.com', 'SP', 'fraiburgo', 'sao jose', 'av 8', 101, 'ap 101', '1234');

-- --------------------------------------------------------

--
-- Estrutura para tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `ID` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preco_unitario` float NOT NULL,
  `ID_produto` int(11) NOT NULL,
  `ID_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido`
--

CREATE TABLE `pedido` (
  `ID` int(11) NOT NULL,
  `valor_total` float NOT NULL,
  `data` varchar(20) NOT NULL,
  `CPF_cliente` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedido`
--

INSERT INTO `pedido` (`ID`, `valor_total`, `data`, `CPF_cliente`) VALUES
(15159420, 439.44, '04-12-2023 14:01:52', '55555555555555'),
(50983029, 417.8, '13-11-2023 13:26:34', '99999999999'),
(64743236, 814.86, '15-11-2023 14:25:06', '99999999999'),
(81912723, 69.9, '13-11-2023 13:48:14', '11111111111'),
(88917881, 639, '13-11-2023 13:40:15', '11111111111');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `ID` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(300) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `preco` float NOT NULL,
  `imagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`ID`, `nome`, `descricao`, `categoria`, `preco`, `imagem`) VALUES
(1, 'Whey Protein Concentrado (1KG)', 'Produto feito exclusivamente com proteínas do soro do leite, possui altíssima concentração de aminoácidos essenciais.', 'Proteína', 99, 'https://www.gsuplementos.com.br/upload/growth-layout-personalizado/produto/185/item-concentrado-v5.png'),
(2, 'WHEY PROTEIN ISOLADO (1KG)', ' O grau de filtragem envolve alta tecnologia e se encaixa perfeitamente em diversos tipos de treino assim como também se encaixa em qualquer tipo de dieta.', 'Proteína', 144, 'https://www.gsuplementos.com.br/upload/growth-layout-personalizado/produto/185/item-isolado-3.png'),
(3, 'CREATINA MONOHIDRATADA 250G', 'A creatina monohidratada é um dos suplementos mais populares do mercado. Além disso, é o suplemento mais estudado pela ciência esportiva. ', 'Creatina', 79.92, 'https://www.gsuplementos.com.br/upload/produto/imagem/m_creatina-monohidratada-250g-growth-supplements.png'),
(4, 'CREATINA MONOHIDRATADA 100G', 'A creatina monohidratada é um dos suplementos mais populares do mercado. Além disso, é o suplemento mais estudado pela ciência esportiva. ', 'Creatina', 79.92, 'https://www.gsuplementos.com.br/upload/produto/imagem/m_creatina-monohidratada-100g-growth-supplements.png'),
(5, 'TOP WHEY BAR 41g', 'As barras de proteína podem ser utilizadas no dia a dia como uma estratégia de consumo deste nutriente de forma prática e rápida, além de saborosa!', 'Proteína', 69.9, 'https://lojamaxtitanium.vtexassets.com/arquivos/ids/156582-1200-1200?v=1781442560&width=1200&height=1200&aspect=true'),
(6, 'PRÉ-TREINO HORUS 300g - AMORA', 'Uma mistura de ingredientes que atuam em conjunto, proporcionando importante papel na melhoria de performance em exercícios agudos.', 'Pré-treino', 138.2, 'https://m.media-amazon.com/images/I/51eFDucRRvL.jpg'),
(7, 'PRO COMPLEX 60 CAPS - VITAMINAS E MINERAIS', 'Pro Complex oferece alto teor de vitaminas e minerais (mais de 100% da Ingestão Diária Recomendada) que auxiliam no metabolismo energético e no funcionamento do sistema imune.', 'Multivitamínico', 49.9, 'https://supleylab.vtexassets.com/arquivos/ids/157813-1200-1200?v=638242449675030000&width=1200&height=1200&aspect=true'),
(8, 'COQUETELEIRA 750 ML STEEL - PRETA', 'É muito eficiente para misturar as suas proteínas com facilidade, pode ser usado para preparar seus shakes na academia, quando for viajar, em qualquer lugar.', 'Coqueteleira', 79.9, 'https://lojamaxtitanium.vtexassets.com/arquivos/ids/156154-1200-1200?v=637820018999730000&width=1200&height=1200&aspect=true'),
(9, 'FITA STRAP FAIXA PRETA GROWTH (PAR)', 'Os acidentes também conseguem ser evitados com a escolha certa de peças e acessórios, protegendo seu corpo e garantindo que nenhum tecido atrapalhe os movimentos ou enrosque nos aparelhos.', 'Acessório', 35.1, 'https://www.gsuplementos.com.br/upload/produto/imagem/b_fita-strap-faixa-growth-par-growth-supplements.webp');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_produto` (`ID_produto`),
  ADD KEY `CPF_cliente` (`CPF_cliente`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_produto` (`ID_produto`),
  ADD KEY `ID_pedido` (`ID_pedido`);

--
-- Índices de tabela `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `CPF_cliente` (`CPF_cliente`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID`);

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `avaliacao`
--
ALTER TABLE `avaliacao`
  ADD CONSTRAINT `avaliacao_ibfk_1` FOREIGN KEY (`ID_produto`) REFERENCES `produto` (`ID`),
  ADD CONSTRAINT `avaliacao_ibfk_2` FOREIGN KEY (`CPF_cliente`) REFERENCES `cliente` (`CPF`);

--
-- Restrições para tabelas `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `item_pedido_ibfk_1` FOREIGN KEY (`ID_produto`) REFERENCES `produto` (`ID`),
  ADD CONSTRAINT `item_pedido_ibfk_2` FOREIGN KEY (`ID_pedido`) REFERENCES `pedido` (`ID`);

--
-- Restrições para tabelas `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`CPF_cliente`) REFERENCES `cliente` (`CPF`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
