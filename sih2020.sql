-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 22, 2020 at 11:28 AM
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
(4, 'Niti Mangwani', 'nitimangwani@gmail.com', 'Niti@123', '9893000535', 3, 1, 1, '2020-01-22 09:25:25');

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
  `password` varchar(255) NOT NULL,
  `college_id` int(11) NOT NULL,
  `course` varchar(255) NOT NULL,
  `enroll_no` varchar(255) NOT NULL,
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
(15, 'Ravindra', 'Kushwaha', 2018, 2019, 'ravindrakushwahanwg@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, '', 'DE18707', '7047178936', 'single', '0000-00-00', 'on', 'IET Boy,s Hostel', 'STUDENT', 'HEllo', 'HI', 1, '2020-01-22 09:43:24'),
(16, 'Deepam', 'Gupta', 2017, 2019, 'deepam.gupta@outlook.com', '827ccb0eea8a706c4c34a16891f84e7b', 1, '', 'DE17201', '9131879713', 'single', '0000-00-00', 'on', 'IET Boy,s Hostel', 'STUDENT', 'Hi', 'Hello', 1, '2020-01-22 09:47:35'),
(17, 'Sarthak ', 'Joshi', 2015, 2018, 'Sarthakj24@gmail.com', '85064efb60a9601805dcea56ec5402f7', 3, '', 'DE17163', '7441169471', 'single', '0000-00-00', 'on', '208 ujjain', 'ENTREPRENEUR', 'I am Entrepreneur', 'SIH2019 Winner', 1, '2020-01-22 09:56:18'),
(18, 'Pratik ', 'Mehta', 2015, 2018, 'pratikjain17291729@gmail.com', '58b4e38f66bcdb546380845d6af27187', 1, '', 'DE17161', '7722833474', 'Married', '0000-00-00', 'on', 'Geeta Bhawan', 'OTHER', 'I am very Intelligent', 'NOthing', 0, '2020-01-22 10:02:44');

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
(81, 16, 15, 'hi', '0', '2020-01-22 09:50:46'),
(82, 15, 16, 'hello', '0', '2020-01-22 09:50:56'),
(83, 16, 17, 'mouse k paise kab dega\n', '0', '2020-01-22 09:57:28'),
(84, 17, 16, 'hi\n', '0', '2020-01-22 09:57:54'),
(85, 17, 16, 'rv', '0', '2020-01-22 09:58:18');

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
(2, 'INVENTO', 1, 1, 'This is technical fest of IET DAVV', '2020-02-01', '2020-01-18 12:58:48'),
(3, 'SIH2020', 1, 1, 'kjgdkj', '2020-01-01', '2020-01-22 08:40:31');

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
(18, 15, '2020-01-22 10:27:18'),
(19, 16, '2020-01-22 10:28:12'),
(20, 17, '2020-01-22 09:59:30'),
(21, 18, '2020-01-22 10:03:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mob_no` (`mob_no`),
  ADD KEY `college_id` (`college_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mob_no` (`mob_no`),
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `college`
--
ALTER TABLE `college`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
