-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2022 at 08:06 AM
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
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`) VALUES
('admin@gmail.com', 'admin@1234'),
('subhash', 'subhash@1234');

-- --------------------------------------------------------

--
-- Table structure for table `passengers`
--

CREATE TABLE `passengers` (
  `p_id` int(30) NOT NULL,
  `p_fname` varchar(30) DEFAULT NULL,
  `p_lname` varchar(30) DEFAULT NULL,
  `p_age` varchar(30) DEFAULT NULL,
  `p_contact` varchar(20) DEFAULT NULL,
  `p_gender` varchar(30) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `t_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passengers`
--

INSERT INTO `passengers` (`p_id`, `p_fname`, `p_lname`, `p_age`, `p_contact`, `p_gender`, `email`, `password`, `t_no`) VALUES
(1, 'Rahul', 'Dravid', '42', '9090909090', 'Male', 'rahul@dravid.com', '123123123', 16205),
(2, 'Rahul', 'Dravid', '29', '1010101010', 'Male', 'qwe@w.cc', '123123123', NULL),
(4, 'qwe', 'qwe', '19', '1010101010', 'Male', '123@123.cc', '123123123', NULL),
(5, 'abc', 'sbc', '19', '9090909090', 'Male', 'abc@g.cc', '123123123', 12951),
(6, 'sumit', 'sharma', '20', '9999999999', 'Male', 'sharma@gmail.com', '123123123', 12951),
(7, 'dhruv', 'mehta', '20', '9191919191', 'Male', 'dhruv@gmail.com', '123123123', 16205),
(8, 'subhash', 'gupta', '19', '9876543210', 'Male', 'subhash@gmail.com', 'subhash@1', 0),
(11, 'ruthvik', 'reddy', '19', '9856473201', 'Male', 'ruthvik@gmail.com', 'ruthvik@123', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `passenger_booking`
--

CREATE TABLE `passenger_booking` (
  `p_fname` varchar(30) NOT NULL,
  `p_phoneno` bigint(10) NOT NULL,
  `p_date` datetime NOT NULL,
  `p_nop` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passenger_booking`
--

INSERT INTO `passenger_booking` (`p_fname`, `p_phoneno`, `p_date`, `p_nop`) VALUES
('subhash', 9685234170, '2022-01-14 05:46:21', 2),
('ram', 9653281047, '2022-01-14 05:46:47', 4);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_fname` varchar(30) NOT NULL,
  `p_phoneno` bigint(10) NOT NULL,
  `p_email` varchar(30) NOT NULL,
  `p_addresss` varchar(50) NOT NULL,
  `state` varchar(30) NOT NULL,
  `p_zip` int(6) NOT NULL,
  `p_cname` varchar(30) NOT NULL,
  `p_ccnum` bigint(16) NOT NULL,
  `p_expyear` int(4) NOT NULL,
  `p_cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_fname`, `p_phoneno`, `p_email`, `p_addresss`, `state`, `p_zip`, `p_cname`, `p_ccnum`, `p_expyear`, `p_cvv`) VALUES
('ram', 9826351470, 'ram@gmail.com', 'ram nagar, Coimbatore', 'TN', 620546, 'CREDIT CARD', 12345678905894, 2027, 759),
('Subhash', 9658324170, 'subhash@gmail.com', 'Bharath Gardens, Trichy', 'TN', 620006, 'DEBIT CARD', 1111222233334444, 2025, 159);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_fname` varchar(10) DEFAULT NULL,
  `s_lname` varchar(10) DEFAULT NULL,
  `s_department` varchar(20) NOT NULL,
  `s_salary` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `station`
--

CREATE TABLE `station` (
  `s_no` int(11) NOT NULL,
  `s_name` varchar(20) DEFAULT NULL,
  `s_no_of_platforms` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `station`
--

INSERT INTO `station` (`s_no`, `s_name`, `s_no_of_platforms`) VALUES
(1, 'borivali', '8'),
(2, 'Baroda', '6'),
(3, 'Surat', '4');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `PNR` decimal(10,0) NOT NULL,
  `t_status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `t_fare` int(11) DEFAULT NULL,
  `p_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`PNR`, `t_status`, `t_fare`, `p_id`) VALUES
('8056124359', 'Confirmed', 650, 5),
('8851599875', 'Waiting', 540, 1);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE `trains` (
  `t_no` decimal(5,0) NOT NULL,
  `t_name` varchar(30) DEFAULT NULL,
  `t_source` varchar(30) DEFAULT NULL,
  `t_destination` varchar(30) DEFAULT NULL,
  `t_type` varchar(30) DEFAULT NULL,
  `t_status` varchar(20) DEFAULT 'On time',
  `no_of_seats` int(11) DEFAULT NULL,
  `t_duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`t_no`, `t_name`, `t_source`, `t_destination`, `t_type`, `t_status`, `no_of_seats`, `t_duration`) VALUES
('4971', 'garibrath', 'Udaipurr', 'Jammu Tawi', 'Express', 'On time', 550, 20),
('12284', 'duronto', 'Mumbai central', 'Ernakulum', 'AC superfast', 'On time', 800, 24),
('12859', 'geetanjali', 'CST', 'Kolkata', 'express', 'On time', 500, 25),
('12951', 'rajdhani', 'Mumbai Central', 'Delhi', 'Superfast', 'On time', 700, 15),
('16205', 'mysoreexp', 'Talguppa', 'Mysore JN', 'Express', 'On time', 475, 21),
('24596', 'vande bharath', 'Delhi', 'Amritsar', 'Special Train', 'On time', 250, 7);

-- --------------------------------------------------------

--
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `Train_Name` varchar(30) NOT NULL,
  `Train_No` int(6) NOT NULL,
  `Source` varchar(30) NOT NULL,
  `Destination` varchar(30) NOT NULL,
  `Departure` time NOT NULL,
  `Arrival` time NOT NULL,
  `Fare` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`Train_Name`, `Train_No`, `Source`, `Destination`, `Departure`, `Arrival`, `Fare`) VALUES
('Howrah SP Express', 12436, 'Kanyakumari', 'Howrah', '10:50:00', '21:30:00', 1500),
('rockfort express', 12558, 'Trichy', 'Chennai', '21:22:00', '04:22:00', 1500),
('Shatabdhi', 12598, 'Delhi', 'Amritsar', '17:30:00', '23:30:00', 1500),
('Rajdhani Express', 12665, 'Delhi', 'Chennai', '01:30:00', '22:30:00', 1500),
('Kongu Express', 12686, 'Hyderabad', 'Coimbatore', '05:25:00', '16:20:00', 1500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `passengers`
--
ALTER TABLE `passengers`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_email`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `station`
--
ALTER TABLE `station`
  ADD PRIMARY KEY (`s_no`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD UNIQUE KEY `PNR` (`PNR`);

--
-- Indexes for table `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`t_no`);

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`Train_No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `passengers`
--
ALTER TABLE `passengers`
  MODIFY `p_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `station`
--
ALTER TABLE `station`
  MODIFY `s_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
