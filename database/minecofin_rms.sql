-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 05:26 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `minecofin_rms`
--

-- --------------------------------------------------------

--
-- Table structure for table `mr_att`
--

CREATE TABLE `mr_att` (
  `att_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `att_price` int(20) NOT NULL,
  `att_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mr_att`
--

INSERT INTO `mr_att` (`att_id`, `user_id`, `att_price`, `att_created_at`) VALUES
(1, 1, 2300, '2022-12-26'),
(2, 3, 2300, '2022-12-26'),
(3, 3, 2300, '2022-12-26'),
(4, 76, 500, '2022-12-27'),
(5, 2, 5000, '2022-12-27'),
(6, 5, 500, '2022-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `mr_price`
--

CREATE TABLE `mr_price` (
  `price_id` int(11) NOT NULL,
  `price_amount` int(50) NOT NULL,
  `price_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mr_price`
--

INSERT INTO `mr_price` (`price_id`, `price_amount`, `price_created_at`) VALUES
(1, 0, '2022-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `mr_roles`
--

CREATE TABLE `mr_roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL,
  `role_desc` text NOT NULL,
  `role_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mr_roles`
--

INSERT INTO `mr_roles` (`role_id`, `role_name`, `role_desc`, `role_created_at`) VALUES
(1, 'Manager', 'This is the admin of this system.', '2022-12-26'),
(2, 'User', 'Normal user of the system.', '2022-12-26'),
(45, 'Other user', 'This is a test user', '2022-12-27'),
(46, 'Other user', 'This is a test user', '2022-12-27'),
(47, 'Mer', 'This is mer', '2022-12-27'),
(48, 'Random', 'This is a random role', '2022-12-27');

-- --------------------------------------------------------

--
-- Table structure for table `mr_users`
--

CREATE TABLE `mr_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(40) NOT NULL,
  `user_dept` varchar(60) NOT NULL,
  `user_photo` varchar(50) NOT NULL,
  `user_role` int(11) NOT NULL,
  `user_phone` varchar(13) NOT NULL,
  `user_created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mr_users`
--

INSERT INTO `mr_users` (`user_id`, `user_name`, `user_email`, `user_dept`, `user_photo`, `user_role`, `user_phone`, `user_created_at`) VALUES
(1, 'Achille Songa', 'achille@techinika.com', 'ICT', '../assets/images/steven.png', 1, '0780630465', '2022-12-26'),
(2, 'Iranzi Sabin', 'iranzi@techinika.com', 'Finance', 'iranzi.png', 2, '0789767272', '2022-12-26'),
(3, 'Ganza Isheja', 'ganza@techinika.com', 'Technical', 'ganza.png', 1, '07893737372', '2022-12-26'),
(4, 'Ganza Isheja', 'ganza@techinika.com', 'Technical', 'ganza.png', 1, '07893737372', '2022-12-26'),
(5, 'Ganza Isheja', 'ganza@techinika.com', 'Technical', 'ganza.png', 1, '07893737372', '2022-12-26'),
(76, 'admin', 'admin@yt.n', 'ICT', 'image.png', 2, '08999999', '2022-12-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mr_att`
--
ALTER TABLE `mr_att`
  ADD PRIMARY KEY (`att_id`);

--
-- Indexes for table `mr_price`
--
ALTER TABLE `mr_price`
  ADD PRIMARY KEY (`price_id`);

--
-- Indexes for table `mr_roles`
--
ALTER TABLE `mr_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `mr_users`
--
ALTER TABLE `mr_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mr_att`
--
ALTER TABLE `mr_att`
  MODIFY `att_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mr_price`
--
ALTER TABLE `mr_price`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mr_roles`
--
ALTER TABLE `mr_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `mr_users`
--
ALTER TABLE `mr_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
