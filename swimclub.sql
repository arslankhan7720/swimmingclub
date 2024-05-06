-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 03:01 PM
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
-- Database: `swimclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@admin.com|127.0.0.1', 'i:2;', 1714995715),
('admin@admin.com|127.0.0.1:timer', 'i:1714995715;', 1714995715),
('admin@gmai.com|127.0.0.1', 'i:1;', 1714998668),
('admin@gmai.com|127.0.0.1:timer', 'i:1714998668;', 1714998668),
('superadmin@gmail.com|127.0.0.1', 'i:1;', 1714829808),
('superadmin@gmail.com|127.0.0.1:timer', 'i:1714829808;', 1714829808);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coach_swimmer`
--

CREATE TABLE `coach_swimmer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coach_id` bigint(20) UNSIGNED NOT NULL,
  `swimmer_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coach_swimmer`
--

INSERT INTO `coach_swimmer` (`id`, `coach_id`, `swimmer_id`, `created_at`, `updated_at`) VALUES
(2, 4, 5, '2024-05-05 09:03:49', '2024-05-05 09:03:49'),
(3, 4, 8, '2024-05-05 09:03:53', '2024-05-05 09:03:53'),
(4, 4, 9, '2024-05-05 09:03:57', '2024-05-05 09:03:57'),
(6, 4, 18, '2024-05-06 07:28:20', '2024-05-06 07:28:20'),
(7, 19, 11, '2024-05-06 07:45:50', '2024-05-06 07:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `event_date` datetime NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `added_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `location`, `event_date`, `image`, `added_by`, `created_at`, `updated_at`) VALUES
(7, '2024 IE TCCC Tri-Cities Invitational', 'Memorial Pool, Pasco, WA', '2024-05-31 13:08:00', 'images/1714983009.jpg', 4, '2024-05-06 03:10:09', '2024-05-06 03:10:09'),
(8, '2024 IE VS Apple Capital', 'Wenatchee City Pool, Wenatchee, WA', '2024-05-24 13:11:00', 'images/1714983142.jpg', 4, '2024-05-06 03:12:22', '2024-05-06 03:12:22'),
(9, 'SWAT Summer Solstice', 'Witter Pool, Spokane, WA', '2024-06-12 13:12:00', 'images/1714983283.webp', 4, '2024-05-06 03:14:43', '2024-05-06 03:14:43'),
(10, 'Long Course Championships', 'Witter Pool, Spokane, WA', '2024-08-08 13:15:00', 'images/1714983503.jpg', 4, '2024-05-06 03:18:23', '2024-05-06 03:18:23'),
(11, 'VSAC Swimming Championships', 'Melbourne Sports and Aquatic Centre Aughtie Drive, Albert Park', '2024-05-18 13:19:00', 'images/1714983571.jpg', 4, '2024-05-06 03:19:31', '2024-05-06 03:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_04_135201_create_users_table', 2),
(5, '2024_05_05_031230_create_coach_swimmer_table', 3),
(6, '2024_05_05_142810_create_events_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('DyE9bdi1u9qvstAP4a1IvIcKqdS8nnxbVmIiohko', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSHFSN2l6clBnZ284SWt1UGE5elVsRnhnOFNZVXZ5Y0JwNHRoTlVHMyI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjQxOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvc3dpbW1lclZlcmlmaWNhdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1715000270),
('MR6iIk7CavCpy7mo3SDslC3Kpj0RosKvfQYiroiU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaHNnNGFYRFh1QWVjNll6ZmlCRVZvVkxRT29ROEFjSllkdEc3ZzVJSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9sb2dpbiI7fX0=', 1715000321),
('ZuZkhaB1csUYCjDSY8OnZQafURLaOsXQxYun9W55', 20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiaXE2MkhmM01QWmNjVFcxOUlHTHM3eUp2Nzk2OEJKTWdiMFJOVEthcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wYXJlbnQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMDt9', 1715000270);

-- --------------------------------------------------------

--
-- Table structure for table `swimmer_performance`
--

CREATE TABLE `swimmer_performance` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `swimmer_id` bigint(20) UNSIGNED NOT NULL,
  `event_id` bigint(20) UNSIGNED NOT NULL,
  `p_date` date NOT NULL,
  `time` time NOT NULL,
  `report` text DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `swimmer_performance`
--

INSERT INTO `swimmer_performance` (`id`, `swimmer_id`, `event_id`, `p_date`, `time`, `report`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 5, '2024-05-04', '21:36:00', 'images/1714927709.png', 'verified', '2024-05-05 11:48:29', '2024-05-05 12:16:18'),
(2, 11, 6, '2024-05-07', '00:03:00', 'images/1714935812.jpg', 'verified', '2024-05-05 14:03:32', '2024-05-05 14:03:47'),
(3, 18, 7, '2024-05-29', '17:30:00', 'images/1714998551.docx', 'verified', '2024-05-06 07:29:11', '2024-05-06 07:33:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `forename` varchar(255) DEFAULT NULL,
  `surname` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `username`, `forename`, `surname`, `date_of_birth`, `address`, `phone_no`, `postcode`, `role`, `parent_id`, `status`) VALUES
(1, 'admin@gmail.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 09:02:18', '2024-05-06 06:42:02', 'admin', 'super', 'admin', '2024-05-24', '0111222333', '0111222333', 'admin', 'admin', NULL, NULL),
(2, 'dev22@gmail.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 13:24:41', '2024-05-04 14:06:14', 'arsalan', 'test', 'dev', '2024-05-17', '03323232323', '03323232323', 'AA1 1AA', 'admin', NULL, NULL),
(3, 'parent1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:08:18', '2024-05-04 14:09:54', 'parent1', 'pfn', 'psn', '2024-05-01', '012117720', '012117720', 'AR1 22ST', 'parent', NULL, NULL),
(4, 'coach1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:11:34', '2024-05-04 14:11:34', 'coach1', 'chfn', 'chsn', '2024-05-01', 'Coach address, hill station 4, university road, bredford uk', '11235547', 'A7A 22G', 'coach', NULL, NULL),
(5, 'swimmer1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:12:52', '2024-05-04 14:12:52', 'swimmer1', 'swmfn', 'swmsn', '2024-05-04', 'University road, Haithrow airport, uk', '11354845', '987A ST2', 'swimmer', NULL, NULL),
(8, 'p1swimmer1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-05 07:27:31', '2024-05-05 07:53:36', 'p1swimmer 1', 'p1s1fn', 'p1s1sn', '2024-05-16', 'Parent one swimmer child 1 address', '03232323', 'ST0 ULV', 'swimmer', 3, 'verified'),
(9, 'p1s2@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-05 07:28:29', '2024-05-05 07:28:29', 'parent1swimmer2', 'p1s2 forname', 'p1s2 surname', '2024-05-02', 'address of parent 1 swimmer two', '033232323', 'ST7 KLW', 'swimmer', 3, 'unverified'),
(10, 'coach2@g.com', NULL, '$2y$12$Nd7kXZ8F.3o1RMftJoJK2.3dqaZBN32GyYCiTNGEqcqP1amu3.4uq', NULL, '2024-05-05 14:00:01', '2024-05-05 14:00:12', 'coach2', 'dev', 'test', '2024-04-29', '224242', '224242', 'st5 3rt', 'coach', NULL, NULL),
(11, 'c2user2@g.com', NULL, '$2y$12$S0K7WqB.nWIxq3ewZovmled8avQJTTqakJKIfD3w3FBOpNfnms4NK', NULL, '2024-05-05 14:02:32', '2024-05-05 14:02:32', 'c1user1', 'tes', 'ddd', '2024-05-07', 'hellow street test account', '342432', 'afda3', 'swimmer', NULL, NULL),
(14, 'p5email@g.com', NULL, '$2y$12$zteF1IUyreNHi3Xn0Wn1FO2hPvrfixQqQLETM4fM/YYl6wyggbANW', NULL, '2024-05-06 06:32:01', '2024-05-06 06:57:31', 'p5un', 'p5fn', 'p5sn', '2024-05-07', '0123456', '0123456', '46000', 'parent', NULL, NULL),
(18, 'sm53@g.com', NULL, '$2y$12$ZJlkQlCiVIRQ3R3uq5zgCOgkLC9htD/mzGUd.lwgqVNyvp66ssJvm', NULL, '2024-05-06 07:06:51', '2024-05-06 07:21:02', 'sm5username3', 'sm53fn', 'sm53sn', '2024-05-07', '21, 5, 5', '0123456', '46000', 'swimmer', NULL, 'verified'),
(19, 'coach9@g.com', NULL, '$2y$12$lzFMhEIuPN/etT0sj98SDeJuL6OLpzs4A7ISmM25NSBeJIaVLYnPS', NULL, '2024-05-06 07:39:33', '2024-05-06 07:44:57', 'uncoach9', 'fncoach9', 'sncoach9', '2024-05-03', 'street 2 hourse none', '2365987', '9500st', 'coach', NULL, 'verified'),
(20, 'parent9@g.com', NULL, '$2y$12$4XB2/UDDPSHsVs3sBtRnCOufS5W/m4CEkJ78QdWnEygit86HQyDsK', NULL, '2024-05-06 07:48:24', '2024-05-06 07:48:24', 'usp9', 'fnp9', 'snp9', '2024-05-01', 'parent9 address', '2356984', 'ST09TT', 'parent', NULL, 'unverified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `coach_swimmer`
--
ALTER TABLE `coach_swimmer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coach_swimmer_coach_id_foreign` (`coach_id`),
  ADD KEY `coach_swimmer_swimmer_id_foreign` (`swimmer_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `swimmer_performance`
--
ALTER TABLE `swimmer_performance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach_swimmer`
--
ALTER TABLE `coach_swimmer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `swimmer_performance`
--
ALTER TABLE `swimmer_performance`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `coach_swimmer`
--
ALTER TABLE `coach_swimmer`
  ADD CONSTRAINT `coach_swimmer_coach_id_foreign` FOREIGN KEY (`coach_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `coach_swimmer_swimmer_id_foreign` FOREIGN KEY (`swimmer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
