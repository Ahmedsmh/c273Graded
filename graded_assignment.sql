-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 10:27 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graded_assignment`
--

-- --------------------------------------------------------

--
-- Table structure for table `exercise`
--

CREATE TABLE `exercise` (
  `exercises` varchar(45) NOT NULL,
  `duration` int(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `height` decimal(3,2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `birthdate` date NOT NULL,
  `activeLevel` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`username`, `password`, `height`, `weight`, `birthdate`, `activeLevel`) VALUES
('Ahmed', '', '0.00', '0.00', '0000-00-00', ''),
('Ahmed', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('dddd', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('', '', '0.00', '0.00', '0000-00-00', ''),
('ahmed', 'ahmed', '1.54', '78.00', '0000-00-00', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
