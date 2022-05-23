-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220522.7701cd71da
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 11:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nti_ecomerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

CREATE TABLE `addresses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `streat` varchar(512) NOT NULL,
  `building` varchar(3) NOT NULL,
  `foor` varchar(3) NOT NULL,
  `flat` varchar(3) NOT NULL,
  `notes` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `region_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(512) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `gmail` varchar(32) NOT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `email_verified_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `code` int(5) DEFAULT NULL,
  `password` varchar(512) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1->active 0->not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(32) NOT NULL,
  `name_ar` varchar(32) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(64) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(512) NOT NULL,
  `name_ar` varchar(512) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1->active 0->not active',
  `image` varchar(64) NOT NULL DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(512) NOT NULL,
  `name_ar` varchar(512) NOT NULL,
  `lat` decimal(7,0) NOT NULL,
  `long` decimal(7,0) NOT NULL,
  `distance` decimal(7,0) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1->active , 0->not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `complains_replayes`
--

CREATE TABLE `complains_replayes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `message` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `replay_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(20) NOT NULL,
  `discount` decimal(7,0) NOT NULL,
  `discount_type` varchar(512) NOT NULL,
  `min_order_price` decimal(10,0) NOT NULL,
  `max_discount_value` decimal(10,0) NOT NULL,
  `max_number_of_usage` int(3) UNSIGNED NOT NULL,
  `max_number_of_usage_per_user` int(3) UNSIGNED NOT NULL,
  `status` tinyint(1) NOT NULL,
  `start_datetime` timestamp NULL DEFAULT NULL,
  `end_datetime` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favs`
--

CREATE TABLE `favs` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(512) NOT NULL,
  `title_ar` varchar(512) NOT NULL,
  `image` varchar(64) NOT NULL DEFAULT 'default.png',
  `descount_type` int(11) NOT NULL,
  `descount` int(11) NOT NULL,
  `start_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `end_datetime` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` int(5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `total_price` decimal(7,0) UNSIGNED NOT NULL,
  `delivered_at` timestamp NULL DEFAULT NULL,
  `payment` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `address_id` bigint(20) UNSIGNED NOT NULL,
  `coupon_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_ar` varchar(32) NOT NULL,
  `name_en` varchar(32) NOT NULL,
  `details_ar` mediumtext NOT NULL,
  `details_en` mediumtext NOT NULL,
  `price` decimal(7,0) UNSIGNED NOT NULL,
  `quantity` int(5) UNSIGNED NOT NULL DEFAULT 0,
  `code` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1 -> active 0->not active',
  `image` varchar(32) NOT NULL DEFAULT 'default.png',
  `subcategory_id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products_specs`
--

CREATE TABLE `products_specs` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `specs_id` bigint(20) UNSIGNED NOT NULL,
  `value` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_offer`
--

CREATE TABLE `product_offer` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `offer_id` bigint(20) UNSIGNED NOT NULL,
  `price_after_discount` decimal(7,0) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(512) NOT NULL,
  `name_ar` varchar(512) NOT NULL,
  `lat` decimal(10,0) NOT NULL,
  `long` decimal(10,0) NOT NULL,
  `distance` decimal(10,0) NOT NULL,
  `status` tinyint(1) NOT NULL COMMENT '1->active , 0->not active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `city_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rate` int(5) NOT NULL DEFAULT 0 COMMENT '0-> not good , 5-> so good or excellent ',
  `comment` mediumtext DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `specs`
--

CREATE TABLE `specs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE `subcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_en` varchar(32) NOT NULL,
  `name_ar` varchar(32) NOT NULL,
  `image` varchar(32) NOT NULL DEFAULT 'default.png',
  `status` tinyint(1) NOT NULL COMMENT '0->not active , 1->active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(80) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` int(6) DEFAULT NULL,
  `gender` enum('m','f') NOT NULL COMMENT 'm->male ,f->female',
  `status` tinyint(1) NOT NULL COMMENT '0->not active 1->active',
  `image` varchar(32) NOT NULL DEFAULT 'default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addresses`
--
ALTER TABLE `addresses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `regions_addresses_fk` (`region_id`),
  ADD KEY `users_addresses_fk` (`user_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`product_id`,`user_id`) USING BTREE,
  ADD KEY `users_carts_fk` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complains_replayes`
--
ALTER TABLE `complains_replayes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_complains_replayes_fk` (`user_id`),
  ADD KEY `replay_recersive` (`replay_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `favs`
