-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2021 at 04:12 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pethouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `image`, `name`, `email`, `password`) VALUES
(1, 'assets/admin_image/doctor-08.jpg', 'mitesh', 'mitesh@gmail.com', 'a'),
(2, '', 'mohit', 'mohit@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `doctorbook_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `id`, `d_id`, `subtotal`, `doctorbook_date`, `status`) VALUES
(1, 1, 5, 0, '2021-02-08T15:15', 'Array'),
(2, 7, 4, 0, '2021-02-11T16:41', 'Array'),
(3, 10, 1, 0, '2021-02-09T16:54', 'Array'),
(4, 10, 1, 0, '2021-02-08T19:15', 'Array'),
(5, 10, 3, 0, '2021-02-08T20:15', 'Array'),
(6, 1, 4, 0, '2021-02-02T20:17', 'Array'),
(7, 1, 3, 0, '2021-02-10T17:16', 'Array'),
(8, 1, 2, 0, '2021-02-11T00:57', 'Array'),
(9, 1, 2, 0, '2021-02-11T00:57', 'Array'),
(10, 10, 1, 0, '2021-02-11T12:05', 'Array');

-- --------------------------------------------------------

--
-- Table structure for table `bookdoctor`
--

CREATE TABLE `bookdoctor` (
  `bd_id` int(11) NOT NULL,
  `d_id` int(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookdoctor`
--

INSERT INTO `bookdoctor` (`bd_id`, `d_id`, `id`) VALUES
(1, 1, 1),
(2, 1, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `price` int(255) NOT NULL,
  `subtotal` int(255) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) NOT NULL DEFAULT 'pending'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `id`, `pid`, `productname`, `qty`, `price`, `subtotal`, `added_date`, `status`) VALUES
(1, 3, 0, '', 0, 0, 0, '2021-02-08 11:46:54', 'pending'),
(10, 1, 9, 'fish1', 1, 254, 254, '2021-02-10 05:10:15', 'pending'),
(11, 2, 0, '', 0, 0, 0, '2021-02-11 05:27:21', 'pending'),
(4, 1, 9, 'fish1', 2, 254, 508, '2021-02-08 12:11:29', 'pending'),
(5, 1, 8, 'cage', 1, 1300, 1300, '2021-02-08 12:52:28', 'pending'),
(6, 12, 8, 'cage', 1, 1300, 1300, '2021-02-08 13:24:56', 'pending'),
(7, 12, 6, 'pedigree', 1, 1950, 1950, '2021-02-08 13:31:07', 'pending'),
(8, 12, 8, 'cage', 1, 1300, 1300, '2021-02-08 13:34:47', 'pending'),
(12, 2, 0, '', 0, 0, 0, '2021-02-11 05:31:44', 'pending'),
(13, 1, 8, 'cage', 1, 1300, 1300, '2021-02-11 06:26:10', 'pending'),
(14, 10, 9, 'fish1', 5, 254, 1270, '2021-02-11 06:26:50', 'pending'),
(15, 1, 0, '', 0, 0, 0, '2021-02-11 06:35:22', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cid` int(11) NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cdate` date NOT NULL,
  `mid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cimage`, `cname`, `cdate`, `mid`) VALUES
(1, '', 'accesorys', '2020-12-01', 1),
(2, '', 'food', '2020-12-01', 1),
(3, '', 'cage', '2020-12-01', 1),
(4, '', 'abnsjbdjsadsa', '2021-01-15', 1),
(5, '', 'food', '2021-01-20', 2),
(6, '', 'food', '2020-12-30', 3),
(7, '', 'food', '2021-01-28', 4),
(8, '', '', '0000-00-00', 0),
(9, 'assets/dog_category/', 'abc', '2021-02-09', 2),
(10, 'assets/dog_category/img-01.png', 'food', '2021-02-05', 1),
(11, 'assets/dog_category/favicon.ico', 'dog_test', '2021-02-09', 1),
(12, 'assets/dog_category/mitesh.jpg', 'food', '2021-02-09', 2),
(13, 'assets/dog_category/mitesh.jpg', 'fish_test', '2021-02-09', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `d_id` int(11) NOT NULL,
  `d_image` varchar(255) NOT NULL,
  `d_name` varchar(255) NOT NULL,
  `d_info` varchar(255) NOT NULL,
  `d_add` text NOT NULL,
  `d_mob` int(255) NOT NULL,
  `d_date` datetime NOT NULL,
  `d_fee` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`d_id`, `d_image`, `d_name`, `d_info`, `d_add`, `d_mob`, `d_date`, `d_fee`) VALUES
(1, 'assets/doctor_image/doctor-09.jpg', 'Mitesh', 'abcd', 'mavdi plot rajkot', 2147483647, '2021-01-17 00:22:00', 1000),
(2, 'assets/doctor_image/doctor-02.jpg', 'mohit', 'mbbs', 'rajkot', 2147483647, '2021-01-13 03:31:00', 500),
(3, 'assets/doctor_image/doctor-05.jpg', 'abc', 'mbbs', 'mavdi plot rajkot', 2147483647, '2021-02-03 11:46:00', 1501),
(4, 'assets/doctor_image/doctor-thumb-01.jpg', 'a', 'abcd', 'mavdi plot', 987654321, '2021-02-03 11:47:00', 200),
(5, 'assets/doctor_image/doctor-08.jpg', 'vivek', 'dental', '150 ft', 2147483647, '2021-02-03 11:47:00', 4500);

-- --------------------------------------------------------

--
-- Table structure for table `maincategory`
--

CREATE TABLE `maincategory` (
  `mid` int(11) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `mdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincategory`
--

INSERT INTO `maincategory` (`mid`, `mname`, `mdate`) VALUES
(1, 'dog', '2020-12-01'),
(2, 'cat', '2020-12-01'),
(3, 'Fish', '2021-01-12'),
(4, 'bird', '2021-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pprice` int(255) NOT NULL,
  `psprice` int(255) NOT NULL,
  `pdate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pid`, `mid`, `cid`, `pname`, `pimage`, `pprice`, `psprice`, `pdate`) VALUES
(1, 1, 2, 'abc', 'assets/product/product-details-2.jpg', 1200, 1100, '2021-01-21'),
(13, 1, 2, 'dog_food', 'assets/product/product-4.jpg', 1300, 1200, '0000-00-00'),
(4, 4, 7, 'parrot_food', 'assets/product/product-details-1.jpg', 200, 180, '2021-01-27'),
(12, 4, 7, 'dasd', 'assets/product/category-4.png', 500, 450, '0000-00-00'),
(6, 1, 2, 'pedigree', 'assets/product/product-5.jpg', 2000, 1950, '2021-01-28'),
(7, 2, 5, 'product', 'assets/product/product-8.jpg', 123, 121, '2021-01-29'),
(8, 1, 3, 'cage', 'assets/product/product-10.jpg', 1400, 1300, '2021-01-29'),
(9, 3, 6, 'fish1', 'assets/product/category-3.png', 300, 254, '2021-01-28'),
(10, 4, 7, 'bird_food', 'assets/product/category-4.png', 900, 800, '2021-01-29'),
(11, 4, 7, 'bird_2', 'assets/product/product-9.jpg', 1300, 1199, '2021-01-29'),
(14, 2, 5, 'cat_2', 'assets/product/category-1.png', 50, 40, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` int(255) NOT NULL,
  `mobile` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `address`, `email`, `password`, `mobile`) VALUES
(1, 'Miteshabc', 'sadasdsa', '', 'mitesh@gmail.com', 1, 1234567890),
(7, 'mohita', 'jotaniya', '', 'mohitjotaniya@gmail.com', 1, 1324567890),
(10, 'vivek', 'gondaliya', '', 'vievk@gmail.com', 1, 1234567890),
(12, 'Mitesh', 'Lathiya', 'mavdi main road, rajkot', 'miteshlathiya77@gmail.com', 1, 1324567890),
(13, 'Mitesh', 'Lathiya', '', 'miteshlatdsadsadhiya77@gmail.com', 1, 1324567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`),
  ADD KEY `id` (`id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`,`d_id`);

--
-- Indexes for table `bookdoctor`
--
ALTER TABLE `bookdoctor`
  ADD PRIMARY KEY (`bd_id`),
  ADD KEY `d_id` (`d_id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `id` (`id`),
  ADD KEY `pid` (`pid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `mid` (`mid`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `maincategory`
--
ALTER TABLE `maincategory`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `mid` (`mid`),
  ADD KEY `cid` (`cid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `bookdoctor`
--
ALTER TABLE `bookdoctor`
  MODIFY `bd_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maincategory`
--
ALTER TABLE `maincategory`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`id`) REFERENCES `register` (`id`),
  ADD CONSTRAINT `bill_ibfk_2` FOREIGN KEY (`d_id`) REFERENCES `doctor` (`d_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
