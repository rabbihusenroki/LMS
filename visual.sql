-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 10:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visual`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'OnlineKit', 'OnlineKit is a online free learning environment for those who really want to learn something new and skill up their knowledge', 'images/about/1735424451596041.png', '2022-06-12 03:53:34', '2022-06-12 04:32:03');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `about_banner`, `created_at`, `updated_at`) VALUES
(1, 'images/banner/1735473374780550.jpg', '2022-06-12 17:26:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `title`, `image`, `blog_description`, `created_at`, `updated_at`) VALUES
(1, '1', 'I MUST EXPLAIN TO YOU HOW TO START WEB DEVLOPMENT', 'images/blog/1735276252810622.jpg', 'I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam,\r\n eaque sa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volutatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, \r\n\r\ntotam rem aperiam, eaque sa quae ab illo inventore veritatis et \r\nquasi architecto beatae vitae dicta sunt explicabo emo enim ipsam', '2022-06-10 13:13:14', NULL),
(2, '1', 'I MUST EXPLAIN TO YOU HOW TO START APP DEVLOPMENT', 'images/blog/1735281098140125.jpg', 'I must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque sa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam volutatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque la udantium, totam rem aperiam\r\n\r\nI must explain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque sa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo emo enim ipsam', '2022-06-10 14:30:15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chooses`
--

CREATE TABLE `chooses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chooses`
--

INSERT INTO `chooses` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'WHY YOU CHOOSE The Visual ?', 'We must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings the master-builder of humanity happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because. I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings the master-builder.', 'images/choose/1734159964328320.jpg', '2022-05-29 05:30:18', '2022-05-29 06:14:46');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `address`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Sahi Eidgha Point, Sylhet', 'wp.dev.tahsin786@gmail.com', '01893904686', '2022-06-12 07:13:49', '2022-06-12 07:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `contact_forms`
--

CREATE TABLE `contact_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_forms`
--

