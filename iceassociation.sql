-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2015 at 04:49 PM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iceassociation`
--

-- --------------------------------------------------------

--
-- Table structure for table `association_members`
--

CREATE TABLE IF NOT EXISTS `association_members` (
  `id` int(10) unsigned NOT NULL,
  `members_id` int(11) NOT NULL,
  `designation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `association_members`
--

INSERT INTO `association_members` (`id`, `members_id`, `designation`, `position`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(8, 1, 'President', '2', '11-12-2015', NULL, '2015-12-11 06:43:31', '2015-12-11 06:43:31'),
(16, 3, 'Vice President', '4', '11-12-2015', NULL, '2015-12-11 06:55:41', '2015-12-11 06:55:41'),
(17, 8, 'President', '3', '11-12-2015', NULL, '2015-12-11 09:13:50', '2015-12-11 09:13:50'),
(22, 10, 'President', '4', '11-12-2015', NULL, '2015-12-11 09:28:36', '2015-12-11 09:28:36'),
(26, 14, 'President', '3', '11-12-2015', NULL, '2015-12-11 09:31:32', '2015-12-11 09:31:32'),
(29, 4, 'President', '3', '11-12-2015', NULL, '2015-12-11 09:46:28', '2015-12-11 09:46:28');

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE IF NOT EXISTS `downloads` (
  `id` int(10) unsigned NOT NULL,
  `members_id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `to` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `members_id`, `file`, `fullpath`, `to`, `active`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 12, '341-getviewprofile.12042015.pdf', 'downloads/341-getviewprofile.12042015.pdf', '', 'Publish', '04-12-2015', NULL, '2015-12-04 16:39:31', '2015-12-04 16:39:31'),
(2, 14, '324-This is the file for the batch of 11 session 2010-11.12052015.pdf', 'downloads/324-This is the file for the batch of 11 session 2010-11.12052015.pdf', '', 'Unpublish', '05-12-2015', NULL, '2015-12-05 01:16:04', '2015-12-05 01:16:04'),
(37, 11, 'This is the file for the batch of 11 session 2010-11.125829.pdf', 'downloads/This is the file for the batch of 11 session 2010-11.125829.pdf', '2000-2001', 'Publish', '10-12-2015', NULL, '2015-12-10 06:58:29', '2015-12-10 06:58:29'),
(38, 11, 'This is the file for the batch of 11 session 2010-11.125853.pdf', 'downloads/This is the file for the batch of 11 session 2010-11.125853.pdf', '2009-2010', 'Unpublish', '10-12-2015', NULL, '2015-12-10 06:58:53', '2015-12-10 06:58:53'),
(39, 1, 'This is the file for the batch of 11 session 2010-11.033557.pdf', 'downloads/This is the file for the batch of 11 session 2010-11.033557.pdf', '2000-2001', 'Unpublish', '11-12-2015', NULL, '2015-12-11 09:35:57', '2015-12-11 09:35:57');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(10) unsigned NOT NULL,
  `fullname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `qualification` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duty` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `linkedin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `website` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `online` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `enroll` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `fullname`, `email`, `password`, `password_temp`, `mobile`, `designation`, `qualification`, `duty`, `facebook`, `linkedin`, `website`, `file`, `fullpath`, `session`, `batch`, `online`, `code`, `active`, `enroll`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Md. Rokibul Islam Shagor', 'mostafiz.ru.ice11@gmail.com', '$2y$10$wlS1AoEew6VQrENVB5jox.x2lWmlr4.jFhDLbkxS2NXQB.nHmH4Pi', '', '01737818099', 'Associate Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '215-officia deserunt mollitofficia deserunt mollit.12102015.jpg', 'uploads/215-officia deserunt mollitofficia deserunt mollit.12102015.jpg', 'Not Assigned', '7', '0', 'pwYqmMxfzaN9xlSDj02EU39TF3nID35gKHcflgU91tViy6lY4qlJW9V4xyUW', '0', '11-12-2015', 'giBX3gPNdtEYigartoQRJktvl7JbR5svZiBMxTNnaLEqgMyOQAjdoTkDQX7Y', '2015-11-30 23:38:26', '2015-12-11 07:14:18'),
(2, 'officia deserunt mollit', 'mosta5617@gmail.com', '$2y$10$FENys/0tQV9EM60lJ4xuM.bunZBZNgIvEucZ34n6ZC8XWNxsUPRsG', '', '01737818099', 'Assistant Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '356-officia deserunt mollit.12102015.jpg', 'uploads/356-officia deserunt mollit.12102015.jpg', '2013-2014', '9', '0', '4SQyUUDrgFX8powZxf29cgdus8eA52ZNUlmW0jJk5b35X5OpIgm4VHjV3B8R', '0', '10-12-2015', 'U7ZRPMZ6pSJgjZFD469mvl0WKEYBmNKXwlLdajq3yEHwZ6t6VC0UTc3VVDw3', '2015-11-30 23:39:18', '2015-12-10 01:52:21'),
(3, 'officia deserunt mollit', 'mosta56s17@gmail.com', '$2y$10$fDt9y7WievScbTD8wDv9BelZyh1WNqj56TJuwD6ed0fFlqfv0ujR6', '', '01737818099', 'Assistant Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '177-officia deserunt mollit.12102015.jpg', 'uploads/177-officia deserunt mollit.12102015.jpg', '2013-2014', '9', '0', 'tsYygiBybXXZuTtDkUA2nTq2ERgwHdjyeq6rrgCsaGIrNcTkcvtmxbq9ClWN', '0', '10-12-2015', 'eSnZ5tWgAZ3ai3zvGsP5qsT1vW7uOrNcnJhVF1kyOPfKFM7OBbeSh7AKnP9K', '2015-11-30 23:39:37', '2015-12-10 01:51:25'),
(4, 'officia deserunt mollit', 'mostas56s17@gmail.com', '$2y$10$gD4DManHVQr8jHW63KS/5.fSki/MLlsVgJvINoauzF54rg.R6excC', '', '01737818099', 'Assistant Professor', 'B.Sc. Engineering in ICE', 'On Duty', 'http://localhost/Laravel/ICE/public/', 'http://localhost/Laravel/ICE/public/', 'http://localhost/Laravel/ICE/public/', '253-officia deserunt mollit.12102015.jpg', 'uploads/253-officia deserunt mollit.12102015.jpg', '2013-2014', '9', '0', 'ndL4FRnmx5xbmLvmgZlTnV0k8V84rksmWAAXofvokaeTmekj7u3e41ZhPEDW', '0', '10-12-2015', 'nZopuqhRL6HeIUz99UcXoOSUB30SMHY6DvDnaIen8wASyTt0rP0VlJCVgEIr', '2015-11-30 23:39:48', '2015-12-10 08:21:58'),
(5, 'officia deserunt mollit', 'mostafiza.ru.ice11@gmail.com', '$2y$10$R.V9LJjDi2ByQmcDgnF5s.2E96PIll8HQzqrsOlIzwZ6NO9vQsZkG', '', '01737818099', 'Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '153-officia deserunt mollit.12102015.png', 'uploads/153-officia deserunt mollit.12102015.png', 'Others', '10', '0', 'NKRBFuFU6jNvjUzkoM6SNgCM4i7pIkzBnYTS9F2a1rKyoWgfh96s1pF1ci5Q', '0', '10-12-2015', 'u2QvdFJIEwPGpqcobbdb3pnGNWXsYpXJT0z3GiwlEtTWdGaX2n9AWrXpwuxS', '2015-12-01 03:35:23', '2015-12-10 01:54:49'),
(6, 'officia deserunt mollit', 'mostasfiza.ru.ice11@gmail.com', '$2y$10$JoGjMg1cZDyR51fnE4XsfeSAxOB4WelOsBRcZJZOnQ8pElztgjOnW', '', '01737818099', 'Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '375-officia deserunt mollit.12102015.jpg', 'uploads/375-officia deserunt mollit.12102015.jpg', '2000-2001', '10', '0', 'FcClM7cbXI2vZD1xFBsvJ6oNsRCvA6VcvxDBKTjYf8XZuhOFIKTMrH9XKOmu', '0', '10-12-2015', 'QNkwSxcfA0vtXWl6JSzflqcVIp4NCnWkigv4oR00OqAJ9cDRYNUJ0DHaqr4G', '2015-12-01 03:35:53', '2015-12-10 01:59:41'),
(7, 'officia deserunt mollit', 'mosstasfiza.ru.ice11@gmail.com', '$2y$10$egbzIloNNnTFSBOb5jaTHu6QeiD3Oj1McwbokBHAalk0.59rcYACK', '', '01737818099', 'Professor', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '233-officia deserunt mollit.12102015.jpg', 'uploads/233-officia deserunt mollit.12102015.jpg', '2000-2001', '10', '0', 'VGEMFAZLJjOx9VnQZcWXCNbCD4Pv2pivhBoOPHwH6YEpeigIQRDVwFu0X9hw', '0', '10-12-2015', 'vAGw0UnyUu1IK02Lm3QiGU4V9LAIDjQQZTbz4cCRsOZ80nqImsFHr5lENwyI', '2015-12-01 03:36:05', '2015-12-10 05:38:45'),
(8, 'officia deserunt mollit', 'mosstssasfiza.ru.ice11@gmail.com', '$2y$10$nw8.Q.ts6vFX2sUB58FDD.4.eSExEPhjQeWxfSeJ3gZZS3V.59/zO', '', '01737818099', 'Lecturer', '', 'On Duty', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '202-officia deserunt mollit.12102015.jpg', 'uploads/202-officia deserunt mollit.12102015.jpg', '2000-2001', '12', '0', 'cSTrzoREiCSgeZazpJAh7whH2qyhI0ImW5vghTXjf6S3L20H1ejNl1jxD5FN', '0', '10-12-2015', 's8LfDDWzmPsb2oeMYcU64Mg6o2dqD0FwKQHLx58PlGs1KYBUlt2ClBkoBCPa', '2015-12-01 03:37:16', '2015-12-10 01:53:34'),
(9, 'officia deserunt mollit', 'mossa.ru.ice11@gmail.com', '$2y$10$yuQ9nyuvvqPqCjoAdvx16OuMIbyuIXDn3F8Hbw1uTDO/Xdkj2UbYO', '', '01737818099', 'Current Student', '', '', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '297-officia deserunt mollit.12102015.jpg', 'uploads/297-officia deserunt mollit.12102015.jpg', '2000-2001', '12', '0', 'f22Yz4NFpJnHyuiTwXalGT2x2dWVI6hBzPO0xXryg3SpiXddE4n40ueyYuvz', '0', '10-12-2015', 'G8ZXNvHDXVJQcxkzljCfLHO5RR4NFpa3B3StAKddXzTCJbyFurebsiPl21dP', '2015-12-01 03:37:30', '2015-12-10 01:53:03'),
(10, 'officia deserunt mollit', 'mosssa.ru.ice11@gmail.com', '$2y$10$J.4rsHS4T.kfBh7Yq2VkROi4HrmFJp0RgLHD09/zkM0ysnyeq6MTW', '', '01737818099', 'Former Student', '', '', 'http://localhost/Laravel/ICE/public/', '', 'http://localhost/Laravel/ICE/public/', '151-officia deserunt mollit.12102015.jpg', 'uploads/151-officia deserunt mollit.12102015.jpg', '2004-2005', '13', '0', 'fuE1wDQzNyAasAoUYP2scN7xnXOpRyMzXoqiKdWCoVbktSbcycCH4lDB644F', '0', '10-12-2015', 'cK1jzTPurOwpYlbCGE0hBphqgGPo88JDGIPtMid5SX7Pko7zRHcO09B0bYVa', '2015-12-01 03:37:48', '2015-12-10 01:55:21'),
(11, 'Md. Mostafijur Rahman', 'mostafiz.ru.ice110@gmail.com', '$2y$10$GRcdRMDa3I8fJvVAWr/FAeKvs6qnedr13xCZ4UPvb/8t64y9QTbum', '', '01737818099', 'Current StudentS', 'আমি জানি না আমার কি যোগ্যতা ', 'Student', 'http://localhost/Laravel/ICE/public/', 'http://localhost/Laravel/ICE/public/S', 'http://localhost/Laravel/ICE/public/', '418-Md. Mostafijur Rahman.12092015.jpg', 'uploads/418-Md. Mostafijur Rahman.12092015.jpg', '2009-2010', '7', '0', '5CKZyA93ocSWQYCu8sKmVBfMVLENdYQSh4XL5QEeOsyhHfDM3thR7z2C2h5p', '0', '09-12-2015', 'KZ3bpahL3Xj7HnHAnTMbxv8yV80pEjHnRFrelc5XoO2MiQ6Z1Xyx5KLsiyYs', '2015-12-01 10:46:28', '2015-12-10 11:39:37'),
(12, 'Md. Mostafijur Rahman', 'mostafiz9s.ru.ice11@gmail.com', '$2y$10$QNKcyuFKVaGAloUqMdthLuNQabEfjDSXI2ifFpJCV9yXdW.Xk8PEG', '', '01737818099', 'Employers', 'http://localhost/ICE/public/registration', 'On Duty', 'http://localhost/ICE/public/registration', 'http://localhost/ICE/public/registration', 'http://localhost/ICE/public/registration', '161-Md. Mostafijur Rahman.12032015.jpg', 'uploads/161-Md. Mostafijur Rahman.12032015.jpg', '2005-2006', '13', '0', 'YFLimEOfhlGRTel9LQL533XJuo85x722oodTrj7prnXvlbPqUm30GSPbIDkg', '0', '03-12-2015', 'J0ncYEpwCOldLtvnWWngaFxktrveh7CaRa7KksSKi5DdiKZ3azmEDXCJSw7K', '2015-12-03 05:50:31', '2015-12-05 07:51:43'),
(13, 'Md. Mostafijur Rahman', 'mosstasfizas.ru.ice11@gmail.com', '$2y$10$Y95oXQhIQBmLbGJgTSBUBeIqf4xowwAdn9JydK5c9X7Ru.YECI8ua', '', '01737818099', 'Officers', 'http://localhost/ICE/public/registration', 'On Leave', 'http://localhost/ICE/public/registration', 'http://localhost/ICE/public/registration', 'http://localhost/ICE/public/registration', '332-Md. Mostafijur Rahman.12032015.jpg', 'uploads/332-Md. Mostafijur Rahman.12032015.jpg', 'Others', '0', '0', 'aokLpgq8LRIGOGPBplGPEjjjEetHuHlQN08WT7ht30bqpIA1kRbsiZjSKatJ', '0', '03-12-2015', 'bvHCE2QEXbSPTksTGzVKbS9Kj4YX6jWufmnsy7d33RK3odiZLf8B4ron3NJ6', '2015-12-03 05:58:09', '2015-12-05 04:58:04'),
(14, 'md.abadul haque', 'rrubel00@gmail.com', '$2y$10$h1nDgh0zf.lbuY9V6/fy9u34ZlLO1fFxVV.zM0a7m61GPMbFJKCYG', '', '01731943115', 'Current Student', 'dl;fdsfdss', '', 'abadul_hfkdfkds', 'fdfds', 'fdsfsdf', '314-md.abadul haque.12052015.jpg', 'uploads/314-md.abadul haque.12052015.jpg', '2010-2011', '11', '0', 'X35Eh6bXA750bgkfN9fZh6XRV5sw6AFvgfvWYQWFRzze71UoRvJaxcufuypX', '0', '05-12-2015', 'LIcIUZ6bHVE0fTutO8lbwE0kGnIEQLbuLQGBvsdB8LozlefVSmv4gukJSU14', '2015-12-04 22:12:09', '2015-12-05 04:52:27');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_11_28_164557_members', 1),
('2015_12_02_140534_educational_background', 2),
('2015_12_02_141208_professional_experience', 3),
('2015_12_02_141446_field_of_interest', 4),
('2015_12_02_141637_publications', 5),
('2015_12_02_175437_status', 6),
('2015_12_04_223021_downloads', 7),
('2015_12_10_111649_message', 8);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
  `id` int(10) unsigned NOT NULL,
  `members_id` int(11) NOT NULL,
  `educational_background` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `professional_experience` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `field_of_interest` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `publications` varchar(8000) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fullpath` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `members_id`, `educational_background`, `professional_experience`, `field_of_interest`, `publications`, `file`, `fullpath`, `active`, `date`, `remember_token`, `created_at`, `updated_at`) VALUES
(19, 11, '<ul>\r\n	<li><strong>Dipankar Das,</strong> Mohammed Moshiul Hoque, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&ldquo;Attention control system considering the target person&#39;s attention level&rdquo;,</em> ACM/IEEE International Conference on Human-Robot Interaction, HRI&#39;13, Tokyo, Japan. pp. 111-112, March 03 - 06, 2013.</li>\r\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;An Integrated Approach of Attention Control of Target Human by Nonverbal Behdaviors of Robots in Different Viewing Situations&quot;</em>, IEEE/RSJ International Conference on Intelligent Robots and Systems, Vilamoura, Algarve, Portugal, pp. 1399-1406, &nbsp;October 7-12 (2012).</li>\r\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;Model for Controlling a Target Human&#39;s Attention in Multi-Party Settings&rdquo;</em>, IEEE International Symposium on Robot a</li>\r\n</ul>\r\n', '<p>dddsf</p>\r\n', '', '<ul>\n	<li><strong>Dipankar Das,</strong> Mohammed Moshiul Hoque, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&ldquo;Attention control system considering the target person&#39;s attention level&rdquo;,</em> ACM/IEEE International Conference on Human-Robot Interaction, HRI&#39;13, Tokyo, Japan. pp. 111-112, March 03 - 06, 2013.</li>\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;An Integrated Approach of Attention Control of Target Human by Nonverbal Behdaviors of Robots in Different Viewing Situations&quot;</em>, IEEE/RSJ International Conference on Intelligent Robots and Systems, Vilamoura, Algarve, Portugal, pp. 1399-1406, &nbsp;October 7-12 (2012).</li>\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;Model for Controlling a Target Human&#39;s Attention in Multi-Party Settings&rdquo;</em>, IEEE International Symposium on Robot a</li>\n	<li><strong>Dipankar Das,</strong> Mohammed Moshiul Hoque, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&ldquo;Attention control system considering the target person&#39;s attention level&rdquo;,</em> ACM/IEEE International Conference on Human-Robot Interaction, HRI&#39;13, Tokyo, Japan. pp. 111-112, March 03 - 06, 2013.</li>\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;An Integrated Approach of Attention Control of Target Human by Nonverbal Behdaviors of Robots in Different Viewing Situations&quot;</em>, IEEE/RSJ International Conference on Intelligent Robots and Systems, Vilamoura, Algarve, Portugal, pp. 1399-1406, &nbsp;October 7-12 (2012).</li>\n	<li>Mohammed Moshiul Hoque, <strong>Dipankar Das,</strong> Tomomi Onuki, Yoshinori Kobayashi, and Yoshinori Kuno, <em>&quot;Model for Controlling a Target Human&#39;s Attention in Multi-Party Settings&rdquo;</em>, IEEE International Symposium on Robot a</li>\n</ul>\n', '', '', '', '10-12-2015', NULL, '2015-12-04 09:48:14', '2015-12-04 09:48:14'),
(23, 9, '<p>hello</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '', '', '', '04-12-2015', NULL, '2015-12-04 12:00:29', '2015-12-04 12:00:29'),
(24, 1, '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex eacommodoconsequat. Duis aute irure dolor in reprehenderit in voluptate velit essecillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat nonproident, sunt in culpa qui officia deserunt mollit anim idest laborum.</p>\n\n<p>&nbsp;</p>\n', '<h1><span style="color:#00FF00">Hello this is performance</span></h1>\r\n\r\n<p>&nbsp;</p>\r\n', '<h1><span style="color:#D3D3D3"><span style="font-family:lucida sans unicode,lucida grande,sans-serif"><span style="font-size:14px"><span style="background-color:#ff0033">field_of_interest</span></span></span></span></h1>\r\n', '<h1><span style="color:#FFA500">publications</span></h1>\n', '', '', '', '10-12-2015', NULL, '2015-12-04 13:49:01', '2015-12-04 13:49:01'),
(25, 8, '<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas feugiat consequat diam. Maecenas metus. Vivamus diam purus, cursus a, commodo non, facilisis vitae, nulla. Aenean dictum lacinia tortor. Nunc iaculis, nibh non iaculis aliquam, orci felis euismod neque, sed ornare massa mauris sed velit. Nulla pretium mi et risus. Fusce mi pede, tempor id, cursus ac, ullamcorper nec, enim. Sed tortor. Curabitur molestie. Duis velit augue, condimentum at, ultrices a, luctus ut, orci. Donec pellentesque egestas eros. Integer cursus, augue in cursus faucibus, eros pede bibendum sem, in tempus tellus justo quis ligula. Etiam eget tortor. Vestibulum rutrum, est ut placerat elementum, lectus nisl aliquam velit, tempor aliquam eros nunc nonummy metus. In eros metus, gravida a, gravida sed, lobortis id, turpis. Ut ultrices, ipsum at venenatis fringilla, sem nulla lacinia tellus, eget aliquet turpis mauris non enim. Nam turpis. Suspendisse lacinia. Curabitur ac tortor ut ipsum egestas element', '', '', '', '', '', '', '04-12-2015', NULL, '2015-12-04 14:36:28', '2015-12-04 14:36:28'),
(26, 12, '<p>jani na</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', '', '', '210-getviewprofile.12042015.pdf', 'downloads/210-getviewprofile.12042015.pdf', '0', '04-12-2015', NULL, '2015-12-04 16:12:59', '2015-12-04 16:12:59'),
(27, 14, '<h1><em><span style="color:#FFA07A"><span style="font-family:tahoma,geneva,sans-serif">Hi</span></span></em></h1>\n', '', '', '', '', '', '', '05-12-2015', NULL, '2015-12-04 22:19:14', '2015-12-04 22:19:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `association_members`
--
ALTER TABLE `association_members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `members_email_unique` (`email`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `association_members`
--
ALTER TABLE `association_members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
