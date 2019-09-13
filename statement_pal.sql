-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2019 at 12:50 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.2.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `statement_pal`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `spstatement` (IN `paccount` VARCHAR(50), IN `pstmt` VARCHAR(500))  BEGIN
 INSERT INTO statement(account,stmt) VALUES(paccount,pstmt);
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `act_id` int(255) NOT NULL,
  `action` text NOT NULL,
  `user_details` varchar(255) NOT NULL,
  `time_added` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`act_id`, `action`, `user_details`, `time_added`) VALUES
(1, 'Registered Account', 'opeyemi', '2019-09-09 10:01:09'),
(2, 'Retrieved Account', 'opeyemi', '2019-09-09 10:01:29'),
(3, 'Update Password', 'opeyemi', '2019-09-09 10:09:51'),
(4, 'Logged In', 'opeyemi', '2019-09-09 10:09:51'),
(5, 'Logged In', 'opeyemi', '2019-09-09 10:09:51'),
(6, 'Logged In', 'opeyemi', '2019-09-09 10:11:23'),
(7, 'Logged In', 'opeyemi', '2019-09-09 10:11:24'),
(8, 'Logged Out', 'opeyemi', '2019-09-09 10:11:27'),
(9, 'Logged In', 'opeyemi', '2019-09-09 10:17:35'),
(10, 'Logged In', 'opeyemi', '2019-09-09 10:17:35'),
(11, 'Logged Out', 'opeyemi', '2019-09-09 10:25:57'),
(12, 'Logged In', 'Teeisdaboi', '2019-09-09 10:26:21'),
(13, 'Logged In', 'Teeisdaboi', '2019-09-09 10:26:21'),
(14, 'Logged Out', 'Teeisdaboi', '2019-09-09 10:26:41'),
(15, 'Logged In', 'eliz', '2019-09-09 10:27:04'),
(16, 'Logged In', 'eliz', '2019-09-09 10:27:04'),
(17, 'Logged Out', 'eliz', '2019-09-09 10:27:18'),
(18, 'Logged In', 'opeyemi', '2019-09-09 10:27:25'),
(19, 'Logged In', 'opeyemi', '2019-09-09 10:27:26'),
(20, 'Logged Out', 'opeyemi', '2019-09-09 11:02:38'),
(21, 'Registered Account', 'tolajide74@gmail.com', '2019-09-11 08:48:22'),
(22, 'Registered Account', 'tola', '2019-09-11 08:50:38'),
(23, 'Registered Account', 'chima', '2019-09-11 08:53:09'),
(24, 'Registered Account', 'timi', '2019-09-11 08:53:46'),
(25, 'Logged In', 'timi', '2019-09-11 08:53:56'),
(26, 'Logged In', 'timi', '2019-09-11 08:53:56'),
(27, 'Logged Out', 'timi', '2019-09-11 09:13:09'),
(28, 'Registered Account', 'tolajide74@gmail.com', '2019-09-11 09:13:21'),
(29, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 09:16:19'),
(30, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 09:16:19'),
(31, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 09:22:32'),
(32, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 09:22:34'),
(33, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 09:22:34'),
(34, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 11:09:56'),
(35, 'Registered Account', 'tolajide74@gmail.com', '2019-09-11 11:43:20'),
(36, 'Logged In', '1000818831', '2019-09-11 11:50:00'),
(37, 'Logged In', '1000818831', '2019-09-11 11:50:00'),
(38, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:51:36'),
(39, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:51:36'),
(40, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 11:57:22'),
(41, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:58:16'),
(42, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:58:16'),
(43, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 11:58:21'),
(44, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:58:24'),
(45, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 11:58:24'),
(46, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 12:34:34'),
(47, 'Retrieved Account', 'tolajide74@gmail.com', '2019-09-11 12:37:23'),
(48, 'Retrieved Account', '1000818831', '2019-09-11 12:37:41'),
(49, 'Retrieved Account', 'tolajide74@gmail.com', '2019-09-11 12:41:03'),
(50, 'Retrieved Account', '1000818831', '2019-09-11 12:41:22'),
(51, 'Retrieved Account', '1000818831', '2019-09-11 12:42:11'),
(52, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 13:59:28'),
(53, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:00:21'),
(54, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:00:21'),
(55, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:02:35'),
(56, 'Retrieved Account', 'tolajide74@gmail.com', '2019-09-11 14:02:41'),
(57, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:02:44'),
(58, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:02:44'),
(59, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:03:53'),
(60, 'Retrieved Account', 'tolajide74@gmail.com', '2019-09-11 14:03:57'),
(61, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:04:00'),
(62, 'Update Password', 'tolajide74@gmail.com', '2019-09-11 14:04:00'),
(63, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:08:23'),
(64, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:10:43'),
(65, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:10:43'),
(66, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:10:45'),
(67, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:10:47'),
(68, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:10:47'),
(69, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:11:16'),
(70, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:23:13'),
(71, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:23:13'),
(72, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:24:36'),
(73, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:24:39'),
(74, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:24:39'),
(75, 'Logged Out', 'tolajide74@gmail.com', '2019-09-11 14:24:41'),
(76, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:47:18'),
(77, 'Logged In', 'tolajide74@gmail.com', '2019-09-11 14:47:18'),
(78, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 07:59:30'),
(79, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 07:59:30'),
(80, 'Logged Out', 'tolajide74@gmail.com', '2019-09-13 08:05:50'),
(81, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:08:40'),
(82, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:08:40'),
(83, 'Logged Out', 'tolajide74@gmail.com', '2019-09-13 08:12:34'),
(84, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:13:11'),
(85, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:13:11'),
(86, 'Logged Out', 'tolajide74@gmail.com', '2019-09-13 08:16:50'),
(87, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:16:52'),
(88, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:16:52'),
(89, 'Logged Out', 'tolajide74@gmail.com', '2019-09-13 08:17:04'),
(90, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:17:11'),
(91, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 08:17:11'),
(92, 'Logged Out', 'tolajide74@gmail.com', '2019-09-13 10:03:57'),
(93, 'Registered Account', 'rafael.nadal@testing.com', '2019-09-13 10:04:57'),
(94, 'Logged In', 'rafael.nadal@testing.com', '2019-09-13 10:05:04'),
(95, 'Logged In', 'rafael.nadal@testing.com', '2019-09-13 10:05:04'),
(96, 'Logged Out', 'rafael.nadal@testing.com', '2019-09-13 10:40:52'),
(97, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 10:40:59'),
(98, 'Logged In', 'tolajide74@gmail.com', '2019-09-13 10:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `time_registered` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`user_id`, `name`, `username`, `password`, `status`, `time_registered`) VALUES
(1, 'Adesina Taiwo Olajumoke', 'tolajide74@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', 1, '2018-12-12 08:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `registration_id` int(255) NOT NULL,
  `full_name` text NOT NULL,
  `account_number` varchar(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `full_name`, `account_number`, `username`, `password`, `customer_id`, `created_at`) VALUES
(2, 'ADESOLA KOLA', '1000818831', 'tolajide74@gmail.com', 'b63e58a251cbdb2678919dbcd79fdc519c927304', '727592', '2019-09-11 11:43:20'),
(3, 'MOSUNMOLA SHOMUYIWA', '1000797096', 'rafael.nadal@testing.com', 'd129714f4d8a7e26b7fbe81bca2d5d5eab113d94', '684462', '2019-09-13 10:04:57');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(11) NOT NULL,
  `account` varchar(50) DEFAULT NULL,
  `stmt` text NOT NULL,
  `customerid` int(11) DEFAULT NULL,
  `customer_name` varchar(100) DEFAULT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `account`, `stmt`, `customerid`, `customer_name`, `email`) VALUES
(1, '1000818832', '{acctid:1000818832,stmtid:183002558339788.020001,currency:NGN,vdate:20180118,bdate:20180124,amt:-200000,description:,transref:AAACT1802499846F1C}', 727592, 'CHIMAEZE ADAOBI', 'local.man@nuclear.com'),
(2, '1000818832', '{acctid:1000818832,stmtid:183002558339788.040001,currency:NGN,vdate:20180118,bdate:20180124,amt:-4000,description:,transref:AAACT1802499846F4P}', 727592, 'CHIMAEZE ADAOBI', 'local.man@nuclear.com'),
(3, '1000818832', '{acctid:1000818832,stmtid:183002558339788.060001,currency:NGN,vdate:20180118,bdate:20180124,amt:-200,description:,transref:AAACT1802499846F4R}', 727592, 'CHIMAEZE ADAOBI', 'local.man@nuclear.com'),
(4, '1000818832', '{acctid:1000818832,stmtid:183000915539846.000001,currency:NGN,vdate:20180118,bdate:20180124,amt:4000,description:,transref:AAACT180243B4XSHSR}', 727592, 'CHIMAEZE ADAOBI', 'local.man@nuclear.com'),
(5, '1000818832', '{acctid:1000818832,stmtid:183000915539846.000002,currency:NGN,vdate:20180118,bdate:20180124,amt:200,description:,transref:AAACT180243B4XSHSR}', 727592, 'CHIMAEZE ADAOBI', 'local.man@nuclear.com'),
(6, '1000797096', '{acctid:1000797096,stmtid:182961532662239.020001,currency:NGN,vdate:20180115,bdate:20180119,amt:-150000,description:,transref:AAACT180195KPHKN0P}', 684462, 'MOSUNMOLA SHOMUYIWA', 'rafael.nadal@testing.com'),
(7, '1000797096', '{acctid:1000797096,stmtid:182961532662240.000001,currency:NGN,vdate:20180114,bdate:20180117,amt:-3000,description:,transref:AAACT180195KPHKN3V}', 684462, 'MOSUNMOLA SHOMUYIWA', 'rafael.nadal@testing.com'),
(8, '1000797096', '{acctid:1000797096,stmtid:182961532662240.020001,currency:NGN,vdate:20180112,bdate:20180121,amt:-200,description:,transref:AAACT180195KPHKN70}', 684462, 'MOSUNMOLA SHOMUYIWA', 'rafael.nadal@testing.com'),
(9, '1000797096', '{acctid:1000797096,stmtid:182967678762357.030001,currency:NGN,vdate:20180115,bdate:20180119,amt:3000,description:,transref:AAACT18019WX6GXFTN}', 684462, 'MOSUNMOLA SHOMUYIWA', 'rafael.nadal@testing.com'),
(10, '1000797096', '{acctid:1000797096,stmtid:182967678762357.030002,currency:NGN,vdate:20180115,bdate:20180119,amt:200,description:,transref:AAACT18019WX6GXFTN}', 684462, 'MOSUNMOLA SHOMUYIWA', 'rafael.nadal@testing.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- Indexes for table `statement`
--
ALTER TABLE `statement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
