-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 03/11/2020 às 15:09
-- Versão do servidor: 5.7.26
-- Versão do PHP: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de dados: `checklist`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `checklist`
--

CREATE TABLE `checklist` (
  `id` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `problema` text,
  `ncf` varchar(255) DEFAULT NULL,
  `corretiva` text,
  `prazo` varchar(255) DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `excluido` datetime(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `checklist`
--

INSERT INTO `checklist` (`id`, `descricao`, `problema`, `ncf`, `corretiva`, `prazo`, `situacao`, `excluido`) VALUES
(1, 'Possui Matriz de dados coletados?', '', '', '', '', 'Atingido', NULL),
(2, 'Na Matriz de dados coletados é informado qual o fornecedor dos dados?', '', NULL, '', NULL, 'Atingido', NULL),
(3, 'Na Matriz de dados coletados é informado o local da coleta?', '', NULL, '', NULL, 'Atingido', NULL),
(4, 'Na Matriz de dados coletados é informado o conteúdo da coleta?', '', NULL, '', NULL, 'Atingido', NULL),
(5, 'Na Matriz de dados coletados é informado a importância dos dados?', '', NULL, '', NULL, 'Atingido', NULL),
(6, 'Na Matriz de dados coletados é informado a data da coleta?', '', NULL, '', NULL, 'Atingido', NULL),
(7, 'Na Matriz de dados coletados são informados os métodos de coleta?', '', NULL, '', NULL, 'Atingido', NULL),
(8, 'Na Matriz de dados coletados são informadas as estratégias de coleta?', '', NULL, '', NULL, 'Atingido', NULL),
(9, 'Possui Matriz de dados armazenados?', '', NULL, '', NULL, 'Atingido', NULL),
(10, 'A Matriz de dados armazenados possui ID único?', '', NULL, '', NULL, 'Atingido', NULL),
(11, 'A Matriz de dados armazenados informa o tamanho dos dados individuais?', '', NULL, '', NULL, 'Atingido', NULL),
(12, 'A Matriz de dados armazenados informa o tamanho do banco de dados?\n', '', NULL, '', NULL, 'Atingido', NULL),
(13, 'A Matriz de dados armazenados é rastreável?', '', NULL, '', NULL, 'Atingido', NULL),
(14, 'A Matriz de dados armazenados informa a data de armazenamento?', '', NULL, '', NULL, 'Atingido', NULL),
(15, 'A Matriz de dados armazenados possui múltiplos diretórios?', '', NULL, '', NULL, 'Atingido', NULL),
(16, 'A Matriz de dados armazenados informa o responsável pelo armazenamento?', '', NULL, '', NULL, 'Atingido', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ncf`
--

CREATE TABLE `ncf` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `prazo` varchar(255) NOT NULL,
  `excluido` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `ncf`
--

INSERT INTO `ncf` (`id`, `nome`, `prazo`, `excluido`) VALUES
(1, 'Não complexo', '1 dia útil', NULL),
(2, 'Pouco complexo', '3 dias úteis', NULL),
(3, 'Complexo', '5 dias úteis', NULL),
(4, 'Muito complexo', '7 dias úteis', NULL),
(5, 'Extremamente complexo', '10 dias úteis', NULL);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `checklist`
--
ALTER TABLE `checklist`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ncf`
--
ALTER TABLE `ncf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `checklist`
--
ALTER TABLE `checklist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de tabela `ncf`
--
ALTER TABLE `ncf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
