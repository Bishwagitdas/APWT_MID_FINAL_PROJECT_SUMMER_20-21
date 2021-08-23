-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2021 at 07:44 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_doctor_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `email`, `date`, `status`) VALUES
(1, 'Bishwagit', 'bishwagit@gmail.com', '2021-08-17', 'pending'),
(2, 'Dev', 'dev@gmail.com', '2021-08-17', 'pending'),
(3, 'Joy', 'joy@gmail.com', '2021-08-16', 'pending'),
(4, 'Apu', 'apu@gmail.com', '2021-08-17', 'pending'),
(5, 'Aditto', 'aditto@gmail.com', '2021-08-17', 'pending'),
(6, 'Nirob', 'nirob@gmail.com', '2021-08-17', 'pending'),
(7, 'Masum', 'masum@gmail.com', '2021-08-17', 'pending'),
(8, 'Akash', 'akash@gmail.com', '2021-08-17', 'pending'),
(9, 'Apon', 'apon@gmail.com', '2021-08-17', 'pending'),
(10, 'Avijit', 'avijit@gmail.com', '2021-08-17', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `availability`
--

CREATE TABLE `availability` (
  `id` int(100) NOT NULL,
  `sunday` int(100) NOT NULL,
  `monday` int(100) NOT NULL,
  `tuesday` int(100) NOT NULL,
  `wednesday` int(100) NOT NULL,
  `thursday` int(100) NOT NULL,
  `friday` int(100) NOT NULL,
  `saturday` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `date`, `description`, `created_at`, `updated_at`) VALUES
(2, 'How To Generate Other Killer', '2021-08-13', 'Descriptive Words: Words used to describe or give details about something, some place, or someone. ... Sentence: A group of words that is a complete thought as a statement, question, or exclamation.', '2021-08-12 13:25:47', '2021-08-20 04:46:35'),
(3, 'inspiration from blogs you follow', '2021-08-13', 'By drawing on a fundamental description of cause and effect found in Einstein’s theory of special relativity, researchers from Imperial College London have come up with a way to help AIs make better guesses too.', '2021-08-12 13:29:57', '2021-08-12 13:29:57'),
(4, 'Social media\'s leading physician voice', '2021-08-14', 'Thousands of authors contribute to the site which includes front-line primary care doctors, surgeons, specialist physicians, nurses, medical students, policy experts and of course, patients, who need the medical profession to hear their voices.', '2021-08-12 21:47:56', '2021-08-12 21:47:56'),
(7, 'Social media\'s leading physician voice', '2021-08-18', 'When you arrive at the facility, you will be asked the same standard screening questions and provided with a cloth mask (if you do not already have one). If you have your own mask or bandana to cover your mouth and nose, you can wear that.', '2021-08-14 02:58:53', '2021-08-14 02:58:53');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(5, '2021_08_12_173719_create_blogs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'das@gmail.com_Token', 'bbab1c89a755cb6faaedc9fa10855aa299b1ebdd00e59a649e6cfb4291fb6c36', '[\"*\"]', NULL, '2021-08-10 00:51:52', '2021-08-10 00:51:52'),
(2, 'App\\Models\\User', 2, 'dev@gmail.com_Token', 'f765dc4b49887e9798e611da50e51923f2912984dca17aebf9f5cd4e09830d54', '[\"*\"]', NULL, '2021-08-10 00:55:05', '2021-08-10 00:55:05'),
(3, 'App\\Models\\User', 3, 'joy@gmail.com_Token', '7a4ce045a857130e4e639f1e9e3afffa07279513d77068c4b3e1dbf556735cf2', '[\"*\"]', NULL, '2021-08-10 00:56:27', '2021-08-10 00:56:27'),
(32, 'App\\Models\\User', 5, 'bishwagitdas@gmail.com_Token', '6db82e445a20d8e42f26914dce1599d092998c76084614bb92d03f95cb6f823d', '[\"*\"]', NULL, '2021-08-10 23:30:29', '2021-08-10 23:30:29'),
(99, 'App\\Models\\User', 5, 'bishwagitdas@gmail.com_Token', 'dd9bf95cc23324d9ad1cf1a0a802d63970c039746f4ead73bda5f502bdfac327', '[\"*\"]', '2021-08-14 03:07:18', '2021-08-14 02:57:01', '2021-08-14 03:07:18');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `question` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `email`, `date`, `question`) VALUES
(1, 'Bishwagit', 'bishwagit@gmail.com', '2021-08-17', 'What Are Your Medical and Surgical Histories?'),
(2, 'Dev', 'dev@gmail.com', '2021-08-17', 'Do you have the supplies and capacity to accommodate my procedure? '),
(3, 'Joy', 'joy@gmail.com', '2021-08-17', 'What should I expect during my procedure?'),
(4, 'Apu', 'apu@gmail.com', '2021-08-17', 'Will I be tested for COVID-19? '),
(5, 'Aditto', 'aditto@gmail.com', '2021-08-17', 'What happens when I arrive for my procedure? ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `title`, `address`, `country`) VALUES
(1, 'Bishwagit', 'das@gmail.com', NULL, '$2y$10$CQ0VTdeflcOdwY9cGeklme8rWcxcRHCqqoqSKpHBI1cReAko2jSoi', NULL, NULL, NULL, 'Philosophy', 'Naogaon', 'Bangladesh'),
(2, 'Dev', 'dev@gmail.com', NULL, '$2y$10$Hk4fqtort.HLrmmUVZ3DTes1mzzfh.ex81PYRMNdQHre3HpjlthXK', NULL, NULL, NULL, 'Philosophy', 'Naogaon', 'Bangladesh'),
(3, 'Joy', 'joy@gmail.com', NULL, '$2y$10$kWoidcaEXTJcoSLdMQiiw.TSwBzbQ0QfgS8kvP48ZfMsvoImKwQsK', NULL, NULL, NULL, 'Philosophy', 'Naogaon', 'Bangladesh'),
(4, 'Bishwagit Das', 'bishwagitdas0@gmail.com', NULL, '$2y$10$.xUbPe2Q5AL.gnKKnl3zM.AyeQf4o1be.8.awIihdvzsS8uFZVHoa', NULL, NULL, NULL, 'Diagnostic', 'Dhaka', 'Bangladesh'),
(6, 'Dass', '18-36730-1@student.aiub.edu', NULL, '$2y$10$qELlF8ZOpzO./WM8ogEy3.wSCCvkLMJoSqyqObGGduAZ08QocyRl2', NULL, NULL, NULL, 'Diagnostic', 'Dhaka', 'Bangladesh'),
(7, 'Akash', 'akash@gmail.com', NULL, '$2y$10$E9wwyukKNMTELtCH7sFsTOCM0UaZOjgyy5NQ4uieE4QcKCk1T6quO', NULL, NULL, NULL, 'Diagnostic', 'Dhaka', 'Bangladesh'),
(8, 'Badhon das', 'badhon@gmail.com', NULL, '$2y$10$Btr3IyQvJcyD4pzn5Atyh.a0qrnJyk8Qa/uFyIf.9/CQY2k4zQWS2', NULL, NULL, NULL, 'Diagnostic', 'Dhaka', 'Bangladesh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `availability`
--
ALTER TABLE `availability`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
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
-- Indexes for table `question`
--
ALTER TABLE `question`
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
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `availability`
--
ALTER TABLE `availability`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
