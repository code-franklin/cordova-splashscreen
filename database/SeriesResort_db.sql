-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 04:18 AM
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
-- Database: `orms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `Id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`Id`, `queries`, `replies`) VALUES
(0, 'Hi', 'Hello'),
(0, 'I have a Questions', 'okay, what can I help for you'),
(0, 'I have a Questions', 'okay, what can I help for you'),
(0, '1', 'maari kang pumunta sa navigation at iclick ang Home Button upang makita ang BOOKNOW, then kapag nakita muna iclick lamang ito at ilagay ang iyong information at kung anung date at time ang iyong irereserve... Thankyou'),
(0, '2', 'Yes, maaari mo lamang icontact ang Information ng mayari makikita ito sa Navigation sa Contact Button then pwede mo silang icontact.'),
(0, '2', 'Yes, maaari mo lamang icontact ang Information ng mayari makikita ito sa Navigation sa Contact Button then pwede mo silang icontact.'),
(0, '3', 'AMENITIES:<br>\r\nBig Pool <br>\r\nKiddie Pool <br>\r\nBig Pavillion <br>\r\n4 Air Conditioned Rooms with 6 person per room capacity <br>\r\n3-4 car park capacity <br>\r\nWifi <br>\r\nUnli Videoke <br>\r\nBilliards <br>\r\nGas Stove with LPG <br>\r\nBBQ grill <br>\r\nTables and Chairs <br>\r\nWater Dispense <br>'),
(0, '4', '50 pax'),
(0, '4', '50 pax'),
(0, '5', 'Series 1 Resort Private Pool <br>\r\nLocated at Purok 6 , Bucal South Spring Villas Calamba City , Laguna'),
(0, '6', 'Yes, pero siguraduhin na mayrong kulungan na mini or tali para hindi makasakit sa mga tao.'),
(0, '6', 'Yes, pero siguraduhin na mayrong kulungan na mini or tali para hindi makasakit sa mga tao.'),
(0, '7', 'Maari kang dumerektang magcontact sa amin upang masagot ang iyong mga katanungan ng mabilisan. Ang aming Information ay makikita mo lamang sa Contact Buttons ng Navigation'),
(0, '0', 'Hello there, how can I help you? <br>\r\n<br>\r\nHere are some questions that the FAQ <br>Chatbot of Series 1 Resort can answer.<br>\r\n1. How can I make a reservation at the resort?<br>\r\n2. Can I modify or cancel my reservation?<br>\r\n3. What available Amenities?<br>\r\n4. How many people can the resort acc'),
(0, 'Test', 'Please type 0');

-- --------------------------------------------------------

--
-- Table structure for table `message_list`
--

