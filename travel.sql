-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2017 at 10:50 AM
-- Server version: 5.6.34-log
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--
CREATE DATABASE IF NOT EXISTS `travel` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `travel`;

-- --------------------------------------------------------

--
-- Table structure for table `admindb`
--

DROP TABLE IF EXISTS `admindb`;
CREATE TABLE IF NOT EXISTS `admindb` (
  `id` int(11) NOT NULL,
  `admin` varchar(20) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindb`
--

INSERT INTO `admindb` (`id`, `admin`, `password`) VALUES
(1, 'riazali', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

DROP TABLE IF EXISTS `buses`;
CREATE TABLE IF NOT EXISTS `buses` (
  `id` int(11) NOT NULL,
  `busnum` int(11) NOT NULL,
  `mdate` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `busnum`, `mdate`, `status`) VALUES
(1, 1010, 2017, 0),
(2, 1010, 2017, 0),
(3, 10210, 2017, 0),
(4, 0, 2017, 0),
(5, 1000, 2017, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `id` int(11) NOT NULL,
  `cname` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL,
  `mdate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cname`, `cdate`, `mdate`, `status`) VALUES
(71, 'Hunza ', '2017-06-30 06:25:14', '2017-07-03 09:10:17', 1),
(72, 'Gilgit', '2017-06-30 06:25:20', '2017-07-03 09:05:46', 1),
(73, 'Swat ', '2017-07-03 09:05:59', '2017-07-03 09:11:19', 1),
(74, 'Lahore ', '2017-07-03 09:06:04', '2017-07-03 09:11:22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL,
  `dept` varchar(30) NOT NULL,
  `arrival` varchar(30) NOT NULL,
  `datee` varchar(30) NOT NULL,
  `timee` varchar(30) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `dept`, `arrival`, `datee`, `timee`, `fare`) VALUES
(3, 'Hunza', 'Gilgit', '07/07/2017', '12:00 PM', 800),
(5, 'Swat', 'Lahore', '07/08/2017', '04:00 PM', 1400),
(6, 'Hunza', 'Gilgit', '07/07/2017', '07:00 PM', 870),
(7, 'Lahore', 'Gilgit', '07/07/2017', '07:00 PM', 870),
(8, 'Hunza', 'Lahore', '07/07/2017', '07:00 PM', 870),
(9, 'Hunza', 'Swat', '07/07/2017', '07:00 PM', 870),
(10, 'Hunza', 'Swat', '07/08/2017', '03:00 PM', 1100),
(11, 'Hunza', 'Gilgit', '07/12/2017', '01:30 PM', 180);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

DROP TABLE IF EXISTS `driver`;
CREATE TABLE IF NOT EXISTS `driver` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cnic` double NOT NULL,
  `address` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`id`, `name`, `cnic`, `address`, `status`, `mdate`) VALUES
(6, 'waqar', 714714447174, 'swat', 1, '2017-06-20 06:17:46'),
(7, 'sadiq', 714714714741, 'peshakawar', 1, '2017-06-21 05:26:36'),
(8, 'gfgf', 141522021, 'hghg', 1, '2017-06-22 08:41:40');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

DROP TABLE IF EXISTS `expenses`;
CREATE TABLE IF NOT EXISTS `expenses` (
  `id` int(11) NOT NULL,
  `typename` varchar(20) NOT NULL,
  `ppi` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `typename`, `ppi`) VALUES
(1, 'sharbat anar', 140);

-- --------------------------------------------------------

--
-- Table structure for table `hostess`
--

DROP TABLE IF EXISTS `hostess`;
CREATE TABLE IF NOT EXISTS `hostess` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `cnic` double NOT NULL,
  `address` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mdate` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hostess`
--

INSERT INTO `hostess` (`id`, `name`, `cnic`, `address`, `status`, `mdate`) VALUES
(1, 'waqar', 714714447174, 'swat', 1, '2017-06-20 06:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `routes`
--

DROP TABLE IF EXISTS `routes`;
CREATE TABLE IF NOT EXISTS `routes` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routes`
--

INSERT INTO `routes` (`id`, `dept`, `arrival`, `fare`) VALUES
(20, 'Hunza', 'Swat mangora', 1100),
(21, 'Swat mangora', 'Hunza', 1200),
(22, 'Hunza', 'Gilgit', 800),
(23, 'Hunza', 'Gilgit', 800);

-- --------------------------------------------------------

--
-- Table structure for table `terminal`
--

DROP TABLE IF EXISTS `terminal`;
CREATE TABLE IF NOT EXISTS `terminal` (
  `id` int(11) NOT NULL,
  `terminal` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `terminal`
--

INSERT INTO `terminal` (`id`, `terminal`, `city`, `status`) VALUES
(1, 'hunza', 'Islamabad', 1),
(2, 'swat', 'Peshwar', 1),
(3, 'aliabad', 'Hunza', 1);

-- --------------------------------------------------------

--
-- Table structure for table `timing`
--

DROP TABLE IF EXISTS `timing`;
CREATE TABLE IF NOT EXISTS `timing` (
  `id` int(11) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `fare` int(11) NOT NULL,
  `ddate` varchar(20) NOT NULL,
  `depttime` time NOT NULL,
  `arrivaltime` time NOT NULL,
  `dseq` int(11) NOT NULL,
  `aseq` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timing`
--

INSERT INTO `timing` (`id`, `dept`, `arrival`, `fare`, `ddate`, `depttime`, `arrivaltime`, `dseq`, `aseq`, `status`) VALUES
(31, 'Hunza', 'Swat', 1100, '06/22/2017', '14:30:00', '14:30:00', 1, 1, 1),
(32, 'Hunza', 'gilgit', 400, '06/29/2017', '01:30:00', '03:30:00', 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindb`
--
ALTER TABLE `admindb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hostess`
--
ALTER TABLE `hostess`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terminal`
--
ALTER TABLE `terminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timing`
--
ALTER TABLE `timing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindb`
--
ALTER TABLE `admindb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=75;
--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `hostess`
--
ALTER TABLE `hostess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `terminal`
--
ALTER TABLE `terminal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `timing`
--
ALTER TABLE `timing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