INSERT INTO `contact_forms` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(3, 'OnlineKit', 'wp.dev.tahsin6@gmail.com', '01893904686', 'Course Enroll Fee is discountable', 'AI course korle koto tuk shikte parbo and income kora ki possible', '2022-06-12 08:43:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `course_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apply_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `certificate_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `title`, `image`, `course_description`, `about_description`, `apply_description`, `certificate_description`, `created_at`, `updated_at`) VALUES
(1, 'Become Master in Web Development', 'images/course/1734174544452685.jpg', 'ফটাফট কয়েকটা ভিডিও দেখে HTML, CSS শিখে ফটাফট চমৎকার দুইটা ওয়েবসাইট বানিয়ে ফেলবে। এবং সেগুলার লিংক যেকারো সাথে শেয়ার করে ভাব পেটাতে পারবে।\r\nটস্ট্রাপ (bootstrap) নামক পপুলার ফ্রেমওয়ার্ক এর খুঁটিনাটি ভাজা ভাজা করে ফেলবে। তারপর সেটা দিয়েও দুইটা ই-কমার্স ওয়েবসাইট বানিয়ে ফেলবে। কি মজা !\r\nজাভাস্ক্রিপ্টের ছয়টা মেইন জিনিস, জাভাস্ক্রিপ্ট দিয়ে প্রবলেম সলভিং, ইন্টারভিউ এর প্রশ্ন-উত্তর। এমনকি ES6 দিয়ে তোমার নলেজকে যোগোপযোগী করে তুলবে\r\nতবে যারা একটু ফাঁকিবাজ তাদের জন্য দুঃসংবাদ হচ্ছে। প্রত্যেক ভিডিও এর পরে প্রশ্ন থাকছে। প্রত্যেক মডিউল শেষে ফাইনাল কুইজ আছে। আর প্রত্যেকটা প্রজেক্টের পর একটা করে টেক-এওয়ে হোমওয়ার্ক আছে।\r\n\r\nএই কোর্স ফলো করে কেউ যদি ওয়েব ডেভেলপার না হতে পারে, দুনিয়ার আর কেউ তাকে ওয়েব ডেভেলপার বানাতে পারবে না।', 'Learn Effectively that will take you towards your goal. Build 12 professional projects while learning.\r\nWe will ensure our graduates are world-class web developer.\r\nStart your dream today. Conquer the world.', 'পরবর্তী ব্যাচের সময় সূচি\r\nএনরোলমেন্ট শুরু: জুন ১০, ২০২২ (শুক্রবার)\r\nএনরোলমেন্ট শেষ: জুন ২৪, ২০২২ (শুক্রবার)\r\nব্যাচের ওরিয়েন্টশন: জুন ২৮, ২০২২ (মঙ্গলবার)\r\nক্লাস শুরু: জুন ৩০, ২০২২ (বৃহস্পতিবার)', 'এনরোল করার ১৫ সপ্তাহের মধ্যে পুরা কোর্স সিরিয়াসলি কমপ্লিট কারীদের নিয়ে আমরা তৈরি করবো Super Charged Interviewee Club (SCIC) সিক্রেট ক্লাব। যাদের স্পেশাল ইন্টারভিউ ট্রেনিং দিয়ে রেজুমি পাঠিয়ে দিবো বিভিন্ন কোম্পানিতে ইন্টার্ন বা ডেভেলপার হিসেবে চাকরি পাওয়ার জন্য।', '2022-05-29 09:22:03', NULL),
(2, 'React Development', 'images/course/1735288996188847.jpg', 'lain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus er', 'lain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus er', 'lain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus er', 'lain to you how all this a mistaken idea of denouncing great explorer of the rut the is lder of human haness pcias unde omnis iste natus er', '2022-06-10 16:35:47', NULL),
(3, 'Photography Advanced Course', 'images/course/1735343155404337.jpg', 'ফটাফট কয়েকটা ভিডিও দেখে HTML, CSS শিখে ফটাফট চমৎকার দুইটা ওয়েবসাইট বানিয়ে ফেলবে। এবং সেগুলার লিংক যে..', NULL, NULL, NULL, '2022-06-11 06:46:00', '2022-06-11 06:58:11'),
(4, 'DevOps Engineer Expert', 'images/course/1735367972945372.jpg', 'ফটাফট কয়েকটা ভিডিও দেখে HTML, CSS শিখে ফটাফট চমৎকার দুইটা ওয়েবসাইট বানিয়ে ফেলবে। এবং সেগুলার লিংক যে ওয়েবসাইট বানিয়ে ফেলবে। এবং সেগুলার লিংক যে ওয়েবসাইট বানিয়ে ফেলবে। এবং সেগুলার লিংক যে', NULL, NULL, NULL, '2022-06-11 06:59:14', '2022-06-11 13:32:11');

-- --------------------------------------------------------

--
-- Table structure for table `course_banners`
--

CREATE TABLE `course_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_banner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_banners`
--

INSERT INTO `course_banners` (`id`, `course_banner`, `created_at`, `updated_at`) VALUES
(3, 'images/banner/course/1738677778562713.jpeg', '2022-07-18 02:18:26', '2022-07-18 02:19:01');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'PROFESSIONAL TEACHER', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.', '2022-05-26 05:05:55', NULL),
(2, 'ONLINE COURSES', 'I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings.', '2022-05-26 05:12:40', NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_05_19_070541_create_sessions_table', 1),
(8, '2022_05_22_202310_create_slides_table', 2),
(13, '2022_05_25_220421_create_notices_table', 4),
(14, '2022_05_25_165721_create_features_table', 5),
(15, '2022_05_29_105948_create_chooses_table', 6),
(16, '2022_05_29_140437_create_courses_table', 7),
(18, '2022_05_30_062722_create_testimonials_table', 8),
(20, '2022_06_10_180620_create_blogs_table', 9),
(21, '2022_06_11_195304_create_teachers_table', 10),
(22, '2022_06_12_084924_create_abouts_table', 11),
(23, '2022_06_12_115324_create_contacts_table', 12),
(24, '2022_06_12_135129_create_contact_forms_table', 13),
(27, '2022_06_12_230241_create_banners_table', 14),
(28, '2022_06_12_232754_create_course_banners_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_date` date NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notices`
--

INSERT INTO `notices` (`id`, `event_date`, `description`, `created_at`, `updated_at`) VALUES
(2, '2022-05-31', 'We arrange a meetup for begineers in web', '2022-05-25 16:22:22', '2022-05-27 08:02:41');

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
('Bl6VQhn0Q2hJyRagzNMngFq3kArti93bFRGrBoqo', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/102.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMFN6Y3JjRlEybHlxeUxBZTdjZkZ4eUhjMHo1WlFBaWV2eUVDdTZtYiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hbGwvYmFubmVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRBanh3VmFCS2J4Zjk4VkJRbXY3ZC91bEhYLlp0MDhBYzRNR201QXFaU21FSkpjMFdyZkFFRyI7fQ==', 1655077430),
('md8esmEL8hh8nvsfzmc0Nha56NRWfAMYivXOMM8U', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/103.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiN0h5YW1Tb05TdjdBbmoyMFZLQkEzbzFEaTNDTGIxMGZZRmhvWEJ3VCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQWp4d1ZhQktieGY5OFZCUW12N2QvdWxIWC5adDA4QWM0TUdtNUFxWlNtRUpKYzBXcmZBRUciO30=', 1658134211);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Android Development', 'Android Development Begineers Course', 'images/slider/1733685706735418.jpg', '2022-05-23 23:52:11', NULL),
(4, 'Web Development', 'Web Development Advanced Course', 'images/slider/1733788314616041.jpg', '2022-05-23 23:53:12', '2022-05-25 03:03:50'),
(5, 'Javascript Advanced Course', 'Javascript Advanced Course for begineers', 'images/slider/1733787706306191.png', '2022-05-25 02:53:25', NULL),
(6, 'Mobile Photography', 'Mobile Photography course for Begineers', 'images/slider/1733813641704187.jpg', '2022-05-25 09:45:39', NULL),
(7, 'Artificial Intelligence Advanced Course', 'Learn A-Z Artificial Intelligence Advanced Course', 'images/slider/1733883272496880.png', '2022-05-26 04:12:24', NULL),
(8, 'Web Development by Jiku', 'Web Development by Jiku Advanced Learning in Javascript', 'images/slider/1733988280586850.png', '2022-05-27 08:01:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `degree` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `faculty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `call` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `position`, `description`, `degree`, `experience`, `hobbies`, `faculty`, `mail`, `call`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Rabbi Husen Roki', 'CEO of The Visual', 'I am a Laravel Developer with 7 years of work experience', 'BSc in CSE', '7 years experience', 'music, travelling, catching fish, programming', 'Din, Department of Web Technology', 'wp.dev.tahsin786@gmail.com', '+8801893904686', 'images/teacher/1735376159367293.jpg', '2022-06-11 15:41:12', NULL),
(3, 'Shawpna Akther', 'CEO of House', 'I am English Expecialist', 'BSc in English in UK', '27 years experience', 'ludu,guwa khawa', 'Din, Department of English Technology', 'swapnaakther6@gmail.com', '+8801893904686', 'images/teacher/1735415161120511.jpg', '2022-06-12 01:43:08', '2022-06-12 02:01:07');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `study_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `study_at`, `title`, `description`, `image`, `bg_image`, `created_at`, `updated_at`) VALUES
(2, 'David Warner', 'CSE', NULL, 'This online tutorial platform was best for online learning', 'images/testimonial/1735270527512374.jpg', 'images/testimonial/1735270527523172.jpg', '2022-06-10 11:42:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Rabbi Husen Roki', 'wp.dev.tahsin786@gmail.com', '2022-05-22 14:12:06', '$2y$10$AjxwVaBKbxf98VBQmv7d/ulHX.Zt08Ac4MGm5AqZSmEJJc0WrfAEG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-22 14:11:22', '2022-05-22 14:12:06'),
(2, 'Adnan', 'adnan@gmail.com', NULL, '$2y$10$/YZ0RTk3twvEceloGyP4n.Gn1ZfyoiezAVugDwUXC7VYxMVSsIlAG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 02:38:19', '2022-05-25 02:38:19'),
(3, 'Adnan', 'adnan12@gmail.com', NULL, '$2y$10$y8yvvkYVK2bOxpQ78A5DauS7oOeeVAFnjCV9BtMo3TdgqeYcFWAh.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 02:40:23', '2022-05-25 02:40:23'),
(4, 'Adnan Chy', 'adnan1@gmail.com', '2022-05-25 02:50:57', '$2y$10$398pOD1oPsTwikApxDKLTurlkg0v6WkVuw0jOEHK.HdCjwnl9qQ3.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 02:48:28', '2022-05-25 02:50:57'),
(5, 'Abid', 'abid@gmail.com', NULL, '$2y$10$OVrz2hjeBuHNrQarT70ENu83x86WeL9RC2dvvfUkm3xYGrG9dg0nG', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-25 09:38:02', '2022-05-25 09:38:02'),
(6, 'Jiku', 'jiku1@gmail.com', NULL, '$2y$10$GFEbevTYgHWrQY9u1dzjM.1wYP2v3jF0feNDdCEljmTuCrlzgNIyq', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 07:47:29', '2022-05-27 07:47:29'),
(7, 'Jiku', 'jiku12@gmail.com', '2022-05-27 07:58:25', '$2y$10$Ute.wLTG3ZPRyGk9yeOBkeIJnsr7Lxy6QgDA19qOXDIHIC9DgCqX2', NULL, NULL, NULL, NULL, NULL, NULL, '2022-05-27 07:49:16', '2022-05-27 07:58:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chooses`
--
ALTER TABLE `chooses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_forms`
--
ALTER TABLE `contact_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_banners`
--
ALTER TABLE `course_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chooses`
--
ALTER TABLE `chooses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_forms`
--
ALTER TABLE `contact_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_banners`
--
ALTER TABLE `course_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
