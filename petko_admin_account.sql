-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2022 at 11:36 AM
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
-- Database: `petko_admin_account`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_carousel_homepage`
--

CREATE TABLE `admin_carousel_homepage` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_carousel_homepage`
--

INSERT INTO `admin_carousel_homepage` (`id`, `image_path`) VALUES
(21, 'asset/sliderimage/sliderpetcohouase.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_category`
--

CREATE TABLE `admin_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_category`
--

INSERT INTO `admin_category` (`category_id`, `category_name`, `category_details`) VALUES
(15, 'dff', 'ddd'),
(17, 'cat', 'cat fog'),
(18, 'asas', 'sasa');

-- --------------------------------------------------------

--
-- Table structure for table `admin_content_homepage`
--

CREATE TABLE `admin_content_homepage` (
  `Image_id` int(11) NOT NULL,
  `Image_title` varchar(255) NOT NULL,
  `Image_subtitle` varchar(255) NOT NULL,
  `Image_body` varchar(255) NOT NULL,
  `Image_dir` varchar(1000) NOT NULL,
  `Image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_content_homepage`
--

INSERT INTO `admin_content_homepage` (`Image_id`, `Image_title`, `Image_subtitle`, `Image_body`, `Image_dir`, `Image_filename`) VALUES
(26, 'Bulacan State University', 'Browse over 30 requests from this government agency', 'The Transparency Seal, depicted by a pearl shining out of an open shell, is a symbol of a policy shift towards <br />\r\n<br />\r\nopenness in access to government information. On the one hand, it hopes to inspire Filipinos in the civil service to be more ope', '../asset/homepage/owner.jpg', 'owner.jpg'),
(27, 'Gallagher Square (Park at the Park)', 'Posted in 2022 in Entry & Seating', 'Tickets for Gallagher Square seating are around $25 but range from approximately $15-$$$. <br />\r\n<br />\r\nPrices flex based on demand and quality of the Padres opponent, but its still one of the better bargains out there for families at Petco! All tickets', '../asset/homepage/place.jpg', 'place.jpg'),
(28, 'veve', 'hdjdj', 'The Maastricht School of Management in The Netherlands though their fellowship program. With her expertise and experience, she has skillfully managed the five (5) campuses, thirteen (13) colleges, 1,100 faculty, 800 non-academic personnel, and almost 50,0', '../asset/homepage/298481146_630554471612287_747411135688575051_n.jpg', '298481146_630554471612287_747411135688575051_n.jpg'),
(29, 'dssds', 'sads', 'he Maastricht School of Management in The Netherlands though their fellowship program. With her expertise and experience, she has skillfully managed the five (5) campuses, thirteen (13) colleges, 1,100 faculty, 800 non-academic personnel, and almost 50,00', '../asset/homepage/pngegg.png', 'pngegg.png'),
(30, 'dfdfv', 'dvdfvqq', ' sefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefsefse', '../asset/homepage/place.jpg', 'place.jpg'),
(31, 'sasas', 'sasas', 'orem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has sur', '../asset/homepage/fam.jpg', 'fam.jpg'),
(32, 'sasa', 'sasa', 'sasa', '../asset/homepage/dogsbg.jpg', 'dogsbg.jpg'),
(33, 'sasa', 'sasa', 'sasa', '../asset/homepage/dog.jpg', 'dog.jpg'),
(34, 'ss', 'sss', 'sss', '../asset/homepage/dog.jpg', 'dog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`username`, `password`) VALUES
('petko', 'adminpassword');

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
(22, 'zzz', 'zz', 12, ' dff', '../asset/menu/WIN_20220814_09_01_10_Pro.jpg', 'WIN_20220814_09_01_10_Pro.jpg'),
(23, 'zxzz', 'xzx', 121, ' dff', '../asset/menu/WIN_20220813_16_27_24_Pro.jpg', 'WIN_20220813_16_27_24_Pro.jpg'),
(24, 'xxz', 'xzx', 232, ' dff', '../asset/menu/WIN_20220814_09_01_25_Pro.jpg', 'WIN_20220814_09_01_25_Pro.jpg'),
(25, ' xxcx', 'cxcx', 1212, ' dff', '../asset/menu/WIN_20220814_11_46_14_Pro.jpg', 'WIN_20220814_11_46_14_Pro.jpg'),
(26, 'New Product', 'Ice Cream', 233, ' dff', '../asset/menu/fam.jpg', 'fam.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_carousel_homepage`
--
ALTER TABLE `admin_carousel_homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_category`
--
ALTER TABLE `admin_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `admin_content_homepage`
--
ALTER TABLE `admin_content_homepage`
  ADD PRIMARY KEY (`Image_id`);

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`Menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_carousel_homepage`
--
ALTER TABLE `admin_carousel_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `admin_category`
--
ALTER TABLE `admin_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `admin_content_homepage`
--
ALTER TABLE `admin_content_homepage`
  MODIFY `Image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `Menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
