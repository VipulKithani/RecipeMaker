-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2018 at 06:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotkit`
--

-- --------------------------------------------------------

--
-- Table structure for table `checkbox1`
--

CREATE TABLE `checkbox1` (
  `Ingredients` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkbox1`
--

INSERT INTO `checkbox1` (`Ingredients`) VALUES
(' Three '),
(' Seven '),
(' Three '),
(' Six ');

-- --------------------------------------------------------

--
-- Table structure for table `hotkit`
--

CREATE TABLE `hotkit` (
  `Name` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ConfirmPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotkit`
--

INSERT INTO `hotkit` (`Name`, `Email`, `Password`, `ConfirmPassword`) VALUES
('vipul', 'vipul,kithani@gmail.', 'asdf', 'asdf'),
('karan', 'k@abc', '2345', '2345'),
('vipul', 'abc@gmail.com', '0987', '0987'),
('mayur', 'may@abc.com', 'asdf', 'asdf'),
('qwe', 'qwe@d.com', '1234', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
