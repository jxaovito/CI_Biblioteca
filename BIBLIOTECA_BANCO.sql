-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para biblioteca
CREATE DATABASE IF NOT EXISTS `biblioteca` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `biblioteca`;

-- Copiando estrutura para tabela biblioteca.emprestimos
CREATE TABLE IF NOT EXISTS `emprestimos` (
  `id_emprestimo` int(11) NOT NULL AUTO_INCREMENT,
  `data_emprestimo` date NOT NULL,
  `data_devolucao` date NOT NULL,
  `cpf` int(11) NOT NULL DEFAULT '0',
  `id_livro` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_emprestimo`),
  KEY `cpf` (`cpf`),
  KEY `id_livro` (`id_livro`),
  CONSTRAINT `CPF` FOREIGN KEY (`cpf`) REFERENCES `pessoas` (`cpf`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `ID_LIVRO` FOREIGN KEY (`id_livro`) REFERENCES `livros` (`id_livro`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela biblioteca.livros
CREATE TABLE IF NOT EXISTS `livros` (
  `id_livro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo_livro` varchar(255) NOT NULL DEFAULT '0',
  `autor_livro` varchar(50) NOT NULL DEFAULT '0',
  `ano_livro` date NOT NULL,
  `editora_livro` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_livro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

-- Copiando estrutura para tabela biblioteca.pessoas
CREATE TABLE IF NOT EXISTS `pessoas` (
  `cpf` int(11) NOT NULL,
  `nome_pessoa` varchar(100) NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `endereco_pessoa` varchar(255) DEFAULT NULL,
  `telefone_pessoa` int(11) DEFAULT NULL,
  PRIMARY KEY (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Exportação de dados foi desmarcado.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
