-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2023 at 05:40 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_foodorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`email`, `pass`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `name`, `descr`, `img`) VALUES
(3, 'Juice mint', 't amet elit. Neca pretim miura', 'event-birthday.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_book`
--

CREATE TABLE `tbl_book` (
  `id` int(50) NOT NULL,
  `uid` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mob` varchar(50) NOT NULL,
  `price` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `gpayid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_book`
--

INSERT INTO `tbl_book` (`id`, `uid`, `name`, `email`, `address`, `mob`, `price`, `status`, `gpayid`) VALUES
(7, 3, 'bini', 'bini@gmail.com', 'aabbnn', '679087578', '332', 1, 'bini@okicici.com'),
(8, 3, 'bini', 'bini@gmail.com', 'aabbnn', '679087578', '492', 0, 'bini@okicici.com'),
(9, 2, 'Reshmi', 'reshmi@gmail.com', 'abchjianm', '9876787656', '160', 0, 'reshmi@okicici.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `quantity` int(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`c_id`, `u_id`, `f_id`, `quantity`, `price`) VALUES
(4, 3, 5, 1, 332),
(6, 4, 6, 0, 7),
(10, 3, 6, 2, 160),
(11, 2, 6, 2, 160);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chef`
--

CREATE TABLE `tbl_chef` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chef`
--

INSERT INTO `tbl_chef` (`id`, `name`, `pos`, `img`) VALUES
(1, 'Adam Phillips', 'CEO, Co Founder', 'team-1.jpg'),
(2, 'Dylan Adams', 'Master Chef', 'team-2.jpg'),
(3, 'Jhon Doe', 'Master Chef', 'team-3.jpg'),
(8, 'Jaison', 'Master', 'chefs-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `name`, `descr`, `price`, `img`, `type`) VALUES
(1, 'Mini cheese Burger', 'Lorem ipsum dolor sit amet elit. ', '9', 'greek-salad.jpg', 'Breakfast'),
(5, 'beef', 'dsdg ffghdf', '332', 'photo.jpg', 'Dinner'),
(6, 'sandwich', 'tasty', '80', 'cake.jpg', 'Breakfast');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `g_id` int(20) NOT NULL,
  `g_img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`g_id`, `g_img`) VALUES
(3, 'gallery-1.jpg'),
(4, 'gallery-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pos` varchar(50) NOT NULL,
  `descr` varchar(50) NOT NULL,
  `img` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_review`
--

INSERT INTO `tbl_review` (`id`, `name`, `pos`, `descr`, `img`) VALUES
(3, 'Joel', 'Manager', 'ete erye y5e 5y5 5y y', 'testimonial-2.jpg'),
(6, 'JINNY KURIAKOSE', 'Full Time', 'dffh gfhgn gfnng', 'testimonials-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userregister`
--

CREATE TABLE `tbl_userregister` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobno` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_userregister`
--

INSERT INTO `tbl_userregister` (`id`, `name`, `email`, `address`, `mobno`, `pass`) VALUES
(1, 'jinumol', 'admin@gmail.com', 's\r\nc', '77986876876', 'njhi'),
(2, 'Reshmi', 'reshmi@gmail.com', 'abc\r\nhji\r\nanm', '9876787656', 'reshmi'),
(3, 'bini', 'bini@gmail.com', 'aa\r\nbb\r\nnn', '679087578', 'bini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_book`
--
ALTER TABLE `tbl_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_userregister`
--
ALTER TABLE `tbl_userregister`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_book`
--
ALTER TABLE `tbl_book`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_chef`
--
ALTER TABLE `tbl_chef`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `g_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_userregister`
--
ALTER TABLE `tbl_userregister`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
