-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2022 at 02:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rental_system_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindetail`
--

CREATE TABLE `admindetail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `likedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admindetail`
--

INSERT INTO `admindetail` (`id`, `name`, `email`, `address`, `facebook`, `instagram`, `likedin`, `youtube`, `created_at`, `updated_at`) VALUES
(1, 'qedwsrdw', 'qewqew', 'qwsqew', 'qeqwe', 'qewr', 'wewrwe', 'qqewr', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(1, 'apptest', 'apptest2303@gmail.com', '$2y$10$bE7NF9iv46wdk2Gp2Kr75.dLrKlpTYRBqkzZKepzfggq40GYBzojK', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_mobile`
--

CREATE TABLE `admin_mobile` (
  `id` int(11) NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `image`, `title`, `created_at`, `updated_at`) VALUES
(4, '1647069105_banner-1.jpg', 'Dresses For Rent', NULL, NULL),
(5, '1647069184_banner-2.jpg', 'Great Construction', NULL, NULL),
(6, '1647069247_banner-3.jpg', 'Vehicle For Rent', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `image`, `icon_image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(13, '1646908949_category-01.jpg', '1646908949_menu-img1.png', 'Cloths', 'Lorem Ipsum is simply a dummy text of the printing and typesetting industry.', NULL, NULL),
(14, '1646908963_category-02.jpg', '1646908963_menu-img2.png', 'Electronics', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL),
(15, '1646908983_category-03.jpg', '1646908983_menu-img3.png', 'Events', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL),
(16, '1646909035_category-04.jpg', '1646909035_menu-img4.png', 'Appliances', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL),
(17, '1646909758_menu-img5.png', '1646909758_category-05.jpg', 'Vehicle', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL),
(18, '1646909825_category-06.jpg', '1646909825_menu-img6.png', 'Construction', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `phone` int(5) NOT NULL,
  `code` char(2) NOT NULL,
  `name` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `phone`, `code`, `name`) VALUES
(1, 93, 'AF', 'Afghanistan'),
(2, 213, 'DZ', 'Algeria'),
(3, 672, 'AQ', 'Antarctica'),
(4, 1268, 'AG', 'Antigua and Barbuda'),
(5, 54, 'AR', 'Argentina'),
(6, 374, 'AM', 'Armenia'),
(7, 297, 'AW', 'Aruba'),
(8, 61, 'AU', 'Australia'),
(9, 43, 'AT', 'Austria'),
(10, 1242, 'BS', 'Bahamas'),
(11, 973, 'BH', 'Bahrain'),
(12, 880, 'BD', 'Bangladesh'),
(13, 1246, 'BB', 'Barbados'),
(14, 32, 'BE', 'Belgium'),
(15, 229, 'BJ', 'Benin'),
(16, 1441, 'BM', 'Bermuda'),
(17, 975, 'BT', 'Bhutan'),
(18, 591, 'BO', 'Bolivia'),
(19, 55, 'BR', 'Brazil'),
(20, 855, 'KH', 'Cambodia'),
(21, 1, 'CA', 'Canada'),
(22, 56, 'CL', 'Chile'),
(23, 86, 'CN', 'China'),
(24, 53, 'CU', 'Cuba'),
(25, 45, 'DK', 'Denmark'),
(26, 20, 'EG', 'Egypt'),
(27, 251, 'ET', 'Ethiopia'),
(28, 679, 'FJ', 'Fiji'),
(29, 358, 'FI', 'Finland'),
(30, 33, 'FR', 'France'),
(31, 995, 'GE', 'Georgia'),
(32, 49, 'DE', 'Germany'),
(33, 30, 'GR', 'Greece'),
(34, 299, 'GL', 'Greenland'),
(35, 852, 'HK', 'Hong Kong'),
(36, 36, 'HU', 'Hungary'),
(37, 354, 'IS', 'Iceland'),
(38, 91, 'IN', 'India'),
(39, 62, 'ID', 'Indonesia'),
(40, 98, 'IR', 'Iran, Islamic Republic of'),
(41, 964, 'IQ', 'Iraq'),
(42, 353, 'IE', 'Ireland'),
(43, 972, 'IL', 'Israel'),
(44, 39, 'IT', 'Italy'),
(45, 1876, 'JM', 'Jamaica'),
(46, 81, 'JP', 'Japan'),
(47, 44, 'JE', 'Jersey'),
(48, 962, 'JO', 'Jordan'),
(49, 254, 'KE', 'Kenya'),
(50, 850, 'KP', 'Korea, Democratic People\'s Republic of'),
(51, 381, 'XK', 'Kosovo'),
(52, 965, 'KW', 'Kuwait'),
(53, 60, 'MY', 'Malaysia'),
(54, 960, 'MV', 'Maldives'),
(55, 223, 'ML', 'Mali'),
(56, 52, 'MX', 'Mexico'),
(57, 976, 'MN', 'Mongolia'),
(58, 212, 'MA', 'Morocco'),
(59, 977, 'NP', 'Nepal'),
(60, 31, 'NL', 'Netherlands'),
(61, 64, 'NZ', 'New Zealand'),
(62, 227, 'NE', 'Niger'),
(63, 234, 'NG', 'Nigeria'),
(64, 47, 'NO', 'Norway'),
(65, 968, 'OM', 'Oman'),
(66, 92, 'PK', 'Pakistan'),
(67, 507, 'PA', 'Panama'),
(68, 63, 'PH', 'Philippines'),
(69, 48, 'PL', 'Poland'),
(70, 351, 'PT', 'Portugal'),
(71, 974, 'QA', 'Qatar'),
(72, 40, 'RO', 'Romania'),
(73, 70, 'RU', 'Russian Federation'),
(74, 290, 'SH', 'Saint Helena'),
(75, 966, 'SA', 'Saudi Arabia'),
(76, 381, 'RS', 'Serbia'),
(77, 65, 'SG', 'Singapore'),
(78, 27, 'ZA', 'South Africa'),
(79, 34, 'ES', 'Spain'),
(80, 94, 'LK', 'Sri Lanka'),
(81, 249, 'SD', 'Sudan'),
(82, 41, 'CH', 'Switzerland'),
(83, 971, 'AE', 'United Arab Emirates'),
(84, 44, 'GB', 'United Kingdom'),
(85, 1, 'US', 'United States'),
(86, 84, 'VN', 'Viet Nam'),
(87, 263, 'ZW', 'Zimbabwe');

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
(5, '2022_02_19_055633_create_vendors_table', 2),
(6, '2022_03_08_122823_create_category_table', 3),
(7, '2022_03_10_122247_create_subcategory_table', 4),
(8, '2022_03_11_101357_create_banner_table', 5),
(9, '2022_03_11_101512_create_more_maintitle_table', 5),
(10, '2022_03_12_110622_create_admindetail_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `more_maintitle`
--

CREATE TABLE `more_maintitle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `more_maintitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `more_maintitle`
--

INSERT INTO `more_maintitle` (`id`, `more_maintitle`, `banner_id`, `created_at`, `updated_at`) VALUES
(13, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 4, NULL, NULL),
(14, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 5, NULL, NULL),
(15, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s', 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
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
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `category`, `name`, `created_at`, `updated_at`) VALUES
(5, '13', 'Men', NULL, NULL),
(6, '13', 'women', NULL, NULL),
(7, '15', 'Kids', NULL, NULL),
(8, '15', 'Marriage events', NULL, NULL),
(9, '15', 'Birthday events', NULL, NULL),
(10, '16', 'Air Conditioners', NULL, NULL),
(11, '15', 'Air Coolers', NULL, NULL),
(12, '16', 'Microwaves & Induction', NULL, NULL),
(13, '17', 'Tempo', NULL, NULL),
(14, '17', 'Car', NULL, NULL),
(15, '17', 'Bicycle', NULL, NULL);

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
  `terms_condition` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `terms_condition`, `remember_token`, `created_at`, `updated_at`, `country_code`, `phone_no`) VALUES
(7, 'jinal', 'jinal.digitalinovation2021@gmail.com', NULL, '$2y$10$SeFHpKNIUNhYcr9FgeR5QO2l5D8vlxQIe6T62nOofkPnYZ9BlBpBO', 1, NULL, NULL, NULL, '+91', '7698877904'),
(8, 'jinalpatel', 'apptest2303@gmail.com', NULL, '$2y$10$aMf/1XLca5E.HBzSAC8XM.uOSdlqIjjaZx1VRomIG37f2az1hvQtS', 1, NULL, NULL, NULL, '+91', '9725668763'),
(9, 'jinal', 'jinalptel23697@gmail.com', NULL, '$2y$10$8rZBWv.lDNEablFT.ypFQ..ghpxKqra6K2L7RujgwkZIJ8ms6a4u6', 1, NULL, NULL, NULL, '+91', '1234567890'),
(10, 'dsfds', 'admin@demo.com', NULL, '$2y$10$Zk.tr.Vu89ovPdvgmV3o.eWPeXCFtqsOZg9r4SYU.qKj6HULrsDne', 1, NULL, NULL, NULL, '+91', '1334567890');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_condition` int(11) DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vendor_product`
--

CREATE TABLE `vendor_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `vendor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vendor_product`
--

INSERT INTO `vendor_product` (`id`, `name`, `vendor_id`) VALUES
(47, 'dfdg', 25),
(48, 'wefre', 25),
(49, 'sf', 26),
(50, 'ew', 26),
(51, 'wer', 26),
(52, 'sdfsd', 27),
(53, 'qwe', 27),
(54, 'SDDS', 28),
(55, 'WEW', 28),
(56, 'WERW', 28),
(57, 'sde', 29),
(58, 'weqw', 29),
(59, 'qeq', 29),
(60, 'fgvdf', 30),
(61, 'efr', 30),
(62, 'sdgfd', 31),
(63, 'egr', 31),
(64, 'wefw', 31);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admindetail`
--
ALTER TABLE `admindetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_mobile`
--
ALTER TABLE `admin_mobile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
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
-- Indexes for table `more_maintitle`
--
ALTER TABLE `more_maintitle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendor_product`
--
ALTER TABLE `vendor_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admindetail`
--
ALTER TABLE `admindetail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_mobile`
--
ALTER TABLE `admin_mobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `more_maintitle`
--
ALTER TABLE `more_maintitle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `vendor_product`
--
ALTER TABLE `vendor_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
