-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 11:47 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes-simple-lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `aspek` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `isi`, `aspek`, `file`, `tanggal`) VALUES
(11, 'bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya bismillah ini lah caranya ya pablo', 'Dosen', 'kevin-grieve-T2utVTCTJsA-unsplash.jpg', '2021-12-25 16:44:40'),
(13, 'Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya Hallo ini coba ya mas mba ', 'Staff', '800px-Indonesia_provinces_blank_map1.png', '2021-12-25 17:07:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
