-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2017 at 02:50 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `image` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(1, 'HVS A4 B/w 70 g', 'Deskripsi Produk', 400, 'paper-480538_960_720.jpg'),
(2, 'HVS A4 Color 80 g', 'Deskripsi Produk', 1500, 'paper-480538_960_7201.jpg'),
(3, 'HVS A3 Color 80 g', 'Deskripsi Produk', 3000, 'paper-480538_960_7202.jpg'),
(4, 'Art Paper A3 150 g', 'Deskripsi Produk', 4000, 'paper-480538_960_7203.jpg'),
(5, 'Glossy Photo Paper A4 230 g', 'Deskripsi Produk', 3000, 'paper-480538_960_7204.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `nama` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama`, `email`, `notelepon`, `username`, `password`) VALUES
('andre', 'andre', 'andre', 'andre', 'andre'),
('ayu', 'ayu@gmail.c', '12345', 'ayu', '25f9e794323b453885f5181f1b624d0b'),
('candra', 'aaa@gmail.c', '123456789', 'candra', '25f9e794323b453885f5181f1b624d0b'),
('jtgf', 'jfjgc', 'gcnjgcf', 'cngjf', 'fhj'),
('Made Erna S', 'ernasusanti', '081916544885', 'erna', 'ernaaaa'),
('gfgh', 'ngng', 'hgcngj', 'fjngv', 'hngc'),
('gfsrgf', 'hfdxhf', 'xfhx', 'fxbfh', 'xgv'),
('fdh', 'gdch', 'fvcd', 'gcg', 'gbncf'),
('erna', 'jhjmh', 'jhjmhv', 'jmhvh', 'hv mjhvj'),
('erna', 'jhfv', 'jmhvj', 'mhvjm', 'vjm');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
