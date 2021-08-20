-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 05:55 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `userName` varchar(50) NOT NULL,
  `password` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`userName`, `password`) VALUES
('admin', '123');

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
('abc', 'Ratnapura', 551, '11@gmail.com', '11', '1629357387-joanna-kosinska-z7xmRaC2n90-unsplash.jpg'),
('abcdefg', 'Ratnapura', 55, '123@gmail.com', '11', '1629363441-simple-dragon-monochrome-wallpaper-preview.jpg'),
('abc', 'Ratnapura', 1, '1@gmail.com', '1', ''),
('abc', 'Ratnapura', 1, '8@gmail.com', '1', ''),
('abc', 'Ratnapura', 1234567, 'a1bcgmail.com', '2', ''),
('abc', 'Ratnapura', 1234567, 'a@gmail.com', '1', ''),
('abc', 'Ratnapura', 55, 'c@gmail.com', '1', '');

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
  `password` varchar(8) NOT NULL,
  `profilePic` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`fullName`, `farmerCode`, `farmName`, `farmAddress`, `farmArea`, `teleNumber`, `password`, `profilePic`) VALUES
('abc', '1234', 'abc', 'Ratnapura', 71, 1234567, '12', '1629402712-joanna-kosinska-z7xmRaC2n90-unsplash.jpg'),
('abc', '12347', 'abc', 'Ratnapura', 71, 1234567, '12', 'default.png'),
('abc', '12547', 'abc', 'Ratnapura', 71, 1234567, '12', 'default.png'),
('abc', '222', 'abc', 'Ratnapura', 71, 1234567, '2', '1629474713-043249e1aa491e06baa6ff029774b9b7536c43b3-1920x1080.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `farm_images`
--

CREATE TABLE `farm_images` (
  `id` int(11) NOT NULL,
  `farmerCode` varchar(5) NOT NULL,
  `farmPic` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `id` int(11) NOT NULL,
  `itemType` varchar(100) NOT NULL,
  `wastage` double NOT NULL,
  `soldQty` double NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `stockQty` double NOT NULL,
  `wastage` int(11) NOT NULL,
  `sellPrice` double DEFAULT NULL,
  `buyPrice` double NOT NULL,
  `itemType` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `pname`, `image`, `stockQty`, `wastage`, `sellPrice`, `buyPrice`, `itemType`, `quantity`) VALUES
(1, 'Avacado', 'ava.jpg', 500, 200, 300, 0, 'Fruits', '500g'),
(2, 'Banana', 'banana.jpg', 0, 0, 270, 0, 'Fruits', '250g'),
(3, 'Ceylon Olives', 'co.jpg', 0, 0, 500, 0, 'Fruits', '270g'),
(4, 'Dragon Fruit', 'dragon.png', 0, 0, 270, 0, 'Fruits', '500g'),
(5, 'Cocowa', 'cocowa.jpg', 0, 0, 255, 0, 'Fruits', '500g'),
(6, 'Durian', 'durian.jpg', 0, 0, 185, 0, 'Fruits', '500g'),
(7, 'Goosberry', 'goos.jpg', 0, 0, 185, 0, 'Fruits', '500g'),
(8, 'Guava', 'guava.jpg', 0, 0, 55, 0, 'Fruits', '500g'),
(9, 'Jack Fruit', 'jac.jpg', 0, 0, 55, 0, 'Fruits', '500g'),
(10, 'Jamanaran', 'jamanaran.jpg', 0, 0, 110, 0, 'Fruits', '500g'),
(11, 'Lovi-Lovi', 'lovi.jpg', 0, 0, 55, 0, 'Fruits', '500g'),
(12, 'Manago', 'mango.jpg', 0, 0, 95, 0, 'Fruits', '500g'),
(13, 'Mangosteen', 'mangus.jpg', 0, 0, 245, 0, 'Fruits', '500g'),
(14, 'Watermelon', 'melon.jpg', 0, 0, 75, 0, 'Fruits', '500g'),
(15, 'Orange', 'orange.jpg', 0, 0, 300, 0, 'Fruits', '500g'),
(16, 'Papapya', 'papaw.jpg', 0, 0, 70, 0, 'Fruits', '500g'),
(17, 'Passion Fruit', 'passion.jpg', 0, 0, 90, 0, 'Fruits', '500g'),
(18, 'Pineapple', 'pine.jpg', 0, 0, 77, 0, 'Fruits', '500g'),
(19, 'Pomegranate', 'pome.jpg', 0, 0, 575, 0, 'Fruits', '500g'),
(20, 'Roseapple', 'ra.jpg', 0, 0, 90, 0, 'Fruits', '500g'),
(21, 'Rabutan', 'ra.jpg', 0, 0, 160, 0, 'Fruits', '500g'),
(22, 'Velvet Tamarind', 'vel.jpg', 0, 0, 397.5, 0, 'Fruits', '500g'),
(23, 'Strawberry', 'stro.jpg', 0, 0, 397.5, 0, 'Fruits', '500g'),
(24, 'Beal Fruit', 'bf.jpg', 0, 0, 205, 0, 'Fruits', '500g'),
(25, 'Green Beans', 'be.jpg', 0, 0, 203.5, 0, 'Vegetables', '500g'),
(26, 'Beetroot', 'Vegetables\\beet.jpg', 0, 0, 250, 0, 'Vegetables', '500g'),
(27, 'Bitter Gourd', 'Vegetables\\bit.jpg', 0, 0, 213, 0, 'Vegetables', '250g'),
(28, 'Brinjal', 'Vegetables\\bri.jpg', 0, 0, 178, 0, 'Vegetables', '250g'),
(29, 'Broccali', 'Vegetables\\bro.jpeg', 0, 0, 345, 0, 'Vegetables', '500g'),
(30, 'Cabbage', 'Vegetables\\cab.jpg', 0, 0, 270, 0, 'Vegetables', '250g'),
(31, 'Capsicum', 'Vegetables\\capsi.jpg', 0, 0, 104, 0, 'Vegetables', '250g'),
(32, 'Carrot', 'Vegetables\\car.jpg', 0, 0, 162, 0, 'Vegetables', '250g'),
(33, 'Green Chilli', 'Vegetables\\gc.jpg', 0, 0, 80, 0, 'Vegetables', '100g'),
(34, 'Cucumber', 'Vegetables\\cucum.jpg', 0, 0, 190, 0, 'Vegetables', '500g'),
(35, 'Garlic', 'Vegetables\\gar.jpg', 0, 0, 171, 0, 'Vegetables', '250g'),
(36, 'Lime', 'Vegetables\\le.png', 0, 0, 83, 0, 'Vegetables', '100g'),
(37, 'Leeks', 'lee.jpg', 0, 0, 240, 0, 'Vegetables', '500g'),
(38, 'Luffa', 'lufa.jpg', 0, 0, 149, 0, 'Vegetables', '250g'),
(39, 'Lasia Stalk', 'lasi.jpg', 0, 0, 108, 0, 'Vegetables', '250g'),
(40, 'Mushroom', 'mush.jpg', 0, 0, 90, 0, 'Vegetables', '100g'),
(41, 'Okra', 'okra.jpg', 0, 0, 139, 0, 'Vegetables', '250g'),
(42, 'Potato', 'pota.jpg', 0, 0, 192, 0, 'Vegetables', '250g'),
(43, 'Pumpkin', 'pum.jpg', 0, 0, 200, 0, 'Vegetables', '500g'),
(44, 'Raddish', 'raddish.jpg', 0, 0, 195, 0, 'Vegetables', '500g'),
(45, 'Red Onion', 'ro.jpg', 0, 0, 225, 0, 'Vegetables', '250g'),
(46, 'Snake Gourd', 'snake.png', 0, 0, 90, 0, 'Vegetables', '500g'),
(47, 'Tibbatu', 'tb.jpg', 0, 0, 230, 0, 'Vegetables', '500g'),
(48, 'Tomato', 'tom.jpg', 0, 0, 357, 0, 'Vegetables', '250g'),
(49, 'Winged Beans', 'wb.jpg', 0, 0, 207, 0, 'Vegetables', '250g'),
(50, 'Ash Plantain', 'ash.jpg', 0, 0, 500, 0, 'Vegetables', '500g'),
(51, 'Big Onion', 'bigo.jpeg', 0, 0, 270, 0, 'Vegetables', '250g'),
(52, 'Gotukola', 'gotu.jpg', 0, 0, 70, 0, 'Leaves', '1 Unit'),
(53, 'Kankun', 'kankun.jpg', 0, 0, 70, 0, 'Leaves', '1 Unit'),
(54, 'Mukunuwenna', 'mukunu.jpg', 0, 0, 70, 0, 'Leaves', '1 Unit'),
(55, 'Niwithi', 'niwi.jpeg', 0, 0, 70, 0, 'Leaves', '1 Unit'),
(56, 'Thampala', 'tham.jpg', 0, 0, 70, 0, 'Leaves', '1 Unit'),
(57, 'Sarana', 'sara.jpeg', 0, 0, 70, 0, 'Leaves', '1 Unit');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `stockQty` double NOT NULL,
  `sellPrice` double DEFAULT NULL,
  `buyPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`id`, `pname`, `image`, `stockQty`, `sellPrice`, `buyPrice`) VALUES
(1, 'Gotukola', 'Leaves/gotu.jpg', 0, 70, 0),
(2, 'Kankun', 'Leaves\\kankun.jpg', 0, 70, 0),
(3, 'Mukunuwenna', 'Leaves\\mukunu.jpg', 0, 70, 0),
(4, 'Niwithi', 'Leaves\\niwi.jpeg', 0, 70, 0),
(5, 'Thampala', 'Leaves\\tham.jpg', 0, 70, 0),
(6, 'Sarana', 'Leaves\\sara.jpeg', 0, 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `stockQty` double NOT NULL,
  `sellPrice` double DEFAULT NULL,
  `buyPrice` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vegetables`
--

INSERT INTO `vegetables` (`id`, `pname`, `image`, `stockQty`, `sellPrice`, `buyPrice`) VALUES
(1, 'Greeen Beans', 'Vegetables\\be.jpg', 0, 203.5, 0),
(2, 'Beetroot', 'Vegetables\\beet.jpg', 0, 250, 0),
(3, 'Bitter Gourd', 'Vegetables\\bit.jpg', 0, 213, 0),
(6, 'Brinjal', 'Vegetables\\bri.jpg', 0, 178, 0),
(7, 'Broccali', 'Vegetables\\bro.jpeg', 0, 345, 0),
(8, 'Cabbage', 'Vegetables\\cab.jpg', 0, 270, 0),
(9, 'Capsicum', 'Vegetables\\capsi.jpg', 0, 104, 0),
(10, 'Carrot', 'Vegetables\\car.jpg', 0, 162, 0),
(11, 'Green Chilli', 'Vegetables\\gc.jpg', 0, 80, 0),
(12, 'Cucumber', 'Vegetables\\cucum.jpg', 0, 190, 0),
(13, 'Garlic', 'Vegetables\\gar.jpg', 0, 171, 0),
(14, 'Lime', 'Vegetables\\le.png', 0, 83, 0),
(15, 'Leeks', 'Vegetables\\lee.jpg', 0, 240, 0),
(16, 'Luffa', 'Vegetables\\lufa.jpg', 0, 149, 0),
(17, 'Lasia Stalk', 'Vegetables\\lasi.jpg', 0, 108, 0),
(18, 'Mushroom', 'Vegetables\\mush.jpg', 0, 90, 0),
(19, 'Okra', 'Vegetables\\okra.jpg', 0, 139, 0),
(20, 'Potato', 'Vegetables\\pota.jpg', 0, 192, 0),
(21, 'Pumpkin', 'Vegetables\\pum.jpg', 0, 200, 0),
(22, 'Raddish', 'Vegetables\\raddish.jpg', 0, 195, 0),
(23, 'Red Onion', 'Vegetables\\ro.jpg', 0, 225, 0),
(24, 'Snake Gourd', 'Vegetables\\snake.png', 0, 90, 0),
(25, 'Tibbatu', 'Vegetables\\tb.jpg', 0, 230, 0),
(26, 'Tomato', 'Vegetables\\tom.jpg', 0, 357, 0),
(27, 'Winged Beans', 'Vegetables\\wb.jpg', 0, 207, 0),
(28, 'Ash Plantain', 'Vegetables\\ash.jpg', 0, 500, 0),
(30, 'Big Onion', 'Vegetables\\bigo.jpeg', 0, 270, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`userName`);

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
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pname` (`pname`);

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
-- AUTO_INCREMENT for table `farm_images`
--
ALTER TABLE `farm_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
