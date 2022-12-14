-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 02:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `direct-selling-forum-nairobi`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_uss`
--

CREATE TABLE `contact_uss` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `short_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Afghanistan', 'af', NULL, NULL, NULL),
(2, 'Albania', 'al', NULL, NULL, NULL),
(3, 'Algeria', 'dz', NULL, NULL, NULL),
(4, 'American Samoa', 'as', NULL, NULL, NULL),
(5, 'Andorra', 'ad', NULL, NULL, NULL),
(6, 'Angola', 'ao', NULL, NULL, NULL),
(7, 'Anguilla', 'ai', NULL, NULL, NULL),
(8, 'Antarctica', 'aq', NULL, NULL, NULL),
(9, 'Antigua and Barbuda', 'ag', NULL, NULL, NULL),
(10, 'Argentina', 'ar', NULL, NULL, NULL),
(11, 'Armenia', 'am', NULL, NULL, NULL),
(12, 'Aruba', 'aw', NULL, NULL, NULL),
(13, 'Australia', 'au', NULL, NULL, NULL),
(14, 'Austria', 'at', NULL, NULL, NULL),
(15, 'Azerbaijan', 'az', NULL, NULL, NULL),
(16, 'Bahamas', 'bs', NULL, NULL, NULL),
(17, 'Bahrain', 'bh', NULL, NULL, NULL),
(18, 'Bangladesh', 'bd', NULL, NULL, NULL),
(19, 'Barbados', 'bb', NULL, NULL, NULL),
(20, 'Belarus', 'by', NULL, NULL, NULL),
(21, 'Belgium', 'be', NULL, NULL, NULL),
(22, 'Belize', 'bz', NULL, NULL, NULL),
(23, 'Benin', 'bj', NULL, NULL, NULL),
(24, 'Bermuda', 'bm', NULL, NULL, NULL),
(25, 'Bhutan', 'bt', NULL, NULL, NULL),
(26, 'Bolivia', 'bo', NULL, NULL, NULL),
(27, 'Bosnia and Herzegovina', 'ba', NULL, NULL, NULL),
(28, 'Botswana', 'bw', NULL, NULL, NULL),
(29, 'Brazil', 'br', NULL, NULL, NULL),
(30, 'British Indian Ocean Territory', 'io', NULL, NULL, NULL),
(31, 'British Virgin Islands', 'vg', NULL, NULL, NULL),
(32, 'Brunei', 'bn', NULL, NULL, NULL),
(33, 'Bulgaria', 'bg', NULL, NULL, NULL),
(34, 'Burkina Faso', 'bf', NULL, NULL, NULL),
(35, 'Burundi', 'bi', NULL, NULL, NULL),
(36, 'Cambodia', 'kh', NULL, NULL, NULL),
(37, 'Cameroon', 'cm', NULL, NULL, NULL),
(38, 'Canada', 'ca', NULL, NULL, NULL),
(39, 'Cape Verde', 'cv', NULL, NULL, NULL),
(40, 'Cayman Islands', 'ky', NULL, NULL, NULL),
(41, 'Central African Republic', 'cf', NULL, NULL, NULL),
(42, 'Chad', 'td', NULL, NULL, NULL),
(43, 'Chile', 'cl', NULL, NULL, NULL),
(44, 'China', 'cn', NULL, NULL, NULL),
(45, 'Christmas Island', 'cx', NULL, NULL, NULL),
(46, 'Cocos Islands', 'cc', NULL, NULL, NULL),
(47, 'Colombia', 'co', NULL, NULL, NULL),
(48, 'Comoros', 'km', NULL, NULL, NULL),
(49, 'Cook Islands', 'ck', NULL, NULL, NULL),
(50, 'Costa Rica', 'cr', NULL, NULL, NULL),
(51, 'Croatia', 'hr', NULL, NULL, NULL),
(52, 'Cuba', 'cu', NULL, NULL, NULL),
(53, 'Curacao', 'cw', NULL, NULL, NULL),
(54, 'Cyprus', 'cy', NULL, NULL, NULL),
(55, 'Czech Republic', 'cz', NULL, NULL, NULL),
(56, 'Democratic Republic of the Congo', 'cd', NULL, NULL, NULL),
(57, 'Denmark', 'dk', NULL, NULL, NULL),
(58, 'Djibouti', 'dj', NULL, NULL, NULL),
(59, 'Dominica', 'dm', NULL, NULL, NULL),
(60, 'Dominican Republic', 'do', NULL, NULL, NULL),
(61, 'East Timor', 'tl', NULL, NULL, NULL),
(62, 'Ecuador', 'ec', NULL, NULL, NULL),
(63, 'Egypt', 'eg', NULL, NULL, NULL),
(64, 'El Salvador', 'sv', NULL, NULL, NULL),
(65, 'Equatorial Guinea', 'gq', NULL, NULL, NULL),
(66, 'Eritrea', 'er', NULL, NULL, NULL),
(67, 'Estonia', 'ee', NULL, NULL, NULL),
(68, 'Ethiopia', 'et', NULL, NULL, NULL),
(69, 'Falkland Islands', 'fk', NULL, NULL, NULL),
(70, 'Faroe Islands', 'fo', NULL, NULL, NULL),
(71, 'Fiji', 'fj', NULL, NULL, NULL),
(72, 'Finland', 'fi', NULL, NULL, NULL),
(73, 'France', 'fr', NULL, NULL, NULL),
(74, 'French Polynesia', 'pf', NULL, NULL, NULL),
(75, 'Gabon', 'ga', NULL, NULL, NULL),
(76, 'Gambia', 'gm', NULL, NULL, NULL),
(77, 'Georgia', 'ge', NULL, NULL, NULL),
(78, 'Germany', 'de', NULL, NULL, NULL),
(79, 'Ghana', 'gh', NULL, NULL, NULL),
(80, 'Gibraltar', 'gi', NULL, NULL, NULL),
(81, 'Greece', 'gr', NULL, NULL, NULL),
(82, 'Greenland', 'gl', NULL, NULL, NULL),
(83, 'Grenada', 'gd', NULL, NULL, NULL),
(84, 'Guam', 'gu', NULL, NULL, NULL),
(85, 'Guatemala', 'gt', NULL, NULL, NULL),
(86, 'Guernsey', 'gg', NULL, NULL, NULL),
(87, 'Guinea', 'gn', NULL, NULL, NULL),
(88, 'Guinea-Bissau', 'gw', NULL, NULL, NULL),
(89, 'Guyana', 'gy', NULL, NULL, NULL),
(90, 'Haiti', 'ht', NULL, NULL, NULL),
(91, 'Honduras', 'hn', NULL, NULL, NULL),
(92, 'Hong Kong', 'hk', NULL, NULL, NULL),
(93, 'Hungary', 'hu', NULL, NULL, NULL),
(94, 'Iceland', 'is', NULL, NULL, NULL),
(95, 'India', 'in', NULL, NULL, NULL),
(96, 'Indonesia', 'id', NULL, NULL, NULL),
(97, 'Iran', 'ir', NULL, NULL, NULL),
(98, 'Iraq', 'iq', NULL, NULL, NULL),
(99, 'Ireland', 'ie', NULL, NULL, NULL),
(100, 'Isle of Man', 'im', NULL, NULL, NULL),
(101, 'Israel', 'il', NULL, NULL, NULL),
(102, 'Italy', 'it', NULL, NULL, NULL),
(103, 'Ivory Coast', 'ci', NULL, NULL, NULL),
(104, 'Jamaica', 'jm', NULL, NULL, NULL),
(105, 'Japan', 'jp', NULL, NULL, NULL),
(106, 'Jersey', 'je', NULL, NULL, NULL),
(107, 'Jordan', 'jo', NULL, NULL, NULL),
(108, 'Kazakhstan', 'kz', NULL, NULL, NULL),
(109, 'Kenya', 'ke', NULL, NULL, NULL),
(110, 'Kiribati', 'ki', NULL, NULL, NULL),
(111, 'Kosovo', 'xk', NULL, NULL, NULL),
(112, 'Kuwait', 'kw', NULL, NULL, NULL),
(113, 'Kyrgyzstan', 'kg', NULL, NULL, NULL),
(114, 'Laos', 'la', NULL, NULL, NULL),
(115, 'Latvia', 'lv', NULL, NULL, NULL),
(116, 'Lebanon', 'lb', NULL, NULL, NULL),
(117, 'Lesotho', 'ls', NULL, NULL, NULL),
(118, 'Liberia', 'lr', NULL, NULL, NULL),
(119, 'Libya', 'ly', NULL, NULL, NULL),
(120, 'Liechtenstein', 'li', NULL, NULL, NULL),
(121, 'Lithuania', 'lt', NULL, NULL, NULL),
(122, 'Luxembourg', 'lu', NULL, NULL, NULL),
(123, 'Macau', 'mo', NULL, NULL, NULL),
(124, 'Macedonia', 'mk', NULL, NULL, NULL),
(125, 'Madagascar', 'mg', NULL, NULL, NULL),
(126, 'Malawi', 'mw', NULL, NULL, NULL),
(127, 'Malaysia', 'my', NULL, NULL, NULL),
(128, 'Maldives', 'mv', NULL, NULL, NULL),
(129, 'Mali', 'ml', NULL, NULL, NULL),
(130, 'Malta', 'mt', NULL, NULL, NULL),
(131, 'Marshall Islands', 'mh', NULL, NULL, NULL),
(132, 'Mauritania', 'mr', NULL, NULL, NULL),
(133, 'Mauritius', 'mu', NULL, NULL, NULL),
(134, 'Mayotte', 'yt', NULL, NULL, NULL),
(135, 'Mexico', 'mx', NULL, NULL, NULL),
(136, 'Micronesia', 'fm', NULL, NULL, NULL),
(137, 'Moldova', 'md', NULL, NULL, NULL),
(138, 'Monaco', 'mc', NULL, NULL, NULL),
(139, 'Mongolia', 'mn', NULL, NULL, NULL),
(140, 'Montenegro', 'me', NULL, NULL, NULL),
(141, 'Montserrat', 'ms', NULL, NULL, NULL),
(142, 'Morocco', 'ma', NULL, NULL, NULL),
(143, 'Mozambique', 'mz', NULL, NULL, NULL),
(144, 'Myanmar', 'mm', NULL, NULL, NULL),
(145, 'Namibia', 'na', NULL, NULL, NULL),
(146, 'Nauru', 'nr', NULL, NULL, NULL),
(147, 'Nepal', 'np', NULL, NULL, NULL),
(148, 'Netherlands', 'nl', NULL, NULL, NULL),
(149, 'Netherlands Antilles', 'an', NULL, NULL, NULL),
(150, 'New Caledonia', 'nc', NULL, NULL, NULL),
(151, 'New Zealand', 'nz', NULL, NULL, NULL),
(152, 'Nicaragua', 'ni', NULL, NULL, NULL),
(153, 'Niger', 'ne', NULL, NULL, NULL),
(154, 'Nigeria', 'ng', NULL, NULL, NULL),
(155, 'Niue', 'nu', NULL, NULL, NULL),
(156, 'North Korea', 'kp', NULL, NULL, NULL),
(157, 'Northern Mariana Islands', 'mp', NULL, NULL, NULL),
(158, 'Norway', 'no', NULL, NULL, NULL),
(159, 'Oman', 'om', NULL, NULL, NULL),
(160, 'Pakistan', 'pk', NULL, NULL, NULL),
(161, 'Palau', 'pw', NULL, NULL, NULL),
(162, 'Palestine', 'ps', NULL, NULL, NULL),
(163, 'Panama', 'pa', NULL, NULL, NULL),
(164, 'Papua New Guinea', 'pg', NULL, NULL, NULL),
(165, 'Paraguay', 'py', NULL, NULL, NULL),
(166, 'Peru', 'pe', NULL, NULL, NULL),
(167, 'Philippines', 'ph', NULL, NULL, NULL),
(168, 'Pitcairn', 'pn', NULL, NULL, NULL),
(169, 'Poland', 'pl', NULL, NULL, NULL),
(170, 'Portugal', 'pt', NULL, NULL, NULL),
(171, 'Puerto Rico', 'pr', NULL, NULL, NULL),
(172, 'Qatar', 'qa', NULL, NULL, NULL),
(173, 'Republic of the Congo', 'cg', NULL, NULL, NULL),
(174, 'Reunion', 're', NULL, NULL, NULL),
(175, 'Romania', 'ro', NULL, NULL, NULL),
(176, 'Russia', 'ru', NULL, NULL, NULL),
(177, 'Rwanda', 'rw', NULL, NULL, NULL),
(178, 'Saint Barthelemy', 'bl', NULL, NULL, NULL),
(179, 'Saint Helena', 'sh', NULL, NULL, NULL),
(180, 'Saint Kitts and Nevis', 'kn', NULL, NULL, NULL),
(181, 'Saint Lucia', 'lc', NULL, NULL, NULL),
(182, 'Saint Martin', 'mf', NULL, NULL, NULL),
(183, 'Saint Pierre and Miquelon', 'pm', NULL, NULL, NULL),
(184, 'Saint Vincent and the Grenadines', 'vc', NULL, NULL, NULL),
(185, 'Samoa', 'ws', NULL, NULL, NULL),
(186, 'San Marino', 'sm', NULL, NULL, NULL),
(187, 'Sao Tome and Principe', 'st', NULL, NULL, NULL),
(188, 'Saudi Arabia', 'sa', NULL, NULL, NULL),
(189, 'Senegal', 'sn', NULL, NULL, NULL),
(190, 'Serbia', 'rs', NULL, NULL, NULL),
(191, 'Seychelles', 'sc', NULL, NULL, NULL),
(192, 'Sierra Leone', 'sl', NULL, NULL, NULL),
(193, 'Singapore', 'sg', NULL, NULL, NULL),
(194, 'Sint Maarten', 'sx', NULL, NULL, NULL),
(195, 'Slovakia', 'sk', NULL, NULL, NULL),
(196, 'Slovenia', 'si', NULL, NULL, NULL),
(197, 'Solomon Islands', 'sb', NULL, NULL, NULL),
(198, 'Somalia', 'so', NULL, NULL, NULL),
(199, 'South Africa', 'za', NULL, NULL, NULL),
(200, 'South Korea', 'kr', NULL, NULL, NULL),
(201, 'South Sudan', 'ss', NULL, NULL, NULL),
(202, 'Spain', 'es', NULL, NULL, NULL),
(203, 'Sri Lanka', 'lk', NULL, NULL, NULL),
(204, 'Sudan', 'sd', NULL, NULL, NULL),
(205, 'Suriname', 'sr', NULL, NULL, NULL),
(206, 'Svalbard and Jan Mayen', 'sj', NULL, NULL, NULL),
(207, 'Swaziland', 'sz', NULL, NULL, NULL),
(208, 'Sweden', 'se', NULL, NULL, NULL),
(209, 'Switzerland', 'ch', NULL, NULL, NULL),
(210, 'Syria', 'sy', NULL, NULL, NULL),
(211, 'Taiwan', 'tw', NULL, NULL, NULL),
(212, 'Tajikistan', 'tj', NULL, NULL, NULL),
(213, 'Tanzania', 'tz', NULL, NULL, NULL),
(214, 'Thailand', 'th', NULL, NULL, NULL),
(215, 'Togo', 'tg', NULL, NULL, NULL),
(216, 'Tokelau', 'tk', NULL, NULL, NULL),
(217, 'Tonga', 'to', NULL, NULL, NULL),
(218, 'Trinidad and Tobago', 'tt', NULL, NULL, NULL),
(219, 'Tunisia', 'tn', NULL, NULL, NULL),
(220, 'Turkey', 'tr', NULL, NULL, NULL),
(221, 'Turkmenistan', 'tm', NULL, NULL, NULL),
(222, 'Turks and Caicos Islands', 'tc', NULL, NULL, NULL),
(223, 'Tuvalu', 'tv', NULL, NULL, NULL),
(224, 'U.S. Virgin Islands', 'vi', NULL, NULL, NULL),
(225, 'Uganda', 'ug', NULL, NULL, NULL),
(226, 'Ukraine', 'ua', NULL, NULL, NULL),
(227, 'United Arab Emirates', 'ae', NULL, NULL, NULL),
(228, 'United Kingdom', 'gb', NULL, NULL, NULL),
(229, 'United States', 'us', NULL, NULL, NULL),
(230, 'Uruguay', 'uy', NULL, NULL, NULL),
(231, 'Uzbekistan', 'uz', NULL, NULL, NULL),
(232, 'Vanuatu', 'vu', NULL, NULL, NULL),
(233, 'Vatican', 'va', NULL, NULL, NULL),
(234, 'Venezuela', 've', NULL, NULL, NULL),
(235, 'Vietnam', 'vn', NULL, NULL, NULL),
(236, 'Wallis and Futuna', 'wf', NULL, NULL, NULL),
(237, 'Western Sahara', 'eh', NULL, NULL, NULL),
(238, 'Yemen', 'ye', NULL, NULL, NULL),
(239, 'Zambia', 'zm', NULL, NULL, NULL),
(240, 'Zimbabwe', 'zw', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `media`
--

CREATE TABLE `media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collection_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mime_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conversions_disk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `size` bigint(20) UNSIGNED NOT NULL,
  `manipulations` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`manipulations`)),
  `custom_properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`custom_properties`)),
  `generated_conversions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`generated_conversions`)),
  `responsive_images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`responsive_images`)),
  `order_column` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `media`
