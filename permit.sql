-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 07:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `permit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `position` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `date_of_birth` date NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `department`, `position`, `gender`, `email`, `contact`, `date_of_birth`, `photo`) VALUES
(1, 'Johan', 'admin', 'Finance', 'Head of Finance', 'Male', 'johan@veron.com', '081171110240', '1990-06-06', 'photo.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(30) NOT NULL,
  `total_employee` int(11) NOT NULL,
  `head_of_department` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `total_employee`, `head_of_department`) VALUES
(1, 'Finance', 2, 'Johan');

-- --------------------------------------------------------

--
-- Table structure for table `request_on_leave`
--

CREATE TABLE `request_on_leave` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `form_id` int(11) NOT NULL,
  `on_leave_from` date NOT NULL,
  `on_leave_to` date NOT NULL,
  `period` int(11) NOT NULL,
  `type_of_leave` varchar(20) NOT NULL,
  `reason_of_leave` varchar(100) NOT NULL,
  `approvement_by` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request_on_leave`
--

INSERT INTO `request_on_leave` (`id`, `name`, `position`, `department`, `form_id`, `on_leave_from`, `on_leave_to`, `period`, `type_of_leave`, `reason_of_leave`, `approvement_by`, `status`) VALUES
(1, 'Eric', 'Accounting', 'Finance', 220417001, '2022-04-18', '2022-04-22', 5, 'Annual Leave', 'Going Holiday With Family', 'Johan', 'Approved'),
(1, 'Eric', 'Accounting', 'Finance', 220417002, '2022-05-04', '2022-05-04', 3, 'Sick Leave', 'Sick', 'Johan', 'Rejected'),
(2, 'Red', 'Accounting', 'Finance', 220417003, '2022-05-04', '2022-05-06', 3, 'Annual Leave', 'Annual Holiday', 'Johan', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `position` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(15) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `head_of_department` varchar(30) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `department`, `position`, `date_of_birth`, `gender`, `contact`, `email`, `head_of_department`, `photo`) VALUES
(1, 'Eric', 'Eric', 'Finance', 'Accounting', '2002-09-24', 'Male', '082172484553', 'eric@veron.com', 'Johan', 'profile.jpg'),
(2, 'Red', 'Red', 'Finance', 'Accounting', '2002-04-05', 'Male', '083371875655', 'red@veron.com', 'Johan', 'profile.png');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(1, 'Eric', '123'),
(2, 'Red', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_on_leave`
--
ALTER TABLE `request_on_leave`
  ADD PRIMARY KEY (`form_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`,`username`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
