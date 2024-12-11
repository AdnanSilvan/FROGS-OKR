-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Okt 2024 pada 21.38
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `bussiness`
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
-- Dumping data untuk tabel `bussiness`
--

INSERT INTO `bussiness` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'aa', 'aa', 50.00, 22.00, 33.00, 44.00),
(3, 'asd', 'asd', 'asd', 100.00, 90.00, 80.00, 90.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fi`
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
-- Dumping data untuk tabel `fi`
--

INSERT INTO `fi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'sss', 'yuyuk', 12.00, 60.00, 33.00, 44.00),
(2, 'a', 'aa', 'aaa', 12.00, 22.00, 33.00, 44.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `finance`
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
-- Dumping data untuk tabel `finance`
--

INSERT INTO `finance` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'aaaa', 'a', 12.00, 70.00, 33.00, 44.00),
(2, 'a', 'dess', 'ddd', 12.00, 22.00, 33.00, 44.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fsi`
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
-- Dumping data untuk tabel `fsi`
--

INSERT INTO `fsi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'uuu', 'iuuu', 12.00, 70.00, 33.00, 44.00),
(2, 'a', 'y', 'y', 12.00, 22.00, 33.00, 44.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `technologi`
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
-- Dumping data untuk tabel `technologi`
--

INSERT INTO `technologi` (`id`, `objective_name`, `key_results`, `owner`, `weight`, `target`, `actual`, `progress`) VALUES
(1, 'a', 'q', 'a', 79.00, 22.00, 33.00, 44.00),
(2, 'a', 'u', 's', 12.00, 22.00, 33.00, 44.00);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(8, 'Thofa Hesa', 'thofahesa99@gmail.com', 'default.jpg', '$2y$10$Anm..5DqZiPISZPaBbzy7.cUVr6WGIzau1FZ6G1/JKjpxPVTPowMy', 3, 1, 1729358558),
(9, 'admin', 'admin@frogs.id', 'default.jpg', '$2y$10$672z8eiSBsgABwYl2SMw1.lEn44U23YjcxgurZKSj831.KiH1k.SS', 2, 1, 1729360216);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Karyawan'),
(5, 'technologi');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bussiness`
--
ALTER TABLE `bussiness`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fi`
--
ALTER TABLE `fi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fsi`
--
ALTER TABLE `fsi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `technologi`
--
ALTER TABLE `technologi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `bussiness`
--
ALTER TABLE `bussiness`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `fi`
--
ALTER TABLE `fi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `finance`
--
ALTER TABLE `finance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `fsi`
--
ALTER TABLE `fsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `technologi`
--
ALTER TABLE `technologi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
