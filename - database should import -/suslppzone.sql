-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2020 at 10:17 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suslppzone`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_msgs`
--

CREATE TABLE `contact_msgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uic_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isRead` int(10) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(3, '2020_04_17_070859_create_papers_table', 1),
(4, '2020_04_17_125028_create_subjects_table', 1),
(6, '2020_04_18_044547_create_contact_msgs_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `papers`
--

CREATE TABLE `papers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paper_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `std_year_sem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dwnld_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papers`
--

INSERT INTO `papers` (`id`, `course_code`, `paper_year`, `std_year_sem`, `dept`, `dwnld_link`, `created_at`, `updated_at`) VALUES
(1, 'PST 21201', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=1gM48ZeaBWGE9jWW4scnEGZ56K9Y62zJY', '2020-04-17 09:18:19', '2020-04-17 09:18:19'),
(2, 'PST 21202', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=1-jUA5jhxDl3kPIibsMewgsZk_HU8n1hH', '2020-04-17 09:18:56', '2020-04-17 09:18:56'),
(3, 'PST 21204', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=1-hjTYG4AvK4is_ua1mHwBG5CSdwQM2yd', '2020-04-17 09:19:32', '2020-04-17 09:19:32'),
(4, 'PST 21205', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=1ac6enKQaJHru0ioBLueK9yWCpmS4D1Ca', '2020-04-17 09:20:05', '2020-04-17 09:20:05'),
(5, 'PST 21207', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=1ePT8YUsx883WTj6MlyGjLBYtMNFO2KN0', '2020-04-17 09:20:36', '2020-04-17 09:20:36'),
(6, 'PST 21208', '2019', '2/1', 'PST', 'https://drive.google.com/open?id=11hCSwZE7Gi3lfIS47Ndbaq5tn7MPgr1X', '2020-04-17 09:21:04', '2020-04-17 09:21:04'),
(7, 'PST 21110', '2018', '2/1', 'PST', 'https://drive.google.com/open?id=19yV6fY0piml77UkZ-WoTwJcjNXxWi_FK', '2020-04-17 09:23:23', '2020-04-17 09:23:23'),
(8, 'PST 21208', '2018', '2/1', 'PST', 'https://drive.google.com/open?id=1s6JxNGfLvu1UZiZWhM0H6kLjwrOz-l8y', '2020-04-17 09:24:10', '2020-04-17 09:24:10'),
(9, 'PST 21209', '2018', '2/1', 'PST', 'https://drive.google.com/open?id=1KY4OzaQ_YY72XjaAPfGKcP0B9t9cKEfA', '2020-04-17 09:24:41', '2020-04-17 09:24:41'),
(10, 'PST 11109', '2018', '1/1', 'PST', 'https://drive.google.com/open?id=1AU9Y43719arxXpsO8xTKt496mdCRXT_b', '2020-04-17 09:26:26', '2020-04-17 09:26:26'),
(12, 'FST 11201', '2015', '1/2', 'FOOD', 'https://drive.google.com/open?id=11ZJpja9YmQl7emGHkaDDLcT58EytV3Qv000', '2020-04-17 20:27:07', '2020-04-17 20:27:07');

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
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `course_code`, `course_name`, `created_at`, `updated_at`) VALUES
(1, 'PST 11201', 'Mechanics and Properties of Matter', '2020-04-17 09:11:26', '2020-04-17 09:11:26'),
(2, 'PST 11202', 'Introduction to Electricity and Magnetism', '2020-04-17 09:11:43', '2020-04-17 09:11:43'),
(3, 'PST 11103', 'Physics Laboratory 1-I', '2020-04-17 09:12:10', '2020-04-17 09:12:10'),
(4, 'PST 11204', 'General Chemistry', '2020-04-17 09:12:34', '2020-04-17 09:12:34'),
(5, 'PST 11205', 'Fundamentals of Organic Chemistry', '2020-04-17 09:12:51', '2020-04-17 09:12:51'),
(6, 'PST 11106', 'Elementary Chemistry Laboratory I', '2020-04-17 09:13:09', '2020-04-17 09:13:09'),
(7, 'PST 11207', 'Structured Programming', '2020-04-17 09:13:24', '2020-04-17 09:13:24'),
(8, 'PST 11208', 'Computer Hardware and Software', '2020-04-17 09:13:37', '2020-04-17 09:13:37'),
(9, 'PST 11109', 'Computer Laboratory 1-I', '2020-04-17 09:13:51', '2020-04-17 09:13:51'),
(10, 'PST 11210', 'Calculus and Differential Equations', '2020-04-17 09:14:22', '2020-04-17 09:14:22'),
(11, 'CPE 1101', 'Professional English I', '2020-04-17 09:14:42', '2020-04-17 09:14:42'),
(12, 'PST 21201', 'Electronics', '2020-04-17 10:03:27', '2020-04-17 10:03:27'),
(13, 'PST 21202', 'Geometrical and Physical Optics', '2020-04-17 10:03:41', '2020-04-17 10:03:41'),
(14, 'PST 21103', 'Physics Laboratory 2-I', '2020-04-17 10:03:57', '2020-04-17 10:03:57'),
(15, 'PST 21204', 'Organic Chemistry', '2020-04-17 10:04:13', '2020-04-17 10:04:13'),
(16, 'PST 21205', 'Industrial Chemistry and Technology I (Organic)', '2020-04-17 10:04:30', '2020-04-17 10:04:30'),
(17, 'PST 21106', 'Organic Chemistry Laboratory', '2020-04-17 10:04:48', '2020-04-17 10:04:48'),
(18, 'PST 21207', 'Data Structures & Algorithms', '2020-04-17 10:05:12', '2020-04-17 10:05:12'),
(19, 'PST 21208', 'Computer Architecture and Assembly Language', '2020-04-17 10:05:32', '2020-04-17 10:05:32'),
(20, 'PST 21209', 'Advanced Statistics I', '2020-04-17 10:05:48', '2020-04-17 10:05:48'),
(21, 'PST 21110', 'Computer Laboratory 2-I', '2020-04-17 10:06:08', '2020-04-17 10:06:08'),
(22, 'CPE 2101', 'Professional English III', '2020-04-17 10:06:26', '2020-04-17 10:06:26'),
(23, 'PST 12201', 'Physics of Heat and Waves', '2020-04-17 10:26:00', '2020-04-17 10:26:00'),
(24, 'PST 12102', 'Semi-Conductor Physics', '2020-04-17 10:26:18', '2020-04-17 10:26:18'),
(25, 'PST 12103', 'AC Theory & Circuits', '2020-04-17 10:26:38', '2020-04-17 10:26:38'),
(26, 'PST 12104', 'Physics Laboratory 1-I', '2020-04-17 10:27:10', '2020-04-17 10:27:10'),
(27, 'PST 12205', 'Fundamentals of Physical Chemistry', '2020-04-17 10:27:25', '2020-04-17 10:27:25'),
(28, 'PST 12206', 'Fundamentals of Analytical Chemistry', '2020-04-17 10:27:44', '2020-04-17 10:27:44'),
(29, 'PST 12107', 'Elementary Chemistry Laboratory II', '2020-04-17 10:28:00', '2020-04-17 10:28:00'),
(30, 'PST 12208', 'Object Oriented Programming', '2020-04-17 10:28:16', '2020-04-17 10:28:16'),
(31, 'PST 12209', 'Fundamentals of Statistics', '2020-04-17 10:28:31', '2020-04-17 10:28:31'),
(32, 'PST 12110', 'Computer Laboratory 1-II', '2020-04-17 10:28:54', '2020-04-17 10:28:54'),
(33, 'PST 12211', 'Database Management Systems', '2020-04-17 10:29:10', '2020-04-17 10:29:10'),
(34, 'CPE 1201', 'Professional English II', '2020-04-17 10:29:31', '2020-04-17 10:29:31'),
(35, 'PST 22201', 'Physics of Electromagnetic Radiation and Introduction to the Laser', '2020-04-17 10:32:51', '2020-04-17 10:32:51'),
(36, 'PST 22202', 'Quantum Physics, Atomic & Nuclear Physics', '2020-04-17 10:33:09', '2020-04-17 10:33:09'),
(37, 'PST 22103', 'Physics Laboratory 2-II', '2020-04-17 10:33:25', '2020-04-17 10:33:25'),
(38, 'PST 22204', 'Chemistry of Elements', '2020-04-17 10:33:41', '2020-04-17 10:33:41'),
(39, 'PST 22205', 'Physical Chemistry', '2020-04-17 10:33:55', '2020-04-17 10:33:55'),
(40, 'PST 22106', 'Inorganic Chemistry Laboratory', '2020-04-17 10:34:10', '2020-04-17 10:34:10'),
(41, 'PST 22207', 'Biochemistry I', '2020-04-17 10:34:25', '2020-04-17 10:34:25'),
(42, 'PST 22208', 'Software Engineering', '2020-04-17 10:34:41', '2020-04-17 10:34:41'),
(43, 'PST 22209', 'Advanced Statistics II', '2020-04-17 10:34:56', '2020-04-17 10:34:56'),
(44, 'PST 22110', 'Computer Laboratory 2-II', '2020-04-17 10:35:10', '2020-04-17 10:35:10'),
(45, 'PST 22211', 'Operating Systems', '2020-04-17 10:35:26', '2020-04-17 10:35:26'),
(46, 'PST 22112', 'Leadership and Communication', '2020-04-17 10:35:44', '2020-04-17 10:35:44'),
(47, 'PST 22213', 'Biology for Physical Sciences', '2020-04-17 10:36:03', '2020-04-17 10:36:03'),
(48, 'PST 22114', 'Soft Skill Development', '2020-04-17 10:36:31', '2020-04-17 10:36:31'),
(49, 'PST 22215', 'Mathematical Methods', '2020-04-17 10:36:44', '2020-04-17 10:36:44'),
(50, 'CPE 2201', 'Professional English IV', '2020-04-17 10:36:57', '2020-04-17 10:36:57');

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
-- Indexes for table `contact_msgs`
--
ALTER TABLE `contact_msgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papers`
--
ALTER TABLE `papers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `contact_msgs`
--
ALTER TABLE `contact_msgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `papers`
--
ALTER TABLE `papers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
