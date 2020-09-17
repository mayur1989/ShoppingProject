-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2020 at 05:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `user_id` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(80) COLLATE latin1_general_ci NOT NULL,
  `phone` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1',
  `iscustomer` tinyint(4) NOT NULL COMMENT '1-cust,0-guest'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`user_id`, `name`, `email`, `password`, `address`, `phone`, `isactive`, `iscustomer`) VALUES
(1, '213', 'www', '', 'www', 'ww', 1, 0),
(2, 'testuser', 'testuser@gmail.com', 'test@123', 'CBD Belapur', '9767857957', 1, 0),
(3, 'Priyanka', 'abc@gmail.com', '', 'belapur', '9767857957', 1, 0),
(4, '', '', '', '', '', 1, 0),
(5, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0),
(6, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0),
(7, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0),
(8, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0),
(9, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0),
(10, 'Mayur', 'Undale@gmail.com', '', 'Patil', '9767857957', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `serial` int(11) NOT NULL,
  `date` date NOT NULL,
  `customerid` int(11) NOT NULL,
  `custname` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `address` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `mobileno` int(11) NOT NULL,
  `emailid` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `ordertotal` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`serial`, `date`, `customerid`, `custname`, `address`, `mobileno`, `emailid`, `ordertotal`) VALUES
(1, '2020-09-15', 1, '', '', 0, '', 0),
(2, '2020-09-15', 2, '', '', 0, '', 0),
(3, '2020-09-16', 3, '', '', 0, '', 0),
(4, '2020-09-16', 4, '', '', 0, '', 0),
(5, '2020-09-17', 5, '', '', 0, '', 0),
(6, '2020-09-17', 6, '', '', 0, '', 0),
(7, '2020-09-17', 7, '', '', 0, '', 0),
(8, '2020-09-17', 8, '', '', 0, '', 0),
(9, '2020-09-17', 9, '', '', 0, '', 0),
(10, '2020-09-17', 10, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `pkdetid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`pkdetid`, `orderid`, `productid`, `quantity`, `price`) VALUES
(1, 1, 1, 1, 250),
(2, 2, 1, 1, 250),
(3, 3, 8, 1, 10.99),
(4, 4, 2, 1, 22.3),
(5, 5, 4, 1, 15.99),
(6, 6, 4, 1, 15.99),
(7, 7, 4, 1, 15.99),
(8, 8, 4, 1, 15.99),
(9, 9, 4, 1, 15.99),
(10, 10, 4, 1, 15.99);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `serial` int(11) NOT NULL,
  `name` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `description` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `price` float NOT NULL,
  `picture` varchar(80) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`serial`, `name`, `description`, `price`, `picture`) VALUES
(1, 'View Sonic LCD', '19\" View Sonic Black LCD, with 10 months warranty', 250, 'images/lcd.jpg'),
(2, 'IBM CDROM Drive', 'IBM CDROM Drive', 80, 'images/cdrom-drive.jpg'),
(3, 'Laptop Charger', 'Dell Laptop Charger with 6 months warranty', 50, 'images/charger.jpg'),
(4, 'Seagate Hard Drive', '80 GB Seagate Hard Drive in 10 months warranty', 40, 'images/hard-drive.jpg'),
(5, 'Atech Mouse', 'Black colored laser mouse. No warranty', 5, 'images/mouse.jpg'),
(6, 'Nokia 5800', 'Nokia 5800 XpressMusic is a mobile device with 3.2\" widescreen display brings photos, video clips and web content to life', 299, 'images/mobile.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(45) NOT NULL,
  `password` varchar(75) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(100) NOT NULL,
  `user_email_id` varchar(100) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `address` varchar(100) NOT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_name`, `password`, `user_first_name`, `user_last_name`, `user_email_id`, `mobileno`, `address`, `isactive`) VALUES
(1, 'Testuser', 'test@123', 'Test', 'Test', 'test@gmail.com', 0, '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`pkdetid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`serial`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `pkdetid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `serial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
