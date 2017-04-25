-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2017 at 08:39 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(3) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` int(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `register` (
  `nama` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`nama`, `email`, `notelepon`, `username`, `password`) VALUES
('andre', 'andre', 'andre', 'andre', 'andre'),
('fdh', 'gdch', 'fvcd', 'gcg', 'gbncf'),
('gfsrgf', 'hfdxhf', 'xfhx', 'fxbfh', 'xgv'),
('jtgf', 'jfjgc', 'gcnjgcf', 'cngjf', 'fhj'),
('erna', 'jhfv', 'jmhvj', 'mhvjm', 'vjm'),
('gfgh', 'ngng', 'hgcngj', 'fjngv', 'hngc'),
('erna', 'jhjmh', 'jhjmhv', 'jmhvh', 'hv mjhvj'),
('asdfg', 'ghj', '', '', ''),
('Made Erna S', 'ernasusanti', '081916544885', 'erna', 'ernaaaa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
