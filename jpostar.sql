-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2025 at 12:24 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jpostar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type_id` int(11) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `title_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_id` int(11) DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`id`, `name`, `name_en`, `img`, `url`, `des`, `post_type_id`, `parent_id`, `title_seo`, `des_seo`, `key_seo`, `status`, `theme_id`, `canon`, `type`, `des_en`, `title_seo_en`, `des_seo_en`, `key_seo_en`, `orderby`, `index_meta`, `created_at`, `updated_at`) VALUES
(1, 'Lĩnh vực', NULL, '', 'linh-vuc', NULL, NULL, 0, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 23:30:55', '2023-12-27 23:30:55'),
(2, 'Dự án', NULL, '', 'du-an', NULL, NULL, 0, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 23:31:01', '2023-12-27 23:31:01'),
(3, 'Tuyển dụng', NULL, '', 'tuyen-dung', NULL, NULL, 0, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 23:31:12', '2023-12-27 23:31:12'),
(4, 'Tin tức', NULL, '', 'tin-tuc', NULL, NULL, 0, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-27 23:31:17', '2023-12-27 23:31:17'),
(5, 'Giới thiệu', NULL, 'COD-3.jpg', 'gioi-thieu', 'NTECHCO khởi công dự án Xử lý nước thải nhà máy Hóa Dầu Long Sơn (hạng mục EPC E&I)', NULL, 0, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 18:23:04', '2025-02-23 23:44:48'),
(6, 'Tư vấn thiết kế', NULL, 'nhan luc.png', 'tu-van-thiet-ke', '- Thiết kế điện đường dây và TBA đến 35KV\r\n- Thiết  kế điện năng lượng tái tạo, điện gió, điện mặt trời\r\n-Thiết kế các công trình xây dựng dân dụng và công nghiệp\r\n- Thiết kế hệ thống điện nhẹ (CCTV), hệ thống điều hòa không khí (HVAC), hệ thống cấp thoát nước (Plumbing), hệ thống cơ điện (Electrical),...', NULL, 1, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 18:29:37', '2024-03-08 21:34:04'),
(7, 'Thi Công lắp đặt', NULL, 'xay dung.png', 'thi-cong-lap-dat', '- Thi công các công trình đz và TBA đến 500kV\r\n- Thi công xây dựng các công trình năng lượng và tái tạo (Điện gió, điện mặt trời, nhiệt điện, thủy điện, Lọc hóa dầu,...)\r\n- Thi công xây dựng nhà xưởng, nhà công nghiệp, hạ tầng kỹ thuật\r\n- Cung cấp, gia công chế tạo và đặt kết cấu thép, bồn bể, đường ống và thiết bị vào công trình,...\r\n- Tổng thầu các công trình xây dựng\r\n-Thi công hệ thống điện nhẹ (CCTV), hệ thống điều hòa không khí (HVAC), hệ thống cấp thoát nước (Plumbing), hệ thống cơ điện (Electrical),...', NULL, 1, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 18:30:20', '2024-03-08 21:35:51'),
(8, 'Lĩnh vực khác', NULL, 'nhan luc-1.png', 'linh-vuc-khac', '- Cung cấp nhân lực\r\n- Cho thuê máy móc thiết bị\r\n- Cung cấp vật tư thiết bị xây dựng, cơ khí, điện\r\n- Bảo hành bảo trì nhà máy', NULL, 1, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-28 18:30:28', '2024-03-08 21:25:59'),
(10, 'Điện gió - điện mặt trời', NULL, '', 'dien-gio-dien-mat-troi', NULL, NULL, 2, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-30 10:11:59', '2023-12-30 10:11:59'),
(11, 'Cơ khí chế tạo', NULL, '', 'co-khi-che-tao', NULL, NULL, 2, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-30 10:13:36', '2023-12-30 10:13:36'),
(12, 'Hệ thống Điện, đo lường, thông tin liên lạc, HVAC,...', NULL, '', 'ong-dien-ngam', NULL, NULL, 2, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-30 10:14:39', '2025-02-23 23:46:19'),
(13, 'Trạm biến áp', NULL, '', 'tram-bien-ap', NULL, NULL, 2, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-30 10:15:10', '2023-12-30 10:15:10'),
(14, 'Thi công xây dựng công trình', NULL, '', 'thi-cong-xay-dung-cong-trinh', NULL, NULL, 2, NULL, NULL, NULL, 'on', NULL, 'off', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-30 10:15:46', '2023-12-30 10:15:46');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `content`, `img`, `name`, `tel`, `email`, `product_id`, `user_id`, `review`, `status`, `updated_at`, `created_at`) VALUES
(1, 'ds', NULL, NULL, NULL, NULL, 280, NULL, '3', 'on', '2022-08-03 12:38:04', '2022-08-03 12:36:25'),
(2, 'sdf', NULL, 'fsd', 'fsd', NULL, 280, NULL, '4', 'on', '2022-08-04 09:55:54', '2022-08-03 12:37:03'),
(3, 'gfd', NULL, 'gfd', 'gdf', NULL, 280, NULL, '5', 'on', '2022-08-04 10:38:03', '2022-08-04 10:32:07'),
(10, 'Giao diện đẹp dễ sử dụng', NULL, 'Phạm Hoàng Anh', NULL, NULL, 386, NULL, '2', 'on', '2022-08-04 12:28:52', '2022-08-04 12:28:52'),
(11, 'Tôi muốn đặt mua', NULL, 'Phạm Trần Hoàng Minh', NULL, NULL, 386, NULL, '3', 'on', '2022-08-04 12:29:07', '2022-08-04 12:29:07'),
(12, 'Giao diệp đẹp quá', NULL, 'Vũ Minh Ngọc', NULL, NULL, 386, NULL, '4', 'on', '2022-08-04 12:31:58', '2022-08-04 12:31:58'),
(13, 'Giao diện đẹp dễ sử dụng', NULL, 'Nguyễn Hào', NULL, NULL, 385, NULL, '4', 'on', '2022-08-08 12:35:43', '2022-08-08 12:35:43'),
(14, 'Giao diệp đẹp quá', NULL, 'Vũ Việt Hà', NULL, NULL, 385, NULL, '4', 'on', '2022-08-08 12:35:43', '2022-08-08 12:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(11) NOT NULL,
  `value` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `value`, `name`, `updated_at`, `created_at`) VALUES
(1, '3.8', 'version_database', '2020-11-23 03:52:09', '0000-00-00 00:00:00'),
(3, 'off', 'pay_test', '2020-11-16 06:14:36', '0000-00-00 00:00:00'),
(4, 'on', 'nhanhoa_test', '2021-11-06 09:14:51', '0000-00-00 00:00:00'),
(5, 'off', 'server_offline', '2021-10-22 17:50:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `tel`, `email`, `updated_at`, `created_at`) VALUES
(1, 'Phạm Văn cường', '0987654321', 'cuong@webux.vn', '2022-08-04 11:25:12', '2022-08-04 11:18:10'),
(3, 'Đặng Tuấn Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(4, 'Hoàng Đức Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(5, 'Lưu Trang Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(6, 'Phạm Hoàng Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(7, 'Phạm Thị Hiền Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(8, 'Phạm Khắc Việt Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(9, 'Đỗ Hoàng Gia Bảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(10, 'Trần Thị Minh Châu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(11, 'Tăng Phương Chi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(12, 'Gan Feng Du', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(13, 'Phạm Tiến Dũng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(14, 'Nguyễn Thái Dương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(15, 'Trần An Dương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(16, 'Mạc Trung Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(17, 'Vũ Hương Giang', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(18, 'Nguyễn Thị Ngân Hà', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(19, 'Nguyễn Lê Hiếu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(20, 'Phạm Xuân Hòa', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(21, 'Khoa Minh Hoàng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(22, 'Nguyễn Hữu Hiệp Hoàng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(23, 'Nguyễn Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(24, 'Nguyễn Vũ Gia Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(25, 'Trần Tuấn Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(26, 'Phạm Gia Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(27, 'Đỗ Hoàng Mỹ', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(28, 'Đỗ Quang Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(29, 'Đàm Yến Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(30, 'Đoàn Hoàng Sơn', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(31, 'Nguyễn Công Thành', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(32, 'Bùi Phương Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(33, 'Nguyễn Hương Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(34, 'Tô Diệu Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(35, 'Vũ Phương Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(36, 'Đặng Huyền Thi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(37, 'Đặng Thành Trung', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(38, 'Trịnh Thiên Trường', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(39, 'Lê Khánh Vy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(40, 'Phạm Vũ Ngọc Diệp', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(41, 'Trần Đức Dương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(42, 'Nguyễn Quốc Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(43, 'Phạm Bảo Liên', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(44, 'Đinh Thùy Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(45, 'Nguyễn Thùy Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(46, 'Đỗ Hà Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(47, 'Vũ Thùy Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(48, 'Đỗ Thùy Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(49, 'Hoàng Nhật Mai', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(50, 'Nguyễn Trọng Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(51, 'Ngô Gia Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(52, 'Mai Hoàng Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(53, 'Đỗ Hải Nam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(54, 'Trần Bảo Ngân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(55, 'Trần Kim Ngân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(56, 'Đỗ Minh Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(57, 'Bùi Khánh Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(58, 'Trần Uyên Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(59, 'Phạm Đặng Gia Như', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(60, 'Lê Tất Hoàng Phát', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(61, 'Đào Tuấn Phong', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(62, 'Nguyễn Phú Hải Phong', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(63, 'Trần Trung Phong', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(64, 'Bùi Thành Tài', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(65, 'Đặng Thanh Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(66, 'Nguyễn Trường Thịnh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(67, 'Dương Phúc Thịnh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(68, 'Nguyễn Minh Thư', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(69, 'Bùi Trung Minh Trí', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(70, 'Hoàng Quốc Trung', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(71, 'Vũ Hữu Minh Tường', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(72, 'Lê Thị Phương Vy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(73, 'Nguyễn Hùng Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(74, 'Nguyễn Ngọc Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(75, 'Mai Tùng Bách', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(76, 'Nguyễn Trần Bình', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(77, 'Vũ Điệp Chi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(78, 'Phạm Văn Đạt', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(79, 'Hoàng An Đông', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(80, 'Vũ Trung Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(81, 'Phí Vũ Trí Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(82, 'Đặng Gia Hân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(83, 'Lưu Ngọc Hiền', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(84, 'Phạm Ngọc Hiếu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(85, 'Phạm Sỹ Hiếu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(86, 'Phạm Phương Hoa', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(87, 'Vũ Đức Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(88, 'Vũ Thanh Huyền', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(89, 'Phạm Thu Huyền', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(90, 'Nguyễn Tuấn Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(91, 'Trần Đức Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(92, 'Nguyễn Tiến Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(93, 'Lê Nguyễn Diệu Hương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(94, 'Nguyễn Hữu Ngọc Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(95, 'Bùi Nam Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(96, 'Đinh Ngọc Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(97, 'Hồ Nguyễn Minh Khuê', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(98, 'Phạm Vũ Diệp Lam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(99, 'Đinh Hoàng Tùng Lâm', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(100, 'Lê Quang Long', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(101, 'Phạm Thị Phương Mai', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(102, 'Lê Trần Tuấn Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(103, 'Nguyễn Thị Bích Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(104, 'Lê Trung Nguyên', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(105, 'Lê Quỳnh Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(106, 'Nguyễn Tuyết Anh Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(107, 'Đinh Phú Sang', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(108, 'Đào Duy Thái', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(109, 'Vũ Minh Thư', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(110, 'Hà Duy Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(111, 'Đồng Đức Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(112, 'Vũ Ngân Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(113, 'Trần Mai Quỳnh Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(114, 'Nguyễn Thị Tùng Chi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(115, 'Phạm Quang Dũng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(116, 'Nguyễn Tùng Dương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(117, 'Phạm Đức Đạt', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(118, 'Nguyễn Hải Đông', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(119, 'Nguyễn Duy Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(120, 'Nguyễn Vũ Minh Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(121, 'Trịnh Việt Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(122, 'Lưu Hương Giang', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(123, 'Quản Gia Hân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(124, 'Nguyễn Trọng Hiếu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(125, 'Nguyễn Quang Hùng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(126, 'Trần Gia Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(127, 'Đặng Vũ Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(128, 'Phạm Ngọc Huyền', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(129, 'Trần Ngọc Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(130, 'Bùi Đức Kiên', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(131, 'Bùi Hải Lâm', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(132, 'Dương Khánh Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(133, 'Trần Huy Hoàng Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(134, 'Trần Nhật Long', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(135, 'Trần Đức Lương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(136, 'Nguyễn Đức Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(137, 'Đoàn Hải Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(138, 'Mai Xuân Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(139, 'Bùi Xuân Nam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(140, 'Bùi Khánh Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(141, 'Mai Phương Ngọc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(142, 'Nguyễn Yến Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(143, 'Đinh Ngọc Quỳnh Như', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(144, 'Nguyễn Minh Phương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(145, 'Nguyễn Minh Quân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(146, 'Nguyễn Thúy Quỳnh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(147, 'Lê Thị Minh Tâm', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(148, 'Hoàng Đức Thành', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(149, 'Nguyễn Đức Thiện', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(150, 'Phạm Thị Thu Trang', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(151, 'Lương Thị Thúy An', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(152, 'Bùi Quỳnh Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(153, 'Phạm Phương Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(154, 'Phạm Hoàng Bách', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(155, 'Đoàn Việt Bách', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(156, 'Trần Lê Gia Bảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(157, 'Bùi Ngọc Chi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(158, 'Ng Hoàng Kim Cương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(159, 'Hoàng Trung Dũng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(160, 'Phạm Anh Duy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(161, 'Bùi Công Duy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(162, 'Bùi Nhật Dương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(163, 'Đỗ Duy Đoàn', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(164, 'Đỗ Duy Hải', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(165, 'Lương Bảo Hân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(166, 'Phạm Minh Hiển', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(167, 'Nguyễn Đức Hiếu', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(168, 'Phạm Gia Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(169, 'Nguyễn Minh Huyền', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(170, 'Bùi Công Khanh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(171, 'Nguyễn Hoàng Lâm', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(172, 'Văn Tiến Long', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(173, 'Hoàng Hải Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(174, 'Nguyễn Tuấn Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(175, 'Đỗ Trần Nam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(176, 'Trần Đức Nam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(177, 'Nguyễn Bảo Nam', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(178, 'Trần Vũ Hà Ngân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(179, 'Phạm Trần Lan Nhi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(180, 'Nguyễn Đăng Phong', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(181, 'Bùi An Phú', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(182, 'Đỗ Đức Phúc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(183, 'Nguyễn Hồng Phúc', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(184, 'Bùi Đàm Mai Phương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(185, 'Phạm Minh Phương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(186, 'Nguyễn Hữu Thành', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(187, 'Lại Hương Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(188, 'Nguyễn Quang Thiện', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(189, 'Bùi Quang Tín', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(190, 'Lê Vi Phương Trinh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(191, 'Vũ Hiểu Trung', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(192, 'Nguyễn Hoàng Vy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(193, 'Vũ Hải Hà An', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(194, 'Phạm Thế An', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(195, 'Nguyễn Tô Lân Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(196, 'Trần Hoàng Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(197, 'Phạm Trúc Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(198, 'Nguyễn Thùy Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(199, 'Nguyễn Thảo Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(200, 'Đoàn Duy Bảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(201, 'Lê Thùy Chi', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(202, 'Trần Việt Cường', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(203, 'Dương Minh Dũng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(204, 'Lê Sỹ Dũng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(205, 'Nguyễn Thế Duy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(206, 'Nguyễn Ngọc Hà', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(207, 'Nguyễn Đức Gia Hòa', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(208, 'Đào Thanh Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(209, 'Đào Nguyên Gia Huy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(210, 'Ng Hữu Bình Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(211, 'Lê Hoàng Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(212, 'Đoàn Vĩnh Hưng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(213, 'Đặng Hữu Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(214, 'Bùi Nam Khánh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(215, 'Vũ Thiện Khiêm', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(216, 'Đoàn Bá Khuyến', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(217, 'Trần Phương Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(218, 'Vũ Tú Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(219, 'Đỗ Vũ Ngọc Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(220, 'Hoàng Phương Linh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(221, 'Hoàng Lê Minh Long', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(222, 'Ng Thị Ngọc Lương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(223, 'Nguyễn Như Mai', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(224, 'Hoàng Duy Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(225, 'Vũ Đặng Khánh My', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(226, 'Vũ Ngọc Hiếu Ngân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(227, 'Hà Huy Tùng Nguyên', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(228, 'Phạm Bá Phú', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(229, 'Hoàng Thế Quang', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(230, 'Trần Bảo Thy', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(231, 'Quản Hữu Toàn', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(232, 'Nguyễn Việt Trinh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(233, 'Đỗ Phúc Hiếu Tuệ', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(234, 'Phạm Duy Tùng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(235, 'Vũ Đặng Hoàng Vũ', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(236, 'Đào Thảo', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(237, 'Đỗ Đức', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(238, 'Nguyễn Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(239, 'Nguyễn P Phương', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(240, 'Phạm Nhật', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(241, 'Phạm Tuệ', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(242, 'Vũ Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(243, 'Vũ Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(244, 'Nguyễn Thanh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(245, 'Đặng Nhật Minh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(246, 'Nguyễn Anh', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(247, 'Nguyễn Ngân', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(248, 'Nguyễn Phạm Hải', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(249, 'Vũ Trọng', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(250, 'Nguyễn Tiến', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(251, 'Ngô Kim', NULL, NULL, '2022-08-04 11:32:15', '2022-08-04 11:32:15'),
(252, 'Bùi Lam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(253, 'An Gia', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(254, 'Đoàn Phạm Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(255, 'Nguyễn Hoàng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(256, 'Trương Hồng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(257, 'Phạm Xuân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(258, 'Vũ Hoàng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(259, 'Dương Gia', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(260, 'Hà Trần Thảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(261, 'Nguyễn Quỳnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(262, 'Bùi Thảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(263, 'Phạm Hải Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(264, 'Nguyễn Việt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(265, 'Đỗ Phạm Hoàng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(266, 'Nguyễn Hào', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(267, 'Nguyễn Thế', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(268, 'Vũ Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(269, 'Phùng Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(270, 'Đoàn Thu', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(271, 'Lê Khánh Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(272, 'Dương Khoa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(273, 'Lương Ngọc Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(274, 'Nguyễn Ngọc Diệp Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(275, 'Bùi Ngọc Phương Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(276, 'Đồng Mai Phương Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(277, 'Nguyễn Dương Quang Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(278, 'Phạm Đức Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(279, 'Nguyễn Hoàng Duy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(280, 'Trần Hồng Dương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(281, 'Nguyễn Hoàng Gia', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(282, 'Phạm Vân Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(283, 'Lưu Hoàng Hải', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(284, 'Phạm Dương Hằng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(285, 'Vũ Quốc Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(286, 'Nguyễn Duy Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(287, 'Trần Duy Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(288, 'Trần Khánh Linh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(289, 'Phạm Quang Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(290, 'Phạm Hà My', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(291, 'Lê My', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(292, 'Trần Tiến Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(293, 'Nguyễn Song Thành Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(294, 'Nguyễn Hà Ngân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(295, 'Vũ Minh Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(296, 'Nguyễn Vũ Bảo Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(297, 'Nguyễn Thiên Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(298, 'Nguyễn Yến Nhi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(299, 'Nguyễn Minh Phượng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(300, 'Nguyễn Hải Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(301, 'Nguyễn Đoàn Đức Thành', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(302, 'Nguyễn Dương Thành', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(303, 'Đào Hồng Thiện', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(304, 'Nguyễn Ngọc Hà Trang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(305, 'Phạm Nguyễn Minh Trí', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(306, 'Phạm Hoàng Việt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(307, 'Mạc Nguyễn Hà Vy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(308, 'Trần Quỳnh Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(309, 'Trần Thị Quỳnh Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(310, 'Tô Thành Bách', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(311, 'Lê Minh Châu', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(312, 'Ng. Hoàng Tiến Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(313, 'Đỗ Thùy Dương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(314, 'Vũ Bá Đại', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(315, 'Trần Tuấn Đạt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(316, 'Vũ Nhân Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(317, 'Trần Minh Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(318, 'Nguyễn Đình Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(319, 'Lương Trần Bảo Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(320, 'Phạm Nguyễn Bảo Hân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(321, 'Vũ Minh Hoàng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(322, 'Trần Quốc Khánh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(323, 'Lê Nguyễn Hà Linh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(324, 'Nguyễn Thị Phương Linh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(325, 'Lê Minh Long', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(326, 'Lã Hiền Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(327, 'Phạm Trần Hoàng Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(328, 'Nguyễn Trung Nghĩa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(329, 'Nguyễn Thị Minh Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(330, 'Phạm Minh Nhật', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(331, 'Phạm Nhiên Khánh Nhi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(332, 'Nguyễn Hoàng Bảo Nhi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(333, 'Cao Nguyễn Bảo Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(334, 'Hoàng Gia Trọng Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(335, 'Nguyễn Đăng Quang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(336, 'Đào Thiện Anh Quân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(337, 'Nguyễn Đức Toàn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(338, 'Tô Ngọc Trang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(339, 'Lương Lê Ngọc BảoTrân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(340, 'Nguyễn Minh Triết', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(341, 'Nguyễn Trung Trực', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(342, 'Đỗ Minh Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(343, 'Nguyễn Hoàng Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(344, 'Đặng Quốc Việt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(345, 'Hoàng Văn Bảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(346, 'Lưu Thanh Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(347, 'Hoàng Thị Thanh Mai', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(348, 'Nguyễn Quỳnh Hoa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(349, 'Cao Thị Xuân Dung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(350, 'Đỗ Hồng Việt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(351, 'Phạm Thị Thu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(352, 'Bùi Thị Vân Thiện', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(353, 'Nguyễn Thị Thu Hiền', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(354, 'Nguyễn Thị Trà My', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(355, 'Trần Thị Thúy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(356, 'Trần Trọng Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(357, 'Mạc Văn Việt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(358, 'Bùi Thị Thu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(359, 'Nguyễn Văn Đạm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(360, 'Lê Thị Hợi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(361, 'Phạm Văn Cường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(362, 'Khoa Năng Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(363, 'Nguyễn Hữu Hòa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(364, 'Nguyễn Vân Long', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(365, 'Nguyễn Thị Dương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(366, 'Tô Thị Mai', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(367, 'Phạm Duy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(368, 'Bùi Phạm Vân Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(369, 'Đỗ Quang Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(370, 'Nguyễn Thị Thu Hằng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(371, 'Cao Thị Phương Thảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(372, 'Nguyễn Thị Việt Yên', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(373, 'Bùi Văn Quân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(374, 'Nguyễn Thị Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(375, 'Tô Sỹ Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(376, 'Vũ Duy Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(377, 'Phạm Thị Thanh Thùy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(378, 'Nguyễn Thị Mai', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(379, 'Trịnh Đình Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(380, 'Đinh Thúy Hằng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(381, 'Phạm Ngọc Thạch', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(382, 'Trần Diệu Lê', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(383, 'Nguyễn Thế Tài', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(384, 'Phạm văn Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(385, 'Đinh Trọng Hiệp', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(386, 'Nguyễn Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(387, 'Đỗ Văn Tấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(388, 'Vũ Văn Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(389, 'Đỗ Trọng Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(390, 'Hoàng Đại Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(391, 'Nguyễn Văn Chung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(392, 'Ngô Văn Hiệp', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(393, 'Mai Văn Bình', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(394, 'Đỗ Mạnh Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(395, 'Trần Đức Trung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(396, 'Trần Hoài Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(397, 'Đỗ Văn Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(398, 'Bùi Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(399, 'Trần Anh Thi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(400, 'Phạm Gia Mạnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(401, 'Lê Tất Thế', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(402, 'Đào Hồng Cẩm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(403, 'Nguyễn Văn Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(404, 'Trần Trung Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(405, 'Bùi Đình Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(406, 'Đặng Văn Toán', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(407, 'Nguyễn Văn Trường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(408, 'Dương Văn Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(409, 'Nguyễn Quốc Tú', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(410, 'Bùi Trung Huấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(411, 'Hoàng Tiến Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(412, 'Vũ Hữu Thiện', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(413, 'Lê Hữu Kông', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(414, 'Nguyễn Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(415, 'Phạm Thị Bích Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(416, 'Nguyễn Thúy Hảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(417, 'Trần Thị Hường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(418, 'Phạm Thị Phượng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(419, 'Nguyễn Thị Bích Thúy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(420, 'Vũ Thị Văn Thường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(421, 'Đoàn Thị Thu Huyền', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(422, 'Vũ Thị Kim Chung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(423, 'Nguyễn Thu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(424, 'Nguyễn Thị Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(425, 'Vũ Thị Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(426, 'Nguyễn Thị Hường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(427, 'Vũ Thị Phương Mai', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(428, 'Nguyễn Thị Thắm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(429, 'Đoàn Thị Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(430, 'Phạm Thu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(431, 'Ngô Thị Minh Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(432, 'Nguyễn Thị Hằng Nga', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(433, 'Nguyễn Diệu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(434, 'Nguyễn Thu Hoài', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(435, 'Nguyễn Thị Lý', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(436, 'Hoàng Thị Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(437, 'Trần Thanh Diệp', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(438, 'Nguyễn Quỳnh Giang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(439, 'Vũ Thị Thu Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(440, 'Hoàng Thị Bích Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(441, 'Trần Thị Thanh Tâm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(442, 'Nguyễn Thị Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(443, 'Trần Diễm Thùy Dương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(444, 'Phạm Thị Kim Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(445, 'Trần Thị Hảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(446, 'Bùi Thị Kim Oanh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(447, 'Phạm Ánh Tuyết', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(448, 'Đặng Thùy Vân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(449, 'Nguyễn Bích Thủy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(450, 'Vũ Thế Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(451, 'Hà Quang Phong', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(452, 'Đồng Thanh Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(453, 'Vũ Đức Nghĩa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(454, 'Trần Đức Hoàn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(455, 'Nguyễn Thanh Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(456, 'Phạm Hồng Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(457, 'Nguyễn Mạnh Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(458, 'Phạm Văn Công', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(459, 'Nguyễn Hồng Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(460, 'Nguyễn Duy Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(461, 'Nguyễn Bình Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(462, 'Trịnh Xuân Cường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(463, 'Lưu Văn Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(464, 'Quản Văn Tạo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(465, 'Nguyễn Thị Linh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(466, 'Nguyễn Quang Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(467, 'Trần Thanh Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(468, 'Đặng Hưng Thịnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(469, 'Phạm Đức Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(470, 'Trân Thành', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(471, 'Bùi Thanh Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(472, 'Bùi Trường Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(473, 'Dương Thế Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(474, 'Trân Tăng Xuân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(475, 'Đào Xuân Mạnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(476, 'Trần Hoàn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(477, 'Nguyễn Đức Thuân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(478, 'Đoàn Thế Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(479, 'Mai Xuân Khải', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(480, 'Bùi Bình Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(481, 'Bùi Văn Đạt', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(482, 'Mai Ngọc Tấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(483, 'Nguyễn Khanh Hoài', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(484, 'Đinh Văn Điễn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(485, 'Nguyễn Đức Tiến', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(486, 'Nguyễn Văn Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(487, 'Nguyễn Anh Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(488, 'Lê Bình Nguyên', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(489, 'Hoàng Quang Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(490, 'Đỗ Quốc Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(491, 'Phạm Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(492, 'Họ và tên bố ( mẹ )', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(493, 'Vũ hải Thanh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(494, 'Phạm Thế Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(495, 'Ng. Thị Mai Hương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(496, 'Trần Đoàn Viện', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(497, 'Phạm Hữu Nguyên', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(498, 'Ng Bảo Long', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(499, 'Ng Thiết Dân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(500, 'Đoàn bảo Thanh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(501, 'Lê Văn Thông', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(502, 'Trần Ngoc Vinh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(503, 'Dương Việt Cường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(504, 'Lê Sỹ Trị', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(505, 'Nguyễn Thế Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(506, 'Ng Kim Hoằng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(507, 'Nguyễn Thế Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(508, 'Đào Thanh Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(509, 'Đào Ng Gia Huy -', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(510, 'Ng Hữu Trọng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(511, 'Đoàn Hữu Phong -', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(512, 'Đặng Hữu Trung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(513, 'Bùi Trọng Nghĩa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(514, 'Vũ Quang Hợp', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(515, 'Đoàn Văn Trung', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(516, 'Trần Trọng Tâm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(517, 'Vũ Văn Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(518, 'Đỗ Hoài Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(519, 'Hoàng Trung Quân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(520, 'Hoàng Lê Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(521, 'Nguyễn Thế Kiên', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(522, 'Nguyễn Khắc Hải -', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(523, 'Hoàng Duy Thành', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(524, 'Đặng T Vân Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(525, 'Vũ văn Trọng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(526, 'Hà Huy Tùng- NV', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(527, 'Phạm Duy Quảng-', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(528, 'Hoàng Văn Tình', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(529, 'Trần Mạnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(530, 'Quản Hữu Hiệp', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(531, 'Ng Phó Màu-', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(532, 'Đỗ Hoài Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(533, 'Phạm Ngọc Long -', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(534, 'Vũ Hồng Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(535, 'Trần Hữu Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(536, 'Trần Huy Quân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(537, 'Tô Thành Thủy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(538, 'Lê Minh Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(539, 'Hoàng T Thu Thủy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(540, 'Đỗ Mạnh Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(541, 'Vũ Bá Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(542, 'Trần Khánh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(543, 'Vũ Nhân Hảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(544, 'Trần Nghị', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(545, 'Ng. Đình Tuyến', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(546, 'Lương Hồng Hải', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(547, 'Phạm Xuân Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(548, 'Vũ Quốc Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(549, 'Trần Quốc An', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(550, 'Lê Xuân Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(551, 'Ng. Văn Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(552, 'Lê Minh Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(553, 'Lã Tuấn Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(554, 'Phạm Văn Tuân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(555, 'Nguyễn Minh Vũ', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(556, 'Nguyễn Văn Hóa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(557, 'Phạm Thanh Tùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(558, 'Phạm Khâm Thiêm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(559, 'Ng.Mạnh Hồng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(560, 'Cao Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(561, 'Hoàng Gia Vịnh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(562, 'Ng.Đăng Hoàng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(563, 'Đào Thiện Trị', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(564, 'Ng.Đại Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(565, 'Phạm Bích Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(566, 'LươngNgọc Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(567, 'Ng.Hồng Quang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(568, 'Ng.Trung Thành', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(569, 'Đỗ Văn Hiền', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(570, 'Ng.Hoàng Chiến', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(571, 'Đào Văn Thuyết', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(572, 'Đỗ Mạnh Đức', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(573, 'Nguyễn Trung Nghĩa', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(574, 'Nguyễn Xuân Thứ', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(575, 'Phạm Quang Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(576, 'Phạm Trung Thái', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(577, 'Vũ Mạnh Toàn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(578, 'Vũ Việt Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(579, 'Nguyễn Văn Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(580, 'Đặng Hồng Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(581, 'Nguyễn Văn Kỳ', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(582, 'Nguyễn Hoàng Chương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(583, 'Nguyễn Xuân Trí', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(584, 'Vũ Đức Thiện', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(585, 'Nguyễn Tiến Dũng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(586, 'Ngô Minh Tuân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(587, 'Bùi Xuân Trường', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(588, 'An Sơn Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(589, 'Đoàn Ngọc Lâm', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(590, 'Nguyễn Văn Tá', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(591, 'Trương Tuấn Lợi', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(592, 'Phạm Quang Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(593, 'Vũ Việt Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(594, 'Dương Anh Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(595, 'Hà Văn Thắng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(596, 'Nguyễn Bá Sơn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(597, 'Bùi Đức Thìn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(598, 'Phạm Hải Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(599, 'Nguyễn Việt Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(600, 'Đỗ Văn Tú', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(601, 'Nguyễn Ngọc Hà', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(602, 'Nguyễn Hải Đăng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(603, 'Vũ Đức Trọng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(604, 'Phùng Ngọc Luyến', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(605, 'Đoàn Huy Quân', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(606, 'Lê Mạnh Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(607, 'Dương Anh Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(608, 'Lương Văn Long', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(609, 'Nguyễn Hữu Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(610, 'Bùi Minh Chính', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(611, 'Đồng Văn Bảo', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(612, 'Nguyễn Dương Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(613, 'Phạm Văn Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(614, 'Nguyễn Quốc Khánh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(615, 'Trần Đức Anh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(616, 'Nguyễn Thanh Vinh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16');
INSERT INTO `contact` (`id`, `name`, `tel`, `email`, `updated_at`, `created_at`) VALUES
(617, 'Phạm Văn Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(618, 'Lưu Hải Âu', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(619, 'Phạm Trung Huy', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(620, 'Vũ Quốc Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(621, 'Trần Đức Minh', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(622, 'Trần Văn Bính', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(623, 'Phạm Văn Quang', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(624, 'Phạm Văn Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(625, 'Lê Hải Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(626, 'Trần Duy Đông', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(627, 'Nguyễn Song Phương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(628, 'Nguyễn Đức Hùng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(629, 'Vũ Quốc Vương', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(630, 'Nguyễn Văn Nam', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(631, 'Nguyễn Thiên Ngọc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(632, 'Nguyễn Đình Hiếu', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(633, 'Nguyễn Minh Phúc', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(634, 'Nguyễn Thế Học', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(635, 'Nguyễn Hùng Kiên', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(636, 'Nguyễn Mạnh Hải', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(637, 'Đào Quang Hưng', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(638, 'Nguyễn Ngọc Vũ', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(639, 'Phạm Ngọc Quyết', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(640, 'Phạm Quang Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16'),
(641, 'Mạc Huy Tuấn', NULL, NULL, '2022-08-04 11:32:16', '2022-08-04 11:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `huyen`
--

CREATE TABLE `huyen` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinh_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `huyen`
--

INSERT INTO `huyen` (`id`, `name`, `url`, `tinh_id`, `updated_at`, `created_at`) VALUES
(1, 'A Lưới', 'a-luoi', 57, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(2, 'An Biên', 'an-bien', 33, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(3, 'An Dương', 'an-duong', 26, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(4, 'An Khê', 'an-khe', 21, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(5, 'An Lão', 'an-lao', 8, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(6, 'An Minh', 'an-minh', 33, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(7, 'An Nhơn', 'an-nhon', 8, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(8, 'An Phú', 'an-phu', 1, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(9, 'Anh Sơn', 'anh-son', 41, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(10, 'Ayun Pa', 'ayun-pa', 21, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(11, 'Ân Thi', 'an-thi', 31, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(12, 'Ba Bể', 'ba-be', 3, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(13, 'Ba Chẽ', 'ba-che', 49, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(14, 'Ba Đình', 'ba-dinh', 27, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(15, 'Ba Đồn', 'ba-don', 46, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(16, 'Ba Tơ', 'ba-to', 48, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(17, 'Ba Tri', 'ba-tri', 7, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(18, 'Ba Vì', 'ba-vi', 27, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(19, 'Bà Rịa', 'ba-ria', 6, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(20, 'Bá Thước', 'ba-thuoc', 56, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(21, 'Bác Ái', 'bac-ai', 43, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(22, 'TP Bạc Liêu', 'tp-bac-lieu', 4, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(23, 'Bạch Long Vĩ', 'bach-long-vi', 26, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(24, 'Bạch Thông', 'bach-thong', 3, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(25, 'Bảo Lạc', 'bao-lac', 14, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(26, 'Bảo Lâm', 'bao-lam', 36, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(27, 'Bảo Lộc', 'bao-loc', 36, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(28, 'Bảo Thắng', 'bao-thang', 38, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(29, 'Bảo Yên', 'bao-yen', 38, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(30, 'Bát Xát', 'bat-xat', 38, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(31, 'Bàu Bàng', 'bau-bang', 9, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(32, 'Bắc Bình', 'bac-binh', 11, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(33, 'TP Bắc Giang', 'tp-bac-giang', 2, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(34, 'Bắc Hà', 'bac-ha', 38, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(35, 'TP Bắc Kạn', 'tp-bac-kan', 3, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(36, 'Bắc Mê', 'bac-me', 22, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(37, 'TP Bắc Ninh', 'tp-bac-ninh', 5, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(38, 'Bắc Quang', 'bac-quang', 22, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(39, 'Bắc Sơn', 'bac-son', 37, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(40, 'Bắc Tân Uyên', 'bac-tan-uyen', 9, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(41, 'Bắc Trà My', 'bac-tra-my', 47, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(42, 'Bắc Từ Liêm', 'bac-tu-liem', 27, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(43, 'Bắc Yên', 'bac-yen', 52, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(44, 'Bến Cát', 'ben-cat', 9, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(45, 'Bến Cầu', 'ben-cau', 53, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(46, 'Bến Lức', 'ben-luc', 39, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(47, 'TP Bến Tre', 'tp-ben-tre', 7, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(48, 'Biên Hòa', 'bien-hoa', 19, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(49, 'Bỉm Sơn', 'bim-son', 56, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(50, 'Bình Chánh', 'binh-chanh', 30, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(51, 'Bình Đại', 'binh-dai', 7, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(52, 'Bình Gia', 'binh-gia', 37, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(53, 'Bình Giang', 'binh-giang', 25, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(54, 'Bình Liêu', 'binh-lieu', 49, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(55, 'Bình Long', 'binh-long', 10, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(56, 'Bình Lục', 'binh-luc', 23, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(57, 'Bình Minh', 'binh-minh', 61, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(58, 'Bình Sơn', 'binh-son', 48, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(59, 'Bình Tân', 'binh-tan', 61, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(60, 'Bình Thạnh', 'binh-thanh', 30, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(61, 'Bình Thủy', 'binh-thuy', 13, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(62, 'Bình Xuyên', 'binh-xuyen', 62, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(63, 'Bố Trạch', 'bo-trach', 46, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(64, 'Bù Đăng', 'bu-dang', 10, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(65, 'Bù Đốp', 'bu-dop', 10, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(66, 'Bù Gia Mập', 'bu-gia-map', 10, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(67, 'Buôn Đôn', 'buon-don', 16, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(68, 'Buôn Hồ', 'buon-ho', 16, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(69, 'Buôn Ma Thuột', 'buon-ma-thuot', 16, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(70, 'TP Cà Mau', 'tp-ca-mau', 12, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(71, 'Cai Lậy', 'cai-lay', 58, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(72, 'Cái Bè', 'cai-be', 58, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(73, 'Cái Nước', 'cai-nuoc', 12, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(74, 'Cái Răng', 'cai-rang', 13, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(75, 'Cam Lâm', 'cam-lam', 32, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(76, 'Cam Lộ', 'cam-lo', 50, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(77, 'Cam Ranh', 'cam-ranh', 32, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(78, 'Can Lộc', 'can-loc', 24, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(79, 'Càng Long', 'cang-long', 59, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(80, 'TP Cao Bằng', 'tp-cao-bang', 14, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(81, 'Cao Lãnh', 'cao-lanh', 20, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(82, 'Cao Lộc', 'cao-loc', 37, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(83, 'Cao Phong', 'cao-phong', 29, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(84, 'Cát Hải', 'cat-hai', 26, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(85, 'Cát Tiên', 'cat-tien', 36, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(86, 'Cẩm Giàng', 'cam-giang', 25, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(87, 'Cẩm Khê', 'cam-khe', 44, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(88, 'Cẩm Lệ', 'cam-le', 15, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(89, 'Cẩm Mỹ', 'cam-my', 19, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(90, 'Cẩm Phả', 'cam-pha', 49, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(91, 'Cẩm Thủy', 'cam-thuy', 56, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(92, 'Cẩm Xuyên', 'cam-xuyen', 24, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(93, 'Cần Đước', 'can-duoc', 39, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(94, 'Cần Giờ', 'can-gio', 30, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(95, 'Cần Giuộc', 'can-giuoc', 39, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(96, 'Cầu Giấy', 'cau-giay', 27, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(97, 'Cầu Kè', 'cau-ke', 59, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(98, 'Cầu Ngang', 'cau-ngang', 59, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(99, 'Châu Đốc', 'chau-doc', 1, '2020-07-31 12:01:41', '2020-07-31 12:01:41'),
(100, 'Châu Đức', 'chau-duc', 6, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(101, 'Châu Phú', 'chau-phu', 1, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(102, 'Châu Thành', 'chau-thanh', 59, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(103, 'Châu Thành A', 'chau-thanh-a', 28, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(104, 'Chi Lăng', 'chi-lang', 37, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(105, 'Chí Linh', 'chi-linh', 25, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(106, 'Chiêm Hóa', 'chiem-hoa', 60, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(107, 'Chợ Đồn', 'cho-don', 3, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(108, 'Chợ Gạo', 'cho-gao', 58, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(109, 'Chợ Lách', 'cho-lach', 7, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(110, 'Chợ Mới', 'cho-moi', 1, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(111, 'Chơn Thành', 'chon-thanh', 10, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(112, 'Chư Păh', 'chu-pah', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(113, 'Chư Prông', 'chu-prong', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(114, 'Chư Pưh', 'chu-puh', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(115, 'Chư Sê', 'chu-se', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(116, 'Chương Mỹ', 'chuong-my', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(117, 'Con Cuông', 'con-cuong', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(118, 'Cô Tô', 'co-to', 49, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(119, 'Côn Đảo', 'con-dao', 6, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(120, 'Cồn Cỏ', 'con-co', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(121, 'Cờ Đỏ', 'co-do', 13, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(122, 'Cù Lao Dung', 'cu-lao-dung', 51, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(123, 'Củ Chi', 'cu-chi', 30, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(124, 'Cư Kuin', 'cu-kuin', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(125, 'Cư Jút', 'cu-jut', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(126, 'Cư M\'gar', 'cu-mgar', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(127, 'Cửa Lò', 'cua-lo', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(128, 'Dầu Tiếng', 'dau-tieng', 9, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(129, 'Di Linh', 'di-linh', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(130, 'Dĩ An', 'di-an', 9, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(131, 'Diên Khánh', 'dien-khanh', 32, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(132, 'Diễn Châu', 'dien-chau', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(133, 'Duy Tiên', 'duy-tien', 23, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(134, 'Duy Xuyên', 'duy-xuyen', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(135, 'Duyên Hải', 'duyen-hai', 59, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(136, 'Dương Kinh', 'duong-kinh', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(137, 'Dương Minh Châu', 'duong-minh-chau', 53, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(138, 'Đa Krông', 'da-krong', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(139, 'Đà Bắc', 'da-bac', 29, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(140, 'Đà Lạt', 'da-lat', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(141, 'Đạ Huoai', 'da-huoai', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(142, 'Đạ Tẻh', 'da-teh', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(143, 'Đại Lộc', 'dai-loc', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(144, 'Đại Từ', 'dai-tu', 55, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(145, 'Đắk Đoa', 'dak-doa', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(146, 'Đak Pơ', 'dak-po', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(147, 'Đan Phượng', 'dan-phuong', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(148, 'Đắk Glei', 'dak-glei', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(149, 'Đắk Glong', 'dak-glong', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(150, 'Đắk Hà', 'dak-ha', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(151, 'Đắk Mil', 'dak-mil', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(152, 'Đắk R\'lấp', 'dak-rlap', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(153, 'Đắk Song', 'dak-song', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(154, 'Đắk Tô', 'dak-to', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(155, 'Đầm Dơi', 'dam-doi', 12, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(156, 'Đầm Hà', 'dam-ha', 49, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(157, 'Đam Rông', 'dam-rong', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(158, 'Đất Đỏ', 'dat-do', 6, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(159, 'Điện Bàn', 'dien-ban', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(160, 'TP Điện Biên', 'tp-dien-bien', 18, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(161, 'Điện Biên Đông', 'dien-bien-dong', 18, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(162, 'Điện Biên Phủ', 'dien-bien-phu', 18, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(163, 'Đình Lập', 'dinh-lap', 37, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(164, 'Định Hóa', 'dinh-hoa', 55, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(165, 'Định Quán', 'dinh-quan', 19, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(166, 'Đoan Hùng', 'doan-hung', 44, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(167, 'Đô Lương', 'do-luong', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(168, 'Đồ Sơn', 'do-son', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(169, 'Đông Anh', 'dong-anh', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(170, 'Đông Giang', 'dong-giang', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(171, 'Đông Hà', 'dong-ha', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(172, 'Đông Hải', 'dong-hai', 4, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(173, 'Đông Hòa', 'dong-hoa', 45, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(174, 'Đông Hưng', 'dong-hung', 54, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(175, 'Đông Sơn', 'dong-son', 56, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(176, 'Đông Triều', 'dong-trieu', 49, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(177, 'Đồng Hới', 'dong-hoi', 46, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(178, 'Đồng Hỷ', 'dong-hy', 55, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(179, 'Đồng Phú', 'dong-phu', 10, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(180, 'Đồng Văn', 'dong-van', 22, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(181, 'Đồng Xoài', 'dong-xoai', 10, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(182, 'Đồng Xuân', 'dong-xuan', 45, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(183, 'Đống Đa', 'dong-da', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(184, 'Đơn Dương', 'don-duong', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(185, 'Đức Cơ', 'duc-co', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(186, 'Đức Hòa', 'duc-hoa', 39, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(187, 'Đức Huệ', 'duc-hue', 39, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(188, 'Đức Linh', 'duc-linh', 11, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(189, 'Đức Phổ', 'duc-pho', 48, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(190, 'Đức Thọ', 'duc-tho', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(191, 'Đức Trọng', 'duc-trong', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(192, 'Ea H\'leo', 'ea-hleo', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(193, 'Ea Kar', 'ea-kar', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(194, 'Ea Súp', 'ea-sup', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(195, 'Gia Bình', 'gia-binh', 5, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(196, 'Gia Lâm', 'gia-lam', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(197, 'Gia Lộc', 'gia-loc', 25, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(198, 'Gia Nghĩa', 'gia-nghia', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(199, 'Gia Viễn', 'gia-vien', 42, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(200, 'Giá Rai', 'gia-rai', 4, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(201, 'Giang Thành', 'giang-thanh', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(202, 'Giao Thủy', 'giao-thuy', 40, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(203, 'Gio Linh', 'gio-linh', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(204, 'Giồng Riềng', 'giong-rieng', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(205, 'Giồng Trôm', 'giong-trom', 7, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(206, 'Gò Công', 'go-cong', 58, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(207, 'Gò Công Đông', 'go-cong-dong', 58, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(208, 'Gò Công Tây', 'go-cong-tay', 58, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(209, 'Gò Dầu', 'go-dau', 53, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(210, 'Gò Quao', 'go-quao', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(211, 'Gò Vấp', 'go-vap', 30, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(212, 'Hà Đông', 'ha-dong', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(213, 'TP Hà Giang', 'tp-ha-giang', 22, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(214, 'Hà Quảng', 'ha-quang', 14, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(215, 'Hà Tiên', 'ha-tien', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(216, 'TP Hà Tĩnh', 'tp-ha-tinh', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(217, 'Hà Trung', 'ha-trung', 56, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(218, 'Hạ Hòa', 'ha-hoa', 44, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(219, 'Hạ Lang', 'ha-lang', 14, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(220, 'Hạ Long', 'ha-long', 49, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(221, 'Hai Bà Trưng', 'hai-ba-trung', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(222, 'Hải An', 'hai-an', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(223, 'Hải Châu', 'hai-chau', 15, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(224, 'TP Hải Dương', 'tp-hai-duong', 25, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(225, 'Hải Hà', 'hai-ha', 49, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(226, 'Hải Hậu', 'hai-hau', 40, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(227, 'Hải Lăng', 'hai-lang', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(228, 'Hàm Tân', 'ham-tan', 11, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(229, 'Hàm Thuận Bắc', 'ham-thuan-bac', 11, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(230, 'Hàm Thuận Nam', 'ham-thuan-nam', 11, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(231, 'Hàm Yên', 'ham-yen', 60, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(232, 'Hậu Lộc', 'hau-loc', 56, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(233, 'Hiệp Đức', 'hiep-duc', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(234, 'Hiệp Hòa', 'hiep-hoa', 2, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(235, 'Hoa Lư', 'hoa-lu', 42, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(236, 'Hòa An', 'hoa-an', 14, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(237, 'TP Hoà Bình', 'tp-hoa-binh', 29, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(238, 'Hòa Thành', 'hoa-thanh', 53, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(239, 'Hòa Vang', 'hoa-vang', 15, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(240, 'Hoài Ân', 'hoai-an', 8, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(241, 'Hoài Đức', 'hoai-duc', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(242, 'Hoài Nhơn', 'hoai-nhon', 8, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(243, 'Hoàn Kiếm', 'hoan-kiem', 27, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(244, 'Hoàng Mai', 'hoang-mai', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(245, 'Hoàng Sa', 'hoang-sa', 15, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(246, 'Hoàng Su Phì', 'hoang-su-phi', 22, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(247, 'Hoằng Hóa', 'hoang-hoa', 56, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(248, 'Hóc Môn', 'hoc-mon', 30, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(249, 'Hòn Đất', 'hon-dat', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(250, 'Hớn Quản', 'hon-quan', 10, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(251, 'Hội An', 'hoi-an', 47, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(252, 'Hồng Bàng', 'hong-bang', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(253, 'Hồng Dân', 'hong-dan', 4, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(254, 'Hồng Lĩnh', 'hong-linh', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(255, 'Hồng Ngự', 'hong-ngu', 20, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(256, 'Huế', 'hue', 57, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(257, 'Hưng Hà', 'hung-ha', 54, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(258, 'Hưng Nguyên', 'hung-nguyen', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(259, 'TP Hưng Yên', 'tp-hung-yen', 31, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(260, 'Hương Khê', 'huong-khe', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(261, 'Hương Sơn', 'huong-son', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(262, 'Hương Thủy', 'huong-thuy', 57, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(263, 'Hương Trà', 'huong-tra', 57, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(264, 'Hướng Hóa', 'huong-hoa', 50, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(265, 'Hữu Lũng', 'huu-lung', 37, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(266, 'Ia Grai', 'ia-grai', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(267, 'Ia H\'Drai', 'ia-hdrai', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(268, 'Ia Pa', 'ia-pa', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(269, 'K\'Bang', 'kbang', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(270, 'Kế Sách', 'ke-sach', 51, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(271, 'Khánh Sơn', 'khanh-son', 32, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(272, 'Khánh Vĩnh', 'khanh-vinh', 32, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(273, 'Khoái Châu', 'khoai-chau', 31, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(274, 'Kiên Hải', 'kien-hai', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(275, 'Kiên Lương', 'kien-luong', 33, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(276, 'Kiến An', 'kien-an', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(277, 'Kiến Thụy', 'kien-thuy', 26, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(278, 'Kiến Xương', 'kien-xuong', 54, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(279, 'Kiến Tường', 'kien-tuong', 39, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(280, 'Kim Bảng', 'kim-bang', 23, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(281, 'Kim Bôi', 'kim-boi', 29, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(282, 'Kim Động', 'kim-dong', 31, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(283, 'Kim Sơn', 'kim-son', 42, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(284, 'Kim Thành', 'kim-thanh', 25, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(285, 'Kinh Môn', 'kinh-mon', 25, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(286, 'Kon Plông', 'kon-plong', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(287, 'Kon Rẫy', 'kon-ray', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(288, 'TP Kon Tum', 'tp-kon-tum', 34, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(289, 'Kông Chro', 'kong-chro', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(290, 'Krông Ana', 'krong-ana', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(291, 'Krông Bông', 'krong-bong', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(292, 'Krông Búk', 'krong-buk', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(293, 'Krông Năng', 'krong-nang', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(294, 'Krông Nô', 'krong-no', 17, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(295, 'Krông Pa', 'krong-pa', 21, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(296, 'Krông Pắk', 'krong-pak', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(297, 'Kỳ Anh', 'ky-anh', 24, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(298, 'Kỳ Sơn', 'ky-son', 41, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(299, 'La Gi', 'la-gi', 11, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(300, 'Lạc Dương', 'lac-duong', 36, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(301, 'Lạc Sơn', 'lac-son', 29, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(302, 'Lạc Thủy', 'lac-thuy', 29, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(303, 'TP Lai Châu', 'tp-lai-chau', 35, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(304, 'Lai Vung', 'lai-vung', 20, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(305, 'Lang Chánh', 'lang-chanh', 56, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(306, 'Lạng Giang', 'lang-giang', 2, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(307, 'TP Lạng Sơn', 'tp-lang-son', 37, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(308, 'TP Lào Cai', 'tp-lao-cai', 38, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(309, 'Lắk', 'lak', 16, '2020-07-31 12:01:42', '2020-07-31 12:01:42'),
(310, 'Lâm Bình', 'lam-binh', 60, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(311, 'Lâm Hà', 'lam-ha', 36, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(312, 'Lâm Thao', 'lam-thao', 44, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(313, 'Lấp Vò', 'lap-vo', 20, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(314, 'Lập Thạch', 'lap-thach', 62, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(315, 'Lê Chân', 'le-chan', 26, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(316, 'Lệ Thủy', 'le-thuy', 46, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(317, 'Liên Chiểu', 'lien-chieu', 15, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(318, 'Long Biên', 'long-bien', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(319, 'Long Điền', 'long-dien', 6, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(320, 'Long Hồ', 'long-ho', 61, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(321, 'Long Khánh', 'long-khanh', 19, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(322, 'Long Mỹ', 'long-my', 28, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(323, 'Long Phú', 'long-phu', 51, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(324, 'Long Thành', 'long-thanh', 19, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(325, 'Long Xuyên', 'long-xuyen', 1, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(326, 'Lộc Bình', 'loc-binh', 37, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(327, 'Lộc Hà', 'loc-ha', 24, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(328, 'Lộc Ninh', 'loc-ninh', 10, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(329, 'Lục Nam', 'luc-nam', 2, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(330, 'Lục Ngạn', 'luc-ngan', 2, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(331, 'Lục Yên', 'luc-yen', 63, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(332, 'Lương Sơn', 'luong-son', 29, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(333, 'Lương Tài', 'luong-tai', 5, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(334, 'Lý Nhân', 'ly-nhan', 23, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(335, 'Lý Sơn', 'ly-son', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(336, 'Mai Châu', 'mai-chau', 29, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(337, 'Mai Sơn', 'mai-son', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(338, 'Mang Thít', 'mang-thit', 61, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(339, 'Mang Yang', 'mang-yang', 21, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(340, 'M\'Đrăk', 'mdrak', 16, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(341, 'Mèo Vạc', 'meo-vac', 22, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(342, 'Mê Linh', 'me-linh', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(343, 'Minh Hóa', 'minh-hoa', 46, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(344, 'Minh Long', 'minh-long', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(345, 'Mỏ Cày Bắc', 'mo-cay-bac', 7, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(346, 'Mỏ Cày Nam', 'mo-cay-nam', 7, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(347, 'Móng Cái', 'mong-cai', 49, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(348, 'Mộ Đức', 'mo-duc', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(349, 'Mộc Châu', 'moc-chau', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(350, 'Mộc Hóa', 'moc-hoa', 39, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(351, 'Mù Cang Chải', 'mu-cang-chai', 63, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(352, 'Mường Ảng', 'muong-ang', 18, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(353, 'Mường Chà', 'muong-cha', 18, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(354, 'Mường Khương', 'muong-khuong', 38, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(355, 'Mường La', 'muong-la', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(356, 'Mường Lát', 'muong-lat', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(357, 'Mường Lay', 'muong-lay', 18, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(358, 'Mường Nhé', 'muong-nhe', 18, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(359, 'Mường Tè', 'muong-te', 35, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(360, 'Mỹ Đức', 'my-duc', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(361, 'Mỹ Hào', 'my-hao', 31, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(362, 'Mỹ Lộc', 'my-loc', 40, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(363, 'Mỹ Tho', 'my-tho', 58, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(364, 'Mỹ Tú', 'my-tu', 51, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(365, 'Mỹ Xuyên', 'my-xuyen', 51, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(366, 'Na Hang', 'na-hang', 60, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(367, 'Na Rì', 'na-ri', 3, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(368, 'Nam Đàn', 'nam-dan', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(369, 'TP Nam Định', 'tp-nam-dinh', 40, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(370, 'Nam Đông', 'nam-dong', 57, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(371, 'Nam Giang', 'nam-giang', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(372, 'Nam Sách', 'nam-sach', 25, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(373, 'Nam Trà My', 'nam-tra-my', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(374, 'Nam Trực', 'nam-truc', 40, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(375, 'Nam Từ Liêm', 'nam-tu-liem', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(376, 'Năm Căn', 'nam-can', 12, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(377, 'Nậm Pồ', 'nam-po', 18, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(378, 'Nậm Nhùn', 'nam-nhun', 35, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(379, 'Nga Sơn', 'nga-son', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(380, 'Ngã Bảy', 'nga-bay', 28, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(381, 'Ngã Năm', 'nga-nam', 51, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(382, 'Ngân Sơn', 'ngan-son', 3, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(383, 'Nghi Lộc', 'nghi-loc', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(384, 'Nghi Sơn', 'nghi-son', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(385, 'Nghi Xuân', 'nghi-xuan', 24, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(386, 'Nghĩa Đàn', 'nghia-dan', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(387, 'Nghĩa Hành', 'nghia-hanh', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(388, 'Nghĩa Hưng', 'nghia-hung', 40, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(389, 'Nghĩa Lộ', 'nghia-lo', 63, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(390, 'Ngọc Hiển', 'ngoc-hien', 12, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(391, 'Ngọc Hồi', 'ngoc-hoi', 34, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(392, 'Ngọc Lặc', 'ngoc-lac', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(393, 'Ngô Quyền', 'ngo-quyen', 26, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(394, 'Ngũ Hành Sơn', 'ngu-hanh-son', 15, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(395, 'Nguyên Bình', 'nguyen-binh', 14, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(396, 'Nha Trang', 'nha-trang', 32, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(397, 'Nhà Bè', 'nha-be', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(398, 'Nho Quan', 'nho-quan', 42, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(399, 'Nhơn Trạch', 'nhon-trach', 19, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(400, 'Như Thanh', 'nhu-thanh', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(401, 'Như Xuân', 'nhu-xuan', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(402, 'TP Ninh Bình', 'tp-ninh-binh', 42, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(403, 'Ninh Giang', 'ninh-giang', 25, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(404, 'Ninh Hải', 'ninh-hai', 43, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(405, 'Ninh Hòa', 'ninh-hoa', 32, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(406, 'Ninh Kiều', 'ninh-kieu', 13, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(407, 'Ninh Phước', 'ninh-phuoc', 43, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(408, 'Ninh Sơn', 'ninh-son', 43, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(409, 'Nông Cống', 'nong-cong', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(410, 'Nông Sơn', 'nong-son', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(411, 'Núi Thành', 'nui-thanh', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(412, 'Ô Môn', 'o-mon', 13, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(413, 'Pác Nặm', 'pac-nam', 3, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(414, 'Phan Rang-Tháp Chàm', 'phan-rang-thap-cham', 43, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(415, 'Phan Thiết', 'phan-thiet', 11, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(416, 'Phong Điền', 'phong-dien', 13, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(417, 'Phong Thổ', 'phong-tho', 35, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(418, 'Phổ Yên', 'pho-yen', 55, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(419, 'Phú Bình', 'phu-binh', 55, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(420, 'Phú Giáo', 'phu-giao', 9, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(421, 'Phú Hòa', 'phu-hoa', 45, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(422, 'Phú Lộc', 'phu-loc', 57, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(423, 'Phú Lương', 'phu-luong', 55, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(424, 'Phú Mỹ', 'phu-my', 6, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(425, 'Phú Nhuận', 'phu-nhuan', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(426, 'Phú Ninh', 'phu-ninh', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(427, 'Phú Quý', 'phu-quy', 11, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(428, 'Phú Quốc', 'phu-quoc', 33, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(429, 'Phú Riềng', 'phu-rieng', 10, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(430, 'Phú Tân', 'phu-tan', 12, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(431, 'Phú Thiện', 'phu-thien', 21, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(432, 'TP Phú Thọ', 'tp-phu-tho', 44, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(433, 'Phú Vang', 'phu-vang', 57, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(434, 'Phú Xuyên', 'phu-xuyen', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(435, 'Phù Cát', 'phu-cat', 8, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(436, 'Phù Cừ', 'phu-cu', 31, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(437, 'Phù Mỹ', 'phu-my', 8, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(438, 'Phù Ninh', 'phu-ninh', 44, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(439, 'Phù Yên', 'phu-yen', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(440, 'Phủ Lý', 'phu-ly', 23, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(441, 'Phúc Thọ', 'phuc-tho', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(442, 'Phúc Yên', 'phuc-yen', 62, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(443, 'Phụng Hiệp', 'phung-hiep', 28, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(444, 'Phước Long', 'phuoc-long', 4, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(445, 'Phước Sơn', 'phuoc-son', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(446, 'Pleiku', 'pleiku', 21, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(447, 'Quan Hóa', 'quan-hoa', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(448, 'Quan Sơn', 'quan-son', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(449, 'Quản Bạ', 'quan-ba', 22, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(450, 'Quang Bình', 'quang-binh', 22, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(451, 'Quảng Điền', 'quang-dien', 57, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(452, 'Quảng Hòa', 'quang-hoa', 14, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(453, 'TP Quảng Ngãi', 'tp-quang-ngai', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(454, 'Quảng Ninh', 'quang-ninh', 46, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(455, 'Quảng Trạch', 'quang-trach', 46, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(456, 'TP Quảng Trị', 'tp-quang-tri', 50, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(457, 'Quảng Yên', 'quang-yen', 49, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(458, 'Quảng Xương', 'quang-xuong', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(459, 'Quận 1', 'quan-1', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(460, 'Quận 2', 'quan-2', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(461, 'Quận 3', 'quan-3', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(462, 'Quận 4', 'quan-4', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(463, 'Quận 5', 'quan-5', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(464, 'Quận 6', 'quan-6', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(465, 'Quận 7', 'quan-7', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(466, 'Quận 8', 'quan-8', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(467, 'Quận 9', 'quan-9', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(468, 'Quận 10', 'quan-10', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(469, 'Quận 11', 'quan-11', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(470, 'Quận 12', 'quan-12', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(471, 'Quế Phong', 'que-phong', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(472, 'Quế Sơn', 'que-son', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(473, 'Quế Võ', 'que-vo', 5, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(474, 'Quy Nhơn', 'quy-nhon', 8, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(475, 'Quốc Oai', 'quoc-oai', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(476, 'Quỳ Châu', 'quy-chau', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(477, 'Quỳ Hợp', 'quy-hop', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(478, 'Quỳnh Lưu', 'quynh-luu', 41, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(479, 'Quỳnh Nhai', 'quynh-nhai', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(480, 'Quỳnh Phụ', 'quynh-phu', 54, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(481, 'Rạch Giá', 'rach-gia', 33, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(482, 'Sa Đéc', 'sa-dec', 20, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(483, 'Sa Pa', 'sa-pa', 38, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(484, 'Sa Thầy', 'sa-thay', 34, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(485, 'Sầm Sơn', 'sam-son', 56, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(486, 'Si Ma Cai', 'si-ma-cai', 38, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(487, 'Sìn Hồ', 'sin-ho', 35, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(488, 'Sóc Sơn', 'soc-son', 27, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(489, 'TP Sóc Trăng', 'tp-soc-trang', 51, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(490, 'Sông Cầu', 'song-cau', 45, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(491, 'Sông Công', 'song-cong', 55, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(492, 'Sông Hinh', 'song-hinh', 45, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(493, 'Sông Lô', 'song-lo', 62, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(494, 'Sông Mã', 'song-ma', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(495, 'Sốp Cộp', 'sop-cop', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(496, 'Sơn Động', 'son-dong', 2, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(497, 'Sơn Dương', 'son-duong', 60, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(498, 'Sơn Hà', 'son-ha', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(499, 'Sơn Hòa', 'son-hoa', 45, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(500, 'TP Sơn La', 'tp-son-la', 52, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(501, 'Sơn Tây', 'son-tay', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(502, 'Sơn Tịnh', 'son-tinh', 48, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(503, 'Sơn Trà', 'son-tra', 15, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(504, 'Tam Bình', 'tam-binh', 61, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(505, 'Tam Dương', 'tam-duong', 62, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(506, 'Tam Đảo', 'tam-dao', 62, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(507, 'Tam Điệp', 'tam-diep', 42, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(508, 'Tam Đường', 'tam-duong', 35, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(509, 'Tam Kỳ', 'tam-ky', 47, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(510, 'Tam Nông', 'tam-nong', 44, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(511, 'Tánh Linh', 'tanh-linh', 11, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(512, 'Tân An', 'tan-an', 39, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(513, 'Tân Biên', 'tan-bien', 53, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(514, 'Tân Bình', 'tan-binh', 30, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(515, 'Tân Châu', 'tan-chau', 53, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(516, 'Tân Hiệp', 'tan-hiep', 33, '2020-07-31 12:01:43', '2020-07-31 12:01:43'),
(517, 'Tân Hồng', 'tan-hong', 20, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(518, 'Tân Hưng', 'tan-hung', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(519, 'Tân Kỳ', 'tan-ky', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(520, 'Tân Lạc', 'tan-lac', 29, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(521, 'Tân Phú', 'tan-phu', 30, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(522, 'Tân Phú Đông', 'tan-phu-dong', 58, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(523, 'Tân Phước', 'tan-phuoc', 58, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(524, 'Tân Sơn', 'tan-son', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(525, 'Tân Thạnh', 'tan-thanh', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(526, 'Tân Trụ', 'tan-tru', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(527, 'Tân Uyên', 'tan-uyen', 35, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(528, 'Tân Yên', 'tan-yen', 2, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(529, 'Tây Giang', 'tay-giang', 47, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(530, 'Tây Hòa', 'tay-hoa', 45, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(531, 'Tây Hồ', 'tay-ho', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(532, 'TP Tây Ninh', 'tp-tay-ninh', 53, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(533, 'Tây Sơn', 'tay-son', 8, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(534, 'Thạch An', 'thach-an', 14, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(535, 'Thạch Hà', 'thach-ha', 24, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(536, 'Thạch Thành', 'thach-thanh', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(537, 'Thạch Thất', 'thach-that', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(538, 'TP Thái Bình', 'tp-thai-binh', 54, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(539, 'Thái Hòa', 'thai-hoa', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(540, 'TP Thái Nguyên', 'tp-thai-nguyen', 55, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(541, 'Thái Thụy', 'thai-thuy', 54, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(542, 'Than Uyên', 'than-uyen', 35, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(543, 'Thanh Ba', 'thanh-ba', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(544, 'Thanh Bình', 'thanh-binh', 20, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(545, 'Thanh Chương', 'thanh-chuong', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(546, 'Thanh Hà', 'thanh-ha', 25, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(547, 'TP Thanh Hóa', 'tp-thanh-hoa', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(548, 'Thanh Khê', 'thanh-khe', 15, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(549, 'Thanh Liêm', 'thanh-liem', 23, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(550, 'Thanh Miện', 'thanh-mien', 25, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(551, 'Thanh Oai', 'thanh-oai', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(552, 'Thanh Sơn', 'thanh-son', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(553, 'Thanh Thủy', 'thanh-thuy', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(554, 'Thanh Trì', 'thanh-tri', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(555, 'Thanh Xuân', 'thanh-xuan', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(556, 'Thạnh Hóa', 'thanh-hoa', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(557, 'Thạnh Phú', 'thanh-phu', 7, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(558, 'Thạnh Trị', 'thanh-tri', 51, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(559, 'Tháp Mười', 'thap-muoi', 20, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(560, 'Thăng Bình', 'thang-binh', 47, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(561, 'Thiệu Hóa', 'thieu-hoa', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(562, 'Thọ Xuân', 'tho-xuan', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(563, 'Thoại Sơn', 'thoai-son', 1, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(564, 'Thống Nhất', 'thong-nhat', 19, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(565, 'Thốt Nốt', 'thot-not', 13, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(566, 'Thới Bình', 'thoi-binh', 12, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(567, 'Thới Lai', 'thoi-lai', 13, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(568, 'Thủ Dầu Một', 'thu-dau-mot', 9, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(569, 'Thủ Đức', 'thu-duc', 30, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(570, 'Thủ Thừa', 'thu-thua', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(571, 'Thuận An', 'thuan-an', 9, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(572, 'Thuận Bắc', 'thuan-bac', 43, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(573, 'Thuận Châu', 'thuan-chau', 52, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(574, 'Thuận Nam', 'thuan-nam', 43, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(575, 'Thuận Thành', 'thuan-thanh', 5, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(576, 'Thủy Nguyên', 'thuy-nguyen', 26, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(577, 'Thường Tín', 'thuong-tin', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(578, 'Thường Xuân', 'thuong-xuan', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(579, 'Tiên Du', 'tien-du', 5, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(580, 'Tiền Hải', 'tien-hai', 54, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(581, 'Tiên Lãng', 'tien-lang', 26, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(582, 'Tiên Lữ', 'tien-lu', 31, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(583, 'Tiên Phước', 'tien-phuoc', 47, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(584, 'Tiên Yên', 'tien-yen', 49, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(585, 'Tiểu Cần', 'tieu-can', 59, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(586, 'Tịnh Biên', 'tinh-bien', 1, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(587, 'Trà Bồng', 'tra-bong', 48, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(588, 'Trà Cú', 'tra-cu', 59, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(589, 'Trà Ôn', 'tra-on', 61, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(590, 'TP Trà Vinh', 'tp-tra-vinh', 59, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(591, 'Trạm Tấu', 'tram-tau', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(592, 'Tràng Định', 'trang-dinh', 37, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(593, 'Trảng Bàng', 'trang-bang', 53, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(594, 'Trảng Bom', 'trang-bom', 19, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(595, 'Trấn Yên', 'tran-yen', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(596, 'Trần Đề', 'tran-de', 51, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(597, 'Trần Văn Thời', 'tran-van-thoi', 12, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(598, 'Tri Tôn', 'tri-ton', 1, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(599, 'Triệu Phong', 'trieu-phong', 50, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(600, 'Triệu Sơn', 'trieu-son', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(601, 'Trùng Khánh', 'trung-khanh', 14, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(602, 'Trực Ninh', 'truc-ninh', 40, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(603, 'Trường Sa', 'truong-sa', 32, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(604, 'Tủa Chùa', 'tua-chua', 18, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(605, 'Tuần Giáo', 'tuan-giao', 18, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(606, 'Tu Mơ Rông', 'tu-mo-rong', 34, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(607, 'Tuy An', 'tuy-an', 45, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(608, 'Tuy Đức', 'tuy-duc', 17, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(609, 'Tuy Hòa', 'tuy-hoa', 45, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(610, 'Tuy Phong', 'tuy-phong', 11, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(611, 'Tuy Phước', 'tuy-phuoc', 8, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(612, 'Tuyên Hóa', 'tuyen-hoa', 46, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(613, 'TP Tuyên Quang', 'tp-tuyen-quang', 60, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(614, 'Tư Nghĩa', 'tu-nghia', 48, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(615, 'Tứ Kỳ', 'tu-ky', 25, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(616, 'Từ Sơn', 'tu-son', 5, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(617, 'Tương Dương', 'tuong-duong', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(618, 'U Minh', 'u-minh', 12, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(619, 'U Minh Thượng', 'u-minh-thuong', 33, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(620, 'Uông Bí', 'uong-bi', 49, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(621, 'Ứng Hòa', 'ung-hoa', 27, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(622, 'Vạn Ninh', 'van-ninh', 32, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(623, 'Văn Bàn', 'van-ban', 38, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(624, 'Văn Chấn', 'van-chan', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(625, 'Văn Giang', 'van-giang', 31, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(626, 'Văn Lãng', 'van-lang', 37, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(627, 'Văn Lâm', 'van-lam', 31, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(628, 'Văn Quan', 'van-quan', 37, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(629, 'Văn Yên', 'van-yen', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(630, 'Vân Canh', 'van-canh', 8, '2020-07-31 12:01:44', '2020-07-31 12:01:44');
INSERT INTO `huyen` (`id`, `name`, `url`, `tinh_id`, `updated_at`, `created_at`) VALUES
(631, 'Vân Đồn', 'van-don', 49, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(632, 'Vân Hồ', 'van-ho', 52, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(633, 'Vị Thanh', 'vi-thanh', 28, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(634, 'Vị Thủy', 'vi-thuy', 28, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(635, 'Vị Xuyên', 'vi-xuyen', 22, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(636, 'Việt Trì', 'viet-tri', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(637, 'Việt Yên', 'viet-yen', 2, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(638, 'Vinh', 'vinh', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(639, 'Vĩnh Bảo', 'vinh-bao', 26, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(640, 'Vĩnh Châu', 'vinh-chau', 51, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(641, 'Vĩnh Cửu', 'vinh-cuu', 19, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(642, 'Vĩnh Hưng', 'vinh-hung', 39, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(643, 'Vĩnh Linh', 'vinh-linh', 50, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(644, 'TP Vĩnh Long', 'tp-vinh-long', 61, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(645, 'Vĩnh Lộc', 'vinh-loc', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(646, 'Vĩnh Lợi', 'vinh-loi', 4, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(647, 'Vĩnh Thạnh', 'vinh-thanh', 13, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(648, 'Vĩnh Thuận', 'vinh-thuan', 33, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(649, 'Vĩnh Tường', 'vinh-tuong', 62, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(650, 'Vĩnh Yên', 'vinh-yen', 62, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(651, 'Võ Nhai', 'vo-nhai', 55, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(652, 'Vũ Quang', 'vu-quang', 24, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(653, 'Vũ Thư', 'vu-thu', 54, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(654, 'Vụ Bản', 'vu-ban', 40, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(655, 'Vũng Liêm', 'vung-liem', 61, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(656, 'Vũng Tàu', 'vung-tau', 6, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(657, 'Xín Mần', 'xin-man', 22, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(658, 'Xuân Lộc', 'xuan-loc', 19, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(659, 'Xuân Trường', 'xuan-truong', 40, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(660, 'Xuyên Mộc', 'xuyen-moc', 6, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(661, 'Ý Yên', 'y-yen', 40, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(662, 'TP Yên Bái', 'tp-yen-bai', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(663, 'Yên Bình', 'yen-binh', 63, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(664, 'Yên Châu', 'yen-chau', 52, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(665, 'Yên Dũng', 'yen-dung', 2, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(666, 'Yên Định', 'yen-dinh', 56, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(667, 'Yên Khánh', 'yen-khanh', 42, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(668, 'Yên Lạc', 'yen-lac', 62, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(669, 'Yên Lập', 'yen-lap', 44, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(670, 'Yên Minh', 'yen-minh', 22, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(671, 'Yên Mô', 'yen-mo', 42, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(672, 'Yên Mỹ', 'yen-my', 31, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(673, 'Yên Phong', 'yen-phong', 5, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(674, 'Yên Sơn', 'yen-son', 60, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(675, 'Yên Thành', 'yen-thanh', 41, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(676, 'Yên Thế', 'yen-the', 2, '2020-07-31 12:01:44', '2020-07-31 12:01:44'),
(677, 'Yên Thủy', 'yen-thuy', 29, '2020-07-31 12:01:44', '2020-07-31 12:01:44');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_type_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `img`, `url`, `menu_type_id`, `cat_id`, `type`, `parent_id`, `icon`, `attri`, `status`, `orderby`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', NULL, '/', 1, NULL, NULL, 0, NULL, NULL, 'on', 1, '2023-12-27 23:31:29', '2023-12-27 23:31:29'),
(2, 'Giới thiệu', NULL, 'gioi-thieu.html', 1, NULL, NULL, 0, NULL, NULL, 'on', 2, '2023-12-27 23:31:49', '2023-12-27 23:31:49'),
(3, 'Lĩnh vực', NULL, 'linh-vuc', 1, NULL, NULL, 0, NULL, NULL, 'on', 3, '2023-12-27 23:32:07', '2023-12-27 23:32:07'),
(4, 'Dự án', NULL, 'du-an', 1, NULL, NULL, 0, NULL, NULL, 'on', 4, '2023-12-27 23:32:17', '2023-12-27 23:32:17'),
(5, 'Tuyển dụng', NULL, 'tuyen-dung', 1, NULL, NULL, 0, NULL, NULL, 'on', 5, '2023-12-27 23:33:16', '2025-02-23 23:35:06'),
(6, 'Liên hệ', NULL, 'page/lien-he', 1, NULL, NULL, 0, NULL, NULL, 'on', 6, '2023-12-27 23:33:28', '2023-12-31 11:04:21'),
(7, 'Thi công xây dựng công trình', NULL, 'thi-cong-xay-dung-cong-trinh', 2, NULL, NULL, 0, NULL, NULL, 'on', 1, '2023-12-31 10:10:20', '2023-12-31 10:10:20'),
(8, 'Trạm biến áp', NULL, 'tram-bien-ap', 2, NULL, NULL, 0, NULL, NULL, 'on', 2, '2023-12-31 10:10:35', '2023-12-31 10:10:35'),
(9, 'Ống điện ngầm', NULL, 'ong-dien-ngam', 2, NULL, NULL, 0, NULL, NULL, 'on', 3, '2023-12-31 10:10:49', '2023-12-31 10:10:49'),
(10, 'Điện gió - điện mặt trời', NULL, 'dien-gio-dien-mat-troi', 2, NULL, NULL, 0, NULL, NULL, 'on', 4, '2023-12-31 10:11:06', '2023-12-31 10:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `menu_type`
--

CREATE TABLE `menu_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_cat_id` int(11) DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_type`
--

