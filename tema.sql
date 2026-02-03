DROP TABLE IF EXISTS `pessoa_fisica`;
CREATE TABLE `pessoa_fisica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `ponto_referencia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pf_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `pf_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `pessoa_juridica`;
CREATE TABLE `pessoa_juridica` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `criado_em` timestamp NULL DEFAULT NULL,
  `atualizado_em` timestamp NULL DEFAULT NULL,
  `usuario_alteracao` smallint(6) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `idade` int(3) DEFAULT NULL, -- Geralmente usado como 'tempo de fundação' para PJ
  `cep` varchar(10) DEFAULT NULL,
  `bairro` varchar(100) DEFAULT NULL,
  `numero` varchar(20) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `ponto_referencia` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `pj_usuario_FK` (`usuario_alteracao`),
  CONSTRAINT `pj_usuario_FK` FOREIGN KEY (`usuario_alteracao`) REFERENCES `usuario` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `endereco`;
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