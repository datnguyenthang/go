-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 17, 2017 at 03:38 AM
-- Server version: 5.5.52-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goolutu`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(10) unsigned NOT NULL COMMENT 'ID',
  `password` varchar(128) NOT NULL COMMENT 'Pass',
  `mail` varchar(255) DEFAULT NULL COMMENT 'Email',
  `facebook` varchar(255) DEFAULT NULL,
  `google` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `hashcode` varchar(255) DEFAULT NULL,
  `actived` tinyint(1) DEFAULT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `accounts`
--

TRUNCATE TABLE `accounts`;
-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `admins`
--

TRUNCATE TABLE `admins`;
--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `deleted`, `created`, `updated`) VALUES
(2, 'sam_site_87@yahoo.com', '$2y$10$iKMu1l82dmkll.z5JWAkfOS4TcOPvHdSq4nVry46US04JERD4USxS', 0, '2017-02-28 09:51:20', '0000-00-00 00:00:00'),
(5, 'dangquangvinh1987@gmail.com', '$2y$10$it.k4zm5cddVOVLjLqTZOOMf/ATHL0Fcd0YVgdzG7OBH.vl9o4Wz2', 0, '2017-03-16 10:09:33', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE IF NOT EXISTS `districts` (
  `id` int(10) unsigned NOT NULL,
  `state_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=696 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `districts`
--

