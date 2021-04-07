-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2021 at 02:25 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminvalidate`
--

CREATE TABLE `adminvalidate` (
  `ID` int(11) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminvalidate`
--

INSERT INTO `adminvalidate` (`ID`, `Username`, `Password`) VALUES
(1, 'Admin1', 'Admin1test');

-- --------------------------------------------------------

--
-- Table structure for table `studentvalidate`
--

CREATE TABLE `studentvalidate` (
  `ID` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `CGPA` double NOT NULL,
  `dob` date NOT NULL,
  `previous_backlogs` int(11) NOT NULL,
  `current_backlogs` int(11) NOT NULL,
  `course` varchar(45) NOT NULL,
  `current_status` varchar(45) NOT NULL,
  `Upload_pdf` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentvalidate`
--

INSERT INTO `studentvalidate` (`ID`, `roll_no`, `username`, `password`, `Name`, `Email`, `Branch`, `CGPA`, `dob`, `previous_backlogs`, `current_backlogs`, `course`, `current_status`, `Upload_pdf`) VALUES
(1, 8894, 'bhaven', 'bhaven123', 'Bhavendra S Panchal', 'bhaven1201@gmail.com', 'Computer', 9.39, '2001-11-21', 0, 0, 'B.E', 'passed_out', ''),
(2, 8896, 'ronald', 'ron1234', 'Ronald Patrick', 'abc@gmail.com', 'Production', 9.11, '2000-01-12', 0, 0, 'B.E', 'Active', ''),
(3, 8895, 'meet', 'meet1234', 'Meet Parmar', 'meetparmar@gmail.com', 'Computer', 5.91, '2000-10-07', 1, 2, 'B.E', 'Active', ''),
(5, 6875, 'shaun', 'shaun911', 'Shaun Lopez', 'shaun123@gmail.com', 'Production', 6.1, '1995-02-08', 1, 1, 'B.E', 'Active', ''),
(6, 8602, 'riya', 'riya0512', 'Riya Rajput', 'rriya@gmail.com', 'Computer', 9.5, '1999-12-05', 0, 0, 'B.E', 'passed_out', ''),
(7, 6999, 'rohan', 'rohan06', 'Rohan Rawat', 'rohan06@gmail.com', 'Mechanical ', 7.1, '1998-06-08', 1, 0, 'M.Tech', 'Active', ''),
(8, 6689, 'priya', 'priya125', 'Priya Shetty', 'priya125@gmail.com', 'Computer', 8.8, '1997-08-11', 0, 0, 'M.E', 'passed_out', ''),
(9, 8501, 'Neha', 'neha07', 'Neha Roy', 'neha07@gmail.com', 'Computer', 6, '2001-11-11', 1, 3, 'B.E', 'Active', ''),
(10, 6799, 'Shyam', 'shyam1', 'Shyam Pal', 'shyam123@g,ail.com', 'Production', 5.5, '2001-01-12', 2, 2, 'B.E', 'Active', ''),
(11, 8855, 'elon', 'spacex', 'Elon Musk', 'elonmusk@01gmail.com', 'Computer', 10, '1991-01-08', 0, 0, 'B.E', 'Active', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminvalidate`
--
ALTER TABLE `adminvalidate`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `studentvalidate`
--
ALTER TABLE `studentvalidate`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminvalidate`
--
ALTER TABLE `adminvalidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentvalidate`
--
ALTER TABLE `studentvalidate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
