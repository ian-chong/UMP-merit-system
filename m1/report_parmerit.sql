-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2020 at 05:33 PM
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
(10, 'Covid-19 Kot', 'UMP MPP', 'Dr Afiq', 1200, 'Azim ', '0123456789', 'W-DK-01', '2020-08-08', '2020-08-08', '1800', '2200', 120, 'layout.pptx', 'Approve'),
(11, 'RMCO Covid Talk', 'UMP Society Association', 'Professor Kavines', 2000, 'Sin Kar Lin', '0123456789', 'Astaka', '2020-09-07', '2020-09-07', '1400', '1800', 300, 'new approval letter.pdf', 'Approve'),
(12, 'Star word Program', 'UMP xxx club', 'dr kavin', 200, 'Hoh Hong Quan', '0123456789', 'KSU', '2020-08-07', '2020-08-07', '1900', '2200', 100, 'new approval letter.pdf', 'Approve');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `report_parmerit`
--
ALTER TABLE `report_parmerit`
  MODIFY `pro_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
