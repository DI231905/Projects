-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2021 at 06:53 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oratravel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admincontactdetail`
--

CREATE TABLE `admincontactdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincontactdetail`
--

INSERT INTO `admincontactdetail` (`id`, `name`, `address`, `mobileno`, `email`) VALUES
(3, 'Soby tour and Travels', 'Shop no 28, Dn shopping center opp, Gandhi library Valsad, Station Rd, Kapadia Chal, Valsad, Gujarat 396001.', '+918866482201\r\n02632247118', 'info@sobytourandtravels.com');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `token`, `created_at`, `updated_at`) VALUES
(2, 'sobytourandtravels', 'info@sobytourandtravels.com', '$2y$10$osVAVa3pZG72pIaiGl4qOuFI2jMexsD4KkrKwpP7paAtOtFtFE1Dm', '9230', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `brochures`
--

CREATE TABLE `brochures` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brochures`
--

INSERT INTO `brochures` (`id`, `name`, `image`) VALUES
(2, 'Goa tour', '1627025511_brochure1.jpg'),
(3, 'USA visa', '1627025620_brochure2.jpg'),
(4, 'DUBAI tour', '1627025655_brochure3.jpg'),
(5, 'DUBAI tour', '1627025692_brochure4.jpg'),
(6, 'DUBAI tour', '1627025718_brochure5.jpg'),
(7, 'DUBAI tour', '1627025792_brochure6.jpg'),
(8, 'RUSSIA visa', '1627025826_brochure8.jpg'),
(9, 'RUSSIA visa', '1627025854_brochure9.jpg'),
(10, 'RUSSIA visa', '1627028810_brochure7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `country_id`, `created_at`, `updated_at`) VALUES
(1, 'Mumbai', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Goa', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Ahmedabad', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Paris', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Cannes', 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'New york', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Los Angeles', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Las Vegas', 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Wellington', 4, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Toronto', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'sydney', 6, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'ladakh', 1, NULL, NULL),
(13, 'Bali', 9, NULL, NULL),
(14, 'Tamilnadu', 1, NULL, NULL),
(15, 'manali', 1, NULL, NULL),
(16, 'valsad', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `subject`, `description`) VALUES
(2, 'jinal patel', 'jinalpatel23697+4@gmail.com', 'For tour inquire', 'can you provide a tour on our time'),
(3, 'jp', 'jp@gmail.com', 'dsfcfdxv', 'dcvdsvsdzv');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'india', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'France', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'United States', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'New Zealand', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Canada', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Indonesia', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `packge_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `packge_id`) VALUES
(1, 'beach.jpg', 1),
(2, 'goa.jpg', 1),
(3, 'paris.jpeg', 3),
(4, 'mumbai.jpg', 2);

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
(1, '2021_06_14_091417_create_user_table', 1),
(2, '2021_06_14_091849_create_admins_table', 2),
(3, '2021_06_16_112628_create_countries_table', 3),
(4, '2021_06_16_113316_create_cities_table', 4),
(5, '2021_06_16_115144_create_package_detail_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `package_detail`
--

CREATE TABLE `package_detail` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tittle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tour_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `name`, `occupation`, `image`, `description`) VALUES
(4, 'Name', 'Occupation', '1624962819_client-1.png', 'content'),
(5, 'Name', 'Occupation', '1624962868_client-2.png', 'content'),
(6, 'Name', 'Occupation', '1624962892_client-3.png', 'content'),
(7, 'Name2', 'Occupation2', '1624965475_client-5.jpg', 'content2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sub` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`id`, `name`, `email`, `sub`, `description`) VALUES
(1, 'jinal patel', 'Jinalpatel23697@gmail.com', 'For tour inquire', 'can you provide more detailed information about manali tour');

-- --------------------------------------------------------

--
-- Table structure for table `visainquires`
--

CREATE TABLE `visainquires` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobileno` varchar(20) NOT NULL,
  `visatype` varchar(20) NOT NULL,
  `mes` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visainquires`
--

INSERT INTO `visainquires` (`id`, `name`, `email`, `mobileno`, `visatype`, `mes`) VALUES
(1, 'jinal patel', 'Jinalpatel23697@gmail.com', '7698877904', 'Student visa', 'how to get student visa.'),
(11, 'jinal patel', 'jp@gmail.com', '67456576878', 'Student visa', 'fgvdbcfvbcvhngv'),
(12, 'fgfhbf', 'jp@gmail.com', '1234567890', 'Student visa', 'sdfdgrdgft'),
(13, 'fggbfc', 'jp@gmail.com', '1234567890', 'Tourist Visa', 'cxcdxsvcad'),
(14, 'zXz', 'jp@gmail.com', '67456576878', 'Student visa', 'asfesfregtrgrf'),
(15, 'dfcdfv', 'jp@gmail.com', '1234567890', 'Tourist Visa', 'xszczcdxv'),
(16, 'cxz', 'sz@gmail.com', '67456576878', 'Student visa', 'adsxszcsd'),
(17, 'csdgv', 'jp@gmail.com', '1234567890', 'Employment visa', 'dfgdfgf'),
(18, 'sd', 'jp@gmail.com', '1234567890', 'Student visa', 'dgtrthrdhfb'),
(19, 'Kristiana', 'apptest2303@gmail.com', '1234567890', 'Student visa', 'ghcgcctgcfcgf'),
(20, 'Kristiana', 'apptest2303@gmail.com', '1234567890', 'Employment visa', 'refrefrefrf'),
(21, 'Kristiana', 'apptest2303@gmail.com', '1234567890', 'Tourist Visa', 'gfgbgfbfgbgfd'),
(22, 'williumson', 'apptest@gmail.com', '1234567890', 'Tourist Visa', 'sdsfcfvvr'),
(23, 'williumson', 'apptest@gmail.com', '1234567890', 'Tourist Visa', 'sdsfcfvvr'),
(24, 'williumson', 'apptest@gmail.com', '1234567890', 'Student visa', 'gfdfvdvfdg'),
(25, 'williumson', 'apptest@gmail.com', '1234567890', 'Student visa', 'effdgvfdgvrf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincontactdetail`
--
ALTER TABLE `admincontactdetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brochures`
--
ALTER TABLE `brochures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_detail`
--
ALTER TABLE `package_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visainquires`
--
ALTER TABLE `visainquires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincontactdetail`
--
ALTER TABLE `admincontactdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `brochures`
--
ALTER TABLE `brochures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package_detail`
--
ALTER TABLE `package_detail`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visainquires`
--
ALTER TABLE `visainquires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
