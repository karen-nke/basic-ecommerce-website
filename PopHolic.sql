-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 16, 2021 at 06:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PopHolic`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `enquiry_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`enquiry_id`, `customer_name`, `customer_email`, `customer_phone`, `message`) VALUES
(1, 'John', 'john@gmail.com', '0123456789', 'Check order status 1008'),
(4, 'Merry', 'merry@gmail.com', '012345678', 'Can you check my order 1099');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `forum`
--

CREATE TABLE `forum` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `replies` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forum`
--

INSERT INTO `forum` (`id`, `name`, `questions`, `time`, `replies`) VALUES
(1, 'Janice', 'How if I am finding that is not on the website. ', '2021-11-12 23:08:22', 'Yes, all our product sell in the website is authentic guarantee !'),
(6, 'Merry', 'Are your product authentic and new?', '2021-11-17 00:50:15', 'Yes, all our product sell in the website is authentic guarantee !');

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `product_id` int(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`product_id`, `product_name`, `code`, `brand`, `product_category`, `product_price`, `product_description`, `product_type`, `image`) VALUES
(2, 'Freddy Basketball', 'FP001', 'Funko', 'Funko Shop', 170, 'ETA: Nov 2021', 'Preorder', 'Image/Funko/Freddy Basketball.png'),
(3, 'Ichigo', 'FP002', 'Funko', 'AAA', 130, 'ETA: Feb-Mar 2022\r\n', 'Preorder', 'Image/Funko/Ichigo.png'),
(4, 'Overhaul', 'FP003', 'Funko', 'Chalice', 150, 'ETA: Mar 2022\r\n\r\n', 'Preorder ', 'Image/Funko/Overhaul.png'),
(5, 'Iron Man Diecast', 'FP004', 'Funko', 'Funko Shop', 450, 'ETA - Dec 2021', 'Preorder', 'Image/Funko/Iron Man Diecast.png'),
(8, 'Aizawa', 'FP005', 'Funko', 'FYE', 150, 'ETA Mar 2022', 'Preorder', 'Image/Funko/Aizawa.png'),
(10, 'Dug with headphone', 'FP006', 'Funko', 'Funko Shop', 160, '3-5 weeks', 'Backorder', 'Image/Funko/Dug with headphone.png'),
(17, 'Alligator Loki', 'FP007', 'Funko', 'Hot Topic', 150, 'Status : Ready Stock ', 'Instock', 'Image/Funko/Alligator Loki.png'),
(18, 'Eddie Brock T-Shirt Bundle', 'FP008', 'Funko', 'Target', 380, 'Status : Ready Stock. Size: XXL', 'Instock', 'Image/Funko/Eddie Brock T-Shirt Bundle.png'),
(19, 'General Grievous', 'FP009', 'Funko', 'Hot Topic', 150, 'Status: Ready Stock', 'Instock', 'Image/Funko/General Grievous.png'),
(23, 'Midoriya Qposket', 'BP001', 'Banpresto', 'My Hero Academia', 85, 'Status : Ready Stock', 'Instock', 'Image/Banpresto/Midoriya Qposket.png'),
(24, 'Shoto Todoroki Qposket', '', 'Banpresto', 'My Hero Academia', 85, 'Status: Instock', 'Instock', 'Image/Banpresto/Shoto Todoroki Qposket.png'),
(27, 'Obanai Iguro', 'BP003', 'Banpresto', 'Demon Slayer', 85, 'Backorder', 'Backorder', 'Image/Banpresto/Obanai Iguro.png'),
(28, 'Kyojuro Rengoku Qposket Petit', 'BP004', 'Banpresto', 'Demon Slayer', 65, 'Preorder', 'Preorder', 'Image/Banpresto/Kyojuro Rengoku Qposket Petit.png'),
(29, 'Kid Loki', 'FP010', 'Funko', 'Funko Shop', 160, 'ETA: 3-4 weeks', 'Preorder', 'Image/Funko/Kid Loki.png'),
(30, 'Insosuke Qposket', 'BP005', 'Banpresto', 'Demon Slayer', 85, 'Ready Stock ', 'Instock ', 'Image/Banpresto/Inosuke Qposket.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `item_purchase` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `customer_name`, `item_purchase`, `comment`) VALUES
(1, 'John ', 'Funko Pop Ichigo (AAA)', 'Item was nicely packed with bubble wrap and double box, I received in well condition. Recommended store to deal with, will support in the future. '),
(2, 'Estelle', 'Funko Pop Aizawa ', 'Recommended place to shop for collectibles. Looking for some collectibles that are unlisted in the store, but the representative is very helpful to help me source for the product I looking for.'),
(5, 'Karen', 'Aizawa', 'Very good item'),
(6, 'Merry ', 'Midoriya QPosket', 'Very Cute Item. Product Is Authentic');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `user_role_id` int(255) DEFAULT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Phone` int(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Street` varchar(255) DEFAULT NULL,
  `Zip` int(11) DEFAULT NULL,
  `State` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_role_id`, `username`, `email`, `password`, `Name`, `Phone`, `Address`, `Street`, `Zip`, `State`, `Country`) VALUES
(2, 1, 'admin', 'admin@popholic.my', 'e66055e8e308770492a44bf16e875127', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, NULL, 'JuzKarenn', 'juzkarenn0201@gmail.com', '589c7eed055db3df271dac2b0627ab55', 'Karen Ng', 123456789, 'My Address', 'Jalan ', 47500, 'Selangor', 'Malaysia'),
(6, NULL, 'janice0420', 'janice@gmail.com', '87020c505e0b9bf7de34193746082c22', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, NULL, 'user1', 'user@gmail.com', '6edf26f6e0badff12fca32b16db38bf2', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, NULL, 'Testing1', 'testing1@gmail.com', 'ae8c47ebbf65d6c7dfb1d7a7910a74e2', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `forum`
--
ALTER TABLE `forum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
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
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forum`
--
ALTER TABLE `forum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
