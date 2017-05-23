-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 05:09 PM
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
-- Table structure for table `requester`
--

CREATE TABLE `requester` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` varchar(2) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `latitude` double(16,7) NOT NULL,
  `longitude` double(16,7) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `matched` int(2) NOT NULL DEFAULT '0',
  `donor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requester`
--

INSERT INTO `requester` (`id`, `first_name`, `last_name`, `age`, `blood_group`, `email`, `latitude`, `longitude`, `mobile`, `matched`, `donor_id`) VALUES
(1, 'A', 'B', '10', 'B +ve', 'mn@gmail.com', 22.8300000, 88.4500000, '9432666969', 0, NULL),
(2, 'Narendra', 'Modi', '50', 'A -ve', 'mn@gmail.com', 22.5745511, 88.4337189, '9432668164', 0, NULL),
(3, 'Miss', 'Angel', '21', 'A -ve', 'gjv@ghj.com', 22.5745680, 88.4337207, '1212121212', 0, NULL),
(4, 'A', 'S', '21', 'A -ve', 'mn@gmail.com', 22.6050477, 88.4095401, '9432668164', 0, NULL),
(5, 'A', 'S', '21', 'A -ve', 'mn@gmail.com', 22.5515481, 88.4120531, '9432668164', 0, NULL),
(6, 'Dolgobindo', 'Sorkhel', '21', 'A -ve', 'arnbsdkn13@gmail.com', 22.6047878, 88.4032736, '9432668164', 0, NULL),
(7, 'Sumit', 'Ray', '22', 'A -ve', 'arnbsdkn13@gmail.com', 22.6053646, 88.4096689, '9423668164', 0, NULL),
(8, 'Anup', 'Ghosh', '12', 'A -ve', 'arnbsdkn13@gmail.com', 22.6050477, 88.4095401, '1212121212', 0, NULL),
(9, 'Jitu', 'Kumar', '78', 'A -ve', 'svm2948@gmail.com', 22.6050228, 88.4095387, '7898789878', 0, NULL),
(10, 'S', 'D', '89', 'A -ve', 'abhbkasdbaksjn@gmail.csjcn', 22.6050213, 88.4095269, '7898789878', 0, NULL),
(11, 'laohdj', 'hbkasd', '21', 'A -ve', 'kb@jkns.co', 22.6050115, 88.4095260, '7898455512', 0, NULL),
(12, 'Aman', 'Agarwal', '65', 'A -ve', 'ajalan436@gmail.com', 22.6050066, 88.4095278, '8000000000', 0, NULL),
(13, 'Hemlata', 'Pandey', '54', 'A -ve', 'ajalan7-01@yahoo.com', 22.6050550, 88.4095424, '9999999999', 0, NULL);

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
(2, 'Arnab', 'Sadhukhan', '21', 'Male', 'A -ve', 'arnab.raja209@gmail.com', 'P-703/A, Lake Town', '700089', 22.6044691, 88.4028602, '9432668164', '$2y$10$LZ1Om5xUA4SP32owz.S0CegHPn4az7DM3.59Jy/yabWxNzXXA6Koi', 'fec8d47d412bcbeece3d9128ae855a7a', 1),
(6, 'Subham ', 'Chowdhury', '21', 'Male', 'A -ve', 'chowdhurysubham436@gmail.com', 'Saltlake', '700091', 22.5739158, 88.4306279, '9876543210', '$2y$10$6moGUGsf2I8m9bLpqkxt/.M/DEP1a9OYYnmtur2d2CNY2fJWNsaqK', '6cdd60ea0045eb7a6ec44c54d29ed402', 1),
(7, 'Susmita', 'Ghosh', '21', 'Female', 'A -ve', 'ghoshsusmita58@gmail.com', 'Saltlake', '700091', 22.5733253, 88.4123445, '9674550110', '$2y$10$mIfQRUAj0Q3.HB6fJINPSODoQwA/x5yj3dL0j7yUC3aAGjHcMv93W', '6512bd43d9caa6e02c990b0a82652dca', 1),
(8, 'Shubham', 'Roy', '21', 'Male', 'A -ve', 'sr2thehells2@gmail.com', 'fbfrq', '700091', 22.5745665, 88.4338590, '9732447057', '$2y$10$VNsO7jv5PdYuZJ/LHmtxg.RjtVL3IVyyMvXFHvaS9LBZisgWU/Y8K', '01161aaa0b6d1345dd8fe4e481144d84', 1),
(9, 'Arnab', 'Bhaijaan', '21', 'Male', 'A -ve', 'arnbsdkn13@gmail.com', '121212', '121212', 22.5744181, 88.4336806, '121212', '$2y$10$mTkdj7Suqfe3kosZfP81YOSo.uDcPS9i7xnF3E.SJF5oWPx5dGyXa', 'cfee398643cbc3dc5eefc89334cacdc1', 0),
(10, 'SDJW', 'CDS', '21', 'Male', 'A +ve', 'SVM2948@GMAIL.COM', 'SDF', '444444', 22.5744917, 88.4336224, '4444444444', '$2y$10$BuyyVZkPKwmp1MkK3IcF9ejqblseTmTWLcUgPLsYrbqpXtJrvy6YG', 'e2230b853516e7b05d79744fbd4c9c13', 0),
(11, 'aman', 'jalan', '44', 'Male', 'A -ve', 'ajalan436@gmail.com', 'flat 1st floor', '700055', 22.6050299, 88.4095180, '7908487509', '$2y$10$S0PFuJIDsiiBhQmvGlpD1OiMd6GU0EInhz3Q.58Hp7p0sFt1Gxx.u', '093f65e080a295f8076b1c5722a46aa2', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `requester`
--
ALTER TABLE `requester`
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
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
