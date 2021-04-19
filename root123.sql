-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 05:54 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `root123`
--

-- --------------------------------------------------------

--
-- Table structure for table `transferdetails`
--

CREATE TABLE `transferdetails` (
  `Sender` text NOT NULL,
  `Receipient` text NOT NULL,
  `Amount` float NOT NULL,
  `Time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transferdetails`
--

INSERT INTO `transferdetails` (`Sender`, `Receipient`, `Amount`, `Time`) VALUES
('Sheryl', 'Elcy', 1000, '2021-04-19 17:37:50'),
('Philip', 'Jacob', 2000, '2021-04-19 21:01:08'),
('Kezia', 'Teena', 1000, '2021-04-19 21:11:13'),
('Kezia', 'Teena', 1000, '2021-04-19 21:11:27'),
('Kezia', 'Teena', 1000, '2021-04-19 21:12:13'),
('Kezia', 'Teena', 1000, '2021-04-19 21:12:37'),
('Kezia', 'Teena', 1000, '2021-04-19 21:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'Sheryl', 'sheryl@gmail.com', 38000),
(2, 'Jacob', 'jacob@gmail.com', 32000),
(3, 'Philip', 'philip@gmail.com', 38000),
(4, 'Elcy', 'elcy@gmail.com', 57000),
(5, 'Sibyl', 'sibyl@gmail.com', 40000),
(6, 'Siril', 'siril@gmail.com', 30000),
(7, 'Kezia', 'kezia@gmail.com', 45000),
(8, 'Teena', 'teena@gmail.com', 45000),
(9, 'Emma', 'emma@gmail.com', 35000),
(10, 'Sandra', 'sandra@gmail.com', 50000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
