-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 06:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_lanka_cake`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(7, 'thushara', 'h@gmail.com', '$2y$10$EbOzo7ajsEViPVa4v0B7l.oh1ye/aB2vkXQPOFbFUdV7sfWOHNaCu');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(18, '::1', 0),
(22, '::1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_title`, `description`, `date`) VALUES
(54, 'Gateaus', '', '2023-04-16 05:57:09'),
(55, 'Cup Cakes', '', '2023-04-01 16:40:19'),
(56, 'Cheesecake', '', '2023-04-16 05:56:47'),
(57, 'Cakes', '', '2023-04-01 16:42:47'),
(60, 'Seasonal Special', '', '2023-04-16 06:12:10'),
(62, 'Cake Pieces', '', '2023-04-21 15:10:57');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `Inquiry_id` int(11) NOT NULL,
  `cust_name` varchar(250) NOT NULL,
  `user_email` varchar(250) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `user_message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`Inquiry_id`, `cust_name`, `user_email`, `subjects`, `user_message`, `date`) VALUES
(30, 'fd', 'thusharaperera34@gmail.com', 'dfdf', 'fdf', '2023-04-22 17:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `user_id`, `invoice_no`, `product_id`, `quantity`, `order_status`) VALUES
(17, 9, 648835760, 13, 1, 'pending'),
(18, 9, 942116006, 24, 1, 'pending'),
(19, 9, 1240927172, 10, 1, 'pending'),
(20, 9, 972891681, 21, 1, 'pending'),
(21, 9, 2022167677, 14, 1, 'pending'),
(22, 9, 1427840314, 15, 1, 'pending'),
(23, 9, 803907664, 18, 1, 'pending'),
(24, 9, 1473898392, 16, 1, 'pending'),
(25, 9, 1273778027, 20, 1, 'pending'),
(26, 9, 101691474, 13, 1, 'pending'),
(27, 9, 110019593, 16, 1, 'pending'),
(28, 9, 623032271, 17, 1, 'pending'),
(29, 9, 614541510, 20, 1, 'pending'),
(30, 9, 748582340, 14, 1, 'pending'),
(31, 9, 1763201195, 24, 1, 'pending'),
(32, 9, 808113641, 20, 1, 'pending'),
(33, 9, 1733208593, 17, 1, 'pending'),
(34, 9, 1089667085, 17, 1, 'pending'),
(35, 24787, 1089924027, 22, 1, 'pending'),
(36, 24787, 1984520254, 24, 1, 'pending'),
(37, 24787, 1887151041, 22, 1, 'pending'),
(38, 24787, 1410482333, 22, 1, 'pending'),
(39, 24787, 1107999983, 10, 1, 'pending'),
(40, 24787, 1639221923, 13, 1, 'pending'),
(41, 24787, 950062043, 18, 1, 'pending'),
(42, 24787, 1861920070, 17, 1, 'pending'),
(43, 24787, 1592254768, 10, 1, 'pending'),
(44, 24787, 1868084, 17, 1, 'pending'),
(45, 24787, 34344476, 21, 1, 'pending'),
(46, 24787, 27026774, 18, 1, 'pending'),
(47, 24787, 1115778628, 17, 1, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(250) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_weight` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `category_id`, `product_image`, `product_price`, `product_weight`, `date`, `status`) VALUES
(10, 'Peanut Butter Cupcake', 'Peanut Butter Cupcake', 0, 'peanut-butter-cupcakes.jpg', 250, '145g', '2023-05-03 11:02:12', 'true'),
(13, 'Caramel Cupcake', 'Caramel Cupcake', 55, 'Caramel Cupcake.jpg', 250, '', '2023-04-04 10:29:01', 'true'),
(14, 'Coconut Cupcake', 'Coconut Cupcake', 55, 'coconut-cupcake.jpg', 200, '', '2023-04-04 10:29:40', 'true'),
(15, 'Black Forest Gateau', 'Black Forest Gateau', 54, 'Black Forest Gateau.jpg', 3450, '', '2023-04-04 10:29:59', 'true'),
(16, 'Fruit Gateau', 'Vanilla Sponge layered with fresh cream and fresh seasonal fruits, decorated with glazed exotic fruits, finished with nuts surround and the message of your choice.', 54, 'Fresh-Fruit-Gateau.jpg', 4000, '1Kg', '2023-04-17 09:47:56', 'true'),
(17, 'Coffee Gateau', 'Coffee Gateau', 54, 'Coffee Gateau.jpg', 3450, '', '2023-04-04 10:30:45', 'true'),
(18, 'Chocolate Gateau', 'Chocolate Gateau', 54, 'Chocolate Gateau.jpg', 3450, '', '2023-04-04 10:30:57', 'true'),
(20, 'Blueberry Cheesecake', 'Blueberry Cheesecake', 56, 'Blueberry Cake.jpg', 4500, '', '2023-04-04 10:31:31', 'true'),
(21, 'Strawberry Cheesecake', 'Strawberry Cheesecake', 56, 'Strawberry Cheesecake.jpg', 4500, '', '2023-04-04 10:31:37', 'true'),
(22, 'Ribbon Cake', 'Coloured layers of soft butter cake with vanilla icing and strawberry jam filling and covered in vanilla butter icing', 57, 'Ribbon Cake.jpg', 2000, '', '2023-04-04 10:31:47', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `user_orders`
--

CREATE TABLE `user_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amout_due` int(255) NOT NULL,
  `invoice_no` int(255) NOT NULL,
  `total_products` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_orders`
--

INSERT INTO `user_orders` (`order_id`, `user_id`, `amout_due`, `invoice_no`, `total_products`, `order_date`, `order_status`) VALUES
(57, 9, 9700, 232752283, 4, '2023-04-20 07:47:31', 'pending'),
(73, 9, 3450, 27026774, 1, '2023-04-22 17:36:07', 'pending'),
(74, 9, 3450, 1115778628, 1, '2023-04-22 17:37:44', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `user_first_name` varchar(100) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `user_first_name`, `user_last_name`, `user_name`, `user_email`, `user_password`, `user_ip`, `user_address`, `user_mobile`) VALUES
(9, 'Nimantha', 'perera', 'nimmza', 'thusharaperera34@gmail.com', '$2y$10$VCfakWJhPzS9Rn8nPPgAkesleJnqt2lj4t52.jQMhzp9TnwdS2QSa', '::1', '353/2A,Bataketiya Lane,Udumulla,Angoda', '766134307'),
(11, 'Thushara1', 'Perera1', 'nimantha19981', 'thusharapereraerer34@gmail.com', '$2y$10$x.ZLWAXXXvgAM3ZuNRrfueDKgOOCjP/VcWwwi5j3Ob7Sx/xj9G5JW', '::1', '353/2A,Bataketiya Lane,Udumulla,Angoda', '0766134307');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`Inquiry_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_orders`
--
ALTER TABLE `user_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cart_details`
--
ALTER TABLE `cart_details`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `Inquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `user_orders`
--
ALTER TABLE `user_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
