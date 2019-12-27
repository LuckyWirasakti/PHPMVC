-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 03:03 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nisa`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `name`, `description`, `image`, `user_id`) VALUES
(1, 'Nike New <br>Collection!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'banner-img-1.png', 1),
(2, 'New Balance <br>Collection!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'banner-img-2.png', 1),
(3, 'Nike New <br>Collection!', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'banner-img-3.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `image` varchar(32) NOT NULL,
  `url` varchar(64) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `name`, `image`, `url`, `user_id`) VALUES
(1, 'Product 1', '1.png', 'https://www.google.com', 1),
(2, 'Product 2', '2.png', 'https://www.google.com', 1),
(3, 'Product 3', '3.png', 'https://www.google.com', 1),
(4, 'Product 4', '4.png', 'https://www.google.com', 1),
(5, 'Product 5', '5.png', 'https://www.google.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `user_cart` varchar(10) NOT NULL,
  `id_users` int(11) NOT NULL,
  `status_cart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `id_product` int(11) NOT NULL,
  `comment` text NOT NULL,
  `reply_comment` text NOT NULL,
  `reply_by` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `id_product`, `comment`, `reply_comment`, `reply_by`) VALUES
(1, 'Albert', 'albert@gmail.com', 1, 'Product is ready ?', 'Yeah, this product is still ready ', 'Admin RonRon');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(80) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id` int(11) NOT NULL,
  `user_cart` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `numberphone` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `myaddress` text DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `postcode` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE `feature` (
  `id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(64) NOT NULL,
  `icon` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `name`, `description`, `icon`, `user_id`) VALUES
(1, 'Free Delivery', 'Free Shipping on all order', 'f-icon1.png', 1),
(2, 'Return Policy', 'Free Shipping on all order', 'f-icon2.png', 1),
(3, '24/7 Support', 'Free Shipping on all order', 'f-icon3.png', 1),
(4, 'Secure Payment', 'Free Shipping on all order', 'f-icon4.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `food` varchar(255) NOT NULL,
  `mom` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `email`, `gender`, `food`, `mom`, `password`, `create_at`) VALUES
