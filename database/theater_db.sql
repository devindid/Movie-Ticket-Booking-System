-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2022 at 11:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(30) NOT NULL,
  `movie_id` int(30) NOT NULL,
  `ts_id` int(30) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `full` int(11) NOT NULL,
  `half` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `payment` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `movie_id`, `ts_id`, `lastname`, `firstname`, `contact_no`, `full`, `half`, `date`, `time`, `payment`) VALUES
(1, 7, 1, 'Smith', 'John', '0909505', 1, 0, '2020-09-18', '11:05:00', '0.00'),
(2, 5, 1, 'Smith', 'John', '546545646', 1, 0, '2020-09-18', '01:10:00', '0.00'),
(3, 1, 4, 'Smith', 'John', '0909505', 2, 0, '2020-09-16', '09:00:00', '0.00'),
(23, 19, 6, 'jojo', 'grt', '5', 5, 0, '0000-00-00', '09:00:00', '0.00'),
(24, 18, 3, 'rer', 'frr', '2', 0, 1, '2022-11-08', '09:00:00', '0.00'),
(25, 18, 2, 'Devindi', 'KKVC', '4', 4, 5, '2022-11-07', '09:00:00', '0.00'),
(26, 14, 4, 'jo', 'grt', '4', 4, 1, '2022-11-07', '09:00:00', '0.00'),
(27, 14, 2, 'hhhhh', 'hhh', '7', 7, 7, '2022-11-07', '09:00:00', '0.00'),
(28, 19, 3, 'hh', 'hhhhhh', '4', 1, 0, '0000-00-00', '09:00:00', '0.00'),
(29, 18, 2, 'ytt', 'r', 'grgr', 1, 5, '2022-11-07', '09:00:00', '0.00'),
(30, 18, 0, 'ytt', 'r', 'grgr', 0, 0, '0000-00-00', '00:00:00', '0.00'),
(31, 19, 6, 'chamodika', 'Ruhunu', '7', 4, 2, '0000-00-00', '09:00:00', '0.00'),
(32, 14, 3, 'hh', 'hhhhhh', '5', 5, 5, '0000-00-00', '09:00:00', '0.00'),
(33, 18, 3, 'yasiru', 'rr', '9', 4, 0, '2022-11-08', '09:00:00', '0.00'),
(34, 18, 2, 'Devindi', 'KKVC', '7', 4, 0, '2022-11-08', '09:00:00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(30) NOT NULL,
  `title` text NOT NULL,
  `cover_img` text NOT NULL,
  `description` text NOT NULL,
  `duration` float NOT NULL,
  `date_showing` date NOT NULL,
  `end_date` date NOT NULL,
  `trailer` text NOT NULL,
  `director` varchar(255) NOT NULL,
  `actor` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `available_theaters` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `cover_img`, `description`, `duration`, `date_showing`, `end_date`, `trailer`, `director`, `actor`, `writer`, `language`, `release_date`, `available_theaters`) VALUES
(21, 'gg', '', '', 0, '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_requests`
--

CREATE TABLE `movie_requests` (
  `id` int(255) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `theater_name` varchar(255) NOT NULL,
  `odc` int(255) NOT NULL,
  `balcony` int(255) NOT NULL,
  `box` int(255) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie_requests`
--

INSERT INTO `movie_requests` (`id`, `movie_name`, `theater_name`, `odc`, `balcony`, `box`, `start_date`, `end_date`) VALUES
(1, 'yoy', 'hhh', 2, 2, 2, '2022-11-02', '2022-11-10');

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater`
--

INSERT INTO `theater` (`id`, `name`) VALUES
(1, '3D'),
(2, 'Theater 1'),
(4, 'Ruhunu Cinema Matara'),
(5, 'KKVC Devindi');

-- --------------------------------------------------------

--
-- Table structure for table `theater_settings`
--

CREATE TABLE `theater_settings` (
  `id` int(30) NOT NULL,
  `theater_id` int(30) NOT NULL,
  `seat_group` varchar(250) NOT NULL,
  `seat_count` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theater_settings`
--

INSERT INTO `theater_settings` (`id`, `theater_id`, `seat_group`, `seat_count`) VALUES
(2, 2, 'Box 1', 20),
(3, 2, 'Box 2', 30),
(4, 1, 'Box 1', 30),
(5, 1, 'Box 2', 30),
(6, 4, 'ODC', 50),
(7, 5, 'ODC', 78);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `address`, `phone_number`, `username`, `password`, `user_type`) VALUES
(14, 'chamodika', 'chamodikadevindi555@gmail.com', 'galle', '0712204439', 'admin', '1234', 'admin'),
(15, 'yasiru', 'yasiru@gmail.com', 'colombo', '0712204478', 'yasiru', '456', 'user'),
(16, 'milini', 'milini@gmail.com', 'gampaha', '0712204439', 'milini', '789', 'theater_owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_requests`
--
ALTER TABLE `movie_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theater_settings`
--
ALTER TABLE `theater_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `movie_requests`
--
ALTER TABLE `movie_requests`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `theater_settings`
--
ALTER TABLE `theater_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
