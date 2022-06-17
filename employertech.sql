-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jun-2022 às 14:48
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `employertech`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbldados`
--

CREATE TABLE `tbldados` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `email` varchar(220) NOT NULL,
  `cpf` int(220) NOT NULL,
  `senha` text NOT NULL,
  `localidade` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tbldados`
--

INSERT INTO `tbldados` (`id`, `nome`, `email`, `cpf`, `senha`, `localidade`, `created`, `modified`) VALUES
(6, 'Ruan Pablo Neves Moreira', 'ruanpablonevesmoreira@gmail.com', 702387583, '26/03/2006', 'utopia', '2022-06-16 23:11:57', NULL),
(7, 'aaa', 'pedroherogames@gmail.com', 702387583, '26/03/2006', 'utopia', '2022-06-16 23:15:50', NULL),
(8, 'Ruan Pablo Neves Moreira', 'yorranytoka@gmail.com', 2147483647, '26/03/2006', 'caririaçu', '2022-06-16 23:16:51', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tbldados`
--
ALTER TABLE `tbldados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbldados`
--
ALTER TABLE `tbldados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
