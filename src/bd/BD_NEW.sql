-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.24-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para jus
CREATE DATABASE IF NOT EXISTS `jus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `jus`;

-- Copiando estrutura para tabela jus.forms
CREATE TABLE IF NOT EXISTS `forms` (
  `codForm` int(11) NOT NULL AUTO_INCREMENT,
  `chamado` varchar(30) DEFAULT NULL,
  `modelo` varchar(30) DEFAULT NULL,
  `nSerie` varchar(30) DEFAULT NULL,
  `nota` varchar(30) DEFAULT NULL,
  `dataCompra` date DEFAULT NULL,
  `dataInstala` date DEFAULT NULL,
  `contInstala` int(11) DEFAULT NULL,
  `dataDefeito` date DEFAULT NULL,
  `contDefeito` int(11) DEFAULT NULL,
  `dataAbertura` date DEFAULT NULL,
  `defeito` text,
  `dataGravacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuario` int(11) DEFAULT NULL,
  `pecas` int(11) DEFAULT NULL,
  `rmas` int(11) DEFAULT NULL,
  `posForm` char(1) DEFAULT NULL,
  PRIMARY KEY (`codForm`),
  KEY `FK_user` (`usuario`),
  KEY `FK_peca` (`pecas`),
  CONSTRAINT `FK_peca` FOREIGN KEY (`pecas`) REFERENCES `form_pecas` (`idTBFormPeca`),
  CONSTRAINT `FK_user` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.forms: ~0 rows (aproximadamente)
DELETE FROM `forms`;
/*!40000 ALTER TABLE `forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `forms` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.formularios
CREATE TABLE IF NOT EXISTS `formularios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chamado` varchar(80) DEFAULT NULL,
  `peca` varchar(80) DEFAULT NULL,
  `pecaCod` varchar(80) DEFAULT NULL,
  `modelo` varchar(80) DEFAULT NULL,
  `contador` int(11) DEFAULT NULL,
  `defeito` text,
  `contadorDefeito` int(11) NOT NULL,
  `dataInstalacao` varchar(30) DEFAULT NULL,
  `dataCompra` varchar(30) DEFAULT NULL,
  `dataAnalise` varchar(30) DEFAULT NULL,
  `nf` int(11) DEFAULT NULL,
  `n_serie` varchar(80) NOT NULL,
  `RMA` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.formularios: ~5 rows (aproximadamente)
DELETE FROM `formularios`;
/*!40000 ALTER TABLE `formularios` DISABLE KEYS */;
INSERT INTO `formularios` (`id`, `chamado`, `peca`, `pecaCod`, `modelo`, `contador`, `defeito`, `contadorDefeito`, `dataInstalacao`, `dataCompra`, `dataAnalise`, `nf`, `n_serie`, `RMA`) VALUES
	(14, '1044980', 'FK-150', '302HHN1320', 'MX511', 0, '', 0, '', '', '', 0, '123.XBB.ABC', '1010'),
	(15, '1045029', '123', 'ASD', 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 5, 'Mancas', 45, '0004-04-04', '0444-04-04', '0004-04-04', 546, '123', NULL),
	(16, '4425', 'KIT FOTOCONDUTOR', '50XF123', 'MX511', 120, 'Manchas nas impressões,', 1191, '9109-01-19', '0199-09-12', '9019-01-19', 190, '123', '44445'),
	(17, '1010', 'FK-150', '302HHN1320', 'M2535DN', 0, 'manchas.', 12, '1212-12-12', '1212-12-12', '1212-12-12', 120, 'LZK.454.444.1', NULL),
	(18, 'XXX', 'CCC', 'CCC', 'CCC', 12, 'CCCCCC', 12121, '1212-12-12', '1212-12-12', '0012-12-12', 21212, 'CCCC', NULL);
/*!40000 ALTER TABLE `formularios` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.form_pecas
CREATE TABLE IF NOT EXISTS `form_pecas` (
  `idTBFormPeca` int(11) NOT NULL AUTO_INCREMENT,
  `codPeca` varchar(50) DEFAULT NULL,
  `codForm` int(11) DEFAULT NULL,
  `RMA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTBFormPeca`),
  KEY `FK_peca_formPeca` (`codPeca`),
  CONSTRAINT `FK_peca_formPeca` FOREIGN KEY (`codPeca`) REFERENCES `pecas` (`codPeca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.form_pecas: ~0 rows (aproximadamente)
DELETE FROM `form_pecas`;
/*!40000 ALTER TABLE `form_pecas` DISABLE KEYS */;
/*!40000 ALTER TABLE `form_pecas` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.garantias
CREATE TABLE IF NOT EXISTS `garantias` (
  `id` int(11) NOT NULL,
  `chamado` varchar(80) DEFAULT NULL,
  `peca` varchar(80) DEFAULT NULL,
  `nf` varchar(80) DEFAULT NULL,
  `n_serie` varchar(80) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.garantias: ~1 rows (aproximadamente)
DELETE FROM `garantias`;
/*!40000 ALTER TABLE `garantias` DISABLE KEYS */;
INSERT INTO `garantias` (`id`, `chamado`, `peca`, `nf`, `n_serie`) VALUES
	(0, '1044980', '123', '123', '123');
/*!40000 ALTER TABLE `garantias` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.pecas
CREATE TABLE IF NOT EXISTS `pecas` (
  `modelo` varchar(50) DEFAULT NULL,
  `codPeca` varchar(50) NOT NULL,
  PRIMARY KEY (`codPeca`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.pecas: ~0 rows (aproximadamente)
DELETE FROM `pecas`;
/*!40000 ALTER TABLE `pecas` DISABLE KEYS */;
/*!40000 ALTER TABLE `pecas` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.rmas
CREATE TABLE IF NOT EXISTS `rmas` (
  `idTBrma` int(11) NOT NULL AUTO_INCREMENT,
  `peca` varchar(50) DEFAULT NULL,
  `qtdPeca` int(11) DEFAULT NULL,
  `RMA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idTBrma`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela jus.rmas: ~0 rows (aproximadamente)
DELETE FROM `rmas`;
/*!40000 ALTER TABLE `rmas` DISABLE KEYS */;
/*!40000 ALTER TABLE `rmas` ENABLE KEYS */;

-- Copiando estrutura para tabela jus.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `usuario` varchar(100) CHARACTER SET latin1 NOT NULL,
  `senha` varchar(32) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela jus.usuarios: ~1 rows (aproximadamente)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `usuario`, `senha`) VALUES
	(0, 'victor@copysystems.com.br', 'vhreis', '123');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
