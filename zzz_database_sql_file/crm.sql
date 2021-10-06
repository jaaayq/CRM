-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 06:24 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity1s`
--

CREATE TABLE `activity1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activityname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activitydate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activitydescription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activitycode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity1s`
--

INSERT INTO `activity1s` (`id`, `activityname`, `activitydate`, `activitydescription`, `activitycode`, `created_at`, `updated_at`) VALUES
(1, 'DOST MEETING', '07/15/2021 10:00 AM', 'ATTENDANCE', '123465', '2021-07-14 15:24:52', '2021-07-14 15:24:52');

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
-- Table structure for table `feedback2s`
--

CREATE TABLE `feedback2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feedbackcompanyname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackdate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackaddress` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbacktelephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackgender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbacknature` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackyesno1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackserviceavailed1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackserviceavailed2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackconsultancy` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackpackaging` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackscholarship` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackconversion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackmanagement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackmanagementspecify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `t2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AOS1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `AOS2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QOS1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QOS2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UTM1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CTT1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `RIP1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SAT1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `SAT2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackrank1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedbackrank2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackrank3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackrank4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackrank5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackexp1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackexp2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackexp3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbacksuggest` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbacksignature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedbackdesignation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback2s`
--

INSERT INTO `feedback2s` (`id`, `feedbackcompanyname`, `feedbackdate`, `feedbackaddress`, `feedbacktelephone`, `feedbackemail`, `feedbackgender`, `feedbacknature`, `feedbackyesno1`, `feedbackserviceavailed1`, `feedbackserviceavailed2`, `feedbackconsultancy`, `feedbackpackaging`, `feedbackscholarship`, `feedbackconversion`, `feedbackmanagement`, `feedbackmanagementspecify`, `t1`, `t2`, `AOS1`, `AOS2`, `QOS1`, `QOS2`, `UTM1`, `CTT1`, `RIP1`, `SAT1`, `SAT2`, `feedbackrank1`, `feedbackrank2`, `feedbackrank3`, `feedbackrank4`, `feedbackrank5`, `feedbackexp1`, `feedbackexp2`, `feedbackexp3`, `feedbacksuggest`, `feedbacksignature`, `feedbackdesignation`, `created_at`, `updated_at`) VALUES
(1, 'Dex Karl Duque', '07/15/2021', 'SAMPLE', '09123456789', 'd.duque.401453@umindanao.edu.ph', 'Male', 'SAMPLE', NULL, 'SAMPLE', 'SAMPLE', 'SAMPLE', NULL, 'SAMPLE', 'SAMPLE', 'SAMPLE', NULL, '2', '4', '3', '2', '5', '5', '4', '3', '2', '1', '2', '5', '4', '3', '3', '1', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', 'SAMPLE', '2021-07-14 15:29:40', '2021-07-14 15:29:40');

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
(27, '2014_10_12_000000_create_users_table', 1),
(28, '2014_10_12_100000_create_password_resets_table', 1),
(29, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(30, '2019_08_19_000000_create_failed_jobs_table', 1),
(31, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(32, '2021_06_05_021344_create_scholar_graduates_table', 1),
(33, '2021_06_28_050828_create_activity1s_table', 1),
(34, '2021_07_05_061851_create_tasks_table', 1),
(35, '2021_07_07_020937_create_roles_table', 1),
(36, '2021_07_07_021001_create_permissions_table', 1),
(37, '2021_07_07_054403_create_role_user_pivot_table', 1),
(38, '2021_07_07_054421_create_permission_role_pivot_table', 1),
(39, '2021_07_08_065625_create_sessions_table', 1),
(40, '2021_07_11_132939_create_feedback_table', 2),
(41, '2021_07_11_150842_create_feedback2s_table', 3),
(42, '2021_07_11_152511_create_feedback2_table', 4);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(2, 64),
(2, 73),
(2, 76),
(2, 78);

-- --------------------------------------------------------

--
-- Table structure for table `scholar_graduates`
--

CREATE TABLE `scholar_graduates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('Mnv3Qja1349aRIT5kfb1AKvCVCvO3ODiH0CI1e8V', 64, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicEtWTHVFYmFlUGxkQnVqTnpSajc2R2VzWkZUc3BjMnE4dUlkM1loOCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC91c2VycyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjY0O3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkVzVkQnVFODZ0U25MMExoVHliMXIuT2NQOURuQWFvYUlrVUt0N3pNejZmeEVUdGdIdHRwSzIiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJFc1ZEJ1RTg2dFNuTDBMaFR5YjFyLk9jUDlEbkFhb2FJa1VLdDd6TXo2ZnhFVHRnSHR0cEsyIjt9', 1632903324);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `roles`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `role_id`) VALUES
(64, 'admin', 'Jay', 'jay@example.com', NULL, '$2y$10$W5dBuE86tSnL0LhTyb1r.OcP9DnAaoaIkUKt7zMz6fxETtgHttpK2', NULL, NULL, NULL, NULL, NULL, '2021-09-22 05:01:59', '2021-09-22 05:01:59', 1),
(73, 'user', 'user', 'user123@example.com', NULL, '$2y$10$x08CxcCt6SPMnR6PGNUU8u/oUSxbgGh7NMBUy7VKtwSzIORv6.c/.', NULL, NULL, NULL, NULL, NULL, '2021-09-23 18:49:47', '2021-09-23 18:49:47', NULL),
(76, 'user', 'user12345', 'user12345678@example.com', NULL, '$2y$10$E0V9obJ.YuUTyyjnzUzIsuziSQ1fTXHw6gXclSrcgdfs4DogcvgC2', NULL, NULL, NULL, NULL, NULL, '2021-09-23 19:08:34', '2021-09-23 19:08:34', NULL),
(78, 'user', 'Perry Burt', 'usertest@example.com', NULL, '$2y$10$nQMNkQhJ2cQB5EWqYBve9.lucJAEyjibUe73bsFrkvIeYBarueZnO', NULL, NULL, NULL, NULL, NULL, '2021-09-28 23:47:37', '2021-09-28 23:47:37', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity1s`
--
ALTER TABLE `activity1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback2s`
--
ALTER TABLE `feedback2s`
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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `permission_role_role_id_foreign` (`role_id`),
  ADD KEY `permission_role_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `scholar_graduates`
--
ALTER TABLE `scholar_graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `roles_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity1s`
--
ALTER TABLE `activity1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback2s`
--
ALTER TABLE `feedback2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `scholar_graduates`
--
ALTER TABLE `scholar_graduates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
