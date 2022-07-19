-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 04:55 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--
CREATE DATABASE bank_system;
-- --------------------------------------------------------
USE bank_system;
--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `Name`, `email`, `balance`) VALUES
(1, 'Dhawanil Malik', 'dhawanil.malik@gmail.com', 689500),
(2, 'Mandeep Singh', 'mandeepsingh@gmail.com', 28000),
(3, 'Anjana Sharma', 'anjana.sharma@yahoo.com', 38900),
(4, 'Iswarya Verma', 'iswaryaverma@gmail.com', 489700),
(5, 'Pranjal Aggrawal', 'pranjal.aggrwal@yahoo.com', 124000),
(6, 'Ishita Rao', 'ishita.rao@gmail.com', 21000),
(7, 'Sanket Batra', 'sanketbatra@gmail.com', 89750),
(8, 'Manya Yadav', 'manyayadav@yahoo.com', 46000),
(9, 'Aaron James', 'aaron.jamess@yahoo.com', 8200),
(10, 'Priya Wagh', 'priya.wagh@gmail.com', 32700);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `his_id` int(11) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `reciever` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`his_id`, `sender`, `reciever`, `amount`) VALUES
(1, 'Dhawanil Malik', 'Manya Yadav', 700),
(2, 'Sanket Batra', 'Priya Wagh', 1200),
(3, 'Iswarya Verma', 'Dhawanil Malik', 2300),
(4, 'Pranjal Aggrawal', 'Mandeep Singh', 650),
(5, 'Manya Yadav', 'Aaron James', 2100),
(6, 'Anjana Sharma', 'Sanket Batra', 3000),
(7, 'Dhawanil Malik', 'Ishita Rao', 12000),
(8, 'Aaron James', 'Anjana Sharma', 1800);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`his_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `his_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;