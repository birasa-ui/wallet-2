-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 12:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `account`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `Id` int(100) NOT NULL,
  `username` varchar(90) NOT NULL,
  `email` varchar(90) NOT NULL,
  `password` varchar(90) NOT NULL,
  `received_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Id`, `username`, `email`, `password`, `received_id`) VALUES
(1, 'username', '0', '12345', NULL),
(2, 'qw', '0', '134', NULL),
(3, 'uytre', '123', '234', NULL),
(4, '12', '12', '12', NULL),
(5, 'diane', 'diane1212@gmail.com', 'diane', NULL),
(6, 'birasa', 'birasa@gmail.com', 'birasa', NULL),
(7, 'sis', 'sis@gmail.com', 'sis', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `received`
--

CREATE TABLE `received` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `received`
--

INSERT INTO `received` (`id`, `name`, `amount`) VALUES
(1, 'divine', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `id` int(80) NOT NULL,
  `name` varchar(120) NOT NULL,
  `balance` int(80) NOT NULL COMMENT '6000',
  `final_balance` int(11) NOT NULL,
  `send` int(255) NOT NULL,
  `amount_received` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wallet`
--

INSERT INTO `wallet` (`id`, `name`, `balance`, `final_balance`, `send`, `amount_received`) VALUES
(2, '', 1000, 0, 0, NULL),
(3, 'divine', 300, 0, 1000, NULL),
(4, 'divine', 300, 0, 1000, NULL),
(5, 'divine', 300, 0, 0, NULL),
(6, 'divine', 300, 0, 0, NULL),
(7, 'divine', 300, 0, 700, NULL),
(8, 'divine', 10000, 9700, 300, NULL),
(9, 'divine', 0, -200, 200, NULL),
(10, 'divine', 0, -300, 300, NULL),
(11, 'divine', 0, -300, 300, NULL),
(12, 'divine', 10000, 9700, 300, NULL),
(13, 'divine', 10000, 9800, 200, NULL),
(14, 'divine', 10000, 9700, 300, NULL),
(15, 'divine', 9700, 9400, 300, NULL),
(16, 'divine', 9400, 9200, 200, NULL),
(17, 'divine', 9200, 8900, 300, NULL),
(18, 'divine', 30, 20, 10, NULL),
(19, 'divine', 20000, 10000, 10000, NULL),
(20, 'divine', 20000, 10000, 10000, NULL),
(21, 'divine', 20000, 10000, 10000, NULL),
(22, 'divine', 30000, -9800, 20000, NULL),
(23, 'divine', 30000, 10200, 20000, NULL),
(24, 'ishimwe birasa divine', 30000, 9800, 20000, NULL),
(25, 'bruno', 300000, 99000, 200000, NULL),
(26, '', 0, 0, 0, NULL),
(27, '', 0, 0, 0, NULL),
(28, '', 0, 0, 0, NULL),
(29, '', 0, 0, 0, NULL),
(30, 'divine', 30000, 20000, 10000, NULL),
(31, 'keza', 30000, 9800, 20000, NULL),
(32, 'bruno', 9800, 9500, 300, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `received`
--
ALTER TABLE `received`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wallet`
--
ALTER TABLE `wallet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `amount_received` (`amount_received`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `received`
--
ALTER TABLE `received`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wallet`
--
ALTER TABLE `wallet`
  MODIFY `id` int(80) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `wallet`
--
ALTER TABLE `wallet`
  ADD CONSTRAINT `wallet_ibfk_1` FOREIGN KEY (`amount_received`) REFERENCES `received` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
