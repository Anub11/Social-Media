-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 03:49 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `com_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `comment_author` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`com_id`, `post_id`, `user_id`, `comment`, `comment_author`, `date`) VALUES
(1, 2, 1, '		 Anubhav vlo!!					', 'anubhav_bej_06122', '2020-11-01 05:44:52'),
(2, 7, 1, '		 	Anubhav Bej is my Name!!!!				', 'anubhav_bej_06122', '2020-11-01 06:17:03'),
(3, 10, 2, 'Anubhav Bej !!\r\n				', 'dababrata_chakraborty_01966', '2020-11-05 14:12:22');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `upload_image` varchar(255) NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_content`, `upload_image`, `post_date`) VALUES
(1, 1, 'No', '99Screenshot_4.png', '2020-11-01 05:17:36'),
(2, 1, 'Anubhav Bej', '', '2020-11-01 05:22:25'),
(4, 1, 'Anubhav', '613.jpg', '2020-11-01 05:23:07'),
(5, 1, 'No', '43dell-na-laptop-original-imaf9hu6z8yczyqv.jpeg', '2020-11-01 05:53:53'),
(6, 1, 'Hay!!', '', '2020-11-01 05:54:18'),
(8, 2, 'debu', '', '2020-11-03 04:57:49'),
(9, 2, 'Debu', '443.jpg', '2020-11-04 05:14:33'),
(10, 2, 'No', '961.jpg', '2020-11-04 05:44:40'),
(11, 2, 'my post', '', '2020-11-09 04:58:46');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `user_name` text NOT NULL,
  `describe_user` varchar(255) NOT NULL,
  `Relationship` text NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_country` text NOT NULL,
  `user_gender` text NOT NULL,
  `user_birthday` text NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_cover` varchar(255) NOT NULL,
  `user_reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` text NOT NULL,
  `posts` text NOT NULL,
  `recovery_account` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `f_name`, `l_name`, `user_name`, `describe_user`, `Relationship`, `user_pass`, `user_email`, `user_country`, `user_gender`, `user_birthday`, `user_image`, `user_cover`, `user_reg_date`, `status`, `posts`, `recovery_account`) VALUES
(1, 'Anubhav', 'Bej', 'anubhav_bej_06122', 'Default Status', '....', '1234567890', 'bej.anubhav@gmail.com', 'India', 'Male', '1987-05-14', 'images/ppic1.jpg', 'cover/cover1.jpg', '2020-11-01 05:17:11', 'verified', 'no', 'Recovery'),
(2, 'Dababrata', 'Chakraborty Rock', 'dababrata_chakraborty_01966', 'I am a super sonic boy!', 'In a Relationship', 'debu1234', 'bebu@gmail.com', 'India', 'Male', '2020-11-05', 'images/ppic3.jpg', 'cover/cover1.jpg', '2020-11-02 04:52:22', 'verified', 'no', 'TUKU');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE `user_messages` (
  `id` int(11) NOT NULL,
  `user_to` int(11) NOT NULL,
  `user_from` int(11) NOT NULL,
  `msg_body` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `msg_seen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_messages`
--

INSERT INTO `user_messages` (`id`, `user_to`, `user_from`, `msg_body`, `date`, `msg_seen`) VALUES
(19, 1, 2, '		aa					', '2020-11-07 05:28:09', 'no'),
(20, 1, 2, 'Hi\r\n', '2020-11-07 06:25:55', 'no'),
(21, 2, 1, 'how r u?\r\n						', '2020-11-07 09:09:50', 'no'),
(22, 1, 2, 'f9 bro					', '2020-11-07 14:28:26', 'no'),
(23, 1, 2, 'f9 bro					', '2020-11-07 14:28:48', 'no'),
(24, 2, 1, 'qq', '2020-11-07 14:35:28', 'no'),
(25, 2, 1, 'qq', '2020-11-07 14:35:34', 'no'),
(26, 2, 1, 'qq', '2020-11-07 14:36:45', 'no'),
(27, 2, 1, 'qq', '2020-11-07 14:36:51', 'no'),
(28, 2, 1, 'qq', '2020-11-07 14:36:59', 'no'),
(29, 1, 2, 'f9 bro					', '2020-11-07 14:37:26', 'no'),
(30, 1, 2, 'f9 bro					', '2020-11-07 14:37:35', 'no'),
(31, 2, 1, 'aa', '2020-11-07 14:44:03', 'no'),
(32, 2, 1, 'aa', '2020-11-07 14:44:06', 'no'),
(33, 2, 1, 'aa', '2020-11-07 14:44:08', 'no'),
(34, 1, 2, 'f9 bro					', '2020-11-07 14:48:08', 'no'),
(35, 1, 2, 'sas\r\n', '2020-11-07 14:48:18', 'no'),
(36, 1, 2, 'sas\r\n', '2020-11-07 14:48:23', 'no'),
(37, 1, 2, 'sas\r\n', '2020-11-07 14:48:30', 'no'),
(38, 2, 1, 'AA', '2020-11-07 15:11:17', 'no'),
(39, 2, 1, 'AA', '2020-11-07 15:11:20', 'no'),
(40, 2, 1, 'AA', '2020-11-07 15:11:24', 'no'),
(41, 1, 2, 'sas\r\n', '2020-11-07 15:12:40', 'no'),
(42, 2, 1, 'AA', '2020-11-07 15:13:00', 'no'),
(43, 1, 2, 'sas\r\n', '2020-11-07 15:14:51', 'no'),
(44, 1, 2, 'sas\r\n', '2020-11-08 03:24:21', 'no'),
(45, 1, 2, 'aa', '2020-11-08 03:25:21', 'no'),
(46, 1, 2, 'aa', '2020-11-08 03:25:29', 'no'),
(47, 1, 2, 'aa', '2020-11-08 03:27:01', 'no'),
(48, 1, 2, 'aa', '2020-11-08 03:27:08', 'no'),
(49, 1, 2, 'aa', '2020-11-08 03:27:15', 'no'),
(50, 2, 1, 'oo', '2020-11-08 03:29:06', 'no'),
(51, 2, 1, 'oo', '2020-11-08 03:29:11', 'no'),
(52, 1, 2, 'aa', '2020-11-08 03:29:20', 'no'),
(53, 2, 1, 'oo', '2020-11-08 03:31:12', 'no'),
(54, 2, 1, 'aa', '2020-11-08 03:31:17', 'no'),
(55, 2, 1, 'aa', '2020-11-08 03:31:24', 'no'),
(56, 1, 2, 'aa', '2020-11-08 03:31:35', 'no'),
(57, 1, 2, 'aa', '2020-11-08 03:33:22', 'no'),
(58, 1, 2, 'aa', '2020-11-08 03:33:27', 'no'),
(59, 1, 2, 'aa', '2020-11-08 03:33:44', 'no'),
(60, 1, 2, '2', '2020-11-08 03:41:10', 'no'),
(61, 2, 1, 'bitch\r\n', '2020-11-09 15:23:14', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`com_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_messages`
--
ALTER TABLE `user_messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `com_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_messages`
--
ALTER TABLE `user_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
