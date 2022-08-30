-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 11:37 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petko_userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_id` int(255) NOT NULL,
  `Cart_user_id` int(100) NOT NULL,
  `Cart_name` varchar(255) NOT NULL,
  `Cart_price` varchar(255) NOT NULL,
  `Cart_image` varchar(255) NOT NULL,
  `Cart_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_id`, `Cart_user_id`, `Cart_name`, `Cart_price`, `Cart_image`, `Cart_quantity`) VALUES
(178, 49, 'zxzz', '121', 'WIN_20220813_16_27_24_Pro.jpg', 6),
(179, 49, 'zzz', '12', 'WIN_20220814_09_01_10_Pro.jpg', 3),
(180, 49, 'xxz', '232', 'WIN_20220814_09_01_25_Pro.jpg', 3),
(181, 49, ' xxcx', '1212', 'WIN_20220814_11_46_14_Pro.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `order_user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `total_products` varchar(255) NOT NULL,
  `total_price` int(100) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_user_id`, `first_name`, `last_name`, `contact`, `email`, `address`, `payment_method`, `total_products`, `total_price`, `order_status`) VALUES
(120, 49, 'mel', 'san', '6332323243442', 'melody@gmail.com', 'hagooy', 'Cash on Delivery', 'zzz(5), xxz(1), zxzz(1),  xxcx(134121222)', 2147483647, '1'),
(121, 49, 'mel', 'san', '6394545463543', 'melody@gmail.com', 'hagooy', 'Gcash', 'xxz(1), zzz(1)', 244, '1'),
(122, 49, 'mel', 'san', '6345454566121', 'melody@gmail.com', 'hagooy', 'Gcash', ' xxcx(1), zzz(1)', 1224, '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `suffix` varchar(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `address`, `email`, `password`, `code`, `status`) VALUES
(49, 'mel', 'baba', 'san', '', 'hagooy', 'melody@gmail.com', '123sasa', 12, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
