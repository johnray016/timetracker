-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2018 at 06:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracker`
--

-- --------------------------------------------------------

--
-- Table structure for table `timetracker`
--

CREATE TABLE `timetracker` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `login_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `timetracker`
--

INSERT INTO `timetracker` (`id`, `user_id`, `login_time`) VALUES
(5, 16, '2018-03-26 02:56:20'),
(6, 17, '2018-03-26 02:56:43'),
(8, 16, '2018-03-26 03:04:23'),
(9, 16, '2018-03-26 03:10:46'),
(10, 16, '2018-03-26 03:18:34'),
(11, 16, '2018-03-26 03:22:46'),
(12, 16, '2018-03-26 03:24:18'),
(13, 17, '2018-03-26 03:52:46'),
(14, 16, '2018-03-26 03:53:33'),
(16, 16, '2018-03-26 04:29:27'),
(17, 16, '2018-03-26 04:30:49'),
(18, 16, '2018-03-26 04:32:21'),
(20, 16, '2018-03-26 04:38:14'),
(21, 16, '2018-03-26 04:39:25'),
(22, 16, '2018-03-26 04:39:41'),
(23, 16, '2018-03-26 04:40:02'),
(24, 17, '2018-03-26 04:47:39'),
(25, 17, '2018-03-26 04:49:33'),
(26, 16, '2018-03-26 04:51:43'),
(27, 17, '2018-03-26 04:55:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `timetracker`
--
ALTER TABLE `timetracker`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `timetracker`
--
ALTER TABLE `timetracker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `timetracker`
--
ALTER TABLE `timetracker`
  ADD CONSTRAINT `timetracker_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
