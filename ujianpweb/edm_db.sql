-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2024 at 07:23 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedding_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guests`
--

CREATE TABLE `guests` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `guests_count` int(11) DEFAULT NULL,
  `notes` text DEFAULT NULL,
  `is_present` tinyint(1) DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guests`
--

INSERT INTO `guests` (`id`, `name`, `email`, `phone`, `guests_count`, `notes`, `is_present`, `created_at`) VALUES
(1, 'Renaldi Saputra', 'renaldis142@gmail.com', '89675759858', 2, 'GACOR BRE', 1, '2024-11-11 19:53:00'),
(2, 'Amellia dwi', 'amellia@gmail.com', '875759834', 1, 'HACEP', 0, '2024-11-11 19:58:00'),
(3, 'Mario dewa', 'mario@gmail.com', '8976688543', 3, 'HAMPIR MATI', 0, '2024-11-11 19:59:00'),
(4, 'Nabilla', 'nabilla@gmail.com', '9847563349', 2, 'KESUNDUT ROKO', 0, '2024-11-11 20:00:00'),
(5, 'reyno fadhil', 'reyno@gmail.com', '8983994756', 2, 'KECEKOK MIRAS ', 0, '2024-11-11 20:01:00');


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `is_admin`, `created_at`) VALUES
(3, 'rafi', 'RAFGG', '$2y$10$i/kgk8g3TNIPsqOS/o2ZJ.TJ8P1nf86gEOjXdk39TSr/wBMDefFQm', 1, '2024-11-10 07:09:06'),
(4, 'yoel', 'yoelmonyet', '$2y$10$0kdym99dR/sLEgtKHzsS8eJa9RIzMUl2TwkYgbttWKGPNTsonH1xC', 1, '2024-11-10 14:33:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
