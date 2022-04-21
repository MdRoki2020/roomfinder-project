-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 06:30 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomfinder`
--

-- --------------------------------------------------------

--
-- Table structure for table `bachelor`
--

CREATE TABLE `bachelor` (
  `id` int(11) NOT NULL,
  `flat_category` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `appertmentName` varchar(255) NOT NULL,
  `flatNumber` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rent` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `submitTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bachelor`
--

INSERT INTO `bachelor` (`id`, `flat_category`, `email`, `appertmentName`, `flatNumber`, `location`, `description`, `rent`, `photo`, `submitTime`) VALUES
(30, 'bachelor', 'mroki815@gmail.com', 'rokis vila', '1617', 'dhanmondi', '1 rooms 1 bath', 14400, '1967687645.jpg', '2022-03-17 05:06:14'),
(31, 'bachelor', 'mroki815@gmail.com', 'rokis vila', '1617', 'gulistan', '3 rooms 3 bath 1 kitchen', 10500, '503999733.jpg', '2022-03-17 05:06:35'),
(32, 'bachelor', 'mroki815@gmail.com', 'shekh vila', '1617', 'mohammadpur', '3 rooms 1 bath', 10400, '182843878.jpg', '2022-03-17 05:07:43'),
(33, 'bachelor', 'mroki815@gmail.com', 'rokis vila', '2020', 'gulistan', '3 rooms ', 3000, '910447064.jpg', '2022-03-17 05:08:11'),
(34, 'bachelor', 'mroki815@gmail.com', 'shekh vila', '2020', 'zigatola', '3 rooms 1 bath', 10600, '1757502939.jpg', '2022-03-17 05:08:49'),
(35, 'bachelor', 'mroki815@gmail.com', 'acar vila', '2822', 'mohammadpur', '3 rooms 2 bath', 14800, '1992691909.jpg', '2022-03-17 05:09:11'),
(36, 'bachelor', 'mroki815@gmail.com', 'azure', '2020', 'dhanmondi', '3 rooms 2 bath 1 kitchen', 20800, '1347422348.jpg', '2022-03-17 05:10:09'),
(37, 'bachelor', 'mroki815@gmail.com', 'azure', '1617', 'gulistan', '3 rooms 3 bath 1 kitchen', 12000, '1544544503.jpg', '2022-03-17 05:10:34'),
(38, 'bachelor', 'mroki815@gmail.com', 'shekh vila', '1616', 'gulistan', '3 rooms 2 bath', 12000, '1727041146.jpg', '2022-03-17 05:11:16'),
(39, 'bachelor', 'mroki815@gmail.com', 'acar vila', '1617', 'mohammadpur', '1 rooms 1 bath', 12600, '1935869738.jpg', '2022-03-17 05:11:31'),
(40, 'bachelor', 'mroki815@gmail.com', 'rokis vila', '1617', 'zigatola', '1 rooms 1 bath', 3300, '1631924583.jpg', '2022-03-17 05:11:54'),
(41, 'bachelor', 'mroki815@gmail.com', 'shekh vila', '1616', 'dhanmondi', '3 rooms 2 bath 1 kitchen', 20000, '1793211936.jpg', '2022-03-17 05:12:23');

-- --------------------------------------------------------

--
-- Table structure for table `billing_details`
--

