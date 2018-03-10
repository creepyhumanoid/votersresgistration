-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 04:47 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voters`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
`ID` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `role` int(10) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`ID`, `fullname`, `role`, `uname`, `password`) VALUES
(1, 'admin', 1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblbarangay`
--

CREATE TABLE IF NOT EXISTS `tblbarangay` (
`ID` int(11) NOT NULL,
  `barangay` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbarangay`
--

INSERT INTO `tblbarangay` (`ID`, `barangay`) VALUES
(1, 'Tenejero'),
(2, 'Bagong silang'),
(3, 'Munting batangas'),
(4, 'Ibayo'),
(5, 'Cataning'),
(6, 'Poblacion'),
(7, 'Malabia'),
(8, 'Talisay'),
(9, 'Bagumbayan'),
(10, 'Dona Francisca'),
(11, 'Cupang Proper'),
(12, 'Cupang North'),
(13, 'Cupang West'),
(14, 'Sibacan'),
(15, 'Puerto Rivas Ibaba'),
(16, 'Puerto Rivas Itaas'),
(17, 'Tortugas'),
(18, 'Central'),
(19, 'Camacho'),
(20, 'Puerto Rivas Lote'),
(21, 'Dangcol'),
(22, 'Cabog-Cabog'),
(23, 'Tanato'),
(24, 'Tuyo');

-- --------------------------------------------------------

--
-- Table structure for table `tblgender`
--

CREATE TABLE IF NOT EXISTS `tblgender` (
`ID` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblgender`
--

INSERT INTO `tblgender` (`ID`, `gender`) VALUES
(1, 'Female'),
(2, 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `tblrole`
--

CREATE TABLE IF NOT EXISTS `tblrole` (
`ID` int(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblrole`
--

INSERT INTO `tblrole` (`ID`, `role`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblstatus`
--

CREATE TABLE IF NOT EXISTS `tblstatus` (
`ID` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblstatus`
--

INSERT INTO `tblstatus` (`ID`, `status`) VALUES
(1, 'member'),
(2, 'archieve');

-- --------------------------------------------------------

--
-- Table structure for table `tblvotersinfo`
--

CREATE TABLE IF NOT EXISTS `tblvotersinfo` (
`ID` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mi` varchar(3) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` int(2) NOT NULL,
  `address` varchar(50) NOT NULL,
  `barangay` int(20) NOT NULL,
  `status_id` int(10) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblvotersinfo`
--

INSERT INTO `tblvotersinfo` (`ID`, `fname`, `mi`, `lname`, `age`, `gender`, `address`, `barangay`, `status_id`, `created_at`) VALUES
(1, 'Francheska', 'G.', 'Ramos', 19, 1, '#101 Wanko', 1, 1, '0000-00-00'),
(2, 'mae', 'ih', 'hkkh', 898, 2, 'jjdsjlsd', 1, 1, '2018-02-24'),
(3, 'sa', '', '', 0, 2, '', 4, 2, '0000-00-00'),
(4, 'sasa', 'as', 'a', 32, 2, 'sasa', 4, 2, '2018-02-25'),
(5, 'aa', 'as', 'aa', 2, 1, '3232', 2, 1, '2018-02-25'),
(6, 'okay', 'al', 'lol', 9, 2, '020990290', 3, 1, '2018-02-25'),
(7, 'oo', 'as', 'asa', 23, 1, 'sasas', 5, 1, '2018-02-25'),
(8, 'k', 'as', 'aa', 23, 1, 'sasas', 9, 1, '2018-02-25'),
(9, 'K', 'SA', 'da', 2, 1, 'DSDS', 20, 1, '2018-02-25'),
(10, 'gfd', 'sd', 'sds', 232, 2, '32', 23, 1, '2018-02-25'),
(11, 'as', 'a', '', 0, 0, '', 6, 1, '2018-02-25'),
(12, 'dsas', '', '', 0, 1, '', 24, 1, '2018-02-25'),
(13, 'v', '', '', 0, 0, '', 24, 1, '2018-02-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblbarangay`
--
ALTER TABLE `tblbarangay`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblgender`
--
ALTER TABLE `tblgender`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblrole`
--
ALTER TABLE `tblrole`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstatus`
--
ALTER TABLE `tblstatus`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblvotersinfo`
--
ALTER TABLE `tblvotersinfo`
 ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblbarangay`
--
ALTER TABLE `tblbarangay`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `tblgender`
--
ALTER TABLE `tblgender`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblrole`
--
ALTER TABLE `tblrole`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblstatus`
--
ALTER TABLE `tblstatus`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tblvotersinfo`
--
ALTER TABLE `tblvotersinfo`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
