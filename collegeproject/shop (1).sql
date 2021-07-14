-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2021 at 03:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Clientname` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Pin_code` varchar(10) NOT NULL,
  `Home_Number` varchar(100) NOT NULL,
  `Colony` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `State` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `email`, `Clientname`, `Phone`, `Pin_code`, `Home_Number`, `Colony`, `City`, `State`, `Type`) VALUES
(9, 'Shubhamdhoot111@gmail.com', 'shubham dhoot', '6377988343', '342901', 'e18', 'ashapurna city', 'jodhpur', 'rajasthan', 'office'),
(10, 'Shubhamdhoot333@gmail.com', 'shubham dhoot', '6377988343', '342901', 'e18', 'ashapurna city', 'jodhpur', 'rajasthan', 'home'),
(11, 'Shubhamdhoot999@gmail.com', 'e18', '9829180368', '342901', '199', 'ashapurna', 'jodhpur', 'rajasthan', 'office'),
(12, 'Shubhamdhoot777@gmail.com', 'shubham dhoot', '9829180368', '302039', 'e18', 'Jaipur', 'JAIPUR', 'Rajasthan', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('shubhamdhoot333@gmail.com', '03032000');

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(25) NOT NULL,
  `title` varchar(100) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `card`
--

INSERT INTO `card` (`id`, `name`, `email`, `product_id`, `cost`, `title`, `data`, `photo1`, `photo2`) VALUES
(7, 'chocolate cake', 'Shubhamdhoot777@gmail.com', '4  ', '300', 'Birthday cake', 'this is very testy cast for birthday', '../image/c3.jpg', '../image/c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_no` int(255) NOT NULL,
  `product_id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date1` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `cost` varchar(100) NOT NULL,
  `stage` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_no`, `product_id`, `name`, `date1`, `address`, `quantity`, `cost`, `stage`, `email`, `phone`, `photo1`, `uname`) VALUES
(30, '4     ', 'chocolate cake', '2021-03-30', 'e18  ,ashapurna city  ,jodhpur  ,rajasthan  ,', '1  ', '300', '', 'Shubhamdhoot333@gmail.com', '6377988343', '../image/c3.jpg', 'shubham dhoot'),
(31, '4     ', 'chocolate cake', '2021-04-09', 'e18  ,Jaipur  ,JAIPUR  ,Rajasthan  ,', '1  ', '300', '', 'Shubhamdhoot777@gmail.com', '9829180368', '../image/c3.jpg', 'shubham dhoot');

-- --------------------------------------------------------

--
-- Table structure for table `problem`
--

CREATE TABLE `problem` (
  `id` int(255) NOT NULL,
  `data` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `stage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `problem`
--

INSERT INTO `problem` (`id`, `data`, `email`, `stage`) VALUES
(1, 'hii this is my problem ', 'Shubhamdhoot333@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `name` varchar(40) NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `data` varchar(255) NOT NULL,
  `photo1` varchar(255) NOT NULL,
  `photo2` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `name`, `product_id`, `cost`, `data`, `photo1`, `photo2`) VALUES
(3, 'cake', 'cake', '3', '200', 'hiii', '../image/a9.jpg', '../image/a7.jpg'),
(4, 'Birthday cake', 'chocolate cake', '4', '300', 'this is very testy cast for birthday', '../image/c3.jpg', '../image/c8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `story` varchar(255) NOT NULL,
  `stage` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `email`, `story`, `stage`) VALUES
(1, 'Shubhamdhoot333@gmail.com', 'hiii your product is awsem', 'good'),
(2, 'Shubhamdhoot999@gmail.com', 'hii thi is nice product', ' '),
(3, 'Shubhamdhoot111@gmail.com', 'hii your product this nice ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `Phone`, `email`, `pass`) VALUES
(1, 'shubham', '9829180368', 'Shubhamdhoot333@gmail.com', '03032000'),
(7, 'shubham dhoot', '6377988343', 'Shubhamdhoot777@gmail.com', '03032000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_no`);

--
-- Indexes for table `problem`
--
ALTER TABLE `problem`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `problem`
--
ALTER TABLE `problem`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
