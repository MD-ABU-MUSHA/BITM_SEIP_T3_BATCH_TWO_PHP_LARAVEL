-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2021 at 12:23 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_two`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `image` text NOT NULL,
  `user_type` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `mobile`, `image`, `user_type`) VALUES
(17, 'musha', 'musha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4242', '../assets/img/8.jpg', 0),
(18, 'monu', 'omonu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01789393989', '../assets/img/8.jpg', 0),
(19, 'admin', 'abumusaa787@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '01793822069', '../assets/img/human-2944064__340.jpg', 1),
(20, 'sundor', 'sundor@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '014789393989', '../assets/img/6.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `student_id` int(10) NOT NULL,
  `subject` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `student_id`, `subject`) VALUES
(1, 17, 'bangla'),
(2, 17, 'English'),
(3, 17, 'Math'),
(4, 17, 'Physics'),
(5, 17, 'bangla'),
(6, 17, 'English'),
(7, 17, 'Math'),
(8, 17, 'Physics'),
(9, 17, 'bangla'),
(10, 17, 'English'),
(11, 17, 'Math'),
(12, 17, 'Physics'),
(13, 17, 'bangla'),
(14, 17, 'bangla'),
(15, 17, 'Zoology'),
(16, 0, 'bangla'),
(17, 0, 'English'),
(18, 0, 'Math'),
(19, 0, 'Physics'),
(20, 0, 'Chemistry'),
(21, 0, 'Biology'),
(22, 0, 'Zoology'),
(23, 20, 'bangla'),
(24, 20, 'English'),
(25, 20, 'Math'),
(26, 18, 'Chemistry'),
(27, 18, 'Biology'),
(28, 18, 'Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `email`, `mobile`) VALUES
(1, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '021545121'),
(2, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '546425'),
(3, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '5324242'),
(4, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '0173982'),
(5, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '017932'),
(6, 'hablu', 'hablu@gmail.com', '022615214');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
