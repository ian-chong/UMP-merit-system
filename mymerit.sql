-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2020 at 02:23 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

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
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `C_gender` varchar(20) NOT NULL,
  `C_PhoneNum` varchar(11) NOT NULL,
  `C_Name` varchar(50) NOT NULL,
  `pro_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `date`, `C_gender`, `C_PhoneNum`, `C_Name`, `pro_id`) VALUES
(11, '2020-08-09', 'Male', '0123506959', 'Vijay', 0),
(12, '2020-08-09', 'Male', '0123506959', 'Vijayan', 0),
(13, '2020-08-08', 'Male', '0112234567', 'Visan', 0),
(14, '2020-08-08', 'Male', '0112234567', 'Visanen', 0),
(15, '2020-08-09', 'Female', '0112234567', 'Visanen', 0),
(16, '2020-08-09', 'Male', '0112234562', 'Ajith', 0),
(17, '2020-08-09', 'Male', '0123456852', 'Vinasen', 10),
(18, '2020-08-09', 'Male', '0123456852', 'Vinasen', 11);

-- --------------------------------------------------------

--
-- Table structure for table `comm_detail`
--

CREATE TABLE `comm_detail` (
  `id` int(5) NOT NULL,
  `pro_id` int(5) NOT NULL,
  `program_name` varchar(100) NOT NULL,
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

INSERT INTO `comm_detail` (`id`, `pro_id`, `program_name`, `comm_no`, `std_id`, `std_name`, `std_phone`, `std_position`, `comm_merit`) VALUES
(11, 0, 'basketball 3 on 3', 2, 'cy777777', 'fefe', '0123456789', 'program_chair', 500),
(12, 0, 'basketball 3 on 3', 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_cochair', 450),
(15, 0, 'Covid-19 Kot', 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_chair', 500),
(16, 0, 'Covid-19 Kot', 2, 'cd12344', 'Kong Dong Ciang', '0123456789', 'program_cochair', 450),
(17, 0, 'RMCO Covid Talk', 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_chair', 500),
(18, 0, 'RMCO Covid Talk', 2, 'Bk48960', 'tao kar pai', '0123456789', 'main_committee', 300),
(19, 0, 'Star word Program', 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_chair', 500),
(20, 0, 'Star word Program', 2, 'cd12344', 'hehe', '0123456789', 'program_cochair', 450),
(21, 0, 'ggg', 2, 'cy777777', 'fefe', '0123456789', 'program_chair', 500),
(22, 0, 'ggg', 2, 'ca18101', 'hoh hong quan', '0123456789', 'program_cochair', 450),
(23, 10, 'Covid-19 Kot', 2, 'CB18028', 'Vinasen', '0123456852', 'sub_committee', 200),
(24, 11, 'RMCO Covid Talk', 2, 'CB18028', 'Vinasen', '0123456852', 'program_cochair', 450);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `id` int(11) NOT NULL,
  `pro_id` int(6) NOT NULL,
  `std_id` varchar(20) NOT NULL,
  `std_name` varchar(50) NOT NULL,
  `ipAddress` varbinary(50) NOT NULL,
  `ic_num` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`id`, `pro_id`, `std_id`, `std_name`, `ipAddress`, `ic_num`, `Password`, `gender`, `date`) VALUES
(15, 0, '98712345664', 'Kavines Rao', 0x3a3a31, '990224146005', '123345', 'Male', '2020-08-08'),
(16, 0, '98712345664', 'Kavines Rao', 0x3a3a31, '990224146005', '123445', 'Male', '2020-08-08'),
(17, 0, 'CB18024', 'Kavines Rao', 0x3a3a31, '990224146005', '12345', 'Male', '2020-08-08'),
(18, 0, 'CB18025', 'Kavin', 0x3a3a31, '990224146005', '21', 'Male', '2020-08-08'),
(19, 0, 'CB18026', 'Vin', 0x3a3a31, '990224146004', '12345', 'Female', '2020-08-09'),
(20, 0, 'CB18027', 'Vinash', 0x3a3a31, '990224146003', '12345', 'Male', '2020-08-09'),
(21, 9, 'CB18028', 'Vinasen', 0x3a3a31, '990224146001', '12345', 'Male', '2020-08-10');

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
  `proCoor_office` varchar(100) NOT NULL,
  `proCoor_office_no` varchar(15) NOT NULL,
  `proCoor_password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program_coordinator`
--

INSERT INTO `program_coordinator` (`proCoor_id`, `proUser_name`, `proCoor_name`, `proCoor_email`, `proCoor_phone`, `proCoor_office`, `proCoor_office_no`, `proCoor_password`) VALUES
(1, 'H2Q', 'Hoh Hong Quan', 'hongquan9824@gmail.com', '0123456789', 'science computer building , level 2, 2-2-1', '1233445667', '111'),
(2, 'GK19', 'Lee Gong Kit', 'LGK_manmanlai@gmail.com', '013-4567888', 'Camping Building, B-01-10', '09-88888888', '22345'),
(3, 'MK14', 'MaK Cik Kiah', '1400sebulan@hotmail.com', '011-11223344', 'A2 Building, A2-03-04 ', '09-77665555', '334455'),
(7, 'hehe', 'haha', 'keke@gmail.com', '02222233333', 'hell', '666', 'idunknow'),
(8, 'uu', 'ee', 'gg@gmail.com', '01445566778899', 'heaven', '333', 'i dun know');

-- --------------------------------------------------------

--
-- Table structure for table `qrcode`
--

CREATE TABLE `qrcode` (
  `qr_id` int(11) NOT NULL,
  `qr_details` varchar(20) NOT NULL,
  `qr_par` varchar(40) CHARACTER SET latin1 NOT NULL,
  `qr_com` varchar(40) CHARACTER SET latin1 NOT NULL,
  `pro_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qrcode`
--

INSERT INTO `qrcode` (`qr_id`, `qr_details`, `qr_par`, `qr_com`, `pro_id`) VALUES
(3, 'localhost/Project_My', 'committee1963076257.png', 'participant2040538634.png', 1),
(4, 'localhost/Project_My', 'committee1866055021.png', 'participant1744429417.png', 7),
(13, 'localhost/mygrp/m3/C', 'committee1135129989.png', 'participant809260734.png', 8);

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
(8, 'basketball 3 on 3', 'EBUMP', 'Dr. Lee', 10, 'gg', '0123456789', 'astaka', '2020-08-01', '2020-08-01', '0700', '1800', 100, 'layout.pptx', 'Disapprove'),
(9, '2020 Job Career Fair', 'UMP MPP', 'Professor Ong', 2000, 'lim kong weng', '0123456789', 'KSU', '2020-08-06', '2020-08-14', '0700', '1800', 200, 'new approval letter.pdf', 'In Pending'),
(10, 'Covid-19 Kot', 'UMP MPP', 'Dr Afiq', 1200, 'Azim ', '0123456789', 'W-DK-01', '2020-08-08', '2020-08-08', '1800', '2200', 120, 'layout.pptx', 'Approve'),
(11, 'RMCO Covid Talk', 'UMP Society Association', 'Professor Kavines', 2000, 'Sin Kar Lin', '0123456789', 'Astaka', '2020-09-07', '2020-09-07', '1400', '1800', 300, 'new approval letter.pdf', 'Approve'),
(12, 'Star word Program', 'UMP xxx club', 'dr kavin', 200, 'Hoh Hong Quan', '0123456789', 'KSU', '2020-08-07', '2020-08-07', '1900', '2200', 100, 'new approval letter.pdf', 'Approve'),
(13, 'ggg', 'jjj', 'ooo', 1, 'll', '0123456789', 'hh', '2020-08-09', '2020-08-09', '0700', '1800', 100, 'layout.pptx', 'In Pending');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `std_id` varchar(10) NOT NULL,
  `std_password` varchar(16) NOT NULL,
  `std_name` varchar(55) NOT NULL,
  `std_phone` varchar(15) NOT NULL,
  `std_faculty` varchar(10) NOT NULL,
  `std_totalMerit` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_id`, `std_password`, `std_name`, `std_phone`, `std_faculty`, `std_totalMerit`) VALUES
('CB18028', '12345', 'Vinasen', '0123456852', 'FKOM', 850),
('KA18222', 'admin', 'Ajith', '0112234562', 'FKKSA', 240),
('CB19053', '567', 'Visanen', '0112234567', 'FKOM', 100),
('cd12344', '123456', 'Kong Dong Ciang', '0123456789', 'FKOM', 0),
('AA19004', 'asd', 'Vijay', '0123506959', 'FKASA', 700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `comm_detail`
--
ALTER TABLE `comm_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pro_id` (`pro_id`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  ADD PRIMARY KEY (`proCoor_id`);

--
-- Indexes for table `qrcode`
--
ALTER TABLE `qrcode`
  ADD PRIMARY KEY (`qr_id`),
  ADD UNIQUE KEY `pro_id` (`pro_id`);

--
-- Indexes for table `report_parmerit`
--
ALTER TABLE `report_parmerit`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `program_name` (`program_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `comm_detail`
--
ALTER TABLE `comm_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  MODIFY `proCoor_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `qrcode`
--
ALTER TABLE `qrcode`
  MODIFY `qr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `report_parmerit`
--
ALTER TABLE `report_parmerit`
  MODIFY `pro_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
