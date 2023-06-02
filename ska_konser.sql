-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2023 at 02:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ska_konser`
--

-- --------------------------------------------------------

--
-- Table structure for table `konser`
--

CREATE TABLE `konser` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konser`
--

INSERT INTO `konser` (`id`, `nama`, `lokasi`, `tanggal`, `harga`, `deskripsi`, `poster`, `created_at`, `updated_at`) VALUES
(5, 'Pestapora Surakarta', 'Stadion Manahan', '2023-06-10T21:01', 75000, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt saepe minima adipisci nostrum repellendus est beatae cupiditate ducimus dolorem nihil quos, eveniet aliquam dignissimos voluptatibus aperiam ipsam mollitia, veritatis aut.', 'poster.jpg', '2023-06-02 02:00:34', '2023-06-02 02:00:34');

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
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2023_06_01_033850_kosers_table', 1),
(4, '2023_06_01_034115_tiket_konser', 1);

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
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_konser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tiket` int(11) NOT NULL,
  `total_harga` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bukti_pembayaran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `username`, `id_konser`, `jumlah_tiket`, `total_harga`, `bukti_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:54:39', '2023-06-01 19:54:39'),
(2, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:55:06', '2023-06-01 19:55:06'),
(3, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:55:10', '2023-06-01 19:55:10'),
(4, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:55:15', '2023-06-01 19:55:15'),
(5, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:55:29', '2023-06-01 19:55:29'),
(6, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:55:43', '2023-06-01 19:55:43'),
(7, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.jpg', '2023-06-01 19:58:37', '2023-06-01 19:58:37'),
(8, 'admin', '2', 1, 'Rp. 1234455', 'flowchart-ml.vsdx', '2023-06-01 20:02:39', '2023-06-01 20:02:39'),
(9, 'admin', '4', 3, 'Rp. 567369', 'flowchart-ml.vsdx', '2023-06-01 21:03:23', '2023-06-01 21:03:23'),
(10, 'user', '4', 4, 'Rp. 756492', 'flowchart-ml.jpg', '2023-06-01 21:04:06', '2023-06-01 21:04:06'),
(11, 'user', '5', 4, 'Rp. 300000', '2023-05-04-(1).csv', '2023-06-02 02:04:40', '2023-06-02 02:04:40'),
(12, 'user2', '5', 4, 'Rp. 300000', 'fc3noor2.svg', '2023-06-02 04:41:54', '2023-06-02 04:41:54'),
(13, 'user4', '5', 4, 'Rp. 300000', 'poster.jpg', '2023-06-02 05:02:18', '2023-06-02 05:02:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level_role` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `level_role`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', '$2y$10$L60V249p0Fbg7/M8Sz/JCe1YkkurWJMV0l/5DIVZyZhiaO73srFl6', 0, '2023-06-01 19:17:54', '2023-06-01 19:17:54'),
(2, 'user', 'user', '$2y$10$NgVjnrjPy.PLnnNkJi9tT.R01dW4yFSVkrdeFOOeMC7varMqBlq4W', 1, '2023-06-01 20:44:08', '2023-06-01 20:44:08'),
(3, 'user2', 'user2', '$2y$10$kWHvckQH5pb7IpFi5abQT.hMR54apyYw3JeDdCdwTgLGt.wH2ONv2', 1, '2023-06-02 04:40:44', '2023-06-02 04:40:44'),
(4, 'user3', 'user3', '$2y$10$GmzCAUK6O6eo0skn9.hV3.fVX0SxiNxd03wyeTqysfTPJ61xvAq1y', 1, '2023-06-02 05:00:37', '2023-06-02 05:00:37'),
(5, 'user4', 'user4', '$2y$10$S04YGYnIBkhtDoShTuGldO9jhWGQNH/OQFi7rGLEQq7WldUiaxL/C', 1, '2023-06-02 05:01:26', '2023-06-02 05:01:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `konser`
--
ALTER TABLE `konser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `konser`
--
ALTER TABLE `konser`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
