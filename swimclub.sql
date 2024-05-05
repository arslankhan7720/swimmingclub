-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2024 at 08:46 PM
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
(4, 4, 9, '2024-05-05 09:03:57', '2024-05-05 09:03:57');

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
(3, 'event 2', 'location two 222', '2024-05-03 20:00:00', 'images/1714921156.jpg', 4, '2024-05-05 09:59:16', '2024-05-05 09:59:16'),
(5, 'event 3', 'national park 2', '2024-05-15 21:13:00', 'images/1714925609.jpg', 4, '2024-05-05 11:13:29', '2024-05-05 11:13:29');

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
('D5oFuHdMB5RrmP8MAtnruYI6KvPUoRI0lqGnfP5M', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoienBzRFFzS0pBcWJvNk0wWERFejJ3OUk4bllwZ0t5UTVzOFUweXBJUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1714932338),
('D8BWy8SbpSW3sB9hWtaGY1qUXsoAJlf44iGrEREG', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/124.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoib2RvR3hubG9qOXJmU3ROeDlOQzA4YTBjZEdndVcwaTZsOTlpSE9HeSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1714934752);

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
(1, 5, 5, '2024-05-04', '21:36:00', 'images/1714927709.png', 'verified', '2024-05-05 11:48:29', '2024-05-05 12:16:18');

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
(1, 'admin@gmail.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 09:02:18', '2024-05-04 13:59:32', 'admin', 'super', 'admin', '2024-05-24', 'house 22, street 109, Sector G11/4, KRL road islamabad', '0111222333', 'admin', 'admin', NULL, NULL),
(2, 'dev22@gmail.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 13:24:41', '2024-05-04 14:06:14', 'arsalan', 'test', 'dev', '2024-05-17', '03323232323', '03323232323', 'AA1 1AA', 'admin', NULL, NULL),
(3, 'parent1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:08:18', '2024-05-04 14:09:54', 'parent1', 'pfn', 'psn', '2024-05-01', '012117720', '012117720', 'AR1 22ST', 'parent', NULL, NULL),
(4, 'coach1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:11:34', '2024-05-04 14:11:34', 'coach1', 'chfn', 'chsn', '2024-05-01', 'Coach address, hill station 4, university road, bredford uk', '11235547', 'A7A 22G', 'coach', NULL, NULL),
(5, 'swimmer1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-04 14:12:52', '2024-05-04 14:12:52', 'swimmer1', 'swmfn', 'swmsn', '2024-05-04', 'University road, Haithrow airport, uk', '11354845', '987A ST2', 'swimmer', NULL, NULL),
(8, 'p1swimmer1@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-05 07:27:31', '2024-05-05 07:53:36', 'p1swimmer 1', 'p1s1fn', 'p1s1sn', '2024-05-16', 'Parent one swimmer child 1 address', '03232323', 'ST0 ULV', 'swimmer', 3, 'verified'),
(9, 'p1s2@g.com', NULL, '$2y$12$N2IG892OJ/QcFiks9X6AnO.4FEsxbWeZDtm4i40K27GncQEgy.sJ6', NULL, '2024-05-05 07:28:29', '2024-05-05 07:28:29', 'parent1swimmer2', 'p1s2 forname', 'p1s2 surname', '2024-05-02', 'address of parent 1 swimmer two', '033232323', 'ST7 KLW', 'swimmer', 3, 'unverified');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
