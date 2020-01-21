-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2020 at 06:50 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih2020`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email_id` varchar(225) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `mob_no` varchar(12) DEFAULT NULL,
  `college_id` int(11) DEFAULT NULL COMMENT 'ID of college from which the admin belongs',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=> Inactive 1=> active',
  `privilege` int(11) DEFAULT NULL COMMENT 'Type of Admin linked to admin_type table',
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email_id`, `password`, `mob_no`, `college_id`, `status`, `privilege`, `last_activity`) VALUES
(1, 'Sumit Kr Singh', 'singh.sumit684@gmail.com', 'Sumit@123', '9929321677', 1, 1, 1, '2020-01-16 21:09:34'),
(2, 'Pratik Mehta', 'pratikjain17291729@gmail.com', 'Pratik@123', '7722833474', 1, 1, 1, '2020-01-16 21:58:36'),
(3, 'Ravindra Kumar Kushwaha', 'ravindrakushwahanwg@gmail.com', 'Ravindra@123', '7047178936', 1, 1, 1, '2020-01-16 22:00:32'),
(4, 'Niti Mangwani', 'nitimangwani@gmail.com', 'Niti@123', '7047178936', 3, 1, 1, '2020-01-16 22:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `id` int(11) NOT NULL,
  `fname` varchar(225) NOT NULL,
  `lname` varchar(225) NOT NULL,
  `year_adm` int(11) NOT NULL,
  `year_leaving` int(11) NOT NULL,
  `email_id` text NOT NULL,
  `password` varchar(50) NOT NULL,
  `college_id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `enroll_no` int(11) NOT NULL,
  `mob_no` varchar(12) NOT NULL,
  `marital_stat` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `occupation` text NOT NULL,
  `brief_profile` text NOT NULL,
  `achievements` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`id`, `fname`, `lname`, `year_adm`, `year_leaving`, `email_id`, `password`, `college_id`, `course`, `enroll_no`, `mob_no`, `marital_stat`, `dob`, `gender`, `address`, `occupation`, `brief_profile`, `achievements`, `status`, `created`) VALUES
