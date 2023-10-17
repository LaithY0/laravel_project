-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2023 at 02:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_picture`, `created_at`, `updated_at`, `href`) VALUES
(8, 'enjoyment', 'myimg/saraya-aqaba-waterpark.jpg', NULL, NULL, 'enjoyment'),
(10, 'archaeological ', 'myimg/place1.jpg', NULL, NULL, 'archaeological'),
(14, 'religious ', 'myimg/Mount-Nebo-7.jpg', NULL, NULL, 'religious'),
(15, 'medical ', 'myimg/dead_sea.jpg', NULL, NULL, 'medical');

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
(21, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(22, '2023_09_07_112941_create_categories_table', 1),
(23, '2023_09_07_115658_create_trips_table', 1),
(24, '2023_09_07_115855_create_users_table', 1),
(25, '2023_09_07_115941_create_reservatios_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservatios`
--

CREATE TABLE `reservatios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reservation_date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `trip_id` bigint(20) UNSIGNED NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trip_name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `day1` date DEFAULT NULL,
  `day2` date DEFAULT NULL,
  `day3` date DEFAULT NULL,
  `clients` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `days` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `href` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`id`, `trip_name`, `price`, `day1`, `day2`, `day3`, `clients`, `photo`, `days`, `details`, `category_id`, `created_at`, `updated_at`, `href`) VALUES
(17, 'Al quds', 170, '2023-09-01', '2023-10-10', '2023-11-08', 15, 'myimg/ss.jpg', '', '', 14, NULL, NULL, 'audsdet'),
(20, 'Amman', 100, '2023-11-10', '2023-11-09', '2023-09-07', 12, 'myimg/amman-jordan.jpg', '5', '', 8, NULL, NULL, 'ammandetails'),
(21, 'Aqaba', 70, '2023-11-08', '2023-11-15', '2023-09-15', 10, 'myimg/aqaba.jpg', '3', '', 8, NULL, NULL, 'aqabadetails'),
(24, 'Dead Sea', 110, '2023-09-15', '2023-09-25', '2023-09-28', 15, 'myimg/deadS.jpg', '5', '', 15, NULL, NULL, 'deaddetails'),
(26, 'Afra Hot Springs Chalets in At-Tafilah', 90, '2023-09-15', '2023-09-19', '2023-09-28', 13, 'myimg/afraa.jpg', '5', '', 15, NULL, NULL, 'afradet'),
(27, 'Wadi Rum', 120, '2023-10-15', '2023-09-15', '2023-09-20', 15, 'myimg/w-rum.jpg', '3', '', 8, NULL, NULL, 'wadidetails'),
(29, 'Karak Castle', 75, '2023-09-15', '2023-09-20', '0000-00-00', 11, 'myimg/amman-jordan.jpg', '', '', 10, NULL, NULL, 'karkdetails'),
(30, 'Petra', 130, '2023-09-28', '2023-09-15', '2023-09-20', 15, 'myimg/petra.jpg', '5', 'southern Jordan. It is adjacent to the mountain of Jabal Al-Madbah, in a basin surrounded by mountains forming the eastern flank of the Arabah valley running from the Dead Sea to the Gulf of Aqaba.[5] The area around Petra has been inhabited from as early', 10, NULL, NULL, 'petradetails'),
(36, 'Hammamet Main Madaba', 85, '2023-09-15', '2023-09-20', '2023-09-26', 14, 'myimg/ma.madba.jpg', '', '', 15, NULL, NULL, 'hammdet'),
(37, 'Jerash pillars', 30, '2023-09-15', '2023-09-20', '2023-09-26', 20, 'myimg/jerash.jpg\r\n', '2', '', 10, NULL, NULL, 'jrshdetails'),
(38, 'Makkah', 300, '2023-09-15', '2023-09-25', '2023-10-06', 25, 'myimg/makkah.jpg', '6', '', 14, NULL, NULL, 'makkahdet'),
(39, 'Alqiama charch', 150, '2023-09-15', '2023-09-25', '2023-09-28', 20, 'myimg/alqiama.jpg ', '2', '', 14, NULL, NULL, 'alqiamadet');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Fname` varchar(255) NOT NULL,
  `Lname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `payment_status` varchar(255) DEFAULT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'myimg/me.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Fname`, `Lname`, `password`, `email`, `phone`, `payment_status`, `is_admin`, `created_at`, `updated_at`, `photo`) VALUES
(2, 'Hala', 'Dieabs', '$2y$10$ohqlYltCthaGrGELjdp6EOB8wSbjjMEXxcz6OfS8RhxvjRheqfXdm', 'hala@gmail.com', '07888888', NULL, 1, '2023-09-14 06:21:44', '2023-09-15 21:12:28', 'hala.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `reservatios`
--
ALTER TABLE `reservatios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservatios_user_id_foreign` (`user_id`),
  ADD KEY `reservatios_trip_id_foreign` (`trip_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trips_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservatios`
--
ALTER TABLE `reservatios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservatios`
--
ALTER TABLE `reservatios`
  ADD CONSTRAINT `reservatios_trip_id_foreign` FOREIGN KEY (`trip_id`) REFERENCES `trips` (`id`),
  ADD CONSTRAINT `reservatios_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `trips`
--
ALTER TABLE `trips`
  ADD CONSTRAINT `trips_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