--
ALTER TABLE `favs`
  ADD PRIMARY KEY (`user_id`,`product_id`) USING BTREE,
  ADD KEY `products_fav_fk` (`product_id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `adresses_orders_fk` (`address_id`),
  ADD KEY `coupons_orders_fk` (`coupon_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_subcategories_fk` (`subcategory_id`),
  ADD KEY `products_brands_fk` (`brand_id`);

--
-- Indexes for table `products_specs`
--
ALTER TABLE `products_specs`
  ADD PRIMARY KEY (`product_id`,`specs_id`) USING BTREE,
  ADD KEY `specs_products_specs_fk` (`specs_id`);

--
-- Indexes for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD PRIMARY KEY (`product_id`,`offer_id`) USING BTREE,
  ADD KEY `offers_product_offer_fk` (`offer_id`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`product_id`,`order_id`) USING BTREE,
  ADD KEY `orders_products_orders` (`order_id`);

--
-- Indexes for table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cities_regions_fk` (`city_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`product_id`,`user_id`) USING BTREE,
  ADD KEY `users_reviews_fk` (`user_id`);

--
-- Indexes for table `specs`
--
ALTER TABLE `specs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subcategories_categories_fk` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addresses`
--
ALTER TABLE `addresses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `complains_replayes`
--
ALTER TABLE `complains_replayes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favs`
--
ALTER TABLE `favs`
  MODIFY `user_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products_specs`
--
ALTER TABLE `products_specs`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_offer`
--
ALTER TABLE `product_offer`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_order`
--
ALTER TABLE `product_order`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `product_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `specs`
--
ALTER TABLE `specs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addresses`
--
ALTER TABLE `addresses`
  ADD CONSTRAINT `regions_addresses_fk` FOREIGN KEY (`region_id`) REFERENCES `regions` (`id`),
  ADD CONSTRAINT `users_addresses_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `products_carts_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `users_carts_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `complains_replayes`
--
ALTER TABLE `complains_replayes`
  ADD CONSTRAINT `replay_recersive` FOREIGN KEY (`replay_id`) REFERENCES `complains_replayes` (`id`),
  ADD CONSTRAINT `users_complains_replayes_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `favs`
--
ALTER TABLE `favs`
  ADD CONSTRAINT `products_fav_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `users_fav_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `adresses_orders_fk` FOREIGN KEY (`address_id`) REFERENCES `addresses` (`id`),
  ADD CONSTRAINT `coupons_orders_fk` FOREIGN KEY (`coupon_id`) REFERENCES `coupons` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brands_fk` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`),
  ADD CONSTRAINT `products_subcategories_fk` FOREIGN KEY (`subcategory_id`) REFERENCES `subcategories` (`id`);

--
-- Constraints for table `products_specs`
--
ALTER TABLE `products_specs`
  ADD CONSTRAINT `products_products_specs` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `specs_products_specs_fk` FOREIGN KEY (`specs_id`) REFERENCES `specs` (`id`);

--
-- Constraints for table `product_offer`
--
ALTER TABLE `product_offer`
  ADD CONSTRAINT `offers_product_offer_fk` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `products_products_offers_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `product_order`
--
ALTER TABLE `product_order`
  ADD CONSTRAINT `orders_products_orders` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `products_products_orders_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `regions`
--
ALTER TABLE `regions`
  ADD CONSTRAINT `cities_regions_fk` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `products_reviews_fk` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `users_reviews_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `subcategories`
--
ALTER TABLE `subcategories`
  ADD CONSTRAINT `subcategories_categories_fk` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



