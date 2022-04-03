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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `cusreg`
--

CREATE TABLE `cusreg` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cusreg`
--

INSERT INTO `cusreg` (`name`, `email`, `username`, `phone`, `password`, `address`, `gender`, `date`) VALUES
('Wasima Kader', 'labiza@gmail.com', 'labiza', 1818180176, 'labiza%123', '11,ishar nandi, chittagong', 'Female', '2004-03-23'),
('Tasnuba ', 'raisa@gmail.com', 'raisa', 1883441918, 'raisa#123', '11,ishar nandi, chittagong', 'Female', '1999-09-07'),
('Parvin Tamim', 'tamim@gmail.com', 'tamim', 1815371698, 'tamim&123', 'jalalabad tower, kulshi, chittagong', 'Female', '1999-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cusreg`
--
ALTER TABLE `cusreg`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
