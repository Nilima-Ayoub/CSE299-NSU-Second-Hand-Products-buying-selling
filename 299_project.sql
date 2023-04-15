-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2022 at 07:59 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `299_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `title` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `category` text NOT NULL,
  `sub_category` text NOT NULL,
  `price` int(255) NOT NULL,
  `duration_of_use` varchar(500) NOT NULL,
  `img1` varchar(255) NOT NULL,
  `img2` varchar(255) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(500) NOT NULL,
  `phone_number` int(255) NOT NULL,
  `payment` int(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `user_id`, `title`, `description`, `category`, `sub_category`, `price`, `duration_of_use`, `img1`, `img2`, `name`, `email`, `phone_number`, `payment`, `date`) VALUES
(1, 10, 'second hand electronics', 'second hand Blender and Juicer.', 'electronics', 'Blender and Juicer', 3000, '5 years', 'product1.jpg', 'product.jpg', 'Nilima  ', 'nilima@gmail.com', 1817458124, 150, '17/7/2022,Sunday'),
(2, 11, 'Second hand furniture', 'General Dimension:34\" W x 35\" D x 33\" H,Seat Height:17\",Leg Height:7\"', 'furniture', 'Sofa', 10000, '7 years', 'second_hand_furniture-1.png', 'second_hand_furniture-2.png', 'Anupama      ', 'anupama@gmail.com', 1817459873, 500, '24/6/2022,Friday'),
(7, 10, 'Harry Potter book set', 'Used books for sell. In good condition Books', 'Books', 'Fantasy', 1000, '7 months', 'harry_potter.jpg', 'harry-potter-books.jpg', 'Nilima     ', 'nilima@gmail.com', 1819845264, 50, '10/06/2022,Friday'),
(8, 10, 'Second hand clothes', 'Though the  sweaters were used but they are in good condition.', 'Clothes', 'sweaters', 1000, '3 years', 'recycle-old-clothes.png', 'cloth.jpg', 'Nilima     ', 'nilima@gmail.com', 1814795420, 50, '17/8/2022,wednesday'),
(27, 11, 'clothes', 'used', 'Cloths', 'winter clothes', 3000, '3 years', 'cloth.jpg', 'cover.jpeg', 'Anupama ', 'anu@gmail.com', 1234567830, 150, '27/08/22,Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(255) NOT NULL,
  `name` text NOT NULL,
  `contact_number` int(255) NOT NULL,
  `mail` varchar(500) NOT NULL,
  `shipping_address` varchar(500) NOT NULL,
  `seller_id` int(255) NOT NULL,
  `item` varchar(255) NOT NULL,
  `sub_category` varchar(500) NOT NULL,
  `price` int(255) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `name`, `contact_number`, `mail`, `shipping_address`, `seller_id`, `item`, `sub_category`, `price`, `date`) VALUES
(1, 'Aupama', 1479524876, 'anu@gmail.com', 'House no. 6c, Indira road, Farmgate', 10, 'Harry Potter book set', 'fantasy', 1000, '17/08/22,Wednesday'),
(5, 'Nilima', 1748542982, 'nilima@gmail.com', 'sector-1,road-18,house-5,flat-c2,Uttara,Dhaka', 11, 'Second hand furniture', 'Sofa', 10000, '18/08/22,Thursday'),
(7, 'Emon', 1849524620, 'emon@gmail.com', 'Building no. 458, Flat-5a,Adardhanogor, Badda', 10, 'Second hand clothes', 'sweaters', 1000, '18/08/22,Thursday'),
(8, 'Emon', 1748542982, 'emon@gmail.com', 'badda', 10, 'Second hand clothes', 'sweaters', 1000, '27/08/22,Saturday');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(11) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `totalPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `role`, `email_address`, `password`, `phone_number`, `totalPost`) VALUES
(3, 'ADMIN', 'admin', 'admin@gmail.com', 'Admin1', 1234578911, 0),
(10, 'Nilima', 'user', 'nilima@gmail.com', 'Nilima1', 1234567837, 3),
(11, 'Anupama', 'user', 'anu@gmail.com', 'Anup1', 1234567890, 2),
(21, 'Admin2', 'admin', 'admin2@gmail.com', 'Admin2', 1768265780, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
