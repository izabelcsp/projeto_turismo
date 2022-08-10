-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.0.0.6468
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para db_restaurante
CREATE DATABASE IF NOT EXISTS `db_restaurante` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_restaurante`;

-- Copiando estrutura para tabela db_restaurante.tb_pratos
CREATE TABLE IF NOT EXISTS `tb_pratos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(50) NOT NULL,
  `nome` varchar(80) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(150) NOT NULL,
  `preco` float(6,2) NOT NULL,
  `calorias` int(11) NOT NULL,
  `destaque` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_restaurante.tb_pratos: ~3 rows (aproximadamente)
INSERT INTO `tb_pratos` (`id`, `codigo`, `nome`, `categoria`, `descricao`, `preco`, `calorias`, `destaque`) VALUES
	(2, '540', 'Lasanha', 'prato-principal', 'Lasanha deliciosa', 50.00, 449, 1),
	(7, 'brie-geleia', 'brie-geleia', 'entrada', '1', 100.00, 8, 1),
	(8, 'petit-gateau', 'petit-gateau', 'entrada', '1', 30.00, 3, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
