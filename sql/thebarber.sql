-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 24, 2022 at 05:17 PM
-- Server version: 8.0.28-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int NOT NULL,
  `custid` int NOT NULL,
  `services` int NOT NULL,
  `services2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `techid` int NOT NULL,
  `date` date NOT NULL,
  `thistime` time NOT NULL,
  `time` time NOT NULL,
  `services_time` int NOT NULL,
  `price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status_id` int NOT NULL,
  `disapprove` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `custid`, `services`, `services2`, `techid`, `date`, `thistime`, `time`, `services_time`, `price`, `description`, `status_id`, `disapprove`, `date_create`) VALUES
(31, 4, 12, '1', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'xfg', 1, '1', '2022-02-24 16:53:25'),
(32, 4, 12, '12', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'ddd', 1, '1', '2022-02-24 16:55:29'),
(33, 4, 12, '1', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'ss', 1, '1', '2022-02-24 17:03:56'),
(34, 4, 12, '', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'ds', 1, '1', '2022-02-24 17:05:44'),
(35, 4, 12, '', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'sdf', 1, '1', '2022-02-24 17:07:04'),
(36, 4, 12, '', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'กดหด', 1, '1', '2022-02-24 17:07:58'),
(37, 4, 12, '12', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'xfg', 1, '1', '2022-02-24 17:08:22'),
(38, 4, 12, 'null', 1, '2022-02-10', '14:44:55', '18:44:55', 45, '254', 'ss', 1, '1', '2022-02-24 17:09:35'),
(39, 4, 12, 'null', 26, '2022-02-27', '14:44:55', '18:44:55', 45, '254', 'dsf', 1, '1', '2022-02-24 17:10:37'),
(40, 4, 12, 'null', 26, '2022-02-26', '00:35:00', '01:20:00', 45, '120', 'sdf', 1, '1', '2022-02-24 17:11:31'),
(41, 4, 12, '12', 25, '2022-02-26', '17:40:00', '19:10:00', 90, '240', '', 1, '1', '2022-02-24 17:16:58'),
(42, 4, 13, 'null', 26, '2022-03-03', '09:00:00', '09:20:00', 20, '100', '', 1, '1', '2022-02-24 17:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `linetoken`
--

CREATE TABLE `linetoken` (
  `id` int NOT NULL,
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `date_token` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `linetoken`
--

INSERT INTO `linetoken` (`id`, `token`, `date_token`) VALUES
(1, 'pafntcF5D8ZSuPqGPwMwcd6UFJNJyLDNxgOBvcKr0CJ', '2020-11-27 11:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int NOT NULL,
  `s_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_price` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `s_time` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `s_name`, `s_price`, `s_time`) VALUES
(2, 'Undercut', '160', 45),
(12, 'รองทรง', '120', 45),
(13, 'สระ', '100', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int NOT NULL,
  `fullname` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `useremail` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `regdate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `role_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `fullname`, `username`, `useremail`, `tel`, `password`, `regdate`, `role_id`) VALUES
(4, 'admin', 'admin', 'natee@gmail.com', '0898087753', 'e10adc3949ba59abbe56e057f20f883e', '2021-04-01 08:59:53', 1),
(11, 'ทดสอบ', 'test', 'natee@gmail.com', '0884607003', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-13 08:58:19', 0),
(25, 'ช่าง 1', 'tech1', 'tech1@gmail.com', '999', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-13 08:54:57', 2),
(26, 'ช่าง 2', 'tech2', 'tech2@gmail.com', '999', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-13 08:54:57', 2),
(27, 'ช่าง 3', 'tech3', 'tech3@gmail.com', '123456', 'e10adc3949ba59abbe56e057f20f883e', '2021-03-26 03:34:19', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `linetoken`
--
ALTER TABLE `linetoken`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `linetoken`
--
ALTER TABLE `linetoken`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
