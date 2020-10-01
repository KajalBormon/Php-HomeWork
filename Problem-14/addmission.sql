-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 01, 2020 at 03:07 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homework`
--

-- --------------------------------------------------------

--
-- Table structure for table `addmission`
--

CREATE TABLE `addmission` (
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `birth` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `ssc_roll` int(100) NOT NULL,
  `ssc_session` varchar(100) NOT NULL,
  `ssc_gpa` int(100) NOT NULL,
  `hsc_roll` int(100) NOT NULL,
  `hsc_session` varchar(100) NOT NULL,
  `hsc_gpa` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmission`
--

INSERT INTO `addmission` (`first_name`, `last_name`, `dept`, `birth`, `address`, `phone`, `gender`, `ssc_roll`, `ssc_session`, `ssc_gpa`, `hsc_roll`, `hsc_session`, `hsc_gpa`) VALUES
('Kajal', 'Bormon', 'CSE', '1999-06-15', 'Mymensingh', '01700925399', 'Male', 172383, '2014-2015', 5, 164721, '2016-2017', 5);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
