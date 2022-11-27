-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24-Out-2022 às 22:19
-- Versão do servidor: 10.3.28-MariaDB-cll-lve
-- versão do PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ehyescte_BancoPrincipal`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `solicitation`
--

CREATE TABLE `solicitation` (
  `Id_solicitation` tinyint(1) UNSIGNED ZEROFILL NOT NULL,
  `nome` char(255) DEFAULT NULL,
  `nivel` char(255) DEFAULT NULL,
  `endereco` char(255) DEFAULT NULL,
  `ponto_referencia` char(255) DEFAULT NULL,
  `coordenadas` char(255) DEFAULT NULL,
  `descricao` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitation`
--

INSERT INTO `solicitation` (`Id_solicitation`, `nome`, `nivel`, `endereco`, `ponto_referencia`, `condenadas`, `descricao`) VALUES
(1, 'sfasfasf', NULL, NULL, NULL, NULL, NULL),
(2, 'sfasfasf', '2', 'asfas', 'fsafasfas', 'asfas', 'fas'),
(3, 'sfasfasf', '2', 'asfas', 'fsafasfas', 'asfas', 'fas'),
(4, 'Jose', 'Baixa', 'rua bom reteiro', 'ssgsagas', '{\"x\":321.1066845592552,\"y\":178.95496099974838} {\"lng\":-48.654419170275105,\"lat\":-27.00358851811096}', 'sgasgasgasasgsagsagasgsagasg'),
(5, 'safasfas', 'Baixa', 'safasfa', 'fsafsafs', 'safsafasfsfas', 'fasgasgas');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `solicitation`
--
ALTER TABLE `solicitation`
  ADD PRIMARY KEY (`Id_solicitation`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `solicitation`
--
ALTER TABLE `solicitation`
  MODIFY `Id_solicitation` tinyint(1) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
