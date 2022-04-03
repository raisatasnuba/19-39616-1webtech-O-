-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2022 at 03:34 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodmenu`
--

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `code` int(11) NOT NULL,
  `image` text NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `display` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`code`, `image`, `name`, `price`, `display`) VALUES
(101, 'Honey-Buffalo-Wings.jpg', 'Buffalo Wings', 260, 'Yes'),
(102, 'chicken-shawarma.jpg', 'Shawrma', 100, 'Yes'),
(103, 'chowmein.jpg', 'Chowmein', 150, 'Yes'),
(104, 'naga drum box.jpg', 'Naga Drum Box', 240, 'Yes'),
(105, 'rice.jpg', 'Fried Rice', 230, 'Yes'),
(106, 'nachos.jpg', 'Nachos', 150, 'Yes'),
(107, 'BFV8354_Honey_BBQ_Chicken_Wings1.jpg', 'BBQ Chicken Wings', 220, 'Yes'),
(108, 'Hummus-Pasta-151.jpg', 'Pasta', 350, 'Yes'),
(109, 'french fries.jpg', 'french fries', 120, 'Yes'),
(110, 'biriyani.jpg', 'Biriyani', 400, 'Yes'),
(111, 'fried chicken.jpg', 'fried chicken', 250, 'Yes'),
(112, 'burger.jpg', 'Burger', 250, 'Yes'),
(113, 'salad1.jpg', 'Cashewnut Salad', 350, 'Yes'),
(114, 'wedges.jpg', 'Wedges', 100, 'Yes'),
(115, 'sandwich.jpg', 'Sandwich', 220, 'Yes'),
(116, 'momo.jpg', 'Chicken Momo', 180, 'Yes'),
(117, 'cheese.jpg', 'Chicken Chilli Cheese', 250, 'Yes'),
(118, 'roll.jpg', 'Chicken Egg Roll', 150, 'Yes'),
(119, 'spring-rolls1.jpg', 'Spring Roll', 180, 'Yes'),
(120, 'naga wings.png', 'Naga wings', 220, 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
