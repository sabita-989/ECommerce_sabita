-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2020 at 04:44 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_giftgalore`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `summary` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `summary`, `image`) VALUES
(2, 'Chocolates', 'Sweet and easy', 'Image-20200304110514108.jpg'),
(3, 'Keepshakes', 'Piece of beautiful arts', 'Image-20200304111255856.jpg'),
(4, 'Soft Toys', 'Soft as a cushion', 'Image-20200304111352481.jpg'),
(6, 'Customized Gifts', 'Customize your own products', 'Image-20200304111451299.jpg'),
(22, 'Scented Gifts', 'Scented with essentials', 'Image-20200304111620492.jpg'),
(23, 'Pets', 'Dogs, Cats, Pigs', 'Image-2020030411165534.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `f_id` int(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `p_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `p_mode` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `contact` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`p_id`, `product_name`, `product_price`, `p_mode`, `address`, `contact`, `product_id`) VALUES
(62, 'Dairymilk Silk ', 0, 'cash', 'jhapa', 87387387, 26);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(3) NOT NULL,
  `quantity` int(10) NOT NULL,
  `description` longtext NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category_id`, `quantity`, `description`, `image`) VALUES
(26, 'Dairymilk Silk ', 0, 2, 10, 'Caramel filled ', 'Image-20200304122427354.jpg'),
(29, 'Hershey\'s Candy', 150, 2, 10, 'Delecious Milkcandy', 'Image-20200304112133825.jpg'),
(30, 'Galaxy Bars', 200, 2, 10, 'Energy bars', 'Image-20200304112400792.jpg'),
(31, 'Congratulation gift', 600, 3, 5, 'Suitable for graduation', 'Image-202003041128086.jpg'),
(32, 'Fenton Art Glass', 500, 3, 5, 'Art Bowl', 'Image-2020030411293368.jpg'),
(33, 'Book Boxes', 550, 3, 3, 'decorative book boxes for storing', 'Image-20200304113345555.jpg'),
(34, 'Dog Softtoy', 1000, 4, 15, 'Cuddly and soft', 'Image-20200304113558464.jpg'),
(35, 'Pig Soft-toy', 600, 4, 11, 'soft baby pig', 'Image-20200304113928139.jpg'),
(36, 'Teddy toy', 800, 4, 5, 'Soft teddy bear', 'Image-2020030411405647.jpg'),
(37, 'Name Bracelet', 350, 6, 20, 'Customized name bracelet', 'Image-20200304114332360.jpg'),
(38, 'Wine Glass', 250, 6, 12, 'Customized wine glass', 'Image-20200304114452904.jpg'),
(39, 'Beartown Baskets', 1000, 6, 24, 'Personalized beartown baskets', 'Image-20200304114748642.jpg'),
(40, 'Scented candles', 600, 22, 5, 'oudnight scents', 'Image-20200304114940665.jpg'),
(41, 'Bath Baskets', 650, 22, 12, 'scented bath products', 'Image-20200304115116554.jpg'),
(42, 'Flowers', 550, 22, 15, 'sweet-smell flowers', 'Image-20200304115329933.png'),
(43, 'Dogs', 12000, 23, 4, 'Good-dogs', 'Image-20200304115456934.jpg'),
(44, 'Cats', 15000, 23, 5, 'Cat pets', 'Image-20200304115558473.jpg'),
(45, 'Pig', 115000, 23, 4, 'baby pigs as pets', 'Image-20200304120324990.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` bigint(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `fullname`, `email`, `password`, `role`) VALUES
(5, 'sdfds', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'user'),
(8, '$username', ' $fullname', '$email', '$password', 'user'),
(10, 'viduzorom', 'Vaughan Tucker', 'xipomah@mailinator.net', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'user'),
(11, 'jutiva', 'Eaton Nunez', 'magar@mailinator.net', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'user'),
(12, 'admin', 'admin master', 'admin@gmail.com', '0192023a7bbd73250516f069df18b500', 'admin'),
(13, 'sans', 'Sanskriti Shrestha', 'sans@gmail.com', '0ddd63424b5af786fdd47bcc9209bcf3', 'user'),
(14, 'sans123', 'Sanskriti Shrestha', 'sanskritishrestha@hotmail.com', '21232f297a57a5a743894a0e4a801fc3', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gift_products_ibfk_1` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` bigint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
