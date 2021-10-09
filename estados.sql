-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 09-Out-2021 às 18:13
-- Versão do servidor: 10.3.31-MariaDB-cll-lve
-- versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Banco de dados: `deguste_smart_cash`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_estados`
--

CREATE TABLE `tb_estados` (
  `id` int(11) NOT NULL,
  `estado` varchar(60) DEFAULT NULL,
  `sigla` varchar(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tb_estados`
--

INSERT INTO `tb_estados` (`id`, `estado`, `sigla`) VALUES
(1, 'ACRE', 'AC'),
(2, 'ALAGOAS', 'AL'),
(3, 'AMAPÁ', 'AP'),
(4, 'AMAZONAS', 'AM'),
(5, 'BAHIA', 'BA'),
(6, 'CEARÁ', 'CE'),
(7, 'DISTRITO FEDERAL', 'DF'),
(8, 'ESPÍRITO SANTO', 'ES'),
(9, 'GOIÁS', 'GO'),
(10, 'MARANHÃO', 'MA'),
(11, 'MATO GROSSO', 'MT'),
(12, 'MATO GROSSO DO SUL', 'MS'),
(13, 'MINAS GERAIS', 'MG'),
(14, 'PARÁ', 'PA'),
(15, 'PARAÍBA', 'PB'),
(16, 'PARANÁ', 'PR'),
(17, 'PERNAMBUCO', 'PE'),
(18, 'PIAUÍ', 'PI'),
(19, 'RIO DE JANEIRO', 'RJ'),
(20, 'RIO GRANDE DO NORTE', 'RN'),
(21, 'RIO GRANDE DO SUL', 'RS'),
(22, 'RONDÔNIA', 'RO'),
(23, 'RORAIMA', 'RR'),
(24, 'SANTA CATARINA', 'SC'),
(25, 'SÃO PAULO', 'SP'),
(26, 'SERGIPE', 'SE'),
(27, 'TOCANTINS', 'TO');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_estados`
--
ALTER TABLE `tb_estados`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_estados`
--
ALTER TABLE `tb_estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;
