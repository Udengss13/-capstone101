-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 04:44 AM
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
(78, 'asset/sliderimage/cares.png'),
(79, 'asset/sliderimage/300193579_630308145367225_8714117307495412135_n.png');

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
(20, 'Dog Food', 'for Dog'),
(21, 'Dog Product', 'for dog'),
(35, 'Cat Food', 'for Cat'),
(36, 'Cat product', 'cat product details'),
(37, 'cat cat', 'cat');

-- --------------------------------------------------------

--
-- Table structure for table `admin_content_homepage`
--

CREATE TABLE `admin_content_homepage` (
  `Image_id` int(11) NOT NULL,
  `Image_title` varchar(255) NOT NULL,
  `Image_subtitle` varchar(255) NOT NULL,
  `Image_body` longtext NOT NULL,
  `Image_dir` varchar(1000) NOT NULL,
  `Image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_content_homepage`
--

INSERT INTO `admin_content_homepage` (`Image_id`, `Image_title`, `Image_subtitle`, `Image_body`, `Image_dir`, `Image_filename`) VALUES
(44, '1st year ANNIVERSARY!!', 'Mark your calendars and save the date!!', 'Petco. Animal clinic will be celebrating its 1st year ANNIVERSARY!!<br />\r\nMark your calendars and save the date!!<br />\r\nBE READY FOR A LOT OF FREEBIES AND PROMOS THIS COMING Month of July 2022!! <br />\r\nOur promotions and offers include: <br />\r\n✂️: discounted for our full groom services <br />\r\n🏥: 25% Off Progesterone test, Relaxin test, Smear test and Ultrasound (to be scheduled by appointment) <br />\r\n📝: FREE check-up/consultation every Tuesdays <br />\r\n 🩼: FREE FREE Anti-Rabies from July 2- July 3, 2022 ( Saturday - Sunday ) 50 SLOTS per day <br />\r\n🩼: 50 pesos discount on all vaccines<br />\r\n🩺: Low cost KAPON promo.<br />\r\n       REQUIRED:<br />\r\n       up to 3years old below CBC<br />\r\n       3years old and above  CBC and CHEM<br />\r\nPlease see attach photos below!<br />\r\nFeel free to send us a message for inquiries. <br />\r\nThank you! See you there!<br />\r\nPetco. Animal clinic<br />\r\n📍389 Parada Sta. Maria, Bulacan (beside Sto. Niño Parish Church)<br />\r\n📞 0956 071 7662/0960 846 5020', '../asset/homepage/june27.jpg', 'june27.jpg'),
(46, 'FREE CONSULTATION EVERY TUESDAYS! ', 'Attention beloved Pet.Co clients! 🥰', 'Since our founding in 1965, we’ve been trailblazing new standards in pet care,<br /><br />\r\n delivering comprehensive wellness solutions through our products and services, and creating communities that deepen the pet-pet parent bond. We operate more than 1,500 Petco locations <br /><br />\r\nacross the U.S., Mexico and Puerto Rico, including a growing network of more<br /><br />\r\n than 100 in-store veterinary hospitals, and offer a complete online resource for pet health and wellness at petco.com and on the Petco app.<br />\r\near friends, here\'s a little something special from us to beat the rainy season blues.🤗Rainy days will not stop us in bringing the Best Love in grooming your furbabies! Get FREE DEWORMING for every FULL GROOM valid from Sept. 5, 2022 to Oct. 5, 2022! (Terms and conditions apply)<br />\r\n<br />\r\n* 5kgs and below are FREE succeeding kgs will be charged with additional 50pesos full groom package. Full Groom starts at php. 400!<br />\r\n<br />\r\nAlways remember to get your furbabies groomed because it does not only help maintain a healthy coat and fur, it is also as important for their welfare.<br />\r\n<br />\r\nLocation : Brgy. Parada beside Sto.Nino parish church!!<br />\r\n<br />\r\nSee tou there fur lovers..😘😘😘🐕', '../asset/homepage/sep2.jpg', 'sep2.jpg'),
(47, 'dsd', 'dsds', 'Since our founding in 1965, we’ve been trailblazing new standards in pet care, delivering comprehensive wellness solutions through our products and services, and creating communities that deepen the pet-pet parent bond. We operate more than 1,500 Petco locations across the U.S., Mexico and Puerto Rico, including a growing network of more than 100 in-store veterinary hospitals, and offer a complete online resource for pet health and wellness at petco.com and on the Petco app.', '../asset/homepage/freeantirabies.jpg', 'freeantirabies.jpg'),
(49, 'Bulacan Congress', 'Bulacan Congress ', 'Bulacan Congress are Here', '../asset/homepage/sep2.jpg', 'sep2.jpg'),
(51, 'asa', 'sasa', 'sasa', '../asset/homepage/sep2.jpg', 'sep2.jpg'),
(52, 'Free Anti- Rabies', 'Every Tuesday', '-It is officially the start of our rainy season  while some of you may know that during the rainy or wet season, our fur-babies are easily exposed or susceptible to viral diseases.', '../asset/homepage/antirabies.jpg', 'antirabies.jpg');

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
(27, 'Aozi', 'Pure natural organic food. Naturally healthy. Europe’s top pet food formula! Food therapy, rich energy, nutrients in golden ratio, meat 38%.<br />\r\n', 170, ' Cat Food', '../asset/menu/aozicat.jpg', 'aozicat.jpg'),
(29, 'Zoi Cat Tuna Flavor', 'Suitable for all adult cat breeds. Which is delicious and contain essential Vitamin, Minerals, and Amino acid for your beloved cat.<br />\r\n• Reduce risk of kidney disease through Sodium control.<br />\r\n• Maintain healthy gums and teeth and lowers the risk', 178, ' Cat Food', '../asset/menu/tunacat.jpg', 'tunacat.jpg'),
(30, 'Cat Toys', 'Feather teaser for cat', 150, ' Cat Product', '../asset/menu/cattogys.jpg', 'cattogys.jpg'),
(36, 'Whiskas', 'Whiskas is there for the whole journey. Developing delicious food for your feline friends. Let your cat grow with Whiskas. Feed them a healthy & tasty diet full of natural goodness. Whiskas is there for the whole journey. Developing delicious food for you', 299, ' Cat Food', '../asset/menu/whiskas1.jpg', 'whiskas1.jpg'),
(37, 'Pedigree ', 'Chunky Ground Dinner with Chicken', 300, ' Dog Food', '../asset/menu/pedigree.jpg', 'pedigree.jpg'),
(38, 'Cuties Catz', 'Tuna Flavored Cat Foo', 150, ' Cat Food', '../asset/menu/tunacat.jpg', 'tunacat.jpg'),
(39, 'Alpo', 'Alpo Dog Food.', 123, ' Dog Food', '../asset/menu/alpo.jpg', 'alpo.jpg'),
(40, 'Dog Leash', 'This fashion-forward dog leash is a great way to show off your favorite characters or brands.', 500, ' Dog Product', '../asset/menu/furmagic dog.jpg', 'furmagic dog.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin_quicktips`
--

CREATE TABLE `admin_quicktips` (
  `id` int(11) NOT NULL,
  `info` longtext NOT NULL,
  `image_dir` varchar(100) NOT NULL,
  `image_filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_quicktips`
--

INSERT INTO `admin_quicktips` (`id`, `info`, `image_dir`, `image_filename`) VALUES
(10, 'Cold Weather Safety', '../asset/quicktips 1.png', 'quicktips 1.png'),
(11, 'Using Cleaning Supplies', '../asset/quicktips 2.png', 'quicktips 2.png');

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
-- Indexes for table `admin_quicktips`
--
ALTER TABLE `admin_quicktips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_carousel_homepage`
--
ALTER TABLE `admin_carousel_homepage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `admin_category`
--
ALTER TABLE `admin_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `admin_content_homepage`
--
ALTER TABLE `admin_content_homepage`
  MODIFY `Image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `Menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `admin_quicktips`
--
ALTER TABLE `admin_quicktips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
