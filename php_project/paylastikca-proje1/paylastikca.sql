-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 30, 2023 at 08:46 AM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paylastikca`
--

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

DROP TABLE IF EXISTS `iletisim`;
CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adsoyad` varchar(30) NOT NULL,
  `telefon` varchar(11) NOT NULL,
  `email` varchar(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `konu` varchar(35) NOT NULL,
  `mesaj` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `telefon`, `email`, `konu`, `mesaj`) VALUES
(1, 'Ali', '55555555555', 'elizade@gmail.com', 'test', 'Ilk test'),
(2, 'Zahra Alizada', 'adcsd', 'elizade.zehra.ez@gmail.co', 'sdcsd', 'dsc'),
(3, 'Zahra Alizada', 'fbgf', 'elizade.zehra.ez@gmail.co', 'gfb', 'fbvd'),
(4, 'Zahra Alizada', 'adcsd', 'elizade.zehra.ez@gmail.co', 'Test', 'dscsdc'),
(5, 'fdcs', 'fbgf', 'elizade.zehra.ez@gmail.co', 'Test', 'sdcdc'),
(6, 'fdcs', 'adcsd', 'elizade.zehra.ez@gmail.co', 'dscs', 'fsdca'),
(7, 'dc', 'fbgf', 'elizade.zehra.ez@gmail.co', 'Test', 'fbd'),
(8, 'Zahra Alizada', 'fbgf', 'elizade.zehra.ez@gmail.co', 'Test', 'fvbd'),
(9, 'fdcsfd', 'dfv', 'elizade.zehra.ez@gmail.co', 'fv', 'dv'),
(10, 'Zahra Alizada', 'csdc', 'elizade.zehra.ez@gmail.com', 'sdc', 'csd');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
