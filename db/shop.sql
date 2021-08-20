-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2021 at 04:44 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `misga`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `fullName` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `teleNumber` bigint(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(8) NOT NULL,
  `profilePic` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullName`, `address`, `teleNumber`, `email`, `password`, `profilePic`) VALUES
('abc', 'Ratnapura', 55, '11@gmail.com', '1', 'default.png'),
('Saman kumara', 'Ratnapura', 75456456, '123@gmail.com', '111', '1629308325-playstore.png'),
('abc', 'Ratnapura', 1, '1@gmail.com', '1', 'default.png'),
('abc', 'Ratnapura', 1, '8@gmail.com', '1', 'default.png'),
('abc', 'Ratnapura', 1234567, 'a1bcgmail.com', '2', 'default.png'),
('abc', 'Ratnapura', 1234567, 'a@gmail.com', '1', 'default.png'),
('abc', 'Ratnapura', 55, 'c@gmail.com', '1', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `fullName` varchar(100) NOT NULL,
  `farmerCode` varchar(5) NOT NULL,
  `farmName` varchar(100) NOT NULL,
  `farmAddress` varchar(200) NOT NULL,
  `farmArea` float NOT NULL,
  `teleNumber` bigint(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `profilePic` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fullName`, `farmerCode`, `farmName`, `farmAddress`, `farmArea`, `teleNumber`, `password`, `profilePic`) VALUES
('carolis appu', '1234', 'thurusewana', 'Ratnapu', 712, 92233, '123', '1629311332-farmer.PNG'),
('abc', '12347', 'abc', 'Ratnapura', 71, 1234567, '123', 'default.png'),
('abc', '12547', 'abc', 'Ratnapura', 71, 1234567, '123', 'default.png'),
('ghh', '4434', 'fdg', 'sfdsf', 1213, 123354, '123', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `farm_images`
--

CREATE TABLE `farm_images` (
  `id` int(11) NOT NULL,
  `farmerCode` varchar(5) NOT NULL,
  `farmPic` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmerCode`);

--
-- Indexes for table `farm_images`
--
ALTER TABLE `farm_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `farm_images`
--
ALTER TABLE `farm_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
