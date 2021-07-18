-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2021 at 10:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitnoidanaps`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `type` varchar(60) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `mode` varchar(15) NOT NULL,
  `title` varchar(200) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `faculty1_name` varchar(70) NOT NULL,
  `faculty2_name` varchar(70) DEFAULT NULL,
  `faculty3_name` varchar(70) DEFAULT NULL,
  `student1_name` varchar(70) DEFAULT NULL,
  `student2_name` varchar(70) DEFAULT NULL,
  `student3_name` varchar(70) DEFAULT NULL,
  `student4_name` varchar(70) DEFAULT NULL,
  `student5_name` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `type`, `start_date`, `end_date`, `mode`, `title`, `venue`, `description`, `faculty1_name`, `faculty2_name`, `faculty3_name`, `student1_name`, `student2_name`, `student3_name`, `student4_name`, `student5_name`) VALUES
(1, '', '2021-07-23', '2021-07-23', 'online', 'DemoEvent', 'Teams', 'An online event for independence day', 'Charu Wahi', 'Niket Mehta', NULL, 'prashant kumar', 'Rishabh', NULL, NULL, NULL),
(2, '', '2021-07-20', '2021-07-21', '', 'New Event', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
