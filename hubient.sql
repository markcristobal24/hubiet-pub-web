-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 03:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hubient`
--

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE `archive` (
  `reserveId` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `packageType` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`reserveId`, `name`, `packageType`, `date`, `price`) VALUES
(62, 'Arvin Bok', 'Package #1', '2022-12-20', 'PHP2,500'),
(63, 'Arvin Bok', 'Package #3', '2022-12-18', 'PHP5,000'),
(67, 'Arvin Bok', 'Package #1', '2022-12-20', 'PHP2,500'),
(68, 'Arvin Bok', 'Package #1', '2022-12-22', 'PHP2,500'),
(69, 'Arvin Bok', 'Package #2', '2022-12-24', 'PHP3,000'),
(70, 'Arvin Bok', 'Package #3', '2022-12-30', 'PHP5,000'),
(71, 'Raimer Dela Cruz', 'Package #1', '2022-12-23', 'PHP2,500'),
(74, 'Arvin Bok', 'Package #1', '2022-12-24', 'PHP2,500');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerId` int(100) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phoneNumber` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerId`, `firstName`, `lastName`, `email`, `username`, `password`, `phoneNumber`) VALUES
(12, 'Raimer', 'Dela Cruz', 'raimer@gmail.com', 'raimer', '1234', '09392049932'),
(13, 'Mark', 'Cristobal', 'joshcristobal13@gmail.com', 'mark', '1234', '09236538628'),
(14, 'Arvin', 'Bok', 'arvin@bok', 'arvin', '1234', '09392049932');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentId` int(255) NOT NULL,
  `reserveId` int(255) NOT NULL,
  `gcash` varchar(255) NOT NULL,
  `reference` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentId`, `reserveId`, `gcash`, `reference`, `amount`) VALUES
(5, 52, '123123', '234234', '3000'),
(6, 53, '09392049932', '123234', '2500'),
(7, 57, '09236538628', '124234', '2500'),
(8, 62, '234234', '2342342', 'PHP2,500'),
(9, 63, '234234', '234234', 'PHP5,000'),
(10, 63, '234234', '234234', 'PHP5,000'),
(11, 63, 'asdasd', 'asdasd', 'PHP5,000'),
(12, 67, '34534', '243234', 'PHP2,500'),
(13, 68, '12234', '1342342', ''),
(14, 69, '123123', '234234', ''),
(15, 70, '124234', '234234', ''),
(16, 71, '09392049932', '2342342', ''),
(17, 74, '456456', '456456', '');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `reserveId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `noPeople` int(255) NOT NULL,
  `date` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `price` varchar(255) NOT NULL,
  `packageType` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`reserveId`, `name`, `email`, `phone`, `noPeople`, `date`, `message`, `price`, `packageType`, `status`) VALUES
(72, 'Arvin Bok', 'arvin@bok', '09392049932', 3, '2022-12-18', '', 'PHP2,500', 'Package #1', 'Unpaid'),
(73, 'Arvin Bok', 'arvin@bok', '09392049932', 3, '2022-12-19', '', 'PHP2,500', 'Package #1', 'Unpaid'),
(75, 'Arvin Bok', 'arvin@bok', '09392049932', 25, '2022-12-29', '', 'PHP5,000', 'Package #3', 'Unpaid'),
(79, 'Arvin Bok', 'arvin@bok', '09392049932', 12, '2023-01-06', '', 'PHP3,000', 'Package #2', 'Unpaid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `archive`
--
ALTER TABLE `archive`
  ADD PRIMARY KEY (`reserveId`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerId`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentId`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`reserveId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `archive`
--
ALTER TABLE `archive`
  MODIFY `reserveId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentId` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `reserveId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
