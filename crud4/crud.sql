-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 27, 2019 at 06:39 AM
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
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud_tab`
--

DROP TABLE IF EXISTS `crud_tab`;
CREATE TABLE IF NOT EXISTS `crud_tab` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud_tab`
--

INSERT INTO `crud_tab` (`username`, `password`, `id`, `address`) VALUES
('rahul', 'verma', '456', '123'),
('ban', 'ka', '01', 'nan'),
('steve', 'verma', '123', '456'),
('tom', '123', '456', '789'),
('peter', '123', '', ''),
('', '', '', ''),
('nick', 'dass', '123', '456'),
('zzz', 'zzz', 'zzz', 'zzz'),
('nnn', 'nnn', 'nnn', 'nnn'),
('uuu', 'uuu', 'uuu', 'uuu'),
('ppp', 'ppp1', 'ppp', 'ppp'),
('lll', 'lll', 'lll', 'lll'),
('jaivi', 'kar', '11', '22'),
('johnny', 'johnny ', 'ues', 'papa'),
('jag', 'bag', '60', '12'),
('dak', 'sin', '123', '456'),
('eewr', 'ewrf', 'weqr', 'ewqr'),
('wr', 'ewft', 'ewtf', 'wet'),
('jojo', 'jfo', 'josdf', 'joaf'),
('yank', ';lsdj', 'lsdfj', 'ldskfj');

-- --------------------------------------------------------

--
-- Table structure for table `jojo`
--

DROP TABLE IF EXISTS `jojo`;
CREATE TABLE IF NOT EXISTS `jojo` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jojo`
--

INSERT INTO `jojo` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('jan', '500', '1000', '123');

-- --------------------------------------------------------

--
-- Table structure for table `nick`
--

DROP TABLE IF EXISTS `nick`;
CREATE TABLE IF NOT EXISTS `nick` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nick`
--

INSERT INTO `nick` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('jan', '500', '1000', '500'),
('feb', '500', '120', '00');

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
('jan', '500', '1000', '0'),
('feb', '500', '2000', '0');

-- --------------------------------------------------------

--
-- Table structure for table `steve`
--

DROP TABLE IF EXISTS `steve`;
CREATE TABLE IF NOT EXISTS `steve` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `steve`
--

INSERT INTO `steve` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('feb', '500', '1000', '123');

-- --------------------------------------------------------

--
-- Table structure for table `yank`
--

DROP TABLE IF EXISTS `yank`;
CREATE TABLE IF NOT EXISTS `yank` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `yank`
--

INSERT INTO `yank` (`month`, `fees`, `balance`, `advance`) VALUES
('jan', '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `zzz`
--

DROP TABLE IF EXISTS `zzz`;
CREATE TABLE IF NOT EXISTS `zzz` (
  `month` varchar(30) NOT NULL,
  `fees` varchar(30) DEFAULT NULL,
  `balance` varchar(30) DEFAULT NULL,
  `advance` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zzz`
--

INSERT INTO `zzz` (`month`, `fees`, `balance`, `advance`) VALUES
('', '', '', ''),
('feb', '500', '1000', '000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
