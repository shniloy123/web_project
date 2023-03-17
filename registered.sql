-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2023 at 09:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registered`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `reg_date`) VALUES
(10, 'roni123', 'shniloy853@gmail.com', '$2y$10$z76.JYGlR0oP8RJ2l6RELOamcNrzBRIvYY0lYPP1wjmOLPZwezRxe', '2023-03-13 23:54:58'),
(11, 'shniloy', 'shniloy84453@gmail.com', '$2y$10$D4iG3RWPa1R0Uxa2z9rf6eMq/SgTxYLUic8UBdFB4M9NymH6lKbEe', '2023-03-15 15:10:53'),
(12, 'JohnDoe', 'johndoe@example.com', 'password123', '2023-03-15 16:57:38');

-- --------------------------------------------------------

--
-- Table structure for table `userss`
--

CREATE TABLE `userss` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `event_type` varchar(255) NOT NULL,
  `approx_people` int(11) DEFAULT NULL,
  `color_theme` varchar(255) DEFAULT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `note` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userss`
--

INSERT INTO `userss` (`id`, `name`, `event_type`, `approx_people`, `color_theme`, `phone`, `email`, `address`, `note`) VALUES
(1, 'S tutorial', '', 50, 'red', '01875595927', 'shniloy853@gmail.com', 'Psr. Gatot Subroto No. 122', 'dewfff'),
(2, 'hvlkjhfkgjh', 'Catering', 50, 'xgvhjg', 'fjdhjreyu36', 'shniloy8tyutrurt53@gmail.com', 'Psr. Gatot Subtryurtroto No. 122u', 'ttryurtutru'),
(3, 'S tutorial', 'Birthday', 50, 'hkl;k;k;kj', '04053295723956928', 'shniloy85345675467@gmail.com', 'Psr. Gaiiigiyhikfyiyitot Subroto No. 122', 'uityiyiu'),
(4, 'S tutorial', 'Birthday', 50, 'hkl;k;k;kj', '04053295723956928', 'shniloy85345675467@gmail.com', 'Psr. Gaiiigiyhikfyiyitot Subroto No. 122', 'uityiyiu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userss`
--
ALTER TABLE `userss`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `userss`
--
ALTER TABLE `userss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
