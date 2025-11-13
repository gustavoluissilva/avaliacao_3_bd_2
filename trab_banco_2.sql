-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 13/11/2025 às 13:06
-- Versão do servidor: 8.0.27
-- Versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `trab_banco_2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimentos`
--

DROP TABLE IF EXISTS `atendimentos`;
CREATE TABLE IF NOT EXISTS `atendimentos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint NOT NULL,
  `funcionario_id` bigint DEFAULT NULL,
  `data_atendimento` datetime DEFAULT NULL,
  `tipo` enum('sinistro','suporte','financeiro','outros') DEFAULT NULL,
  `descricao` text,
  `resolvido` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atendimentos_clientes` (`cliente_id`),
  KEY `fk_atendimentos_funcionarios` (`funcionario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `cliente_id`, `funcionario_id`, `data_atendimento`, `tipo`, `descricao`, `resolvido`, `created`, `modified`) VALUES
(1, 1, 2, '2024-03-02 09:00:00', 'sinistro', 'Abertura de protocolo de roubo', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 2, 3, '2024-04-16 14:00:00', 'suporte', 'Onde levar para arrumar tela?', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 3, 4, '2024-05-21 10:30:00', 'sinistro', 'Reclamação sobre negativa de furto', 0, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 4, 1, '2024-06-11 16:45:00', 'financeiro', 'Estorno de cobrança indevida', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 5, 2, '2024-07-06 11:00:00', 'sinistro', 'Envio de fotos do aparelho quebrado', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 6, 3, '2024-08-13 15:20:00', 'outros', 'Dúvida sobre carência', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 7, 5, '2024-09-02 13:10:00', 'suporte', 'Não consegue acessar o app', 0, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 8, 1, '2024-09-26 09:40:00', 'financeiro', 'Mudança de cartão de crédito', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 9, 4, '2024-10-06 10:50:00', 'sinistro', 'Status da análise do furto', 0, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 10, 2, '2024-11-02 17:00:00', 'outros', 'Cancelamento de renovação automática', 1, '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `celulares`
--

DROP TABLE IF EXISTS `celulares`;
CREATE TABLE IF NOT EXISTS `celulares` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `cliente_id` bigint NOT NULL,
  `marca` varchar(50) DEFAULT NULL,
  `modelo` varchar(50) DEFAULT NULL,
  `imei` varchar(20) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `data_aquisicao` date DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `imei` (`imei`),
  KEY `fk_celulares_clientes` (`cliente_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `celulares`
--

INSERT INTO `celulares` (`id`, `cliente_id`, `marca`, `modelo`, `imei`, `valor`, `data_aquisicao`, `created`, `modified`) VALUES
(1, 1, 'Samsung', 'Galaxy S21', 'IMEI0001', 3500.00, '2024-01-10', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(2, 2, 'Apple', 'iPhone 13', 'IMEI0002', 5500.00, '2024-02-01', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(3, 3, 'Xiaomi', 'Redmi Note 12', 'IMEI0003', 1800.00, '2024-03-03', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(4, 4, 'Motorola', 'Edge 30', 'IMEI0004', 2500.00, '2024-04-15', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(5, 5, 'Samsung', 'A54', 'IMEI0005', 2000.00, '2024-05-01', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(6, 6, 'Apple', 'iPhone 12', 'IMEI0006', 4500.00, '2024-06-22', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(7, 7, 'Xiaomi', 'Mi 11', 'IMEI0007', 3000.00, '2024-07-10', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(8, 8, 'Motorola', 'Moto G100', 'IMEI0008', 1900.00, '2024-08-08', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(9, 9, 'Samsung', 'Z Flip 4', 'IMEI0009', 6000.00, '2024-09-05', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(10, 10, 'Apple', 'iPhone 14', 'IMEI0010', 7000.00, '2024-10-02', '2025-11-13 09:54:39', '2025-11-13 09:54:39'),
(11, 1, 'Apple', 'iPhone 15 Pro', 'IMEI9901', 8500.00, '2024-01-10', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(12, 2, 'Samsung', 'Galaxy S23 Ultra', 'IMEI9902', 6500.00, '2024-02-15', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(13, 3, 'Motorola', 'Edge 40 Neo', 'IMEI9903', 2200.00, '2024-03-10', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(14, 4, 'Xiaomi', 'Poco X5 Pro', 'IMEI9904', 1900.00, '2024-04-05', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(15, 5, 'Apple', 'iPhone 14 Plus', 'IMEI9905', 5500.00, '2024-05-20', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(16, 6, 'Samsung', 'Galaxy Z Fold 5', 'IMEI9906', 9000.00, '2024-06-11', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(17, 7, 'Asus', 'Zenfone 10', 'IMEI9907', 3800.00, '2024-07-01', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(18, 8, 'Xiaomi', 'Redmi Note 13', 'IMEI9908', 1500.00, '2024-08-15', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(19, 9, 'Apple', 'iPhone SE 3', 'IMEI9909', 3000.00, '2024-09-10', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(20, 10, 'Realme', 'Realme 11 Pro+', 'IMEI9910', 2600.00, '2024-10-05', '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` char(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`, `cpf`, `email`, `telefone`, `endereco`, `created`, `modified`) VALUES
(1, 'João Silva', '11111111111', 'joao@email.com', '11999990001', 'Rua das Flores, 123', '2024-01-15 10:00:00', '2024-01-15 10:00:00'),
(2, 'Maria Oliveira', '22222222222', 'maria@email.com', '11999990002', 'Av. Brasil, 200', '2024-02-10 10:00:00', '2024-02-10 10:00:00'),
(3, 'Carlos Pereira', '33333333333', 'carlos@email.com', '11999990003', 'Rua Central, 300', '2024-03-05 10:00:00', '2024-03-05 10:00:00'),
(4, 'Ana Souza', '44444444444', 'ana@email.com', '11999990004', 'Travessa das Árvores, 45', '2024-04-12 10:00:00', '2024-04-12 10:00:00'),
(5, 'Lucas Almeida', '55555555555', 'lucas@email.com', '11999990005', 'Rua Azul, 56', '2024-05-20 10:00:00', '2024-05-20 10:00:00'),
(6, 'Fernanda Lima', '66666666666', 'fernanda@email.com', '11999990006', 'Av. das Palmeiras, 70', '2024-06-18 10:00:00', '2024-06-18 10:00:00'),
(7, 'Rafael Costa', '77777777777', 'rafael@email.com', '11999990007', 'Rua do Sol, 12', '2024-07-11 10:00:00', '2024-07-11 10:00:00'),
(8, 'Juliana Rocha', '88888888888', 'juliana@email.com', '11999990008', 'Rua Nova, 89', '2024-08-01 10:00:00', '2024-08-01 10:00:00'),
(9, 'Pedro Gomes', '99999999999', 'pedro@email.com', '11999990009', 'Av. Paulista, 900', '2024-09-09 10:00:00', '2024-09-09 10:00:00'),
(10, 'Mariana Torres', '00000000000', 'mariana@email.com', '11999990010', 'Rua das Rosas, 33', '2024-10-10 10:00:00', '2024-10-10 10:00:00'),
(21, 'Roberto Almeida', '12345678901', 'roberto@email.com', '11988887771', 'Rua das Acácias, 500', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(22, 'Patrícia Lima', '23456789012', 'patricia@email.com', '11988887772', 'Av. Ipiranga, 1500', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(23, 'Bruno Henrique', '34567890123', 'bruno@email.com', '11988887773', 'Rua Augusta, 890', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(24, 'Camila Viana', '45678901234', 'camila@email.com', '11988887774', 'Alameda Santos, 200', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(25, 'Eduardo Santos', '56789012345', 'eduardo@email.com', '11988887775', 'Rua da Consolação, 333', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(26, 'Vanessa Dias', '67890123456', 'vanessa@email.com', '11988887776', 'Av. Rebouças, 100', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(27, 'Gustavo Nogueira', '78901234567', 'gustavo@email.com', '11988887777', 'Rua Pamplona, 45', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(28, 'Beatriz Farias', '89012345678', 'beatriz@email.com', '11988887778', 'Av. Europa, 99', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(29, 'Leonardo Cruz', '90123456789', 'leo@email.com', '11988887779', 'Rua Estados Unidos, 1200', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(30, 'Soraia Mendes', '01234567890', 'soraia@email.com', '11988887700', 'Av. Faria Lima, 4000', '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` char(11) DEFAULT NULL,
  `cargo` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `nome`, `cpf`, `cargo`, `email`, `senha`, `created`, `modified`) VALUES
(1, 'Carlos Eduardo', '11122233301', 'Supervisor', 'carlos@seguro.com', 'pass1', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 'Amanda Nogueira', '11122233302', 'Atendente', 'amanda@seguro.com', 'pass2', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 'Fábio Jr', '11122233303', 'Vendedor', 'fabio@seguro.com', 'pass3', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 'Gisele Bundchen', '11122233304', 'Gerente', 'gisele@seguro.com', 'pass4', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 'Hélio Castroneves', '11122233305', 'Analista TI', 'helio@seguro.com', 'pass5', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 'Ivete Sangalo', '11122233306', 'RH', 'ivete@seguro.com', 'pass6', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 'Jô Soares', '11122233307', 'Diretor', 'jo@seguro.com', 'pass7', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 'Kaká Ricardo', '11122233308', 'Atendente', 'kaka@seguro.com', 'pass8', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 'Luan Santana', '11122233309', 'Marketing', 'luan@seguro.com', 'pass9', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 'Marta Silva', '11122233310', 'Financeiro', 'marta@seguro.com', 'pass10', '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pagamentos`
--

DROP TABLE IF EXISTS `pagamentos`;
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `seguro_id` bigint NOT NULL,
  `data_pagamento` date DEFAULT NULL,
  `valor_pago` decimal(10,2) DEFAULT NULL,
  `metodo_pagamento` enum('cartão','pix','boleto') DEFAULT NULL,
  `status_pagamento` enum('pago','pendente','atrasado') DEFAULT 'pendente',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_pagamentos_seguros` (`seguro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `pagamentos`
--

INSERT INTO `pagamentos` (`id`, `seguro_id`, `data_pagamento`, `valor_pago`, `metodo_pagamento`, `status_pagamento`, `created`, `modified`) VALUES
(1, 1, '2024-02-15', 110.00, 'cartão', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 2, '2024-03-20', 75.90, 'pix', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 3, '2024-04-15', 25.90, 'boleto', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 4, '2024-05-10', 19.90, 'pix', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 5, '2024-06-25', 75.90, 'cartão', 'pendente', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 6, '2024-07-15', 110.00, 'cartão', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 7, '2024-08-05', 45.90, 'boleto', 'atrasado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 8, '2024-09-20', 25.90, 'pix', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 9, '2024-10-15', 45.90, 'cartão', 'pago', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 10, '2024-11-10', 35.90, 'pix', 'pendente', '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `cobertura` text,
  `valor_mensal` decimal(10,2) DEFAULT NULL,
  `franquia` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `planos`
--

INSERT INTO `planos` (`id`, `nome`, `cobertura`, `valor_mensal`, `franquia`, `created`, `modified`) VALUES
(1, 'Bronze Start', 'Quebra de tela apenas', 25.90, 350.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 'Prata Essencial', 'Quebra e danos por líquido', 45.90, 250.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 'Ouro Advanced', 'Quebra, líquido e roubo', 75.90, 150.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 'Diamante Elite', 'Cobertura total + perda', 110.00, 0.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 'Universitário', 'Roubo e Furto apenas', 19.90, 400.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 'Família 2 Devices', 'Cobertura compartilhada', 89.90, 200.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 'Viagem Global', 'Cobertura internacional', 59.90, 100.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 'Business Corp', 'Frota empresarial', 69.90, 150.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 'Gamer Protect', 'Danos elétricos e tela', 35.90, 300.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 'Sênior Care', 'Assistência técnica em casa', 49.90, 100.00, '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `seguros`
--

DROP TABLE IF EXISTS `seguros`;
CREATE TABLE IF NOT EXISTS `seguros` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `celular_id` bigint NOT NULL,
  `plano_id` bigint NOT NULL,
  `funcionario_id` bigint DEFAULT NULL,
  `data_inicio` date NOT NULL,
  `data_fim` date DEFAULT NULL,
  `status` enum('ativo','inativo','cancelado') DEFAULT 'ativo',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_seguros_celulares` (`celular_id`),
  KEY `fk_seguros_planos` (`plano_id`),
  KEY `fk_seguros_funcionarios` (`funcionario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `seguros`
--

INSERT INTO `seguros` (`id`, `celular_id`, `plano_id`, `funcionario_id`, `data_inicio`, `data_fim`, `status`, `created`, `modified`) VALUES
(1, 1, 4, 1, '2024-01-15', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 2, 3, 2, '2024-02-20', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 3, 1, 2, '2024-03-15', NULL, 'inativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 4, 5, 3, '2024-04-10', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 5, 3, 4, '2024-05-25', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 6, 4, 1, '2024-06-15', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 7, 2, 5, '2024-07-05', NULL, 'cancelado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 8, 1, 2, '2024-08-20', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 9, 2, 3, '2024-09-15', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 10, 9, 4, '2024-10-10', NULL, 'ativo', '2025-11-13 10:00:21', '2025-11-13 10:00:21');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sinistros`
--

DROP TABLE IF EXISTS `sinistros`;
CREATE TABLE IF NOT EXISTS `sinistros` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `seguro_id` bigint NOT NULL,
  `data_ocorrencia` date NOT NULL,
  `tipo` enum('roubo','furto','quebra','outros') DEFAULT NULL,
  `descricao` text,
  `status` enum('em análise','aprovado','negado','finalizado') DEFAULT 'em análise',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sinistros_seguros` (`seguro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Despejando dados para a tabela `sinistros`
--

INSERT INTO `sinistros` (`id`, `seguro_id`, `data_ocorrencia`, `tipo`, `descricao`, `status`, `created`, `modified`) VALUES
(1, 1, '2024-03-01', 'roubo', 'Assalto à mão armada no centro', 'em análise', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(2, 2, '2024-04-15', 'quebra', 'Caiu da escada, tela trincada', 'aprovado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(3, 3, '2024-05-20', 'furto', 'Furtado dentro da bolsa no shopping', 'negado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(4, 4, '2024-06-10', 'outros', 'Oxidação por água do mar', 'finalizado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(5, 5, '2024-07-05', 'quebra', 'Atropelado por bicicleta', 'aprovado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(6, 6, '2024-08-12', 'roubo', 'Roubo de veículo com celular dentro', 'em análise', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(7, 7, '2024-09-01', 'outros', 'Botão power parou de funcionar', 'negado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(8, 8, '2024-09-25', 'quebra', 'Vidro traseiro quebrado', 'aprovado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(9, 9, '2024-10-05', 'furto', 'Esquecido na mesa do restaurante', 'em análise', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(10, 10, '2024-11-01', 'quebra', 'Touch parou de responder', 'finalizado', '2025-11-13 10:00:21', '2025-11-13 10:00:21'),
(11, 1, '2025-11-22', 'roubo', 'dfhdfhdfhfdh', 'em análise', '2025-11-13 13:05:15', '2025-11-13 13:05:15');

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD CONSTRAINT `fk_atendimentos_clientes` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_atendimentos_funcionarios` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Restrições para tabelas `celulares`
--
ALTER TABLE `celulares`
  ADD CONSTRAINT `fk_celulares_clientes` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `pagamentos`
--
ALTER TABLE `pagamentos`
  ADD CONSTRAINT `fk_pagamentos_seguros` FOREIGN KEY (`seguro_id`) REFERENCES `seguros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Restrições para tabelas `seguros`
--
ALTER TABLE `seguros`
  ADD CONSTRAINT `fk_seguros_celulares` FOREIGN KEY (`celular_id`) REFERENCES `celulares` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seguros_funcionarios` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_seguros_planos` FOREIGN KEY (`plano_id`) REFERENCES `planos` (`id`) ON DELETE RESTRICT ON UPDATE CASCADE;

--
-- Restrições para tabelas `sinistros`
--
ALTER TABLE `sinistros`
  ADD CONSTRAINT `fk_sinistros_seguros` FOREIGN KEY (`seguro_id`) REFERENCES `seguros` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
