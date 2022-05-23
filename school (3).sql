-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 10:25 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `classid` int(11) NOT NULL,
  `classname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `parentid` int(11) NOT NULL,
  `parentname` varchar(255) DEFAULT NULL,
  `parentphone` varchar(255) DEFAULT NULL,
  `parentjob` varchar(255) DEFAULT NULL,
  `parentgender` varchar(255) DEFAULT NULL,
  `parentaddress` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `studentid` int(11) NOT NULL,
  `studentname` varchar(255) DEFAULT NULL,
  `studentphone` varchar(255) DEFAULT NULL,
  `studentclass` int(11) DEFAULT NULL,
  `studentide` varchar(255) DEFAULT NULL,
  `studentgender` varchar(255) DEFAULT NULL,
  `studentaddress` varchar(255) DEFAULT NULL,
  `studentemail` varchar(255) DEFAULT NULL,
  `studentbirth` varchar(255) DEFAULT NULL,
  `studentparent` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherid` int(11) NOT NULL,
  `teachername` varchar(255) NOT NULL,
  `teacherphone` varchar(255) NOT NULL,
  `teacherclass` varchar(255) NOT NULL,
  `teacheride` varchar(255) NOT NULL,
  `teachergender` varchar(100) NOT NULL,
  `teachersubject` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherid`, `teachername`, `teacherphone`, `teacherclass`, `teacheride`, `teachergender`, `teachersubject`) VALUES
(4, 'Ferris Curry', '1', '0', '0', 'female', 'Laudantium consequa'),
(5, 'zab', '+1 (614) 595-2185', 'two', 'Incididunt veniam a', 'male', 'Minim necessitatibus'),
(6, 'rias ta7 ela rasso', '+1 (597) 142-6616', 'two', 'Est quis voluptatem ', 'female', 'Architecto qui quis ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `useremail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `matricule` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `useremail`, `password`, `role`, `matricule`) VALUES
(1, 'imrane', 'chaibi1imran@gmail.com', '$2y$10$5MIfrKQuuoaGkzt0fkmdWeJToO/WjLr6FhOKsdUs8RZeVrSVmQyu6', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`studentid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `studentid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
