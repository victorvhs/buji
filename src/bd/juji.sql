-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jul-2017 às 22:44
-- Versão do servidor: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `juji`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `formularios`
--

CREATE TABLE `formularios` (
  `id` int(11) NOT NULL,
  `chamado` varchar(80) DEFAULT NULL,
  `peca` varchar(80) DEFAULT NULL,
  `pecaCod` varchar(80) DEFAULT NULL,
  `modelo` varchar(80) DEFAULT NULL,
  `contador` int(11) DEFAULT NULL,
  `defeito` text,
  `contadorDefeito` int(11) DEFAULT NULL ,
  `dataInstalacao` varchar(30) DEFAULT NULL,
  `dataCompra` varchar(30) DEFAULT NULL,
  `dataAnalise` varchar(30) DEFAULT NULL,
  `nf` int(11) DEFAULT NULL,
  `n_serie` varchar(80) NOT NULL,
  `RMA` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formularios`
--

INSERT INTO `formularios` (`id`, `chamado`, `peca`, `pecaCod`, `modelo`, `contador`, `defeito`, `contadorDefeito`, `dataInstalacao`, `dataCompra`, `dataAnalise`, `nf`, `n_serie`, `RMA`) VALUES
(1, '1044980', '123', '', '', 0, 'SDASDADSD', 0, '', '', '', 123, '', NULL),
(2, '1044980', '123', '123', 'X464', 123, '', 0, '1999-09-19', '1999-09-12', '1999-09-19', 123, '123', NULL),
(3, '1044980', '123', '123', 'X464', 123, 'lorem ipson dolores', 0, '1999-09-19', '1999-09-12', '1999-09-19', 123, '123', NULL),
(4, '1044980', '123', '123', 'X464', 123, 'lorem ipson dolores', 0, '1999-09-19', '1999-09-12', '1999-09-19', 123, '123', NULL),
(5, '1045029', 'FK-150', '300540680', 'E460', 0, 'Manchas', 0, '1222-12-12', '1222-12-12', '2222-12-12', 12313, '123.XBB.ABC', NULL),
(6, '1044980', 'FK-150', '302HHN1320', 'MX511', 106528, 'O equipamento apresentou manchas na lateral esquerda da folha.\r\nDurante o atendimento foi constado que a unidade FK-150 estava com defeito. Neste caso não houve a quebra da engrenagem 44R', 251570, '2015-10-25', '2015-09-12', '2017-07-17', 100339, '701545HH0L2310', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `garantias`
--

CREATE TABLE `garantias` (
  `id` int(11) NOT NULL,
  `chamado` varchar(80) DEFAULT NULL,
  `peca` varchar(80) DEFAULT NULL,
  `nf` varchar(80) DEFAULT NULL,
  `n_serie` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `garantias`
--

INSERT INTO `garantias` (`id`, `chamado`, `peca`, `nf`, `n_serie`) VALUES
(0, '1044980', '123', '123', '123');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(32) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `usuario`, `senha`) VALUES
(0, 'victor@copysystems.com.br', 'vhreis', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formularios`
--
ALTER TABLE `formularios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garantias`
--
ALTER TABLE `garantias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `formularios`
--
ALTER TABLE `formularios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
