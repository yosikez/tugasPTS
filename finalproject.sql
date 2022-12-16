-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 10:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `fullname` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `about` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `job` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `organization` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `fullname`, `username`, `password`, `about`, `avatar`, `address`, `job`, `organization`, `created_at`, `updated_at`) VALUES
(1, 'Yosi Kesuma', 'ykz', '1234', 'seorang manusia', NULL, 'karawang', 'pelajar', 'technopark', '2022-12-13 02:10:43', '2022-12-13 02:39:38'),
(2, 'kesuma', 'kzm', '$2y$10$sQ/8jgGSfeCbPID1TyNOeur31jOxMe0Bs1ETCdegQckiOnDmcgrvu', NULL, NULL, NULL, NULL, NULL, '2022-12-13 02:22:14', NULL),
(4, 'YoK', 'yok', '$2y$10$3J/E.Nwixj372g4HgBRWEeSK17.TDwuZp53UnKamuLIKj9ky31k62', NULL, NULL, NULL, NULL, NULL, '2022-12-13 02:43:16', NULL),
(5, 'bary', 'baru', '$2y$10$0Da5L5Mz9DXn6CZHzXxIlO7Pv9XoxNAfbYV5W8OjKxDJemCapyYPy', NULL, NULL, NULL, NULL, NULL, '2022-12-14 12:29:27', NULL),
(6, 'bary', 'baru', '$2y$10$xjVmhsiuuSBU0.vAEiFxt.qt.scYVtxBDHHuQkOmYGPBYxNdJPO/K', NULL, NULL, NULL, NULL, NULL, '2022-12-14 12:33:35', NULL),
(7, '123333', '123333', '$2y$10$HyNPHMjL36MsTpZMJUzEiuDHs3fCMWr3XJh2jZsYieC8HlxRqXZHe', '123', '', '123', '123', '123', '2022-12-14 12:46:24', '2022-12-15 05:52:41'),
(8, 'qwe', 'qwe', '$2y$10$gKopcvptgvdJpVrf7wANCO/kIsoUO9fb5rEtH.uUuXQdzDA.8y4ai', '123', NULL, NULL, NULL, NULL, '2022-12-14 13:43:46', '2022-12-14 22:00:11'),
(9, 'as3', 'as213123123', '$2y$10$U3w4B1CbfezZ17G7E3vEM.3XkHK7wrZ74vtcJ2jeau1JjMa0CDE7G', '123', '', '123', '123', '132', '2022-12-15 05:56:42', '2022-12-15 06:00:24'),
(10, 'Monkey', 'Luffy', '$2y$10$707.T4vo1y2OygEVkceREOa1n9RZuyFDIn1kFYffXeh1ZgLicUMRS', 'The series focuses on Monkey D. Luffy, a young man made of rubber, who, inspired by his childhood idol, the powerful pirate Red-Haired Shanks, sets off on a journey from the East Blue Sea to find the mythical treasure, the One Piece, and proclaim himself the King of the Pirates.', '9e044ea0ed5817381b189680f392bafe', 'South', 'Pirate', 'SHP', '2022-12-15 06:00:48', '2022-12-16 01:13:07'),
(11, 'zxc', 'zxc', '$2y$10$UvhqpguUj4crwDy74vVhyu1T/WvD.dqgHqaNBvANDjfDBK/LGMluG', NULL, NULL, NULL, NULL, NULL, '2022-12-15 09:20:29', NULL),
(12, 'daus', 'daus', '$2y$10$l1YxI3prqnAZmHGGthgODOda2e7pIEUfDz3F.9brl.pR9jrADY5DW', 'asfd', '85f10d5c3e54c4ab7e961e9f13b0ff24', 'asdf', 'asdf', 'asd', '2022-12-16 07:07:19', '2022-12-16 07:07:40'),
(13, 'baru', 'baru', '$2y$10$NDqPJ5QADshT94utyHH0e.yTGr294MScjHoUFZGesac2wGU9/0ixm', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:16:23', NULL),
(14, '123', '123', '$2y$10$3inIq0MRxITcaal9Dih4MekQxTherSWYHs9SXi6rMRKrBKy9ewhTW', 'data diri', 'c0a59c73b3497c8886313dee717c561f', '123', '123', '123', '2022-12-16 07:16:52', '2022-12-16 07:19:48'),
(15, 'asd', 'asd', '$2y$10$5hWAy12aMisQ9bmG/bUSkub3bn4o/.Sfo3ExQOdcsB2ljD2MoVuCq', NULL, NULL, NULL, NULL, NULL, '2022-12-16 07:21:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `answer` text COLLATE utf8_unicode_ci NOT NULL,
  `image_ans` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `user_id`, `question_id`, `answer`, `image_ans`, `verified`, `created_at`, `updated_at`) VALUES
(5, 2, 30, 'caranya adalah dengan menhancurkannya jadi satu', NULL, NULL, '2022-12-15 01:09:58', NULL),
(9, 7, 30, 'jawaban dengan menggunakan modal', NULL, NULL, '2022-12-15 01:54:21', NULL),
(10, 7, 30, 'Jawaban baru', NULL, NULL, '2022-12-15 01:55:13', NULL),
(11, 7, 30, 'Hei Kamuuu', NULL, NULL, '2022-12-15 01:56:36', NULL),
(13, 7, 31, 'Jawaban baru', NULL, NULL, '2022-12-15 02:07:51', NULL),
(14, 7, 31, 'Namamamamam', NULL, NULL, '2022-12-15 02:32:12', NULL),
(15, 7, 31, 'Dengan menggunakanan beberapa cara mungkin akan berhasil', NULL, NULL, '2022-12-15 03:32:03', NULL),
(16, 7, 33, 'Caranya adalah\r\n', NULL, NULL, '2022-12-15 03:35:20', NULL),
(17, 10, 49, '123123132', NULL, NULL, '2022-12-15 07:00:30', NULL),
(18, 10, 60, 'Itu Ada salah pada bagian akhirnya', NULL, NULL, '2022-12-15 07:28:48', NULL),
(19, 10, 60, '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '2022-12-15 07:57:11', NULL),
(20, 10, 60, '123123123', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '2022-12-15 07:58:15', NULL),
(31, 10, 30, '123', NULL, NULL, '2022-12-15 09:05:35', NULL),
(32, 10, 30, '123asdfzxcv', NULL, NULL, '2022-12-15 09:05:52', NULL),
(33, 10, 30, '123213', 'a9a17c0011bb38593f2a0032b144473d', NULL, '2022-12-15 09:06:30', NULL),
(34, 10, 30, 'Jawaban tanpa gambar', 'd41d8cd98f00b204e9800998ecf8427e', NULL, '2022-12-15 09:06:49', NULL),
(35, 10, 30, 'qwerqewrqwerqewr', NULL, NULL, '2022-12-15 09:15:02', NULL),
(36, 10, 30, 'gfghjfghjfghj', '4acad6f8102f3cfadef54ea3f4d528c0', NULL, '2022-12-15 09:15:25', NULL),
(37, 11, 31, 'hmmm menarik', NULL, NULL, '2022-12-15 09:21:56', NULL),
(41, 10, 60, 'Jawabannya adalah dengan menggunakan file input', 'd2b468a213a8270827af768567c81437', NULL, '2022-12-15 23:36:18', NULL),
(42, 10, 60, 'jawaban terbaru', NULL, NULL, '2022-12-15 23:36:34', NULL),
(45, 10, 65, 'KOosng', NULL, NULL, '2022-12-15 23:54:35', NULL),
(46, 10, 50, 'Jawabannya adalah dengan menggunakan lem biru', NULL, NULL, '2022-12-15 23:56:02', NULL),
(47, 10, 50, '', NULL, NULL, '2022-12-15 23:57:26', NULL),
(48, 10, 65, 'Baru', 'd2b468a213a8270827af768567c81437', NULL, '2022-12-16 00:08:40', NULL),
(49, 10, 50, 'Jawaban baru', NULL, NULL, '2022-12-16 00:09:24', NULL),
(50, 10, 48, 'Jawabannya adalah hal baru\r\n', NULL, NULL, '2022-12-16 00:11:03', NULL),
(51, 10, 67, 'Jawabannya adalah', '0e6c8be9a80f27bb69bcc17a44a2245d', NULL, '2022-12-16 01:17:01', NULL),
(54, 10, 68, 'Jawaban terbaruuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuuu', 'e7935685ef50f062ed4e7008ab8c400e', NULL, '2022-12-16 02:20:27', NULL),
(55, 10, 73, 'saf', '0e6c8be9a80f27bb69bcc17a44a2245d', NULL, '2022-12-16 03:45:25', NULL),
(56, 10, 77, 'asdfasdfadsf', '85f10d5c3e54c4ab7e961e9f13b0ff24', NULL, '2022-12-16 06:51:38', NULL),
(58, 15, 80, 'asd', '3e5436b4866b1c019f9576ca46a21f1a', NULL, '2022-12-16 07:21:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `question_id` int(11) DEFAULT NULL,
  `answer_id` int(11) DEFAULT NULL,
  `comment_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `question_id`, `answer_id`, `comment_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(29, 30, NULL, NULL, 2, 'Anda waras?', '2022-12-15 02:09:33', NULL),
(30, 30, NULL, NULL, 6, 'agaga', '2022-12-15 02:12:35', NULL),
(31, 30, NULL, NULL, 7, 'Comment dari modal', '2022-12-15 02:26:18', NULL),
(32, 30, NULL, NULL, 7, 'jjj', '2022-12-15 02:27:23', NULL),
(33, 31, NULL, NULL, 7, 'hit your head', '2022-12-15 02:33:00', NULL),
(34, NULL, NULL, NULL, 7, 'Bugg', '2022-12-15 03:26:15', NULL),
(35, NULL, NULL, NULL, 7, '123', '2022-12-15 03:26:29', NULL),
(36, 31, NULL, NULL, 7, '123', '2022-12-15 03:27:08', NULL),
(37, 33, NULL, NULL, 7, 'cara apa?\r\n', '2022-12-15 03:35:06', NULL),
(38, NULL, NULL, 34, 8, 'qwertyuio', '2022-12-15 03:51:05', NULL),
(39, NULL, NULL, 32, 8, '12312312312', '2022-12-15 03:52:48', NULL),
(40, NULL, NULL, 37, 2, 'ini balasan dari \"cara apa?\"', '2022-12-15 03:56:10', NULL),
(41, 49, NULL, NULL, 10, '123123123', '2022-12-15 07:00:36', NULL),
(42, 60, NULL, NULL, 10, 'Fotonya kurang Jelas', '2022-12-15 07:28:21', NULL),
(45, 30, NULL, NULL, 10, 'kenapa seperti itu?\r\n', '2022-12-15 09:15:58', NULL),
(46, 30, NULL, NULL, 11, 'Comment dari akun baru\r\n', '2022-12-15 09:21:13', NULL),
(47, 31, NULL, NULL, 11, 'ckckckckckckck', '2022-12-15 09:22:10', NULL),
(50, 30, NULL, NULL, 11, 'Yosi Kesuma\r\n', '2022-12-15 12:57:41', NULL),
(90, NULL, NULL, 50, 10, 'Reply Comment dengan ajax', '2022-12-15 14:51:31', NULL),
(91, NULL, NULL, 46, 10, 'balasan untuk zxc dengan fitur reply', '2022-12-15 15:05:57', NULL),
(92, NULL, NULL, 91, 10, 'asdfasdf', '2022-12-15 15:06:11', NULL),
(93, NULL, NULL, 45, 10, 'Karena memang begitu', '2022-12-15 15:06:27', NULL),
(94, NULL, NULL, 45, 10, 'Begitulah kawan', '2022-12-15 15:06:42', NULL),
(95, NULL, NULL, 93, 10, '1234', '2022-12-15 15:07:09', NULL),
(96, NULL, NULL, 90, 10, 'asdfa', '2022-12-15 15:19:22', NULL),
(97, NULL, NULL, 90, 10, 'asdfa', '2022-12-15 15:19:24', NULL),
(98, NULL, NULL, 39, 10, 'asdf', '2022-12-15 15:19:35', NULL),
(99, NULL, NULL, 45, 10, 'ya begitu', '2022-12-15 15:24:34', NULL),
(100, NULL, NULL, 99, 10, 'asd', '2022-12-15 15:27:16', NULL),
(101, NULL, NULL, 99, 10, 'asdfasdf', '2022-12-15 15:32:19', NULL),
(102, NULL, NULL, 99, 10, 'asdfasdf', '2022-12-15 15:32:20', NULL),
(104, 65, NULL, NULL, 1, 'Test Nested Comment', '2022-12-15 15:33:38', '2022-12-15 15:34:14'),
(105, NULL, NULL, 104, 10, 'asdasd', '2022-12-15 15:34:22', NULL),
(106, NULL, NULL, 105, 10, 'asdas', '2022-12-15 15:34:29', NULL),
(107, NULL, NULL, 106, 10, 'asdas', '2022-12-15 15:34:37', NULL),
(108, NULL, NULL, 107, 10, 'zxc', '2022-12-15 15:34:44', NULL),
(112, NULL, NULL, 105, 10, 'mematikan preventdefault', '2022-12-15 15:57:59', NULL),
(114, NULL, NULL, 105, 10, 'reply baru', '2022-12-15 16:02:03', NULL),
(115, NULL, NULL, 105, 10, 'reply dari reply pertama', '2022-12-15 16:02:29', NULL),
(116, 65, NULL, NULL, 1, 'v', '2022-12-15 16:03:21', NULL),
(117, NULL, NULL, 116, 10, 'asdfd', '2022-12-15 16:03:41', NULL),
(118, NULL, NULL, 117, 10, 'asf', '2022-12-15 16:03:54', NULL),
(119, NULL, NULL, 118, 10, 'asdf', '2022-12-15 16:04:05', NULL),
(120, NULL, NULL, 41, 10, 'Yosi', '2022-12-15 16:12:30', NULL),
(121, NULL, NULL, 41, 10, 'asd', '2022-12-15 16:12:38', NULL),
(122, NULL, NULL, 41, 10, 'asdass', '2022-12-15 16:12:52', NULL),
(123, NULL, NULL, 41, 10, 'asd', '2022-12-15 16:13:02', NULL),
(124, NULL, NULL, 121, 10, 'nnnnn', '2022-12-15 16:13:46', NULL),
(125, NULL, NULL, 120, 10, 'sdf', '2022-12-15 16:17:32', NULL),
(126, NULL, NULL, 125, 10, '', '2022-12-15 16:29:12', NULL),
(127, NULL, NULL, 120, 10, 'qweqwe', '2022-12-15 16:29:58', NULL),
(128, NULL, NULL, 120, 10, 'asd', '2022-12-15 16:30:43', NULL),
(129, NULL, NULL, 41, 10, 'sdfsdf', '2022-12-15 16:43:23', NULL),
(131, NULL, NULL, 42, 10, 'Memang aga kurang jelas', '2022-12-15 16:44:41', NULL),
(132, NULL, NULL, 131, 10, 'Begitulah Hidup', '2022-12-15 16:48:57', NULL),
(133, NULL, NULL, 131, 10, 'kemana?', '2022-12-15 16:51:11', NULL),
(134, NULL, NULL, 42, 10, 'asdf', '2022-12-15 16:51:39', NULL),
(135, NULL, NULL, 42, 10, 'asdf', '2022-12-15 16:51:42', NULL),
(136, NULL, NULL, 135, 10, 'begitu ya', '2022-12-15 16:52:03', NULL),
(137, NULL, NULL, 131, 10, 'asdf', '2022-12-15 17:02:35', NULL),
(138, NULL, NULL, 131, 10, 'asdf', '2022-12-15 17:02:43', NULL),
(139, NULL, NULL, 42, 10, 'seperti itu', '2022-12-15 23:35:39', NULL),
(147, 50, NULL, NULL, 10, 'Fotonya kenapa itu bang', '2022-12-15 23:55:43', NULL),
(148, 48, NULL, NULL, 10, 'Kemana itu bang?', '2022-12-16 00:10:45', NULL),
(149, 65, NULL, NULL, 10, 'Mantap Boi\r\n', '2022-12-16 01:12:38', NULL),
(150, 67, NULL, NULL, 10, 'Masalahnya apa?', '2022-12-16 01:16:49', NULL),
(155, 68, NULL, NULL, 10, 'Comment Baru', '2022-12-16 02:19:21', NULL),
(156, NULL, NULL, 155, 10, 'Benarkah?', '2022-12-16 02:19:30', NULL),
(157, 68, NULL, NULL, 10, 'Benar', '2022-12-16 02:19:39', NULL),
(158, NULL, NULL, 155, 10, 'Kemana', '2022-12-16 02:19:49', NULL),
(159, 73, NULL, NULL, 10, 'Kemana', '2022-12-16 03:45:34', NULL),
(160, NULL, NULL, 159, 10, 'Kesini', '2022-12-16 03:45:40', NULL),
(161, 75, NULL, NULL, 10, 'asdf', '2022-12-16 06:06:07', NULL),
(162, NULL, NULL, 161, 10, 'asdf', '2022-12-16 06:06:32', NULL),
(163, NULL, NULL, 161, 10, 'asdfddd', '2022-12-16 06:06:46', NULL),
(178, 76, NULL, NULL, 10, 'asdf', '2022-12-16 06:28:57', NULL),
(179, NULL, NULL, 178, 10, 'wrwer', '2022-12-16 06:29:31', NULL),
(180, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:29:45', NULL),
(181, NULL, NULL, 178, 10, 'asfasfd', '2022-12-16 06:29:57', NULL),
(182, NULL, NULL, 178, 10, 'Reply hbaru', '2022-12-16 06:30:07', NULL),
(183, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:32:44', NULL),
(184, NULL, NULL, 178, 10, 'success ajax', '2022-12-16 06:32:54', NULL),
(185, NULL, NULL, 184, 10, 'baruu bang', '2022-12-16 06:33:04', NULL),
(186, NULL, NULL, 184, 10, 'baruu bang', '2022-12-16 06:33:06', NULL),
(187, NULL, NULL, 184, 10, 'baruu bang', '2022-12-16 06:33:07', NULL),
(188, NULL, NULL, 184, 10, 'baruu bang', '2022-12-16 06:33:07', NULL),
(189, NULL, NULL, 184, 10, 'baruu bang', '2022-12-16 06:33:07', NULL),
(190, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:33:18', NULL),
(191, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:33:19', NULL),
(192, NULL, NULL, 178, 10, 'baru', '2022-12-16 06:33:29', NULL),
(193, NULL, NULL, 178, 10, 'baruasdfsadfas', '2022-12-16 06:33:38', NULL),
(194, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:34:01', NULL),
(195, NULL, NULL, 194, 10, 'asdf', '2022-12-16 06:34:10', NULL),
(196, NULL, NULL, 178, 10, 'asdf', '2022-12-16 06:34:33', NULL),
(197, NULL, NULL, 178, 10, 'asdas', '2022-12-16 06:35:31', NULL),
(198, NULL, NULL, 196, 10, 'asdasasd', '2022-12-16 06:35:39', NULL),
(199, 77, NULL, NULL, 10, 'asdf', '2022-12-16 06:36:10', NULL),
(200, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:36:13', NULL),
(201, NULL, NULL, 200, 10, 'asdf', '2022-12-16 06:36:17', NULL),
(202, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:38:13', NULL),
(203, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:38:15', NULL),
(204, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:38:15', NULL),
(205, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:39:48', NULL),
(206, NULL, NULL, 199, 10, 'asdf', '2022-12-16 06:40:24', NULL),
(207, 74, NULL, NULL, 10, 'asdf', '2022-12-16 06:43:01', NULL),
(208, NULL, NULL, 207, 10, 'asd', '2022-12-16 06:43:04', NULL),
(209, NULL, NULL, 207, 10, 'asd', '2022-12-16 06:43:11', NULL),
(210, NULL, NULL, 207, 10, 'asd', '2022-12-16 06:45:39', NULL),
(211, NULL, NULL, 210, 10, 'asdf', '2022-12-16 06:45:43', NULL),
(212, NULL, NULL, 199, 10, 'qwe', '2022-12-16 07:03:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `descriptions` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `image_question` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `descriptions`, `code`, `image_question`, `created_at`, `updated_at`) VALUES
(30, 7, 'Gula Pasir', 'Bagaimana cara menghitung jumlah butiran gula pasir', '', NULL, '2022-12-14 23:39:14', NULL),
(31, 7, 'Brains', 'How to reset the brain', '', NULL, '2022-12-14 23:55:56', NULL),
(32, 7, 'Kemana perginya bulan?', 'Adaa dimana kah dia', 'maslaah hifup', NULL, '2022-12-15 00:23:57', NULL),
(33, 7, 'Mencari cara', 'Sungguh hebat', '<i class=\'bx bx-question-mark\'></i>', NULL, '2022-12-15 03:34:08', NULL),
(48, 7, '13', '123', '123', 'a9a17c0011bb38593f2a0032b144473d', '2022-12-15 04:46:13', NULL),
(49, 10, 'Question Luffy', 'Hhhhhh', 'sdsdfsdfsdf', '6a133d2eee23005fea650db549f822cc', '2022-12-15 06:16:31', NULL),
(50, 10, 'JJJJJ', 'JJJJJJ', 'JJJJJJ', 'd41d8cd98f00b204e9800998ecf8427e', '2022-12-15 07:11:42', NULL),
(51, 10, '123', '123', '12', '6a133d2eee23005fea650db549f822cc', '2022-12-15 07:12:02', NULL),
(52, 10, '123', '123', '12', '6a133d2eee23005fea650db549f822cc', '2022-12-15 07:12:02', NULL),
(59, 10, 'Bagaimana cara melakukan sesuatu', 'Pada masalah sebelumnnya yaitu masalahnya yang menyeramkan', 'hhhhhhhhhh', '0e6c8be9a80f27bb69bcc17a44a2245d', '2022-12-15 07:25:28', NULL),
(60, 10, 'Bagaimana cara melakukan sesuatu', 'Pada masalah sebelumnnya yaitu masalahnya yang menyeramkan', 'hhhhhhhhhh', '0e6c8be9a80f27bb69bcc17a44a2245d', '2022-12-15 07:25:37', NULL),
(65, 10, 'Baru', 'Deskripsi Baru tes komen', '', '4acad6f8102f3cfadef54ea3f4d528c0', '2022-12-15 15:32:57', NULL),
(67, 10, 'Pertanyaan baru', 'Pertanyaan baru', 'pertanyaan baru', 'e7935685ef50f062ed4e7008ab8c400e', '2022-12-16 01:16:37', NULL),
(68, 10, 'Cara agar bisa terbang?', 'Saya memiliki beberapa masalah pada saat akan mzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzakan jadinya takut mati', 'zzzzzzzzzzzzzzzzzzzzzzzz', NULL, '2022-12-16 01:22:46', '2022-12-16 02:19:09'),
(71, 10, 'asdasd', 'asdasdasdasdasdasdas', 'maslaah hifup', '0e6c8be9a80f27bb69bcc17a44a2245d', '2022-12-16 03:40:09', NULL),
(72, 10, 'qwer', 'qwer', 'qwer', '9e044ea0ed5817381b189680f392bafe', '2022-12-16 03:44:25', NULL),
(73, 10, 'asd', 'sd', '<i class=\'bx bx-question-mark\'></i>', NULL, '2022-12-16 03:45:08', '2022-12-16 03:55:55'),
(74, 10, 'Test Disable Option', 'Test Disable', 'Test', NULL, '2022-12-16 04:28:12', '2022-12-16 04:28:38'),
(75, 10, 'sdf', 'sdf', 'sdf', '1efc4dd71aa6a3aca59fe0817cf5c8b0', '2022-12-16 06:05:58', NULL),
(76, 10, 'Baru', 'Baru', 'asdfasdf', '0e6c8be9a80f27bb69bcc17a44a2245d', '2022-12-16 06:25:55', NULL),
(77, 10, 'asdf', 'asdfasdf', 'asdf', NULL, '2022-12-16 06:36:05', '2022-12-16 06:51:27'),
(78, 12, 'feqewr', 'qewrqwer', 'qwer', '7825447a14324fc666847c4021c5b05b', '2022-12-16 07:08:01', NULL),
(80, 14, 'qwer', 'qwer', 'qwer', '85f10d5c3e54c4ab7e961e9f13b0ff24', '2022-12-16 07:20:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `question_tags`
--

CREATE TABLE `question_tags` (
  `id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `question_tags`
--

INSERT INTO `question_tags` (`id`, `question_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(38, 30, 1, '2022-12-14 23:39:14', NULL),
(39, 30, 3, '2022-12-14 23:39:14', NULL),
(40, 31, 1, '2022-12-14 23:55:56', NULL),
(41, 31, 3, '2022-12-14 23:55:56', NULL),
(42, 32, 1, '2022-12-15 00:23:57', NULL),
(43, 32, 3, '2022-12-15 00:23:57', NULL),
(44, 33, 1, '2022-12-15 03:34:08', NULL),
(45, 33, 3, '2022-12-15 03:34:08', NULL),
(68, 48, 1, '2022-12-15 04:46:13', NULL),
(69, 48, 2, '2022-12-15 04:46:13', NULL),
(70, 48, 3, '2022-12-15 04:46:13', NULL),
(71, 48, 4, '2022-12-15 04:46:13', NULL),
(72, 49, 2, '2022-12-15 06:16:31', NULL),
(73, 49, 3, '2022-12-15 06:16:31', NULL),
(74, 50, 1, '2022-12-15 07:11:43', NULL),
(75, 50, 2, '2022-12-15 07:11:43', NULL),
(76, 50, 3, '2022-12-15 07:11:43', NULL),
(77, 51, 2, '2022-12-15 07:12:02', NULL),
(78, 52, 2, '2022-12-15 07:12:02', NULL),
(79, 60, 2, '2022-12-15 07:25:37', NULL),
(80, 60, 3, '2022-12-15 07:25:38', NULL),
(89, 65, 2, '2022-12-15 15:32:57', NULL),
(90, 65, 3, '2022-12-15 15:32:57', NULL),
(94, 67, 1, '2022-12-16 01:16:37', NULL),
(95, 67, 2, '2022-12-16 01:16:37', NULL),
(96, 67, 3, '2022-12-16 01:16:37', NULL),
(97, 67, 4, '2022-12-16 01:16:37', NULL),
(98, 68, 4, '2022-12-16 01:22:46', '2022-12-16 02:39:44'),
(105, 68, 7, '2022-12-16 02:57:14', NULL),
(106, 71, 2, '2022-12-16 03:40:10', NULL),
(107, 71, 3, '2022-12-16 03:40:10', NULL),
(108, 71, 6, '2022-12-16 03:40:10', NULL),
(109, 71, 7, '2022-12-16 03:40:10', NULL),
(110, 72, 1, '2022-12-16 03:44:25', NULL),
(111, 72, 2, '2022-12-16 03:44:26', NULL),
(112, 72, 3, '2022-12-16 03:44:26', NULL),
(113, 72, 4, '2022-12-16 03:44:26', NULL),
(114, 72, 6, '2022-12-16 03:44:26', NULL),
(115, 72, 7, '2022-12-16 03:44:26', NULL),
(116, 72, 8, '2022-12-16 03:44:26', NULL),
(117, 72, 9, '2022-12-16 03:44:26', NULL),
(118, 72, 10, '2022-12-16 03:44:26', NULL),
(119, 72, 11, '2022-12-16 03:44:26', NULL),
(120, 73, 7, '2022-12-16 03:45:08', NULL),
(121, 73, 6, '2022-12-16 03:59:57', NULL),
(122, 73, 7, '2022-12-16 03:59:57', NULL),
(123, 73, 8, '2022-12-16 04:27:38', NULL),
(124, 73, 10, '2022-12-16 04:27:38', NULL),
(125, 74, 1, '2022-12-16 04:28:12', NULL),
(126, 74, 2, '2022-12-16 04:28:13', NULL),
(127, 74, 7, '2022-12-16 04:28:13', NULL),
(128, 74, 3, '2022-12-16 04:28:38', NULL),
(129, 74, 6, '2022-12-16 04:28:38', NULL),
(130, 75, 2, '2022-12-16 06:05:58', NULL),
(131, 75, 4, '2022-12-16 06:05:58', NULL),
(132, 75, 7, '2022-12-16 06:05:59', NULL),
(133, 76, 4, '2022-12-16 06:25:55', NULL),
(134, 76, 6, '2022-12-16 06:25:55', NULL),
(135, 77, 6, '2022-12-16 06:36:05', NULL),
(136, 77, 3, '2022-12-16 06:46:13', NULL),
(137, 77, 3, '2022-12-16 06:46:49', NULL),
(138, 78, 4, '2022-12-16 07:08:01', NULL),
(139, 78, 7, '2022-12-16 07:08:01', NULL),
(145, 80, 6, '2022-12-16 07:20:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'php', '2022-12-13 03:00:16', NULL),
(2, 'lampu', '2022-12-13 03:00:16', NULL),
(3, 'python', '2022-12-13 06:41:21', NULL),
(4, 'cpp', '2022-12-13 06:41:21', NULL),
(6, 'javascript', '2022-12-16 01:15:58', NULL),
(7, 'react', '2022-12-16 01:15:58', NULL),
(8, 'IoT', '2022-12-16 01:15:58', NULL),
(9, 'mysql', '2022-12-16 01:15:58', NULL),
(10, 'sql', '2022-12-16 01:15:58', NULL),
(11, 'Go', '2022-12-16 01:15:58', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_id` (`user_id`),
  ADD KEY `fk_ans_question_id` (`question_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_comment_id` (`comment_id`),
  ADD KEY `fk_com_question_id` (`question_id`),
  ADD KEY `fk_com_user_id` (`user_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_account` (`user_id`);

--
-- Indexes for table `question_tags`
--
ALTER TABLE `question_tags`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tag_id` (`tag_id`),
  ADD KEY `fk_tag_question` (`question_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `question_tags`
--
ALTER TABLE `question_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `fk_ans_question_id` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_com_question_id` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_com_user_id` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_comment_id` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `fk_account` FOREIGN KEY (`user_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `question_tags`
--
ALTER TABLE `question_tags`
  ADD CONSTRAINT `fk_tag_id` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tag_question` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