--

INSERT INTO `media` (`id`, `model_type`, `model_id`, `uuid`, `collection_name`, `name`, `file_name`, `mime_type`, `disk`, `conversions_disk`, `size`, `manipulations`, `custom_properties`, `generated_conversions`, `responsive_images`, `order_column`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\Speaker', 1, '9f756580-4024-4d0e-a45e-d8f445a9d15a', 'avatar', '6398c338b0996_1', '6398c338b0996_1.jpg', 'image/jpeg', 'public', 'public', 117634, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-12-13 15:23:55', '2022-12-13 15:23:56'),
(2, 'App\\Models\\Speaker', 2, 'd6426b5a-21fc-4bfc-a767-c205c0cdfa0c', 'avatar', '6398c383b57e4_2', '6398c383b57e4_2.jpg', 'image/jpeg', 'public', 'public', 24391, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-12-13 15:25:09', '2022-12-13 15:25:09'),
(3, 'App\\Models\\Speaker', 3, '8bfb885e-1b7d-408d-a32f-092fdd9d4cb9', 'avatar', '6398c3d7d3eb2_3', '6398c3d7d3eb2_3.jpg', 'image/jpeg', 'public', 'public', 1596540, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-12-13 15:26:33', '2022-12-13 15:26:34'),
(4, 'App\\Models\\Speaker', 4, '64dd5818-0551-42a6-adae-21913df5b905', 'avatar', '6398c5355e02d_4', '6398c5355e02d_4.jpeg', 'image/jpeg', 'public', 'public', 329192, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-12-13 15:32:23', '2022-12-13 15:32:23'),
(5, 'App\\Models\\Speaker', 5, 'cb540cf0-8f97-42d9-a169-7970381d20ed', 'avatar', '6398c57d2aa13_5', '6398c57d2aa13_5.jpeg', 'image/jpeg', 'public', 'public', 89627, '[]', '[]', '{\"thumb\":true,\"preview\":true}', '[]', 1, '2022-12-13 15:33:36', '2022-12-13 15:33:37');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2022_12_13_000001_create_media_table', 1),
(4, '2022_12_13_000002_create_permissions_table', 1),
(5, '2022_12_13_000003_create_roles_table', 1),
(6, '2022_12_13_000004_create_users_table', 1),
(7, '2022_12_13_000005_create_countries_table', 1),
(8, '2022_12_13_000006_create_contact_uss_table', 1),
(9, '2022_12_13_000007_create_speakers_table', 1),
(10, '2022_12_13_000008_create_permission_role_pivot_table', 1),
(11, '2022_12_13_000009_create_role_user_pivot_table', 1),
(12, '2022_12_13_000010_add_relationship_fields_to_users_table', 1),
(13, '2022_12_13_000011_add_verification_fields', 1);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(17, 'country_create', NULL, NULL, NULL),
(18, 'country_edit', NULL, NULL, NULL),
(19, 'country_show', NULL, NULL, NULL),
(20, 'country_delete', NULL, NULL, NULL),
(21, 'country_access', NULL, NULL, NULL),
(22, 'contact_us_show', NULL, NULL, NULL),
(23, 'contact_us_delete', NULL, NULL, NULL),
(24, 'contact_us_access', NULL, NULL, NULL),
(25, 'speaker_create', NULL, NULL, NULL),
(26, 'speaker_edit', NULL, NULL, NULL),
(27, 'speaker_show', NULL, NULL, NULL),
(28, 'speaker_delete', NULL, NULL, NULL),
(29, 'speaker_access', NULL, NULL, NULL),
(30, 'profile_password_edit', NULL, NULL, NULL),
(31, 'dashboard_access', '2022-12-13 17:56:22', '2022-12-13 17:56:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `permission_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 17),
(1, 18),
(1, 19),
(1, 20),
(1, 21),
(1, 22),
(1, 23),
(1, 24),
(1, 25),
(1, 26),
(1, 27),
(1, 28),
(1, 29),
(1, 30),
(2, 17),
(2, 18),
(2, 19),
(2, 20),
(2, 21),
(2, 22),
(2, 23),
(2, 24),
(2, 25),
(2, 26),
(2, 27),
(2, 28),
(2, 29),
(2, 30),
(2, 1),
(2, 14),
(2, 16),
(2, 31),
(1, 31),
(2, 12),
(2, 13),
(2, 15);

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Super Admin', NULL, NULL, NULL),
(2, 'Admin', NULL, NULL, NULL),
(3, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `speakers`
--

CREATE TABLE `speakers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `speakers`
--

INSERT INTO `speakers` (`id`, `name`, `organization`, `facebook`, `twitter`, `instagram`, `youtube`, `linkedin`, `website`, `bio`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Christopher Odongo', 'CEO, WYLDE INTERNATIONAL', NULL, 'https://twitter.com/odongochris', NULL, NULL, 'https://www.linkedin.com/in/odongochris/', NULL, '<p>Christopher Odongo is a strategic planning consultant and business coach with 22 years experience working with SMEs across Africa. He is creative and practical in his approach. He has top skills in business coaching, strategy development, facilitation, leadership development, and personal development.</p><p>At WYLDE International, Christopher leads a team of brilliant consultants and associates to deliver an inspirational growth program for entrepreneurs that to date has transformed more than 500 businesses.</p>', '2022-12-13 15:23:55', '2022-12-13 15:23:55', NULL),
(2, 'Enzo Graziano', 'FOUNDER, ENZO GRAZIANO ASSOCIATES', NULL, NULL, NULL, NULL, 'https://www.linkedin.com/in/enzograziano/', 'https://www.enzograziano.com/', '<p>Enzo is a professional sales coach, highly specialized in the East African Market. Banks, FMCGs, MNOs, Manufacturers and International employers hire Enzo to turn around sales through transformational coaching programs.</p><p>He uses illustrated manuals and role-play games to deliver the most practical sales training program in East Africa. Prior to his coaching career, Enzo personally sold in 11 African countries and led the global penetration strategy of Silensec Limited, an ISO27001 certified company.</p>', '2022-12-13 15:25:09', '2022-12-13 15:25:09', NULL),
(3, 'Frida Owinga', 'FOUNDER, PASSIONPROFIT', 'https://www.facebook.com/FireUpWithFrida', 'https://twitter.com/fridaowinga', NULL, NULL, 'https://www.linkedin.com/in/fridaowinga/', NULL, '<p>Frida A. Owinga is the founder of PassionProfit, a people and business development organization that elevates the human experience to thrive backed by scientific data on the conditions of how human beings live, work and thrive using tried and tested techniques and tools.</p><p>Founded in 2009, PassionProfit has trained over thirty thousand people directly and through partnerships with corporates, faith-based organizations and NGO. PassionProfit has evolved and is run by a young team of apprentices who are nurtured to turn their passion into profit as they serve actual clients with Frida’s guidance and over 25 years’ experience and exposure in different sectors and geography. Frida considers this her legacy and commitment to her country to help nurture the younger generation as a strategy to create sustainable decent jobs.</p><p>She is a certified life and work coach with Interaworks an organization that supports leaders and teams to produce results that matter most to thrive in life and at work using tools and techniques that elevate the human experience to live, work and thrive.</p><p>Frida enjoys working with young adults and founded Young Global Workforce Apprenticeship (YGWA) in 2019 to provide experiential learning solutions to get guts, grit, and grace to gig in any geography. The apprenticeship supports young adults to trade their time and talent for access to paid opportunities with small and medium enterprises as a strategy to foster creation of decent sustainable work.</p><p>She has been working with individuals and organizations for over 25 years across sectors - International Trade, Retail, Tours and Travel and Beauty; and geographies - Japan, USA, UK, South Africa, Uganda, Malawi and Zambia. She is a sought after speaker and resource person for top tier banks in Kenya including Stanbic, KCB and ABSA.</p><p>Frida studied organizational leadership and management at the Regent University in Virginia; small business management by Small Business Authority in Atlanta, Georgia; Launch and Grow Entrepreneurship at Babson College, in Boston and is an alumnus of 10k Women in Business by Goldman Sachs, USIU-Africa and continues to study to remain relevant and impactful.</p><p>She is the current and first African President of Organization of Women in International Trade(OWIT) an American organization with 27 chapters around the world; non-executive director at Home Africa Limited and Chair of Nomination Committee, Partnerships Director with CEO Association of Kenya, a member of Boardroom Africa and is the Vice Chair of KEPSA SME Club as well as Founder and Partnerships Director of SME Founders Association an organization that fosters creation of decent and sustainable work.</p><p>Board Strategy Support Success</p><ol><li>Business Networking International Director Consultant. Led network growth strategy that earned the network US$2,842 in one year.</li><li>President OWIT Nairobi - Led program and succession planning strategy that resulted in 85% membership growth.</li><li>Lead consultant for SOS Continental Leadership Strategy meeting to adopt resource mobilization strategies for Leaders to transition from funding to sustainable profit making activities.</li><li>Vice President Chapter Development OWIT Intl - launched 5 chapters in one year St Louis, Nigeria, Zimbabwe, Dominican Republic, Mexico</li><li>1st African President of OWIT International an organization that fosters international trade and advancement of women in trade in 27 countries around the world.</li></ol>', '2022-12-13 15:26:33', '2022-12-13 15:26:33', NULL),
(4, 'Ombo Malumbe', 'PARTNER, ONG’ANYA OMBO ADVOCATES', NULL, 'https://twitter.com/OmboDM', NULL, NULL, 'https://www.linkedin.com/in/ombo-malumbe-7889139a/', 'https://onganyaombo.com/team-view/ombo-malumbe-partner/', '<p>Ombo Malumbe is a business-oriented lawyer licensed to practice by the Law Society of Kenya and a partner at Ong’anya Ombo Advocates LLP, a full-service law firm based in Nairobi, Kenya. He is currently a committee member of the Cross-Border Practice &amp; Immigration at Law Society of Kenya and has been regarded by Leaders in Law as a Corporate Legal Strategy Expert of the Year in Kenya (2022).</p><p>He, together with his team at Ong’anya Ombo Advocates LLP (the “law firm”), provide turnkey solutions to new market entrants and regularize undertakings that are already in the market.</p><p>The law firm is a member of the American Chambers of Commerce (Kenya), and ALFA International, a premier network of at least 140 dedicated independent law firms across the globe with the urge to provide exemplary services to a client. Also, the law firm is being listed as an elite law firm by China Council for the Promotion of International Trade (CCPIT).</p><p>The law firm is ranked and is highly recommended business law firm by Leaders League (2022), ranked by ITR World Tax (2023), best law firm in Corporate Structuring, Immigration, and IP Law by Global Law Experts (2022) and finalist in African Legal Awards in the following categories: IP Team of the Year (2021), Competition &amp; Regulatory Team of the Year (2022), and CSR, Diversity, Transformation and Economic Empowerment Award (2022).</p><p>His colleagues Jack Ong’anya and Jackline Akello have equally been highly ranked and recommended as business lawyers in Kenya (2022) by Leaders League.</p><p>Frida studied organizational leadership and management at the Regent University in Virginia; small business management by Small Business Authority in Atlanta, Georgia; Launch and Grow Entrepreneurship at Babson College, in Boston and is an alumnus of 10k Women in Business by Goldman Sachs, USIU-Africa and continues to study to remain relevant and impactful.</p><p>He believes that a person who is keen to invest in any new jurisdiction, such a person should be ensure that all aspects concerning such a market is well addressed by various professionals including but not limited to a lawyer, data analysts, investment advisor, among others.</p>', '2022-12-13 15:32:23', '2022-12-13 15:32:23', NULL),
(5, 'Weslene Orwoba', 'MARKETING EXPERT', NULL, 'https://twitter.com/WesleneOrwoba_', NULL, NULL, 'https://www.linkedin.com/in/weslene-orwoba-632a1329/', 'http://weslene.com/', '<p>Weslene Orwoba is a decisive Marketing and Communications expert who drives business growth through creative and innovative demand generation strategies. Coupled with a comprehensive background in leading successful marketing teams, she is seasoned and skilled at analyzing market trends &amp; customer needs to develop highly-effective marketing campaigns.</p>', '2022-12-13 15:33:36', '2022-12-13 15:33:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attendee_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT 0,
  `verified_at` datetime DEFAULT NULL,
  `verification_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `country_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone_number`, `title`, `attendee_type`, `email`, `organization`, `email_verified_at`, `password`, `verified`, `verified_at`, `verification_token`, `remember_token`, `created_at`, `updated_at`, `deleted_at`, `country_id`) VALUES
(1, 'Wilson Admin', '', NULL, NULL, 'wilson@wezaprosoft.com', '', NULL, '$2y$10$3L6E/PdlIJiLvo/S1gpFWe5q4qxgCJcuAUadnP9W7.KWvKjK1fJNq', 1, '2022-12-13 11:26:28', '', '6Dou83m5cUrRLyJztYdCiUWtZjfTZcU5dFM2uK6Fk4eSC54bUFNVEv6C9aM5', NULL, NULL, NULL, NULL),
(2, 'Direct Selling Admin', '', NULL, NULL, 'admin@directsellingafrica.com', '', NULL, '$2y$10$b0PNh3k/kqSziosZzSYkAerOX/efY8grRYRh/T61/j63AoGieIQQC', 1, '2022-12-13 11:26:28', '', 'BGWSui9YaKKGUNZus3sJvkDX13JrYQoA0xcgcqaZg8zoLVyB5WsQEtbcYNUg', NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_uss`
--
ALTER TABLE `contact_uss`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact_uss_email_unique` (`email`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media`
--
ALTER TABLE `media`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media_uuid_unique` (`uuid`),
  ADD KEY `media_model_type_model_id_index` (`model_type`,`model_id`),
  ADD KEY `media_order_column_index` (`order_column`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_7719154` (`role_id`),
  ADD KEY `permission_id_fk_7719154` (`permission_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_7719163` (`user_id`),
  ADD KEY `role_id_fk_7719163` (`role_id`);

--
-- Indexes for table `speakers`
--
ALTER TABLE `speakers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `country_fk_7720787` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_uss`
--
ALTER TABLE `contact_uss`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=241;

--
-- AUTO_INCREMENT for table `media`
--
ALTER TABLE `media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `speakers`
--
ALTER TABLE `speakers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_7719154` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_7719154` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_7719163` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_7719163` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `country_fk_7720787` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
