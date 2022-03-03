-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2021 at 12:27 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mypro_pt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `un` varchar(20) DEFAULT NULL,
  `ps` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `un`, `ps`) VALUES
(1, 'admin', 'a123'),
(2, 'adarsh', 'b123'),
(3, 'nihal', 'c123'),
(4, 'nikhil', '123'),
(5, 'nikhil', '123'),
(6, 'adhik', '234'),
(7, 'venkat', '678');

-- --------------------------------------------------------

--
-- Table structure for table `donor_registration`
--

DROP TABLE IF EXISTS `donor_registration`;
CREATE TABLE IF NOT EXISTS `donor_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bgroup` varchar(20) DEFAULT NULL,
  `mno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_registration`
--

INSERT INTO `donor_registration` (`id`, `name`, `age`, `city`, `email`, `address`, `bgroup`, `mno`) VALUES
(5, 'ashish', '18', 'bhadrachalam', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'b+', '9243676878'),
(6, 'kalpana', '18', 'bhadrachalam', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'b+', '9908653646'),
(7, 'bharath', '13', 'bhadrachalam', 'ac3733@srmist.edu.in', 'lakshmi narayana medical and general stores', 'a+', '6478699877'),
(8, 'adhik', '18', 'bhadrachalam', 'ac3733@srmist.edu.in', 'lakshmi narayana medical and general stores', 'ab+', '9243676878'),
(9, 'sri', '13', 'telangana', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'b+', '9243676878'),
(10, 'kodumuru narayana rao', '18', 'telangana', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'a+', '9243676878');

-- --------------------------------------------------------

--
-- Table structure for table `recipient_registration`
--

DROP TABLE IF EXISTS `recipient_registration`;
CREATE TABLE IF NOT EXISTS `recipient_registration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `bgroup` varchar(255) DEFAULT NULL,
  `mno` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recipient_registration`
--

INSERT INTO `recipient_registration` (`id`, `name`, `age`, `city`, `email`, `address`, `bgroup`, `mno`) VALUES
(1, 'adhik', 'dfsdfsddf', 'hyderbad', 'ac3733@srmist.edu.in', NULL, 'o+ve', '867846378'),
(2, 'adhik', 'dfsdfsddf', 'hyderbad', 'ac3733@srmist.edu.in', NULL, 'o+ve', '867846378'),
(3, 'adhik', '18', 'bhadrachalam', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'AB+ve', '9243676878'),
(4, 'adhik', '18', 'bhadrachalam', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'AB+ve', '9243676878'),
(5, 'adhik', '13', 'bhadrachalam', 'ac3733@srmist.edu.in', 'lakshmi narayana medical and general stores', 'AB+ve', '9243676878'),
(6, 'ashish', '18', 'dsaf', 'ko6149@srmist.edu.in', 'lakshmi narayana medical and general stores', 'AB+ve', '9243676878'),
(7, 'father', '18', 'rfsgf', 'adhikchintalwar12@gmail.com', 'gdsgfsd', 'AB+ve', '89576870'),
(8, 'nihal', '15', 'sdsdas', 'adhikchintalwar12@gmail.com', 'lakshmi narayana medical and general stores', 'o+ve', '3454q7547');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
