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
(1, 'H2Q', 'Hoh Hong Quan', 'hongquan9824@gmail.com', '0123456789', 'science computer building , level 2, 2-2-1', '1233445667', '555'),
(2, 'GK19', 'Lee Gong Kit', 'LGK_manmanlai@gmail.com', '013-4567888', 'Camping Building, B-01-10', '09-88888888', '22345'),
(3, 'MK14', 'MaK Cik Kiah', '1400sebulan@hotmail.com', '011-11223344', 'A2 Building, A2-03-04 ', '09-77665555', '334455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  ADD PRIMARY KEY (`proCoor_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program_coordinator`
--
ALTER TABLE `program_coordinator`
  MODIFY `proCoor_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
