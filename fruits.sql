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

INSERT INTO `items` ( `pname`, `image`, `stockQty`, `sellPrice`, `buyPrice`, `itemType`, `quantity`) VALUES
(Avacado', 'assets/uploads/items/Fruits/ava.jpg', 0, 300, 0, 'Fruits', '500g'),
('Banana', 'assets/uploads/items/fruits/banana.jpg', 0, 270, 0, 'Fruits', '250g'),
('Ceylon Olives', 'assets/uploads/items/fruits/co.jpg', 0, 500, 0, 'Fruits', '270g'),
('Dragon Fruit', 'assets/uploads/items/fruits/dragon.png', 0, 270, 0, 'Fruits', '500g'),
('Cocowa', 'assets/uploads/items/fruits/cocowa.jpg', 0, 255, 0, 'Fruits', '500g'),
('Durian', 'assets/uploads/items/fruits/durian.jpg', 0, 185, 0, 'Fruits', '500g'),
('Goosberry', 'assets/uploads/items/fruits/goos.jpg', 0, 185, 0, 'Fruits', '500g'),
('Guava', 'assets/uploads/items/fruits/guava.jpg', 0, 55, 0, 'Fruits', '500g'),
('Jack Fruit', 'assets/uploads/items/fruits/jac.jpg', 0, 55, 0, 'Fruits', '500g'),
('Jamanaran', 'assets/uploads/items/fruits/jamanaran.jpg', 0, 110, 0, 'Fruits', '500g'),
('Lovi-Lovi', 'assets/uploads/items/fruits/lovi.jpg', 0, 55, 0, 'Fruits', '500g'),
('Manago', 'assets/uploads/items/fruits/mango.jpg', 0, 95, 0, 'Fruits', '500g'),
('Mangosteen', 'assets/uploads/items/fruits/mangus.jpg', 0, 245, 0, 'Fruits', '500g'),
('Watermelon', 'assets/uploads/items/fruits/melon.jpg', 0, 75, 0, 'Fruits', '500g'),
('Orange', 'assets/uploads/items/fruits/orange.jpg', 0, 300, 0, 'Fruits', '500g'),
('Papapya', 'assets/uploads/items/fruits/papaw.jpg', 0, 70, 0, 'Fruits', '500g'),
('Passion Fruit', 'assets/uploads/items/fruits/passion.jpg', 0, 90, 0, 'Fruits', '500g'),
('Pineapple', 'assets/uploads/items/fruits/pine.jpg', 0, 77, 0, 'Fruits', '500g'),
('Pomegranate', 'assets/uploads/items/fruits/pome.jpg', 0, 575, 0, 'Fruits', '500g'),
('Roseapple', 'assets/uploads/items/fruits/ra.jpg', 0, 90, 0, 'Fruits', '500g'),
('Rabutan', 'assets/uploads/items/fruits/ra.jpg', 0, 160, 0, 'Fruits', '500g'),
('Velvet Tamarind', 'assets/uploads/items/fruits/vel.jpg', 0, 397.5, 0, 'Fruits', '500g'),
('Strawberry', 'assets/uploads/items/fruits/stro.jpg', 0, 397.5, 0, 'Fruits', '500g'),
('Beal Fruit', 'assets/uploads/items/fruits/bf.jpg', 0, 205, 0, 'Fruits', '500g'),
('Green Beans', 'assets/uploads/items/Vegetables/be.jpg', 0, 203.5, 0, 'Vegetables', '500g'),
('Beetroot', 'assets/uploads/items/Vegetables/beet.jpg', 0, 250, 0, 'Vegetables', '500g'),
('Bitter Gourd', 'assets/uploads/items/Vegetables/bit.jpg', 0, 213, 0, 'Vegetables', '250g'),
('Brinjal', 'assets/uploads/items/Vegetables/bri.jpg', 0, 178, 0, 'Vegetables', '250g'),
('Broccali', 'assets/uploads/items/Vegetables/bro.jpeg', 0, 345, 0, 'Vegetables', '500g'),
('Cabbage', 'assets/uploads/items/Vegetables/cab.jpg', 0, 270, 0, 'Vegetables', '250g'),
('Capsicum', 'assets/uploads/items/Vegetables/capsi.jpg', 0, 104, 0, 'Vegetables', '250g'),
('Carrot', 'assets/uploads/items/Vegetables/car.jpg', 0, 162, 0, 'Vegetables', '250g'),
('Green Chilli', 'assets/uploads/items/Vegetables/gc.jpg', 0, 80, 0, 'Vegetables', '100g'),
('Cucumber', 'assets/uploads/items/Vegetables/cucum.jpg', 0, 190, 0, 'Vegetables', '500g'),
('Garlic', 'assets/uploads/items/Vegetables/gar.jpg', 0, 171, 0, 'Vegetables', '250g'),
('Lime', 'assets/uploads/items/Vegetables/le.png', 0, 83, 0, 'Vegetables', '100g'),
('Leeks', 'assets/uploads/items/Vegetables/lee.jpg', 0, 240, 0, 'Vegetables', '500g'),
('Luffa', 'assets/uploads/items/Vegetables/lufa.jpg', 0, 149, 0, 'Vegetables', '250g'),
('Lasia Stalk', 'assets/uploads/items/Vegetables/ls.jpg', 0, 108, 0, 'Vegetables', '250g'),
('Mushroom', 'assets/uploads/items/Vegetables/mush.jpg', 0, 90, 0, 'Vegetables', '100g'),
('Okra', 'assets/uploads/items/Vegetables/okra.jpg', 0, 139, 0, 'Vegetables', '250g'),
('Potato', 'assets/uploads/items/Vegetables/pota.jpg', 0, 192, 0, 'Vegetables', '250g'),
('Pumpkin', 'assets/uploads/items/Vegetables/pum.jpg', 0, 200, 0, 'Vegetables', '500g'),
('Raddish', 'assets/uploads/items/Vegetables/raddish.jpg', 0, 195, 0, 'Vegetables', '500g'),
('Red Onion', 'assets/uploads/items/Vegetables/ro.jpg', 0, 225, 0, 'Vegetables', '250g'),
('Snake Gourd', 'assets/uploads/items/Vegetables/snake.png', 0, 90, 0, 'Vegetables', '500g'),
('Tibbatu', 'assets/uploads/items/Vegetables/tb.jpg', 0, 230, 0, 'Vegetables', '500g'),
('Tomato', 'assets/uploads/items/Vegetables/tom.jpg', 0, 357, 0, 'Vegetables', '250g'),
('Winged Beans', 'assets/uploads/items/Vegetables/wb.jpg', 0, 207, 0, 'Vegetables', '250g'),
('Ash Plantain', 'assets/uploads/items/Vegetables/ash.jpg', 0, 500, 0, 'Vegetables', '500g'),
('Big Onion', 'assets/uploads/items/Vegetables/bgo.png', 0, 270, 0, 'Vegetables', '250g'),
('Gotukola', 'assets/uploads/items/Leaves/gotu.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
('Kankun', 'assets/uploads/items/Leaves/kankun.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
('Mukunuwenna', 'assets/uploads/items/Leaves/mukunu.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
('Niwithi', 'assets/uploads/items/Leaves/niwi.jpeg', 0, 70, 0, 'Leaves', '1 Unit'),
('Thampala', 'assets/uploads/items/Leaves/tham.jpg', 0, 70, 0, 'Leaves', '1 Unit'),
('Sarana', 'assets/uploads/items/Leaves/sara.jpeg', 0, 70, 0, 'Leaves', '1 Unit');

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
