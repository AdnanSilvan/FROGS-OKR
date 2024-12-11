-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2024 at 04:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `frogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `bussiness`
--

CREATE TABLE `bussiness` (
  `id` int(11) NOT NULL,
  `objective_name` varchar(255) NOT NULL,
  `key_results` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `actual` decimal(10,2) NOT NULL,
  `progress` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bussiness`
--

INSERT INTO `bussiness` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(3, 'asd', 'asd', 'Adnan Silvan Erusani', 100.00, 90.00, 80.00, 90.00),
(4, 'Bussiness Thofa', 'test', 'Thofa Hesa Alfauzi', 23.00, 32.00, 34.00, 32.00);

-- --------------------------------------------------------

--
-- Table structure for table `fi`
--

CREATE TABLE `fi` (
  `id` int(11) NOT NULL,
  `objective_name` varchar(255) NOT NULL,
  `key_results` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `actual` decimal(10,2) NOT NULL,
  `progress` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fi`
--

INSERT INTO `fi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(4, 'Budaya Organisasi Perusahan', 'Karyawan memiliki awareness nilai perusahan minimal 80%', 'HR', 5.00, 80.09, 0.00, 0.00),
(5, 'asd', 'asd', 'asd', 67.90, 45.00, 34.60, 45.00),
(6, 'asd', 'asd', 'asd', 32.00, 43.00, 32.00, 34.00);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `id` int(11) NOT NULL,
  `objective_name` varchar(255) NOT NULL,
  `key_results` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `actual` decimal(10,2) NOT NULL,
  `progress` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'aaaaasdsa', 'Thofa Hesa Alfauzi', 45.00, 70.00, 33.00, 44.00),
(2, 'a', 'dess', 'Adnan Silvan Erusani', 12.00, 22.00, 33.00, 98.00);

-- --------------------------------------------------------

--
-- Table structure for table `fsi`
--

CREATE TABLE `fsi` (
  `id` int(11) NOT NULL,
  `objective_name` varchar(255) NOT NULL,
  `key_results` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `actual` decimal(10,2) NOT NULL,
  `progress` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fsi`
--

INSERT INTO `fsi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'adc', 'uuu', 'Thofa Hesa Alfauzi', 12.00, 8.00, 33.01, 23.00),
(2, 'aku', 'y', 'Adnan SIlvane E', 12.00, 22.00, 33.00, 35.04),
(3, 'wqwqw', 'sad', 'asd', 3.00, 3.00, 3.00, 100.00),
(5, 'asd', 'asd', 'asd', 23.00, 34.00, 43.00, 34.00);

-- --------------------------------------------------------

--
-- Table structure for table `technologi`
--

CREATE TABLE `technologi` (
  `id` int(11) NOT NULL,
  `objective_name` varchar(255) NOT NULL,
  `key_results` text NOT NULL,
  `owner` varchar(255) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `actual` decimal(10,2) NOT NULL,
  `progress` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `technologi`
--

INSERT INTO `technologi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(3, 'wqwqw', 'test', 'Thofa Hesa Alfauzi', 100.00, 90.00, 80.00, 90.00),
(4, 'wqwqwa', 'asd', 'asd', 90.00, 90.00, 80.00, 90.00);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `image` varchar(128) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(256) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(9, 'Thofa Adnan', 'admin@frogs.id', 'default.jpg', '$2y$10$672z8eiSBsgABwYl2SMw1.lEn44U23YjcxgurZKSj831.KiH1k.SS', 1, 1, 1729360216),
(10, 'Thofa Hesa', 'ta-fi@frogs.id', 'default.jpg', '$2y$10$Sadq4NI.42Gr7s6Z/3VihuiEc7Ls1IQW0gSKqWhmqCfzi4T.kRtBC', 2, 1, 1729454549),
(11, 'Thofa Adnan', 'ta-fsi@frogs.id', 'default.jpg', '$2y$10$yK6m/L1M1dYBfi24/R07tu30XTSoSlVkEw5GcoBdLMu3cqVQS3YSW', 3, 1, 1729454612),
(12, 'Adnan', 'ta-technologi@frogs.id', 'default.jpg', '$2y$10$EVecSevp6E4C6.KW.a8uVeHeReet/1a/xbXTgJnvM1HGVJykLYFhi', 4, 1, 1729454682),
(13, 'Silvan', 'ta-bussiness@frogs.id', 'default.jpg', '$2y$10$K5nItBMNyLC2uuhRQUZMCurmrSkSi7LvvVFtji96D0PWYLN.NP4Qy', 5, 1, 1729454904),
(14, 'Erusani', 'ta-finance@frogs.id', 'default.jpg', '$2y$10$5IzRbHvEbNTvZmBHYBpSSu4JUY/TWlXNztd44uPmJjARpQlLHVm.m', 6, 1, 1729454930);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `sub_menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(8, 2, 2),
(10, 3, 3),
(12, 4, 4),
(14, 5, 5),
(16, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Administrator'),
(2, 'Main');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'FI'),
(3, 'FSI'),
(4, 'Technologi'),
(5, 'Bussiness'),
(6, 'Finance');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'dashboard', 'ri-drag-drop-line', 1),
(2, 2, 'Divisi Operational FI', 'fi', 'ri-dashboard-2-line', 1),
(3, 2, 'Divisi Operational FSI', 'fsi', 'ri-chat-3-line', 1),
(4, 2, 'Divisi Technologi', 'technologi', 'ri-computer-line', 1),
(5, 2, 'Divisi Bussiness develop', 'bussiness', 'ri-briefcase-2-line', 1),
(6, 2, 'Divisi Finance Accounting', 'finance', 'ri-money-dollar-circle-line', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bussiness`
--
ALTER TABLE `bussiness`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fi`
--
ALTER TABLE `fi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fsi`
--
ALTER TABLE `fsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `technologi`
--
ALTER TABLE `technologi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bussiness`
--
ALTER TABLE `bussiness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fi`
--
ALTER TABLE `fi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fsi`
--
ALTER TABLE `fsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `technologi`
--
ALTER TABLE `technologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
