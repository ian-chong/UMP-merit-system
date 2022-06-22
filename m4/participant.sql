-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 01:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
