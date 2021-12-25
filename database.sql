-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 01:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fileupload` blob NOT NULL,
  `created_time` datetime DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `judul`, `pelapor`, `laporan`, `aspek`, `fileupload`, `created_time`, `created_at`, `updated_at`) VALUES
(1, 'Lari ada hantu', 'Kevin Tnauwijaya', 'Di gedung C ada hantu', 'mahasiswa', 0x453a5c536f667477617265204b756c6961685c78616d70705c746d705c706870383838432e746d70, NULL, '2021-12-25 12:35:06', '2021-12-25 12:35:06'),
(2, 'Penculikan', 'Figo', 'Saya melihat anak kecil di culik di daerah kampus', 'mahasiswa', 0x453a5c536f667477617265204b756c6961685c78616d70705c746d705c706870463832462e746d70, NULL, '2021-12-25 12:35:35', '2021-12-25 12:35:35'),
(3, 'Embung Itera Surut', 'Desi Fitria', 'Ikan ikan di embung mati kekeringan akibat embung surut', 'infrastruktur', 0x453a5c536f667477617265204b756c6961685c78616d70705c746d705c706870373835442e746d70, NULL, '2021-12-25 12:36:08', '2021-12-25 12:36:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
