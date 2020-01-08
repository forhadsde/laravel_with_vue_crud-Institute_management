-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 10:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolmanagement`
--

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
(3, '2019_12_07_134229_create_subjects_table', 1),
(4, '2019_12_07_134656_create_subjectasigns_table', 1),
(5, '2019_12_07_134715_create_results_table', 1),
(6, '2019_12_07_143840_create_students_table', 1),
(7, '2019_12_07_145955_create_semesterlists_table', 1),
(8, '2019_12_10_054930_create_results_table', 2);

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
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `std_id` bigint(20) NOT NULL,
  `subject_id` bigint(20) NOT NULL,
  `marks` int(11) NOT NULL,
  `grade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `std_id`, `subject_id`, `marks`, `grade`, `created_at`, `updated_at`) VALUES
(1, 12, 6, 50, 'A+', '2019-12-09 23:58:24', '2019-12-09 23:58:24'),
(2, 12, 6, 50, 'A+', '2019-12-09 23:59:18', '2019-12-09 23:59:18'),
(3, 12, 6, 60, 'A-', '2019-12-09 23:59:28', '2019-12-09 23:59:28'),
(4, 12, 6, 60, 'A', '2019-12-10 00:00:20', '2019-12-10 00:00:20'),
(5, 12, 5, 50, 'A-', '2019-12-10 00:00:49', '2019-12-10 00:00:49'),
(6, 12, 4, 60, 'A-', '2019-12-10 00:01:19', '2019-12-10 00:01:19'),
(7, 1, 6, 50, 'A', '2019-12-10 00:34:10', '2019-12-10 00:34:10'),
(8, 1, 5, 50, 'B+', '2019-12-10 00:34:17', '2019-12-10 00:34:17'),
(9, 1, 4, 50, 'B', '2019-12-10 03:15:30', '2019-12-10 03:15:30');

-- --------------------------------------------------------

--
-- Table structure for table `semesterlists`
--

CREATE TABLE `semesterlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semestername` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesterlists`
--

INSERT INTO `semesterlists` (`id`, `semestername`, `created_at`, `updated_at`) VALUES
(3, '3', '2019-12-07 10:16:21', '2019-12-08 02:25:46'),
(4, '4', '2019-12-07 23:51:41', '2019-12-08 02:25:09'),
(5, '5', '2019-12-07 23:51:51', '2019-12-08 02:25:01'),
(6, '6', '2019-12-07 23:51:59', '2019-12-08 02:24:44'),
(7, '7', '2019-12-08 00:55:42', '2019-12-08 02:25:20'),
(8, '8', '2019-12-08 00:57:14', '2019-12-08 02:25:25'),
(9, '9', '2019-12-08 01:06:40', '2019-12-08 02:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` int(11) NOT NULL,
  `semester` int(11) NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `semester`, `department`, `created_at`, `updated_at`) VALUES
(1, 'Wasi Uddin', 1, 3, '1', '2019-12-07 09:00:53', '2019-12-08 08:48:26'),
(3, 'KiNG kHAN', 2, 6, '4', '2019-12-08 02:19:43', '2019-12-08 08:49:20'),
(4, 'Emran Imam', 3, 3, '1', '2019-12-08 05:09:27', '2019-12-08 08:49:52'),
(5, 'Abdul Alim', 4, 3, '1', '2019-12-08 06:04:21', '2019-12-08 08:50:16'),
(6, 'Siyam Zakir', 6, 8, '3', '2019-12-08 06:04:46', '2019-12-08 08:50:56'),
(7, 'MD Forhadul Islam', 12, 5, '3', '2019-12-08 06:05:27', '2019-12-08 08:59:11'),
(8, 'Yeasir Arafat', 15, 6, '4', '2019-12-08 06:06:18', '2019-12-08 08:59:30'),
(9, 'Eliyas Mahmud', 14, 4, '3', '2019-12-08 06:11:19', '2019-12-08 08:59:47'),
(10, 'MD Moniruzzaman', 56, 5, '2', '2019-12-08 06:11:35', '2019-12-08 09:00:05'),
(11, 'Shakil Reza', 45, 6, '3', '2019-12-08 06:12:02', '2019-12-08 09:00:26'),
(12, 'Md. Shahinur Rahman', 30, 3, '1', '2019-12-08 06:12:29', '2019-12-08 09:01:30'),
(13, 'Salekin Sayeed', 17, 5, '1', '2019-12-08 06:16:44', '2019-12-08 09:01:10');

-- --------------------------------------------------------

--
-- Table structure for table `subjectasigns`
--

CREATE TABLE `subjectasigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `semester_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjectasigns`
--

INSERT INTO `subjectasigns` (`id`, `subject_id`, `student_id`, `semester_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 10, NULL, NULL),
(2, 2, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) NOT NULL,
  `subject_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `subject_code`, `created_at`, `updated_at`) VALUES
(1, 'Programing Language - 2', '5656', '2019-12-07 10:19:32', '2019-12-08 02:01:04'),
(2, 'Computer Foundamentals', '5652', '2019-12-07 23:36:30', '2019-12-07 23:36:30'),
(3, 'Basic Electronics', '1536', '2019-12-07 23:38:09', '2019-12-07 23:38:09'),
(4, 'Electrical Engring', '6969', '2019-12-07 23:40:59', '2019-12-07 23:40:59'),
(5, 'Physics', '5100', '2019-12-07 23:45:30', '2019-12-07 23:45:30'),
(6, 'Chemistry', '5200', '2019-12-08 00:22:36', '2019-12-08 00:22:36');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject_id` (`subject_id`),
  ADD KEY `std_id` (`std_id`);

--
-- Indexes for table `semesterlists`
--
ALTER TABLE `semesterlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjectasigns`
--
ALTER TABLE `subjectasigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `semesterlists`
--
ALTER TABLE `semesterlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `subjectasigns`
--
ALTER TABLE `subjectasigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `results`
--
ALTER TABLE `results`
  ADD CONSTRAINT `results_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `results_ibfk_2` FOREIGN KEY (`std_id`) REFERENCES `students` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
