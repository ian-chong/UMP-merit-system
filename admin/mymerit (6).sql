-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2020 at 09:17 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mymerit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `updation_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `reg_date`, `updation_date`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', '2016-04-04 20:31:45', '2020-07-28');

-- --------------------------------------------------------

--
-- Table structure for table `comm_detail`
--

CREATE TABLE `comm_detail` (
  `id` int(5) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `comm_no` int(4) NOT NULL,
  `std_id` varchar(10) NOT NULL,
  `std_name` varchar(20) NOT NULL,
  `std_phone` varchar(15) NOT NULL,
  `std_position` varchar(20) NOT NULL,
  `comm_merit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comm_detail`
--

INSERT INTO `comm_detail` (`id`, `pro_id`, `comm_no`, `std_id`, `std_name`, `std_phone`, `std_position`, `comm_merit`) VALUES
(9, 8, 2, 'cy777777', 'fefe', '0123456789', 'main_committee', 300),
(10, 7, 2, 'ca18101', 'hoh hong quan', '0123456789', 'sub_committee', 200),
(11, 7, 2, 'cy777777', 'fefe', '0123456789', 'program_chair', 500),
(12, 8, 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_cochair', 450);

-- --------------------------------------------------------

--
-- Table structure for table `program_coordinator`
--

CREATE TABLE `program_coordinator` (
  `proCoor_id` int(5) NOT NULL,
  `proUser_name` varchar(15) NOT NULL,
  `proCoor_name` varchar(20) NOT NULL,
  `proCoor_email` varchar(50) NOT NULL,
  `proCoor_phone` varchar(15) NOT NULL,
  `proCoor_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `report_parmerit`
--

CREATE TABLE `report_parmerit` (
  `pro_id` int(6) NOT NULL,
  `program_name` varchar(100) DEFAULT NULL,
  `program_Association` varchar(50) DEFAULT NULL,
  `progarm_supervisor` varchar(50) DEFAULT NULL,
  `program_participle` int(5) DEFAULT NULL,
  `program_applicant` varchar(20) DEFAULT NULL,
  `proAppli_phone` varchar(15) DEFAULT NULL,
  `program_location` varchar(20) DEFAULT NULL,
  `programS_date` date DEFAULT NULL,
  `programE_date` date DEFAULT NULL,
  `programS_time` varchar(5) DEFAULT NULL,
  `programE_time` varchar(5) DEFAULT NULL,
  `participle_merit` int(4) DEFAULT NULL,
  `program_proof` varchar(1000) NOT NULL,
  `program_status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report_parmerit`
--

INSERT INTO `report_parmerit` (`pro_id`, `program_name`, `program_Association`, `progarm_supervisor`, `program_participle`, `program_applicant`, `proAppli_phone`, `program_location`, `programS_date`, `programE_date`, `programS_time`, `programE_time`, `participle_merit`, `program_proof`, `program_status`) VALUES
(7, 'Crazy Run', 'Japanese Club', 'yy', 6, 'gg', '0123456789', 'hh', '2020-07-30', '2020-07-30', '0700', '1800', 100, 'layout.pptx', 'In Pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comm_detail`
--
ALTER TABLE `comm_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  ADD PRIMARY KEY (`proCoor_id`);

--
-- Indexes for table `report_parmerit`
--
ALTER TABLE `report_parmerit`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comm_detail`
--
ALTER TABLE `comm_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  MODIFY `proCoor_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `report_parmerit`
--
ALTER TABLE `report_parmerit`
  MODIFY `pro_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
