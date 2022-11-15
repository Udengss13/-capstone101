-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 01:44 AM
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
-- Table structure for table `client_appointment`
--

CREATE TABLE `client_appointment` (
  `id` int(11) NOT NULL,
  `service` varchar(255) NOT NULL,
  `appoint_no` varchar(255) NOT NULL,
  `appoint_date` date NOT NULL,
  `appoint_time` time NOT NULL,
  `petname` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client_appointment`
--

INSERT INTO `client_appointment` (`id`, `service`, `appoint_no`, `appoint_date`, `appoint_time`, `petname`, `user_id`) VALUES
(19, ' surgery', 'PETCO-636ccad014bc3', '2022-11-23', '07:56:00', 'as ', '120'),
(20, ' confinement', 'PETCO-636ccb4fea7d4', '2022-11-23', '08:58:00', 'as ', '120'),
(21, ' surgery', 'PETCO-636ccb6f7e39f', '2022-11-16', '08:01:00', 'as ', '120'),
(22, ' confinement', 'PETCO-636ccf5f0cf5e', '2022-11-14', '10:15:00', 'as ', '120'),
(23, ' confinement', 'PETCO-636ccfd6dbf7d', '2022-11-23', '10:17:00', 'as ', '120'),
(24, ' confinement', 'PETCO-636cd159cfc8e', '2022-11-23', '10:17:00', 'as ', '120'),
(25, ' confinement', 'PETCO-636cd16ec5867', '2022-11-23', '10:17:00', 'as ', '120'),
(26, ' confinement', 'PETCO-636cd17940680', '2022-11-23', '10:17:00', 'as ', '120'),
(27, ' confinement', 'PETCO-636cd192e69ca', '2022-11-23', '10:17:00', 'as ', '120'),
(28, ' confinement', 'PETCO-636cd19f40e8b', '2022-11-23', '10:17:00', 'as ', '120'),
(29, ' confinement', 'PETCO-636cd1f7c7f59', '2022-11-23', '10:17:00', 'as ', '120'),
(30, ' confinement', 'PETCO-636cd220c97a7', '2022-11-23', '10:17:00', 'as ', '120'),
(31, ' confinement', 'PETCO-636cd27c44108', '2022-11-23', '10:17:00', 'as ', '120'),
(32, ' deworming', 'PETCO-636cd2d437134', '2022-11-22', '04:30:00', 'as ', '120'),
(33, ' deworming', 'PETCO-636cd2d996bc8', '2022-11-22', '04:30:00', 'as ', '120'),
(34, ' laboratory', 'PETCO-636dbdc216a96', '1970-01-01', '01:14:00', 'as ', '120'),
(35, ' treatment', 'PETCO-636dbde250c25', '2022-11-15', '02:13:00', 'as ', '120'),
(36, ' confinement', 'PETCO-636dc036c455e', '1970-01-01', '01:23:00', 'as ', '120'),
(40, ' confinement', 'PETCO-636fa497a24df', '2022-11-17', '01:52:00', 'Molly ', '93');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) UNSIGNED NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `seen` tinyint(1) DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `sender_name` varchar(255) DEFAULT NULL,
  `receiver_name` varchar(255) DEFAULT NULL,
  `sender_id` varchar(255) DEFAULT NULL,
  `admin` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `employee_id`, `message`, `seen`, `created_at`, `sender_name`, `receiver_name`, `sender_id`, `admin`) VALUES
(2, 49, 'Hello', 1, '2022-11-08 21:45:51', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(4, 49, 'Sample message!', 1, '2022-11-08 21:53:16', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(5, 49, 'heyy', 1, '2022-11-09 08:50:52', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(6, 49, 'are we good ? ', 1, '2022-11-09 08:51:20', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(8, 49, 'heyyy', 1, '2022-11-09 10:26:32', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(9, 49, 'good', 1, '2022-11-09 10:26:53', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(10, 49, 'heyyy', 1, '2022-11-09 10:26:59', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(11, 49, 'sample', 1, '2022-11-09 10:27:06', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(12, 49, 'good', 1, '2022-11-09 10:27:11', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(13, 49, 'sample', 1, '2022-11-09 10:27:35', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(14, 49, 'test', 1, '2022-11-09 10:28:01', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(15, 49, 'sample', 1, '2022-11-09 10:28:18', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(16, 93, 'saasa', 1, '2022-11-09 11:57:45', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(17, 93, 'xxzxz', 1, '2022-11-09 11:57:52', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(18, 93, 'heloo', 1, '2022-11-09 12:04:29', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(19, 49, 'saasa', 1, '2022-11-09 12:07:10', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(20, 93, 'dsds', 1, '2022-11-09 12:07:24', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(21, 93, 'Melody gumagana na ba?', 1, '2022-11-09 12:09:15', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(22, 93, 'alex ok na kaya?', 1, '2022-11-09 12:10:03', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(23, 93, 'Melody gumagana na ba?', 1, '2022-11-09 12:10:07', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(24, 93, 'alex ok na kaya?', 1, '2022-11-09 12:10:48', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(25, 93, 'baka', 1, '2022-11-09 12:11:01', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(26, 49, 'hello admin', 1, '2022-11-09 12:15:18', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(27, 49, 'Melody gumagana na ba?', 1, '2022-11-09 12:15:42', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(28, 49, 'hello admin', 1, '2022-11-09 12:15:46', 'Melody Santiago ', 'Administrator', '49', 'petko'),
(29, 49, 'hello', 1, '2022-11-09 12:19:39', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(30, 49, 'Melody gumagana na ba?', 1, '2022-11-09 12:19:44', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(31, 49, 'cahrlize', 1, '2022-11-09 12:20:41', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(32, 49, 'hello', 1, '2022-11-09 12:20:51', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(33, 49, 'Melody gumagana na ba?', 1, '2022-11-09 12:21:08', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(34, 49, 'cahrlize', 1, '2022-11-09 12:21:21', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(35, 49, 'oo', 1, '2022-11-09 12:22:59', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(36, 49, 'cahrlize', 1, '2022-11-09 12:23:07', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(37, 49, 'heloo', 1, '2022-11-09 12:24:37', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(38, 49, 'cahrlize', 1, '2022-11-09 12:24:49', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(39, 49, 'heloo', 1, '2022-11-09 12:26:17', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(41, 49, 'cahrlize', 1, '2022-11-09 12:28:02', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(42, 49, 'heloo', 1, '2022-11-09 12:29:08', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(43, 49, 'heloo', 1, '2022-11-09 12:30:16', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(44, 49, 'cahrlize', 1, '2022-11-09 12:30:21', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(45, 49, 'cahrlize', 1, '2022-11-09 12:31:24', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(46, 49, 'cahrlize', 1, '2022-11-09 12:32:10', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(47, 49, 'sasasa', 1, '2022-11-09 12:40:18', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(48, 49, 'adminn', 1, '2022-11-09 12:40:53', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(49, 49, 'sasasa', 1, '2022-11-09 12:41:00', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(50, 49, 'adminn', 1, '2022-11-09 12:42:06', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(51, 49, 'adminn', 1, '2022-11-09 12:43:15', 'Charlize marfil ', 'Administrator', '49', 'petko'),
(52, 49, 'sasasa', 1, '2022-11-09 12:43:41', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(53, 49, 'heloo charlize', 1, '2022-11-09 12:44:59', 'Charlize marfil ', 'Charlize marfil ', 'petko', 'petko'),
(54, 49, 'hello melody', 1, '2022-11-09 13:13:53', 'Melody marfil ', 'Melody marfil ', 'petko', 'petko'),
(55, 49, 'hello melody', 1, '2022-11-09 13:34:40', 'Melody marfil ', 'Melody marfil ', 'petko', 'petko'),
(56, 93, 'helllo Admin', 1, '2022-11-09 13:37:07', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(57, 93, 'dsdsds', 1, '2022-11-09 13:39:08', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(58, 93, 'hello melody Balaba Santiago', 1, '2022-11-09 13:54:32', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(59, 93, 'sasaa', 1, '2022-11-09 13:56:01', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(60, 93, 'huy', 1, '2022-11-09 14:00:30', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(65, 93, 'hello Melody,  Welcome to Petco Animal Clinic ', 1, '2022-11-09 16:21:44', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(66, 93, 'hello Melody,  Welcome to Petco Animal Clinic ', 1, '2022-11-09 16:21:54', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(67, 93, 'dsdsd', 1, '2022-11-09 16:22:20', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(68, 93, 'test', 1, '2022-11-09 16:23:31', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(69, 93, 'dsdsd', 1, '2022-11-09 16:23:35', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(70, 93, 'dsdsd', 1, '2022-11-09 16:23:48', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(71, 93, 'dsdsd', 1, '2022-11-09 16:24:58', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(72, 93, 'test', 1, '2022-11-09 16:26:46', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(73, 93, 'test', 1, '2022-11-09 16:27:02', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(74, 93, 'dsdsd', 1, '2022-11-09 16:28:46', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(75, 93, 'hello', 1, '2022-11-09 16:29:02', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(76, 93, 'test', 1, '2022-11-09 16:29:08', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(77, 93, 'test', 1, '2022-11-09 16:29:16', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(78, 93, 'hello', 1, '2022-11-09 16:31:03', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(79, 93, 'hello', 1, '2022-11-09 16:32:33', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(80, 93, 'hello', 1, '2022-11-09 16:33:49', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(81, 93, 'hello', 1, '2022-11-09 16:34:27', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(82, 93, 'hello', 1, '2022-11-09 16:35:10', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(83, 93, 'Hello, Petco Animal Clinic', 1, '2022-11-09 18:44:30', 'Melody Santiago ', 'Administrator', '93', 'petko'),
(84, 119, 'sasasa', 1, '2022-11-09 22:00:19', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(85, 119, 'hello', 1, '2022-11-09 22:03:53', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(86, 119, 'wqwqwq', 1, '2022-11-09 22:04:23', 'adelaida Santiago ', 'adelaida Santiago ', '119', 'petko'),
(87, 119, 'aa', 1, '2022-11-09 22:05:41', 'adelaida Santiago ', 'adelaida Santiago ', '119', 'petko'),
(88, 119, 'wwqwq', 1, '2022-11-09 22:06:21', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(89, 119, 'ewewew', 1, '2022-11-09 22:06:28', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(90, 119, 'ewewew', 1, '2022-11-09 22:12:41', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(91, 119, 'sasasa', 1, '2022-11-09 22:24:40', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(92, 104, 'sasasa', 1, '2022-11-09 22:26:43', 'Alexandra Bautista ', 'Administrator', '104', 'petko'),
(93, 119, 'heloo', 1, '2022-11-09 22:33:40', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(94, 119, 'wqwq', 1, '2022-11-09 22:33:52', 'adelaida Santiago ', 'Administrator', '119', 'petko'),
(95, 93, 'hello melody!', 1, '2022-11-10 13:24:52', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(96, 93, 'how can we help you?', 1, '2022-11-10 13:25:23', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(97, 120, 'heloo', 1, '2022-11-10 14:10:53', 'sasa sasa ', 'Administrator', '120', 'petko'),
(98, 120, 'Melody gumagana na ba?', 1, '2022-11-10 16:05:12', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(99, 120, 'sasa', 1, '2022-11-10 16:06:18', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(100, 120, 'heloo', 1, '2022-11-10 16:06:36', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(101, 120, 'sasa', 1, '2022-11-11 14:57:12', 'Melody Santiago ', 'Administrator', '120', 'petko'),
(102, 120, 'hello petco', 1, '2022-11-11 14:57:27', 'Melody Santiago ', 'Administrator', '120', 'petko'),
(103, 120, 'hello sasa sasa', 1, '2022-11-11 14:58:06', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko'),
(104, 120, 'hello petco', 1, '2022-11-11 15:02:48', 'Melody Santiago ', 'Administrator', '120', 'petko'),
(105, 120, 'hello petco', 1, '2022-11-11 15:03:17', 'Melody Santiago ', 'Administrator', '120', 'petko'),
(106, 120, 'hello sasa sasa', 1, '2022-11-11 15:03:29', 'Melody Santiago ', 'Melody Santiago ', 'petko', 'petko');

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
(322, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'hagonoy', 'For pick up', 'confirmed'),
(323, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'hagonoy', 'For pick up', 'confirmed'),
(324, 90, 'Melody', 'Santiago', '', 'melody13santiago@gmail.com', 'San Agustin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, ', 'For pick up', 'pickup'),
(325, 90, 'Melody', 'Santiago', '', 'melody13santiago@gmail.com', 'San Agustin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, Bulacanin Hagonoy, ', 'For pick up', 'confirmed'),
(326, 49, 'Melody', 'Santiago', '09358504939', 'melody@gmail.com', 'San Agustin Hagonoy, Bulacan', 'For pick up', 'pickup'),
(327, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(328, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(329, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(330, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(331, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(332, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For pick up', 'pickup'),
(333, 120, 'Melody', 'Santiago', '09358504939', 'melody13santiago@gmail.com', 'san agustin', 'For Pick Up', 'pickedup'),
(334, 120, 'Melody', 'Santiago', '09358504939', 'melody13santiago@gmail.com', 'san agustin', 'For Pick Up', 'pickedup'),
(335, 120, 'Melody', 'Santiago', '09358504939', 'melody13santiago@gmail.com', 'san agustin', 'For Pick Up', 'pickup'),
(336, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', ''),
(337, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', ''),
(338, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', ''),
(339, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', ''),
(340, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', ''),
(341, 93, 'Melody', 'Santiago', '23333', 'santiago.melody.b.5355@gmail.com', 'cxcx', 'For Pick Up', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `id` int(30) NOT NULL,
  `order_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `qty` int(30) NOT NULL,
  `product_price` int(30) NOT NULL,
  `user_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`id`, `order_id`, `product_id`, `qty`, `product_price`, `user_id`) VALUES
(302, 322, 57, 1, 150, ''),
(303, 322, 56, 1, 67, ''),
(304, 322, 58, 1, 455, ''),
(305, 323, 58, 1, 455, ''),
(306, 323, 56, 1, 67, ''),
(307, 323, 55, 1, 123, ''),
(308, 324, 57, 1, 150, ''),
(309, 324, 56, 1, 67, ''),
(310, 324, 58, 1, 455, ''),
(311, 325, 58, 1, 455, ''),
(312, 325, 57, 1, 150, ''),
(313, 326, 56, 1, 67, ''),
(314, 326, 57, 1, 150, ''),
(315, 326, 58, 1, 455, ''),
(316, 327, 57, 2, 0, ''),
(317, 327, 58, 1, 0, ''),
(318, 328, 57, 2, 0, ''),
(319, 329, 57, 2, 150, ''),
(320, 330, 58, 1, 455, ''),
(321, 331, 57, 1, 150, ''),
(322, 331, 58, 1, 455, ''),
(323, 331, 59, 1, 89, ''),
(324, 331, 56, 2, 67, ''),
(325, 332, 59, 3, 89, ''),
(326, 332, 58, 1, 455, ''),
(327, 333, 59, 1, 89, ''),
(328, 334, 59, 1, 89, ''),
(329, 335, 60, 1, 234, ''),
(330, 335, 59, 1, 89, ''),
(331, 336, 59, 1, 89, ''),
(332, 337, 59, 1, 89, '93'),
(333, 338, 58, 1, 455, '93'),
(334, 338, 59, 1, 89, '93'),
(335, 339, 58, 1, 455, ''),
(336, 339, 59, 1, 89, ''),
(337, 341, 59, 1, 89, '93');

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
(11, 92, 'Dog', 'corgi', 'wewe', 'female', '2022-10-13'),
(12, 93, 'Dog', 'corgi', 'Molly', 'female', '2022-11-18'),
(13, 94, 'Cat', 'siamese', 'sasa', 'male', '2022-11-17'),
(14, 95, 'Dog', 'chowchow', 'sasa', 'male', '2022-11-23'),
(15, 96, 'Dog', 'chowchow', 'coco', 'male', '2022-11-09'),
(16, 97, 'Cat', 'siamese', 'sas', 'male', '2022-11-10'),
(17, 98, 'Cat', 'siamese', 'sas', 'male', '2022-10-19'),
(18, 102, 'Dog', 'corgi', 'sasa', 'male', '2022-11-07'),
(19, 103, 'Dog', 'englishbulldog', 'Molly', 'female', '2022-11-07'),
(20, 105, 'Cat', 'siamese', 'melly', 'female', '2022-11-01'),
(21, 106, 'Cat', 'siamese', 'polka', 'female', '2022-11-09'),
(22, 107, 'Cat', 'siamese', 'moly', 'female', '2022-11-09'),
(23, 108, 'Cat', 'siamese', 'sasa', 'female', '2022-11-09'),
(24, 109, 'Cat', 'abyssinian', 'Moly', 'female', '2022-11-09'),
(25, 110, 'Dog', 'siberianhusky', 'kitchie', 'male', '2022-06-09'),
(26, 111, 'Cat', 'siamese', 'eewew', 'female', '2022-06-09'),
(27, 112, 'Cat', 'siamese', 'wqwq', 'female', '2022-11-22'),
(28, 113, 'Cat', 'siamese', 'wqwq', 'female', '2022-11-22'),
(29, 114, 'Dog', 'shittzu', 'sasa', 'female', '2022-11-23'),
(30, 115, 'Dog', 'siberianhusky', 'sasa', 'female', '2022-11-09'),
(31, 116, 'Dog', 'pug', 'sasa', 'female', '2022-11-08'),
(32, 117, 'Dog', 'siberianhusky', 'sasasa', 'female', '2022-11-07'),
(33, 118, 'Dog', 'chowchow', 'sasa', 'female', '2022-11-01'),
(34, 119, 'Dog', 'chowchow', 'sasa', 'female', '2022-11-09'),
(35, 120, 'Dog', 'poodle', 'as', 'female', '2022-11-10'),
(36, 121, 'Dog', 'Opera', 'molly', 'female', '2022-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_id`, `service_name`) VALUES
(1, 'vaccination'),
(2, 'confinement'),
(3, 'consultation'),
(4, 'surgery'),
(5, 'treatment'),
(6, 'deworming'),
(7, 'grooming'),
(8, 'laboratory');

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
  `position` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL,
  `contact` varchar(100) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `user_level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `first_name`, `middle_name`, `last_name`, `suffix`, `position`, `address`, `email`, `password`, `code`, `status`, `contact`, `image_dir`, `image_filename`, `user_level`) VALUES
(49, 'Melody', 'denice', 'marfil', '', '', 'San Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, BulcanaSan Agustin HAgonoy, Bulcana', 'melody@gmail.com', '123sasa', 12, 'verified', '09358504939', '../asset/profiles/cha.jpg', 'cha.jpg', 'client'),
(93, 'Melody', 'Balaba', 'Santiago', '', '', 'cxcx', 'santiago.melody.b.5355@gmail.com', 'qwqw', 0, 'verified', '23333', '../asset/profiles/cha.jpg', 'cha.jpg', 'client'),
(98, 'xzxzxz', 'xzxzxz', 'zxzz', '', '', 'xz', 'melody121s@gand.ca', 'qqq', 225701, 'verified', 'xzxz', '../asset/profiles/dectsuit.png', 'dectsuit.png', 'client'),
(99, 'sasa', 'sa', 'sa', 'sa', 'veterinarian', 'assa', 'asa@mm.com', '111', 276514, 'verified', 'sa', '', '', 'employee'),
(100, 'Charlize', 'F', 'Marfil', '', 'receptionist', 'ssasassa', 'cha@gmail.com', '111', 383075, 'verified', '0903289832929', '', '', 'employee'),
(101, 'alexandra', 'F', 'saba', '', 'veterinarian', 'a', 'sasas@gmail.com', '1111', 471111, 'verified', '212121', '', '', 'employee'),
(104, 'Alexandra', 'Figueras', 'Bautista', '', 'veterinarian', 'Sta Maria Bulacan', 'Alexandrabautista1000@gmail.com', 'qwerty', 777303, 'verified', '09155222500', '', '', 'employee'),
(121, 'Melody', 'Balaba', 'Santiago', '', '', 'sasas', 'melody13santiago@gmail.com', '111', 0, 'verified', '0393782732', 'asset/profiles/cha.jpg', 'cha.jpg', 'client');

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
-- Indexes for table `client_appointment`
--
ALTER TABLE `client_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`);

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
  MODIFY `Cart_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=466;

--
-- AUTO_INCREMENT for table `client_appointment`
--
ALTER TABLE `client_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `pettable`
--
ALTER TABLE `pettable`
  MODIFY `pet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
