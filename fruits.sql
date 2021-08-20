-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 06:02 PM
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
-- Database: `misga2.sql`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(11) NOT NULL,
  `pname` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'default.png',
  `stockQty` double NOT NULL,
  `sellPrice` double DEFAULT NULL,
  `buyPrice` double NOT NULL,
  `itemType` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `pname`, `image`, `stockQty`, `sellPrice`, `buyPrice`, `itemType`, `quantity`) VALUES
(1, 'Avacado', 'assets/uploads/items/Fruits/ava.jpg', 0, 300, 0, 'Fruits', '500g'),
(2, 'Banana', 'assets/uploads/items/fruits/banana.jpg', 0, 270, 0, 'Fruits', '250g'),
(3, 'Ceylon Olives', 'assets/uploads/items/fruits/co.jpg', 0, 500, 0, 'Fruits', '270g'),
(4, 'Dragon Fruit', 'assets/uploads/items/fruits/dragon.png', 0, 270, 0, 'Fruits', '500g'),
(5, 'Cocowa', 'assets/uploads/items/fruits/cocowa.jpg', 0, 255, 0, 'Fruits', '500g'),
(6, 'Durian', 'assets/uploads/items/fruits/durian.jpg', 0, 185, 0, 'Fruits', '500g'),
(7, 'Goosberry', 'assets/uploads/items/fruits/goos.jpg', 0, 185, 0, 'Fruits', '500g'),
(8, 'Guava', 'assets/uploads/items/fruits/guava.jpg', 0, 55, 0, 'Fruits', '500g'),
(9, 'Jack Fruit', 'assets/uploads/items/fruits/jac.jpg', 0, 55, 0, 'Fruits', '500g'),
(10, 'Jamanaran', 'assets/uploads/items/fruits/jamanaran.jpg', 0, 110, 0, 'Fruits', '500g'),
(11, 'Lovi-Lovi', 'assets/uploads/items/fruits/lovi.jpg', 0, 55, 0, 'Fruits', '500g'),
(12, 'Manago', 'assets/uploads/items/fruits/mango.jpg', 0, 95, 0, 'Fruits', '500g'),
(13, 'Mangosteen', 'assets/uploads/items/fruits/mangus.jpg', 0, 245, 0, 'Fruits', '500g'),
(14, 'Watermelon', 'assets/uploads/items/fruits/melon.jpg', 0, 75, 0, 'Fruits', '500g'),
(15, 'Orange', 'assets/uploads/items/fruits/orange.jpg', 0, 300, 0, 'Fruits', '500g'),
(16, 'Papapya', 'assets/uploads/items/fruits/papaw.jpg', 0, 70, 0, 'Fruits', '500g'),
(17, 'Passion Fruit', 'assets/uploads/items/fruits/passion.jpg', 0, 90, 0, 'Fruits', '500g'),
(18, 'Pineapple', 'assets/uploads/items/fruits/pine.jpg', 0, 77, 0, 'Fruits', '500g'),
(19, 'Pomegranate', 'assets/uploads/items/fruits/pome.jpg', 0, 575, 0, 'Fruits', '500g'),
(20, 'Roseapple', 'assets/uploads/items/fruits/ra.jpg', 0, 90, 0, 'Fruits', '500g'),
(21, 'Rabutan', 'assets/uploads/items/fruits/ra.jpg', 0, 160, 0, 'Fruits', '500g'),
(22, 'Velvet Tamarind', 'assets/uploads/items/fruits/vel.jpg', 0, 397.5, 0, 'Fruits', '500g'),
(23, 'Strawberry', 'assets/uploads/items/fruits/stro.jpg', 0, 397.5, 0, 'Fruits', '500g'),
(24, 'Beal Fruit', 'assets/uploads/items/fruits/bf.jpg', 0, 205, 0, 'Fruits', '500g'),
(25, 'Green Beans', 'assets/uploads/items/Vegetables/be.jpg', 0, 203.5, 0, 'Vegetables', '500g'),
(26, 'Beetroot', 'assets/uploads/items/Vegetables/beet.jpg', 0, 250, 0, 'Vegetables', '500g'),
(27, 'Bitter Gourd', 'assets/uploads/items/Vegetables/bit.jpg', 0, 213, 0, 'Vegetables', '250g'),
(28, 'Brinjal', 'assets/uploads/items/Vegetables/bri.jpg', 0, 178, 0, 'Vegetables', '250g'),
(29, 'Broccali', 'assets/uploads/items/Vegetables/bro.jpeg', 0, 345, 0, 'Vegetables', '500g'),
(30, 'Cabbage', 'assets/uploads/items/Vegetables/cab.jpg', 0, 270, 0, 'Vegetables', '250g'),
(31, 'Capsicum', 'assets/uploads/items/Vegetables/capsi.jpg', 0, 104, 0, 'Vegetables', '250g'),
(32, 'Carrot', 'assets/uploads/items/Vegetables/car.jpg', 0, 162, 0, 'Vegetables', '250g'),
(33, 'Green Chilli', 'assets/uploads/items/Vegetables/gc.jpg', 0, 80, 0, 'Vegetables', '100g'),
(34, 'Cucumber', 'assets/uploads/items/Vegetables/cucum.jpg', 0, 190, 0, 'Vegetables', '500g'),
(35, 'Garlic', 'assets/uploads/items/Vegetables/gar.jpg', 0, 171, 0, 'Vegetables', '250g'),
(36, 'Lime', 'assets/uploads/items/Vegetables/le.png', 0, 83, 0, 'Vegetables', '100g'),
(37, 'Leeks', 'assets/uploads/items/Vegetables/lee.jpg', 0, 240, 0, 'Vegetables', '500g'),
(38, 'Luffa', 'assets/uploads/items/Vegetables/lufa.jpg', 0, 149, 0, 'Vegetables', '250g'),
(39, 'Lasia Stalk', 'assets/uploads/items/Vegetables/ls.jpg', 0, 108, 0, 'Vegetables', '250g'),
(40, 'Mushroom', 'assets/uploads/items/Vegetables/mush.jpg', 0, 90, 0, 'Vegetables', '100g'),
(41, 'Okra', 'assets/uploads/items/Vegetables/okra.jpg', 0, 139, 0, 'Vegetables', '250g'),
(42, 'Potato', 'assets/uploads/items/Vegetables/pota.jpg', 0, 192, 0, 'Vegetables', '250g'),
(43, 'Pumpkin', 'assets/uploads/items/Vegetables/pum.jpg', 0, 200, 0, 'Vegetables', '500g'),
(44, 'Raddish', 'assets/uploads/items/Vegetables/raddish.jpg', 0, 195, 0, 'Vegetables', '500g'),
(45, 'Red Onion', 'assets/uploads/items/Vegetables/ro.jpg', 0, 225, 0, 'Vegetables', '250g'),
(46, 'Snake Gourd', 'assets/uploads/items/Vegetables/snake.png', 0, 90, 0, 'Vegetables', '500g'),
(47, 'Tibbatu', 'assets/uploads/items/Vegetables/tb.jpg', 0, 230, 0, 'Vegetables', '500g'),
(48, 'Tomato', 'assets/uploads/items/Vegetables/tom.jpg', 0, 357, 0, 'Vegetables', '250g'),
(49, 'Winged Beans', 'assets/uploads/items/Vegetables/wb.jpg', 0, 207, 0, 'Vegetables', '250g'),
(50, 'Ash Plantain', 'assets/uploads/items/Vegetables/ash.jpg', 0, 500, 0, 'Vegetables', '500g'),
(51, 'Big Onion', 'assets/uploads/items/Vegetables/bgo.png', 0, 270, 0, 'Vegetables', '250g'),
(52, 'Gotukola', 'assets/uploads/items/Leaves/gotu.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
(53, 'Kankun', 'assets/uploads/items/Leaves/kankun.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
(54, 'Mukunuwenna', 'assets/uploads/items/Leaves/mukunu.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
(55, 'Niwithi', 'assets/uploads/items/Leaves/niwi.jpeg', 0, 70, 0, 'Leaves', '1 Unit'),
(56, 'Thampala', 'assets/uploads/items/Leaves/tham.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
(57, 'Sarana', 'assets/uploads/items/Leaves/sara.jpeg', 0, 70, 0, 'Leaves', '1 Unit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pname` (`pname`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
