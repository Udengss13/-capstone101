-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:45 AM
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
(231, 88, 'Whiskas', '299', 'whiskas1.jpg', 1);

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
  `product_name` varchar(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(11) NOT NULL,
  `total_price` int(100) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_user_id`, `first_name`, `last_name`, `contact`, `email`, `address`, `payment_method`, `product_name`, `quantity`, `price`, `total_price`, `order_status`) VALUES
(131, 49, 'Melody', 'Santiago', '', 'melody@gmail.com', 'hagonoy', 'For pick up', 'Whiskas', 1, 299, 299, ''),
(132, 49, 'Melody', 'Santiago', '', 'melody@gmail.com', 'hagonoy', 'For pick up', 'Cat Toys', 1, 150, 328, ''),
(133, 88, 'Melody', 'Santiago', '09356547689', 'melody13santiago@gmail.com', 'Hagonoy', 'For pick up', 'Aozi', 1, 170, 348, '2'),
(134, 88, 'Melody', 'Santiago', '09356547689', 'melody13santiago@gmail.com', 'Hagonoy', 'For pick up', 'Cat Toys', 4, 150, 600, '2'),
(135, 88, 'Melody', 'Santiago', '09356547689', 'melody13santiago@gmail.com', 'Hagonoy', 'For pick up', 'Cuties Catz', 1, 150, 150, '2');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pettable`
--

CREATE TABLE `pettable` (
  `pet_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pettype` varchar(100) NOT NULL,
  `petbreed` varchar(100) NOT NULL,
  `petname` varchar(255) NOT NULL,
  `petsex` varchar(100) NOT NULL,
  `petbday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pettable`
--

INSERT INTO `pettable` (`pet_id`, `user_id`, `pettype`, `petbreed`, `petname`, `petsex`, `petbday`) VALUES
(1, 74, 'dog', 'frenchbulldog', 'Molly', '', '0000-00-00'),
(2, 75, 'dog', 'chowchow', 'Molly', '', '0000-00-00'),
(3, 83, 'dog', 'corgi', 'sasa', '', '0000-00-00'),
(4, 84, 'cat', 'siamese', 'molly', 'female', '2022-09-30'),
(5, 85, 'dog', 'siberianhusky', 'Max', 'male', '2014-05-21'),
(6, 86, '', '', 's', 'male', '1970-01-01'),
(7, 87, 'Dog', 'siberianhusky', 'Coco', 'male', '2022-02-17'),
(8, 88, 'Cat', 'siamese', 'Molly', 'female', '2022-10-12');

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
  `status` text NOT NULL,
  `contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `address`, `email`, `password`, `code`, `status`, `contact`) VALUES
(49, 'Melody', 'balaba', 'Santiago', '', 'hagonoy', 'melody@gmail.com', '123sasa', 12, 'verified', '09358504939'),
(88, 'Melody', 'Balaba', 'Santiago', '', 'Hagonoy', 'melody13santiago@gmail.com', '123123', 0, 'verified', '09356547689');

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
-- Indexes for table `pettable`
--
ALTER TABLE `pettable`
  ADD PRIMARY KEY (`pet_id`);

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
  MODIFY `Cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=232;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `pettable`
--
ALTER TABLE `pettable`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
