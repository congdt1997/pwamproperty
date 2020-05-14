-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 12:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pwamproperty`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(10) NOT NULL,
  `market` char(1) NOT NULL,
  `supermarket` char(1) NOT NULL,
  `gym` char(1) NOT NULL,
  `hospital` char(1) NOT NULL,
  `theater` char(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `market`, `supermarket`, `gym`, `hospital`, `theater`, `created_at`, `updated_at`) VALUES
(1, '0', '1', '1', '1', '1', '2020-04-29 21:06:35', '2020-04-29 21:36:17'),
(2, '0', '0', '1', '1', '1', '2020-04-29 21:08:47', '2020-04-29 21:08:47'),
(3, '0', '1', '1', '1', '0', '2020-04-29 21:11:35', '2020-04-29 21:11:35'),
(5, '0', '1', '1', '1', '0', '2020-04-29 21:36:25', '2020-04-29 21:36:25'),
(6, '1', '0', '1', '1', '1', '2020-05-01 03:26:13', '2020-05-01 03:33:27'),
(8, '0', '1', '1', '1', '0', '2020-05-01 03:30:51', '2020-05-01 03:30:51'),
(9, '1', '1', '1', '1', '0', '2020-05-04 07:22:30', '2020-05-04 07:22:39');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `nameFeedback` varchar(255) NOT NULL,
  `emailFeedback` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `nameFeedback`, `emailFeedback`, `phone`, `message`, `created_at`, `updated_at`) VALUES
(2, 'Dinh Tien Cong ', 'cong@gmail.com', '0962222789', 'aaaaa', '2020-04-28 21:29:25', '2020-04-28 21:29:25'),
(3, 'Dinh Tien Thanh', 'thanh@gmail.com', '0933928445', 'aaa', '2020-04-28 21:34:16', '2020-04-28 21:34:16'),
(5, 'Thanh Dinh Tien', 'congjr97@gmail.com', '0933928445', 'cang cuc', '2020-05-02 02:31:16', '2020-05-02 02:31:16');

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` int(10) UNSIGNED NOT NULL,
  `locationName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `locationName`, `created_at`, `updated_at`) VALUES
(1, 'Ha Noi', '2020-04-22 12:11:39', '2020-04-22 12:11:39'),
(2, 'Da Nang', '2020-04-22 12:11:45', '2020-04-22 12:11:45'),
(3, 'Ho Chi Minh', '2020-04-22 12:11:52', '2020-04-22 12:11:52'),
(4, 'Vung Tau', '2020-04-22 12:11:58', '2020-04-22 12:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateStart` date NOT NULL,
  `dateEnd` date NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(109, '2014_10_12_000000_create_users_table', 1),
(110, '2019_08_19_000000_create_failed_jobs_table', 1),
(111, '2020_04_21_105106_create_properties_table', 1),
(112, '2020_04_21_105127_create_locations_table', 1),
(113, '2020_04_21_105155_create_type_of_properties_table', 1),
(114, '2020_04_21_105213_create_reviews_table', 1),
(115, '2020_04_21_105240_create_roles_table', 1),
(116, '2020_04_21_105926_create_news_table', 1),
(117, '2020_04_21_105949_create_memberships_table', 1),
(118, '2020_04_21_110005_create_payments_table', 1),
(119, '2020_04_21_110021_create_type_of_codes_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `image`, `content`, `image2`, `content2`, `created_at`, `updated_at`) VALUES
(1, 'How We Opened and Presented Our New Luxury Property', 'news1.jpg', 'Our Principal and Partner, Samuel McMillan, recently celebrated the unveiling of 568 N. Tigertail Road, a newly-constructed estate located on one of Brentwood’s most prestigious streets. A collaboration between Samuel and his business partner, David Herskowitz, the approximately 15,600-square-foot residence, which boasts views from Downtown to the ocean, is a picture-perfect example of elevated Southern California living.', 'news2.jpg', '123456', '2020-04-26 23:06:47', '2020-05-14 01:55:42'),
(2, 'BuildUp construction company', 'news3.jpg', 'Guests of the unveiling event mingled on the sprawling rooftop terrace overlooking the twinkling city lights. Others took to the expansive daylit lower level, which holds a fully soundproofed theater, 1,500-bottle wine cellar, wine tasting and cigar lounge, a restaurant-caliber bar, indoor-outdoor gym, and 10-car auto gallery.', 'news4.jpg', 'okiee', '2020-04-26 23:07:39', '2020-05-14 01:56:07'),
(3, 'This amazing property', 'news5.jpg', 'Showcasing a warm, traditional-style exterior and the highest caliber of contemporary European finishes throughout, towering glass doors open to grand-scale living spaces.', 'news6.jpg', 'okiee', '2020-04-26 23:08:15', '2020-05-14 01:56:34');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(10) UNSIGNED NOT NULL,
  `serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idTypeofcode` int(10) UNSIGNED NOT NULL,
  `idPricetag` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `serial`, `code`, `comment`, `idUser`, `idTypeofcode`, `idPricetag`, `created_at`, `updated_at`) VALUES
