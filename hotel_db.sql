-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2024 at 06:52 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `is_active` tinyint(4) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sub_title`, `image`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Welcome To', 'i-Suites Residence & Restaurant', 'documents/banner/202.jpg', 1, NULL, '2024-11-09 10:54:42'),
(2, 'Enjoy', 'The Best Food', 'documents/banner/5011.jpg', 1, NULL, '2024-11-09 10:56:02'),
(3, 'Perfect Place For Dining', 'RoofTop Restaurant', 'documents/banner/5011.jpg', 1, NULL, '2024-11-09 10:56:59');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_11_09_111550_create_rooms_table', 2),
(6, '2024_11_09_164131_create_banners_table', 3),
(7, '2024_12_03_184007_create_offers_table', 4),
(8, '2024_12_23_211443_create_reservations_table', 5),
(9, '2024_12_23_215509_create_reservations_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Offer_Title` varchar(255) NOT NULL,
  `Offer_percent` varchar(255) NOT NULL,
  `thumbnail` varchar(255) NOT NULL DEFAULT '0',
  `details` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `Offer_Title`, `Offer_percent`, `thumbnail`, `details`, `created_at`, `updated_at`) VALUES
(5, 'For new married couple', '20', '0', 'hi test', '2024-12-04 16:53:04', '2024-12-04 16:53:04');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `check_in_date` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `number_of_person` varchar(255) NOT NULL,
  `special_comments` varchar(255) NOT NULL,
  `check_out_date` varchar(255) NOT NULL,
  `number_of_room` varchar(255) NOT NULL,
  `number_of_children` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `full_name`, `contact_number`, `email`, `address`, `check_in_date`, `room_type`, `number_of_person`, `special_comments`, `check_out_date`, `number_of_room`, `number_of_children`, `status`, `created_at`, `updated_at`) VALUES
(1, 'koli akter', '01378374833', 'koli@gmail.com', 'FJKDJFKD', '1999-12-23', 'VIP Suite', '3', 'hi kdjfk', '1999-12-13', '3', '3', 'completed', '2024-12-23 18:16:01', '2024-12-24 17:41:46'),
(2, 'chankumangku', '09747348', 'chanku@gmail.com', 'rangamati', '1999-12-13', 'Executive Suite', '3', 'fantastik', '1999-12-12', '2', '3', 'completed', '2024-12-24 17:46:58', '2024-12-24 17:48:46'),
(3, 'chankumangku', '09747348', 'chanku@gmail.com', 'rangamati', '1999-12-13', 'Executive Suite', '3', 'fantastik', '1999-12-12', '2', '3', 'pending', '2024-12-24 17:47:46', '2024-12-24 17:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `room_type` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `features` text DEFAULT NULL,
  `bdt_price` double(20,2) DEFAULT 0.00,
  `usd_price` double(20,2) DEFAULT 0.00,
  `thumbnail` varchar(255) DEFAULT NULL,
  `image1` varchar(255) DEFAULT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) DEFAULT 1 COMMENT '1=active,2=inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `room_type`, `floor`, `features`, `bdt_price`, `usd_price`, `thumbnail`, `image1`, `image2`, `image3`, `image4`, `image5`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Premium Suites', 'type', '501', 'Free WIFI,View City', 25000.00, 250.00, 'documents/room/202411/hotel room.jpg', 'documents/room/202411/1731175292_1.jpg', NULL, NULL, NULL, NULL, 1, '2024-11-09 07:38:41', '2024-11-09 18:01:32'),
(2, 'Dr. Helal', 'type2', '503', 'VIew CIty,Wifi', 35000.00, 350.00, 'documents/room/202411/5023.jpg', 'documents/room/202411/202.jpg', 'documents/room/202411/501.jpg', 'documents/room/202411/503.jpg', 'documents/room/202411/505.jpg', 'documents/room/202411/506.jpg', 1, '2024-11-09 08:32:34', '2024-11-09 09:11:10');

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
  `is_active` tinyint(4) DEFAULT 1 COMMENT '1=active,2=inactive',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$yCxr/7EY4U0gO8NsFUd1c.U8mmMFJMob77jZdhMoJV00bpN7z5e2u', 1, NULL, '2024-11-06 18:57:28', '2024-11-06 18:57:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
