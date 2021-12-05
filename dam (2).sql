-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2020 at 08:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`, `name`) VALUES
(1, 'admin', '123', 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `qty` float NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_product`, `id_order`, `name`, `image`, `price`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Fujifilm X100T', 'men1.png', 800, 1, '2020-05-10 03:07:13', '2020-05-10 03:07:13'),
(2, 2, 2, 'Fujifilm X100T', 'men2.png', 700, 1, '2020-05-10 03:08:05', '2020-05-10 03:08:05'),
(3, 3, 3, 'Fujifilm X100T', 'men3.png', 800, 1, '2020-05-10 03:08:45', '2020-05-10 03:08:45'),
(4, 4, 4, 'Fujifilm X100T', 'men5.png', 1200, 1, '2020-05-11 07:51:46', '2020-05-11 07:51:46'),
(5, 3, 5, 'Fujifilm X100T', 'men4.png', 700, 1, '2020-05-11 07:51:46', '2020-05-11 07:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Men', 'men', '2020-05-20 02:14:58', '2020-05-21 03:18:07'),
(2, 'Women', 'women', '2020-05-12 02:15:04', '2020-05-13 03:18:22'),
(3, 'Accessories', 'accessories', '2020-05-09 03:18:42', '2020-05-10 03:18:42'),
(12, 'test01', 'test01', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `iduser`, `idpro`, `name`, `content`, `status`) VALUES
(1, 24, 5, '', 'sdd', 0),
(2, 24, 5, 'dam1', 'sdd', 0),
(3, 24, 3, 'dam1', 'ss', 0),
(7, 24, 1, 'dam1', 'aa', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(12) NOT NULL,
  `total` float NOT NULL,
  `pay` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  `id_status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `phone`, `total`, `pay`, `id_status`, `created_at`, `id_user`) VALUES
(1, 'phan ngoc tuong vy', '12 CMT8 phuong 3 tp Tay Ninh', 358234152, 20000, 'momobanking', 1, '2020-06-29 15:04:19', 1),
(2, 'phan ngoc tuong vy', '12 CMT8 p3 tp Tay Ninh ', 358310253, 12000, 'truc tiep', 4, '2020-06-29 15:04:22', 1),
(3, 'Tran Van Tung', '12 CMT8 p3 tp Tay Ninh', 35830204, 30000, 'truc tiep', 2, '2020-06-29 15:04:25', 2),
(4, 'Le Nguyen Anh', '121 Hai Ba Trung q1 tp HCM', 12535858, 15000, 'banking', 3, '2020-06-29 15:04:28', 3);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` tinytext COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_thumb` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_unit` float DEFAULT NULL,
  `price_pro` float DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `new` tinyint(1) NOT NULL DEFAULT 0,
  `id_parent` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `best_sell` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `slug`, `image`, `img_thumb`, `price_unit`, `price_pro`, `content`, `new`, `id_parent`, `created_at`, `updated_at`, `best_sell`) VALUES
(1, 'ww', 'men', 'product_1.png', 'product_2.png', 180, 20, 'Gold & Grey', 0, 2, '2020-06-10 12:30:36', NULL, 1),
(2, 'woment dress', 'dymo-labelwriter-450', 'product_2.png', 'product_3.png', 410, 20, 'Turbo Thermal Label Printer', 0, 2, '2020-06-17 12:34:16', NULL, 0),
(3, 'DYMO LabelWriter 450 Turbo', 'dymo-450tubor', 'product_3.png', 'product_4.png', 410, 10, 'Thermal Label Printer', 0, 3, '2020-06-17 12:37:05', NULL, 1),
(5, 'Men T-Shir', 'fuji-x100t', 'product_4.png', 'product_5.png', 150, 30, 'siver', 0, 1, NULL, NULL, 0),
(66, 'namess', 'slugss', 'product_5.png', NULL, 1111, 123, 'content', 0, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` tinyint(1) NOT NULL DEFAULT 1,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`) VALUES
(1, 'Đang Giao hàng'),
(2, 'Đã xử Lý'),
(3, 'Hoành thành '),
(4, 'Đã Huỷ Đơn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` tinyint(4) DEFAULT 0,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remem_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `username`, `email`, `name`, `password`, `remem_token`, `phone`, `address`, `created_at`, `deleted_at`) VALUES
(1, 0, 'user1', 'user1@gmail.com', '', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '032949499338', 'Cho ben thanh , q1 . Tp HCM', '2020-05-13 01:19:25', NULL),
(2, 1, 'admin11', 'admin@gmail.com', '', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '02494930493', '124 CMT8 , Q.9 Tp HCM', '2020-05-19 01:22:09', NULL),
(3, 0, 'user2', 'user2@gmail.com', '', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '028393939', '126 Hai Ba Trung , Q1  Tp HCM', '2020-05-28 01:24:52', NULL),
(4, 0, 'user3', 'user3@gmail.com', '', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '0443933939', '12 Nguyen Trai , Q10  Tp HCM', '2020-05-29 01:24:52', NULL),
(5, 0, 'user4', 'user4@gmail.com', '', '202cb962ac59075b964b07152d234b70', '202cb962ac59075b964b07152d234b70', '0239447399', '1 Hai Ba Trung , Q1  Tp HCM', '2020-05-28 01:24:52', NULL),
(7, 0, 'admin', 'admin', '1222', '111', NULL, '0125888888', '', NULL, NULL),
(19, 0, 'ssssss', 's', '', '', NULL, '', '', NULL, NULL),
(20, 0, 'test', 'ss', '', 'ss', NULL, 'ss', '', NULL, NULL),
(21, 0, 'teststt', 'ssx', '', 'csd', NULL, '', '', NULL, NULL),
(22, 0, 'haha', 'haha', '', 'haha', NULL, '', '', NULL, NULL),
(23, 0, '', '', '', '', NULL, '', '', NULL, NULL),
(24, 0, 'dam', 'tungtv104@gmail.com', 'dam1', '111', NULL, '01252100125', '12 Hai Ba Trung , Q1  Tp HCM', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cart_product` (`id_product`),
  ADD KEY `fk_cart_order` (`id_order`);

--
-- Indexes for table `catalog`
--
ALTER TABLE `catalog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status_id` (`id_status`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_cataparent` (`id_parent`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `catalog`
--
ALTER TABLE `catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `status_id` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `rel_catalog` FOREIGN KEY (`id_parent`) REFERENCES `catalog` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
