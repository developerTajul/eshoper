-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 23, 2017 at 05:16 PM
-- Server version: 5.7.19-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `passWord` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `name`, `email`, `userName`, `passWord`) VALUES
(1, 'Md. Tajul Islam', 'developer.tajul@gmail.com', 'tajul', 'bd08101991'),
(2, 'Tania Howlader', 'tania@gmail.com', 'tania', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `products_tbl`
--

CREATE TABLE `products_tbl` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `regular_price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_short_desc` varchar(255) NOT NULL,
  `product_long_desc` varchar(255) NOT NULL,
  `product_cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`id`, `title`, `regular_price`, `sale_price`, `product_image`, `product_short_desc`, `product_long_desc`, `product_cat`) VALUES
(1, 'Samsu Kopa', 500, 5000, './uploads/product_27_1_thumb_png.jpeg', 'short description<br>', 'long description<br>', '3'),
(2, 'Fish', 120, 110, './uploads/24.jpg', 'This is a staut long descrop<br>', 'short description<br>', '3'),
(3, 'Kopa', 120, 100, './uploads/7.jpg', 'long description<br>', 'short descripton<br>', '1'),
(4, 'T-Shirt', 150, 100, './uploads/product12.jpg', 'This is a short description<br>', 'This is a long description<br>', '3');

-- --------------------------------------------------------

--
-- Table structure for table `product_brands_tbl`
--

CREATE TABLE `product_brands_tbl` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `brand_desc` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `brand_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_brands_tbl`
--

INSERT INTO `product_brands_tbl` (`id`, `name`, `brand_desc`, `logo`, `brand_status`) VALUES
(2, 'Sumon Arroma', 'Sumon Arroma is one of the most leading cosmetic company in our country<br>', './uploads/118.jpg', 0),
(3, 'Samsu', 'Valo acho ni<br>', './uploads/22.jpg', 1),
(4, 'Annex', 'It is a well-known&nbsp; Brands<br>', './uploads/logo.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_cat_tbl`
--

CREATE TABLE `product_cat_tbl` (
  `id` int(11) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_desc` varchar(255) NOT NULL,
  `cat_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_cat_tbl`
--

INSERT INTO `product_cat_tbl` (`id`, `cat_name`, `cat_desc`, `cat_status`) VALUES
(1, 'WordPress Theme Dev info', 'info We are wordpress theme developer<br>', 1),
(2, 'Joomla Theme Dev', 'There is a Joomla Theme Which is very<br>', 0),
(3, 'woocommerce', 'This is the first time<br>', 1),
(4, 'WordPress Theme', 'WordPress is the Opensource<br>', 1),
(5, 'Joomla Theme Dev', 'Joomla is one of the most powerful<br>', 1),
(6, 'Shirt', 'All type of shirt<br>', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_tbl`
--
ALTER TABLE `products_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_brands_tbl`
--
ALTER TABLE `product_brands_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_cat_tbl`
--
ALTER TABLE `product_cat_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products_tbl`
--
ALTER TABLE `products_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_brands_tbl`
--
ALTER TABLE `product_brands_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_cat_tbl`
--
ALTER TABLE `product_cat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
