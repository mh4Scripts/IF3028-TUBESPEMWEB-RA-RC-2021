-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 01:15 PM
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
-- Database: `lapor`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesan` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id`, `nama`, `judul`, `pesan`, `aspek`, `file`, `created_at`, `updated_at`) VALUES
(9, 'larasa', 'sdfs', 'ajsd jasid as jaisdj  djaisj d dajs hd ahsud au dah duahs dasda dgsaudgasyu das s dsa d gusdau syud ga fd fiufdhuif hgudfu ghdighiudfigfd dhfv hfd igigv yisf gisgfv', 'Staff', '53801923.jpg', '2021-12-25 09:04:47', '2021-12-25 09:04:47'),
(10, 'larasa', 'dsfsdf', 'hf sdhufhs dfhsud fs dfs dfhsd fsd fsd fsgd fgsdfsd fsdfg dsfyusd gfyusd gyuf sdgfyusd gfuds f sdfyusd fyusd guf gsdyuf gsyud fusf ysd gfyusdgfsd sud fsduy dsdfv  f d', 'Dosen', '745116457.jpg', '2021-12-25 09:05:28', '2021-12-25 09:05:28'),
(12, 'sdfssfsd', 'sdfs', 'asdasdasdlkngkjfdg sdhf disfds', 'Staff', '1111175817.png', '2021-12-25 09:56:03', '2021-12-25 09:56:03'),
(13, 'jejeje', 'qejqhw', 'njwehr hewurhwei ew rhw rehew rhew rhew rhewr hewiurewui r uweui rhew rh whrie rw erhui erew r erhuiew riwe hriuw', 'Staff', '1698217193.jpg', '2021-12-25 10:20:05', '2021-12-25 10:20:05'),
(14, 'sdfsdf', 'asdasd', 'asdjh dahshd  dshu d hd d asud h d d dh hd hd h dhdd d hh  d dnbfhsd d fysdg fgd fgdsf udg', 'Staff', '1531854173.jpg', '2021-12-25 10:33:18', '2021-12-25 10:33:18'),
(15, 'hah', 'Fusce non tincidunt arcu.', 'asdjh dahshd  dshu d hd d asud h d d dh hd hd h dhdd d hh  d dnbfhsd d fysdg fgd fgdsf udg', 'Mahasiswa', '863963512.jpg', '2021-12-25 10:34:32', '2021-12-25 10:34:32'),
(16, 'afka', 'daksnd', 'asdasd sdfsdf dfsd fs df dsf df d sf sd f sd fd f ds fd f d fs  f  sd fs d f s fsd f ds  sd f s asdasd sdfsdf dfsd fs df dsf df d sf sd f sd fd f ds fd f d fs  f  sd fs d f s fsd f ds  sd f s', 'Mahasiswa', '1476306178.jpg', '2021-12-25 10:55:04', '2021-12-25 10:55:04'),
(17, 'df', 'Honor Asprak', 'hu h uhu hu uh u uhuh uh uu uu uhu h hu hu u u uh h uuu u huhu  hikk k  k k  k k kk   k kkk k hj gyttf  r drr', 'Infrastruktur', '677297883.xlsx', '2021-12-25 11:01:46', '2021-12-25 11:01:46'),
(18, 'sdfs', 'jjnn', 'gygy y gy y yy y  ugu g  ftft ftf ty ft f t f uyg uugu u u y gy gy ggy y g y uy     guguyguygyug    yuguy g guguy gu gu g uu', 'Staff', '1670300086.pptx', '2021-12-25 11:03:25', '2021-12-25 11:03:25'),
(19, 'anje', 'krejtkej', 'doc, docx, xls, xlsx, ppt, pptx, pdfdoc, docx, xls, xlsx, ppt, pptx, pdfdoc, docx, xls, xlsx, ppt, pptx, pdfdoc, docx, xls, xlsx, ppt, pptx, pdf', 'Staff', '383902784.jpg', '2021-12-25 11:17:52', '2021-12-25 11:17:52'),
(20, 'ksndfk', 'vcubiou', 'doc, docx, xls, xlsx, ppt, pptx, pdf doc, docx, xls, xlsx, ppt, pptx, pdf doc, docx, xls, xlsx, ppt, pptx, pdf doc, docx, xls, xlsx, ppt, pptx, pdf', 'Mahasiswa', '700120195.jpg', '2021-12-25 11:23:28', '2021-12-25 11:23:28'),
(21, 'sdfdf', 'afassda', 'image/jpeg image/jpegimage/ jpegimag e / j p eg  im ag e/ jpegimage/jpeg image/jpeg image /jpegima  e/jpegv image/jp egimage/jpeg image/jpeg image/jpeg', 'Infrastruktur', '1475381890.jpg', '2021-12-25 11:31:11', '2021-12-25 11:31:11'),
(22, 'm cjkbzh', 'xcvx', 'image/jpeg image/jpegimage/ jpegimag e / j p eg  im ag e/ jpegimage/jpeg image/jpeg image/jpegimage/jpegv image/jpegimage/jpeg image/jpeg image/jpeg', 'Pengajaran', '734228263.docx', '2021-12-25 11:31:35', '2021-12-25 11:31:35'),
(25, 'hah', 'sdfs', 'var arrInputs = oForm.getElementsByTagName(\"input\");\r\n    for (var i = 0; i < arrInputs.length; i++) {\r\n        var oInput = arrInputs[i];\r\n        if (oInput.type == \"file\") {\r\n            var sFileName = oInput.value;\r\n            if (sFileName.length > 0) {\r\n                var blnValid = false;\r\n                for (var j = 0; j < _validFileExtensions.length; j++) {\r\n                    var sCurExtension = _validFileExtensions[j];\r\n                    if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {\r\n                        blnValid = true;\r\n                        break;\r\n                    }\r\n                }\r\n                \r\n                if (!blnValid) {\r\n                    alert(\"Sorry, \" + sFileName + \" is invalid, allowed extensions are: \" + _validFileExtensions.join(\", \"));\r\n                    return false;\r\n                }\r\n            }\r\n        }\r\n    }\r\n  \r\n    return true;', 'Pengajaran', '1359637168.docx', '2021-12-25 11:50:15', '2021-12-25 11:50:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_18_105226_create_laporan_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
