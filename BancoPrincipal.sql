-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 28-Out-2022 às 20:12
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
  `id_solicitation` tinyint(1) UNSIGNED ZEROFILL NOT NULL,
  `name` char(255) DEFAULT NULL,
  `level` char(255) DEFAULT NULL,
  `address` char(255) DEFAULT NULL,
  `reference_point` char(255) DEFAULT NULL,
  `coordinates` char(255) DEFAULT NULL,
  `description` char(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `solicitation`
--

INSERT INTO `solicitation` (`id_solicitation`, `name`, `level`, `address`, `reference_point`, `coordinates`, `description`) VALUES
(1, '', '', '', '', '', ''),
(2, 'gasgfsa', '', '', '', '', ''),
(3, 'fsa', 'Alta', 'safsaf', 'teste', 'Latitude :-27.01053 Longitude: -48.64695', 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `fk_solicitation_id_solicitation` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`, `fk_solicitation_id_solicitation`) VALUES
(2, 'josefelipeteste2', '$2y$10$bdFf9g2tmIsayFa.Y2Xh3evZUJHO2IRBCn2l6OP1AkSvFfNohSeO6', '2022-10-28 16:52:43', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `solicitation`
--
ALTER TABLE `solicitation`
  ADD PRIMARY KEY (`id_solicitation`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `FK_users_2` (`fk_solicitation_id_solicitation`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `solicitation`
--
ALTER TABLE `solicitation`
  MODIFY `id_solicitation` tinyint(1) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
