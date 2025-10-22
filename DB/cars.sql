-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2024 at 05:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `dob` int(11) NOT NULL,
  `mob` int(11) NOT NULL,
  `yob` int(11) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`, `dob`, `mob`, `yob`, `phoneno`, `mail`) VALUES
('csquare', 'Santhosh', '1', 1, 9, 2004, '9080826304', 'csquaresanthosh@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `carss`
--

CREATE TABLE `carss` (
  `name` varchar(20) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `img` varchar(255) NOT NULL,
  `availcars` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carss`
--

INSERT INTO `carss` (`name`, `brand`, `price`, `fuel`, `img`, `availcars`) VALUES
('Audi RSQ8', 'AUDI', '7900000', 'Petrol', '../images/AUDI/rsq8.png', 10),
('The Benz S Class', 'BENZ', '12008400', 'Petrol', '../images/BENZ/s_class.png', 134),
('The BMW X3', 'BMW', '100000000', 'Petrol', '../images/BMW/x3.jpg', 13);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `name` varchar(50) NOT NULL,
  `file` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `name` varchar(50) NOT NULL,
  `pno` varchar(50) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `tid` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `success` int(1) NOT NULL,
  `canceled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `dob` int(11) NOT NULL,
  `mob` int(11) NOT NULL,
  `yob` int(11) NOT NULL,
  `phoneno` varchar(11) NOT NULL,
  `mail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `pass`, `dob`, `mob`, `yob`, `phoneno`, `mail`) VALUES
('csquare', 'Santhosh', '1', 1, 9, 2004, '9080826304', 'csquaresanthosh@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`,`phoneno`,`mail`);

--
-- Indexes for table `carss`
--
ALTER TABLE `carss`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`phoneno`,`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
