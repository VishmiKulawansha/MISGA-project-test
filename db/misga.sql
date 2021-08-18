-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 03:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

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
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`fullName`, `address`, `teleNumber`, `email`, `password`) VALUES
('abc', 'Ratnapura', 55, '11@gmail.com', '1'),
('abcdefg', 'Ratnapura', 55, '123@gmail.com', '11'),
('abc', 'Ratnapura', 1, '1@gmail.com', '1'),
('abc', 'Ratnapura', 1, '8@gmail.com', '1'),
('abc', 'Ratnapura', 1234567, 'a1bcgmail.com', '2'),
('abc', 'Ratnapura', 1234567, 'a@gmail.com', '1'),
('abc', 'Ratnapura', 55, 'c@gmail.com', '1');

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
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fullName`, `farmerCode`, `farmName`, `farmAddress`, `farmArea`, `teleNumber`, `password`) VALUES
('abc', '1234', 'abc', 'Ratnapura', 71, 1234567, '123'),
('abc', '12347', 'abc', 'Ratnapura', 71, 1234567, '147'),
('abc', '12547', 'abc', 'Ratnapura', 71, 1234567, '159');

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `pname`, `image`, `quantity`, `price`) VALUES
(1, 'Avacado', 'Fruits/ava.jpg', '500g', 300),
(2, 'Banana', 'Fruits\\banana.jpg', '250g', 270),
(3, 'Ceylon Olives', 'Fruits\\co.jpg', '270g', 500),
(4, 'Dragon Fruit', 'Fruits\\dragon.png', '500g', 270),
(5, 'Cocowa', 'Fruits\\cocowa.jpg', '500g', 255),
(6, 'Durian', 'Fruits\\durian.jpg', '500g', 185),
(7, 'Goosberry', 'Fruits\\goos.jpg', '500g', 185),
(8, 'Guava', 'Fruits\\guava.jpg', '500g', 55),
(9, 'Jack Fruit', 'Fruits\\jac.jpg', '500g', 55),
(10, 'Jamanaran', 'Fruits\\jamanaran.jpg', '500g', 110),
(11, 'Lovi-Lovi', 'Fruits\\lovi.jpg', '500g', 55),
(12, 'Manago', 'Fruits\\mango.jpg', '500g', 95),
(13, 'Mangosteen', 'Fruits\\mangus.jpg', '500g', 245),
(14, 'Watermelon', 'Fruits\\melon.jpg', '500g', 75),
(15, 'Orange', 'Fruits\\orange.jpg', '500g', 300),
(16, 'Papapya', 'Fruits\\papaw.jpg', '500g', 70),
(17, 'Passion Fruit', 'Fruits\\passion.jpg', '500g', 90),
(18, 'Pineapple', 'Fruits\\pine.jpg', '500g', 77),
(19, 'Pomegranate', 'Fruits\\pome.jpg', '500g', 575),
(20, 'Roseapple', 'Fruits\\ra.jpg', '500g', 90),
(21, 'Rabutan', 'Fruits\\ra.jpg', '500g', 160),
(22, 'Velvet Tamarind', 'Fruits\\vel.jpg', '500g', 397.5),
(23, 'Strawberry', 'Fruits\\stro.jpg', '500g', 397.5),
(24, 'Beal Fruit', 'Fruits\\bf.jpg', '500g', 205);

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `pname`, `image`, `quantity`, `price`) VALUES
(1, 'Gotukola', 'Leaves/gotu.jpg', ' 1 Unit', 70),
(2, 'Kankun', 'Leaves\\kankun.jpg', '1 Unit', 70),
(3, 'Mukunuwenna', 'Leaves\\mukunu.jpg', '1 Unit', 70),
(4, 'Niwithi', 'Leaves\\niwi.jpeg', '1 Unit', 70),
(5, 'Thampala', 'Leaves\\tham.jpg', '1 Unit', 70),
(6, 'Sarana', 'Leaves\\sara.jpeg', '1 Unit', 70);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `pname`, `image`, `quantity`, `price`) VALUES
(1, 'Greeen Beans', 'Vegetables\\be.jpg', '500g', 203.5),
(2, 'Beetroot', 'Vegetables\\beet.jpg', '500g', 250),
(3, 'Bitter Gourd', 'Vegetables\\bit.jpg', '250g', 213),
(6, 'Brinjal', 'Vegetables\\bri.jpg', '250g', 178),
(7, 'Broccali', 'Vegetables\\bro.jpeg', '500g', 345),
(8, 'Cabbage', 'Vegetables\\cab.jpg', '250g', 270),
(9, 'Capsicum', 'Vegetables\\capsi.jpg', '250g', 104),
(10, 'Carrot', 'Vegetables\\car.jpg', '250g', 162),
(11, 'Green Chilli', 'Vegetables\\gc.jpg', '100g', 80),
(12, 'Cucumber', 'Vegetables\\cucum.jpg', '500g', 190),
(13, 'Garlic', 'Vegetables\\gar.jpg', '250g', 171),
(14, 'Lime', 'Vegetables\\le.png', '100g', 83),
(15, 'Leeks', 'Vegetables\\lee.jpg', '500g', 240),
(16, 'Luffa', 'Vegetables\\lufa.jpg', '250g', 149),
(17, 'Lasia Stalk', 'Vegetables\\lasi.jpg', '250g', 108),
(18, 'Mushroom', 'Vegetables\\mush.jpg', '100g', 90),
(19, 'Okra', 'Vegetables\\okra.jpg', '250g', 139),
(20, 'Potato', 'Vegetables\\pota.jpg', '250g', 192),
(21, 'Pumpkin', 'Vegetables\\pum.jpg', '500g', 200),
(22, 'Raddish', 'Vegetables\\raddish.jpg', '500g', 195),
(23, 'Red Onion', 'Vegetables\\ro.jpg', '250g', 225),
(24, 'Snake Gourd', 'Vegetables\\snake.png', '500g', 90),
(25, 'Tibbatu', 'Vegetables\\tb.jpg', '500g', 230),
(26, 'Tomato', 'Vegetables\\tom.jpg', '250g', 357),
(27, 'Winged Beans', 'Vegetables\\wb.jpg', '250g', 207),
(28, 'Ash Plantain', 'Vegetables\\ash.jpg', '230', 500),
(30, 'Big Onion', 'Vegetables\\bigo.jpeg', '500g', 270);

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
  ADD PRIMARY KEY (`farmerCode`),
  ADD UNIQUE KEY `password` (`password`);

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
