-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 20, 2021 at 07:52 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `man_product`
--

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `CODEP` int(11) NOT NULL AUTO_INCREMENT,
  `LABELP` varchar(20) NOT NULL,
  `DESCRIPTIONP` text NOT NULL,
  `PHOTOP` varchar(60) NOT NULL,
  PRIMARY KEY (`CODEP`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produit`
--

INSERT INTO `product` (`CODEP`, `LABELP`, `DESCRIPTIONP`, `PHOTOP`) VALUES
(44, 'pc', '45 bell', 'ord3.jpg'),
(40, 'ROUTER', 'DIR 816L AC750 cloud router', 'router2.PNG'),
(39, 'ROUTER', 'Wireless N300- Multiwan router', 'router1.PNG'),
(36, 'SWITCH', '5 port -10/100 Mbps no gestionable', 'switch.PNG'),
(35, 'HUB', 'hub usb 3.0 - 4 port', 'hub.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `login` varchar(30) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`login`, `password`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 1),
('user', 'ee11cbb19052e40b07aac0ca060c23ee', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
