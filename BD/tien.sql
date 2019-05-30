-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Maio-2019 às 00:50
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tien`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estatus`
--

CREATE TABLE `estatus` (
  `codEstatus` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estatus`
--

INSERT INTO `estatus` (`codEstatus`, `nome`) VALUES
(1, 'feliz'),
(2, 'triste'),
(4, 'alegre'),
(6, 'dsadsad');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tien`
--

CREATE TABLE `tien` (
  `codTien` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `codEstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tien`
--

INSERT INTO `tien` (`codTien`, `nome`, `codEstatus`) VALUES
(5, 'asd', 1),
(11, 'dsad', 2),
(12, 'sda', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `estatus`
--
ALTER TABLE `estatus`
  ADD PRIMARY KEY (`codEstatus`);

--
-- Indexes for table `tien`
--
ALTER TABLE `tien`
  ADD PRIMARY KEY (`codTien`),
  ADD KEY `codEstatus` (`codEstatus`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `estatus`
--
ALTER TABLE `estatus`
  MODIFY `codEstatus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tien`
--
ALTER TABLE `tien`
  MODIFY `codTien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tien`
--
ALTER TABLE `tien`
  ADD CONSTRAINT `tien_ibfk_1` FOREIGN KEY (`codEstatus`) REFERENCES `estatus` (`codEstatus`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
