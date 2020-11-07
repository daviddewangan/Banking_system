-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2020 at 06:55 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` text NOT NULL,
  `current_balance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `current_balance`) VALUES
(1, 'Rajiv', 'rajiv@gmail.com', '9909990909', '20000'),
(2, 'nikhil', 'nikhil@gmail.com', '909998XXXX', '9892'),
(3, 'vijay', 'vijay@gmail.com', '908967XXXX', '8978'),
(4, 'praveen', 'praveen@gmail.com', '895776XXXX', '4000'),
(5, 'vishal', 'vishal@gmail.com', '79871258XX', '7688'),
(6, 'zaid', 'zaid@gmail.com', '996633XXXX', '7899'),
(7, 'yamunesh', 'yamu@gmail.com', '897788XXXX', '6789'),
(8, 'parul', 'parul@gmail.com', '987656XXXX', '10000'),
(9, 'akruti', 'ak@gmail.com', '98788XXXXX', '8767'),
(10, 'hrmant', 'hemant@gmail.com', '785699XXXX', '4577');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
