-- phpMyAdmin SQL Dump
-- version 5.2.0-dev+20210910.83091680cc
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2021 at 11:46 AM
-- Server version: 8.0.26-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `KTMVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int NOT NULL,
  `product_code` int DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `sectors` varchar(200) DEFAULT NULL,
  `price` int DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  `description` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `name`, `sectors`, `price`, `quantity`, `date_created`, `description`) VALUES
(1, 1234566, 'sách cha giàu cha nghèo', 'Tài chính cá nhân, Phi hư cấu', 800000, 10, '2021-09-15', 'Rich Dad, Poor Dad (Cha giàu, Cha nghèo) là cuốn sách bán chạy nhất của Robert Kiyosaki. Trong đó, ông bày tỏ thái độ ủng hộ cho sự độc lập về tài chính nhờ đầu tư, bất động sản, kinh doanh và sử dụng tài chính hợp lý.'),
(2, 1234556, 'sách tắt đèn ', 'Tiểu thuyết ', 35000, 5, '2021-09-15', 'Tắt đèn là một trong những tác phẩm văn học tiêu biểu nhất của nhà văn Ngô Tất Tố. Đây là một tác phẩm văn học hiện thực phê phán với nội dung nói về cuộc sống khốn khổ của tầng lớp nông dân Việt Nam đầu thế kỉ XX dưới ách đô hộ của thực dân Pháp.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