(1, '1234567891010', '123456789789', 'ok', 1, 1, 1, '2020-04-22 19:58:38', '2020-05-01 08:54:19'),
(2, '1234567891012', '12345678912', 'ok', 6, 1, 1, '2020-05-01 06:56:54', '2020-05-01 20:14:01'),
(3, '12345678996', '123654654654', 'ok', 6, 1, 1, '2020-05-01 20:16:07', '2020-05-02 00:48:33'),
(5, '258693693582', '56456458251', 'ok', 5, 1, 1, '2020-05-03 06:45:49', '2020-05-04 08:05:11'),
(6, '258693693582', '123654654654', NULL, 6, 2, 1, '2020-05-08 23:08:16', '2020-05-14 02:44:53'),
(7, '258693693582', '123654654654', 'not', 6, 1, 2, '2020-05-14 00:57:34', '2020-05-14 01:38:28'),
(8, '258693693582', '123654654654', 'not', 6, 1, 1, '2020-05-14 01:01:48', '2020-05-14 01:04:31');

-- --------------------------------------------------------

--
-- Table structure for table `pricetags`
--

CREATE TABLE `pricetags` (
  `id` int(11) NOT NULL,
  `pricetag` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pricetags`
--

INSERT INTO `pricetags` (`id`, `pricetag`, `created_at`, `updated_at`) VALUES
(1, '20000', '2020-05-14 00:14:37', '2020-05-14 00:16:45'),
(2, '50000', '2020-05-14 00:14:43', '2020-05-14 00:14:43'),
(3, '100000', '2020-05-14 00:14:48', '2020-05-14 00:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `idLocation` int(10) UNSIGNED NOT NULL,
  `idType` int(10) UNSIGNED NOT NULL,
  `idFeature` int(10) UNSIGNED DEFAULT NULL,
  `idReview` int(10) UNSIGNED DEFAULT NULL,
  `idUser` int(10) UNSIGNED DEFAULT NULL,
  `detailaddress` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bedroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bathroom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `acreage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `price` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `idLocation`, `idType`, `idFeature`, `idReview`, `idUser`, `detailaddress`, `bedroom`, `bathroom`, `acreage`, `introduction`, `image`, `image2`, `image3`, `detail`, `created_at`, `updated_at`, `price`) VALUES
