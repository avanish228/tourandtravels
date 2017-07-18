-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 11:15 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dark`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `username` varchar(1000) NOT NULL,
  `pwd` varchar(1000) NOT NULL,
  `mobile` int(12) NOT NULL,
  `addr` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tour_detail`
--

CREATE TABLE `tour_detail` (
  `name` varchar(1100) NOT NULL,
  `RegNo` varchar(1100) NOT NULL,
  `email` varchar(1100) NOT NULL,
  `number` varchar(1100) NOT NULL,
  `booking_id` varchar(1100) NOT NULL,
  `vehical_type` varchar(1100) NOT NULL,
  `From` varchar(1100) NOT NULL,
  `To` varchar(1100) NOT NULL,
  `start_date` varchar(1100) NOT NULL,
  `end_date` varchar(1100) NOT NULL,
  `startTime` varchar(1100) NOT NULL,
  `terms_and_conditions` varchar(1100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