CREATE TABLE `message_list` (
  `id` int(30) NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `message` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message_list`
--

INSERT INTO `message_list` (`id`, `fullname`, `contact`, `email`, `message`, `status`, `date_created`) VALUES
(5, 'rrl research in hotel management', '09123456789', 'franklinqs30@gmail.com', 'testing sir', 1, '2023-05-03 09:13:52'),
(6, 'chatbot_db', '09123456781', 'franklinqs30@gmail.com', 'testing sir', 0, '2023-05-04 01:41:27'),
(7, 'Daniel Altoveros De Torres', '09123456789', 'danieldetorres30@gmail.com', 'Tuesday 11:16', 0, '2023-05-09 11:16:27'),
(8, 'Juan Dela Cruz', '09123456789', 'danieldetorres30@gmail.com', 'Lorem the Ipsum Test Ly', 1, '2023-06-02 13:24:53'),
(9, 'Lade Millera', '09123456789', 'lademillera@gmail.com', 'Lorem That ipsum lee bing rem tuipsum', 0, '2023-06-06 09:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_list`
--

CREATE TABLE `reservation_list` (
  `id` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `room_id` int(30) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `check_in_time` time NOT NULL,
  `check_out_time` time NOT NULL,
  `fullname` text NOT NULL,
  `contact` text NOT NULL,
  `email` text NOT NULL,
  `address` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=Pending, 1 = Confirmed, 2=Cancelled',
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation_list`
--

INSERT INTO `reservation_list` (`id`, `code`, `room_id`, `check_in`, `check_out`, `check_in_time`, `check_out_time`, `fullname`, `contact`, `email`, `address`, `status`, `date_created`, `date_updated`) VALUES
(11, '202305-0001', 2, '2023-06-03', '2023-06-03', '06:00:00', '18:00:00', 'Daniel Altoveros De Torres', '09167266833', 'danblydetorres30@gmail.com', 'Manila', 0, '2023-05-31 17:33:37', NULL),
(12, '202305-0002', 2, '2023-06-09', '2023-06-10', '06:00:00', '18:00:00', 'chatbot_db', '09123456781', 'franklinqs30@gmail.com', 'testing sir', 2, '2023-05-31 17:38:17', '2023-06-01 23:12:31'),
(14, '202306-0001', 2, '2023-06-30', '2023-06-30', '07:00:00', '20:00:00', 'Daniel Altoveros De Torres', '09167266833', 'danieldetorres30@gmail.com', 'Purok 1, Jalandone St. Pansol Calamba City', 1, '2023-06-01 23:10:27', '2023-06-01 23:12:22'),
(15, '202306-0002', 2, '2023-06-07', '2023-06-07', '06:00:00', '18:00:00', 'Juan Dela Cruz', '09123456789', 'junadelacruz@gmail.com', 'Bucal Calamba City', 1, '2023-06-02 13:27:34', '2023-06-02 13:34:38'),
(16, '202306-0003', 2, '2023-06-22', '2023-06-22', '06:00:00', '18:00:00', 'Lade Millera', '09123456789', 'lademillera@gmail.com', 'Milagrosa Calamba City', 0, '2023-06-06 09:00:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `room_list`
--

CREATE TABLE `room_list` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `type` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT 0,
  `image_path` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `delete_flag` tinyint(1) NOT NULL DEFAULT 0,
  `date_created` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_list`
--

INSERT INTO `room_list` (`id`, `name`, `type`, `description`, `price`, `image_path`, `status`, `delete_flag`, `date_created`, `date_updated`) VALUES
(2, 'Series Resort', 'Double', '&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;Ut tempus urna non consequat tincidunt. Vestibulum imperdiet ultrices malesuada. In consequat luctus nisl imperdiet convallis. Donec auctor tortor id nisl varius suscipit. Aliquam posuere ex risus, a laoreet risus vulputate nec. Ut fringilla nibh lacus, quis sagittis odio bibendum quis. Phasellus odio ipsum, accumsan vehicula diam ac, condimentum aliquam tellus.&lt;/p&gt;&lt;p style=&quot;margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;&quot;&gt;Etiam et massa ligula. Donec lacinia purus ut ex malesuada, at aliquam dolor laoreet. Proin hendrerit vestibulum quam. Praesent metus diam, volutpat sit amet leo nec, placerat facilisis quam. Pellentesque quis mauris ut erat tristique bibendum. Aliquam molestie massa quis libero vestibulum ultrices. Aliquam odio tellus, tincidunt ut arcu eu, efficitur fringilla leo.&lt;/p&gt;', 2500, 'uploads/rooms/2.png?v=1641608206', 1, 0, '2022-01-08 10:16:45', '2023-05-04 01:43:31');

-- --------------------------------------------------------

--
-- Table structure for table `system_info`
--

CREATE TABLE `system_info` (
  `id` int(30) NOT NULL,
  `meta_field` text NOT NULL,
  `meta_value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `system_info`
--

INSERT INTO `system_info` (`id`, `meta_field`, `meta_value`) VALUES
(1, 'name', ''),
(6, 'short_name', 'SERIES 1 RESORT'),
(11, 'logo', 'uploads/logo-1641604371.png'),
(13, 'user_avatar', 'uploads/user_avatar.jpg'),
(14, 'cover', 'uploads/background.png'),
(15, 'content', 'Array'),
(18, 'from_time', '11:00'),
(19, 'to_time', '21:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` text DEFAULT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `avatar` text DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `type` tinyint(1) NOT NULL DEFAULT 0,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=not verified, 1 = verified',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_updated` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `middlename`, `lastname`, `username`, `password`, `avatar`, `last_login`, `type`, `status`, `date_added`, `date_updated`) VALUES
(1, 'Adminstrator', NULL, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500', 'uploads/avatar-1.png?v=1639468007', NULL, 1, 1, '2021-01-20 14:02:37', '2021-12-14 15:47:08'),
(5, 'Mang', NULL, 'Kanor', 'kanor', '65b1004a09628b747e357c4258e0a993', 'uploads/avatar-5.png?v=1641622906', NULL, 2, 1, '2022-01-08 14:21:46', '2023-05-09 11:17:51'),
(8, 'Daniel', NULL, 'De Torres', 'admin30', 'f6fdffe48c908deb0f4c3bd36c032e72', NULL, NULL, 1, 1, '2023-06-02 13:38:32', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message_list`
--
ALTER TABLE `message_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD PRIMARY KEY (`id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indexes for table `room_list`
--
ALTER TABLE `room_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_info`
--
ALTER TABLE `system_info`
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
-- AUTO_INCREMENT for table `message_list`
--
ALTER TABLE `message_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation_list`
--
ALTER TABLE `reservation_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `room_list`
--
ALTER TABLE `room_list`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `system_info`
--
ALTER TABLE `system_info`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD CONSTRAINT `reservation_list_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `room_list` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
