-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 05:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

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
  `position` varchar(255) NOT NULL,
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
(1, 'Laura', 'admin', 'Maintenance', 'Head of Maintenance', 'Female', 'laura@gmail.com', '0852344911948', '1994-04-08', 'AMOS - 01.jpg'),
(2, 'Johan', 'admin2', 'Finance', 'Head of Finance', 'Male', 'johan@gmail.com', '081171110240', '1990-06-06', 'avatar.png'),
(3, 'Yanto', 'admin3', 'Production', 'Head of Production', 'Male', 'yanto@gmail.com', '081346139494', '1991-11-19', ''),
(4, 'Budi', 'admin4', 'IT', 'Head of IT', 'Male', 'budi@gmail.com', '08987642119', '1993-08-20', ''),
(5, 'Alex', 'admin5', 'Customer Service', 'Head of Customer Service', 'Male', 'alex@gmail.com', '08125668832', '1998-06-11', ''),
(6, 'Susi', 'admin6', 'Administration', 'Head of Administration', 'Female', 'susi@gmail.com', '08934659493', '1999-12-01', '');

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
(1, 'admin', 'admin'),
(2, 'admin2', 'admin'),
(3, 'admin3', 'admin'),
(4, 'admin4', 'admin'),
(5, 'admin5', 'admin'),
(6, 'admin6', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `id` int(11) NOT NULL,
  `department_name` varchar(255) NOT NULL,
  `total_employee` int(11) NOT NULL,
  `head_of_department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`id`, `department_name`, `total_employee`, `head_of_department`) VALUES
(1, 'Maintenance', 1, 'Laura'),
(2, 'Finance', 3, 'Johan'),
(3, 'Production', 2, 'Yanto'),
(4, 'IT', 2, 'Budi'),
(5, 'Customer Service', 2, 'Alex'),
(6, 'Administration', 2, 'Susi');

-- --------------------------------------------------------

--
-- Table structure for table `request_on_leave`
--

CREATE TABLE `request_on_leave` (
  `id` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
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
(000005, 'Felix', 'Staff', 'Customer Service', 220502001, '2022-05-04', '2022-05-06', 3, 'Sick Leave', 'Fever', 'Alex', 'Approved'),
(000001, 'Eric', 'Accounting', 'Finance', 220502002, '2022-05-09', '2022-05-13', 5, 'Annual Leave', 'Going to Australia with family', 'Johan', 'Approved'),
(000001, 'Eric', 'Accounting', 'Finance', 220502003, '2022-05-27', '2022-05-27', 1, 'Sick Leave', 'Flu', 'Johan', 'Rejected'),
(000003, 'Andrew', 'Manager', 'Production', 220502004, '2022-05-13', '2022-05-13', 1, 'Sick Leave', 'Feeling dizzy', 'Yanto', 'Approved'),
(000003, 'Yanto', 'Head', 'Production', 220502005, '2022-05-13', '2022-05-13', 1, 'Sick Leave', 'Stomach ache', 'Yanto', 'Approved'),
(000001, 'Eric', 'Accounting', 'Finance', 220508006, '2022-05-13', '2022-05-13', 1, 'Annual Leave', 'Personal matter', 'Johan', 'Approved'),
(000002, 'Jocelyn', 'Consultant', 'Finance', 220518007, '2022-05-21', '2022-05-23', 3, 'Unpaid Absence', 'Personal Matter', 'Johan', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date_of_birth` date NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `head_of_department` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `department`, `position`, `gender`, `date_of_birth`, `contact`, `email`, `head_of_department`, `photo`) VALUES
(000001, 'Eric', 'Eric', 'Finance', 'Accounting', 'Male', '2003-03-04', '08123450693', 'eric@gmail.com', 'Johan', 'Twitter Konten.jpeg'),
(000002, 'Jocelyn', 'Jocelyn', 'Finance', 'Consultant', 'Female', '2004-12-17', '0815321946391', 'jocelyn@gmail.com', 'Johan', 'avatar.png'),
(000003, 'Andrew', 'Andrew', 'Production', 'Manager', 'Male', '2002-08-28', '08234949552', 'andrew@gmail.com', 'Yanto', ''),
(000004, 'Valenteeno', 'Valenteeno Bong', 'Administration', 'Administrator', 'Male', '1999-10-31', '08542029390', 'valenteeno@gmail.com', 'Susi', ''),
(000005, 'Felix', 'Felix King Lie', 'Customer Service', 'Staff', 'Male', '2000-07-20', '087654321108', 'felix@gmail.com', 'Alex', ''),
(000006, 'Vincent', 'Vincent Wijaya', 'IT', 'Staff', 'Male', '2001-12-15', '08975321293', 'vincent@gmail.com', 'Budi', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`) VALUES
(000001, 'Eric', '123'),
(000002, 'Jocelyn', '123'),
(000003, 'Andrew', '123'),
(000004, 'Valenteeno', '123'),
(000005, 'Felix', '123'),
(000006, 'Vincent', '123');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
