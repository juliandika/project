-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2017 at 02:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` tinyint(1) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Member');

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
-- Table structure for table `project_sessions`
--

CREATE TABLE `project_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_sessions`
--

INSERT INTO `project_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('jsffsnbli55ickjjugicgcbmh5oba2fj', '::1', 1495067291, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353036373239313b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b),
('murfjhvgmh4sha6lrn1sbohoaqvv7h70', '::1', 1495067297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353036373239373b);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `nama` varchar(11) NOT NULL,
  `email` varchar(11) NOT NULL,
  `notelepon` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`nama`, `email`, `notelepon`, `username`, `password`, `group`) VALUES
('Admin', 'admin@gmail', '12345', 'admin', '12345', 1),
('andre', 'andre', 'andre', 'andre', 'andre', 0),
('ayu', 'ayu@gmail.c', '12345', 'ayu', '25f9e794323b453885f5181f1b624d0b', 0),
('candra', 'aaa@gmail.c', '123456789', 'candra', '25f9e794323b453885f5181f1b624d0b', 0),
('jtgf', 'jfjgc', 'gcnjgcf', 'cngjf', 'fhj', 0),
('Made Erna S', 'ernasusanti', '081916544885', 'erna', 'ernaaaa', 0),
('gfgh', 'ngng', 'hgcngj', 'fjngv', 'hngc', 0),
('gfsrgf', 'hfdxhf', 'xfhx', 'fxbfh', 'xgv', 0),
('fdh', 'gdch', 'fvcd', 'gcg', 'gbncf', 0),
('erna', 'jhjmh', 'jhjmhv', 'jmhvh', 'hv mjhvj', 0),
('juliandika', 'juuliandika', '12345', 'juli', '12345', 0),
('erna', 'jhfv', 'jmhvj', 'mhvjm', 'vjm', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_sessions`
--
ALTER TABLE `project_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` tinyint(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
