-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2021 at 08:56 PM
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
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Student_id` int(20) NOT NULL,
  `Student_name` varchar(100) NOT NULL,
  `Year_Branch` varchar(50) NOT NULL,
  `RollNo` int(20) NOT NULL,
  `Fingerprint_id` int(20) NOT NULL,
  `Fingerprint_select` tinyint(1) NOT NULL DEFAULT 0,
  `User_date` date NOT NULL,
  `Del_fingerid` tinyint(1) NOT NULL DEFAULT 0,
  `Add_fingerid` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Student_id`, `Student_name`, `Year_Branch`, `RollNo`, `Fingerprint_id`, `Fingerprint_select`, `User_date`, `Del_fingerid`, `Add_fingerid`) VALUES
(1, 'Sumithra Naidu', 'BE_EXTC', 77, 1, 0, '2021-03-31', 0, 0),
(6, 'Utkarsh Likhar', 'BE_EXTC', 78, 2, 0, '2021-03-31', 0, 0),
(7, 'Aniketh Rao', 'BE_EXTC', 86, 3, 0, '2021-03-31', 0, 0),
(8, 'Raul Braz', 'BE_EXTC', 89, 4, 0, '2021-03-31', 0, 0),
(11, 'Shreyas Kulkarni', 'SE_MECH', 99, 37, 0, '0000-00-00', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `Student_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
