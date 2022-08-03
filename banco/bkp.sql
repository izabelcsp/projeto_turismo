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


-- Copiando estrutura do banco de dados para db_turismo
CREATE DATABASE IF NOT EXISTS `db_turismo` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `db_turismo`;

-- Copiando estrutura para tabela db_turismo.tb_viagens
CREATE TABLE IF NOT EXISTS `tb_viagens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) NOT NULL,
  `Local` varchar(50) NOT NULL,
  `Valor` float(7,2) NOT NULL,
  `Desc` varchar(200) DEFAULT NULL,
  `ativo` bit(1) NOT NULL DEFAULT b'1',
  `data_cadastro` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela db_turismo.tb_viagens: ~2 rows (aproximadamente)
INSERT INTO `tb_viagens` (`id`, `Titulo`, `Local`, `Valor`, `Desc`, `ativo`, `data_cadastro`) VALUES
	(1, 'Pacote de inverno', 'Gramado', 1700.00, '5 dias de Hotel com café da manhã', b'1', '2022-08-02 19:49:06'),
	(2, 'PRaia com a familia', 'Rio de Janeiro', 5000.00, '6 dias de Hotel com café da manhã', b'1', '2022-08-02 19:52:40'),
	(3, 'Curta aproveite as montanhas ', 'Monte Verde', 1400.00, '3 dias no chalé nas montanhas de Minas Gerais', b'1', '2022-08-02 22:26:32');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
