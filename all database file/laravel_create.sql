-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2025 at 09:46 AM
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
-- Database: `laravel_create`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(30) NOT NULL,
  `path` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `path`, `created_at`, `updated_at`) VALUES
(3, 'H5M8ljKWZZyeic7RAydNgxifaLWPeqZqFizwMHq5.jpg', '2025-09-30', '2025-09-30'),
(4, 'Pjg0HW34nxUO1d0Tbe0pSBWGjk7cUdbaESuIIBcy.jpg', '2025-09-30', '2025-09-30'),
(5, '1JsR10sCvsXSTtagcygfqmiDN8k6ibc6VJ7CiSCa.jpg', '2025-09-30', '2025-09-30'),
(6, 'lLIIwk3511kCdY4h8f2d3beHUJW8JpeYy38LGfmp.jpg', '2025-09-30', '2025-09-30'),
(7, 'dgslqF4OU1kkSP1MNhxaC1c3zSRrb0e6fADsTyYm.jpg', '2025-09-30', '2025-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `laravel_crud_students`
--

CREATE TABLE `laravel_crud_students` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(17) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laravel_crud_students`
--

INSERT INTO `laravel_crud_students` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'vivek kanzariya', 'vivek@gmail.com', '+91 9898098980', '2025-10-08 05:35:13', '2025-10-08 05:35:13'),
(2, 'omkar parmar', 'omkar.parmar@gmail.com', '+91 8767876787', '2025-10-08 05:35:40', '2025-10-08 05:35:40'),
(3, 'jaydev kanzariya', 'jaydev@gmail.com', '+91 9090988983', '2025-10-08 05:37:00', '2025-10-09 06:48:06'),
(4, 'testing', 'test@gmail.com', '+91 1111000010', '2025-10-09 06:55:46', '2025-10-09 06:55:46'),
(5, 'vivek kanzariya', 'vivek@gmail.com3', '+91 9898098980', '2025-10-09 07:03:34', '2025-10-09 07:03:34'),
(6, 'test1', 'test1@gmail.com', '+91  8877990066', '2025-10-09 07:37:36', '2025-10-09 09:30:33'),
(7, 'vivek kanzariya12', 'vivek12@gmail.com', '+91 9898078123', '2025-10-09 09:16:24', '2025-10-09 09:30:28');

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
(4, '2025_10_01_070327_create_personal_access_tokens_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'myapp', '095c40791f2e55151b125612627b2733347bf601ee266d6dc01ded7ee030abce', '[\"*\"]', NULL, NULL, '2025-10-03 00:15:34', '2025-10-03 00:15:34'),
(2, 'App\\Models\\User', 1, 'myapp', '84ef50ad3aaed20217e86cbb110f498a27514e556992c2b4dd0bc90e0c07964b', '[\"*\"]', NULL, NULL, '2025-10-03 00:35:27', '2025-10-03 00:35:27'),
(3, 'App\\Models\\User', 1, 'myapp', '684b8edce6353dcaf0d7748c9cab36984454bc641356671456eb3c483dd72c06', '[\"*\"]', NULL, NULL, '2025-10-03 00:36:09', '2025-10-03 00:36:09'),
(4, 'App\\Models\\User', 1, 'myapp', 'ead2e10a544f4eec05111316f2726445c3ad10d9442972b8d9bc51ee55361e33', '[\"*\"]', NULL, NULL, '2025-10-03 00:36:24', '2025-10-03 00:36:24'),
(5, 'App\\Models\\User', 1, 'myapp', '6c50efcee5164b4b32ae1affd0322fa76fd3cf3e4d8c66e39e0e81e4396f2b27', '[\"*\"]', NULL, NULL, '2025-10-03 00:37:08', '2025-10-03 00:37:08'),
(6, 'App\\Models\\User', 1, 'myapp', 'bd5aac161b2d312b27b16bdaa66e923d368f04cbca1bd42f979d2b1fa4e7e0a7', '[\"*\"]', '2025-10-03 01:53:00', NULL, '2025-10-03 01:02:28', '2025-10-03 01:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `seller_id` int(30) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `seller_id`, `created_at`) VALUES
(1, 'iphone', '10000', 1, '2025-09-30'),
(2, 'vivo', '7000', 2, '2025-09-30'),
(3, 'infinix', '9999', 1, '2025-09-30'),
(4, 'OPPO', '7000', 1, '2025-10-01'),
(5, 'micromax', '5000', 2, '2025-10-01');

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `created_at`) VALUES
(1, 'vivek', '2025-09-30'),
(2, 'jaydev', '2025-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `batch`) VALUES
(1, 'omkar', 'omkar@college.com', '2015'),
(3, 'vivek', 'vivek@gmail.com', '2004'),
(5, 'peter', 'peter@gmail.com', '2013'),
(6, 'Allen Solly', 'allen_solly@gmail.com', '2020'),
(7, 'Allen Solly', 'allen_solly@gmail.com', '2020'),
(8, 'Wrangler', 'Wrangler@gmail.com', '2019'),
(9, 'Wrangler', 'Wrangler@gmail.com', '2019'),
(10, 'Peter England', 'peter_england@gmail.com', '1988'),
(12, 'peter parker', 'parker@parker.com', '2019'),
(13, 'jay', 'jay@gmail.com', '2022'),
(14, 'jaydev', 'jaydev@gmail.com', '2020'),
(15, 'test', 'test@gmail.com', '2000'),
(16, 'test', 'test@gmail.com', '2000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vivek', 'vivek@gmail.com', NULL, '$2y$12$ghGSKkh6cDKbL6INYaUquuFiAUB26tARDT25pH9fYMb7pEvN8gCza', NULL, '2025-10-03 00:15:34', '2025-10-03 00:15:34');

-- --------------------------------------------------------

--
-- Table structure for table `users1`
--

CREATE TABLE `users1` (
  `id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users1`
--

INSERT INTO `users1` (`id`, `name`, `email`, `phone`) VALUES
(1, 'vivek', 'vivek@gmail.com', '1111122222'),
(2, 'jaydev', 'kalu2323@gmail.com', '2323232323'),
(3, 'omkar', 'omkar66@gmail.com', '5656565656'),
(4, 'vivek', 'vivek@gmail.com', '1111122222'),
(5, 'jaydev', 'kalu2323@gmail.com', '2323232323'),
(6, 'omkar', 'omkar66@gmail.com', '5656565656'),
(7, 'vivek', 'vivek@gmail.com', '1111122222'),
(9, 'vivek', 'vivek@gmail.com', '1111122222'),
(10, 'vivek', 'vivek@gmail.com', '1111122222'),
(11, 'vivek', 'vivek@gmail.com', '1111122222'),
(12, 'vivek', 'vivek@gmail.com', '1111122222'),
(13, 'vivek', 'vivek@gmail.com', '1111122222'),
(14, 'vivek', 'vivek@gmail.com', '1111122222'),
(15, 'vivek', 'vivek@gmail.com', '1111122222'),
(16, 'vivek', 'vivek@gmail.com', '1111122222'),
(17, 'vivek', 'vivek@gmail.com', '1111122222'),
(18, 'vivek', 'vivek@gmail.com', '1111122222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `laravel_crud_students`
--
ALTER TABLE `laravel_crud_students`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users1`
--
ALTER TABLE `users1`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laravel_crud_students`
--
ALTER TABLE `laravel_crud_students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users1`
--
ALTER TABLE `users1`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
