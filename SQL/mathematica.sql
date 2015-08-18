-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2015 at 02:25 PM
-- Server version: 5.6.15-log
-- PHP Version: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mathematica`
--
CREATE DATABASE IF NOT EXISTS `mathematica` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mathematica`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `NaMe` varchar(100) NOT NULL,
  `EmAiL iD` varchar(100) NOT NULL,
  `LeVeL` int(11) NOT NULL,
  `LaStSoLvE` int(11) NOT NULL,
  UNIQUE KEY `EmAiL iD` (`EmAiL iD`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`NaMe`, `EmAiL iD`, `LeVeL`, `LaStSoLvE`) VALUES
('Mohit Garg', 'nikhil55591@gmail.com', 2, 21582);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