TRUNCATE TABLE `districts`;
--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `state_id`, `name`, `slug`, `rate`) VALUES
(1, 17, 'Ba Đình', NULL, 1),
(2, 17, 'Hoàn Kiếm', NULL, 1),
(3, 17, 'Tây Hồ', NULL, 1),
(4, 17, 'Long Biên', NULL, 1),
(5, 17, 'Cầu Giấy', NULL, 1),
(6, 17, 'Đống Đa', NULL, 1),
(7, 17, 'Hai Bà Trưng', NULL, 1),
(8, 17, 'Hoàng Mai', NULL, 1),
(9, 17, 'Thanh Xuân', NULL, 1),
(10, 17, 'Sóc Sơn', NULL, 1),
(11, 17, 'Đông Anh', NULL, 1),
(12, 17, 'Gia Lâm', NULL, 1),
(13, 17, 'Từ Liêm', NULL, 1),
(14, 17, 'Thanh Trì', NULL, 1),
(15, 15, 'Hà Giang', NULL, 1),
(16, 15, 'Đồng Văn', NULL, 1),
(17, 15, 'Mèo Vạc', NULL, 1),
(18, 15, 'Yên Minh', NULL, 1),
(19, 15, 'Quản Bạ', NULL, 1),
(20, 15, 'Vị Xuyên', NULL, 1),
(21, 15, 'Bắc Mê', NULL, 1),
(22, 15, 'Hoàng Su Phì', NULL, 1),
(23, 15, 'Xín Mần', NULL, 1),
(24, 15, 'Bắc Quang', NULL, 1),
(25, 15, 'Quang Bình', NULL, 1),
(26, 11, 'Cao Bằng', NULL, 1),
(27, 11, 'Bảo Lâm', NULL, 1),
(28, 11, 'Bảo Lạc', NULL, 1),
(29, 11, 'Thông Nông', NULL, 1),
(30, 11, 'Hà Quảng', NULL, 1),
(31, 11, 'Trà Lĩnh', NULL, 1),
(32, 11, 'Trùng Khánh', NULL, 1),
(33, 11, 'Hạ Lang', NULL, 1),
(34, 11, 'Quảng Uyên', NULL, 1),
(35, 11, 'Phục Hoà', NULL, 1),
(36, 11, 'Hoà An', NULL, 1),
(37, 11, 'Nguyên Bình', NULL, 1),
(38, 11, 'Thạch An', NULL, 1),
(39, 8, 'Bắc Kạn', NULL, 1),
(40, 8, 'Pác Nặm', NULL, 1),
(41, 8, 'Ba Bể', NULL, 1),
(42, 8, 'Ngân Sơn', NULL, 1),
(43, 8, 'Bạch Thông', NULL, 1),
(44, 8, 'Chợ Đồn', NULL, 1),
(45, 8, 'Chợ Mới', NULL, 1),
(46, 8, 'Na Rì', NULL, 1),
(47, 51, 'Tuyên Quang', NULL, 1),
(48, 51, 'Nà Hang', NULL, 1),
(49, 51, 'Chiêm Hóa', NULL, 1),
(50, 51, 'Hàm Yên', NULL, 1),
(51, 51, 'Yên Sơn', NULL, 1),
(52, 51, 'Sơn Dương', NULL, 1),
(53, 30, 'Lào Cai', NULL, 1),
(54, 30, 'Bát Xát', NULL, 1),
(55, 30, 'Mường Khương', NULL, 1),
(56, 30, 'Si Ma Cai', NULL, 1),
(57, 30, 'Bắc Hà', NULL, 1),
(58, 30, 'Bảo Thắng', NULL, 1),
(59, 30, 'Bảo Yên', NULL, 1),
(60, 30, 'Sa Pa', NULL, 1),
(61, 30, 'Văn Bàn', NULL, 1),
(62, 64, 'Điện Biên Phủ', NULL, 1),
(63, 64, 'Mường Lay', NULL, 1),
(64, 64, 'Mường Nhé', NULL, 1),
(65, 64, 'Mường Chà', NULL, 1),
(66, 64, 'Tủa Chùa', NULL, 1),
(67, 64, 'Tuần Giáo', NULL, 1),
(68, 64, 'Điện Biên', NULL, 1),
(69, 64, 'Điện Biên Đông', NULL, 1),
(70, 64, 'Mường Ảng', NULL, 1),
(71, 28, 'Lai Châu', NULL, 1),
(72, 28, 'Tam Đường', NULL, 1),
(73, 28, 'Mường Tè', NULL, 1),
(74, 28, 'Sìn Hồ', NULL, 1),
(75, 28, 'Phong Thổ', NULL, 1),
(76, 28, 'Than Uyên', NULL, 1),
(77, 28, 'Tân Uyên', NULL, 1),
(78, 44, 'Sơn La', NULL, 1),
(79, 44, 'Quỳnh Nhai', NULL, 1),
(80, 44, 'Thuận Châu', NULL, 1),
(81, 44, 'Mường La', NULL, 1),
(82, 44, 'Bắc Yên', NULL, 1),
(83, 44, 'Phù Yên', NULL, 1),
(84, 44, 'Mộc Châu', NULL, 1),
(85, 44, 'Yên Châu', NULL, 1),
(86, 44, 'Mai Sơn', NULL, 1),
(87, 44, 'Sông Mã', NULL, 1),
(88, 44, 'Sốp Cộp', NULL, 1),
(89, 55, 'Yên Bái', NULL, 1),
(90, 55, 'Nghĩa Lộ', NULL, 1),
(91, 55, 'Lục Yên', NULL, 1),
(92, 55, 'Văn Yên', NULL, 1),
(93, 55, 'Mù Cang Chải', NULL, 1),
(94, 55, 'Trấn Yên', NULL, 1),
(95, 55, 'Trạm Tấu', NULL, 1),
(96, 55, 'Văn Chấn', NULL, 1),
(97, 55, 'Yên Bình', NULL, 1),
(98, 20, 'Hòa Bình', NULL, 1),
(99, 20, 'Đà Bắc', NULL, 1),
(100, 20, 'Kỳ Sơn', NULL, 1),
(101, 20, 'Lương Sơn', NULL, 1),
(102, 20, 'Kim Bôi', NULL, 1),
(103, 20, 'Cao Phong', NULL, 1),
(104, 20, 'Tân Lạc', NULL, 1),
(105, 20, 'Mai Châu', NULL, 1),
(106, 20, 'Lạc Sơn', NULL, 1),
(107, 20, 'Yên Thủy', NULL, 1),
(108, 20, 'Lạc Thủy', NULL, 1),
(109, 47, 'Thái Nguyên', NULL, 1),
(110, 47, 'Sông Công', NULL, 1),
(111, 47, 'Định Hóa', NULL, 1),
(112, 47, 'Phú Lương', NULL, 1),
(113, 47, 'Đồng Hỷ', NULL, 1),
(114, 47, 'Võ Nhai', NULL, 1),
(115, 47, 'Đại Từ', NULL, 1),
(116, 47, 'Phổ Yên', NULL, 1),
(117, 47, 'Phú Bình', NULL, 1),
(118, 32, 'Lạng Sơn', NULL, 1),
(119, 32, 'Tràng Định', NULL, 1),
(120, 32, 'Bình Gia', NULL, 1),
(121, 32, 'Văn Lãng', NULL, 1),
(122, 32, 'Cao Lộc', NULL, 1),
(123, 32, 'Văn Quan', NULL, 1),
(124, 32, 'Bắc Sơn', NULL, 1),
(125, 32, 'Hữu Lũng', NULL, 1),
(126, 32, 'Chi Lăng', NULL, 1),
(127, 32, 'Lộc Bình', NULL, 1),
(128, 32, 'Đình Lập', NULL, 1),
(129, 42, 'Hạ Long', NULL, 1),
(130, 42, 'Móng Cái', NULL, 1),
(131, 42, 'Cẩm Phả', NULL, 1),
(132, 42, 'Uông Bí', NULL, 1),
(133, 42, 'Bình Liêu', NULL, 1),
(134, 42, 'Tiên Yên', NULL, 1),
(135, 42, 'Đầm Hà', NULL, 1),
(136, 42, 'Hải Hà', NULL, 1),
(137, 42, 'Ba Chẽ', NULL, 1),
(138, 42, 'Vân Đồn', NULL, 1),
(139, 42, 'Hoành Bồ', NULL, 1),
(140, 42, 'Đông Triều', NULL, 1),
(141, 42, 'Yên Hưng', NULL, 1),
(142, 42, 'Cô Tô', NULL, 1),
(143, 7, 'Bắc Giang', NULL, 1),
(144, 7, 'Yên Thế', NULL, 1),
(145, 7, 'Tân Yên', NULL, 1),
(146, 7, 'Lạng Giang', NULL, 1),
(147, 7, 'Lục Nam', NULL, 1),
(148, 7, 'Lục Ngạn', NULL, 1),
(149, 7, 'Sơn Động', NULL, 1),
(150, 7, 'Yên Dũng', NULL, 1),
(151, 7, 'Việt Yên', NULL, 1),
(152, 7, 'Hiệp Hòa', NULL, 1),
(153, 37, 'Việt Trì', NULL, 1),
(154, 37, 'Phú Thọ', NULL, 1),
(155, 37, 'Đoan Hùng', NULL, 1),
(156, 37, 'Hạ Hoà', NULL, 1),
(157, 37, 'Thanh Ba', NULL, 1),
(158, 37, 'Phù Ninh', NULL, 1),
(159, 37, 'Yên Lập', NULL, 1),
(160, 37, 'Cẩm Khê', NULL, 1),
(161, 37, 'Tam Nông', NULL, 1),
(162, 37, 'Lâm Thao', NULL, 1),
(163, 37, 'Thanh Sơn', NULL, 1),
(164, 37, 'Thanh Thuỷ', NULL, 1),
(165, 37, 'Tân Sơn', NULL, 1),
(166, 54, 'Vĩnh Yên', NULL, 1),
(167, 54, 'Phúc Yên', NULL, 1),
(168, 54, 'Lập Thạch', NULL, 1),
(169, 54, 'Tam Dương', NULL, 1),
(170, 54, 'Tam Đảo', NULL, 1),
(171, 54, 'Bình Xuyên', NULL, 1),
(172, 54, 'Mê Linh', NULL, 1),
(173, 54, 'Yên Lạc', NULL, 1),
(174, 54, 'Vĩnh Tường', NULL, 1),
(175, 54, 'Sông Lô', NULL, 1),
(176, 9, 'Bắc Ninh', NULL, 1),
(177, 9, 'Yên Phong', NULL, 1),
(178, 9, 'Quế Võ', NULL, 1),
(179, 9, 'Tiên Du', NULL, 1),
(180, 9, 'Từ Sơn', NULL, 1),
(181, 9, 'Thuận Thành', NULL, 1),
(182, 9, 'Gia Bình', NULL, 1),
(183, 9, 'Lương Tài', NULL, 1),
(184, 17, 'Hà Đông', NULL, 1),
(185, 17, 'Sơn Tây', NULL, 1),
(186, 17, 'Ba Vì', NULL, 1),
(187, 17, 'Phúc Thọ', NULL, 1),
(188, 17, 'Đan Phượng', NULL, 1),
(189, 17, 'Hoài Đức', NULL, 1),
(190, 17, 'Quốc Oai', NULL, 1),
(191, 17, 'Thạch Thất', NULL, 1),
(192, 17, 'Chương Mỹ', NULL, 1),
(193, 17, 'Thanh Oai', NULL, 1),
(194, 17, 'Thường Tín', NULL, 1),
(195, 17, 'Phú Xuyên', NULL, 1),
(196, 17, 'Ứng Hòa', NULL, 1),
(197, 17, 'Mỹ Đức', NULL, 1),
(198, 22, 'Hải Dương', NULL, 1),
(199, 22, 'Chí Linh', NULL, 1),
(200, 22, 'Nam Sách', NULL, 1),
(201, 22, 'Kinh Môn', NULL, 1),
(202, 22, 'Kim Thành', NULL, 1),
(203, 22, 'Thanh Hà', NULL, 1),
(204, 22, 'Cẩm Giàng', NULL, 1),
(205, 22, 'Bình Giang', NULL, 1),
(206, 22, 'Gia Lộc', NULL, 1),
(207, 22, 'Tứ Kỳ', NULL, 1),
(208, 22, 'Ninh Giang', NULL, 1),
(209, 22, 'Thanh Miện', NULL, 1),
(210, 23, 'Hồng Bàng', NULL, 1),
(211, 23, 'Ngô Quyền', NULL, 1),
(212, 23, 'Lê Chân', NULL, 1),
(213, 23, 'Hải An', NULL, 1),
(214, 23, 'Kiến An', NULL, 1),
(215, 23, 'Đồ Sơn', NULL, 1),
(216, 23, 'Kinh Dương', NULL, 1),
(217, 23, 'Thuỷ Nguyên', NULL, 1),
(218, 23, 'An Dương', NULL, 1),
(219, 23, 'An Lão', NULL, 1),
(220, 23, 'Kiến Thụy', NULL, 1),
(221, 23, 'Tiên Lãng', NULL, 1),
(222, 23, 'Vĩnh Bảo', NULL, 1),
(223, 23, 'Cát Hải', NULL, 1),
(224, 23, 'Bạch Long Vĩ', NULL, 1),
(225, 21, 'Hưng Yên', NULL, 1),
(226, 21, 'Văn Lâm', NULL, 1),
(227, 21, 'Văn Giang', NULL, 1),
(228, 21, 'Yên Mỹ', NULL, 1),
(229, 21, 'Mỹ Hào', NULL, 1),
(230, 21, 'Ân Thi', NULL, 1),
(231, 21, 'Khoái Châu', NULL, 1),
(232, 21, 'Kim Động', NULL, 1),
(233, 21, 'Tiên Lữ', NULL, 1),
(234, 21, 'Phù Cừ', NULL, 1),
(235, 46, 'Thái Bình', NULL, 1),
(236, 46, 'Quỳnh Phụ', NULL, 1),
(237, 46, 'Hưng Hà', NULL, 1),
(238, 46, 'Đông Hưng', NULL, 1),
(239, 46, 'Thái Thụy', NULL, 1),
(240, 46, 'Tiền Hải', NULL, 1),
(241, 46, 'Kiến Xương', NULL, 1),
(242, 46, 'Vũ Thư', NULL, 1),
(243, 16, 'Phủ Lý', NULL, 1),
(244, 16, 'Duy Tiên', NULL, 1),
(245, 16, 'Kim Bảng', NULL, 1),
(246, 16, 'Thanh Liêm', NULL, 1),
(247, 16, 'Bình Lục', NULL, 1),
(248, 16, 'Lý Nhân', NULL, 1),
(249, 33, 'Nam Định', NULL, 1),
(250, 33, 'Mỹ Lộc', NULL, 1),
(251, 33, 'Vụ Bản', NULL, 1),
(252, 33, 'Ý Yên', NULL, 1),
(253, 33, 'Nghĩa Hưng', NULL, 1),
(254, 33, 'Nam Trực', NULL, 1),
(255, 33, 'Trực Ninh', NULL, 1),
(256, 33, 'Xuân Trường', NULL, 1),
(257, 33, 'Giao Thủy', NULL, 1),
(258, 33, 'Hải Hậu', NULL, 1),
(259, 35, 'Ninh Bình', NULL, 1),
(260, 35, 'Tam Điệp', NULL, 1),
(261, 35, 'Nho Quan', NULL, 1),
(262, 35, 'Gia Viễn', NULL, 1),
(263, 35, 'Hoa Lư', NULL, 1),
(264, 35, 'Yên Khánh', NULL, 1),
(265, 35, 'Kim Sơn', NULL, 1),
(266, 35, 'Yên Mô', NULL, 1),
(267, 45, 'Thanh Hóa', NULL, 1),
(268, 45, 'Bỉm Sơn', NULL, 1),
(269, 45, 'Sầm Sơn', NULL, 1),
(270, 45, 'Mường Lát', NULL, 1),
(271, 45, 'Quan Hóa', NULL, 1),
(272, 45, 'Bá Thước', NULL, 1),
(273, 45, 'Quan Sơn', NULL, 1),
(274, 45, 'Lang Chánh', NULL, 1),
(275, 45, 'Ngọc Lặc', NULL, 1),
(276, 45, 'Cẩm Thủy', NULL, 1),
(277, 45, 'Thạch Thành', NULL, 1),
(278, 45, 'Hà Trung', NULL, 1),
(279, 45, 'Vĩnh Lộc', NULL, 1),
(280, 45, 'Yên Định', NULL, 1),
(281, 45, 'Thọ Xuân', NULL, 1),
(282, 45, 'Thường Xuân', NULL, 1),
(283, 45, 'Triệu Sơn', NULL, 1),
(284, 45, 'Thiệu Hoá', NULL, 1),
(285, 45, 'Hoằng Hóa', NULL, 1),
(286, 45, 'Hậu Lộc', NULL, 1),
(287, 45, 'Nga Sơn', NULL, 1),
(288, 45, 'Như Xuân', NULL, 1),
(289, 45, 'Như Thanh', NULL, 1),
(290, 45, 'Nông Cống', NULL, 1),
(291, 45, 'Đông Sơn', NULL, 1),
(292, 45, 'Quảng Xương', NULL, 1),
(293, 45, 'Tĩnh Gia', NULL, 1),
(294, 34, 'Vinh', NULL, 1),
(295, 34, 'Cửa Lò', NULL, 1),
(296, 34, 'Thái Hoà', NULL, 1),
(297, 34, 'Quế Phong', NULL, 1),
(298, 34, 'Quỳ Châu', NULL, 1),
(299, 34, 'Kỳ Sơn', NULL, 1),
(300, 34, 'Tương Dương', NULL, 1),
(301, 34, 'Nghĩa Đàn', NULL, 1),
(302, 34, 'Quỳ Hợp', NULL, 1),
(303, 34, 'Quỳnh Lưu', NULL, 1),
(304, 34, 'Con Cuông', NULL, 1),
(305, 34, 'Tân Kỳ', NULL, 1),
(306, 34, 'Anh Sơn', NULL, 1),
(307, 34, 'Diễn Châu', NULL, 1),
(308, 34, 'Yên Thành', NULL, 1),
(309, 34, 'Đô Lương', NULL, 1),
(310, 34, 'Thanh Chương', NULL, 1),
(311, 34, 'Nghi Lộc', NULL, 1),
(312, 34, 'Nam Đàn', NULL, 1),
(313, 34, 'Hưng Nguyên', NULL, 1),
(314, 19, 'Hà Tĩnh', NULL, 1),
(315, 19, 'Hồng Lĩnh', NULL, 1),
(316, 19, 'Hương Sơn', NULL, 1),
(317, 19, 'Đức Thọ', NULL, 1),
(318, 19, 'Vũ Quang', NULL, 1),
(319, 19, 'Nghi Xuân', NULL, 1),
(320, 19, 'Can Lộc', NULL, 1),
(321, 19, 'Hương Khê', NULL, 1),
(322, 19, 'Thạch Hà', NULL, 1),
(323, 19, 'Cẩm Xuyên', NULL, 1),
(324, 19, 'Kỳ Anh', NULL, 1),
(325, 19, 'Lộc Hà', NULL, 1),
(326, 39, 'Đồng Hới', NULL, 1),
(327, 39, 'Minh Hóa', NULL, 1),
(328, 39, 'Tuyên Hóa', NULL, 1),
(329, 39, 'Quảng Trạch', NULL, 1),
(330, 39, 'Bố Trạch', NULL, 1),
(331, 39, 'Quảng Ninh', NULL, 1),
(332, 39, 'Lệ Thủy', NULL, 1),
(333, 43, 'Đông Hà', NULL, 1),
(334, 43, 'Quảng Trị', NULL, 1),
(335, 43, 'Vĩnh Linh', NULL, 1),
(336, 43, 'Hướng Hóa', NULL, 1),
(337, 43, 'Gio Linh', NULL, 1),
(338, 43, 'Đa Krông', NULL, 1),
(339, 43, 'Cam Lộ', NULL, 1),
(340, 43, 'Triệu Phong', NULL, 1),
(341, 43, 'Hải Lăng', NULL, 1),
(342, 43, 'Cồn Cỏ', NULL, 1),
(343, 48, 'Huế', NULL, 1),
(344, 48, 'Phong Điền', NULL, 1),
(345, 48, 'Quảng Điền', NULL, 1),
(346, 48, 'Phú Vang', NULL, 1),
(347, 48, 'Hương Thủy', NULL, 1),
(348, 48, 'Hương Trà', NULL, 1),
(349, 48, 'A Lưới', NULL, 1),
(350, 48, 'Phú Lộc', NULL, 1),
(351, 48, 'Nam Đông', NULL, 1),
(352, 56, 'Liên Chiểu', NULL, 1),
(353, 56, 'Thanh Khê', NULL, 1),
(354, 56, 'Hải Châu', NULL, 1),
(355, 56, 'Sơn Trà', NULL, 1),
(356, 56, 'Ngũ Hành Sơn', NULL, 1),
(357, 56, 'Cẩm Lệ', NULL, 1),
(358, 56, 'Hoà Vang', NULL, 1),
(359, 56, 'Hoàng Sa', NULL, 1),
(360, 40, 'Tam Kỳ', NULL, 49),
(361, 40, 'Hội An', NULL, 49),
(362, 40, 'Tây Giang', NULL, 49),
(363, 40, 'Đông Giang', NULL, 49),
(364, 40, 'Đại Lộc', NULL, 49),
(365, 40, 'Điện Bàn', NULL, 49),
(366, 40, 'Duy Xuyên', NULL, 49),
(367, 40, 'Quế Sơn', NULL, 49),
(368, 40, 'Nam Giang', NULL, 49),
(369, 40, 'Phước Sơn', NULL, 49),
(370, 40, 'Hiệp Đức', NULL, 49),
(371, 40, 'Thăng Bình', NULL, 49),
(372, 40, 'Tiên Phước', NULL, 49),
(373, 40, 'Bắc Trà My', NULL, 49),
(374, 40, 'Nam Trà My', NULL, 49),
(375, 40, 'Núi Thành', NULL, 49),
(376, 40, 'Phú Ninh', NULL, 49),
(377, 40, 'Nông Sơn', NULL, 49),
(378, 41, 'Quảng Ngãi', NULL, 1),
(379, 41, 'Bình Sơn', NULL, 1),
(380, 41, 'Trà Bồng', NULL, 1),
(381, 41, 'Tây Trà', NULL, 1),
(382, 41, 'Sơn Tịnh', NULL, 1),
(383, 41, 'Tư Nghĩa', NULL, 1),
(384, 41, 'Sơn Hà', NULL, 1),
(385, 41, 'Sơn Tây', NULL, 1),
(386, 41, 'Minh Long', NULL, 1),
(387, 41, 'Nghĩa Hành', NULL, 1),
(388, 41, 'Mộ Đức', NULL, 1),
(389, 41, 'Đức Phổ', NULL, 1),
(390, 41, 'Ba Tơ', NULL, 1),
(391, 41, 'Lý Sơn', NULL, 1),
(392, 6, 'Qui Nhơn', NULL, 1),
(393, 6, 'An Lão', NULL, 1),
(394, 6, 'Hoài Nhơn', NULL, 1),
(395, 6, 'Hoài Ân', NULL, 1),
(396, 6, 'Phù Mỹ', NULL, 1),
(397, 6, 'Vĩnh Thạnh', NULL, 1),
(398, 6, 'Tây Sơn', NULL, 1),
(399, 6, 'Phù Cát', NULL, 1),
(400, 6, 'An Nhơn', NULL, 1),
(401, 6, 'Tuy Phước', NULL, 1),
(402, 6, 'Vân Canh', NULL, 1),
(403, 38, 'Tuy Hòa', NULL, 1),
(404, 38, 'Sông Cầu', NULL, 1),
(405, 38, 'Đồng Xuân', NULL, 1),
(406, 38, 'Tuy An', NULL, 1),
(407, 38, 'Sơn Hòa', NULL, 1),
(408, 38, 'Sông Hinh', NULL, 1),
(409, 38, 'Tây Hoà', NULL, 1),
(410, 38, 'Phú Hoà', NULL, 1),
(411, 38, 'Đông Hoà', NULL, 1),
(412, 25, 'Nha Trang', NULL, 1),
(413, 25, 'Cam Ranh', NULL, 1),
(414, 25, 'Cam Lâm', NULL, 1),
(415, 25, 'Vạn Ninh', NULL, 1),
(416, 25, 'Ninh Hòa', NULL, 1),
(417, 25, 'Khánh Vĩnh', NULL, 1),
(418, 25, 'Diên Khánh', NULL, 1),
(419, 25, 'Khánh Sơn', NULL, 1),
(420, 25, 'Trường Sa', NULL, 1),
(421, 36, 'Phan Rang-Tháp Chàm', NULL, 1),
(422, 36, 'Bác Ái', NULL, 1),
(423, 36, 'Ninh Sơn', NULL, 1),
(424, 36, 'Ninh Hải', NULL, 1),
(425, 36, 'Ninh Phước', NULL, 1),
(426, 36, 'Thuận Bắc', NULL, 1),
(427, 36, 'Thuận Nam', NULL, 1),
(428, 5, 'Phan Thiết', NULL, 1),
(429, 5, 'La Gi', NULL, 1),
(430, 5, 'Tuy Phong', NULL, 1),
(431, 5, 'Bắc Bình', NULL, 1),
(432, 5, 'Hàm Thuận Bắc', NULL, 1),
(433, 5, 'Hàm Thuận Nam', NULL, 1),
(434, 5, 'Tánh Linh', NULL, 1),
(435, 5, 'Đức Linh', NULL, 1),
(436, 5, 'Hàm Tân', NULL, 1),
(437, 5, 'Phú Quí', NULL, 1),
(438, 27, 'Kon Tum', NULL, 1),
(439, 27, 'Đắk Glei', NULL, 1),
(440, 27, 'Ngọc Hồi', NULL, 1),
(441, 27, 'Đắk Tô', NULL, 1),
(442, 27, 'Kon Plông', NULL, 1),
(443, 27, 'Kon Rẫy', NULL, 1),
(444, 27, 'Đắk Hà', NULL, 1),
(445, 27, 'Sa Thầy', NULL, 1),
(446, 27, 'Tu Mơ Rông', NULL, 1),
(447, 14, 'Pleiku', NULL, 1),
(448, 14, 'An Khê', NULL, 1),
(449, 14, 'Ayun Pa', NULL, 1),
(450, 14, 'Kbang', NULL, 1),
(451, 14, 'Đăk Đoa', NULL, 1),
(452, 14, 'Chư Păh', NULL, 1),
(453, 14, 'Ia Grai', NULL, 1),
(454, 14, 'Mang Yang', NULL, 1),
(455, 14, 'Kông Chro', NULL, 1),
(456, 14, 'Đức Cơ', NULL, 1),
(457, 14, 'Chư Prông', NULL, 1),
(458, 14, 'Chư Sê', NULL, 1),
(459, 14, 'Đăk Pơ', NULL, 1),
(460, 14, 'Ia Pa', NULL, 1),
(461, 14, 'Krông Pa', NULL, 1),
(462, 14, 'Phú Thiện', NULL, 1),
(463, 14, 'Chư Pưh', NULL, 1),
(464, 57, 'Buôn Ma Thuột', NULL, 1),
(465, 57, 'Buôn Hồ', NULL, 1),
(466, 57, 'Ea H''leo', NULL, 1),
(467, 57, 'Ea Súp', NULL, 1),
(468, 57, 'Buôn Đôn', NULL, 1),
(469, 57, 'Cư M''gar', NULL, 1),
(470, 57, 'Krông Búk', NULL, 1),
(471, 57, 'Krông Năng', NULL, 1),
(472, 57, 'Ea Kar', NULL, 1),
(473, 57, 'M''đrắk', NULL, 1),
(474, 57, 'Krông Bông', NULL, 1),
(475, 57, 'Krông Pắc', NULL, 1),
(476, 57, 'Krông A Na', NULL, 1),
(477, 57, 'Lắk', NULL, 1),
(478, 57, 'Cư Kuin', NULL, 1),
(479, 63, 'Gia Nghĩa', NULL, 1),
(480, 63, 'Đắk Glong', NULL, 1),
(481, 63, 'Cư Jút', NULL, 1),
(482, 63, 'Đắk Mil', NULL, 1),
(483, 63, 'Krông Nô', NULL, 1),
(484, 63, 'Đắk Song', NULL, 1),
(485, 63, 'Đắk R''lấp', NULL, 1),
(486, 63, 'Tuy Đức', NULL, 1),
(487, 31, 'Đà Lạt', NULL, 1),
(488, 31, 'Bảo Lộc', NULL, 1),
(489, 31, 'Đam Rông', NULL, 1),
(490, 31, 'Lạc Dương', NULL, 1),
(491, 31, 'Lâm Hà', NULL, 1),
(492, 31, 'Đơn Dương', NULL, 1),
(493, 31, 'Đức Trọng', NULL, 1),
(494, 31, 'Di Linh', NULL, 1),
(495, 31, 'Bảo Lâm', NULL, 1),
(496, 31, 'Đạ Huoai', NULL, 1),
(497, 31, 'Đạ Tẻh', NULL, 1),
(498, 31, 'Cát Tiên', NULL, 1),
(499, 4, 'Phước Long', NULL, 1),
(500, 4, 'Đồng Xoài', NULL, 1),
(501, 4, 'Bình Long', NULL, 1),
(502, 4, 'Bù Gia Mập', NULL, 1),
(503, 4, 'Lộc Ninh', NULL, 1),
(504, 4, 'Bù Đốp', NULL, 1),
(505, 4, 'Hớn Quản', NULL, 1),
(506, 4, 'Đồng Phù', NULL, 1),
(507, 4, 'Bù Đăng', NULL, 1),
(508, 4, 'Chơn Thành', NULL, 1),
(509, 52, 'Tây Ninh', NULL, 1),
(510, 52, 'Tân Biên', NULL, 1),
(511, 52, 'Tân Châu', NULL, 1),
(512, 52, 'Dương Minh Châu', NULL, 1),
(513, 52, 'Châu Thành', NULL, 1),
(514, 52, 'Hòa Thành', NULL, 1),
(515, 52, 'Gò Dầu', NULL, 1),
(516, 52, 'Bến Cầu', NULL, 1),
(517, 52, 'Trảng Bàng', NULL, 1),
(518, 3, 'Thủ Dầu Một', NULL, 1),
(519, 3, 'Dầu Tiếng', NULL, 1),
(520, 3, 'Bến Cát', NULL, 1),
(521, 3, 'Phú Giáo', NULL, 1),
(522, 3, 'Tân Uyên', NULL, 1),
(523, 3, 'Dĩ An', NULL, 1),
(524, 3, 'Thuận An', NULL, 1),
(525, 58, 'Biên Hòa', NULL, 1),
(526, 58, 'Long Khánh', NULL, 1),
(527, 58, 'Tân Phú', NULL, 1),
(528, 58, 'Vĩnh Cửu', NULL, 1),
(529, 58, 'Định Quán', NULL, 1),
(530, 58, 'Trảng Bom', NULL, 1),
(531, 58, 'Thống Nhất', NULL, 1),
(532, 58, 'Cẩm Mỹ', NULL, 1),
(533, 58, 'Long Thành', NULL, 1),
(534, 58, 'Xuân Lộc', NULL, 1),
(535, 58, 'Nhơn Trạch', NULL, 1),
(536, 2, 'Vũng Tàu', NULL, 1),
(537, 2, 'Bà Rịa', NULL, 1),
(538, 2, 'Châu Đức', NULL, 1),
(539, 2, 'Xuyên Mộc', NULL, 1),
(540, 2, 'Long Điền', NULL, 1),
(541, 2, 'Đất Đỏ', NULL, 1),
(542, 2, 'Tân Thành', NULL, 1),
(543, 2, 'Côn Đảo', NULL, 1),
(544, 24, 'Quận 1', NULL, 1),
(545, 24, 'Quận 2', NULL, 1),
(546, 24, 'Quận 3', NULL, 1),
(547, 24, 'Quận 4', NULL, 1),
(548, 24, 'Quận 5', NULL, 1),
(549, 24, 'Quận 6', NULL, 1),
(550, 24, 'Quận 7', NULL, 1),
(551, 24, 'Quận 8', NULL, 1),
(552, 24, 'Quận 9', NULL, 1),
(553, 24, 'Quận 10', NULL, 1),
(554, 24, 'Quận 11', NULL, 1),
(555, 24, 'Quận 12', NULL, 1),
(556, 24, 'Gò Vấp', NULL, 1),
(557, 24, 'Bình Thạnh', NULL, 1),
(558, 24, 'Tân Bình', NULL, 1),
(559, 24, 'Tân Phú', NULL, 1),
(560, 24, 'Phú Nhuận', NULL, 1),
(561, 24, 'Bình Tân', NULL, 1),
(562, 24, 'Củ Chi', NULL, 1),
(563, 24, 'Hóc Môn', NULL, 1),
(564, 24, 'Bình Chánh', NULL, 1),
(565, 24, 'Nhà Bè', NULL, 1),
(566, 24, 'Cần Giờ', NULL, 1),
(567, 29, 'Tân An', NULL, 1),
(568, 29, 'Tân Hưng', NULL, 1),
(569, 29, 'Vĩnh Hưng', NULL, 1),
(570, 29, 'Mộc Hóa', NULL, 1),
(571, 29, 'Tân Thạnh', NULL, 1),
(572, 29, 'Thạnh Hóa', NULL, 1),
(573, 29, 'Đức Huệ', NULL, 1),
(574, 29, 'Đức Hòa', NULL, 1),
(575, 29, 'Bến Lức', NULL, 1),
(576, 29, 'Thủ Thừa', NULL, 1),
(577, 29, 'Tân Trụ', NULL, 1),
(578, 29, 'Cần Đước', NULL, 1),
(579, 29, 'Cần Giuộc', NULL, 1),
(580, 29, 'Châu Thành', NULL, 1),
(581, 49, 'Mỹ Tho', NULL, 1),
(582, 49, 'Gò Công', NULL, 1),
(583, 49, 'Tân Phước', NULL, 1),
(584, 49, 'Cái Bè', NULL, 1),
(585, 49, 'Cai Lậy', NULL, 1),
(586, 49, 'Châu Thành', NULL, 1),
(587, 49, 'Chợ Gạo', NULL, 1),
(588, 49, 'Gò Công Tây', NULL, 1),
(589, 49, 'Gò Công Đông', NULL, 1),
(590, 49, 'Tân Phú Đông', NULL, 1),
(591, 10, 'Bến Tre', NULL, 1),
(592, 10, 'Châu Thành', NULL, 1),
(593, 10, 'Chợ Lách', NULL, 1),
(594, 10, 'Mỏ Cày Nam', NULL, 1),
(595, 10, 'Giồng Trôm', NULL, 1),
(596, 10, 'Bình Đại', NULL, 1),
(597, 10, 'Ba Tri', NULL, 1),
(598, 10, 'Thạnh Phú', NULL, 1),
(599, 10, 'Mỏ Cày Bắc', NULL, 1),
(600, 50, 'Trà Vinh', NULL, 1),
(601, 50, 'Càng Long', NULL, 1),
(602, 50, 'Cầu Kè', NULL, 1),
(603, 50, 'Tiểu Cần', NULL, 1),
(604, 50, 'Châu Thành', NULL, 1),
(605, 50, 'Cầu Ngang', NULL, 1),
(606, 50, 'Trà Cú', NULL, 1),
(607, 50, 'Duyên Hải', NULL, 1),
(608, 53, 'Vĩnh Long', NULL, 1),
(609, 53, 'Long Hồ', NULL, 1),
(610, 53, 'Mang Thít', NULL, 1),
(611, 53, 'Vũng Liêm', NULL, 1),
(612, 53, 'Tam Bình', NULL, 1),
(613, 53, 'Bình Minh', NULL, 1),
(614, 53, 'Trà Ôn', NULL, 1),
(615, 53, 'Bình Tân', NULL, 1),
(616, 59, 'Cao Lãnh', NULL, 1),
(617, 59, 'Sa Đéc', NULL, 1),
(618, 59, 'Hồng Ngự', NULL, 1),
(619, 59, 'Tân Hồng', NULL, 1),
(620, 59, 'Hồng Ngự', NULL, 1),
(621, 59, 'Tam Nông', NULL, 1),
(622, 59, 'Tháp Mười', NULL, 1),
(623, 59, 'Cao Lãnh', NULL, 1),
(624, 59, 'Thanh Bình', NULL, 1),
(625, 59, 'Lấp Vò', NULL, 1),
(626, 59, 'Lai Vung', NULL, 1),
(627, 59, 'Châu Thành', NULL, 1),
(628, 1, 'Long Xuyên', NULL, 1),
(629, 1, 'Châu Đốc', NULL, 1),
(630, 1, 'An Phú', NULL, 1),
(631, 1, 'Tân Châu', NULL, 1),
(632, 1, 'Phú Tân', NULL, 1),
(633, 1, 'Châu Phú', NULL, 1),
(634, 1, 'Tịnh Biên', NULL, 1),
(635, 1, 'Tri Tôn', NULL, 1),
(636, 1, 'Châu Thành', NULL, 1),
(637, 1, 'Chợ Mới', NULL, 1),
(638, 1, 'Thoại Sơn', NULL, 1),
(639, 26, 'Rạch Giá', NULL, 1),
(640, 26, 'Hà Tiên', NULL, 1),
(641, 26, 'Kiên Lương', NULL, 1),
(642, 26, 'Hòn Đất', NULL, 1),
(643, 26, 'Tân Hiệp', NULL, 1),
(644, 26, 'Châu Thành', NULL, 1),
(645, 26, 'Gò Quao', NULL, 1),
(646, 26, 'An Biên', NULL, 1),
(647, 26, 'An Minh', NULL, 1),
(648, 26, 'Vĩnh Thuận', NULL, 1),
(649, 26, 'Phú Quốc', NULL, 1),
(650, 26, 'Kiên Hải', NULL, 1),
(651, 26, 'U Minh Thượng', NULL, 1),
(652, 26, 'Giang Thành', NULL, 1),
(653, 13, 'Ninh Kiều', NULL, 1),
(654, 13, 'Ô Môn', NULL, 1),
(655, 13, 'Bình Thuỷ', NULL, 1),
(656, 13, 'Cái Răng', NULL, 1),
(657, 13, 'Thốt Nốt', NULL, 1),
(658, 13, 'Vĩnh Thạnh', NULL, 1),
(659, 13, 'Cờ Đỏ', NULL, 1),
(660, 13, 'Phong Điền', NULL, 1),
(661, 13, 'Thới Lai', NULL, 1),
(662, 62, 'Vị Thanh', NULL, 1),
(663, 62, 'Ngã Bảy', NULL, 1),
(664, 62, 'Châu Thành A', NULL, 1),
(665, 62, 'Châu Thành', NULL, 1),
(666, 62, 'Phụng Hiệp', NULL, 1),
(667, 62, 'Vị Thuỷ', NULL, 1),
(668, 62, 'Long Mỹ', NULL, 1),
(669, 61, 'Sóc Trăng', NULL, 1),
(670, 61, 'Châu Thành', NULL, 1),
(671, 61, 'Kế Sách', NULL, 1),
(672, 61, 'Mỹ Tú', NULL, 1),
(673, 61, 'Cù Lao Dung', NULL, 1),
(674, 61, 'Long Phú', NULL, 1),
(675, 61, 'Mỹ Xuyên', NULL, 1),
(676, 61, 'Ngã Năm', NULL, 1),
(677, 61, 'Thạnh Trị', NULL, 1),
(678, 61, 'Vĩnh Châu', NULL, 1),
(679, 61, 'Trần Đề', NULL, 1),
(680, 60, 'Bạc Liêu', NULL, 1),
(681, 60, 'Hồng Dân', NULL, 1),
(682, 60, 'Phước Long', NULL, 1),
(683, 60, 'Vĩnh Lợi', NULL, 1),
(684, 60, 'Giá Rai', NULL, 1),
(685, 60, 'Đông Hải', NULL, 1),
(686, 60, 'Hoà Bình', NULL, 1),
(687, 12, 'Cà Mau', NULL, 1),
(688, 12, 'U Minh', NULL, 1),
(689, 12, 'Thới Bình', NULL, 1),
(690, 12, 'Trần Văn Thời', NULL, 1),
(691, 12, 'Cái Nước', NULL, 1),
(692, 12, 'Đầm Dơi', NULL, 1),
(693, 12, 'Năm Căn', NULL, 1),
(694, 12, 'Phú Tân', NULL, 1),
(695, 12, 'Ngọc Hiển', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `monies`
--

CREATE TABLE IF NOT EXISTS `monies` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `shop_name` varchar(255) DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  `detail` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `monies`
--

TRUNCATE TABLE `monies`;
-- --------------------------------------------------------

--
-- Table structure for table `nationals`
--

CREATE TABLE IF NOT EXISTS `nationals` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) NOT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `nationals`
--

