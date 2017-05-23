-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2017 at 07:40 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounts`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` varchar(2) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `latitude` double(16,7) NOT NULL,
  `longitude` double(16,7) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `age`, `gender`, `blood_group`, `email`, `address`, `pincode`, `latitude`, `longitude`, `mobile`, `password`, `hash`, `active`) VALUES
(2, 'Arnab', 'Sadhukhan', '21', 'Male', 'A +ve', 'arnab.raja209@gmail.com', 'P-703/A, Lake Town', '700089', 22.6044691, 88.4028602, '9432668164', '$2y$10$LZ1Om5xUA4SP32owz.S0CegHPn4az7DM3.59Jy/yabWxNzXXA6Koi', 'fec8d47d412bcbeece3d9128ae855a7a', 1),
(6, 'Subham ', 'Chowdhury', '21', 'Male', 'A -ve', 'chowdhurysubham436@gmail.com  ', 'Saltlake', '700091', 22.6079158, 88.4106279, '9876543210', '$2y$10$6moGUGsf2I8m9bLpqkxt/.M/DEP1a9OYYnmtur2d2CNY2fJWNsaqK', '6cdd60ea0045eb7a6ec44c54d29ed402', 1),
(7, 'Susmita', 'Ghosh', '21', 'Female', 'B +ve', 'ghoshsusmita58@gmail.com', 'Saltlake', '700091', 22.5733253, 88.4123445, '9674550110', '$2y$10$mIfQRUAj0Q3.HB6fJINPSODoQwA/x5yj3dL0j7yUC3aAGjHcMv93W', '6512bd43d9caa6e02c990b0a82652dca', 1),
(8, 'Shubham', 'Roy', '21', 'Male', 'B +ve', 'sr2thehells2@gmail.com', 'fbfrq', '700091', 22.5745665, 88.4338590, '9732447057', '$2y$10$VNsO7jv5PdYuZJ/LHmtxg.RjtVL3IVyyMvXFHvaS9LBZisgWU/Y8K', '01161aaa0b6d1345dd8fe4e481144d84', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
