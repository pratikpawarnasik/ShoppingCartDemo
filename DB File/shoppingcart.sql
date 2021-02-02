-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 07:36 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE IF NOT EXISTS `admin_info` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `username`, `password`, `confirmpassword`) VALUES
(1, 'Pratik', 'admin@gmail.com', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
`id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_image` text NOT NULL,
  `quantity` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `user_id`, `product_title`, `product_image`, `quantity`, `price`, `total_amount`) VALUES
(2, 25, 1, 'RESISTOR3', 'res3.jpg', 1, 15, 15),
(3, 22, 1, 'RESISTOR1', 'res1.jpg', 1, 5, 5),
(4, 11, 1, 'CABLE1', 'cable1.jpg', 1, 5, 5),
(5, 5, 1, 'IC5', 'ic5.jpg', 1, 220, 220),
(7, 5, 6, 'IC5', 'ic5.jpg', 1, 220, 220),
(8, 24, 6, 'RESISTOR2', 'res2.jpg', 1, 10, 10),
(9, 6, 6, 'BATTERY1', 'battery1.jpg', 1, 50, 50),
(11, 17, 1, 'ANTENNA2', 'antenna2.jpg', 1, 100, 100),
(12, 29, 6, 'IC', 'comp.jpg', 1, 200, 200),
(13, 13, 6, 'CABLE3', 'cable3.jpg', 1, 15, 15);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'IC'),
(2, 'Batteries'),
(3, 'Cables'),
(4, 'Antenna'),
(5, 'Resistors'),
(8, 'electronic'),
(9, 'Pumps');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
`product_id` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL,
  `product_cat` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`, `product_cat`) VALUES
(1, 'IC1', 180, 'abc', 'ic1.jpg', 'ic', 1),
(2, 'IC2', 250, 'lmn', 'ic2.jpg', 'ic', 1),
(3, 'IC3', 300, 'pqr', 'ic3.jpg', 'ic', 1),
(4, 'IC4', 70, 'ghi', 'ic4.jpg', 'ic', 1),
(5, 'IC5', 220, 'xyz', 'ic5.jpg', 'ic', 1),
(6, 'BATTERY1', 50, 'abc', 'battery1.jpg', 'battery', 2),
(7, 'BATTERY2', 80, 'abc', 'battery2.jpg', 'battery', 2),
(8, 'BATTERY3', 100, 'abc', 'battery3.jpg', 'battery', 2),
(9, 'BATTERY4', 60, 'abc', 'battery4.jpg', 'battery', 2),
(10, 'BATTERY5', 35, 'abc', 'battery5.jpg', 'battery', 2),
(11, 'CABLE1', 5, 'abc', 'cable1.jpg', 'cable', 3),
(12, 'CABLE2', 10, 'abc', 'cable2.jpg', 'cable', 3),
(13, 'CABLE3', 15, 'abc', 'cable3.jpg', 'cable', 3),
(14, 'CABLE4', 20, 'abc', 'cable4.jpg', 'cable', 3),
(15, 'CABLE5', 25, 'abc', 'cable5.jpg', 'cable', 3),
(16, 'ANTENNA1', 45, 'abc', 'antenna1.jpg', 'antenna', 4),
(17, 'ANTENNA2', 100, 'abc', 'antenna2.jpg', 'antenna', 4),
(18, 'ANTENNA3', 65, 'abc', 'antenna3.jpg', 'antenna', 4),
(19, 'ANTENNA4', 95, 'abc', 'antenna4.jpg', 'antenna', 4),
(20, 'ANTENNA5', 70, 'abc', 'antenna5.jpg', 'antenna', 4),
(21, 'RESISTOR1', 5, 'abc', 'res1.jpg', 'resistors', 5),
(22, 'RESISTOR1', 5, 'abc', 'res1.jpg', 'resistors', 5),
(23, 'RESISTOR1', 5, 'abc', 'res1.jpg', 'resistors', 5),
(24, 'RESISTOR2', 10, 'abc', 'res2.jpg', 'resistors', 5),
(25, 'RESISTOR3', 15, 'abc', 'res3.jpg', 'resistors', 5),
(26, 'RESISTOR4', 20, 'abc', 'res4.jpg', 'resistors', 5),
(27, 'RESISTOR5', 25, 'abc', 'res5.jpg', 'resistors', 5),
(29, 'IC', 200, 'good', 'comp.jpg', 'electronic', 4),
(31, 'ElectroBee&trade 1m 15 pin Cable for PC/Monitor/TV/LCD/Plasma/Projector/TFT(Blue)', 189, 'Supports resolutions at 800x600 (SVGA), 1024x768 (XGA), 1600x1200 (UXGA), 1080p (Full HD), 1920x1200 (WUXGA), and up for high resolution LCD and LED monitors UL Listed VGA cord engineered with molded strain relief connectors for durability, grip treads for easy plugging and unplugging, and finger-tightened screws for a secure connection VGA connections are also commonly referred to as HD15, DB15 (a misnomer), PC in/out, RGB and RGBHV Connects PC or laptop to the projector, LCD monitor, and other video display system through VGA connections', 'cable3.jpg', 'Hi-tech enterprise', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE IF NOT EXISTS `user_info` (
`user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL,
  `registration_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `registration_date`) VALUES
(1, 'Pratik', 'Pawar', 'pratikpawarnasik@gmail.com', '123456789', '9637960396', 'At Post:Pimpalgaon Tal: Malegaon,Dist:Nashik', 'asdf', '2018-10-26'),
(2, 'Prasad', 'Kute', 'prkute08@gmail.com', 'pk', '9049565229', 'Akurdi', 'Pune', '2017-05-17'),
(3, 'Sharad', 'Pagar', 'sharad@gmail.com', 'sharad', '9874563210', 'pune', 'nashik', '2017-05-17'),
(4, 'Rohit', 'Shewale', 'rohitshewale3316@gmail.com', 'RohitS@123', '9049565229', 'akurdi', 'nashik', '2017-05-17'),
(6, 'Ganesh', 'Shelke', 'ganesh@gmail.com', '123456', '9876543212', 'At Post:Pimpalgaon Tal: Malegaon,Dist:Nashik', 'asdf', '2018-11-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
 ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
