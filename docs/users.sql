-- phpMyAdmin SQL Dump
-- version 4.9.10
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 24-Out-2022 às 23:06
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
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(3, 'josefelipe638', '$2y$10$5JtbNbTxUY1lkmRmM7wPz.MCpILFHttfclXTtAGnoqsTOB4v9ULAa', '2022-10-22 17:12:47'),
(5, 'fanaticrx', '$2y$10$ysyF1XRtWtzX6wup0J02bu21ALNGZMcIfhZxNG2v16ayXhGarvABu', '2022-10-22 19:03:44'),
(6, 'bruna', '$2y$10$SgIrQCBXg6tdlrRVv3oazOvCVAdeB74fGY1Ar.yZC0UUco.RoLTmW', '2022-10-23 11:43:56'),
(7, 'Breno', '$2y$10$Ayde.mIlXwRzzKonzrf3T.gSeDuL8HIdQz841tiQBR6rrawyTrNtq', '2022-10-24 13:15:17'),
(8, 'amor', '$2y$10$XPGO7Um4PoLUSAdKghX7D.kGs1abnOgDKhM3Js10VyE2qYM4Dfai.', '2022-10-24 18:30:24'),
(9, 'josefelipe637', '$2y$10$hLSyHkSV6E9ZH42U34p03uKI3y.L26EseJZV0q3jEKRoZW4xxWxxC', '2022-10-24 22:53:58');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
