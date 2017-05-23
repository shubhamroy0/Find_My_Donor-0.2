-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2017 at 03:06 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

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
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `hid` int(11) NOT NULL,
  `hospital_name` varchar(200) NOT NULL,
  `hospital_contact_info` varchar(12) NOT NULL,
  `hospital_address` varchar(100) NOT NULL,
  `hospital_latitude` double(16,7) NOT NULL,
  `hospital_longitude` double(16,7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`hid`, `hospital_name`, `hospital_contact_info`, `hospital_address`, `hospital_latitude`, `hospital_longitude`) VALUES
(1, 'Anandalok Hospital', '03323592931', 'D.K.7/3, Salt Lake City, Kolkata, West Bengal 700091', 22.5847517, 88.4230538),
(2, 'Apollo Gleneagles Hospital', '03323202122', '58, Canal Circular Road, Kadapara, Kolkata, West Bengal 700054', 22.5748255, 88.4017034),
(3, 'Columbia Asia Hospital', '03339898969', 'IB 193 Sector III Salt Lake City IB Block, Kolkata, West Bengal 700091', 22.5723289, 88.4127326),
(4, 'ILS Hospitals, Salt Lake', '03340206500', 'IDD-6, DD 18/6, DD Block, Sector 1, Salt Lake City, Kolkata, West Bengal 700064', 22.5891302, 88.4108605),
(5, 'R.G. Kar Medical College & Hospital', '03325557656', '1, Kshudiram Bose Sarani, Bidhan Sarani, Kolkata, West Bengal 700004', 22.6046318, 88.3782378),
(6, 'Central Blood Bank', '03323510619', '205, Vivekananda Rd, Manicktala, Sahitya Parishad, Kolkata, West Bengal 700006', 22.5853659, 88.3751817);

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
  `matched` int(2) NOT NULL,
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
(9, 'Jitu', 'Kumar', '78', 'A -ve', 'svm2948@gmail.com', 22.6050228, 88.4095387, '7898789878', 0, NULL),
(10, 'S', 'D', '89', 'A -ve', 'abhbkasdbaksjn@gmail.csjcn', 22.6050213, 88.4095269, '7898789878', 0, NULL),
(11, 'laohdj', 'hbkasd', '21', 'A -ve', 'kb@jkns.co', 22.6050115, 88.4095260, '7898455512', 0, NULL),
(12, 'Aman', 'Agarwal', '65', 'A -ve', 'ajalan436@gmail.com', 22.6050066, 88.4095278, '8000000000', 0, NULL),
(13, 'Hemlata', 'Pandey', '54', 'A -ve', 'ajalan7-01@yahoo.com', 22.6050550, 88.4095424, '9999999999', 0, NULL),
(14, 'Adhgh', 'hjgjhg', '21', 'A +ve', 'gjhgj@fnf.com', 22.5998806, 88.4314890, '7894561230', 0, NULL),
(17, 'arnab', 'boss', '2', 'A +ve', 'aditya.basak.11@gmail.com', 22.5745354, 88.4336567, '7777777777', 0, NULL),
(18, 'aa', 'bb', '45', 'O +ve', 'ghoshsusmita58@gmail.com', 22.5746680, 88.4340267, '9674550110', 0, NULL),
(19, 'ksdaj', 'kjasdn', '78', 'A -ve', 'ajalan7-03@yahoo.com', 22.5746647, 88.4339644, '8888888888', 0, NULL),
(20, 'djsbd', 'sdnkj', '12', 'A -ve', 'ajalan7-04@yahoo.com', 22.5745820, 88.4339401, '9999999999', 0, NULL),
(22, 'kjdsbj', 'mdn', '78', 'A -ve', 'ajalan7-05@yahoo.com', 22.5746278, 88.4339878, '1111111111', 0, NULL),
(23, 'dsjn', 'sdnsd', '78', 'A -ve', 'ajalan7-06@yahoo.com', 22.5746271, 88.4339779, '1212121212', 0, NULL),
(24, 'vjhn', 'bjbm', '21', 'A -ve', 'ajalan7-06@yahoo.com', 22.5746112, 88.4339569, '7878787878', 0, NULL),
(25, 'mnb', 'zxc', '21', 'A -ve', 'ajalan7-07@yahoo.com', 22.5746680, 88.4336672, '1234567890', 0, NULL);

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
(2, 'Arnab', 'Sadhukhan', '21', 'Male', 'O -ve', 'arnab.raja209@gmail.com', 'P-703/A, Lake Town', '700089', 22.6035918, 88.4035917, '9432668164', '$2y$10$LZ1Om5xUA4SP32owz.S0CegHPn4az7DM3.59Jy/yabWxNzXXA6Koi', 'fec8d47d412bcbeece3d9128ae855a7a', 1),
(6, 'Subham ', 'Chowdhury', '21', 'Male', 'A -ve', 'chowdhurysubham436@gmail.com  ', 'Saltlake', '700091', 22.5981840, 88.4295150, '9876543210', '$2y$10$6moGUGsf2I8m9bLpqkxt/.M/DEP1a9OYYnmtur2d2CNY2fJWNsaqK', '6cdd60ea0045eb7a6ec44c54d29ed402', 1),
(7, 'Susmita', 'Ghosh', '21', 'Female', 'B +ve', 'ghoshsusmita58@gmail.com', 'Saltlake', '700091', 22.5733253, 88.4123445, '9674550110', '$2y$10$mIfQRUAj0Q3.HB6fJINPSODoQwA/x5yj3dL0j7yUC3aAGjHcMv93W', '6512bd43d9caa6e02c990b0a82652dca', 1),
(8, 'Shubham', 'Roy', '21', 'Male', 'B +ve', 'sr2thehells2@gmail.com', 'fbfrq', '700091', 22.5745665, 88.4338590, '9732447057', '$2y$10$VNsO7jv5PdYuZJ/LHmtxg.RjtVL3IVyyMvXFHvaS9LBZisgWU/Y8K', '01161aaa0b6d1345dd8fe4e481144d84', 1),
(10, 'Shubham', 'Roy', '21', 'Male', 'A -ve', 'sr2thehell@gmail.com', 'f', 'f', 22.9726460, 88.3638950, 'f', '$2y$10$2pjrCZS/Ptp.q2s35gKzZeBqOejCItuhJhPIAJY5yzvcbbnJGbQii', 'c16a5320fa475530d9583c34fd356ef5', 1),
(11, 'Batman', 'Ghosh', '21', 'Male', 'A -ve', 'svm2948@gmail.com', 'india', '741562', 22.5050199, 88.4565147, '1212121212', '$2y$10$vCvy8v1/Yr6mrHIjPdpb.enB0xbKs/hIkuxu0yzXQMqh0T/lpvekS', '89f0fd5c927d466d6ec9a21b9ac34ffa', 1),
(12, 'Sairaorg', 'Belial', '22', 'Male', 'A -ve', 'arnbsdkn13@gmail.com', 'Lake Town', '700089', 22.5050199, 88.4565147, '9432668164', '$2y$10$/SAw1TdyxKGm8hqEJcCPmecOt3.BA2/7CsT5dHL7ifbuCacu/6OLq', '6cd67d9b6f0150c77bda2eda01ae484c', 1),
(13, 'Jon ', 'Cena', '99', 'Male', 'A -ve', 'ajalan436@gmail.com', 'White House', '111111', 22.6050468, 88.4095463, '0000000000', '$2y$10$D2PKZoZvhRrKIsjP5GM2qOhNYTy6dAfWD.7yHcbIJsxUI8Uc/meXy', '087408522c31eeb1f982bc0eaf81d35f', 1),
(16, 'Aditya', 'Basak', '22', 'Male', 'B +ve', 'aditya.basak.11@gmail.com', 'AE-127, Rabindra Pally, Kestopur, Kolkata', '700101', 22.5981837, 88.4295447, '8420781028', '$2y$10$wYBTqMMR8u2wYv6BwMAYaOTgouiuoQkvfh/F6fteLWgyreOFzpvAO', '92c8c96e4c37100777c7190b76d28233', 1),
(17, 'Sourabh ', 'Banka', '21', 'Male', 'B -ve', 'sourabhsonu100@gmail.com', 'klsk', '121212', 22.5744656, 88.4336167, '9007885010', '$2y$10$cs9trhtzMWocjOml0Fxcd.GuXeePc1gwM2scLntJ3sIbBVmwW/yzK', '288cc0ff022877bd3df94bc9360b9c5d', 1),
(18, 'Shambhunath', 'Saha', '37', 'Male', 'B +ve', 'shambhuju@gmail.com', 'kolkata', '700091', 22.5745333, 88.4338397, '9874335703', '$2y$10$97BStyQvwh0wkes0UTaRz.uLfXUQ4OXkJ/R3Lf7KlZXQSKcOaoj.C', '98f13708210194c475687be6106a3b84', 1),
(19, 'a', 'b', '45', 'Female', 'O +ve', 'ajalan7-01@yahoo.com', '1858/1, Rajdanga Main Rd, Shantipally, Sector I, East Kolkata Twp, Kolkata, West Bengal 700107', '700107', 22.5746184, 88.4340235, '9674550110', '$2y$10$94T8TP6qIR.cnKve7tVBT.i7GpXFIJYVrOn220W1cf7bXtbsjs7l.', '0f96613235062963ccde717b18f97592', 1),
(20, 'c', 'd', '34', 'Male', 'O +ve', 'ajalan7-02@yahoo.com', 'Ground Floor, Globsyn Crystal, EP Block, Sector V, Salt Lake City, Kolkata, West Bengal 700091', '700091', 22.5746413, 88.4340476, '9732447057', '$2y$10$8..dpdtTcPJHim2Brfb9hu1vzCWO9j5PyyvIVccvMoO9IX531eILq', '2f37d10131f2a483a8dd005b3d14b0d9', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hid`);

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
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `requester`
--
ALTER TABLE `requester`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
