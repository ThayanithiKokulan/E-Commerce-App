-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2017 at 07:09 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `workedup`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicName` varchar(50) NOT NULL,
  `prodDescrip` varchar(1000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL DEFAULT '0.00',
  `prodQuantity` int(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicName`, `prodDescrip`, `prodPrice`, `prodQuantity`) VALUES
(1, 'Bluetooth', 'Bluetooth.jpg', 'Replacement  for applicance for mobile device\r\n', '1.00', 100),
(2, 'Duster', 'Duster.jpg', 'The above details have been prepared to help you select suitable products. Products and their ingredients are liable to change.\r\nYou should always read the label before consuming or using the product and never rely solely on the information presented here.\r\nIf you require specific advice on any Sainsbury''s branded product, please contact our Customer Careline on 0800 636262. For all other products, please contact the manufacturer.\r\nThis information is supplied for your personal use only. It may not be reproduced in any way without the prior consent of Sainsbury''s Supermarkets Ltd and due acknowledgement.', '2.50', 100),
(3, 'Mouse', 'Mouse.jpg', 'A mouse that suits people with smaller hands. For people who currently over-grip their mouse or feels their mouse is too large to move comfortably', '15.00', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
