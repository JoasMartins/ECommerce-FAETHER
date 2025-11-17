-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/11/2025 às 00:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `produtos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `produtoNome` varchar(256) NOT NULL,
  `produtoDescricao` varchar(256) NOT NULL,
  `produtoImagem` varchar(256) NOT NULL,
  `produtoPreco` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `produtoNome`, `produtoDescricao`, `produtoImagem`, `produtoPreco`) VALUES
(25, 'Vara de Pesca Carbono 1,80m', 'Vara leve de carbono ideal para pesca em rios e lagos.', '/uploads/produtos/produto1.webp', 149.9),
(26, 'Carretilha Shimano SLX', 'Carretilha de alta performance com freio magnético.', '/uploads/produtos/produto2.webp', 499),
(27, 'Molinete Marine Sports 3000', 'Molinete resistente com sistema anti-reverso.', '/uploads/produtos/produto3.webp', 189.9),
(28, 'Linha Monofilamento 0.35mm', 'Linha forte e resistente com 100m.', '/uploads/produtos/produto4.webp', 24.9),
(29, 'Linha Multifilamento 4X 0.20mm', 'Linha super resistente de multifilamento.', '/uploads/produtos/produto5.webp', 69.9),
(30, 'Kit de Anzóis Sortidos 50 Unidades', 'Anzóis variados para diferentes tipos de pesca.', '/uploads/produtos/produto6.webp', 19.9),
(31, 'Isca Artificial Minnow 9cm', 'Isca flutuante ideal para predadores.', '/uploads/produtos/produto7.webp', 32),
(32, 'Isca Soft Shad 7cm', 'Isca soft muito utilizada em pesca esportiva.', '/uploads/produtos/produto11.webp', 14.9),
(33, 'Chumbada Oliva 40g', 'Chumbada para pesca de fundo.', '/uploads/produtos/produto8.webp', 5.5),
(34, 'Boia Torpedo Nº 2', 'Boia leve e precisa para arremessos curtos.', '/uploads/produtos/produto9.webp', 6.9),
(35, 'Kit Giradores 30 Unidades', 'Giradores reforçados para montagem de linhas.', '/uploads/produtos/produto10.webp', 12.9),
(36, 'Alicate de Pesca Multiuso', 'Alicate com corte e bico longo.', '/uploads/produtos/produto12.webp', 34.9),
(37, 'Camiseta de Pesca UV50+', 'Camiseta respirável com proteção solar.', '/uploads/produtos/produto13.webp', 79.9),
(38, 'Boné de Pesca Dry Fit', 'Boné leve ideal para dias quentes.', '/uploads/produtos/produto14.webp', 39.9),
(39, 'Caixa Organizadora de Pesca', 'Caixa com divisórias ajustáveis.', '/uploads/produtos/produto15.webp', 59.9);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
