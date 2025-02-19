-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2025 at 04:20 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rto`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `UserName` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `sr_no` varchar(100) NOT NULL,
  `First_Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`UserName`, `Pass`, `sr_no`, `First_Name`) VALUES
('krish@101', '1234', '101', 'Krish Patel');

-- --------------------------------------------------------

--
-- Table structure for table `car_register_data`
--

CREATE TABLE `car_register_data` (
  `Surname` varchar(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Father_Name` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Birth_Date` varchar(200) NOT NULL,
  `Phone_no` bigint(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Vehical_Name` varchar(200) NOT NULL,
  `Vehical_Type` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Action_Date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_register_data`
--

INSERT INTO `car_register_data` (`Surname`, `Name`, `Father_Name`, `Username`, `Pass`, `Birth_Date`, `Phone_no`, `Email`, `Address`, `State`, `City`, `Vehical_Name`, `Vehical_Type`, `Status`, `Action_Date`) VALUES
('Panchal', 'Dhruv', 'Rameshbhai', 'krish1604', '0001', '2023-06-15', 9876543210, 'dhruv@gmail.com', 'Dholka', 'Gujarat', 'Ahmedabad', 'Thar', 'Four Wheeler', 'pendding', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `Name`) VALUES
(1, 'Bhopal'),
(2, 'Ahmedabad'),
(3, 'Bhopal'),
(4, 'Rajkot'),
(5, 'Bhavnagar'),
(6, 'porbandar'),
(7, 'Gandhinagar');

-- --------------------------------------------------------

--
-- Table structure for table `driving_lis_data`
--

CREATE TABLE `driving_lis_data` (
  `First_Name` varchar(200) NOT NULL,
  `Middle_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Birth_Date` varchar(200) NOT NULL,
  `Phone_no` bigint(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Education` varchar(200) NOT NULL,
  `Licence_Type` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Action_Date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driving_lis_data`
--

INSERT INTO `driving_lis_data` (`First_Name`, `Middle_Name`, `Last_Name`, `Username`, `Pass`, `Birth_Date`, `Phone_no`, `Email`, `Address`, `State`, `City`, `Education`, `Licence_Type`, `Status`, `Action_Date`) VALUES
('Shah', 'Tirth', 'Hemantbhai', 'krish1604', '0001', '2021-04-16', 8749365309, 'tirth@gmail.com', 'Maninagar', 'Gujarat', 'Ahmedabad', 'Bsc IT', 'Four Wheeler', 'pendding', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `learning_lis_data`
--

CREATE TABLE `learning_lis_data` (
  `First_Name` varchar(200) NOT NULL,
  `Middle_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Birth_Date` varchar(200) NOT NULL,
  `Phone_no` bigint(20) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Address` varchar(300) NOT NULL,
  `State` varchar(200) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Education` varchar(200) NOT NULL,
  `Licence_Type` varchar(200) NOT NULL,
  `Status` varchar(200) NOT NULL,
  `Action_Date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `learning_lis_data`
--

INSERT INTO `learning_lis_data` (`First_Name`, `Middle_Name`, `Last_Name`, `Username`, `Pass`, `Birth_Date`, `Phone_no`, `Email`, `Address`, `State`, `City`, `Education`, `Licence_Type`, `Status`, `Action_Date`) VALUES
('krish', 'kalubhai', 'patel', 'krish1604', '0001', '2021-03-12', 490400, 'krish@gmail.com', 'nana chiloda', 'Gujarat', 'Ahmedabad', 'Bsc IT', 'Two Wheeler', 'Accept', '2025-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `Name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `Name`) VALUES
(1, 'Goa'),
(2, 'Gujarat'),
(3, 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `First_Name` varchar(200) NOT NULL,
  `Last_Name` varchar(200) NOT NULL,
  `Username` varchar(200) NOT NULL,
  `Pass` varchar(200) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Phone_no` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`First_Name`, `Last_Name`, `Username`, `Pass`, `Email`, `Phone_no`) VALUES
('krish', 'patel', 'krish1604', '1234', 'krish@gmail.com', 490400),
('krish', 'patel', 'krish1604', '0001', 'krish@gmail.com', 490400);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
