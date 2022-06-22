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
(20, 0, 'Star word Program', 2, 'cd12344', 'hehe', '0123456789', 'program_cochair', 450);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comm_detail`
--
ALTER TABLE `comm_detail`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
