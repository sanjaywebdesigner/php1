-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2019 at 06:34 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mul_tab`
--

-- --------------------------------------------------------

--
-- Table structure for table `jcb`
--

DROP TABLE IF EXISTS `jcb`;
CREATE TABLE IF NOT EXISTS `jcb` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jcb`
--

INSERT INTO `jcb` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('jan', 'jan', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `jj`
--

DROP TABLE IF EXISTS `jj`;
CREATE TABLE IF NOT EXISTS `jj` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rahul`
--

DROP TABLE IF EXISTS `rahul`;
CREATE TABLE IF NOT EXISTS `rahul` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rahul`
--

INSERT INTO `rahul` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('jan', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

DROP TABLE IF EXISTS `reg`;
CREATE TABLE IF NOT EXISTS `reg` (
  `ID` varchar(50) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(30) NOT NULL,
  `ADDRESS` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `USERNAME`, `PASSWORD`, `ADDRESS`) VALUES
('1', 'rahul', '123', 'delhi'),
('2', 'tony', '123', '123'),
('', '', '', ''),
('3', 'jj', '123', '123'),
('4', 'kk', '123', '123'),
('5', 'ss', '123', '123'),
('6', 'uu', '123', '123'),
('7', 'll', '123', '123'),
('8', 'yy', '123', '123'),
('jcb', '123', '123', '23'),
('rahul', '123', '123', '123'),
('verma', '123', '123', '123'),
('jj', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `verma`
--

DROP TABLE IF EXISTS `verma`;
CREATE TABLE IF NOT EXISTS `verma` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verma`
--

INSERT INTO `verma` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('jan', '123', '123', '123'),
('fed', '12', '123', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
