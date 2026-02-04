-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_php_26
-- ------------------------------------------------------
-- Server version	5.5.5-10.11.13-MariaDB-0ubuntu0.24.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cidade`
--

DROP TABLE IF EXISTS `cidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cidade` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `codigo_ibge` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cidade_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `cidade_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidade`
--

LOCK TABLES `cidade` WRITE;
/*!40000 ALTER TABLE `cidade` DISABLE KEYS */;
/*!40000 ALTER TABLE `cidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'Ariel'),(2,'Pedro'),(3,'Henrique Z'),(4,'Luis'),(5,'Rafael'),(6,'Henrique B'),(7,'Tiago'),(8,'Kevin'),(9,'Bruno');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_php_26'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2026-01-27 21:44:57


-- curso_php_26.cidade definição

CREATE TABLE `cidade` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `codigo_ibge` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cidade_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `cidade_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- curso_php_26.endereco definição

CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `logradouro` varchar(255) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `ponto_referencia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `endereco_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- curso_php_26.estado definição

CREATE TABLE `estado` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- curso_php_26.pessoa_fisica definição

CREATE TABLE `pessoa_fisica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL,
  `cpf` varchar(20) NOT NULL,
  `data_nascimento` date NOT NULL,
  `nome_mae` varchar(255) DEFAULT NULL,
  `rg` varchar(10) NOT NULL,
  `genero` varchar(1) NOT NULL DEFAULT 'M',
  PRIMARY KEY (`id`),
  KEY `pf_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `pf_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- curso_php_26.pessoa_juridica definição

CREATE TABLE `pessoa_juridica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `cnpj` varchar(20) NOT NULL,
  `razao_social` varchar(512) NOT NULL,
  `cnae` varchar(100) NOT NULL,
  `inscricao_estadual` varchar(20) NOT NULL,
  `porte` varchar(100) NOT NULL,
  `matriz` tinyint(1) NOT NULL,
  `data_fundacao` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pj_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `pj_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- curso_php_26.usuario definição

CREATE TABLE `usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


