-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2020 at 10:53 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `decision_icard_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` int(5) NOT NULL,
  `profile` text NOT NULL,
  `first_name` text NOT NULL,
  `midle_name` text NOT NULL,
  `last_name` text NOT NULL,
  `member_since` date NOT NULL,
  `expire_date` date NOT NULL,
  `dob` date NOT NULL,
  `email` text NOT NULL,
  `blood_group` text NOT NULL,
  `account_no` text NOT NULL,
  `designation` text NOT NULL,
  `address` text NOT NULL,
  `u_id` int(20) NOT NULL,
  `contact_no` varchar(12) NOT NULL,
  `Adhar_card_no` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `profile`, `first_name`, `midle_name`, `last_name`, `member_since`, `expire_date`, `dob`, `email`, `blood_group`, `account_no`, `designation`, `address`, `u_id`, `contact_no`, `Adhar_card_no`) VALUES
(25, '5eb5115c2db50.jpg', 'Tarun', 'Anil', 'Patel', '2020-05-08', '2020-09-25', '1995-11-20', 'tarun@gmail.com', 'A+', '0000000111110001', 'Video Editor', 'AtPost-Kharvel(Nishal Faliya)\r\nTa-Dharampur Di-Valsad', 8593, '7874509921', '0'),
(26, '5eb64cf93a806.jpg', 'Urvesh', 'A', 'Patel', '2009-05-20', '2020-05-28', '2020-05-28', 'urvesh@gmail.com', 'A+', '10001000100', 'Reporter', 'fsffsdfsfsdfdssd\r\nfdsfsffsdfsfsfdsf', 9945, '7874509921', '0'),
(27, '5eb650c2bc104.jpg', 'Tarun', 'Anil', 'Patel', '2020-05-09', '2020-11-30', '1995-11-20', 'tarunpatel2982@gmail.com', 'A+', '01010101010101010101010', 'Reporter', 'AtPost-Kharvel(Nishal Faliya)\r\nta-Dharmpur Di-Valsad\r\n', 8126, '7874509921', '0'),
(28, '5eb6515306127.jpg', 'Nikunj', 'A', 'Patel', '2020-05-12', '2020-05-15', '2020-05-13', 'tarunpatel2982@gmail.com', 'A+', '01010101010101010101010', 'Bureau Chief', 'frffsdfsdfsdffsdfsdfdfdsfssfds\r\nsdsdfsdfsdfdsfsdfsdsddsfsfs', 9481, '7874509921', '0'),
(29, '5eb66edf1c180.jpg', 'Avinash', 'Arvind ', 'Patel', '2020-05-07', '2020-05-29', '2020-05-07', 'tarunpatel2982@gmail.com', 'A+', '01010101010101010101010', 'Bureau Chief', 'wsssddffdzfsdfsdfsdf\r\nfdsdfsdfsfsfdfssdfsf', 3201, '7874509921', '2147483647'),
(30, '5eb66f4baed26.jpg', 'Urvesh', 'Arvind ', 'Patel', '2020-05-20', '2020-05-28', '2020-05-28', 'urvesh@gmail.com', 'A+', '01010101010101010101010', 'Chief Reporter', 'dssdsdsdsadasddas\r\nasadadasdasaadada', 8354, '7874509921', '055520044220');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `u_name` varchar(15) NOT NULL,
  `pass` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `u_name`, `pass`) VALUES
(3, 'tarun', '12'),
(4, 'avi', '12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `emp_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
