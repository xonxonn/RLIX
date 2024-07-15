-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/07/2024 às 08:01
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
-- Banco de dados: `login`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `dados_login`
--

CREATE TABLE `dados_login` (
  `id` int(11) NOT NULL,
  `primeiro_nome` varchar(15) NOT NULL,
  `sobrenome` varchar(45) NOT NULL,
  `nome_de_usuario` varchar(20) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `senha_confirmacao` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `dados_login`
--

INSERT INTO `dados_login` (`id`, `primeiro_nome`, `sobrenome`, `nome_de_usuario`, `senha`, `senha_confirmacao`) VALUES
(1, 'joao', 'nunes', 'xon', '123', '123'),
(2, 'joao', 'xon', 'xon', '123', '123'),
(3, 'joao', 'xon', 'xon', '123', '123'),
(4, 'carlos', 'dos santos', 'carl', '333', '333'),
(5, 'xon', 'zinho', 'xon', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `links`
--

CREATE TABLE `links` (
  `id` int(11) NOT NULL,
  `descricaoli` varchar(45) NOT NULL,
  `categoriali` varchar(20) NOT NULL,
  `datapesquisali` date NOT NULL,
  `precocustoli` int(11) NOT NULL,
  `fornli` varchar(20) NOT NULL,
  `linkli` varchar(125) NOT NULL,
  `observacoesli` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Despejando dados para a tabela `links`
--

INSERT INTO `links` (`id`, `descricaoli`, `categoriali`, `datapesquisali`, `precocustoli`, `fornli`, `linkli`, `observacoesli`) VALUES
(15, 'banana', 'fruta', '2024-07-03', 6, 'fruteira', 'feira.com', 'comprado na feira'),
(16, 'maçã', 'comida', '2024-07-02', 5, 'imec', 'imec.com', 'por kg');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `dados_login`
--
ALTER TABLE `dados_login`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados_login`
--
ALTER TABLE `dados_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `links`
--
ALTER TABLE `links`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
