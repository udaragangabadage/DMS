-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 17, 2018 at 03:26 PM
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
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 'admin', '$2y$10$.Vuh5zFM9yB/l747GWnyMeidVaDlNYaPeXGRWU3nP/z1bTgPRNzHG'),
(8, 'alpha', 'alpha', 'alpha@gmail.com', 'alpha', '$2y$10$3mp8KopKMSohuPCdfG3GfOrZBcdPn4pS601YzT6EJZ1JpucDaTJ2m'),
(9, 'bravo', 'bravo', 'bravo@gmail.com', 'bravo', '$2y$10$RnMfK2p2qfwSyvQx5s3mpuz6xehR.q5qgAtSyMoEadASRJ9kwzZLm'),
(10, 'charley', 'charley', 'charley@gmail.com', 'charley', '$2y$10$nQF8.ApYFSDPYD4m7mcbcuY3lxd5224fM5kgwrqAj3YneA9fvoeHe'),
(11, 'delta', 'delta', 'delta@gmail.com', 'delta', '$2y$10$TstaCNFIXQTB.n7MOklvsuVfbDP7Nx.KJAoYjDKv7lIh3h5HcsjL2'),
(12, 'echo', 'echo', 'echo@gmail.com', 'echo', '$2y$10$DacZRfmszCdkpcMRbne7SO/eo3YBe/OdBcXyy8HHSc9aiM5/OJgJG'),
(13, 'foxtrot', 'foxtrot', 'foxtrot@gmai.com', 'foxtrot', '$2y$10$TuX3VWTDz8V/h9N6dzyzSuAvPGJE.6jcrHP8xmV70ex3AGKqZFusO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