(1, 'Lucky Wirsakti', 'wirasakti@amcc.space', 'L', 'junk', 'tri', '$2y$10$PAmpg08PMa9CwDtqTvhflevb3hUJt00gOF7nx0JTVsNLqihrYAG9.', '2019-12-22 06:11:37'),
(2, 'ronypermadi', 'admin@ronypermadi.com', 'L', 'food', 'mom', '$2y$10$sZUJXJD4vYn92nu56RiOVuqvdwGoDWb5N122gsYm9tBBD2OP0hacG', '2019-12-27 13:56:10');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `kode_payment` varchar(50) DEFAULT NULL,
  `payment_method` varchar(75) DEFAULT NULL,
  `detail_order` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` double NOT NULL,
  `description` text DEFAULT NULL,
  `status_product` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `image` varchar(32) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `description`, `status_product`, `category_id`, `image`, `user_id`) VALUES
(1, 'Nike New Hammer', 275, NULL, NULL, NULL, 'p1.jpg', 1),
(2, 'New Balance New Hammer', 83, NULL, NULL, NULL, 'p6.jpg', 1),
(3, 'Converse New Hammer', 591, NULL, NULL, NULL, 'p1.jpg', 1),
(4, 'New Reebook New Hammer', 705, NULL, NULL, NULL, 'p7.jpg', 1),
(5, 'New Superga New Hammer', 751, NULL, NULL, NULL, 'p7.jpg', 1),
(6, 'New Reebook New Hammer', 640, NULL, NULL, NULL, 'p8.jpg', 1),
(7, 'New Reebook New Hammer', 944, NULL, NULL, NULL, 'p6.jpg', 1),
(8, 'New Reebook New Hammer', 802, NULL, NULL, NULL, 'p8.jpg', 1),
(9, 'New Puma New Hammer', 177, NULL, NULL, NULL, 'p7.jpg', 1),
(10, 'New Puma New Hammer', 480, NULL, NULL, NULL, 'p7.jpg', 1),
(11, 'New Reebook New Hammer', 867, NULL, NULL, NULL, 'p3.jpg', 1),
(12, 'New Puma New Hammer', 896, NULL, NULL, NULL, 'p7.jpg', 1),
(13, 'New Puma New Hammer', 879, NULL, NULL, NULL, 'p8.jpg', 1),
(14, 'New Puma New Hammer', 706, NULL, NULL, NULL, 'p7.jpg', 1),
(15, 'New Balance New Hammer', 891, NULL, NULL, NULL, 'p7.jpg', 1),
(16, 'New Puma New Hammer', 336, NULL, NULL, NULL, 'p7.jpg', 1),
(17, 'Nike New Hammer', 6, NULL, NULL, NULL, 'p5.jpg', 1),
(18, 'New Puma New Hammer', 23, NULL, NULL, NULL, 'p6.jpg', 1),
(19, 'Nike New Hammer', 97, NULL, NULL, NULL, 'p4.jpg', 1),
(20, 'New Superga New Hammer', 413, NULL, NULL, NULL, 'p8.jpg', 1),
(21, 'Nike New Hammer', 775, NULL, NULL, NULL, 'p8.jpg', 1),
(22, 'New Puma New Hammer', 633, NULL, NULL, NULL, 'p4.jpg', 1),
(23, 'Nike New Hammer', 842, NULL, NULL, NULL, 'p3.jpg', 1),
(24, 'Nike New Hammer', 311, NULL, NULL, NULL, 'p8.jpg', 1),
(25, 'Converse New Hammer', 26, NULL, NULL, NULL, 'p5.jpg', 1),
(26, 'New Superga New Hammer', 200, NULL, NULL, NULL, 'p2.jpg', 1),
(27, 'New Superga New Hammer', 918, NULL, NULL, NULL, 'p8.jpg', 1),
(28, 'New Superga New Hammer', 991, NULL, NULL, NULL, 'p7.jpg', 1),
(29, 'New Superga New Hammer', 200, NULL, NULL, NULL, 'p4.jpg', 1),
(30, 'New Superga New Hammer', 25, NULL, NULL, NULL, 'p5.jpg', 1),
(31, 'Adiddas New Hammer', 527, NULL, NULL, NULL, 'p6.jpg', 1),
(32, 'New Puma New Hammer', 559, NULL, NULL, NULL, 'p3.jpg', 1),
(33, 'New Superga New Hammer', 212, NULL, NULL, NULL, 'p1.jpg', 1),
(34, 'New Superga New Hammer', 382, NULL, NULL, NULL, 'p6.jpg', 1),
(35, 'Nike New Hammer', 274, NULL, NULL, NULL, 'p2.jpg', 1),
(36, 'New Puma New Hammer', 225, NULL, NULL, NULL, 'p7.jpg', 1),
(37, 'Nike New Hammer', 303, NULL, NULL, NULL, 'p6.jpg', 1),
(38, 'Nike New Hammer', 840, NULL, NULL, NULL, 'p5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `store` varchar(255) NOT NULL,
  `hyperlink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `store`, `hyperlink`) VALUES
(1, 'Nike', '#08657', '#'),
(2, 'Converse', '#08657', '#'),
(3, 'Ardilles', '#08657', '#'),
(4, 'Eiger', '#08657', '#'),
(5, 'Dallas', '#08657', '#'),
(6, 'Nike', '#08657', '#');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `hp` varchar(25) DEFAULT NULL,
  `addressku` text DEFAULT NULL,
  `imageprofile` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `email`, `password`, `hp`, `addressku`, `imageprofile`) VALUES
(1, 'krisna', NULL, 'admin@admin.com', '$2y$10$VIpwkMChuX98k6PZaLgvp.buKDjKV3lXhC9hWfnAIl9zQR8ytucJS', NULL, NULL, NULL),
(5, 'wirasakti', NULL, 'sakti@amcc.space', '$2y$10$NLkK5NHdrus5cX4w2chP9.oQoLstHG/apr3/HjBxA5vzoZD9ITjeq', NULL, NULL, NULL),
(6, 'ronypermadi', 'Rony Permadi', 'admin@ronypermadi.com', '$2y$10$sZUJXJD4vYn92nu56RiOVuqvdwGoDWb5N122gsYm9tBBD2OP0hacG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feature`
--
ALTER TABLE `feature`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feature`
--
ALTER TABLE `feature`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `banner`
--
ALTER TABLE `banner`
  ADD CONSTRAINT `banner_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
