-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 02:34 PM
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
('murfjhvgmh4sha6lrn1sbohoaqvv7h70', '::1', 1495067297, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353036373239373b),
('n8aibqu1p0r0abv09kcg67mqna4m7vmu', '::1', 1495096719, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353039363731393b),
('arc8bgbmsqd37ka9oa9hdm5gbn21528p', '::1', 1495096720, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353039363731393b),
('b5cuc4is6anifh1gkbdumo7pu2f2p31h', '::1', 1495336367, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353333363336373b),
('mhlfbbijkihgm1oq34qon0ua7rivh4ll', '::1', 1495336816, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353333363831363b757365726e616d657c733a343a226a756c69223b67726f75707c733a313a2232223b),
('u31e5klluq4s35ffagsiknpaj7ko5q8r', '::1', 1495337362, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353333373336323b757365726e616d657c733a343a226a756c69223b67726f75707c733a313a2232223b),
('qgvgna4qn8bv4db4nnhal9v8ej1uh7af', '::1', 1495343094, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334333039343b757365726e616d657c733a343a226a756c69223b67726f75707c733a313a2232223b),
('n3cdinmhef5kvqifee5cq743aoc5p7kj', '::1', 1495343793, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334333739333b757365726e616d657c733a343a226a756c69223b67726f75707c733a313a2232223b),
('tubsltaofhr5of72qeq3ugrc6o7pkaqd', '::1', 1495345225, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334353232353b757365726e616d657c733a343a226a756c69223b67726f75707c733a313a2232223b6572726f727c733a32353a2257726f6e6720757365726e616d65202f2070617373776f7264223b5f5f63695f766172737c613a313a7b733a353a226572726f72223b733a333a226f6c64223b7d),
('6skbo1t6vvn0otn11ok17plult2d82mq', '::1', 1495346309, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334363330393b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b),
('o4q2rup45foqc1billmnhts45cfbhsjl', '::1', 1495346864, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334363836343b),
('2gof61pqnctlo58r34t1vlo23o0lv458', '::1', 1495347167, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334373136373b757365726e616d657c733a353a2261646d696e223b67726f75707c4e3b),
('3bj4urh865ubprqg9h88i2987dnntr80', '::1', 1495347946, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334373934363b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b),
('gb798p9qh0cmi4jfs20brsrghsu11n1d', '::1', 1495348355, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334383335353b757365726e616d657c733a353a2261646d696e223b67726f75707c733a313a2231223b),
('jkg2e91d5rhdovo5i7l0bf2ajvgq1f1r', '::1', 1495349671, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334393637313b),
('h780nd7g33q8cncqn86agt4or1lobg7u', '::1', 1495349685, 0x5f5f63695f6c6173745f726567656e65726174657c693a313439353334393638303b);

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
('juliandika', 'juuliandika', '12345', 'juli', '12345', 2),
('juli andika', 'juli', '12345', 'juli_andika', '827ccb0eea8a706c4c34a16891f84e7b', 2),
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