INSERT INTO `menu_type` (`id`, `name`, `url`, `status`, `type`, `display_cat_id`, `orderby`, `created_at`, `updated_at`) VALUES
(1, 'Menu chính', 'menu_chinh', 'on', NULL, 0, NULL, NULL, '2022-08-25 02:41:41'),
(2, 'Menu footer', 'menu_2', 'on', NULL, 0, 2, '2022-08-18 10:55:27', '2023-12-16 23:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `type`, `user_id`, `content`, `status`, `note`, `created_at`, `updated_at`, `name`, `tel`, `email`, `branch`) VALUES
(5, NULL, NULL, NULL, 'off', 'Hotline', '2025-02-24 06:34:31', '2025-02-23 23:34:31', 'Phạm Đình Lương', '0977392825', 'luongpd@ntechco.com.vn', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission`
--

CREATE TABLE `permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission`
--

INSERT INTO `permission` (`id`, `name`, `title`, `type`, `created_at`, `updated_at`) VALUES
(2, 'cat_view', 'Xem danh mục', 'web', NULL, '2020-07-13 16:46:39'),
(3, 'cat_edit', 'Sửa danh mục', 'web', NULL, NULL),
(4, 'post_view', 'Xem bài viết', 'web', NULL, NULL),
(5, 'post_edit', 'Sửa bài viết', 'web', NULL, NULL),
(6, 'menu_view', 'Xem menu', 'web', NULL, NULL),
(7, 'menu_edit', 'Sửa menu', 'web', NULL, NULL),
(8, 'form_view', 'Xem đăng ký', 'web', NULL, NULL),
(9, 'form_edit', 'Sửa đăng ký', 'web', NULL, NULL),
(10, 'slide_view', 'Xem slide', 'web', NULL, NULL),
(11, 'slide_edit', 'Sửa slide', 'web', NULL, NULL),
(12, 'theme_view', 'Xem giao diện', 'web', NULL, NULL),
(13, 'theme_edit', 'Sửa giao diện', 'web', NULL, NULL),
(14, 'icon_view', 'Xem biểu tượng', 'web', NULL, NULL),
(15, 'icon_edit', 'Sửa biểu tượng', 'web', NULL, NULL),
(16, 'config_view', 'Xem cấu hình', 'web', NULL, NULL),
(17, 'config_edit', 'Sửa cấu hình', 'web', NULL, NULL),
(18, 'image_map_view', 'Xem Sơ đồ', 'web', NULL, NULL),
(19, 'image_map_edit', 'Sửa sơ đồ', 'web', NULL, NULL),
(20, 'button_ring_view', 'Xem nút bấm liên hệ', 'web', NULL, NULL),
(21, 'button_ring_edit', 'Sửa nút bấm liên hệ', 'web', NULL, NULL),
(22, 'popup_view', 'Xem poup', 'web', NULL, NULL),
(23, 'popup_edit', 'Sửa poup', 'web', NULL, NULL),
(24, 'tab_view', 'Xem tab', 'web', NULL, NULL),
(25, 'tab_edit', 'Sửa tab', 'web', NULL, NULL),
(26, 'file_view', 'Xem thư viện', 'web', NULL, NULL),
(27, 'file_edit', 'Sửa thư viện', 'web', NULL, NULL),
(28, 'interest_calculator_view', 'Xem tính trả góp', 'web', NULL, NULL),
(29, 'interest_calculator_edit', 'Sửa tính trả góp', 'web', NULL, NULL),
(30, 'contact_view', 'Xem liên hệ', 'web', NULL, NULL),
(31, 'contact_edit', 'Sửa liên hệ', 'web', NULL, NULL),
(32, 'admin_user_view', 'Xem thành viên webbox', 'admin', NULL, NULL),
(33, 'admin_user_edit', 'Sửa thành viên webbox', 'admin', NULL, NULL),
(34, 'admin_permission_view', 'Xem phân quyền thành viên webbox', 'admin', NULL, NULL),
(35, 'admin_permission_edit', 'Sửa phân quyền thành viên webbox', 'admin', NULL, NULL),
(59, 'order_edit', 'Sửa đơn hàng', 'web', '2020-08-04 23:05:20', '2020-08-04 23:05:20'),
(58, 'order_view', 'Xem đơn hàng', 'web', '2020-08-04 23:05:05', '2020-08-04 23:05:05'),
(46, 'popup_regis_view', 'Xem khách hàng đăng ký', 'web', '2020-07-17 14:55:26', '2020-07-17 14:55:26'),
(47, 'popup_regis_edit', 'Sửa khách hàng đăng ký', 'web', '2020-07-17 14:55:38', '2020-07-17 14:55:38'),
(50, 'post_type_view', 'Xem loại bài viết', 'web', '2020-07-28 11:42:04', '2020-07-28 11:42:04'),
(51, 'post_type_edit', 'Sửa loại bài viết', 'web', '2020-07-28 11:42:15', '2020-07-28 11:42:15'),
(52, 'comment_view', 'Xem bình luận', 'web', '2020-07-30 03:42:59', '2020-07-30 03:42:59'),
(53, 'comment_edit', 'Sửa bình luận', 'web', '2020-07-30 03:43:09', '2020-07-30 03:43:09'),
(54, 'gift_code_view', 'Xem mã giảm giá', 'web', '2020-07-31 22:18:14', '2020-07-31 22:18:14'),
(55, 'gift_code_edit', 'Sửa mã giảm giá', 'web', '2020-07-31 22:18:24', '2020-07-31 22:18:24'),
(56, 'crawl_view', 'Xem crawl bài viết', 'web', '2020-08-03 07:15:22', '2020-08-03 07:15:22'),
(57, 'crawl_edit', 'Sửa crawl bài viết', 'web', '2020-08-03 07:15:40', '2020-08-03 07:15:40'),
(60, 'product_edit', 'Sửa sản phẩm', 'web', '2022-08-02 01:25:21', '2022-08-02 01:25:21'),
(61, 'product_view', 'Xem sản phẩm', 'web', '2022-08-02 01:25:38', '2022-08-02 01:25:38'),
(62, 'autocomment_view', 'Xem tự động bình luận', 'web', '2022-08-04 10:55:25', '2022-08-04 10:55:25'),
(63, 'autocomment_edit', 'Sửa tự động bình luận', 'web', '2022-08-04 10:55:36', '2022-08-04 10:55:36'),
(64, 'product_public', 'Duyệt sản phẩm', 'web', '2022-08-07 20:55:52', '2022-08-07 20:55:52'),
(65, 'price_view', 'Xem bảng giá', 'web', '2022-08-19 00:48:36', '2022-08-19 00:48:36'),
(66, 'price_edit', 'Sửa bảng giá', 'web', '2022-08-19 00:48:47', '2022-08-19 00:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lesson` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enroll` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `price_km` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_post_id` int(11) DEFAULT NULL,
  `week` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file_id` int(11) DEFAULT NULL,
  `product_relate_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_type_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT 1,
  `index_product` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gift_code_id` int(11) DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_relate` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `lesson`, `des`, `img`, `enroll`, `des_en`, `title_seo_en`, `des_seo_en`, `key_seo_en`, `url`, `content`, `index_meta`, `title_seo`, `des_seo`, `key_seo`, `canon`, `status`, `pin`, `view`, `created_at`, `updated_at`, `price_km`, `price`, `slide_post_id`, `week`, `code_product`, `file_id`, `product_relate_id`, `comment`, `review`, `post_type_id`, `user_id`, `index_product`, `gift_code_id`, `color`, `product_relate`, `video`, `video_2`, `orderby`) VALUES
(1, 'Giới thiệu', NULL, NULL, 'gioi-thieu.png', NULL, NULL, NULL, NULL, NULL, 'gioi-thieu', '<p><strong>C&ocirc;ng Ty TNHH NTECHCO</strong> Việt Nam l&agrave; đơn vị trực tiếp thi c&ocirc;ng x&acirc;y dựng, x&acirc;y lắp Cơ &ndash; Điện được th&agrave;nh lập từ năm 2019, chuy&ecirc;n thi c&ocirc;ng<br />x&acirc;y dựng, x&acirc;y lắp c&aacute;c hạng mục thuộc hệ thống Cơ &ndash; Điện c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp.</p>\r\n<p>Lĩnh vực hoạt động: Cung cấp nh&acirc;n lực, Thiết kế, mua sắm, thi c&ocirc;ng lắp đặt : X&acirc;y dựng, cơ kh&iacute;, điện,...(Engineering Procurement and Construction for Civil, Mechanical, Electrical)</p>\r\n<p>Ra đời trong bối cảnh đất nước Việt Nam đang c&oacute; nhiều thay đổi mạnh mẽ trọng việc c&ocirc;ng nghiệp h&oacute;a hiện đại h&oacute;a v&agrave; đ&ocirc; thị h&oacute;a. Nhiều Nh&agrave; đầu tư lớn trong nước v&agrave; nước ngo&agrave;i mang đến những cơ hội lớn trong lĩnh vực x&acirc;y lắp d&acirc;n dụng cũng như c&ocirc;ng nghiệp. C&ocirc;ng ty TNHH NTECHCO Việt Nam đ&atilde; may mắn được trải qua c&aacute;c m&ocirc;i trường dự &aacute;n của c&aacute;c Chủ đầu tư lớn như Tập đo&agrave;n SAMSUNG ELECTRONIC, Tập đo&agrave;n VinGroup, Tổng c&ocirc;ng ty lắp m&aacute;y Việt Nam v.v...</p>\r\n<p><br />Với phương ch&acirc;m tận tụy hết m&igrave;nh với c&ocirc;ng việc, C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; từng bước ph&aacute;t triển, đến nay ch&uacute;ng t&ocirc;i đ&atilde; x&acirc;y dựng được một đội ngũ lớn mạnh với hơn 200 c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n, hệ thống m&aacute;y m&oacute;c thi c&ocirc;ng hiện đại trong lĩnh vực x&acirc;y dựng, Cơ &ndash; Điện. C&ugrave;ng với đ&oacute; c&aacute;c hạng mục hoạt động về x&acirc;y dựng, Cơ &ndash; Điện của c&ocirc;ng ty cũng ng&agrave;y c&agrave;ng được mở rộng. Hiện nay, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; đủ tr&igrave;nh độ chuy&ecirc;n m&ocirc;n v&agrave; kinh nghiệm thi c&ocirc;ng chuy&ecirc;n nghiệp đối với c&aacute;c hạng mục thi c&ocirc;ng x&acirc;y dựng v&agrave; Cơ &ndash; Điện.</p>\r\n<p><br /><strong>INTRODUCTION</strong><br />Viet Nam NTECHCO Company Limited was a civil and M&amp;E business company since 2019. So,we have enough working level and experience<br />in civil and M&amp;E projects.</p>\r\n<p>Field of activity: Providing human resources, Design, procurement, installation: Construction, mechanical, electrical,...(Engineering Procurement and Construction for Civil, Mechanical, Electrical)</p>\r\n<p>PROFILE &ndash; VIET NAM NTECHCO COMPANY LIMITED Our company was born when Việt Nam get large development in industry and technology. Many big domestic Owner and foreign Owner invested in many area. So, VIET NAM NTECHCO Co,.Ltd also lucky to get some project, which are in profession environment as per SAMSUNG ELECTRONIC, VinGroup, Việt Nam Erection Group etc...<br />With enthusiasm work and try best for working, our company has been step by step to grow up. Until now, we have more than 200 persons and a lot of modern mechines and tools for civil and M&amp;E works. At the same time, our working zone in M&amp;E also has been extended. Now, we have enough level and experience to professional work for all item in civil and M&amp;E working.</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-28 17:00:00', '2024-03-08 21:38:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(4, 'NTECHCO VIỆT NAM-SEAN E&C', NULL, NULL, 'Screen Shot 2023-12-31 at 12.35.22 AM.png', NULL, NULL, NULL, NULL, NULL, 'ntechco-viet-nam-sean-ec', '<p>Kh&aacute;ch h&agrave;ng: NTECHCO VIỆT NAM-SEAN E&amp;C</p>\r\n<p>C&ocirc;ng tr&igrave;nh: SAMSUNG DISPLAY &ndash; V2</p>\r\n<p>Địa điểm: Y&ecirc;n Phong,Bắc Ninh. Nội dung c&ocirc;ng việc: Lắp đặt hệ thống điện</p>\r\n<p>Thời gian: 12/2019 ~ 03/2020</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:35:58', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(5, 'SEAN E&C', NULL, NULL, 'Screen Shot 2023-12-31 at 12.36.10 AM.png', NULL, NULL, NULL, NULL, NULL, 'sean-ec', '<p>Kh&aacute;ch h&agrave;ng: SEAN E&amp;C</p>\r\n<p>C&ocirc;ng tr&igrave;nh: SAMSUNG DISPLAY &ndash; V3</p>\r\n<p>Địa điểm: Y&ecirc;n Phong,Bắc Ninh.</p>\r\n<p>Nội dung c&ocirc;ng việc: Lắp đặt hệ thống điện.</p>\r\n<p>Thời gian: 01 ~ 12/2021</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:35:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(6, 'Công ty TNHH Hóa Dầu Long Sơn', NULL, NULL, 'Screen Shot 2023-12-31 at 12.37.23 AM.png', NULL, NULL, NULL, NULL, NULL, 'cong-ty-tnhh-hoa-dau-long-son', '<p>Kh&aacute;ch h&agrave;ng: C&ocirc;ng ty TNHH H&oacute;a Dầu Long Sơn</p>\r\n<p>C&ocirc;ng tr&igrave;nh: Nh&agrave; kho</p>\r\n<p>Địa điểm: x&atilde; Long Sơn-TP. Vũng T&agrave;u.</p>\r\n<p>Nội dung c&ocirc;ng việc: Thi c&ocirc;ng sơn nền epoxy</p>\r\n<p>Thời gian: 07 ~ 8/2022</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:35:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(7, 'ĐOÀN NHẤT UNDER VINGROUP', NULL, NULL, 'Screen Shot 2023-12-31 at 12.40.14 AM.png', NULL, NULL, NULL, NULL, NULL, 'doan-nhat-under-vingroup', '<p>Kh&aacute;ch h&agrave;ng: ĐO&Agrave;N NHẤT UNDER VINGROUP</p>\r\n<p>C&ocirc;ng tr&igrave;nh: VINFAST &ndash; HẢI PH&Ograve;NG</p>\r\n<p>Nội dung c&ocirc;ng việc: Lắp đặt, đấu nối hệ thống điện</p>\r\n<p>Thời gian: 03/2020 -10/2020</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:01:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(8, 'THĂNG TIẾN UNDER FECON', NULL, NULL, 'Screen Shot 2023-12-31 at 12.40.42 AM.png', NULL, NULL, NULL, NULL, NULL, 'thang-tien-under-fecon', '<p>Kh&aacute;ch h&agrave;ng: THĂNG TIẾN UNDER FECON</p>\r\n<p>C&ocirc;ng tr&igrave;nh: FOXCONN &ndash; BẮC GIANG</p>\r\n<p>Nội dung c&ocirc;ng việc: Lắp đặt, đấu nối hệ thống điện nh&agrave; Xưởng F501,F235, M11, F2, F3</p>\r\n<p>Thời gian: 03/2020-6/2020</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:01:44', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(9, 'CÔNG TY TNHH WOOJIN CNC', NULL, NULL, 'Screen Shot 2023-12-31 at 12.41.45 AM.png', NULL, NULL, NULL, NULL, NULL, 'cong-ty-tnhh-woojin-cnc', '<p>Kh&aacute;ch h&agrave;ng: C&Ocirc;NG TY TNHH WOOJIN CNC</p>\r\n<p>C&ocirc;ng tr&igrave;nh: Nh&agrave; m&aacute;y C&ocirc;ng ty TNHH Woojin CNC</p>\r\n<p>Địa điểm: Phường Hạp Lĩnh, Th&agrave;nh phố Bắc Ninh, Tỉnh Bắc Ninh</p>\r\n<p>Nội dung c&ocirc;ng việc: Cung cấp v&agrave; thi c&ocirc;ng lắp đặt hệ thống chiếu s&aacute;ng, hệ thống điện động lực</p>\r\n<p>Time: 08/2020 -12/2020</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-31 11:35:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(10, 'LILAMA 10 UNDER HUYNDAI', NULL, NULL, 'Screen Shot 2023-12-31 at 12.42.48 AM.png', NULL, NULL, NULL, NULL, NULL, 'lilama-10-under-huyndai', '<p>Dự &aacute;n: Lọc h&oacute;a dầu miền nam &ndash; G&oacute;i G</p>\r\n<p>Địa điểm: x&atilde; Long Sơn- th&agrave;nh phố B&agrave; Rịa -Vũng T&agrave;u, tỉnh Vũng T&agrave;u</p>\r\n<p>Nội dung c&ocirc;ng việc: Thi c&ocirc;ng lắp đặt hệ thống điện g&oacute;i G ( k&eacute;o rải đấu nối hệ thống c&aacute;p điện, , lắp đặt hệ thống thang m&aacute;ng, chiếu s&aacute;ng &hellip;&hellip;.</p>\r\n<p>Thời gian: 11/2020 -11/2021</p>\r\n<p><img style=\"display: block; margin-left: auto; margin-right: auto;\" src=\"/public/source/post/05122023-%20Thang%20m%C3%A1ng.jpg\" alt=\"\" width=\"500\" height=\"667\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2024-03-08 22:18:33', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(11, 'Triển khai thi công Dự án Trạm biến áp 220kV Ninh Hòa (Khánh Hòa) và đường dây đấu nối', NULL, 'Ngày 29/12, tại Khánh Hòa, Ban QLDA Truyền tải điện (thuộc Tổng công ty Truyền tải điện Quốc gia) tổ chức triển khai thi công Dự án Trạm biến áp 202kV Ninh Hòa (huyện Vạn Ninh, tỉnh Khánh Hòa) và đường dây đấu nối. Dự kiến, dự án hoàn thành trong tháng 1/2025.', 'Anh2trienkahithicong2911223.jpeg', NULL, NULL, NULL, NULL, NULL, 'trien-khai-thi-cong-du-an-tram-bien-ap-220kv-ninh-hoa-khanh-hoa-va-duong-day-dau-noi', '<p>Dự &aacute;n do Tổng c&ocirc;ng ty Truyền tải điện Quốc gia (EVNNPT) l&agrave;m chủ đầu tư, Ban QLDA Truyền tải điện (NPTPMB) quản l&yacute; điều h&agrave;nh dự &aacute;n.</p>\r\n<p>Dự &aacute;n c&oacute; quy m&ocirc; lắp đặt 1 m&aacute;y biến &aacute;p 220/110/22 kV - 250 MVA. Ph&iacute;a 220kV sử dụng sơ đồ hai hệ thống thanh c&aacute;i c&oacute; thanh c&aacute;i đường v&ograve;ng, bao gồm 10 ngăn. Trong giai đoạn n&agrave;y lắp đặt thiết bị cho 6 ngăn (4 ngăn xuất tuyết, 1 ngăn lộ tổng v&agrave; 1 ngăn m&aacute;y cắt nối), sử dụng sơ đồ hệ thống hai thanh c&aacute;i. Dự ph&ograve;ng 1 ngăn đường v&ograve;ng, 1 ngăn lộ tổng m&aacute;y biến &aacute;p 250MVA v&agrave; 2 ngăn xuất tuyến.</p>\r\n<p>Ph&iacute;a 110kV sử dụng sơ đồ hai hệ thống thanh c&aacute;i c&oacute; thanh c&aacute;i đường v&ograve;ng, bao gồm 15 ngăn. Trong giai đoạn n&agrave;y lắp đặt thiết bị để đấu nối cho 6 ngăn lộ (4 ngăn xuất tuyến, 1 ngăn lộ tổng, 1 ngăn m&aacute;y cắt nối). Dự ph&ograve;ng 6 ngăn xuất tuyến, 1 ngăn lộ tổng m&aacute;y biến &aacute;p 250MVA, 1 ngăn đường v&ograve;ng v&agrave; 1 ngăn tụ b&ugrave;.</p>\r\n<p>Ph&iacute;a 22kV sử dụng sơ đồ khối, c&aacute;c thiết bị lắp đặt ngo&agrave;i trời để cấp điện tự d&ugrave;ng th&ocirc;ng qua m&aacute;y biến &aacute;p tự d&ugrave;ng của trạm.</p>\r\n<p>Phần đường d&acirc;y đấu nối&nbsp;x&acirc;y dựng đường d&acirc;y 220kV, 4 mạch, d&agrave;i khoảng 250m đấu nối v&agrave;o đường d&acirc;y 220kV Tuy H&ograve;a &ndash; Nha Trang.</p>\r\n<p>Dự &aacute;n nhằm đ&aacute;p ứng nhu cầu phụ tải v&agrave; đảm bảo vận h&agrave;nh cho c&aacute;c trạm biến &aacute;p 110kV khu vực ph&iacute;a Bắc tỉnh Kh&aacute;nh Ho&agrave; v&agrave; ph&iacute;a Nam tỉnh Ph&uacute; Y&ecirc;n, đặc biệt cấp nguồn cho phụ tải khu kinh tế V&acirc;n Phong; đảm bảo cung cấp điện ổn định, đ&aacute;p ứng nhu cầu ph&aacute;t triển kinh tế - x&atilde; hội của tỉnh Kh&aacute;nh H&ograve;a.</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-30 11:11:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(12, 'EVNICT là đơn vị chủ công trong quá trình chuyển đổi số của EVN', NULL, 'Năm 2023, với những kết quả đã đạt được trong thực hiện các nhiệm vụ Tập đoàn Điện lực Việt Nam (EVN) giao, Công ty Viễn thông Điện lực và Công nghệ thông tin (EVNICT) đã khẳng định vị trí, vai trò là đơn vị dẫn đầu, chủ công trong ứng dụng công nghệ thông tin, chuyển đổi số của EVN.', 'Tongketevnict291223ongalm.jpeg', NULL, NULL, NULL, NULL, NULL, 'evnict-la-don-vi-chu-cong-trong-qua-trinh-chuyen-doi-so-cua-evn', '<p>Ng&agrave;y 29/12 tại H&agrave; Nội,&nbsp;C&ocirc;ng ty Viễn th&ocirc;ng Điện lực v&agrave; C&ocirc;ng nghệ th&ocirc;ng tin tổ chức Hội nghị tổng kết c&ocirc;ng t&aacute;c năm 2023, triển khai kế hoạch&nbsp;năm 2024.</p>\r\n<p>Dự hội nghị c&oacute; Th&agrave;nh vi&ecirc;n HĐTV Đinh Thế Ph&uacute;c, Ph&oacute; Tổng gi&aacute;m đốc&nbsp;EVN V&otilde; Quang L&acirc;m, Kiểm so&aacute;t vi&ecirc;n Nh&agrave; nước Đo&agrave;n Thị Thanh B&igrave;nh.</p>\r\n<p>Về ph&iacute;a C&ocirc;ng đo&agrave;n Điện lực Việt Nam c&oacute;&nbsp;Ph&oacute; Chủ tịch&nbsp;Đinh Thị Thanh B&igrave;nh. C&ugrave;ng dự c&ograve;n c&oacute; l&atilde;nh đạo c&aacute;c ban chuy&ecirc;n m&ocirc;n của&nbsp;EVN, c&aacute;c đơn vị trong Tập đo&agrave;n Điện lực Việt Nam.</p>\r\n<p><strong>Ho&agrave;n th&agrave;nh tốt c&aacute;c nhiệm vụ</strong></p>\r\n<p>B&aacute;o c&aacute;o tổng kết c&ocirc;ng t&aacute;c Đảng năm 2023 tại hội nghị, &ocirc;ng Nguyễn Minh Khi&ecirc;m - B&iacute; thư Đảng ủy, Gi&aacute;m đốc EVNICT cho biết,&nbsp;trong bối cảnh c&oacute; nhiều kh&oacute; khăn, dưới sự chỉ đạo s&aacute;t sao của Đảng ủy EVN, Đảng ủy EVNICT đ&atilde; tập trung triển khai chỉ đạo thực hiện to&agrave;n diện, đồng bộ c&aacute;c chủ trương, Nghị quyết với quyết t&acirc;m ch&iacute;nh trị cao, nỗ lực lớn, thống nhất trong h&agrave;nh động từ Đảng ủy đến chi ủy v&agrave; c&aacute;n bộ đảng vi&ecirc;n n&ecirc;n đ&atilde; l&atilde;nh đạo, chỉ đạo ho&agrave;n th&agrave;nh tốt c&ocirc;ng t&aacute;c x&acirc;y dựng đảng v&agrave; l&atilde;nh đạo thực hiện nhiệm vụ ch&iacute;nh trị của đơn vị.</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-30 11:11:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(13, 'Trung tâm Thông tin Điện lực hoàn thành xuất sắc nhiệm vụ năm 2023', NULL, 'Hội nghị Tổng kết công tác Đảng, nhiệm vụ kế hoạch năm 2023, công tác Công đoàn năm 2023 và triển khai nhiệm vụ năm 2024 của Trung tâm Thông tin Điện lực (EVNEIC) diễn ra sáng 28/12, tại Hà Nội.', 'Truong ban TT Trinh Mai Phuong.jpeg', NULL, NULL, NULL, NULL, NULL, 'trung-tam-thong-tin-dien-luc-hoan-thanh-xuat-sac-nhiem-vu-nam-2023', '<p>Dự hội nghị, về ph&iacute;a Ban Thường vụ Đảng ủy EVN, c&oacute; &ocirc;ng Cao Quang Quỳnh - Ủy vi&ecirc;n Ban Thường vụ, Th&agrave;nh vi&ecirc;n Hội đồng th&agrave;nh vi&ecirc;n EVN, &ocirc;ng Trịnh Mai Phương - Ủy vi&ecirc;n Ban Thường vụ, Trưởng ban Tuy&ecirc;n gi&aacute;o Đảng ủy, Trưởng ban Truyền th&ocirc;ng EVN.</p>\r\n<p>Về ph&iacute;a Tập đo&agrave;n Điện lực Việt Nam, c&oacute; &ocirc;ng V&otilde; Quang L&acirc;m - Ph&oacute; Tổng gi&aacute;m đốc EVN. L&atilde;nh đạo C&ocirc;ng đo&agrave;n Điện lực Việt Nam c&oacute;&nbsp;b&agrave;&nbsp;Đinh Thị Thanh B&igrave;nh - Ph&oacute; Chủ tịch C&ocirc;ng đo&agrave;n Điện lực Việt Nam. C&ugrave;ng dự, c&ograve;n c&oacute; đại diện l&atilde;nh đạo một số ban chuy&ecirc;n m&ocirc;n EVN.&nbsp;</p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-29 17:00:00', '2023-12-30 11:11:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(14, 'Asa Alloy Hải Phòng_Thiết kế, cung cấp thi công lắp đặt MEP (Điện, HVAC,...) nhà xưởng, nhà văn phòng, hạ tầng nhà máy', NULL, NULL, '18-1.jpg', NULL, NULL, NULL, NULL, NULL, 'asa-alloy-hai-phongthiet-ke-cung-cap-thi-cong-lap-dat-mep-dien-hvac-nha-xuong-nha-van-phong-ha-tang-nha-may', '<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-1.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-2.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-3.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-4.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-5.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-6.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-7.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-8.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-9.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-10.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-11.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-12.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/Asa-13.jpg\" alt=\"Example Image\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2024-03-08 17:00:00', '2025-02-23 20:37:31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(18, 'Thi công tủ RMU, cáp ngầm trung thế, CCTV, Communication tổ hợp Hóa Dầu Long Sơn', NULL, NULL, 'RMU-2.jpg', NULL, NULL, NULL, NULL, NULL, 'thi-cong-tu-rmu-cap-ngam-trung-the-cctv-communication-to-hop-hoa-dau-long-son', '<p><img src=\"/public/source/CCTV.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/LSP-11.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/LSP-12.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/RMU-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/RMU-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/RMU-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Trane-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Trane-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Trane-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-02-23 17:00:00', '2025-02-25 19:12:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(19, 'Thiết kế, cung cấp và thi công lắp đặt cửa van chặn sự cố tràn dầu_Tổ hợp hóa dầu Long Sơn', NULL, NULL, 'GV-14.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-cua-van-chan-su-co-tran-dauto-hop-hoa-dau-long-son', '<p><img src=\"/public/source/Gate%20Valve/GV-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /><img src=\"/public/source/GV-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-11.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-12.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-13.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/Gate%20Valve/GV-14.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2025-02-23 17:00:00', '2025-02-25 19:11:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(16, 'Hoàn thành gói thầu thiết kế, cung cấp, thi công lắp đặt E&I trạm xử lý nước thải nhà máy Hóa Dầu Long Sơn', NULL, NULL, '63.jpg', NULL, NULL, NULL, NULL, NULL, 'hoan-thanh-goi-thau-thiet-ke-cung-cap-thi-cong-lap-dat-ei-tram-xu-ly-nuoc-thai-nha-may-hoa-dau-long-son', '<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-1.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-2.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-3.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-4.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-5.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-6.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-7.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-8.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-9.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-10.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-11.jpg\" alt=\"Example Image\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/COD-12.jpg\" alt=\"Example Image\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2025-02-11 17:00:00', '2025-02-25 19:12:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(17, 'Thi công trạm biến áp 110kV, cáp ngầm 110kV, tổ hợp Hóa Dầu Long Sơn', NULL, NULL, 'trụ ống LSP.jpg', NULL, NULL, NULL, NULL, NULL, 'thi-cong-tram-bien-ap-110kv-cap-ngam-110kv-to-hop-hoa-dau-long-son', '<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-1.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-2.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-3.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-4.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-5.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-6.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-7.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-8.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-9.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-10.jpg\" alt=\"\" /></p>\r\n<p><img style=\"max-width: 100%; height: auto;\" src=\"/public/source/110KV-11.jpg\" alt=\"\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-03-11 17:00:00', '2025-02-25 19:12:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(20, 'Thiết kế, gia công chế tạo, cung cấp lắp đặt và cải tạo nhà để xe_ Nhà máy Hóa Dầu Long Sơn', NULL, NULL, 'CAR-3.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-gia-cong-che-tao-cung-cap-lap-dat-va-cai-tao-nha-de-xe-nha-may-hoa-dau-long-son', '<p><img src=\"/public/source/CAR-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/CAR-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/CAR-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2025-02-23 17:00:00', '2025-02-23 22:02:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(21, 'Gia công chế tạo và lắp đặt hệ thống thang máng cáp, cấp nguồn NM Luyện Đồng Sin Quyền', NULL, NULL, 'DSC-1.jpg', NULL, NULL, NULL, NULL, NULL, 'gia-cong-che-tao-va-lap-dat-he-thong-thang-mang-cap-cap-nguon-nm-luyen-dong-sin-quyen', '<p><img src=\"/public/source/DSC-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DSC-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DSC-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DSC-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2022-02-23 17:00:00', '2025-02-23 22:06:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(22, 'Thiết kế, cung cấp và thi công lắp đặt hệ thống cung cấp điện nhà máy chế biến Gỗ Viên Nén- BVN Hòa Bình', NULL, NULL, 'HB-8.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-he-thong-cung-cap-dien-nha-may-che-bien-go-vien-nen-bvn-hoa-binh', '<p><img src=\"/public/source/HB-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-11.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/HB-12.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-23 17:00:00', '2025-02-23 22:11:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(23, 'Thiết kế, cung cấp và thi công lắp đặt hệ thống cung cấp điện nhà máy chế biến Gỗ Viên Nén- BVN Quảng Bình', NULL, NULL, 'QB-3.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-he-thong-cung-cap-dien-nha-may-che-bien-go-vien-nen-bvn-quang-binh', '<p><img src=\"/public/source/QB-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/QB-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/QB-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2024-04-23 17:00:00', '2025-02-23 22:16:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(24, 'Thi công lắp đặt, đấu nối, thí nghiệm hiệu chỉnh hệ thống tủ trung thế 33kV, cáp nguồn trung thế và điều khiển Sub P-Samsung Engineering', NULL, NULL, 'SEC-11.JPG', NULL, NULL, NULL, NULL, NULL, 'thi-cong-lap-dat-dau-noi-thi-nghiem-hieu-chinh-he-thong-tu-trung-the-33kv-cap-nguon-trung-the-va-dieu-khien-sub-p-samsung-engineering', '<p><img src=\"/public/source/SEC-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-11.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-12.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-13.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-14.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-15.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-16.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-17.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-18.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-19.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SEC-20.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-23 17:00:00', '2025-02-23 22:31:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(25, 'Thi công lắp đặt, bảo trì,...hệ thống điện mặt trời áp mái khu vực miền bắc- Go', NULL, NULL, 'SL-2.jpg', NULL, NULL, NULL, NULL, NULL, 'thi-cong-lap-dat-bao', '<p><img src=\"/public/source/SL-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SL-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/SL-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2025-02-23 17:00:00', '2025-02-23 22:36:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(26, 'Thiết kế, cung cấp và thi công lắp đặt cho hệ thống MEP nhà ga quốc tế T2 Nội Bài (Điện, HVAC, PCCC, Cấp thoát nước)_ HANCORP', NULL, NULL, 'T2-3.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-cho-he-thong-mep-nha-ga-quoc-te-t2-noi-bai-dien-hvac-pccc-cap-thoat-nuoc-hancorp', '<p><img src=\"/public/source/T2-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/T2-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-12-03 17:00:00', '2025-02-23 22:44:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(27, 'Thi công lắp đặt điện gió ngoài khơi, dự án Sóc Trăng 1- Hengtong/Power China', NULL, NULL, 'WP-2.jpg', NULL, NULL, NULL, NULL, NULL, 'thi-cong-lap-dat-dien-gio-ngoai-khoi-du-an-soc-trang-1-hengtongpower-china', '<p><img src=\"/public/source/WP-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/WP-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2021-12-23 17:00:00', '2025-02-23 22:52:06', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(28, 'Thi công di dời tháp làm mát (Cooling water tower) tại tổ hợp Hóa Dầu Long Sơn- SCGC', NULL, NULL, 'CW-1.jpg', NULL, NULL, NULL, NULL, NULL, 'thi-cong-di-doi-thap-lam-mat-cooling-water-tower-tai-to-hop-hoa-dau-long-son-scgc', '<p><img src=\"/public/source/CW-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/CW-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/LSP-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2023-11-23 17:00:00', '2025-02-25 19:10:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(29, 'Thiết kế, cung cấp và thi công lắp đặt hệ thống điện tạm nhà ga quốc tế T2- Nội Bài', NULL, NULL, 'DTT2-10.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-he-thong-dien-tam-nha-ga-quoc-te-t2-noi-bai', '<p><img src=\"/public/source/DTT2-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/DTT2-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2024-04-23 17:00:00', '2025-02-23 23:17:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL),
(30, 'Thiết kế, cung cấp và thi công lắp đặt hệ thống HVAC tòa nhà Keang Nam- Nissan Automotive Technologis', NULL, 'NTechco Việt Nam đang thực hiện gói thầu thiết kế, cung cấp và thi công lắp đặt cho phòng nghiên cứu của công ty Nissan Automotive Technologis tại tòa nhà Keangnam, Phạm Hùng, Hà Nội. Công việc đang được tiến hành gấp rút, đảm bảo mỹ thuật, kỹ thuật, vệ sinh, an toàn trong điều kiện tòa nhà đang làm việc và vận hành. Gấp rút hoàn thiện để bàn giao đưa vào sử dụng giữa tháng 3-2025', 'NS10.jpg', NULL, NULL, NULL, NULL, NULL, 'thiet-ke-cung-cap-va-thi-cong-lap-dat-he-thong-hvac-toa-nha-keang-nam-nissan-automotive-technologis', '<p><img src=\"/public/source/NS-1.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-2.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-3.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-4.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-5.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-6.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-7.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-8.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-9.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>\r\n<p><img src=\"/public/source/NS-10.jpg\" alt=\"\" width=\"100%\" height=\"auto\" /></p>', NULL, NULL, NULL, NULL, 'off', 'on', 'off', NULL, '2025-02-23 17:00:00', '2025-02-25 19:11:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, 'null', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_cat`
--

CREATE TABLE `post_cat` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_cat`
--

INSERT INTO `post_cat` (`id`, `post_id`, `cat_id`, `created_at`, `updated_at`) VALUES
(765, 2, 9, NULL, NULL),
(204, 36, 6, NULL, NULL),
(911, 14, 7, NULL, NULL),
(910, 14, 14, NULL, NULL),
(846, 15, 2, NULL, NULL),
(1088, 16, 6, NULL, NULL),
(1081, 17, 12, NULL, NULL),
(952, 20, 11, NULL, NULL),
(367, 20, 6, NULL, NULL),
(368, 21, 6, NULL, NULL),
(987, 23, 6, NULL, NULL),
(986, 23, 7, NULL, NULL),
(998, 24, 7, NULL, NULL),
(1007, 25, 7, NULL, NULL),
(56, 26, 8, NULL, NULL),
(548, 27, 1, NULL, NULL),
(1073, 19, 7, NULL, NULL),
(1069, 30, 6, NULL, NULL),
(712, 50, 3, NULL, NULL),
(726, 29, 2, NULL, NULL),
(279, 31, 2, NULL, NULL),
(278, 31, 4, NULL, NULL),
(714, 52, 2, NULL, NULL),
(547, 33, 1, NULL, NULL),
(546, 33, 5, NULL, NULL),
(545, 33, 7, NULL, NULL),
(720, 40, 2, NULL, NULL),
(559, 34, 1, NULL, NULL),
(558, 34, 5, NULL, NULL),
(557, 34, 7, NULL, NULL),
(719, 40, 4, NULL, NULL),
(481, 35, 1, NULL, NULL),
(480, 35, 5, NULL, NULL),
(479, 35, 7, NULL, NULL),
(717, 42, 2, NULL, NULL),
(499, 43, 9, NULL, NULL),
(567, 44, 6, NULL, NULL),
(566, 45, 9, NULL, NULL),
(565, 46, 9, NULL, NULL),
(564, 47, 9, NULL, NULL),
(563, 48, 9, NULL, NULL),
(561, 49, 9, NULL, NULL),
(721, 39, 2, NULL, NULL),
(725, 32, 2, NULL, NULL),
(724, 32, 4, NULL, NULL),
(718, 41, 2, NULL, NULL),
(722, 38, 2, NULL, NULL),
(723, 37, 2, NULL, NULL),
(716, 51, 2, NULL, NULL),
(715, 51, 4, NULL, NULL),
(713, 52, 4, NULL, NULL),
(770, 2, 3, NULL, NULL),
(909, 14, 2, NULL, NULL),
(764, 2, 5, NULL, NULL),
(763, 2, 1, NULL, NULL),
(762, 2, 3, NULL, NULL),
(802, 3, 14, NULL, NULL),
(801, 3, 2, NULL, NULL),
(1082, 17, 7, NULL, NULL),
(845, 15, 4, NULL, NULL),
(1078, 18, 6, NULL, NULL),
(831, 5, 12, NULL, NULL),
(1080, 17, 14, NULL, NULL),
(1087, 16, 7, NULL, NULL),
(813, 7, 14, NULL, NULL),
(812, 7, 2, NULL, NULL),
(809, 8, 14, NULL, NULL),
(1079, 17, 2, NULL, NULL),
(838, 1, 5, NULL, NULL),
(800, 3, 3, NULL, NULL),
(799, 3, 5, NULL, NULL),
(837, 4, 14, NULL, NULL),
(836, 4, 2, NULL, NULL),
(830, 5, 14, NULL, NULL),
(829, 5, 2, NULL, NULL),
(835, 6, 14, NULL, NULL),
(834, 6, 2, NULL, NULL),
(811, 7, 3, NULL, NULL),
(810, 7, 5, NULL, NULL),
(808, 8, 2, NULL, NULL),
(807, 8, 5, NULL, NULL),
(833, 9, 14, NULL, NULL),
(832, 9, 2, NULL, NULL),
(840, 10, 14, NULL, NULL),
(839, 10, 2, NULL, NULL),
(792, 11, 4, NULL, NULL),
(793, 12, 4, NULL, NULL),
(794, 13, 4, NULL, NULL),
(1077, 18, 7, NULL, NULL),
(1076, 18, 12, NULL, NULL),
(1075, 18, 13, NULL, NULL),
(951, 20, 2, NULL, NULL),
(1072, 19, 11, NULL, NULL),
(1071, 19, 14, NULL, NULL),
(1070, 19, 2, NULL, NULL),
(953, 20, 1, NULL, NULL),
(954, 20, 7, NULL, NULL),
(955, 20, 6, NULL, NULL),
(956, 21, 2, NULL, NULL),
(957, 21, 12, NULL, NULL),
(958, 21, 11, NULL, NULL),
(959, 21, 1, NULL, NULL),
(960, 21, 7, NULL, NULL),
(961, 21, 6, NULL, NULL),
(985, 23, 8, NULL, NULL),
(974, 22, 7, NULL, NULL),
(973, 22, 13, NULL, NULL),
(972, 22, 14, NULL, NULL),
(971, 22, 2, NULL, NULL),
(984, 23, 1, NULL, NULL),
(983, 23, 12, NULL, NULL),
(982, 23, 14, NULL, NULL),
(981, 23, 2, NULL, NULL),
(997, 24, 8, NULL, NULL),
(996, 24, 1, NULL, NULL),
(995, 24, 13, NULL, NULL),
(994, 24, 14, NULL, NULL),
(993, 24, 2, NULL, NULL),
(1006, 25, 8, NULL, NULL),
(1005, 25, 1, NULL, NULL),
(1004, 25, 10, NULL, NULL),
(1003, 25, 2, NULL, NULL),
(1008, 26, 2, NULL, NULL),
(1009, 26, 14, NULL, NULL),
(1010, 26, 1, NULL, NULL),
(1011, 26, 7, NULL, NULL),
(1012, 26, 6, NULL, NULL),
(1013, 27, 2, NULL, NULL),
(1014, 27, 10, NULL, NULL),
(1015, 27, 1, NULL, NULL),
(1016, 27, 7, NULL, NULL),
(1063, 28, 7, NULL, NULL),
(1062, 28, 11, NULL, NULL),
(1061, 28, 14, NULL, NULL),
(1060, 28, 2, NULL, NULL),
(1021, 29, 2, NULL, NULL),
(1022, 29, 14, NULL, NULL),
(1023, 29, 1, NULL, NULL),
(1024, 29, 7, NULL, NULL),
(1025, 29, 6, NULL, NULL),
(1068, 30, 7, NULL, NULL),
(1067, 30, 1, NULL, NULL),
(1066, 30, 12, NULL, NULL),
(1065, 30, 14, NULL, NULL),
(1064, 30, 2, NULL, NULL),
(1086, 16, 12, NULL, NULL),
(1085, 16, 13, NULL, NULL),
(1084, 16, 14, NULL, NULL),
(1083, 16, 2, NULL, NULL),
(1074, 19, 6, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_type`
--

CREATE TABLE `post_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feild` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_type`
--

INSERT INTO `post_type` (`id`, `name`, `url`, `feild`, `icon`, `updated_at`, `created_at`) VALUES
(1, 'Bài viết', 'bai-viet', '[\"content\",\"des\"]', '<i class=\"fa fa-pen-square\"></i>', '2020-07-28 22:41:23', '2020-07-28 22:18:11');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_id` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`name`, `css_id`, `css_class`, `status`, `type`, `des`, `updated_at`, `created_at`, `id`) VALUES
('Bảng giá 1', NULL, NULL, 'on', NULL, NULL, '2022-08-19 07:54:16', '2022-08-19 07:54:16', 1),
('Bảng giá 2', NULL, NULL, 'on', NULL, NULL, '2022-08-19 15:32:44', '2022-08-19 15:32:44', 2);

-- --------------------------------------------------------

--
-- Table structure for table `price_detail`
--

CREATE TABLE `price_detail` (
  `id` int(11) NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_km` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_percent` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_detail`
--

INSERT INTO `price_detail` (`id`, `img`, `price_id`, `title`, `des`, `button`, `link`, `status`, `orderby`, `updated_at`, `created_at`, `title_2`, `price`, `price_km`, `price_percent`, `des_2`, `unit`, `service`) VALUES
(3, '', 1, 'Private', NULL, 'Đăng ký', '#', 'on', 1, '2022-08-19 02:37:44', '2022-08-19 08:58:16', 'Disc', '6500000', '0', '20', NULL, '/Khóa học', '{\"1\":{\"status\":\"on\",\"text\":\"Swimming Training 1 Person\"},\"2\":{\"status\":\"on\",\"text\":\"Swimming Drive 1 Person\"},\"3\":{\"status\":\"on\",\"text\":\"Snorkeling Drive 1 Person\"},\"4\":{\"status\":\"on\",\"text\":\"Swim Underwater 1 Person\"},\"5\":{\"status\":\"on\",\"text\":\"Scuba Drive 1 Person\"}}'),
(5, '', 1, 'Semi Private', NULL, 'Đăng ký', '#', 'on', 2, '2022-08-19 02:29:01', '2022-08-19 09:12:18', 'Disc', '2300000', '0', '20', NULL, '/Khóa học', '{\"1\":{\"status\":\"on\",\"text\":\"Swimming Training 1 Person\"},\"2\":{\"status\":\"on\",\"text\":\"Swimming Drive 1 Person\"},\"3\":{\"status\":\"on\",\"text\":\"Snorkeling Drive 1 Person\"},\"4\":{\"status\":\"off\",\"text\":\"Swim Underwater 1 Person\"},\"5\":{\"status\":\"off\",\"text\":\"Scuba Drive 1 Person\"}}'),
(6, '', 2, 'Semi Private', NULL, 'Đăng ký', '#', 'on', 1, '2022-08-19 15:34:02', '2022-08-19 15:34:02', 'Disc', '2300000', '0', '20', NULL, '/Khóa học', '{\"1\":{\"status\":\"on\",\"text\":\"Swimming Training 1 Person\"},\"2\":{\"status\":\"on\",\"text\":\"Swimming Drive 1 Person\"},\"3\":{\"status\":\"on\",\"text\":\"Snorkeling Drive 1 Person\"},\"4\":{\"status\":\"off\",\"text\":\"Swim Underwater 1 Person\"},\"5\":{\"status\":\"off\",\"text\":\"Scuba Drive 1 Person\"}}'),
(7, '', 2, 'Private', NULL, 'Đăng ký', '#', 'on', 1, '2022-08-19 08:35:00', '2022-08-19 15:34:02', 'Disc', '3300000', '0', '20', NULL, '/Khóa học', '{\"1\":{\"status\":\"on\",\"text\":\"Swimming Training 1 Person\"},\"2\":{\"status\":\"on\",\"text\":\"Swimming Drive 1 Person\"},\"3\":{\"status\":\"on\",\"text\":\"Snorkeling Drive 1 Person\"},\"4\":{\"status\":\"on\",\"text\":\"Swim Underwater 1 Person\"},\"5\":{\"status\":\"off\",\"text\":\"Scuba Drive 1 Person\"}}'),
(8, '', 2, 'Semi Private', NULL, 'Đăng ký', '#', 'on', 1, '2022-08-19 08:35:14', '2022-08-19 15:34:02', 'Disc', '4300000', '0', '20', NULL, '/Khóa học', '{\"1\":{\"status\":\"on\",\"text\":\"Swimming Training 1 Person\"},\"2\":{\"status\":\"on\",\"text\":\"Swimming Drive 1 Person\"},\"3\":{\"status\":\"on\",\"text\":\"Snorkeling Drive 1 Person\"},\"4\":{\"status\":\"on\",\"text\":\"Swim Underwater 1 Person\"},\"5\":{\"status\":\"on\",\"text\":\"Scuba Drive 1 Person\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar`
--

CREATE TABLE `sidebar` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name_jp` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_vi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_jp` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `padding` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `effect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `form_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_post` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidebar`
--

INSERT INTO `sidebar` (`id`, `name`, `name_vi`, `name_jp`, `des_vi`, `des_jp`, `padding`, `img`, `link`, `css`, `updated_at`, `created_at`, `title`, `des`, `orderby`, `status`, `effect`, `content`, `form_id`, `menu_id`, `cat_id`, `type`, `video_youtube`, `count_post`) VALUES
(7, 'Cần tư vấn ?', NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, '2022-10-04 19:29:42', '2022-09-26 12:30:04', NULL, 'Vui lòng liên hệ hotline hoặc email để được tư vấn trực tiếp', 4, 'on', NULL, '<ul class=\"elementor-icon-list-items\">\r\n<li class=\"elementor-icon-list-item\"><span style=\"color: #ffffff;\"><a style=\"color: #ffffff;\" href=\"tel:+02471000001\" rel=\"follow\"><strong>Hotline:</strong>&nbsp; 024 7100 0001</a></span></li>\r\n<li class=\"elementor-icon-list-item\"><span style=\"color: #ffffff;\"><a style=\"color: #ffffff;\" href=\"mailto:info@asc.edu.vn\" rel=\"follow\"><strong>Email:</strong>&nbsp; info@asc.edu.vn</a></span></li>\r\n</ul>', NULL, NULL, NULL, 'img_bg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `name` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `css_id` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'on',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`name`, `css_id`, `css_class`, `status`, `type`, `des`, `updated_at`, `created_at`, `id`) VALUES
('Trang chủ - slide', NULL, NULL, 'on', 'home', NULL, '2023-12-17 01:49:13', '2023-12-17 07:01:03', 1),
('Đối tác', NULL, NULL, 'on', NULL, NULL, '2023-12-28 07:45:38', '2023-12-28 07:45:38', 4);

-- --------------------------------------------------------

--
-- Table structure for table `slide_img`
--

CREATE TABLE `slide_img` (
  `id` int(11) NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_m` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_id` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css_class` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_short` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_short` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_button` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_button_2` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `post_id_2` int(11) DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_img`
--

INSERT INTO `slide_img` (`id`, `img`, `img_m`, `css_id`, `css_class`, `title`, `des`, `des_short`, `title_short`, `button`, `button_2`, `link`, `status`, `link_button`, `link_button_2`, `slide_id`, `post_id`, `post_id_2`, `orderby`, `updated_at`, `created_at`) VALUES
(1, 'LSP-plant-4.jpeg', NULL, NULL, NULL, 'Nhà máy Lọc hóa dầu Long Sơn', 'Thiết kế, cung cấp và thi công lắp đặt TBA, đz cáp ngầm đến 110kV. Thiết kế thi công xây dựng các hệ thống kết cấu thép, HVAC, cơ điện, CCTV, hệ thống đz và tủ trung thế,...', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 1, '2024-03-08 22:06:09', '2023-12-17 07:02:50'),
(2, 'z5232231748914_97bfccf2e74bca09815afbd0049a6ec0.jpg', NULL, NULL, NULL, 'Trạm và đz cáp ngầm 110kV', 'Thiết kế, cung cấp, lắp đặt và thí nghiệm hiệu chỉnh trạm 110kV và tuyến cáp ngầm 110kV', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 2, '2024-03-08 22:09:32', '2023-12-17 07:02:50'),
(3, 'z5232199064162_91d606f35864823605184d8b53da0c0b.jpg', NULL, NULL, NULL, 'Dự án điện gió Sóc Trăng', 'Thi công lắp đặt và thí nghiệm hiệu chỉnh hệ thống cơ điện nhà máy (35kV)', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 3, '2024-03-08 22:13:15', '2023-12-17 07:02:50'),
(39, 'Asa-8.jpg', NULL, NULL, NULL, 'Asa Alloy Hải Phòng_Thiết kế, cung cấp thi công lắp đặt MEP (Điện, HVAC,...) nhà xưởng, nhà văn phòng, hạ tầng nhà máy', 'Thi công hệ MEP dự án Assa Alloy- Hải Phòng', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 1, '2025-02-23 23:39:08', '2025-02-24 06:37:30'),
(16, 'abb.jpg', NULL, NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 1, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(17, 'EVN.jpg', NULL, NULL, NULL, '2', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 2, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(18, 'Hancorp.jpg', NULL, NULL, NULL, '3', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 3, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(19, 'Hengtong.jpg', NULL, NULL, NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 4, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(20, 'Honeywell.jpg', NULL, NULL, NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 5, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(21, 'Lilama.jpg', NULL, NULL, NULL, '6', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 6, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(22, 'Lioa cable.jpg', NULL, NULL, NULL, '7', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 7, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(23, 'LS vina cable.jpg', NULL, NULL, NULL, '8', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 8, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(24, 'Norsk-Solar .jpg', NULL, NULL, NULL, '9', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 9, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(25, 'Power china.jpg', NULL, NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 10, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(26, 'Samsung E&C.jpg', NULL, NULL, NULL, '11', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 11, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(27, 'sigma.jpg', NULL, NULL, NULL, '12', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 12, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(38, 'SCG.jpg', '', NULL, NULL, '1', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 1, '2024-03-09 05:44:49', '2024-03-09 05:44:49'),
(29, 'Vinaincon E&C.jpg', NULL, NULL, NULL, '14', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 14, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(30, 'Vinaincon-tổng.png', NULL, NULL, NULL, '15', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 15, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(31, 'Vingroup.jpg', NULL, NULL, NULL, '16', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 16, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(32, 'Vtech.jpg', NULL, NULL, NULL, '17', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 4, NULL, NULL, 17, '2023-12-28 07:45:48', '2023-12-28 07:45:48'),
(33, 'z5232200136579_7bca51b4343b25ee66758365d8cb1d55.jpg', '', NULL, NULL, 'Điện mặt trời', 'Thiết kế, cung cấp và thi công lắp đặt các công trình điện năng lượng mặt trời áp mái', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 4, '2024-03-08 22:13:56', '2024-03-09 04:40:00'),
(34, 'z5232207347786_ed886b445f7b6dbaf3a1fdcecea5c92f.jpg', NULL, NULL, NULL, 'Nhà máy gỗ viên nén và các sản phẩm từ gỗ - BVN Hòa Bình', 'Thiết kế, mua sắm và thi công lắp đặt hệ thống cơ điện nhà máy', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 1, '2024-03-08 22:07:08', '2024-03-09 04:40:46'),
(35, 'z5232201075592_2da107940fa0656a44069b321ab8e0bf.jpg', NULL, NULL, NULL, 'Nhà máy Luyện đồng Sin Quyền - Lào Cai', 'Cung cấp, gia công chế tạo kết cấp thép, thi công lắp đặt hệ thống cơ điện nhà máy', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 2, '2024-03-08 22:11:08', '2024-03-09 04:40:46'),
(36, 'z5232219406240_69b90d019f9480e12d777105f94a2de2.jpg', NULL, NULL, NULL, 'Hạng mục B/C/D- Nhà máy Hóa dầu Long Sơn', 'Thi công lắp đặt, thí nghiệm hiệu chỉnh và đấu nối tủ và cáp trung thế 35kV', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 1, '2024-03-08 22:08:29', '2024-03-09 04:52:26'),
(37, 'z5232209701659_c6ef960098c3f13c8533ac5b8f4ff3fe.jpg', NULL, NULL, NULL, 'Tủ Kios hợp bộ và Đz cáp ngầm trung thế 22kV - Nhà máy Hóa Dầu Long Sơn', 'Thiết kế, mua sắm, lắp đặt, thí nghiệm hiệu chỉnh tủ trung thế hợp bộ và tuyến cáp ngầm trung thế', NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 2, '2024-03-08 22:12:19', '2024-03-09 04:52:26'),
(41, 'COD-3.jpg', NULL, NULL, NULL, 'Thiết kế, cung cấp và thi công lắp đặt hệ thống xử lý nước thải COD (E&I)', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 3, '2025-02-23 23:40:09', '2025-02-24 06:37:30'),
(43, 'DTT2-10.jpg', NULL, NULL, NULL, 'Thi công hệ thống cấp nguồn điện tạm nhà ga quốc tế T2- Nội Bài', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 5, '2025-02-23 23:40:47', '2025-02-24 06:37:30'),
(44, 'GV-9.jpg', NULL, NULL, NULL, 'Thiết kế, cung cấp lắp đặt hệ thống cửa van chặn ngăn dầu sự cố nhà máy Hóa dầu Long Sơn', NULL, NULL, NULL, NULL, NULL, NULL, 'on', NULL, NULL, 1, NULL, NULL, 6, '2025-02-23 23:41:25', '2025-02-24 06:37:30');

-- --------------------------------------------------------

--
-- Table structure for table `theme`
--

CREATE TABLE `theme` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view` int(11) DEFAULT 0,
  `index_meta` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key_seo` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `canon` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `head` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme`
--

INSERT INTO `theme` (`id`, `title`, `view`, `index_meta`, `url`, `contact`, `og_image`, `title_seo`, `des_seo`, `key_seo`, `canon`, `type`, `style`, `status`, `favicon`, `head`, `updated_at`, `created_at`) VALUES
(1, 'Trang chủ', 0, 'INDEX, FOLLOW', NULL, NULL, '', 'Công Ty TNHH NTECHCO Việt Nam', NULL, NULL, NULL, 'home', NULL, NULL, '', NULL, '2023-12-28 18:13:31', '2022-08-18 22:20:47'),
(11, 'Liên hệ', 0, 'INDEX, FOLLOW', 'lien-he', NULL, '', 'Liên hệ', NULL, NULL, NULL, 'contact', NULL, NULL, '', NULL, '2022-08-29 21:09:36', '2022-08-18 22:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `theme_row`
--

CREATE TABLE `theme_row` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_id` int(11) DEFAULT 1,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_row_id` int(11) DEFAULT NULL,
  `posion` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'body',
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_img_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `des_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderby` int(11) NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three_text` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_text_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id` int(11) DEFAULT NULL,
  `slide_id_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slide_id_3` int(11) DEFAULT NULL,
  `form_id_2` int(11) DEFAULT NULL,
  `text_multi` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text_multi_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `menu_id_2` int(11) DEFAULT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `cat_id_2` int(11) DEFAULT NULL,
  `cat_id_3` int(11) DEFAULT NULL,
  `cat_id_4` int(11) DEFAULT NULL,
  `video_youtube` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_id_2` int(11) DEFAULT NULL,
  `display` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_id_2` int(11) DEFAULT NULL,
  `post_id_3` int(11) DEFAULT NULL,
  `post_id_4` int(11) DEFAULT NULL,
  `img_bg` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_bg_m` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_id` int(11) DEFAULT NULL,
  `map_code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map_code_2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feild` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_fanpage` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_product_id` int(11) DEFAULT NULL,
  `bg_color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bg_color_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_product_id_2` int(11) DEFAULT NULL,
  `cat_list_id` int(11) DEFAULT NULL,
  `cat_product_id_count` int(11) DEFAULT 1,
  `cat_product_id_2_count` int(11) DEFAULT 1,
  `cat_list_id_2` int(11) DEFAULT NULL,
  `cat_post_id` int(11) DEFAULT NULL,
  `cat_post_id_2` int(11) DEFAULT NULL,
  `cat_post_id_count` int(11) DEFAULT 1,
  `cat_post_id_2_count` int(11) DEFAULT 1,
  `cat_post_sub_id` int(11) DEFAULT NULL,
  `cat_post_sub_id_2` int(11) DEFAULT NULL,
  `icon_text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `theme_row`
--

INSERT INTO `theme_row` (`id`, `name`, `theme_id`, `type`, `link_row_id`, `posion`, `img`, `link_img`, `style`, `img_2`, `link_img_2`, `css`, `updated_at`, `created_at`, `title`, `title_2`, `des`, `des_2`, `link`, `orderby`, `status`, `post_id`, `content`, `content_2`, `three_text`, `icon_text_2`, `slide_id`, `slide_id_2`, `slide_id_3`, `form_id_2`, `text_multi`, `text_multi_2`, `menu_id`, `menu_id_2`, `cat_id`, `cat_id_2`, `cat_id_3`, `cat_id_4`, `video_youtube`, `button`, `price_id_2`, `display`, `post_id_2`, `post_id_3`, `post_id_4`, `img_bg`, `img_bg_m`, `price_id`, `map_code`, `map_code_2`, `feild`, `facebook_fanpage`, `cat_product_id`, `bg_color`, `bg_color_2`, `cat_product_id_2`, `cat_list_id`, `cat_product_id_count`, `cat_product_id_2_count`, `cat_list_id_2`, `cat_post_id`, `cat_post_id_2`, `cat_post_id_count`, `cat_post_id_2_count`, `cat_post_sub_id`, `cat_post_sub_id_2`, `icon_text`) VALUES
(1, 'Header', 1, 'custome', NULL, 'head', 'z5232381693450_987b1e68fbe69bdb06d0d95dfe84127f.jpg', NULL, 'head', 'Logo ASC.jpg', NULL, NULL, '2024-03-08 22:55:59', '2022-08-18 05:31:34', 'Hotline', '0977.392.825', NULL, NULL, 'https://ntechco.com.vn/public/source/profile/Profile%20Vietnam%20Ntechco_12-2023.pdf', 1, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tải profile', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"title_2\",\"img\",\"link\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(11, 'Footer', 1, 'custome', NULL, 'footer', 'logo-ntech-1.png', NULL, 'footer', NULL, NULL, NULL, '2024-03-08 22:35:52', '2022-08-18 10:05:39', 'Công ty TNHH NTECHCO Việt Nam.', 'Copyright © 2020. All Rights Reserved', NULL, NULL, NULL, 11, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.8026612733042!2d105.73103987499975!3d21.000546088747587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313452e1afd5ebfb%3A0xc5c067e3bd1fa53c!2zxJAuIEzDqiBUcuG7jW5nIFThuqVuLCBBbiBLaMOhbmgsIEhvw6BpIMSQ4bupYywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1704043287270!5m2!1svi!2s\" width=\"100%\" height=\"350\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', NULL, '[\"title\",\"title_2\",\"img\",\"map_code\",\"menu_id\",\"icon_text\",\"icon_text_2\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '{\"1\":{\"icon\":\"<i class=\\\"fa fa-envelope\\\"><\\/i>\",\"text\":\"Email: luongpd185@gmail.com, ntechcovn.info@gmail.com\"},\"2\":{\"icon\":\"<i class=\\\"fa fa-phone\\\" aria-hidden=\\\"true\\\"><\\/i>\",\"text\":\"\\u0110i\\u1ec7n tho\\u1ea1i : 0977.392.825\"},\"3\":{\"icon\":\"<i class=\\\"fa fa-map-marker\\\" aria-hidden=\\\"true\\\"><\\/i>\",\"text\":\"\\u0110\\u1ecba ch\\u1ec9 \\u0110KKD: \\u00d4 s\\u1ed1 14-L\\u00f4 A23-NV11, Khu \\u0111\\u00f4 th\\u1ecb hai b\\u00ean \\u0111\\u01b0\\u1eddng L\\u00ea Tr\\u1ecdng T\\u1ea5n, X\\u00e3 An Kh\\u00e1nh, Huy\\u1ec7n Ho\\u00e0i \\u0110\\u1ee9c, Th\\u00e0nh ph\\u1ed1 H\\u00e0 N\\u1ed9i, Vi\\u1ec7t Nam\"},\"4\":{\"icon\":\"<i class=\\\"fa fa-map-marker\\\" aria-hidden=\\\"true\\\"><\\/i>\",\"text\":\"VPGD H\\u00e0 N\\u1ed9i: B50-7, LK19, Khu B Geleximco, \\u0111\\u01b0\\u1eddng L\\u00ea Tr\\u1ecdng T\\u1ea5n, D\\u01b0\\u01a1ng N\\u1ed9i, H\\u00e0 \\u0110\\u00f4ng, H\\u00e0 N\\u1ed9i\"},\"5\":{\"icon\":\"<i class=\\\"fa fa-map-marker\\\" aria-hidden=\\\"true\\\"><\\/i>\",\"text\":\"VPGD V\\u0169ng T\\u00e0u: Khu T\\u00e1i \\u0111\\u1ecbnh c\\u01b0, x\\u00e3 Long S\\u01a1n, TP V\\u0169ng T\\u00e0u, T\\u1ec9nh BRVT\"}}'),
(72, 'Menu', 1, 'custome', NULL, 'head', NULL, NULL, 'menu', NULL, NULL, NULL, '2023-12-28 19:35:51', '2023-12-27 23:34:10', NULL, NULL, NULL, NULL, NULL, 2, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"menu_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(73, 'Slide', 1, 'custome', NULL, 'body', NULL, NULL, 'slide', NULL, NULL, NULL, '2023-12-28 19:35:51', '2023-12-28 00:33:42', NULL, NULL, NULL, NULL, NULL, 3, 'on', NULL, NULL, NULL, 'null', 'null', 1, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"slide_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(74, 'Lĩnh vực', 1, 'custome', NULL, 'body', NULL, NULL, 'field', NULL, NULL, NULL, '2023-12-30 09:08:27', '2023-12-28 00:34:01', 'Lĩnh vực', NULL, NULL, NULL, NULL, 4, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"cat_list_id\"]', NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(75, 'Dự án', 1, 'custome', NULL, 'body', NULL, NULL, 'project', NULL, NULL, NULL, '2023-12-30 10:43:35', '2023-12-28 00:34:14', 'Dự án', NULL, NULL, NULL, NULL, 6, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"cat_post_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, 8, NULL, NULL, NULL, 'null'),
(76, 'Tin tức', 1, 'custome', NULL, 'body', NULL, NULL, 'news', NULL, NULL, NULL, '2023-12-28 19:38:48', '2023-12-28 00:34:41', 'Tin tức', NULL, NULL, NULL, NULL, 9, 'on', NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"cat_post_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 3, NULL, NULL, NULL, 'null'),
(77, 'Đối tác', 1, 'custome', NULL, 'body', NULL, NULL, 'partner', NULL, NULL, NULL, '2023-12-30 11:17:24', '2023-12-28 00:34:53', 'Đối tác', NULL, NULL, NULL, NULL, 10, 'on', NULL, NULL, NULL, 'null', 'null', 4, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"slide_id\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(78, 'Giới thiệu', 1, 'custome', NULL, 'body', 'gioi-thieu.png', NULL, 'intro', 'Screen Shot 2023-12-31 at 10.56.48 PM.png', NULL, NULL, '2023-12-31 09:01:32', '2023-12-28 18:35:35', 'GIỚI THIỆU CHUNG', NULL, NULL, NULL, NULL, 5, 'on', NULL, '<p><strong>C&ocirc;ng Ty TNHH NTECHCO Việt Nam</strong> l&agrave; đơn vị trực tiếp thi c&ocirc;ng x&acirc;y dựng, x&acirc;y lắp Cơ &ndash; Điện được th&agrave;nh lập từ năm 2019, chuy&ecirc;n thi c&ocirc;ng x&acirc;y dựng, x&acirc;y lắp c&aacute;c hạng mục thuộc hệ thống Cơ &ndash; Điện c&ocirc;ng tr&igrave;nh d&acirc;n dụng v&agrave; c&ocirc;ng nghiệp.</p>\r\n<p>Lĩnh vực hoạt động: Cung cấp nh&acirc;n lực, Thiết kế, mua sắm, thi c&ocirc;ng lắp đặt : X&acirc;y dựng, cơ kh&iacute;, điện,.. Ra đời trong bối cảnh đất nước Việt Nam đang c&oacute; nhiều thay đổi mạnh mẽ trọng việc c&ocirc;ng nghiệp h&oacute;a hiện đại h&oacute;a v&agrave; đ&ocirc; thị h&oacute;a.</p>\r\n<p>Nhiều Nh&agrave; đầu tư lớn trong nước v&agrave; nước ngo&agrave;i mang đến những cơ hội lớn trong lĩnh vực x&acirc;y lắp d&acirc;n dụng cũng như c&ocirc;ng nghiệp.</p>\r\n<p><strong>C&ocirc;ng ty TNHH NTECHCO </strong><strong>Việt Nam</strong> đ&atilde; may mắn được trải qua c&aacute;c m&ocirc;i trường dự &aacute;n của c&aacute;c<strong> Chủ đầu tư lớn như Tập đo&agrave;n SAMSUNG ELECTRONIC, Tập đo&agrave;nVinGroup, Tổng c&ocirc;ng ty lắp m&aacute;y Việt Nam</strong> v.v...</p>\r\n<p>Với phương ch&acirc;m tận tụy hết m&igrave;nh với c&ocirc;ng việc, C&ocirc;ng ty ch&uacute;ng t&ocirc;i đ&atilde; từng bước ph&aacute;t triển, đến nay ch&uacute;ng t&ocirc;i đ&atilde; x&acirc;y dựng được một đội ngũ lớn mạnh với hơn 200 c&aacute;n bộ c&ocirc;ng nh&acirc;n vi&ecirc;n, hệ thống m&aacute;y m&oacute;c thi c&ocirc;ng hiện đại trong lĩnh vực x&acirc;y dựng, Cơ &ndash; Điện.</p>\r\n<p>C&ugrave;ng với đ&oacute; c&aacute;c hạng mục hoạt động về x&acirc;y dựng, Cơ &ndash; Điện của c&ocirc;ng ty cũng ng&agrave;y c&agrave;ng được mở rộng. Hiện nay, ch&uacute;ng t&ocirc;i đ&atilde; c&oacute; đủ tr&igrave;nh độ chuy&ecirc;n m&ocirc;n v&agrave; kinh nghiệm thi c&ocirc;ng chuy&ecirc;n nghiệp đối với c&aacute;c hạng mục thi c&ocirc;ng x&acirc;y dựng v&agrave; Cơ &ndash; Điện.</p>', NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"img\",\"img_2\",\"content\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(79, 'Chính sách Khách hàng', 1, 'custome', NULL, 'body', 'Screen Shot 2023-12-31 at 12.53.13 AM.png', NULL, 'policy', NULL, NULL, NULL, '2024-03-08 21:55:10', '2023-12-28 19:33:39', 'CHÍNH SÁCH CHẤT LƯỢNG &AN TOÀN', 'Chính sách chất lượng.', NULL, NULL, NULL, 7, 'off', NULL, '<p>1. Mục ti&ecirc;u chất lượng: Đảm bảo tất c&aacute;c sản phẩm thỏa m&atilde;n c&aacute;c ti&ecirc;u chuẩn chất lượng m&agrave; kh&aacute;ch hang y&ecirc;u cầu.</p>\r\n<p>2. Chỉ ti&ecirc;u chất lượng: Đảm bảo độ tin cậy trong vận h&agrave;nh tất cả c&aacute;c hệ thống được lắp đặt sao cho tỉ lệ sửa chữa do sai s&oacute;t l&agrave; &iacute;t nhất.</p>\r\n<p>3. Hoạch định chất lượng dự &aacute;n: Mọi giai đoạn trong qu&aacute; tr&igrave;nh lắp đặt đều được gi&aacute;m s&aacute;t theo quy tr&igrave;nh nghi&ecirc;m ngặt.</p>\r\n<p>4. Kinh nghiệm v&agrave; tr&igrave;nh độ của c&aacute;c c&aacute;n bộ chủ chốt thực hiện dự &aacute;n: Từng vị tr&iacute; đều được đ&agrave;o tạo để c&oacute; đủ năng lực, kinh nghiệm ho&agrave;n th&agrave;nh<br />nhiệm vụ được giao</p>', NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"title_2\",\"img\",\"content\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(80, 'Chính sách an toàn', 1, 'custome', NULL, 'body', 'Screen Shot 2023-12-31 at 12.52.36 AM.png', NULL, 'policy_2', NULL, NULL, NULL, '2024-03-08 21:55:07', '2023-12-28 19:35:47', 'Chính sách an toàn', NULL, NULL, NULL, NULL, 8, 'off', NULL, '<p>1. Người lao động được trang bị tất cả c&aacute;c vật dụng bảo hộ an to&agrave;n khi l&agrave;m việc.</p>\r\n<p>2. Việc kiểm tra sức khỏe người lao động được thực hiện định kỳ.</p>\r\n<p>3. Trang thiết bị, dụng cụ thi c&ocirc;ng đều được kiểm tra an to&agrave;n định kỳ v&agrave; trước khi l&agrave;m việc.</p>\r\n<p>4. Việc vận chuyển, lưu kho vật tư, thiết bị được thực hiện chặt chẽ v&agrave; an to&agrave;n.C&aacute;ch ly, cảnh b&aacute;o, chỉ dẫn khu vực l&agrave;m việc để đảm bảo an to&agrave;n.</p>\r\n<p>5. Cung cấp đầy đủ th&ocirc;ng tin, hướng dẫn đ&agrave;o tạo an to&agrave;n cho người lao động tr&aacute;ch rủi ro, nguy hiểm trong qu&aacute; tr&igrave;nh l&agrave;m việc.</p>', NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"img\",\"content\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null'),
(81, 'Thông tin', 11, 'custome', NULL, 'body', NULL, NULL, 'info', NULL, NULL, NULL, '2023-12-31 11:13:12', '2023-12-31 11:09:53', NULL, NULL, NULL, NULL, NULL, 12, 'on', NULL, '<p><strong>C&ocirc;ng Ty TNHH NTECHCO Việt Nam</strong></p>\r\n<p><strong>Địa chỉ:</strong> &Ocirc; số 14-L&ocirc; A23-NV11, Khu đ&ocirc; thị hai b&ecirc;n đường L&ecirc; Trọng Tấn, X&atilde; An Kh&aacute;nh, Huyện Ho&agrave;i Đức, Th&agrave;nh phố H&agrave; Nội, Việt Nam</p>\r\n<p><strong>Văn ph&ograve;ng đại diện:</strong> Khu T&aacute;i Định Cư &ndash; X&atilde; Long Sơn - TP Vũng T&agrave;u &ndash; Tỉnh B&agrave; Rịa Vũng T&agrave;u</p>\r\n<p><strong>Số điện thoại:</strong> 0977.392.825</p>\r\n<p><strong>Email:</strong> <span>luongpd185@gmail.com</span></p>', NULL, 'null', 'null', NULL, NULL, NULL, NULL, 'null', 'null', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '[\"title\",\"content\"]', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `tinh`
--

CREATE TABLE `tinh` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tinh`
--

INSERT INTO `tinh` (`id`, `name`, `url`, `code`, `updated_at`, `created_at`) VALUES
(1, 'An Giang', 'an-giang', '90000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(2, 'Bắc Giang', 'bac-giang', '26000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(3, 'Bắc Kạn', 'bac-kan', '23000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(4, 'Bạc Liêu', 'bac-lieu', '97000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(5, 'Bắc Ninh', 'bac-ninh', '16000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(6, 'Bà Rịa-Vũng Tàu', 'ba-ria-vung-tau', '78000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(7, 'Bến Tre', 'ben-tre', '86000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(8, 'Bình Định', 'binh-dinh', '55000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(9, 'Bình Dương', 'binh-duong', '75000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(10, 'Bình Phước', 'binh-phuoc', '67000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(11, 'Bình Thuận', 'binh-thuan', '77000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(12, 'Cà Mau', 'ca-mau', '98000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(13, 'Cần Thơ', 'can-tho', '94000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(14, 'Cao Bằng', 'cao-bang', '21000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(15, 'Da Nang', 'da-nang', '50000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(16, 'Đắk Lắk', 'dak-lak', '63000 – 64000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(17, 'Đắk Nông', 'dak-nong', '65000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(18, 'Điện Biên', 'dien-bien', '32000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(19, 'Đồng Nai', 'dong-nai', '76000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(20, 'Đồng Tháp', 'dong-thap', '81000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(21, 'Gia Lai', 'gia-lai', '61000 – 62000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(22, 'Hà Giang', 'ha-giang', '20000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(23, 'Hà Nam', 'ha-nam', '18000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(24, 'Hà Tĩnh', 'ha-tinh', '45000 – 46000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(25, 'Hải Dương', 'hai-duong', '3000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(26, 'Hải Phòng', 'hai-phong', '04000 – 05000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(27, 'Hà Nội', 'ha-noi', '10000 – 14000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(28, 'Hậu Giang', 'hau-giang', '95000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(29, 'Hòa Bình', 'hoa-binh', '36000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(30, 'TP. Hồ Chí Minh', 'tp-ho-chi-minh', '70000 – 74000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(31, 'Hưng Yên', 'hung-yen', '17000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(32, 'Khánh Hòa', 'khanh-hoa', '57000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(33, 'Kiên Giang', 'kien-giang', '91000 – 92000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(34, 'Kon Tum', 'kon-tum', '60000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(35, 'Lai Châu', 'lai-chau', '30000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(36, 'Lâm Đồng', 'lam-dong', '66000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(37, 'Lạng Sơn', 'lang-son', '25000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(38, 'Lào Cai', 'lao-cai', '31000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(39, 'Long An', 'long-an', '82000 – 83000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(40, 'Nam Định', 'nam-dinh', '7000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(41, 'Nghệ An', 'nghe-an', '43000 – 44000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(42, 'Ninh Bình', 'ninh-binh', '8000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(43, 'Ninh Thuận', 'ninh-thuan', '59000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(44, 'Phú Thọ', 'phu-tho', '35000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(45, 'Phú Yên', 'phu-yen', '56000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(46, 'Quảng Bình', 'quang-binh', '47000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(47, 'Quảng Nam', 'quang-nam', '51000 – 52000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(48, 'Quảng Ngãi', 'quang-ngai', '53000 – 54000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(49, 'Quảng Ninh', 'quang-ninh', '01000 – 02000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(50, 'Quảng Trị', 'quang-tri', '48000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(51, 'Sóc Trăng', 'soc-trang', '96000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(52, 'Sơn La', 'son-la', '34000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(53, 'Tây Ninh', 'tay-ninh', '80000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(54, 'Thái Bình', 'thai-binh', '6000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(55, 'Thái Nguyên', 'thai-nguyen', '24000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(56, 'Thanh Hóa', 'thanh-hoa', '40000 – 42000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(57, 'Thừa Thiên Huế', 'thua-thien-hue', '49000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(58, 'Tiền Giang', 'tien-giang', '84000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(59, 'Trà Vinh', 'tra-vinh', '87000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(60, 'Tuyên Quang', 'tuyen-quang', '22000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(61, 'Vĩnh Long', 'vinh-long', '85000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(62, 'Vĩnh Phúc', 'vinh-phuc', '15000', '2020-07-31 11:09:53', '2020-07-31 11:09:53'),
(63, 'Yên Bái', 'yen-bai', '33000', '2020-07-31 11:09:53', '2020-07-31 11:09:53');

-- --------------------------------------------------------

--
-- Table structure for table `type_permission`
--

CREATE TABLE `type_permission` (
  `id` int(10) UNSIGNED NOT NULL,
  `type_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_permission`
--

INSERT INTO `type_permission` (`id`, `type_id`, `permission_id`, `type`, `updated_at`, `created_at`) VALUES
(118, 1, 46, 'undefined', '2020-07-17 14:58:34', '2020-07-17 14:58:34'),
(2, 1, 2, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(3, 1, 3, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(4, 1, 4, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(5, 1, 5, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(6, 1, 6, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(7, 1, 7, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(8, 1, 8, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(9, 1, 9, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(10, 1, 10, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(11, 1, 11, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(12, 1, 12, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(13, 1, 13, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(14, 1, 14, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(15, 1, 15, NULL, '2020-07-02 13:36:08', '2020-07-02 13:36:08'),
(16, 1, 16, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(17, 1, 17, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(18, 1, 18, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(19, 1, 19, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(20, 1, 20, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(21, 1, 21, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(22, 1, 22, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(23, 1, 23, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(24, 1, 24, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(25, 1, 25, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(26, 1, 26, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(27, 1, 27, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(28, 1, 28, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(29, 1, 29, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(30, 1, 30, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(31, 1, 31, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(230, 1, 32, 'group', '2022-08-01 02:24:34', '2022-08-01 02:24:34'),
(33, 1, 33, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(34, 1, 34, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(35, 1, 35, NULL, '2020-07-02 17:54:23', '2020-07-02 17:54:23'),
(229, 1, 59, 'undefined', '2020-08-04 23:05:34', '2020-08-04 23:05:34'),
(228, 1, 58, 'undefined', '2020-08-04 23:05:33', '2020-08-04 23:05:33'),
(185, 1, 44, 'admin', '2020-07-25 01:18:13', '2020-07-25 01:18:13'),
(105, 1, 43, NULL, '2020-07-13 19:08:31', '2020-07-13 19:08:31'),
(104, 1, 42, NULL, '2020-07-13 19:08:30', '2020-07-13 19:08:30'),
(102, 1, 40, NULL, '2020-07-13 17:29:23', '2020-07-13 17:29:23'),
(101, 1, 37, NULL, '2020-07-13 17:29:23', '2020-07-13 17:29:23'),
(116, 1, 1, 'domain', '2020-07-16 16:19:44', '2020-07-16 16:19:44'),
(117, 1, 36, 'domain', '2020-07-16 16:19:46', '2020-07-16 16:19:46'),
(119, 1, 47, 'undefined', '2020-07-17 14:58:34', '2020-07-17 14:58:34'),
(184, 1, 48, 'domain', '2020-07-20 10:00:51', '2020-07-20 10:00:51'),
(186, 1, 45, 'admin', '2020-07-25 01:18:14', '2020-07-25 01:18:14'),
(219, 1, 49, 'domain', '2020-07-27 06:15:01', '2020-07-27 06:15:01'),
(220, 1, 50, 'undefined', '2020-07-28 11:42:27', '2020-07-28 11:42:27'),
(221, 1, 51, 'undefined', '2020-07-28 11:42:28', '2020-07-28 11:42:28'),
(222, 1, 52, 'undefined', '2020-07-30 03:43:20', '2020-07-30 03:43:20'),
(223, 1, 53, 'undefined', '2020-07-30 03:43:20', '2020-07-30 03:43:20'),
(224, 1, 55, 'undefined', '2020-07-31 22:24:40', '2020-07-31 22:24:40'),
(225, 1, 54, 'undefined', '2020-07-31 22:24:40', '2020-07-31 22:24:40'),
(226, 1, 56, 'undefined', '2020-08-03 07:15:57', '2020-08-03 07:15:57'),
(227, 1, 57, 'undefined', '2020-08-03 07:15:58', '2020-08-03 07:15:58'),
(231, 1, 60, 'group', '2022-08-02 01:25:43', '2022-08-02 01:25:43'),
(232, 1, 61, 'group', '2022-08-02 01:25:44', '2022-08-02 01:25:44'),
(233, 4, 60, 'group', '2022-08-03 01:28:20', '2022-08-03 01:28:20'),
(234, 4, 61, 'group', '2022-08-03 01:28:22', '2022-08-03 01:28:22'),
(235, 1, 62, 'group', '2022-08-04 10:55:44', '2022-08-04 10:55:44'),
(236, 1, 63, 'group', '2022-08-04 10:55:45', '2022-08-04 10:55:45'),
(237, 1, 64, 'group', '2022-08-07 20:56:00', '2022-08-07 20:56:00'),
(238, 1, 66, 'group', '2022-08-19 00:48:53', '2022-08-19 00:48:53'),
(239, 1, 65, 'group', '2022-08-19 00:48:54', '2022-08-19 00:48:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_acount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `def` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_login` int(11) NOT NULL DEFAULT 0,
  `address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `huyen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cmnd` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sex` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `percent` int(11) DEFAULT NULL,
  `percent_af` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `type_acount`, `email`, `password`, `user_type_id`, `status`, `tel`, `img`, `def`, `count_login`, `address`, `city`, `huyen`, `cmnd`, `birth`, `sex`, `code`, `percent`, `percent_af`, `remember_token`, `updated_at`, `created_at`) VALUES
(2, 'admin', 'customer', 'admin@webux.vn', '$2y$10$zQmSmL1h93s/63XcuKgYcuTi/F38in2.ufe6GsRUTqAK31gZJe/XS', '2', 'on', NULL, '', NULL, 0, NULL, NULL, NULL, '101044383', '2021/12/08', 'nam', NULL, NULL, NULL, 'usoc2oiEfcdBsVlYbXw4W2ib12YkKtpjtrQsYG8rlHKYtGzzgLMyPzho0PAf', '2021-12-07 23:46:54', '2019-11-29 06:30:40'),
(3, 'Biên tập', NULL, 'bientap@webux.vn', '$2y$10$0RtkoF6YB7MiaY3b7PyZ4e884LC55V7Z6ZFU5TCq763f25vqxYx.y', '3', 'on', NULL, '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'FXMNgGv8Xhzcg1OTSakSruFj5XiZkh7UPNvb2Xxxpb875FzVjJGYkvBHSTnB', '2020-10-05 20:59:12', '2019-11-29 06:30:40'),
(1, 'Quản trị viên', NULL, 'root@webux.vn', '$2y$10$3iwH0yvY4vueEbF0p7SRXOd8bC4CpTV1BOcucEKCghilF1orXFLfC', '1', 'on', NULL, 'icon.png', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'nam', 'web', 99, NULL, 'RbqmgMHIiMM4PXTeUXrE8bHcGW80LoZumLU3NwNbet9V9oFbfxvC9DzxuZdU', '2021-07-12 11:30:01', '2019-11-29 06:30:40'),
(377, 'Nguyễn Hà', NULL, 'ha@webux.vn', '$2y$10$jddolV.NmRnhZ3zLdaYOreOh3hFuPPajOktFlxsMmooDFCbIdBGbi', '4', 'on', '0966130168', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '5fc', NULL, NULL, 'jXg2wleJymIgDHYwhazAwKsJ5OpASVIfjb0RJJ1F', '2022-08-13 06:46:04', '2022-08-13 06:46:04'),
(375, 'Phạm Thi', NULL, 'thi@webbox.vn', '$2y$10$3iwH0yvY4vueEbF0p7SRXOd8bC4CpTV1BOcucEKCghilF1orXFLfC', '4', 'on', '096 6130 168', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'RvdKTc8ltPSFVzvxOF26JPpXPyCOkMknx5xyF3kY', '2022-08-08 11:52:01', '2022-08-03 01:25:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`id`, `name`, `url`, `status`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Root', 'root', 'on', 'root', NULL, NULL),
(2, 'Admin', 'admin', 'on', 'admin', NULL, NULL),
(3, 'Biên tập', 'bien_tap', 'on', 'editor', '2020-09-18 02:45:43', '2020-09-18 02:45:43'),
(4, 'Khách hàng', 'khach-hang', 'on', 'customer', NULL, NULL),
(5, 'Dev', 'dev', 'on', 'dev', '2020-09-22 23:25:38', '2020-09-22 23:25:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `huyen`
--
ALTER TABLE `huyen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_type`
--
ALTER TABLE `menu_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission`
--
ALTER TABLE `permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_cat`
--
ALTER TABLE `post_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_type`
--
ALTER TABLE `post_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_detail`
--
ALTER TABLE `price_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sidebar`
--
ALTER TABLE `sidebar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_img`
--
ALTER TABLE `slide_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme`
--
ALTER TABLE `theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theme_row`
--
ALTER TABLE `theme_row`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tinh`
--
ALTER TABLE `tinh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_permission`
--
ALTER TABLE `type_permission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=649;

--
-- AUTO_INCREMENT for table `huyen`
--
ALTER TABLE `huyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=678;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `menu_type`
--
ALTER TABLE `menu_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permission`
--
ALTER TABLE `permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post_cat`
--
ALTER TABLE `post_cat`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1089;

--
-- AUTO_INCREMENT for table `post_type`
--
ALTER TABLE `post_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `price_detail`
--
ALTER TABLE `price_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sidebar`
--
ALTER TABLE `sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slide_img`
--
ALTER TABLE `slide_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `theme`
--
ALTER TABLE `theme`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `theme_row`
--
ALTER TABLE `theme_row`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `tinh`
--
ALTER TABLE `tinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `type_permission`
--
ALTER TABLE `type_permission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
