-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2020 at 12:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngo`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mobile`, `email`, `message`) VALUES
(1, '', '', '', ''),
(2, 'patu', '7895487899', 'patu@gmail.com', 'hello'),
(3, 'sam', '7894546125', 'sam@gmail.com', 'welcome'),
(4, 'samiksha', '8795478512', 'qqqq@gmail.com', 'ok'),
(5, 'samiksha', '8795478512', 'qqqq@gmail.com', 'ok'),
(6, 'vaishnavi', '9988774455', 'aa@gmail.com', 'no comment'),
(8, 'Pratiksha', '9874563215', 'pratikshasutar1029@gmail.com', 'hjhj'),
(9, 'zzzzz', '7569871256', 'pratikshasutar1029@gmail.com', 'hjjhj'),
(10, 'vaishnavi', '7894568962', 'www@gmail.com', 'nice'),
(11, 'Aayush Pandey', '8452918276', 'pandeyaayush81@gmail.com', 'nnknkn'),
(12, '', '', '', ''),
(13, '', '', '', ''),
(14, '', '', '', ''),
(15, '', '', '', ''),
(16, '', '', '', ''),
(17, '', '', '', ''),
(18, '', '', '', ''),
(19, '', '', '', ''),
(20, '', '', '', ''),
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, '', '', '', ''),
(25, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE `donate` (
  `id` int(11) NOT NULL,
  `first_name` char(100) NOT NULL,
  `last_name` char(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `pincode` int(100) NOT NULL,
  `adhaar` int(100) NOT NULL,
  `pan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donate`
--

INSERT INTO `donate` (`id`, `first_name`, `last_name`, `email`, `gender`, `phone`, `address`, `country`, `state`, `pincode`, `adhaar`, `pan`) VALUES
(1, '', '', '', 'other', '', '', '', '', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `contact`, `email`, `name`) VALUES
(1, ' ', 'pandeyaayush81@gmail.com', 'Aayush Pandey');

-- --------------------------------------------------------

--
-- Table structure for table `sponsor`
--

CREATE TABLE `sponsor` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `name` char(100) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `occupation` char(255) NOT NULL,
  `kids` int(100) NOT NULL,
  `duration` int(100) NOT NULL,
  `adhaar` varchar(100) NOT NULL,
  `pan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sponsor`
--

INSERT INTO `sponsor` (`id`, `email`, `name`, `gender`, `contact`, `location`, `occupation`, `kids`, `duration`, `adhaar`, `pan`) VALUES
(1, 'pandeyaayush81@gmail.com', 'Aayush Pandey', 'female', '8452918276', 'Aayush Pandey', 'serviceman', 9, 1, '123456', '467897'),
(2, '', '', 'other', '', '', '', 6, 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sreg`
--

CREATE TABLE `sreg` (
  `id` int(11) NOT NULL,
  `name` char(255) NOT NULL,
  `pname` char(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(255) NOT NULL,
  `insti` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `adhaar` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sreg`
--

INSERT INTO `sreg` (`id`, `name`, `pname`, `email`, `gender`, `phone`, `insti`, `doc`, `adhaar`, `school`, `photo`) VALUES
(1, 'Aayush Pandey', 'devesh', 'pandeyaayush81@gmail.com', 'male', '8452918276', 'Aayush Pandey', 'demo.png', '123456', 'dp.jpg', 'dp2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `id` int(11) NOT NULL,
  `first_name` char(100) NOT NULL,
  `last_name` char(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country` char(100) NOT NULL,
  `state` char(100) NOT NULL,
  `pincode` int(100) NOT NULL,
  `adhaar` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`id`, `first_name`, `last_name`, `email`, `gender`, `phone`, `address`, `country`, `state`, `pincode`, `adhaar`) VALUES
(1, 'Aayush', 'Pandey', 'pandeyaayush81@gmail.com', 'female', '8452918276', '502 guru pushp building sai nagar road, old panvel', 'India', 'Maharashtra', 410206, 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donate`
--
ALTER TABLE `donate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sponsor`
--
ALTER TABLE `sponsor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sreg`
--
ALTER TABLE `sreg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `donate`
--
ALTER TABLE `donate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sponsor`
--
ALTER TABLE `sponsor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sreg`
--
ALTER TABLE `sreg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
