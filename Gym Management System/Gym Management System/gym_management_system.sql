-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2021 at 03:20 PM
-- Server version: 5.6.50
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_user_id` varchar(255) NOT NULL,
  `attendance_date` varchar(255) NOT NULL,
  `attendance_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_user_id`, `attendance_date`, `attendance_description`) VALUES
(2, '7', '1 March,2016', 'Present'),
(3, '7', '2 March,2016', 'Present'),
(4, '7', '3 March,2016', 'Present'),
(5, '7', '4 March,2016', 'Present'),
(6, '', '23 February,2021', 'asdf'),
(8, '1', '2 February,2021', 'Test');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `city_name`) VALUES
(1, 'Allahabad'),
(2, 'Varanasi');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA');

-- --------------------------------------------------------

--
-- Table structure for table `equipment`
--

CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL,
  `equipment_title` varchar(255) NOT NULL,
  `equipment_quantity` varchar(255) NOT NULL,
  `equipment_missing` varchar(255) NOT NULL,
  `equipment_defective` varchar(255) NOT NULL,
  `equipment_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `equipment`
--

INSERT INTO `equipment` (`equipment_id`, `equipment_title`, `equipment_quantity`, `equipment_missing`, `equipment_defective`, `equipment_description`) VALUES
(2, 'Tredmills', '10', '2', '1', 'Morning Shift - 1'),
(3, 'Upright Bike', '20', '3', '2', 'Morning Shift - 2'),
(4, 'Spine Bike', '15', '2', '1', 'Morning Shift - 3');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `gender_id` int(11) NOT NULL,
  `gender_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`, `gender_name`) VALUES
(1, 'Male'),
(2, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `message_sender_id` varchar(255) NOT NULL,
  `message_receiver_id` varchar(255) NOT NULL,
  `message_type` varchar(255) NOT NULL,
  `message_sender_type` varchar(255) NOT NULL,
  `message_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `message_subject` text NOT NULL,
  `message_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`message_id`, `message_sender_id`, `message_receiver_id`, `message_type`, `message_sender_type`, `message_date`, `message_subject`, `message_content`) VALUES
(1, '6', '6', '2', '2', '2016-05-02 18:50:35', 'Message to Amit', 'sdfasdf'),
(2, '6', '4', '2', '2', '2016-05-03 10:56:18', 'Test Message', 'This is the test message'),
(3, '6', '6', '2', '2', '2016-05-03 10:57:22', 'Class Enquiry', 'asdf'),
(4, '6', '4', '2', '2', '2016-05-03 10:57:48', 'Assignments Update', 'asdf'),
(6, '1', '4', '2', '3', '2016-05-03 11:10:23', 'Class Change Notice', 'Message to Atul Kumar'),
(7, '1', '6', '3', '3', '2016-05-03 11:10:41', 'Event Details', 'Message to Sunil Singh'),
(8, '6', '1', '3', '2', '2016-05-03 12:15:40', 'Update on Assignments', 'This is message line1.\r\nThis is message line2.\r\nThis is message line3.\r\nThis is message line4.'),
(9, '6', '1', '3', '2', '2016-05-03 12:17:15', 'New Announcements', 'This is message line1.\r\nThis is message line2.\r\nThis is message line3.\r\nThis is message line4.'),
(10, '6', '6', '2', '2', '2016-05-04 12:31:56', 'Test Message', 'Test Message'),
(11, '4', '7', '2', '1', '2021-01-31 16:44:21', 'Test 123', 'Test 123 Today'),
(12, '4', '1', '3', '1', '2021-01-31 17:34:48', 'Test', 'This is test'),
(13, '1', '7', '2', '3', '2021-01-31 17:37:31', 'gg', 'ggg');

-- --------------------------------------------------------

--
-- Table structure for table `month`
--

CREATE TABLE `month` (
  `month_id` int(11) NOT NULL,
  `month_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `month`
--

INSERT INTO `month` (`month_id`, `month_name`) VALUES
(1, 'January'),
(2, 'February'),
(3, 'March'),
(4, 'April'),
(5, 'May'),
(6, 'June'),
(7, 'July'),
(8, 'August'),
(9, 'September'),
(10, 'October'),
(11, 'November'),
(12, 'December');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(11) NOT NULL,
  `package_title` varchar(255) NOT NULL,
  `package_fees` varchar(255) NOT NULL,
  `package_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_title`, `package_fees`, `package_description`) VALUES
(2, 'Quaterly Package', '1400', 'Quaterly Package'),
(3, 'Monthly Package', '1000', 'Monthl Package'),
(4, '6 Month Package', '5000', '6 Months Package'),
(5, '9 Month Package ', '7000', '9 Month Package ');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `payment_user_id` varchar(255) NOT NULL,
  `payment_for_month` varchar(255) NOT NULL,
  `payment_date` varchar(255) NOT NULL,
  `payment_amount` varchar(255) NOT NULL,
  `payment_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `payment_user_id`, `payment_for_month`, `payment_date`, `payment_amount`, `payment_description`) VALUES
