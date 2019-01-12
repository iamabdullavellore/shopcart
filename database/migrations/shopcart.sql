-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2019 at 07:38 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `product_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(8, 3, 1, 3, '2019-01-12 17:46:11', '2019-01-12 12:16:11'),
(9, 4, 1, 2, '2019-01-12 17:46:13', '2019-01-12 12:16:13'),
(10, 97, 1, 2, '2019-01-12 17:46:17', '2019-01-12 12:16:17'),
(12, 94, 1, 2, '2019-01-12 17:46:16', '2019-01-12 12:16:16'),
(13, 107, 1, 2, '2019-01-12 17:46:14', '2019-01-12 12:16:14');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Electronics'),
(2, 'Clothing & Wears'),
(3, 'Accessaries & Extras');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `sub_category` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `sub_category`, `price`) VALUES
(1, 'Mobile 1', 14, 100),
(2, 'Computer 1', 1, 100),
(3, 'Tablet 1', 2, 100),
(4, 'TV 1', 3, 100),
(5, 'Game 1', 4, 100),
(6, 'Screen Card 1', 5, 100),
(7, 'Men''s Shoe 1', 6, 100),
(8, 'Women''s Shoe 1', 7, 100),
(9, 'Kid''s Shoe 1', 8, 100),
(10, 'Chair 1', 9, 100),
(11, 'Lunch Box 1', 10, 100),
(12, 'Men''s Shirt 1', 11, 100),
(13, 'Women''s Saree 1', 12, 100),
(14, 'Kid''s Wear 1', 13, 100),
(85, 'Mobile 2', 14, 100),
(86, 'Computer 2', 1, 100),
(87, 'Tablet 2', 2, 100),
(88, 'TV 2', 3, 100),
(89, 'Game 2', 4, 100),
(90, 'Screen Card 2', 5, 100),
(91, 'Men''s Shoe 2', 6, 100),
(92, 'Women''s Shoe 2', 7, 100),
(93, 'Kid''s Shoe 2', 8, 100),
(94, 'Chair 2', 9, 100),
(95, 'Lunch Box 2', 10, 100),
(96, 'Men''s Shirt 2', 11, 100),
(97, 'Women''s Saree 2', 12, 100),
(98, 'Kid''s Wear 2', 13, 100),
(99, 'Mobile 3', 14, 100),
(100, 'Computer 3', 1, 100),
(101, 'Tablet 3', 2, 100),
(102, 'TV 3', 3, 100),
(103, 'Game 3', 4, 100),
(104, 'Screen Card 3', 5, 100),
(105, 'Men''s Shoe 3', 6, 100),
(106, 'Women''s Shoe 3', 7, 100),
(107, 'Kid''s Shoe 3', 8, 100),
(108, 'Chair 3', 9, 100),
(109, 'Lunch Box 3', 10, 100),
(110, 'Men''s Shirt 3', 11, 100),
(111, 'Women''s Saree 3', 12, 100),
(112, 'Kid''s Wear 3', 13, 100);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `sub_category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `category`, `sub_category_name`) VALUES
(1, 1, 'Computers'),
(2, 1, 'Tablets'),
(3, 1, 'Appliances'),
(4, 1, 'Games & Entertainment'),
(5, 3, 'Mobile Accessaries'),
(6, 3, 'Men''s Accessaries'),
(7, 3, 'Women''s Accessaries'),
(8, 3, 'Kid''s Accessaries'),
(9, 3, 'Home Products'),
(10, 3, 'Kitchen Products'),
(11, 2, 'Men''s Clothing'),
(12, 2, 'Women''s Clothing'),
(13, 2, 'Kid''s Wear'),
(14, 1, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User-1', 'user1@shopcart.com', '$2y$10$KCWNvVfKo9jHzDYbru5H5OV7ZPH1ubD/qB3C/xbUXY6miKb3d5972', 'qrSxJReF0VR4Q2Yi57gzaQ0gNRPyzKNLLU4iAW8FvjZl7sDxrHTnfzSjLoLL', '2019-01-09 10:13:31', '2019-01-09 10:13:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`),
  ADD KEY `user_id_3` (`user_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_category` (`sub_category`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`),
  ADD KEY `category_2` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`sub_category`) REFERENCES `sub_category` (`id`);

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
