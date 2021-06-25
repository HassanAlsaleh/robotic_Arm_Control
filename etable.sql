-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 09:59 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robotarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `etable`
--

CREATE TABLE `etable` (
  `Engine1` int(10) NOT NULL,
  `Engine2` int(10) NOT NULL,
  `Engine3` int(10) NOT NULL,
  `Engine4` int(10) NOT NULL,
  `Engine5` int(10) NOT NULL,
  `Engine6` int(10) NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `entry` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etable`
--

INSERT INTO `etable` (`Engine1`, `Engine2`, `Engine3`, `Engine4`, `Engine5`, `Engine6`, `status`, `entry`) VALUES
(0, 0, 0, 0, 0, 0, 0, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