(2, '1', '4', '17 March,2016', '1000', 'Payment for april'),
(3, '1', '2', '3 March,2016', '1200', 'Payment for fenruary'),
(4, '8', '9', '19 March,2016', '1000', 'Payment for Suman'),
(5, '7', '2', '19 April,2017', '400', 'sdfgdsf'),
(6, '7', '8', '21 January,2021', '232', 'wer');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Manager'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_user_id` varchar(255) NOT NULL,
  `salary_for_month` varchar(255) NOT NULL,
  `salary_date` varchar(255) NOT NULL,
  `salary_amount` varchar(255) NOT NULL,
  `salary_description` varchar(255) NOT NULL,
  `salary_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `salary_user_id`, `salary_for_month`, `salary_date`, `salary_amount`, `salary_description`, `salary_image`) VALUES
(1, '4', '1', '31 January,2021', '100', 'afdasdf', 'Car Parking System.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state_name`) VALUES
(1, 'UP'),
(2, 'MP');

-- --------------------------------------------------------

--
-- Table structure for table `subscriber`
--

CREATE TABLE `subscriber` (
  `subscriber_id` int(11) NOT NULL,
  `subscriber_name` varchar(255) NOT NULL,
  `subscriber_thesis` varchar(255) NOT NULL,
  `subscriber_age` varchar(255) NOT NULL,
  `subscriber_gender` varchar(255) NOT NULL,
  `subscriber_email` varchar(255) NOT NULL,
  `subscriber_password` varchar(255) NOT NULL,
  `subscriber_mobile` varchar(255) NOT NULL,
  `subscriber_package` varchar(255) NOT NULL,
  `subscriber_status` int(11) NOT NULL DEFAULT '1',
  `subscriber_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriber`
--

INSERT INTO `subscriber` (`subscriber_id`, `subscriber_name`, `subscriber_thesis`, `subscriber_age`, `subscriber_gender`, `subscriber_email`, `subscriber_password`, `subscriber_mobile`, `subscriber_package`, `subscriber_status`, `subscriber_image`) VALUES
(1, 'Kaushal Kishore', 'Mumbai', 'Mumbai', '1', 'amit@gmail.com', 'test', '9876765654', '3', 1, 'p6.jpg'),
(3, 'aa', 'aa', 'aa', '2', 'aa@aa.com', 'aa', 'aa', '5', 1, 'Screenshot 2021-01-26 at 2.27.31 AM.png');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_add1` varchar(255) NOT NULL,
  `supplier_add2` varchar(255) NOT NULL,
  `supplier_city` varchar(255) NOT NULL,
  `supplier_state` varchar(255) NOT NULL,
  `supplier_country` varchar(255) NOT NULL,
  `supplier_email` varchar(255) NOT NULL,
  `supplier_mobile` varchar(255) NOT NULL,
  `supplier_equipments` varchar(255) NOT NULL,
  `supplier_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_add1`, `supplier_add2`, `supplier_city`, `supplier_state`, `supplier_country`, `supplier_email`, `supplier_mobile`, `supplier_equipments`, `supplier_image`) VALUES
(1, 'Kaushal Kishore', 'Mumbai', 'Mumbai', '1', '2', '2', 'kaushal@gmail.com', '9876765654', 'Walker', 'p6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(11) NOT NULL,
  `type_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_name`) VALUES
(1, 'Sedan'),
(2, 'Hatchback '),
(3, 'SUV'),
(4, 'MUV');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_level_id` varchar(255) DEFAULT NULL,
  `user_username` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_add1` varchar(255) NOT NULL,
  `user_add2` varchar(255) NOT NULL,
  `user_city` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_mobile` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_dob` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_level_id`, `user_username`, `user_password`, `user_name`, `user_add1`, `user_add2`, `user_city`, `user_state`, `user_country`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_image`) VALUES
(4, '1', 'admin', 'test', 'Kaushal Kishore', 'House no : 768', 'Sector 2B', '1', '1', '2', 'kaushal.rahuljaiswal@gmail.com', '987654321', '', '12 january, 2013', 'p1.jpg'),
(7, '2', 'employee', 'test', 'Amit Kumar', 'House no : 768', 'Sector 2B', '2', '1', '2', 'amit@gmail.com', '9324324546', '', '26 December,2015', 'p2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `equipment`
--
ALTER TABLE `equipment`
  ADD PRIMARY KEY (`equipment_id`);

--
-- Indexes for table `gender`
--
ALTER TABLE `gender`
  ADD PRIMARY KEY (`gender_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`);

--
-- Indexes for table `month`
--
ALTER TABLE `month`
  ADD PRIMARY KEY (`month_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `subscriber`
--
ALTER TABLE `subscriber`
  ADD PRIMARY KEY (`subscriber_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `equipment`
--
ALTER TABLE `equipment`
  MODIFY `equipment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gender`
--
ALTER TABLE `gender`
  MODIFY `gender_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `month`
--
ALTER TABLE `month`
  MODIFY `month_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriber`
--
ALTER TABLE `subscriber`
  MODIFY `subscriber_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
