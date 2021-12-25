-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2021 at 12:18 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
-- Table structure for table `lapor`
--

CREATE TABLE `lapor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `laporan` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aspek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lampiran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lapor`
--

INSERT INTO `lapor` (`id`, `judul`, `laporan`, `aspek`, `lampiran`, `created_at`, `updated_at`) VALUES
(2, 'Air toilet tidak ada', 'Ngga ada air di toilet gedung e, jadi kalau mau ke toilet harus ke gku padahal gku jauh banget', 'Infrastruktur', '518889721.png', '2021-12-25 10:49:29', '2021-12-25 10:49:29'),
(3, 'BUANG SAMPAH SEMBANGAN', 'TOLONG DONG SIAPAPUN YANG ABIS JAJAN DIKANTIN, SAMPAHNYA LANGSUNG DIBUANG DITEMPATNYA!!!', 'Mahasiswa', '31910822.png', '2021-12-25 10:52:40', '2021-12-25 10:52:40'),
(4, 'Mukbang dibelwis', 'lets goooo mukbang kita di belwis yuk wkwkkwwkwkw, enak banget makanannya cocok banget buat kamu yang porsinya super banyak.. YOOOOOOO LETSSS GOOOOOOOOO', 'Mahasiswa', '1111661994.png', '2021-12-25 10:55:05', '2021-12-25 10:55:05'),
(5, 'Datetime PHP', 'DateTime is not a function, but the class.\r\n\r\nWhen you just reference a class like new DateTime() PHP searches for the class in your current namespace. However the DateTime class obviously doesn\'t exists in your controllers namespace but rather in root namespace.\r\n\r\nYou can either reference it in the root namespace by prepending a backslash:', 'Dosen', '1158095591.png', '2021-12-25 10:57:17', '2021-12-25 10:57:17'),
(6, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce pretium sem id ultricies blandit. Cras mollis nulla non sem dignissim, mollis pulvinar ante cursus. Fusce dignissim enim sed dolor accumsan sodales nec id neque. Duis vitae augue sit amet justo tincidunt faucibus non vel urna. Sed placerat, tortor eget malesuada cursus, nisi est dignissim felis, quis molestie arcu tortor sed tortor. Pellentesque ornare ultricies egestas. Maecenas sed tincidunt orci. Praesent suscipit ipsum nec risus tincidunt placerat. Ut sed est a risus rhoncus laoreet. Fusce eu purus sed arcu iaculis commodo sed sed ipsum.\r\n\r\nDonec quis est ac magna dictum blandit at ut justo. Ut porttitor fermentum ante et dictum. Aliquam erat volutpat. Vestibulum porttitor suscipit congue. Praesent at consequat lectus. In massa nunc, eleifend sed lacinia non, convallis eget ligula. Curabitur dictum diam a mi laoreet egestas. Nullam sodales ut velit ut scelerisque. Nullam non purus accumsan, placerat nulla a, aliquet turpis. In ac hendrerit nisl. Nam ac libero sed neque maximus mattis id nec orci. Sed at orci rutrum, laoreet tellus ut, pulvinar arcu. Ut vel eleifend nibh, vel euismod nunc. Nullam non libero hendrerit, mollis diam in, auctor erat. Praesent eu urna felis. Nunc sed mollis ante.', 'Dosen', '1122234124.png', '2021-12-25 11:09:23', '2021-12-25 11:11:04'),
(7, 'Laravel', 'My database stores two dates in the mysql DateTime format YYYY-MM-DD HH:MM:SS. When I get this data (with other strings etc), I want to convert it to another format, maybe DD.MM.YYYY HH:MM:SS and display it on my view in a table cell. My database dates are called date_begin and date_end.\r\n\r\nBetter, when I get this dates from database, convert it to DD.MM.YYYY format, separate the date and the time, store the time in a custom string (\"HH1:MM1 - HH2:MM2\") and bring both on my view.\r\n\r\nHow can I achieve this? I found some examples to convert on the view, not in the controller, but I think this is not good for MVC.', 'Mahasiswa', '582955169.pdf', '2021-12-25 11:14:59', '2021-12-25 11:14:59'),
(8, 'XMLHttpRequest', 'the success callback on $.ajax() triggers when your server sends a HTTP 200 response code. 200 means that:\r\n\r\nyour server received a request, optionaly with data\r\nit accepted it\r\nit processed it\r\nit knew what to do with it\r\nit returned a valid response to your client (optional, it can send an empty body)\r\nSo there are 2 ways you can do this:\r\n\r\nmake your server return a non-200 HTTP code on error. For example a 400 (Bad request, which one could argue it is, if the parameters do not validate). That would trigger the error callback of $.ajax() and not your success callback (what you asked)\r\nput the error handling in application logic instead of http layer. That means, you introduce your own convention to report an application level error in the server response.\r\nFor 2, here are possible json responses (up to you to come up with whatever convention you like)', 'Pengajaran', '73550483.pdf', '2021-12-25 11:18:17', '2021-12-25 11:18:17');

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
(5, '2021_12_11_100331_create_lapor_table', 1);

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
-- Indexes for table `lapor`
--
ALTER TABLE `lapor`
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
-- AUTO_INCREMENT for table `lapor`
--
ALTER TABLE `lapor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
