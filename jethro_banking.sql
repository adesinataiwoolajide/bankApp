-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2019 at 04:31 PM
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
-- Database: `jethro_banking`
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
(1, 'Logged In', 'Teeisdaboi', '2019-09-06 09:57:55'),
(2, 'Logged In', 'Teeisdaboi', '2019-09-06 09:58:16'),
(3, 'Logged In', 'Teeisdaboi', '2019-09-06 09:58:35'),
(4, 'Logged In', 'Teeisdaboi', '2019-09-06 09:59:42'),
(5, 'Logged In', 'tolajide74@gmail.com', '2019-09-06 10:47:31'),
(6, 'Logged In', 'Teeisdaboi', '2019-09-06 10:47:42'),
(7, 'Logged In', 'Teeisdaboi', '2019-09-06 11:18:29'),
(8, 'Logged In', 'tolajide74@gmail.com', '2019-09-06 12:27:03'),
(9, 'Logged In', 'Teeisdaboi', '2019-09-06 12:27:10'),
(10, 'Logged In', 'Teeisdaboi', '2019-09-06 12:33:15'),
(11, 'Logged In', 'Teeisdaboi', '2019-09-06 13:07:51'),
(12, 'Logged In', 'eliz', '2019-09-06 14:29:16');

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
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`registration_id`, `full_name`, `account_number`, `username`, `password`, `created_at`) VALUES
(1, 'Adesina Kehinde', '1000797096', 'Teeisdaboi', 'b63e58a251cbdb2678919dbcd79fdc519c927304', '2019-09-06 09:38:31'),
(4, 'Akinloye Eliz', '1000797093', 'eliz', '9bea97ca54594f32677f9bd326119cdb56ababc9', '2019-09-06 09:52:52');

-- --------------------------------------------------------

--
-- Table structure for table `statement`
--

CREATE TABLE `statement` (
  `id` int(11) NOT NULL,
  `account` varchar(50) DEFAULT NULL,
  `stmt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `statement`
--

INSERT INTO `statement` (`id`, `account`, `stmt`) VALUES
(1, '1000797096', '{acctid:1000797096,stmtid:182961532662239.020001,stmtjson:{vdate:20180115,bdate:20180119,amt:-150000,description:,transref:AAACT180195KPHKN0P}}'),
(2, '1000797091', '{acctid:1000797096,stmtid:182961532662240.000001,stmtjson:{vdate:20180115,bdate:20180119,amt:-3000,description:,transref:AAACT180195KPHKN3V}}'),
(3, '1000797092', '{acctid:1000797096,stmtid:182961532662240.020001,stmtjson:{vdate:20180115,bdate:20180119,amt:-200,description:,transref:AAACT180195KPHKN70}}'),
(4, '1000797093', '{acctid:1000797096,stmtid:182967678762357.030001,stmtjson:{vdate:20180115,bdate:20180119,amt:3000,description:,transref:AAACT18019WX6GXFTN}}'),
(5, '1000797094', '{acctid:1000797096,stmtid:182967678762357.030002,stmtjson:{vdate:20180115,bdate:20180118,amt:200,description:,transref:AAACT18019WX6GXFTN}}'),
(6, '1000797095', '{acctid:1000797096,stmtid:182961532662239.020001,stmtjson:{vdate:20180115,bdate:20180119,amt:-150000,description:,transref:AAACT180195KPHKN0P}}'),
(7, '1000797096', '{acctid:1000797096,stmtid:182961532662240.000001,stmtjson:{vdate:20180115,bdate:20180119,amt:-3000,description:,transref:AAACT180195KPHKN3V}}'),
(8, '1000797097', '{acctid:1000797096,stmtid:182961532662240.020001,stmtjson:{vdate:20180115,bdate:20180119,amt:-200,description:,transref:AAACT180195KPHKN70}}'),
(9, '1000797098', '{acctid:1000797096,stmtid:182967678762357.030001,stmtjson:{vdate:20180115,bdate:20180119,amt:3000,description:,transref:AAACT18019WX6GXFTN}}'),
(10, '1000797096', '{acctid:1000797096,stmtid:182967678762357.030002,stmtjson:{vdate:20180115,bdate:20180118,amt:200,description:,transref:AAACT18019WX6GXFTN}}');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_id`);

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
  MODIFY `act_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `registration_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `statement`
--
ALTER TABLE `statement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
