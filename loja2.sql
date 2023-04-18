-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07-Mar-2023 às 12:48
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `loja`
--
CREATE DATABASE IF NOT EXISTS `loja` DEFAULT CHARACTER SET utf16 COLLATE utf16_bin;
USE `loja`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--
-- Criação: 23-Jan-2023 às 11:25
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `emailAdmin` varchar(40) COLLATE utf16_bin NOT NULL,
  `password` varchar(40) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- RELACIONAMENTOS PARA TABELAS `admin`:
--

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `emailAdmin`, `password`) VALUES
(1, 'tony@gmail.com', 'tony123'),
(2, 'ribeiro@gmail.com', 'ribeiro123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--
-- Criação: 12-Jan-2023 às 10:38
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_categoria` varchar(10) COLLATE utf16_bin NOT NULL,
  `categoria` varchar(20) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- RELACIONAMENTOS PARA TABELAS `categoria`:
--

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `categoria`) VALUES
('BEBIDA', 'Bebidas'),
('MENU', 'Menus'),
('SOBREMESA', 'Sobremesas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--
-- Criação: 12-Jan-2023 às 10:39
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` varchar(10) COLLATE utf16_bin NOT NULL,
  `id_categoria` varchar(10) COLLATE utf16_bin NOT NULL,
  `nome` varchar(20) COLLATE utf16_bin NOT NULL,
  `descricao` varchar(256) COLLATE utf16_bin NOT NULL,
  `quantidade` int(11) NOT NULL,
  `preço` double NOT NULL,
  `foto` varchar(50) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_categoria` (`id_categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- RELACIONAMENTOS PARA TABELAS `produto`:
--

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `id_categoria`, `nome`, `descricao`, `quantidade`, `preço`, `foto`) VALUES
('BEB1', 'BEBIDA', 'Água Vitalis 50cl', 'Garrafa de água Vitalis de 50cl.', 50, 1.39, 'agua.jpg'),
('MEN1', 'MENU', 'Sopa de caldo verde', 'O caldo verde é uma sopa com couve, tradicional do norte de Portugal e é servida numa tigela de barro e acompanhada por rodelas de chouriço e broa.', 50, 14.99, 'caldoverde.jpg'),
('SOB1', 'SOBREMESA', 'Leite-creme', 'Doce feito de farinha, açúcar, leite e ovos.', 50, 2.99, 'leitecreme.jpg'),
('SOB2', 'SOBREMESA', 'guilherme', 'o guilherme é um doce rawrrrr', 1, 1999, 'swag.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizador`
--
-- Criação: 09-Jan-2023 às 12:04
--

DROP TABLE IF EXISTS `utilizador`;
CREATE TABLE IF NOT EXISTS `utilizador` (
  `id_utilizador` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) COLLATE utf16_bin NOT NULL,
  `apelido` varchar(20) COLLATE utf16_bin NOT NULL,
  `telef` varchar(9) COLLATE utf16_bin NOT NULL,
  `email` varchar(40) COLLATE utf16_bin NOT NULL,
  `morada` varchar(40) COLLATE utf16_bin NOT NULL,
  `cod_postal` varchar(8) COLLATE utf16_bin NOT NULL,
  `localidade` varchar(20) COLLATE utf16_bin NOT NULL,
  `distrito` varchar(20) COLLATE utf16_bin NOT NULL,
  `pass` varchar(40) COLLATE utf16_bin NOT NULL,
  PRIMARY KEY (`id_utilizador`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- RELACIONAMENTOS PARA TABELAS `utilizador`:
--

--
-- Extraindo dados da tabela `utilizador`
--

INSERT INTO `utilizador` (`id_utilizador`, `nome`, `apelido`, `telef`, `email`, `morada`, `cod_postal`, `localidade`, `distrito`, `pass`) VALUES
(1, 'Tony', 'Costeiro	', '952734415', 'tony.delas@gmail.com', 'Avenida da Tosta, Nº36', '3014-087', 'Porto', 'Vila Real	', 'tony123	'),
(26, 'André', 'Pedro', '966350073', 'andre@gmail.com', 'Rua do Canguru, Nº6', '2745-390', 'Seixal', 'Setúbal', 'andre123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