TRUNCATE TABLE `nationals`;
--
-- Dumping data for table `nationals`
--

INSERT INTO `nationals` (`id`, `name`, `slug`, `rate`) VALUES
(1, 'Việt Nam', 'vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE IF NOT EXISTS `notices` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `notice_status` tinyint(2) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `notices`
--

TRUNCATE TABLE `notices`;
-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) unsigned NOT NULL,
  `account_id` int(11) unsigned NOT NULL,
  `total` double NOT NULL,
  `order_status` int(1) NOT NULL,
  `payment_status` int(1) NOT NULL,
  `payment_method` tinyint(2) DEFAULT '1',
  `paypal_capture` varchar(256) DEFAULT NULL,
  `postage` double DEFAULT '0',
  `delivery_cash` double NOT NULL,
  `deleted` int(11) NOT NULL DEFAULT '0',
  `deleted_date` datetime DEFAULT NULL,
  `confirm_date` varchar(255) NOT NULL,
  `delivery_date` varchar(255) NOT NULL,
  `transfer_date` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `orders`
--

TRUNCATE TABLE `orders`;
-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) unsigned NOT NULL,
  `order_id` int(11) unsigned NOT NULL,
  `shop_id` int(11) unsigned NOT NULL,
  `product_id` int(11) unsigned NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `type` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) unsigned NOT NULL,
  `price` double unsigned NOT NULL,
  `subtotal` double DEFAULT '0',
  `postage` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `order_details`
