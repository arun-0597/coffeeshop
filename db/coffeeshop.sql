-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2020 at 09:14 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cregister`
--

CREATE TABLE `cregister` (
  `cid` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `cmobile` bigint(15) NOT NULL,
  `cemail` varchar(100) NOT NULL,
  `cpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `eregister`
--

CREATE TABLE `eregister` (
  `eid` int(11) NOT NULL,
  `ename` varchar(100) NOT NULL,
  `emobile` bigint(15) NOT NULL,
  `eemail` varchar(100) NOT NULL,
  `epass` varchar(100) NOT NULL,
  `eimg` varchar(500) NOT NULL,
  `eage` int(10) NOT NULL,
  `edob` varchar(15) NOT NULL,
  `egender` text NOT NULL,
  `ecity` varchar(50) NOT NULL,
  `estate` varchar(50) NOT NULL,
  `enation` text NOT NULL,
  `emstatus` text NOT NULL,
  `eeduqul` varchar(100) NOT NULL,
  `eyoj` bigint(20) NOT NULL,
  `eexp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cregister`
--
ALTER TABLE `cregister`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cemail` (`cemail`);

--
-- Indexes for table `eregister`
--
ALTER TABLE `eregister`
  ADD PRIMARY KEY (`eid`),
  ADD UNIQUE KEY `eemail` (`eemail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cregister`
--
ALTER TABLE `cregister`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eregister`
--
ALTER TABLE `eregister`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
