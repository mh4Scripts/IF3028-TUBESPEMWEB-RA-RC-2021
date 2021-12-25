-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 01:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(25) NOT NULL,
  `lampiran` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `isi`, `aspek`, `lampiran`, `waktu`) VALUES
(25, 'Banyak di temukan diruang ruang kelas, ada banyak kerusakan seperti pada ac, kursi, papan tulis dan proyektor. Kerusakan tersebut membuat proses belajar mengajar dikelas tidak berjalan dengan lancar. Saya minta untuk hal ini segera diperbaiki agar tidak menggangu pembelajaran berikutnya', 'Infrastruktur', '_Beautiful Feudal Japan_ Sekiro Art.jfif', '2021-12-25 07:12:37'),
(26, 'Seringkali dosen melakukan pergantian jadwal secara mendadak tanpa di beritahukan jauh jauh hari, hal ini membuat jadwal yang sudah direncanakan oleh mahasisiwa menjadi berantakan.', 'Dosen', 'wallpaperflare.com_wallpaper.jpg', '2021-12-25 07:12:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
