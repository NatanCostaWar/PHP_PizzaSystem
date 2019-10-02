-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 02-Out-2019 às 18:45
-- Versão do servidor: 5.6.13
-- versão do PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `db_pizzasystem`
--
CREATE DATABASE IF NOT EXISTS `db_pizzasystem` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_pizzasystem`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `client`
--

INSERT INTO `client` (`id`, `name`, `address`, `phone`) VALUES
(3, 'Haseeb Elliott', '4072 Ben Street', 2025550112),
(4, 'Carmen Maxwell', '1510 Marion Drive', 2025550183),
(5, 'Eve Wilkinson', '499 Highland View Drive', 2025550158),
(6, 'Ayden Markham', '72 Gerald L. Bates Drive', 2147483647),
(7, 'Roy Love', '2529 Cityview Drive', 2147483647),
(8, 'Meredith Friedman', '987 Zappia Drive', 2026194096),
(9, 'Macsen Hebert', '2058 Stanton Hollow Road', 2147483647);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pizza`
--

CREATE TABLE IF NOT EXISTS `pizza` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `price` float NOT NULL DEFAULT '0',
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Extraindo dados da tabela `pizza`
--

INSERT INTO `pizza` (`id`, `name`, `price`, `description`) VALUES
(6, 'Margherita', 34.8, 'Tomato sauce, mozzarella, and oregano'),
(7, 'Marinara', 23.46, 'Tomato sauce, garlic and basil'),
(8, 'Quattro Stagioni', 38, 'Tomato sauce, mozzarella, mushrooms, ham, artichokes, olives, and oregano'),
(9, 'Carbonara', 46, 'Tomato sauce, mozzarella, parmesan, eggs, and bacon'),
(10, 'Frutti di Mare', 14, 'Tomato sauce and seafood'),
(11, 'Napoli', 25, 'Tomato sauce, mozzarella, oregano, anchovies'),
(12, 'Montanara', 67, 'Tomato sauce, mozzarella, mushrooms, pepperoni, and Stracchino (soft cheese)'),
(13, 'Emiliana', 34, 'Tomato sauce, mozzarella, eggplant, boiled potatoes, and sausage'),
(14, 'Gorgonzola', 18, 'Tomato sauce, mozzarella, gorgonzola, and olives');

-- --------------------------------------------------------

--
-- Estrutura da tabela `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(300) NOT NULL,
  `notes` text NOT NULL,
  `pizza` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `pizzaID` (`pizza`) COMMENT 'foreign key'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `password` varchar(128) NOT NULL,
  `hierarchy` varchar(100) NOT NULL DEFAULT 'member',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`pizza`) REFERENCES `pizza` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
