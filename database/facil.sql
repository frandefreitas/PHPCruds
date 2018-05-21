-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Maio-2018 às 04:41
-- Versão do servidor: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facil`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `familia`
--

CREATE TABLE `familia` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `quantidade_membros` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `familia`
--

INSERT INTO `familia` (`id`, `nome`, `quantidade_membros`) VALUES
(9, 'Corinthians', 122),
(10, 'Palmeiras', 320943),
(11, 'Santos ', 49390),
(12, 'SÃ£o Paulo', 32093),
(13, 'Portuguesa', 4390);

-- --------------------------------------------------------

--
-- Estrutura da tabela `guerra`
--

CREATE TABLE `guerra` (
  `id` int(11) NOT NULL,
  `id_familia_desafiadora` int(11) DEFAULT NULL,
  `id_familia_desafiada` int(11) DEFAULT NULL,
  `data_inicio` date DEFAULT NULL,
  `data_fim` date DEFAULT NULL,
  `id_familia_vencedora` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `guerra`
--

INSERT INTO `guerra` (`id`, `id_familia_desafiadora`, `id_familia_desafiada`, `data_inicio`, `data_fim`, `id_familia_vencedora`) VALUES
(5, 10, 11, '2018-05-20', '2018-05-20', 11),
(6, 10, 11, '2018-05-20', '2018-05-20', 10),
(7, 9, 11, '2018-05-20', '2018-05-20', 9),
(8, 10, 11, '2018-05-20', '2018-05-20', 10),
(9, 12, 11, '2018-05-20', '2018-05-20', 12),
(10, 10, 9, '2018-05-20', '2018-05-20', 9),
(11, 11, 12, '2018-05-20', '2018-05-20', 12),
(12, 10, 12, '2018-05-20', '2018-05-20', 10),
(13, 9, 11, '2018-05-20', '2018-05-20', 9),
(14, 12, 9, '2018-05-20', '2018-05-20', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `familia`
--
ALTER TABLE `familia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guerra`
--
ALTER TABLE `guerra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_familia_desafiadora` (`id_familia_desafiadora`),
  ADD KEY `id_familia_desafiada` (`id_familia_desafiada`),
  ADD KEY `id_familia_vencedora` (`id_familia_vencedora`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `familia`
--
ALTER TABLE `familia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `guerra`
--
ALTER TABLE `guerra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `guerra`
--
ALTER TABLE `guerra`
  ADD CONSTRAINT `guerra_ibfk_1` FOREIGN KEY (`id_familia_desafiadora`) REFERENCES `familia` (`id`),
  ADD CONSTRAINT `guerra_ibfk_2` FOREIGN KEY (`id_familia_desafiada`) REFERENCES `familia` (`id`),
  ADD CONSTRAINT `guerra_ibfk_3` FOREIGN KEY (`id_familia_vencedora`) REFERENCES `familia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
