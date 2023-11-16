-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2023 at 11:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` varchar(255) NOT NULL,
  `blog_name` varchar(255) NOT NULL,
  `blog_main_image` varchar(255) NOT NULL,
  `blog_content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cate_id`, `blog_name`, `blog_main_image`, `blog_content`, `created_at`, `updated_at`) VALUES
(27, '16', 'What is PHP?', 'php.png', 'PHP (recursive acronym for PHP: Hypertext Preprocessor) is a widely-used open source general-purpose scripting language that is especially suited for web development and can be embedded into HTML. Instead of lots of commands to output HTML (as seen in C or Perl), PHP pages contain HTML with embedded code that does \"something\" (in this case, output \"Hi, I\'m a PHP script!\"). The PHP code is enclosed in special start and end processing instructions <?php and ?> that allow you to jump into and out of \"PHP mode.\" What distinguishes PHP from something like client-side JavaScript is that the code is executed on the server, generating HTML which is then sent to the client. The client would receive the results of running that script, but would not know what the underlying code was. You can even configure your web server to process all your HTML files with PHP, and then there\'s really no way that users can tell what you have up your sleeve. The best part about using PHP is that it is extremely simple for a newcomer, but offers many advanced features for a professional programmer.', '2023-05-21 20:30:49', '2023-05-21 21:04:01'),
(28, '16', 'What Is JavaScript Used For?', 'javascript.png', 'The initial versions of the scripting language were for internal use only. After Netscape submitted it to ECMA International as a standard specification for web browsers, JavaScript pioneered the release of ECMAScript. It was a general-purpose scripting language to ensure web pages’ interoperability across different browsers and devices. JavaScript has continued to grow alongside new browsers like Mozilla Firefox and Google Chrome since then. The latter even started developing the first modern JavaScript engine, called V8, which compiles bytecode into native machine code. Today, JavaScript has plenty of frameworks and libraries to simplify complex projects, such as AngularJS, jQuery, and ReactJS. Originally run on the client-side, the JavaScript implementation has branched out to the server-side after the Node.js development ‒ a cross-platform server environment built on the Google Chrome JavaScript V8 engine. While it caters to web-based programs the most, JavaScript programming features have other implementations in different areas. The following are several basic uses of JavaScript.', '2023-05-21 20:32:02', '2023-05-21 20:39:51'),
(29, '16', 'About Node.js', 'nodejs.png', 'As an asynchronous event-driven JavaScript runtime, Node.js is designed to build scalable network applications. In the following \"hello world\" example, many connections can be handled concurrently. Upon each connection, the callback is fired, but if there is no work to be done, Node.js will sleep. This is in contrast to today\'s more common concurrency model, in which OS threads are employed. Thread-based networking is relatively inefficient and very difficult to use. Furthermore, users of Node.js are free from worries of dead-locking the process, since there are no locks. Almost no function in Node.js directly performs I/O, so the process never blocks except when the I/O is performed using synchronous methods of Node.js standard library. Because nothing blocks, scalable systems are very reasonable to develop in Node.js.', '2023-05-21 20:33:33', '2023-05-21 21:03:36'),
(30, '17', 'What is React Native?', 'react-native.png', 'This was an example of displaying “What is React Native”. This line of text acts as a component. Anything you see on the screen is a type of component. It can be really straightforward. The main thing required is a render function, which returns some JSX to render. Each such component maps to native building blocks when we synthesize our React Native App to Android or iOS Apps. Like in this case  is mapped to  in Android and UILabel in iOS.', '2023-05-21 20:36:12', '2023-05-21 20:36:12'),
(31, '17', 'What is Flutter?', 'flutter.jpg', 'Flutter is an open source framework developed and supported by Google. Frontend and full-stack developers use Flutter to build an application’s user interface (UI) for multiple platforms with a single codebase. When Flutter launched in 2018, it mainly supported mobile app development. Flutter now supports application development on six platforms: iOS, Android, the web, Windows, MacOS, and Linux.', '2023-05-21 20:37:07', '2023-05-21 20:37:07'),
(32, '17', 'What is Laravel?', 'laravel.png', 'Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching. Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we\'ve attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra. Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.', '2023-05-21 20:38:06', '2023-05-21 20:38:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(16, 'Programming Language', 'Learn about programming Language', '2023-05-21 20:16:37', '2023-05-21 20:16:37'),
(17, 'Framework', 'A framework is a structure that you can build software on.', '2023-05-21 20:18:08', '2023-05-21 20:18:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(36, 'Đỗ Ngọc Quang', 'info.dongocquang@gmail.com', 'Contact first', 'Message first', '2023-05-21 21:32:27', '2023-05-21 21:32:27'),
(37, 'Đỗ Ngọc Quang', 'info.dongocquang@gmail.com', 'Contact second', 'Massage second', '2023-05-21 21:33:53', '2023-05-21 21:33:53'),
(38, 'Đỗ Ngọc Quang', 'info.dongocquang@gmail.com', 'Contact third', 'Message third', '2023-05-21 21:34:19', '2023-05-21 21:34:19'),
(39, 'Đỗ Ngọc Quang', 'babyboi@gmail.com', 'Good', 'Your blogs good', '2023-05-21 21:35:14', '2023-05-21 21:35:14'),
(40, 'Đỗ Ngọc Quang', 'babyboi2@gmail.com', 'BLogs', 'Blogs useful', '2023-05-21 21:35:42', '2023-05-21 21:35:42'),
(41, 'Do Ngoc Quang', 'info.dongocquang@gmail.com', 'Category', 'The category only have two, make more', '2023-05-21 21:36:41', '2023-05-21 21:36:41'),
(42, 'Do Ngoc Quang', 'babyboi@gmail.com', 'About you', 'You are beautiful', '2023-05-21 21:37:10', '2023-05-21 21:37:10'),
(43, 'Đỗ Ngọc Quang', 'info.dongocquang@gmail.com', 'Last', 'Last', '2023-05-21 21:37:29', '2023-05-21 21:37:29');

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
(5, '2023_05_15_072702_create_categories_table', 1),
(6, '2023_05_15_155001_create_blogs_table', 1),
(7, '2023_05_15_155121_create_onlines_table', 1),
(8, '2023_05_16_053707_create_contacts_table', 1),
(9, '2023_05_20_140618_add_column_to_table_users', 2),
(10, '2023_05_20_141105_add_column_address_to_table_users', 3),
(11, '2023_05_20_152040_add_column_to_table_contacts', 4),
(12, '2023_05_20_163734_visit', 5);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phonenumber` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `avatar`, `firstname`, `lastname`, `phonenumber`, `address`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'info.dongocquang@gmail.com', 'info.dongocquang', '$2y$10$zO9h7BvlE2OMiYXRj/i8qu46iCPOgmXB.VCgRFllUq0f7.bY4Apl2', 'cvImage.jpg', 'Do Ngoc', 'Quang', '0397396864', 'Thanh Thai Street, 14 Ward, 10 District, Ho Chi Minh City', NULL, NULL, '2023-05-21 18:11:59', '2023-05-22 00:34:50');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `created_at`, `updated_at`) VALUES
(1, '2023-05-20 09:41:47', '2023-05-20 09:41:47'),
(2, '2023-05-20 09:42:11', '2023-05-20 09:42:11'),
(3, '2023-05-20 09:42:26', '2023-05-20 09:42:26'),
(4, '2023-05-20 09:42:32', '2023-05-20 09:42:32'),
(5, '2023-05-20 10:22:51', '2023-05-20 10:22:51'),
(6, '2023-05-20 11:08:45', '2023-05-20 11:08:45'),
(7, '2023-05-20 11:11:11', '2023-05-20 11:11:11'),
(8, '2023-05-20 11:11:15', '2023-05-20 11:11:15'),
(9, '2023-05-20 11:12:57', '2023-05-20 11:12:57'),
(10, '2023-05-20 11:13:04', '2023-05-20 11:13:04'),
(11, '2023-05-20 11:16:33', '2023-05-20 11:16:33'),
(12, '2023-05-20 19:07:59', '2023-05-20 19:07:59'),
(13, '2023-05-20 19:08:04', '2023-05-20 19:08:04'),
(14, '2023-05-20 19:08:05', '2023-05-20 19:08:05'),
(15, '2023-05-20 19:08:07', '2023-05-20 19:08:07'),
(16, '2023-05-20 19:11:13', '2023-05-20 19:11:13'),
(17, '2023-05-20 19:12:02', '2023-05-20 19:12:02'),
(18, '2023-05-20 19:12:51', '2023-05-20 19:12:51'),
(19, '2023-05-20 19:12:54', '2023-05-20 19:12:54'),
(20, '2023-05-20 19:12:56', '2023-05-20 19:12:56'),
(21, '2023-05-20 19:13:33', '2023-05-20 19:13:33'),
(22, '2023-05-20 19:13:35', '2023-05-20 19:13:35'),
(23, '2023-05-20 19:13:38', '2023-05-20 19:13:38'),
(24, '2023-05-20 19:14:08', '2023-05-20 19:14:08'),
(25, '2023-05-20 19:15:05', '2023-05-20 19:15:05'),
(26, '2023-05-20 19:15:11', '2023-05-20 19:15:11'),
(27, '2023-05-20 19:15:16', '2023-05-20 19:15:16'),
(28, '2023-05-20 19:16:09', '2023-05-20 19:16:09'),
(29, '2023-05-20 19:16:13', '2023-05-20 19:16:13'),
(30, '2023-05-20 19:16:29', '2023-05-20 19:16:29'),
(31, '2023-05-20 19:16:36', '2023-05-20 19:16:36'),
(32, '2023-05-20 19:16:39', '2023-05-20 19:16:39'),
(33, '2023-05-20 19:17:51', '2023-05-20 19:17:51'),
(34, '2023-05-20 19:18:03', '2023-05-20 19:18:03'),
(35, '2023-05-20 19:18:06', '2023-05-20 19:18:06'),
(36, '2023-05-20 19:18:11', '2023-05-20 19:18:11'),
(37, '2023-05-20 19:18:13', '2023-05-20 19:18:13'),
(38, '2023-05-20 19:25:06', '2023-05-20 19:25:06'),
(39, '2023-05-20 19:25:32', '2023-05-20 19:25:32'),
(40, '2023-05-20 19:43:17', '2023-05-20 19:43:17'),
(41, '2023-05-20 19:57:38', '2023-05-20 19:57:38'),
(42, '2023-05-20 19:58:48', '2023-05-20 19:58:48'),
(43, '2023-05-20 21:42:31', '2023-05-20 21:42:31'),
(44, '2023-05-20 21:42:35', '2023-05-20 21:42:35'),
(45, '2023-05-20 21:42:39', '2023-05-20 21:42:39'),
(46, '2023-05-20 21:43:06', '2023-05-20 21:43:06'),
(47, '2023-05-20 21:43:16', '2023-05-20 21:43:16'),
(48, '2023-05-20 21:43:16', '2023-05-20 21:43:16'),
(49, '2023-05-20 21:43:22', '2023-05-20 21:43:22'),
(50, '2023-05-20 21:44:51', '2023-05-20 21:44:51'),
(51, '2023-05-20 21:56:04', '2023-05-20 21:56:04'),
(52, '2023-05-20 21:56:22', '2023-05-20 21:56:22'),
(53, '2023-05-20 21:59:12', '2023-05-20 21:59:12'),
(54, '2023-05-20 21:59:18', '2023-05-20 21:59:18'),
(55, '2023-05-20 22:02:02', '2023-05-20 22:02:02'),
(56, '2023-05-20 22:05:36', '2023-05-20 22:05:36'),
(57, '2023-05-20 22:05:37', '2023-05-20 22:05:37'),
(58, '2023-05-20 22:06:33', '2023-05-20 22:06:33'),
(59, '2023-05-20 22:34:38', '2023-05-20 22:34:38'),
(60, '2023-05-20 22:50:22', '2023-05-20 22:50:22'),
(61, '2023-05-20 22:53:16', '2023-05-20 22:53:16'),
(62, '2023-05-20 23:00:08', '2023-05-20 23:00:08'),
(63, '2023-05-20 23:00:34', '2023-05-20 23:00:34'),
(64, '2023-05-20 23:04:29', '2023-05-20 23:04:29'),
(65, '2023-05-20 23:04:49', '2023-05-20 23:04:49'),
(66, '2023-05-20 23:05:10', '2023-05-20 23:05:10'),
(67, '2023-05-20 23:05:32', '2023-05-20 23:05:32'),
(68, '2023-05-20 23:05:51', '2023-05-20 23:05:51'),
(69, '2023-05-20 23:05:55', '2023-05-20 23:05:55'),
(70, '2023-05-20 23:05:58', '2023-05-20 23:05:58'),
(71, '2023-05-20 23:06:02', '2023-05-20 23:06:02'),
(72, '2023-05-20 23:27:42', '2023-05-20 23:27:42'),
(73, '2023-05-20 23:35:15', '2023-05-20 23:35:15'),
(74, '2023-05-20 23:35:21', '2023-05-20 23:35:21'),
(75, '2023-05-20 23:35:24', '2023-05-20 23:35:24'),
(76, '2023-05-20 23:35:28', '2023-05-20 23:35:28'),
(77, '2023-05-20 23:38:18', '2023-05-20 23:38:18'),
(78, '2023-05-20 23:44:03', '2023-05-20 23:44:03'),
(79, '2023-05-20 23:44:17', '2023-05-20 23:44:17'),
(80, '2023-05-20 23:44:24', '2023-05-20 23:44:24'),
(81, '2023-05-20 23:44:28', '2023-05-20 23:44:28'),
(82, '2023-05-21 00:06:47', '2023-05-21 00:06:47'),
(83, '2023-05-21 00:16:08', '2023-05-21 00:16:08'),
(84, '2023-05-21 00:50:53', '2023-05-21 00:50:53'),
(85, '2023-05-21 00:51:54', '2023-05-21 00:51:54'),
(86, '2023-05-21 00:58:32', '2023-05-21 00:58:32'),
(87, '2023-05-21 00:59:50', '2023-05-21 00:59:50'),
(88, '2023-05-21 01:00:14', '2023-05-21 01:00:14'),
(89, '2023-05-21 01:00:26', '2023-05-21 01:00:26'),
(90, '2023-05-21 01:01:08', '2023-05-21 01:01:08'),
(91, '2023-05-21 01:03:36', '2023-05-21 01:03:36'),
(92, '2023-05-21 18:18:25', '2023-05-21 18:18:25'),
(93, '2023-05-21 18:18:54', '2023-05-21 18:18:54'),
(94, '2023-05-21 18:20:01', '2023-05-21 18:20:01'),
(95, '2023-05-21 18:20:03', '2023-05-21 18:20:03'),
(96, '2023-05-21 18:20:09', '2023-05-21 18:20:09'),
(97, '2023-05-21 18:20:12', '2023-05-21 18:20:12'),
(98, '2023-05-21 18:20:14', '2023-05-21 18:20:14'),
(99, '2023-05-21 18:20:19', '2023-05-21 18:20:19'),
(100, '2023-05-21 18:20:40', '2023-05-21 18:20:40'),
(101, '2023-05-21 18:20:42', '2023-05-21 18:20:42'),
(102, '2023-05-21 18:20:43', '2023-05-21 18:20:43'),
(103, '2023-05-21 18:20:44', '2023-05-21 18:20:44'),
(104, '2023-05-21 18:20:52', '2023-05-21 18:20:52'),
(105, '2023-05-21 18:22:22', '2023-05-21 18:22:22'),
(106, '2023-05-21 18:22:23', '2023-05-21 18:22:23'),
(107, '2023-05-21 18:22:26', '2023-05-21 18:22:26'),
(108, '2023-05-21 18:22:35', '2023-05-21 18:22:35'),
(109, '2023-05-21 18:23:08', '2023-05-21 18:23:08'),
(110, '2023-05-21 18:23:19', '2023-05-21 18:23:19'),
(111, '2023-05-21 18:23:37', '2023-05-21 18:23:37'),
(112, '2023-05-21 18:51:11', '2023-05-21 18:51:11'),
(113, '2023-05-21 18:59:32', '2023-05-21 18:59:32'),
(114, '2023-05-21 19:58:40', '2023-05-21 19:58:40'),
(115, '2023-05-21 19:59:26', '2023-05-21 19:59:26'),
(116, '2023-05-21 20:33:39', '2023-05-21 20:33:39'),
(117, '2023-05-21 20:38:28', '2023-05-21 20:38:28'),
(118, '2023-05-21 20:38:39', '2023-05-21 20:38:39'),
(119, '2023-05-21 20:38:43', '2023-05-21 20:38:43'),
(120, '2023-05-21 20:40:20', '2023-05-21 20:40:20'),
(121, '2023-05-21 20:43:04', '2023-05-21 20:43:04'),
(122, '2023-05-21 20:43:20', '2023-05-21 20:43:20'),
(123, '2023-05-21 20:43:23', '2023-05-21 20:43:23'),
(124, '2023-05-21 21:04:14', '2023-05-21 21:04:14'),
(125, '2023-05-21 21:05:11', '2023-05-21 21:05:11'),
(126, '2023-05-21 21:06:17', '2023-05-21 21:06:17'),
(127, '2023-05-21 21:06:26', '2023-05-21 21:06:26'),
(128, '2023-05-21 21:06:27', '2023-05-21 21:06:27'),
(129, '2023-05-21 21:06:29', '2023-05-21 21:06:29'),
(130, '2023-05-21 21:06:39', '2023-05-21 21:06:39'),
(131, '2023-05-21 21:06:41', '2023-05-21 21:06:41'),
(132, '2023-05-21 21:06:48', '2023-05-21 21:06:48'),
(133, '2023-05-21 21:06:58', '2023-05-21 21:06:58'),
(134, '2023-05-21 21:07:17', '2023-05-21 21:07:17'),
(135, '2023-05-21 21:07:20', '2023-05-21 21:07:20'),
(136, '2023-05-21 21:07:22', '2023-05-21 21:07:22'),
(137, '2023-05-21 21:08:19', '2023-05-21 21:08:19'),
(138, '2023-05-21 21:08:21', '2023-05-21 21:08:21'),
(139, '2023-05-21 21:08:33', '2023-05-21 21:08:33'),
(140, '2023-05-21 21:08:46', '2023-05-21 21:08:46'),
(141, '2023-05-21 21:08:49', '2023-05-21 21:08:49'),
(142, '2023-05-21 21:08:52', '2023-05-21 21:08:52'),
(143, '2023-05-21 21:10:23', '2023-05-21 21:10:23'),
(144, '2023-05-21 21:10:25', '2023-05-21 21:10:25'),
(145, '2023-05-21 21:11:03', '2023-05-21 21:11:03'),
(146, '2023-05-21 21:11:05', '2023-05-21 21:11:05'),
(147, '2023-05-21 21:11:12', '2023-05-21 21:11:12'),
(148, '2023-05-21 21:11:18', '2023-05-21 21:11:18'),
(149, '2023-05-21 21:13:23', '2023-05-21 21:13:23'),
(150, '2023-05-21 23:26:38', '2023-05-21 23:26:38'),
(151, '2023-05-21 23:30:17', '2023-05-21 23:30:17'),
(152, '2023-05-21 23:30:20', '2023-05-21 23:30:20'),
(153, '2023-05-22 01:26:44', '2023-05-22 01:26:44'),
(154, '2023-05-22 01:26:54', '2023-05-22 01:26:54'),
(155, '2023-05-22 01:27:14', '2023-05-22 01:27:14'),
(156, '2023-05-22 01:27:31', '2023-05-22 01:27:31'),
(157, '2023-05-22 02:36:00', '2023-05-22 02:36:00'),
(158, '2023-05-22 02:36:22', '2023-05-22 02:36:22'),
(159, '2023-05-22 02:36:27', '2023-05-22 02:36:27'),
(160, '2023-05-22 02:36:29', '2023-05-22 02:36:29'),
(161, '2023-05-22 02:36:41', '2023-05-22 02:36:41'),
(162, '2023-05-22 02:38:14', '2023-05-22 02:38:14'),
(163, '2023-05-22 02:40:35', '2023-05-22 02:40:35'),
(164, '2023-05-22 02:40:46', '2023-05-22 02:40:46'),
(165, '2023-05-22 02:47:48', '2023-05-22 02:47:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
