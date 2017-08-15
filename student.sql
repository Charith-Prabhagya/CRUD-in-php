-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2017 at 09:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `address`, `contact`) VALUES
(55, 'ervr', 'esf', 'wef'),
(654, 'sfsf', 'charith', 'hhhhhh'),
(890, 'hgc', 'adfc', 'advf'),
(963, 'acacsdvds', 'sdzvdzsvdzav', 'dszvsdzvdcv'),
(999, 'sdfca', 'asfcaS', 'sDCsad'),
(1478, 'fcac', 'esf', 'wef'),
(12345, 'acac', '', ''),
(67878, 'dgnffs', 'fsgnsfgn', 'sffsnfsn'),
(123456, 'acacrgb', 'rbgb', 'rbbegba'),
(257535, 'dfwf', 'hh', 'fhgfgf'),
(955555, 'sdfca', 'asfcaSfacaFC', 'sDCsaafcfd'),
(6545454, 'acac', 'trbr', 'rhrhr'),
(222222222, 'ascasc', 'sdvsdvsdv', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
