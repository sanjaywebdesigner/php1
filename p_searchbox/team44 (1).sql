-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 03, 2019 at 06:34 AM
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
-- Database: `team44`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `detail`) VALUES
(1, 'Concept', 'Web Technologies'),
(2, 'HTML', 'Basic HTML, Special Tags, Formatting Tags, HTML Forms'),
(3, 'CSS', 'Basic CSS, Advanced Topics, '),
(4, 'JAVASCRIPT', 'Syntax, Enable, Location, External, Operators, Variable'),
(5, 'PHP BASIC PART1', 'Introduction To PHP'),
(6, 'PHP Basic 2', 'Arrays and Array Functions'),
(7, 'MySQL Basic', 'Introduction To MySQL'),
(8, 'CMS', 'What is Joomla'),
(9, 'XML', 'What is XML'),
(10, 'PHP Date', 'What\'s a timestamp'),
(11, 'Files', 'Reading Files'),
(12, 'JavaScript', 'Ajax Basics'),
(13, 'File Formats', 'Creating PDF Files'),
(14, 'MySQL Database Administrators', 'Understanding MySQL Table Types'),
(15, 'PHP OOP', 'Understanding OOP Concepts'),
(16, 'sanjay', 'ds akla mala'),
(17, 'sanjay', 'testing file'),
(18, 'ajax2', 'content of ajax 2'),
(19, 'ajax 3', 'content of ajax3'),
(20, 'sanjay jain', 'cccccccc'),
(21, 'jain sanjay', 'cjdjjddjdjdj'),
(22, 'jain sanjay kumar', 'ggggg'),
(23, 'aaaaa', 'ssssssss'),
(24, 'rahul', '123'),
(25, 'jojo', '123'),
(26, 'bhavya', '123'),
(27, 'bapu', '12'),
(28, 'sanjaweb', '123'),
(29, 'himal', '123'),
(30, 'j', 'kjg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
