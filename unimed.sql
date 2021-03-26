-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Mar-2021 às 13:21
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `unimed`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `unimed`
--

CREATE TABLE `unimed` (
  `nome` varchar(250) NOT NULL,
  `idade` int(10) NOT NULL,
  `plano` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `unimed`
--

INSERT INTO `unimed` (`nome`, `idade`, `plano`, `total`) VALUES
('', 0, '', 0),
('', 0, '', 0),
('Sa', 12, '', 0),
('Sa', 12, '', 0),
('Savio', 12, 'Apartamento', 0),
('Savio', 12, 'Apartamento', 0),
('Savio', 19, 'Apartamento', 932);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
