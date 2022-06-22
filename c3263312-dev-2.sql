-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 22, 2022 at 09:46 AM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c3263312-dev-2`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACTIVITYLOG`
--

CREATE TABLE `ACTIVITYLOG` (
  `LOGID` int NOT NULL,
  `TIMESTAMP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `USER` int NOT NULL,
  `ACTIVITY` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSETS`
--

CREATE TABLE `ASSETS` (
  `ASSETID` int NOT NULL,
  `NAME` varchar(15) NOT NULL,
  `TYPE` varchar(10) NOT NULL,
  `LOCATION` varchar(10) NOT NULL,
  `STATUS` varchar(15) DEFAULT NULL,
  `AQUIRED` date DEFAULT NULL,
  `RENEWAL TERM` varchar(15) DEFAULT NULL,
  `RENEWALDATE` date DEFAULT NULL,
  `LASTVERIFIED` date NOT NULL,
  `NOTES` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ASSETSRECIEVED`
--

CREATE TABLE `ASSETSRECIEVED` (
  `RECIEVEDID` int NOT NULL,
  `ASSETID` int NOT NULL,
  `DELIVERYID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `DELIVERYS`
--

CREATE TABLE `DELIVERYS` (
  `DELIVERYID` int NOT NULL,
  `DATE` date NOT NULL,
  `SUPPLIER` varchar(15) NOT NULL,
  `PRICE` varchar(10) NOT NULL DEFAULT '£0:00',
  `CONTENTS` varchar(100) NOT NULL,
  `DESTINATION` varchar(5) NOT NULL,
  `RECIEVEDBY` varchar(10) NOT NULL,
  `COMPLETE` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `PCINFO`
--

CREATE TABLE `PCINFO` (
  `PCID` int NOT NULL,
  `ASSETID` int NOT NULL,
  `LOCATION` varchar(10) NOT NULL,
  `BECTAG` varchar(20) NOT NULL,
  `SERIAL` varchar(30) NOT NULL,
  `MAC` varchar(25) NOT NULL,
  `ITSTAG` varchar(25) NOT NULL,
  `NOTES` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `REMOVED`
--

CREATE TABLE `REMOVED` (
  `REMOVALID` int NOT NULL,
  `ASSETID` int NOT NULL,
  `USERID` int NOT NULL,
  `DATE` date NOT NULL,
  `REASON` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ROOMS`
--

CREATE TABLE `ROOMS` (
  `ROOMID` int NOT NULL,
  `NAME` varchar(6) NOT NULL,
  `TYPE` varchar(8) NOT NULL DEFAULT 'LAB',
  `BUILDING` varchar(20) NOT NULL,
  `CAMPUS` varchar(15) NOT NULL DEFAULT 'Headingley'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `USERS`
--

CREATE TABLE `USERS` (
  `USERID` int NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `SNAME` varchar(25) NOT NULL,
  `EMAIL` varchar(30) NOT NULL,
  `ROOM` int NOT NULL,
  `PHONE` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `LEVEL` int NOT NULL,
  `PASSWORD` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `USERS`
--

INSERT INTO `USERS` (`USERID`, `FNAME`, `SNAME`, `EMAIL`, `ROOM`, `PHONE`, `LEVEL`, `PASSWORD`) VALUES
(23, 'Adam', 'Jeffreson', 'test', 212, '+447495669171', 1, 'test'),
(24, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 1, 'Password'),
(25, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 1, 'Password'),
(26, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 1, 'Password'),
(27, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 2, 'Password'),
(28, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 2, 'Password'),
(29, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 4, '+447495669171', 4, 'Password'),
(30, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 45, 'Password'),
(31, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 99, '+447495669171', 99, 'Password'),
(32, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 99, 'Password'),
(33, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 5, '$2y$10$mtLNQfWFiJU31GEi6tFm5.tCu/ZN3AqEeVvTaHznNZprgBmWy94TG'),
(34, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 5, '$2y$10$aSD010gv0mDF/x0C7v2p6eBEBc2V2nmo9jrqkssherrjzpdjRm2R.'),
(35, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 4, '$2y$10$I/OMaog0oB4G0bs.NrO01esODkdv.zqqVIUVXLRf5YToXyKyl59bS'),
(36, 'Adam', 'Jeffreson', 'adam.jeffreson@gmail.com', 212, '+447495669171', 500, '$2y$10$6rqFQaTxU7PLAu38WMxDjOBiUpAVl6JNi6QiQWuAT79itwN7xYsva');

-- --------------------------------------------------------

--
-- Table structure for table `WORKSTATIONS`
--

CREATE TABLE `WORKSTATIONS` (
  `WSID` int NOT NULL,
  `NAME` varchar(8) NOT NULL,
  `LOCATION` varchar(15) NOT NULL,
  `TYPE` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACTIVITYLOG`
--
ALTER TABLE `ACTIVITYLOG`
  ADD PRIMARY KEY (`LOGID`);

--
-- Indexes for table `ASSETS`
--
ALTER TABLE `ASSETS`
  ADD PRIMARY KEY (`ASSETID`);

--
-- Indexes for table `ASSETSRECIEVED`
--
ALTER TABLE `ASSETSRECIEVED`
  ADD PRIMARY KEY (`RECIEVEDID`);

--
-- Indexes for table `DELIVERYS`
--
ALTER TABLE `DELIVERYS`
  ADD PRIMARY KEY (`DELIVERYID`);

--
-- Indexes for table `PCINFO`
--
ALTER TABLE `PCINFO`
  ADD PRIMARY KEY (`PCID`),
  ADD UNIQUE KEY `MAC` (`MAC`);

--
-- Indexes for table `REMOVED`
--
ALTER TABLE `REMOVED`
  ADD PRIMARY KEY (`REMOVALID`);

--
-- Indexes for table `ROOMS`
--
ALTER TABLE `ROOMS`
  ADD PRIMARY KEY (`ROOMID`),
  ADD UNIQUE KEY `NAME` (`NAME`);

--
-- Indexes for table `USERS`
--
ALTER TABLE `USERS`
  ADD PRIMARY KEY (`USERID`);

--
-- Indexes for table `WORKSTATIONS`
--
ALTER TABLE `WORKSTATIONS`
  ADD PRIMARY KEY (`WSID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ACTIVITYLOG`
--
ALTER TABLE `ACTIVITYLOG`
  MODIFY `LOGID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ASSETS`
--
ALTER TABLE `ASSETS`
  MODIFY `ASSETID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `DELIVERYS`
--
ALTER TABLE `DELIVERYS`
  MODIFY `DELIVERYID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ROOMS`
--
ALTER TABLE `ROOMS`
  MODIFY `ROOMID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `USERS`
--
ALTER TABLE `USERS`
  MODIFY `USERID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `WORKSTATIONS`
--
ALTER TABLE `WORKSTATIONS`
  MODIFY `WSID` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
