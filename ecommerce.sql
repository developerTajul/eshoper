-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 24, 2017 at 05:19 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
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
  `product_cat` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_tbl`
--

INSERT INTO `products_tbl` (`id`, `title`, `regular_price`, `sale_price`, `product_image`, `product_short_desc`, `product_long_desc`, `product_cat`, `quantity`, `status`) VALUES
(1, 'IELTS', 9000, 6000, './uploads/ielts1.jpeg', 'Short Description<br>', 'long descriptin here<br>', '7', 0, 0),
(2, 'Hair Oil', 180, 160, './uploads/hair-oil.jpg', 'For hair treatment<br>', 'Use it for hair oil<br>', '5', 0, 0),
(3, 'Dud Chondon', 350, 240, './uploads/26.png', 'All First Aid tools are available here<br>', 'You might use it for your betterment<br>', '6', 0, 0),
(4, 'Facewash', 140, 130, './uploads/18.png', 'Use it after going home<br>', 'Go baby go<br>', '5', 0, 0),
(5, 'Acne Facepack', 115, 100, './uploads/21.png', 'For your face treatment<br>', 'for you face<br>', '5', 0, 0);

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
(5, 'Sumon Arroma', 'All beauty Products<br>', './uploads/maxresdefault.jpg', 0),
(6, 'Ami Shebok', 'All types of health and others things<br>', './uploads/healtItem.png', 1),
(7, 'Parasol IT', 'All types of English course like Speaking, Reading, Writing<br>', './uploads/parasol.png', 0),
(8, 'Spellbit', 'All types of websites, web apps<br>', './uploads/spellbit.png', 0),
(9, 'ACI', 'All types of daily products are available here<br>', './uploads/aci.png', 1);

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
(9, 'Health & Fitness', 'All types of health and fitness related products <br>', 1),
(10, 'Beauty Care', 'All beauty items for boys and girls<br>', 1),
(11, 'Education', 'All type of academic<br>', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_brands_tbl`
--
ALTER TABLE `product_brands_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_cat_tbl`
--
ALTER TABLE `product_cat_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
