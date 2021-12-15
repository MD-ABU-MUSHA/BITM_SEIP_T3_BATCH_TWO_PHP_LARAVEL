-- phpMyAdmin SQL Dump
<<<<<<< HEAD
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 08:11 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13
=======
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 10:24 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_285497`
--

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `student_id` varchar(256) NOT NULL,
  `subject` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `student_id`, `subject`) VALUES
<<<<<<< HEAD
(1, '2', 'Bangla'),
(2, '1', 'Bangla'),
(3, '', 'English'),
(4, '1', 'English'),
(5, '2', 'English'),
(6, '4', 'English');
=======
(1, '2', 'Bangla');
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `mobile` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_type` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `password`, `user_type`) VALUES
<<<<<<< HEAD
(1, 'MD. ABU MUSHA', 'admin@admin.com', '01793822069', '202cb962ac59075b964b07152d234b70', 2),
(2, 'musha', 'musa@gmail.com', '01793822069', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Habibur Rahman', 'habib2498922@gmail.com', '01711805110', '202cb962ac59075b964b07152d234b70', 3),
(4, 'nazmul', 'nazmul@gmail.com', '0178939893', '202cb962ac59075b964b07152d234b70', 2),
(5, 'MD. ABU MUSHA', 'abumusaa787@gmail.com', '01793822069', '202cb962ac59075b964b07152d234b70', 1);
=======
(1, 'MD. ABU MUSHA', 'admin@admin.com', '01793822069', '202cb962ac59075b964b07152d234b70', 1),
(2, 'musha', 'musa@gmail.com', '01793822069', '202cb962ac59075b964b07152d234b70', 2),
(3, 'Habibur Rahman', 'habib2498922@gmail.com', '01711805110', '202cb962ac59075b964b07152d234b70', 3),
(4, 'nazmul', 'nazmul@gmail.com', '0178939893', '202cb962ac59075b964b07152d234b70', 2);
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da

--
-- Indexes for dumped tables
--

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
=======
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
>>>>>>> 08c7d7c576bbda7a11b59da7902664eaf01bc4da
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
