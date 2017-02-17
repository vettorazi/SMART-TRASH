-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 28, 2017 at 06:11 PM
-- Server version: 5.5.54-0+deb8u1
-- PHP Version: 5.6.29-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `estoque`
--

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
`id` int(10) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `codigo` varchar(50) DEFAULT NULL,
  `tipo` varchar(50) NOT NULL,
  `qtd` int(3) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `nome`, `codigo`, `tipo`, `qtd`) VALUES
(5, 'coca cola', '555', 'plastico', -2),
(6, 'banana', '123', 'organico', 1),
(7, 'maça', '159753', 'organico', 22),
(8, 'lata de massa de tomate', '6859', 'metal', 3),
(11, 'macarrão', '195675', 'plastico', 6),
(13, 'biscoito', '8949949', 'papel', 1),
(18, 'cerveja', '494949487', 'metal', 52),
(22, 'figueira', '252525', 'organico', 98),
(23, 'termogenico', '2147483647', 'plastico', 17),
(24, 'termogenico K', '2147483647', 'plastico', 10),
(25, 'termogenico', '2147483647', 'plastico', 10),
(26, 'termogenico thermo K', '2147483647', 'plastico', 11),
(27, 'termogenico Thermo K', '742832522021', 'plastico', -18),
(28, 'adaptador de tomada', '7896586816615', 'plastico', 83);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