(1, 3, 1, 1, NULL, 2, '142 - 144 PPT', '2', '2', '100', 'Nice place', 'photo-1553524789-59ac0ed1d2d2.jpg', 'photo-1553524790-5872ab69e309.jpg', 'photo-1553524808-eef8eb03cf29.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:47:55', '6500.00'),
(2, 3, 1, 2, NULL, 1, '142 - 144 PPT', '2', '2', '200', 'Nice place', 'photo-1553524803-2eec745b729e.jpg', 'photo-1560185127-6ed189bf02f4.jpg', 'photo-1560448076-957f79776e95.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:48:14', '5500.00'),
(3, 2, 1, 3, NULL, 3, '142 - 144 PPT', '2', '2', '80', 'Nice place', 'photo-1480074568708-e7b720bb3f09.jpg', 'photo-1560448204-e02f11c3d0e2.jpg', 'photo-1560448076-957f79776e95.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:48:34', '7000.00'),
(4, 2, 2, 5, NULL, 3, '142 - 144 PPT', '2', '2', '90', 'Nice place', 'photo-1486406146926-c627a92ad1ab.jpg', 'photo-1481277542470-605612bd2d61.jpg', 'photo-1495433324511-bf8e92934d90.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:49:03', '6000.00'),
(5, 3, 2, 0, NULL, 3, '142 - 144 PPT', '2', '2', '300', 'Nice place', 'photo-1495433324511-bf8e92934d90.jpg', 'photo-1501183638710-841dd1904471.jpg', 'photo-1507089947368-19c1da9775ae.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:49:25', '9000.00'),
(6, 3, 2, 7, NULL, 3, '142 - 144 PPT', '2', '2', '1000', 'Nice place', 'photo-1564454745934-ec87d05bc0ac.jpg', 'photo-1541123437800-1bb1317badc2.jpg', 'photo-1565402170291-8491f14678db.jpg', 'Just for rent', '2020-04-22 12:21:02', '2020-05-04 07:49:50', '6540.00'),
(7, 4, 1, 6, NULL, 6, 'Binh Chau Xuyen Moc Vung Tau', '2', '2', '100', 'The prefect place', 'photo-1575245959159-3d4fedfa465a.jpg', 'photo-1569152811536-fb47aced8409.jpg', 'photo-1575245122563-776ff6af7411.jpg', 'You can invest here', '2020-04-30 21:15:06', '2020-05-14 01:59:56', '996.00'),
(9, 4, 2, 8, NULL, 6, 'Binh Chau Xuyen Moc Vung Tau', '2', '2', '266', 'Real estate with good price', 'photo-1588125270350-2ae0427ec171.jpg', 'photo-1586800112082-37ff5b5cd73c.jpg', 'photo-1565402170291-8491f14678db.jpg', '1231231231', '2020-05-01 01:39:37', '2020-05-14 02:00:20', '2555.00'),
(13, 2, 1, NULL, NULL, 6, 'Binh Chau Xuyen Moc Vung Tau', '2', '2', '222', 'Nice house with good view', 'photo-1507089947368-19c1da9775ae.jpg', 'photo-1541123437800-1bb1317badc2.jpg', 'photo-1575386848021-028a496c03fe.jpg', 'Super clean house, you can relax here', '2020-05-02 01:45:45', '2020-05-14 02:03:10', '331.00'),
(14, 2, 1, NULL, NULL, 1, 'Binh Chau Xuyen Moc Vung Tau', '2', '2', '200', 'Super good place', 'photo-1560448204-e02f11c3d0e2.jpg', 'photo-1501183638710-841dd1904471.jpg', 'photo-1560185127-6ed189bf02f4.jpg', 'You will never find any property like that', '2020-05-04 07:02:44', '2020-05-04 07:51:41', '250.00'),
(15, 4, 2, 9, NULL, 6, 'Ba To - Xuyen Moc - BRVT', '2', '2', '200', 'Super house', 'photo-1501183638710-841dd1904471.jpg', 'photo-1553524803-2eec745b729e.jpg', 'photo-1541123437800-1bb1317badc2.jpg', 'You will never find any property like that', '2020-05-04 07:08:51', '2020-05-14 02:03:38', '289.00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) DEFAULT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idProperty` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `content`, `rate`, `idUser`, `idProperty`, `created_at`, `updated_at`) VALUES
(8, 'bbb', 0, 1, 4, '2020-04-24 11:24:48', '2020-04-24 11:24:48'),
(10, 'Good Place', 0, 1, 1, '2020-04-24 20:14:39', '2020-04-24 20:14:39'),
(13, 'cong123', 0, 1, 4, '2020-04-24 20:25:48', '2020-04-24 20:25:48'),
(14, 'okieee', NULL, 1, 2, '2020-04-25 07:31:05', '2020-04-25 07:31:05');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `roleName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `roleName`, `created_at`, `updated_at`) VALUES
(1, 'Admin', '2020-04-22 10:53:46', '2020-04-22 10:53:46'),
(2, 'Staff', '2020-04-22 10:53:49', '2020-04-22 10:53:49'),
(3, 'Client', '2020-04-22 10:53:53', '2020-04-22 10:53:53'),
(4, 'Member', '2020-04-22 10:53:56', '2020-04-22 10:53:56');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_codes`
--

CREATE TABLE `type_of_codes` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_codes`
--

INSERT INTO `type_of_codes` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Viettel', '2020-04-30 06:45:41', '2020-04-30 06:45:41'),
(2, 'Vinaphone', '2020-04-30 06:45:46', '2020-04-30 06:45:46'),
(3, 'Mobile Phone', '2020-04-30 06:45:52', '2020-04-30 06:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `type_of_properties`
--

CREATE TABLE `type_of_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `typeProperty` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_of_properties`
--

INSERT INTO `type_of_properties` (`id`, `typeProperty`, `created_at`, `updated_at`) VALUES
(1, 'For Rent', '2020-04-22 12:12:10', '2020-04-22 12:12:10'),
(2, 'For Sale', '2020-04-22 12:12:13', '2020-04-22 12:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dateOfBirth` date DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `idRole` int(10) UNSIGNED NOT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count` int(11) DEFAULT NULL,
  `verified_email` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `email`, `password`, `phone`, `dateOfBirth`, `facebook`, `address`, `image`, `gender`, `idRole`, `status`, `count`, `verified_email`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Dinh Tien Cong ', 'pwam.realestate@gmail.com', '$2y$10$o8rQbxGznAtGMf8wWhNfP.1BQY9dQQONwBLV378fOVQVwd7GwUekO', '0962222789', '2020-04-02', 'https://www.facebook.com', 'Vung Tau City', 'cong2.jpg', 'M', 1, '1', NULL, 1, NULL, '2020-04-22 11:01:46', '2020-05-01 08:54:19'),
(2, 'Dinh Tien Cong 12', 'congdt2@fpt.edu.vn', '$2y$10$IR/XVmW3AARuGM0ZItG4qOdo9sYLtR2RBZ00lTsPMCXMjHdpgc8bG', '0962222222', '2020-04-21', 'https://www.facebook.com', 'Ho Chi Minh City', 'cong.jpg', 'M', 2, '0', NULL, 1, NULL, '2020-04-22 11:03:09', '2020-04-23 23:11:54'),
(3, 'Dinh Tien Cong 22', 'kaikuly9a@gmail.com', '$2y$10$1NEpaF.I2KCeihaHZUP9y.DHFxD8FZIGSKlvhuJa3sU6rWhn2ogcu', '0962222782', '2020-04-21', 'https://www.facebook.com', 'Ho Chi Minh City', '1324433e867f6f21366e.jpg', 'M', 3, '0', NULL, 1, NULL, '2020-04-22 11:06:59', '2020-04-22 11:56:56'),
(4, 'kiet 123', 'kiet@gmail.com', '$2y$10$PIK0T4MFtJm.BuNeEtruneOsIm.dZHn8QGt4/4.36gKFmk4Oa7Zvm', '0962222782', '2020-04-08', 'https://www.facebook.com', 'Quang Binh City', NULL, 'M', 3, NULL, NULL, NULL, NULL, '2020-04-26 20:41:55', '2020-04-26 20:47:32'),
(5, 'Truong giang', 'tg.ethanstark@gmail.com', '$2y$10$lqgj2ZpZFCmP6Gl0Lrd88.W/sB4MSzT1ztCf94AST/uRqmXfm/fju', '0933928445', '2020-04-09', 'https://www.facebook.com/GiangDev.99', 'Ho Chi Minh City', '_DSC7472.JPG', 'M', 3, '1', 5, NULL, NULL, '2020-04-26 20:52:32', '2020-05-04 08:05:11'),
(6, 'Thanh Dinh Tien', 'congjr97@gmail.com', '$2y$10$Gd0yOaxk.448zI/BSWYHru/FVJSh3GWIDXzoea5jWh2RJ1QAqvu9a', '0933928445', '2020-04-09', 'https://www.facebook.com/GiangDev.99', 'Vung Tau City', NULL, 'M', 3, '0', 0, 1, NULL, '2020-04-28 03:54:27', '2020-05-14 01:38:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricetags`
--
ALTER TABLE `pricetags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_codes`
--
ALTER TABLE `type_of_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_of_properties`
--
ALTER TABLE `type_of_properties`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `pricetags`
--
ALTER TABLE `pricetags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `type_of_codes`
--
ALTER TABLE `type_of_codes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_of_properties`
--
ALTER TABLE `type_of_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
