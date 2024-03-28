-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2023 at 01:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fms`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `f_id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `amount` varchar(222) DEFAULT NULL,
  `u_id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `due_date` date DEFAULT NULL,
  `due_amount` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`f_id`, `name`, `amount`, `u_id`, `date`, `due_date`, `due_amount`) VALUES
(1, 'testing', '2000', 1, '2023-01-24 09:12:10', '2023-02-18', '200');

-- --------------------------------------------------------

--
-- Table structure for table `paid`
--

CREATE TABLE `paid` (
  `p_id` int(11) NOT NULL,
  `f_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `u_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `paid`
--

INSERT INTO `paid` (`p_id`, `f_id`, `st_id`, `amount`, `date`, `u_id`) VALUES
(1, 1, 1, 2000, '0000-00-00', NULL),
(2, 1, 1, 23232, '2023-01-28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `phone_no` varchar(222) DEFAULT NULL,
  `password` varchar(222) DEFAULT NULL,
  `email` varchar(222) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `img` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `phone_no`, `password`, `email`, `created`, `img`) VALUES
(2, 'test', '213213213', '4ec32c927c7f6fe7c979e53ee4e9962f', 'prince@gmail.com', '2023-01-22 13:44:38', 'assests/img/20230122234027.png'),
(6, 'prince', '123', '202cb962ac59075b964b07152d234b70', 'admin@gmail.com', '2023-01-25 17:53:17', 'assests/img/20230125135317.png');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `name` varchar(222) DEFAULT NULL,
  `fname` varchar(222) DEFAULT NULL,
  `phone_no` varchar(222) DEFAULT NULL,
  `pasword` varchar(222) DEFAULT NULL,
  `dob` datetime DEFAULT NULL,
  `img` varchar(222) DEFAULT NULL,
  `enroll_date` datetime DEFAULT current_timestamp(),
  `age` varchar(222) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `name`, `fname`, `phone_no`, `pasword`, `dob`, `img`, `enroll_date`, `age`) VALUES
(1, 'Admin', '123', '123456', '202cb962ac59075b964b07152d234b70', '2023-01-25 00:00:00', '../assests/img/20230125132824.png', '2023-01-25 17:28:24', '21'),
(2, 'prince', '2', '123', '202cb962ac59075b964b07152d234b70', '2023-01-18 00:00:00', 'assests/img/20230125195704.png', '2023-01-25 10:57:04', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `paid`
--
ALTER TABLE `paid`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paid`
--
ALTER TABLE `paid`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
