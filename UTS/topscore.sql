-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2021 at 10:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranking`
--

-- --------------------------------------------------------

--
-- Table structure for table `topscore`
--

CREATE TABLE `topscore` (
  `Player` varchar(20) NOT NULL,
  `Score` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topscore`
--

INSERT INTO `topscore` (`Player`, `Score`) VALUES
('sdfsdafdsaf', -10),
('sdfsdafa', 0),
('sdfsdafa', 70),
('bro', 10),
('sdfdsfsa', -10),
('sdfsdgdafhadg', 0),
('bvcnvcnxv', -10),
('tyityiyti', 30),
('trutrur5', 0),
('kjljklhjl', -10),
('sdafihsadl', -10),
('sdafihsadl', 0),
('sdafihsadl', -10),
('sdafihsadl', -10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
