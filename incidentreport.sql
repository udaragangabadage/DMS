-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 06, 2018 at 02:18 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `incidentreport`
--

-- --------------------------------------------------------

--
-- Table structure for table `increport`
--

CREATE TABLE `increport` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `latitude` varchar(256) NOT NULL,
  `longitude` varchar(256) NOT NULL,
  `incident` varchar(256) NOT NULL,
  `explanation` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `increport`
--

INSERT INTO `increport` (`user_id`, `user_name`, `user_email`, `address`, `latitude`, `longitude`, `incident`, `explanation`) VALUES
(1, 'a', 'a', 'alpha,121jojosd', 'a', 'a', 'Fire', 'sdasas'),
(2, 'c', 'ishanthaudara96@gmail.com', 'c', 'c', 'c', 'Fire', 'ddsssssssssss'),
(3, 'alpha', 'ishanthaudara96@gmail.com', 'ananda collage,Colombo 01000, Sri Lanka.', '79.86927930000002', '79.86927930000002', 'Leakages', 'this is leakage'),
(4, 'muditha', 'mudithapriyashan@gmail.com', 'ashoka vidyalaya,Vipulasena Mawatha, Colombo 01000, Sri Lanka', '79.86689460000002', '79.86689460000002', 'Fire', 'dadadaddadaddadaddddddddddd'),
(5, 'sanjana', 'alexee@gmail.com', 'd.s.senanayake collage 07 62, 08 R G Senanayake Mawatha, Colombo 00700, Sri Lanka', '79.87512040000001', '79.87512040000001', 'Leakages', 'this isadahdabauajaoda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `increport`
--
ALTER TABLE `increport`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `increport`
--
ALTER TABLE `increport`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