--

TRUNCATE TABLE `order_details`;
-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE IF NOT EXISTS `pictures` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL,
  `picture_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `pictures`
--

TRUNCATE TABLE `pictures`;
-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `shop_id` int(9) NOT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `main_img` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(7) DEFAULT '0',
  `publish` tinyint(2) DEFAULT '0',
  `category_id` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT '0',
  `order` int(11) DEFAULT '0',
  `deleted` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `products`
--

TRUNCATE TABLE `products`;
-- --------------------------------------------------------

--
-- Table structure for table `product_type_quantity`
--

CREATE TABLE IF NOT EXISTS `product_type_quantity` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `type` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `product_type_quantity`
--

TRUNCATE TABLE `product_type_quantity`;
-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `id` int(11) NOT NULL,
  `code` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `national_id` int(3) DEFAULT NULL,
  `state_id` int(7) DEFAULT NULL,
  `district_id` int(7) DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) DEFAULT NULL,
  `phonehome` int(15) DEFAULT NULL,
  `contactperson` int(11) DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `type_shop_id` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT '0',
  `publish` tinyint(2) DEFAULT '0',
  `accessed` int(11) DEFAULT NULL,
  `reject` int(11) DEFAULT NULL,
  `count_request` int(11) DEFAULT NULL,
  `requested` tinyint(1) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `shops`
--

TRUNCATE TABLE `shops`;
-- --------------------------------------------------------

--
-- Table structure for table `shop_count_views`
--

CREATE TABLE IF NOT EXISTS `shop_count_views` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `current_date` date NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `shop_count_views`
--

TRUNCATE TABLE `shop_count_views`;
-- --------------------------------------------------------

--
-- Table structure for table `shop_infos`
--

CREATE TABLE IF NOT EXISTS `shop_infos` (
  `id` int(11) NOT NULL,
  `full_name` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `dealer` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `zip_code` varchar(256) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `prefecture` int(11) NOT NULL,
  `contact_name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `purchase_price` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exchange` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `returns_product` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `delivery_time` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `privacy_policy` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `license` text CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `date_for_payment` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `shop_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `shop_infos`
