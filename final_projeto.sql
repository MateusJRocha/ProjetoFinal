-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2019 às 19:44
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final_projeto`
--
CREATE DATABASE IF NOT EXISTS `final_projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `final_projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `quemsomos`
--

CREATE TABLE `quemsomos` (
  `texto` varchar(1024) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `quemsomos`
--

INSERT INTO `quemsomos` (`texto`) VALUES
(' A MJ Biblioteca (fictÃ­cia) foi criada em 13 de maio de 2019 por Mateus Justino da Rocha para a conclusÃ£o do modulo de desenvolvimento. A escolha de fazer um site para uma biblioteca veio quando lembrei do meu projeto anterior (mobile) que foi sobre biblioteca.\r\nO site tem o intuito de mostrar as novidades da biblioteca, para facilitar as pessoas que usam a biblioteca, nÃ£o precisarem ir na biblioteca, e para as pessoas entrarem em contato com a biblioteca para tirar duvidas.kkkk\r\n                                                                                                                            '),
(' A MJ Biblioteca (fictÃ­cia) foi criada em 13 de maio de 2019 por Mateus Justino da Rocha para a conclusÃ£o do modulo de desenvolvimento. A escolha de fazer um site para uma biblioteca veio quando lembrei do meu projeto anterior (mobile) que foi sobre biblioteca.\r\nO site tem o intuito de mostrar as novidades da biblioteca, para facilitar as pessoas que usam a biblioteca, nÃ£o precisarem ir na biblioteca, e para as pessoas entrarem em contato com a biblioteca para tirar duvidas.kkkk\r\n                                                                                                                            ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`) VALUES
(1, 'mateus', 'mateus@', 'mateus', 'db00e4fdc8a6d8fc749a23649c9ec9343051ec47'),
(11, 'Admin', 'admin@admin', 'admin', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
