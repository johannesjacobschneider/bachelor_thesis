-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysqla.service
-- Generation Time: May 30, 2024 at 02:52 PM
-- Server version: 10.11.4-MariaDB-1~deb12u1-log
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HTO01FLQNEGN`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(115, '115936572', 'Würzburg1!', '2024-05-21 06:32:01'),
(116, '117250851', 'Hochschule7!', '2024-05-21 06:33:06'),
(118, '112940271', 'SunShine2000!', '2024-05-21 06:36:13'),
(172, '111262925', '28052005', '2024-05-30 12:46:49'),
(173, '132024148', '96Ud9kojkiyd', '2024-05-30 12:46:49'),
(174, '164016737', 'Mitchel8', '2024-05-30 12:46:49'),
(175, '158512917', '05300530', '2024-05-30 12:46:49'),
(176, '162242093', '27272727', '2024-05-30 12:46:50'),
(177, '124528732', '98302795', '2024-05-30 12:46:50'),
(178, '144904932', '552883377557729856', '2024-05-30 12:46:50'),
(179, '155201498', '055511024', '2024-05-30 12:46:50'),
(180, '134417703', 'KILLER05', '2024-05-30 12:46:50'),
(181, '194748481', '09196789721', '2024-05-30 12:46:50'),
(182, '143492377', 'PherynRuth54', '2024-05-30 12:46:50');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=234;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