--

TRUNCATE TABLE `shop_infos`;
-- --------------------------------------------------------

--
-- Table structure for table `shop_items`
--

CREATE TABLE IF NOT EXISTS `shop_items` (
  `id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `tradetype` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Loại xe',
  `brandname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Nhãn hiệu xe',
  `productname` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'Tên xe',
  `img` text,
  `pricefrom` int(11) DEFAULT NULL,
  `priceto` int(11) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0',
  `created` datetime DEFAULT NULL,
  `updated` datetime DEFAULT NULL,
  `deleted_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `shop_items`
--

TRUNCATE TABLE `shop_items`;
-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` int(10) unsigned NOT NULL,
  `national_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(64) NOT NULL,
  `slug` varchar(64) DEFAULT NULL,
  `rate` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=65 DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `states`
--

TRUNCATE TABLE `states`;
--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `national_id`, `name`, `slug`, `rate`) VALUES
(1, 1, 'An Giang', '805', 63),
(2, 1, 'Bà Rịa - Vũng Tàu', '717', 46),
(3, 1, 'Bình Dương', '711', 45),
(4, 1, 'Bình Phước', '707', 44),
(5, 1, 'Bình Thuận', '715', 43),
(6, 1, 'Bình Định', '507', 42),
(7, 1, 'Bắc Giang', '221', 41),
(8, 1, 'Bắc Kạn', '207', 40),
(9, 1, 'Bắc Ninh', '223', 39),
(10, 1, 'Bến Tre', '811', 38),
(11, 1, 'Cao Bằng', '203', 37),
(12, 1, 'Cà Mau', '823', 36),
(13, 1, 'Cần Thơ', '815', 35),
(14, 1, 'Gia Lai', '603', 34),
(15, 1, 'Hà Giang', '201', 47),
(16, 1, 'Hà Nam', '111', 48),
(17, 1, 'Hà Nội', '101', 49),
(18, 1, 'Hà Tây', '105', 62),
(19, 1, 'Hà Tĩnh', '405', 61),
(20, 1, 'Hòa Bình', '305', 60),
(21, 1, 'Hưng Yên', '109', 59),
(22, 1, 'Hải Dương', '107', 58),
(23, 1, 'Hải Phòng', '103', 57),
(24, 1, 'Hồ Chí Minh', '701', 1),
(25, 1, 'Khánh Hòa', '511', 56),
(26, 1, 'Kiên Giang', '813', 55),
(27, 1, 'Kon Tum', '601', 54),
(28, 1, 'Lai Châu', '301', 53),
(29, 1, 'Long An', '801', 52),
(30, 1, 'Lào Cai', '205', 51),
(31, 1, 'Lâm Đồng', '703', 50),
(32, 1, 'Lạng Sơn', '209', 33),
(33, 1, 'Nam Định', '113', 32),
(34, 1, 'Nghệ An', '403', 15),
(35, 1, 'Ninh Bình', '117', 14),
(36, 1, 'Ninh Thuận', '705', 13),
(37, 1, 'Phú Thọ', '217', 12),
(38, 1, 'Phú Yên', '509', 11),
(39, 1, 'Quảng Bình', '407', 10),
(40, 1, 'Quảng Nam', '503', 9),
(41, 1, 'Quảng Ngãi', '505', 7),
(42, 1, 'Quảng Ninh', '225', 6),
(43, 1, 'Quảng Trị', '409', 5),
(44, 1, 'Sơn La', '303', 4),
(45, 1, 'Thanh Hóa', '401', 3),
(46, 1, 'Thái Bình', '115', 2),
(47, 1, 'Thái Nguyên', '215', 16),
(48, 1, 'Thừa Thiên - Huế', '411', 17),
(49, 1, 'Tiền Giang', '807', 31),
(50, 1, 'Trà Vinh', '817', 30),
(51, 1, 'Tuyên Quang', '211', 29),
(52, 1, 'Tây Ninh', '709', 28),
(53, 1, 'Vĩnh Long', '809', 27),
(54, 1, 'Vĩnh Phúc', '104', 26),
(55, 1, 'Yên Bái', '213', 25),
(56, 1, 'Đà Nẵng', '501', 24),
(57, 1, 'Đắk Lắk', '605', 23),
(58, 1, 'Đồng Nai', '713', 22),
(59, 1, 'Đồng Tháp', '803', 21),
(60, 1, 'Bạc Liêu', '821', 20),
(61, 1, 'Sóc Trăng', '819', 19),
(62, 1, 'Hậu Giang', '825', 18),
(63, 1, 'Đắk Nông', '607', 8),
(64, 1, 'Điện Biên', NULL, 255);

-- --------------------------------------------------------

--
-- Table structure for table `type_shops`
--

CREATE TABLE IF NOT EXISTS `type_shops` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT '1:motor;2:car',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `type_shops`
--

TRUNCATE TABLE `type_shops`;
--
-- Dumping data for table `type_shops`
--

INSERT INTO `type_shops` (`id`, `type`, `name`) VALUES
(1, '1', 'Xe máy');

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE IF NOT EXISTS `wish_lists` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `wish_lists`
--

TRUNCATE TABLE `wish_lists`;
--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `monies`
--
ALTER TABLE `monies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nationals`
--
ALTER TABLE `nationals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_type_quantity`
--
ALTER TABLE `product_type_quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_count_views`
--
ALTER TABLE `shop_count_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_infos`
--
ALTER TABLE `shop_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_items`
--
ALTER TABLE `shop_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_shops`
--
ALTER TABLE `type_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID';
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=696;
--
-- AUTO_INCREMENT for table `monies`
--
ALTER TABLE `monies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `nationals`
--
ALTER TABLE `nationals`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pictures`
--
ALTER TABLE `pictures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_type_quantity`
--
ALTER TABLE `product_type_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `shop_count_views`
--
ALTER TABLE `shop_count_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_infos`
--
ALTER TABLE `shop_infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shop_items`
--
ALTER TABLE `shop_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `type_shops`
--
ALTER TABLE `type_shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