(1, 'Sumit Kr Singh', '', 0, 0, 'singh.sumit684@gmail.com', '12345678', 1, 'BE', 0, '9929321677', '', '1999-05-27', 'Male', 'Vill & Post - Dharhara, Munger, Bihar\r\nPincode - 811212', 'Software Engg.', ' ABC Technologies mein kaam karta hun', '0', 1, '2020-01-21 17:04:24'),
(2, 'Sumit', 'Singh', 2018, 2019, 'singh.sumit684@gmail.com', '1234567', 1, 'ME', 0, '9929321677', 'single', '0000-00-00', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 0, '2020-01-21 17:04:29'),
(3, 'pratik', 'Singh', 2018, 2019, 'pratik.sumit684@gmail.com', '123456', 1, 'MTech', 8, '9929321677', 'single', '0000-00-00', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 1, '2020-01-21 16:59:48'),
(4, 'Deepam Gupta', '', 0, 0, 'deepam@gmail.com', '12345', 1, 'BE', 0, '9131879713', '', '1999-05-12', 'Male', 'Vill & Post - Dharhara, Munger, Bihar\r\nPincode - 811212', 'Software Engg.', ' ABC Technologies mein kaam karta hun', '0', 0, '2020-01-21 17:05:08'),
(5, 'Niti', 'Mangloo', 2018, 2019, 'niti.mangloo@gmail.com', '1234', 1, 'BCom', 0, '9929321677', 'single', '0000-00-00', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 1, '2020-01-21 17:05:15'),
(6, 'Ravinda', 'Singh', 2018, 2019, 'pratik.sumit684@gmail.com', '123', 1, 'ME', 8, '9929321677', 'single', '0000-00-00', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 0, '2020-01-21 17:05:21'),
(7, 'Kamen Shripal', '', 0, 0, 'kamen@xqq.com', '12', 1, 'MTech', 0, '74585695523', '', '1999-05-27', 'Female', 'Amravalli , Delhi', 'Carpenter', ' ABC Technologies ', '0', 0, '2020-01-21 17:05:27'),
(8, 'Arpit', 'Kumar', 2018, 2020, 'arpit.arpit@gmail.com', '1111', 1, 'BE', 0, '9929321677', 'married', '1975-02-05', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 1, '2020-01-21 17:05:35'),
(9, 'Kartik', 'Arya', 1999, 2002, 'kartik@yahoo.com', '2222', 1, 'BCom', 8, '9929321677', 'single', '1977-05-25', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 0, '2020-01-21 17:05:41'),
(10, 'Gopu ', 'Bhaiya', 0, 0, 'gopu@gmail.com', '3333', 1, 'MBA', 0, '465465465', '', '1999-05-12', 'Male', 'Mandu', 'Mithaiwaala', 'KB', '0', 0, '2020-01-21 17:05:48'),
(11, 'Ravindra', 'Kumar', 1948, 1952, 'manav@gmail.com', '4444', 1, 'MBBS', 0, '7047178936', 'single', '1945-06-02', 'on', 'addfasdf', 'BUSINESS', 'asdfads', 'asdfsadf', 1, '2020-01-21 17:05:54'),
(12, 'Kantabai', 'Chawla', 2010, 2015, 'kanta@gmail.com', '5555', 1, 'BE', 8, '9929321677', 'married', '1976-09-08', 'on', 'addfasdf', 'CEO', 'asdfads', 'asdfsadf', 0, '2020-01-21 17:06:02');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE `chat_messages` (
  `id` int(11) NOT NULL,
  `to_user_id` int(11) NOT NULL,
  `from_user_id` int(11) NOT NULL,
  `chat_message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `to_user_id`, `from_user_id`, `chat_message`, `status`, `timestamp`) VALUES
(74, 8, 2, 'hi', '1', '2020-01-21 17:16:46'),
(75, 1, 2, 'hello', '1', '2020-01-21 17:26:06');

-- --------------------------------------------------------

--
-- Table structure for table `college`
--

CREATE TABLE `college` (
  `id` int(11) NOT NULL,
  `college_name` varchar(225) NOT NULL,
  `address` text DEFAULT NULL,
  `type` tinyint(4) NOT NULL COMMENT 'Govt. = 1, Govt. Aided = 2, Private = 3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `college`
--

INSERT INTO `college` (`id`, `college_name`, `address`, `type`) VALUES
(1, 'IET-DAVV', 'Khandwa, Road Indore M.P', 1),
(2, 'SGSITS', 'Indore', 1),
(3, 'BITS GOA', 'GOA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` text NOT NULL,
  `college_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `event_desc` text NOT NULL,
  `event_date` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `college_id`, `admin_id`, `event_desc`, `event_date`, `created`) VALUES
(1, 'AAKSHANK', 1, 1, 'AAKASHANK is biggest central india cultural fest', '2020-03-01', '2020-01-18 12:57:31'),
(2, 'INVENTO', 1, 1, 'This is technical fest of IET DAVV', '2020-02-01', '2020-01-18 12:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE `login_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `last_activity` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `user_id`, `last_activity`) VALUES
(4, 11, '2020-01-21 17:50:09'),
(5, 1, '2020-01-21 17:03:13'),
(6, 3, '2020-01-21 17:04:43'),
(7, 4, '2020-01-21 17:07:28'),
(8, 5, '2020-01-21 17:08:01'),
(9, 6, '2020-01-21 17:08:22'),
(10, 7, '2020-01-21 17:08:55'),
(11, 8, '2020-01-21 17:09:24'),
(12, 9, '2020-01-21 17:09:50'),
(13, 10, '2020-01-21 17:10:30'),
(14, 12, '2020-01-21 17:11:36'),
(15, 2, '2020-01-21 17:49:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chat_messages_ibfk_1` (`to_user_id`),
  ADD KEY `from_user_id` (`from_user_id`);

--
-- Indexes for table `college`
--
ALTER TABLE `college`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `alumni`
--
ALTER TABLE `alumni`
  ADD CONSTRAINT `alumni_ibfk_1` FOREIGN KEY (`college_id`) REFERENCES `college` (`id`);

--
-- Constraints for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD CONSTRAINT `chat_messages_ibfk_1` FOREIGN KEY (`from_user_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chat_messages_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `alumni` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
