-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Nov-2020 às 21:47
-- Versão do servidor: 10.4.14-MariaDB
-- versão do PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `checklist`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `problema` text DEFAULT NULL,
  `ncf` varchar(255) DEFAULT NULL,
  `corretiva` text DEFAULT NULL,
  `prazo` varchar(255) DEFAULT NULL,
  `situacao` int(11) DEFAULT NULL,
  `excluido` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `checklist`
--

INSERT INTO `checklist` (`id`, `descricao`, `problema`, `ncf`, `corretiva`, `prazo`, `situacao`, `excluido`) VALUES
(1, 'teste', 'teset', '1', 'corrigi', '2 dias', 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ncf`
--

CREATE TABLE `ncf` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `prazo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `ncf`
--

INSERT INTO `ncf` (`id`, `nome`, `prazo`) VALUES
(1, 'Medio', '5 dias\r\n'),
(2, 'Fraco', '1 dia'),
(3, 'Grande', '10 dias');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `ncf`
--
ALTER TABLE `ncf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ncf`
--
ALTER TABLE `ncf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
