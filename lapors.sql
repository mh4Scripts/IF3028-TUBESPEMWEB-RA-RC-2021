-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 02:23 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapors`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapors`
--

CREATE TABLE `lapors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `report` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspect` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapors`
--

INSERT INTO `lapors` (`id`, `report`, `aspect`, `file`, `created_at`, `updated_at`) VALUES
(12, 'Mahasiswa tidur saat perkuliahan', 'Mahasiswa', '1640330992-Laporan.pdf', '2021-12-24 00:29:52', '2021-12-24 00:29:52'),
(13, 'Dosen tidak hadir di jam perkuliahan', 'Dosen', '1640331017-Laporan ke dosen.pdf', '2021-12-24 00:30:17', '2021-12-24 00:30:17'),
(14, 'UKT atas nama Gilang Rizky Ramadhan dari prodi Teknik Informatika belum dilakukan pengecekan, padahal saya sudah membayar penuh', 'Infrastruktur', '1640331136-Laporan.pdf', '2021-12-24 00:32:16', '2021-12-24 00:32:16'),
(15, 'Kompensasi Asisten Praktikum PKS belum dibayar lebih dari 7 bulan sejak terakhir mengajar', 'Staff', '1640331218-Laporan.pdf', '2021-12-24 00:33:38', '2021-12-24 00:33:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapors`
--
ALTER TABLE `lapors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapors`
--
ALTER TABLE `lapors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
