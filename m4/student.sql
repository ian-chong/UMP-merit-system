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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
