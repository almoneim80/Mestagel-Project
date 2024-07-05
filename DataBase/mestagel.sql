-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 يناير 2023 الساعة 19:29
-- إصدار الخادم: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mestagel`
--

-- --------------------------------------------------------

--
-- بنية الجدول `alsalam_orders`
--

CREATE TABLE `alsalam_orders` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `pickup_time` datetime NOT NULL,
  `cafeteria_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `alsalam_orders`
--

INSERT INTO `alsalam_orders` (`id`, `name`, `price`, `description`, `pickup_time`, `cafeteria_name`) VALUES
(7, 'برجر دجاج', 10, 'خبز البرقر الطري مع قطعة البرجر وشرائح الطماطموالبصل والخس والصوص الخاص', '2023-01-26 21:12:00', 'كافتريا السلام');

-- --------------------------------------------------------

--
-- بنية الجدول `alwasam_orders`
--

CREATE TABLE `alwasam_orders` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `pickup_time` datetime NOT NULL,
  `cafeteria_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `alwasam_orders`
--

INSERT INTO `alwasam_orders` (`id`, `name`, `price`, `description`, `pickup_time`, `cafeteria_name`) VALUES
(2, 'ماء', 1, 'ماء', '2023-01-27 21:13:00', 'كافتريا الوسام');

-- --------------------------------------------------------

--
-- بنية الجدول `collage_coffee`
--

CREATE TABLE `collage_coffee` (
  `id` int(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `price` int(100) NOT NULL,
  `description` text CHARACTER SET utf8 NOT NULL,
  `pickup_time` datetime NOT NULL,
  `cafeteria_name` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- بنية الجدول `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- إرجاع أو استيراد بيانات الجدول `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `image`) VALUES
(5, 'u2@gmail.com', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alsalam_orders`
--
ALTER TABLE `alsalam_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alwasam_orders`
--
ALTER TABLE `alwasam_orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collage_coffee`
--
ALTER TABLE `collage_coffee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alsalam_orders`
--
ALTER TABLE `alsalam_orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `alwasam_orders`
--
ALTER TABLE `alwasam_orders`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `collage_coffee`
--
ALTER TABLE `collage_coffee`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
