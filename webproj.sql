-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2022 at 12:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `pid` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` char(8) DEFAULT NULL,
  `age` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`pid`, `name`, `email`, `phone`, `age`) VALUES
(1101, 'Mazin', 'Mazin@gmail.com', '98769876', 19),
(1102, 'Abdullah', 'Abdulaah@gmail.com', '96767128', 32),
(1103, 'Ahmed', 'Ahmed@gmail.com', '98763476', 23),
(1104, 'Abdulaziz', 'Abdulaziz@gmail.com', '98764536', 43),
(1105, 'julanda', 'julanda@gmail.com', '98790344', 29),
(1106, 'huda', 'huda@gmail.com', '99321434', 31),
(1107, 'abir', 'abir@gmail.com', '99879545', 25);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` varchar(5) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `price` int(3) DEFAULT NULL,
  `quantity` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`) VALUES
('ad1', 'adol', 1, 10),
('vn1', 'ventolin', 2, 8),
('abtc3', 'antiBiotics', 3, 11),
('pnd2', 'Panadol', 1, 20),
('vpr', 'VapoRub', 1, 17),
('bnd1', 'Bandaid', 2, 13),
('strps', 'Strepsils', 1, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`pid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
