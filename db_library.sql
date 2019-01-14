-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2019 at 11:39 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(12) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` text NOT NULL,
  `writer` varchar(50) NOT NULL,
  `image` varchar(80) NOT NULL,
  `stock` int(12) NOT NULL,
  `borrowed` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `description`, `writer`, `image`, `stock`, `borrowed`, `created_at`, `updated_at`) VALUES
(1, 'Berteduhlah di Taman Hati', 'Buku penyejuk hati', 'Dr. Aidh Al Qarni', 'none', 2, 0, '2019-01-14 10:10:34', '0000-00-00 00:00:00'),
(2, 'Al-Quran', 'Petunjuk Hidup Umat Manusia', '', '', 3, 2, '2019-01-14 10:34:28', '0000-00-00 00:00:00'),
(3, 'Fihi Ma Fihi', 'Karangan Jalaluddin Rumi', '', '', 3, 0, '2019-01-14 07:27:31', '0000-00-00 00:00:00'),
(4, 'The Art of War', 'With many valuable life lessons', '', '', 1, 1, '2019-01-14 10:01:54', '0000-00-00 00:00:00'),
(5, 'Buya Hamka, Ulama Teladan Umat', 'Buku inspiratif', '', '', 3, 1, '2019-01-14 10:05:24', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `borrows`
--

CREATE TABLE `borrows` (
  `id` int(12) NOT NULL,
  `user_id` int(12) NOT NULL,
  `book_id` int(12) NOT NULL,
  `borrow_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `return_time` datetime NOT NULL,
  `returned_time` datetime DEFAULT NULL,
  `fine` int(12) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrows`
--

INSERT INTO `borrows` (`id`, `user_id`, `book_id`, `borrow_time`, `return_time`, `returned_time`, `fine`, `created_at`, `updated_at`) VALUES
(9, 1, 1, '2019-01-14 09:55:52', '2019-01-21 10:50:04', '2019-01-17 17:00:00', 0, '2019-01-14 09:55:52', '0000-00-00 00:00:00'),
(10, 3, 2, '2019-01-14 10:38:48', '2019-01-21 10:55:27', NULL, 0, '2019-01-14 10:38:48', '0000-00-00 00:00:00'),
(11, 4, 5, '2019-01-14 09:59:57', '2019-01-21 10:59:47', '2019-01-17 17:00:00', 0, '2019-01-14 09:59:57', '0000-00-00 00:00:00'),
(12, 4, 4, '2019-01-14 10:05:09', '2019-01-21 11:01:54', '2019-01-17 17:00:00', 0, '2019-01-14 10:05:09', '0000-00-00 00:00:00'),
(13, 1, 5, '2019-01-14 10:05:36', '2019-01-21 11:05:24', '2019-01-17 17:00:00', 0, '2019-01-14 10:05:36', '0000-00-00 00:00:00'),
(14, 3, 1, '2019-01-14 10:10:20', '2019-01-21 11:06:51', '2019-01-17 17:00:00', 0, '2019-01-14 10:10:20', '0000-00-00 00:00:00'),
(15, 1, 2, '2019-01-14 10:34:27', '2019-01-21 11:34:27', NULL, 0, '2019-01-14 10:34:27', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Fulan', 'fulan', 'fulan', '2019-01-14 06:56:52', '0000-00-00 00:00:00'),
(3, 'Ahmad', 'ahmad', '', '2019-01-14 07:17:08', '0000-00-00 00:00:00'),
(4, 'Hijaz', 'hijaz', '', '2019-01-14 09:57:14', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrows`
--
ALTER TABLE `borrows`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `borrows`
--
ALTER TABLE `borrows`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
