-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 02, 2019 at 10:04 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OBE`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentresponse`
--

CREATE TABLE `studentresponse` (
  `f_id` int(11) NOT NULL,
  `tform_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `a_1` varchar(10) NOT NULL,
  `a_2` varchar(10) NOT NULL,
  `a_3` varchar(10) NOT NULL,
  `a_4` varchar(10) NOT NULL,
  `a_5` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `teacherform`
--

CREATE TABLE `teacherform` (
  `form_id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `activity_type` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `attendees` varchar(10) NOT NULL,
  `duration` varchar(10) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `section` varchar(2) NOT NULL,
  `q_1` varchar(500) NOT NULL,
  `p_1` varchar(2) NOT NULL,
  `c_1` varchar(2) NOT NULL,
  `q_2` varchar(500) NOT NULL,
  `p_2` varchar(2) NOT NULL,
  `c_2` varchar(2) NOT NULL,
  `q_3` varchar(500) NOT NULL,
  `p_3` varchar(2) NOT NULL,
  `c_3` varchar(2) NOT NULL,
  `q_4` varchar(500) NOT NULL,
  `p_4` varchar(2) NOT NULL,
  `c_4` varchar(2) NOT NULL,
  `q_5` varchar(500) NOT NULL,
  `p_5` varchar(2) NOT NULL,
  `c_5` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `name`, `password`, `designation`) VALUES
('tj', 'Tarun', '1234', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentresponse`
--
ALTER TABLE `studentresponse`
  ADD PRIMARY KEY (`f_id`),
  ADD KEY `user` (`user_id`),
  ADD KEY `teacher_f` (`tform_id`);

--
-- Indexes for table `teacherform`
--
ALTER TABLE `teacherform`
  ADD PRIMARY KEY (`form_id`),
  ADD KEY `username` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentresponse`
--
ALTER TABLE `studentresponse`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teacherform`
--
ALTER TABLE `teacherform`
  MODIFY `form_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `studentresponse`
--
ALTER TABLE `studentresponse`
  ADD CONSTRAINT `teacher_f` FOREIGN KEY (`tform_id`) REFERENCES `teacherform` (`form_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `teacherform`
--
ALTER TABLE `teacherform`
  ADD CONSTRAINT `username` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