CREATE TABLE `billing_details` (
  `userId` int(11) NOT NULL,
  `orderId` int(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userEmail` varchar(255) NOT NULL,
  `nid` int(255) NOT NULL,
  `flatNumber` int(255) NOT NULL,
  `flatCategory` varchar(255) NOT NULL,
  `publisherEmail` varchar(255) NOT NULL,
  `orderTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_details`
--

INSERT INTO `billing_details` (`userId`, `orderId`, `userName`, `userEmail`, `nid`, `flatNumber`, `flatCategory`, `publisherEmail`, `orderTime`) VALUES
(6, 12, 'tithee', 'tithee@gmail.com', 2147483647, 1617, 'bachelor', 'mroki815@gmail.com', '2022-03-09 04:43:22'),
(7, 20, 'Maugdho', 'maugdho@gmail.com', 2147483647, 1616, 'bachelor', 'mroki815@gmail.com', '2022-03-11 04:17:04'),
(8, 31, 'noor', 'noor@gmail.com', 2147483647, 1616, 'family', 'roki@gmail.com', '2022-03-11 16:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `flat_category` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `appertmentName` varchar(255) NOT NULL,
  `flatNumber` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `rent` int(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `submitTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`id`, `flat_category`, `email`, `appertmentName`, `flatNumber`, `location`, `description`, `rent`, `photo`, `submitTime`) VALUES
(38, 'family', 'tithee@gmail.com', 'shekh vila', '1616', 'mohammadpur', '3 rooms 2 bath', 14000, '1706195091.jpg', '2022-03-17 04:59:16'),
(39, 'family', 'tithee@gmail.com', 'acar vila', '1617', 'zigatola', '3 rooms 1 bath', 12500, '1687776895.jpg', '2022-03-17 05:00:00'),
(40, 'family', 'tithee@gmail.com', 'azure', '2822', 'dhanmondi', '3 rooms 3 bath 1 kitchen', 185000, '931392054.jpg', '2022-03-17 05:00:33'),
(41, 'family', 'tithee@gmail.com', 'acar vila', '1617', 'gulistan', '3 rooms 3 bath 1 kitchen', 17500, '833973431.jpg', '2022-03-17 05:01:04'),
(42, 'family', 'tithee@gmail.com', 'azure', '2822', 'zigatola', '3 rooms 1 bath', 13500, '990547342.jpg', '2022-03-17 05:01:37'),
(43, 'family', 'tithee@gmail.com', 'azure', '2822', 'mohammadpur', '3 rooms 2 bath 1 kitchen', 18500, '227520511.jpg', '2022-03-17 05:02:08'),
(44, 'family', 'tithee@gmail.com', 'acar vila', '2822', 'dhanmondi', '3 rooms 2 bath 1 kitchen', 18500, '1434210190.jpg', '2022-03-17 05:03:25'),
(45, 'family', 'tithee@gmail.com', 'rokis vila', '2822', 'dhanmondi', '3 rooms ', 10000, '601297485.jpg', '2022-03-17 05:03:46'),
(46, 'family', 'tithee@gmail.com', 'azure', '2020', 'dhanmondi', '1 rooms 1 bath', 6000, '338083550.jpg', '2022-03-17 05:04:17'),
(47, 'family', 'mroki815@gmail.com', 'rokis vila', '2822', 'dhanmondi', '3 rooms 1 bath', 15500, '2027651125.jpg', '2022-03-17 05:04:37'),
(48, 'family', 'mroki815@gmail.com', 'azure', '1617', 'zigatola', '3 rooms 3 bath 1 kitchen', 15700, '1767807000.jpg', '2022-03-17 05:04:55'),
(49, 'family', 'mroki815@gmail.com', 'azure', '1617', 'gulistan', '1 rooms 1 bath', 4200, '11344952.jpg', '2022-03-17 05:05:20');

-- --------------------------------------------------------

--
-- Table structure for table `registered_user`
--

CREATE TABLE `registered_user` (
  `userId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmPassword` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `registeredTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_user`
--

INSERT INTO `registered_user` (`userId`, `name`, `email`, `password`, `confirmPassword`, `photo`, `registeredTime`) VALUES
(7, 'tithee', 'tithee@gmail.com', '1234', '1234', '878694891.jpg', '2022-03-10 05:53:04'),
(8, 'Rs Roki', 'mroki815@gmail.com', '1234', '1234', '49049580.jpg', '2022-03-10 06:35:00'),
(9, 'nafisa islam', 'nafisa@gmail.com', '1234', '1234', '1894493331.jpg', '2022-03-11 16:53:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bachelor`
--
ALTER TABLE `bachelor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `billing_details`
--
ALTER TABLE `billing_details`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_user`
--
ALTER TABLE `registered_user`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bachelor`
--
ALTER TABLE `bachelor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `billing_details`
--
ALTER TABLE `billing_details`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `registered_user`
--
ALTER TABLE `registered_user`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
