-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2017 at 04:46 PM
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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`hid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
