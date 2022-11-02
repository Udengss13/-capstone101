-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2022 at 11:57 AM
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
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `Menu_id` int(11) NOT NULL,
  `Menu_name` varchar(255) NOT NULL,
  `Menu_description` varchar(255) NOT NULL,
  `Menu_price` double NOT NULL,
  `Menu_category` varchar(255) NOT NULL,
  `Menu_dir` varchar(255) NOT NULL,
  `Menu_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`Menu_id`, `Menu_name`, `Menu_description`, `Menu_price`, `Menu_category`, `Menu_dir`, `Menu_filename`) VALUES
(55, 'Dog Snack', 'For Dog', 123, ' Dog Product', '../asset/menu/bonesdog.jpg', 'bonesdog.jpg'),
(56, 'Furmagis Shampoo', 'For Dogs', 67, ' Dog Product', '../asset/menu/furmagic dog.jpg', 'furmagic dog.jpg'),
(57, 'Chicken Turkey', 'For Cat', 150, ' Cat Food', '../asset/menu/Chickenturkeycat.jpg', 'Chickenturkeycat.jpg'),
(58, 'Tuna Flavor Cat Food', 'Cat Food', 455, ' Cat Food', '../asset/menu/tunacat.jpg', 'tunacat.jpg'),
(59, 'Dog Leash', 'For Dog', 89, ' Dog Product', '../asset/menu/dogleash.jpg', 'dogleash.jpg'),
(60, 'snack Dog', 'Snack dog ', 234, ' Dog Product', '../asset/menu/snackdog.jpg', 'snackdog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Cart_id` int(255) NOT NULL,
  `Cart_user_id` int(100) NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `Cart_name` varchar(255) NOT NULL,
  `Cart_price` varchar(255) NOT NULL,
  `Cart_image` varchar(255) NOT NULL,
  `Cart_quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`Cart_id`, `Cart_user_id`, `product_id`, `Cart_name`, `Cart_price`, `Cart_image`, `Cart_quantity`) VALUES
(441, 49, '57', 'Chicken Turkey', '150', 'Chickenturkeycat.jpg', 1),
(442, 90, '57', 'Chicken Turkey', '150', 'Chickenturkeycat.jpg', 4);

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
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `order_user_id`, `first_name`, `last_name`, `contact`, `email`, `address`, `payment_method`, `order_status`) VALUES
(322, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'hagonoy', 'For pick up', 'pickup'),
(323, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'hagonoy', 'For pick up', 'confirmed'),
(324, 90, 'Melody', 'Santiago', '', 'melody13santiago@gmail.com', 'San Agustin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, ', 'For pick up', 'pickup'),
(325, 90, 'Melody', 'Santiago', '', 'melody13santiago@gmail.com', 'San Agustin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, ', 'For pick up', 'confirmed'),
(326, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'San Agustin Hagonoy, Bulacan', 'For pick up', 'confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `product_price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_id`, `product_id`, `qty`, `product_price`) VALUES
(302, 322, 57, 1, 150),
(303, 322, 56, 1, 67),
(304, 322, 58, 1, 455),
(305, 323, 58, 1, 455),
(306, 323, 56, 1, 67),
(307, 323, 55, 1, 123),
(308, 324, 57, 1, 150),
(309, 324, 56, 1, 67),
(310, 324, 58, 1, 455),
(311, 325, 58, 1, 455),
(312, 325, 57, 1, 150),
(313, 326, 56, 1, 67),
(314, 326, 57, 1, 150),
(315, 326, 58, 1, 455);

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
(8, 88, 'Cat', 'siamese', 'Molly', 'female', '2022-10-12'),
(9, 89, 'Dog', 'shittzu', 'Molly', 'female', '2021-05-19'),
(10, 90, 'Dog', 'siberianhusky', 'Molly', 'female', '2022-10-02'),
(11, 92, 'Dog', 'corgi', 'wewe', 'female', '2022-10-13');

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
(49, 'Melody', 'balaba', 'Santiago', '', 'San Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, Bulcana\r\n', 'melody@gmail.com', '123sasa', 12, 'verified', '09358504939'),
(90, 'melo', 'Balaba', 'Santiago', 'sese', 'San Agustin', 'melody13santiago@gmail.com', '123123', 0, 'verified', 'sasa'),
(92, 'Melodyss', 'Balabas', 'Santigoas', '', 'sasas', 'santiago.melody.b.5355@gmail.com', '123123s', 221328, 'notverified', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`Menu_id`);

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
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
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
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `Menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `Cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=443;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=327;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=316;

--
-- AUTO_INCREMENT for table `pettable`
--
ALTER TABLE `pettable`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
