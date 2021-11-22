-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2021 at 12:31 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `education_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `status`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Swarnadwip Nath', 'pfswarnadwip@gmail.com', NULL, '$2y$10$Jv.TeQcz4hSupcoiQrDpFOsaXlo/vfS0xp735lsAuqBqYDIAecGFa', '1', 'admin', NULL, '2021-11-12 04:17:15', '2021-11-12 04:39:54'),
(8, 'Shreya Roy', 'shreya@yopmail.com', NULL, '$2y$10$cPzJ1ZFCJeN9SyEtDOd4leviCwy8grzOHww/HvdS3C.467q9MsRme', '1', NULL, NULL, '2021-11-12 06:20:57', '2021-11-12 06:21:16');

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
(5, '2021_11_12_111509_create_subjects_table', 2);

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
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keyword` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `category`, `name`, `description`, `image`, `file`, `meta_title`, `meta_description`, `meta_keyword`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Kinder garten', 'How Many Colors in a Rainbow?', 'How many colors are in the rainbow? Students use their number sense and coloring skills to create a beautiful rainbow, then count the colors in it. This fine motor skills activity is ideally suited to a preschool or kindergarten lesson on counting numbers 1-10.', '1636716880-colors-rainbow-counting-numbers-nature.gif', '1636716880-1636538223-document (16).pdf', 'How Many Colors in a Rainbow?|passionate futurist', 'Top MBA Assignment Help and Homework Service for UK students by experienced teachers and professors. Contact us and grab your offers.', 'strategic-management-assignment-help', 'how-many-color-in-rainbow', '2021-11-12 06:04:40', '2021-11-12 07:07:04'),
(4, '3rd grade', 'adf', 'sadf', '1636785994-colors-rainbow-counting-numbers-nature.gif', '1636785994-admins.sql', 'ds', 'Do you want to know various applications of machine learning for your assignment? UR Assignment will provide you the best of it. Hurry Up!', 'leading-MBA-assignment-help', 'bike-chain-cover', '2021-11-13 01:16:34', '2021-11-13 01:16:34');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'Rohit Das', '', NULL, NULL, '2021-11-13 05:38:15', '2021-11-13 05:38:15'),
(8, 'Swarnadwip Nath', '', NULL, NULL, '2021-11-13 05:39:10', '2021-11-13 05:39:10'),
(14, 'Swarnadwip Nath', 'pfswarnadwip@yopmail.com', NULL, NULL, '2021-11-13 05:45:56', '2021-11-13 05:45:56'),
(15, 'Swarnadwip Nath', 'pfswarnadwip@gmail.com', NULL, NULL, '2021-11-13 05:46:02', '2021-11-13 05:46:02'),
(16, 'Swarnadwip Nath', 'pfswarnadwip@yopmail.com', NULL, NULL, '2021-11-13 05:46:27', '2021-11-13 05:46:27'),
(17, 'Swarnadwip Nath', 'pfswarnadwip@yopmail.com', NULL, NULL, '2021-11-13 05:46:41', '2021-11-13 05:46:41'),
(18, 'Swarnadwip Nath', 'pfswarnadwip@yopmail.com', NULL, NULL, '2021-11-13 05:46:45', '2021-11-13 05:46:45'),
(19, 'shreya Roy', 'sanu@yopmail.com', NULL, NULL, '2021-11-13 05:47:07', '2021-11-13 05:47:07'),
(20, 'shreya Roy', 'sanu@yopmail.com', NULL, NULL, '2021-11-13 05:49:12', '2021-11-13 05:49:12'),
(21, 'shreya Roy', 'sanu@yopmail.com', NULL, NULL, '2021-11-13 05:49:16', '2021-11-13 05:49:16'),
(22, 'shreya Roy', 'sanu@yopmail.com', NULL, NULL, '2021-11-13 05:49:21', '2021-11-13 05:49:21'),
(23, 'shreya Roy', 'rohit1@yopmail.com', NULL, NULL, '2021-11-13 05:49:45', '2021-11-13 05:49:45'),
(24, 'Avijit Sen', 'shreya456@yopmail.com', NULL, NULL, '2021-11-13 05:54:06', '2021-11-13 05:54:06'),
(25, 'Avijit Sen', 'shreya456@yopmail.com', NULL, NULL, '2021-11-13 05:54:08', '2021-11-13 05:54:08'),
(26, 'Avijit Sen', 'shreya456@yopmail.com', NULL, NULL, '2021-11-13 05:54:09', '2021-11-13 05:54:09'),
(27, 'Avijit Sen', 'shreya456@yopmail.com', NULL, NULL, '2021-11-13 05:54:10', '2021-11-13 05:54:10'),
(28, 'Rohit Das', 'rohit1@yopmail.com', NULL, NULL, '2021-11-13 05:54:22', '2021-11-13 05:54:22'),
(29, 'Rohit Das', 'rohit1@yopmail.com', NULL, NULL, '2021-11-13 05:54:23', '2021-11-13 05:54:23'),
(30, 'Rohit Das', 'rohit1@yopmail.com', NULL, NULL, '2021-11-13 05:54:23', '2021-11-13 05:54:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
