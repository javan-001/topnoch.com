-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 06:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tech3740`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Login` varchar(300) DEFAULT NULL,
  `Password` varchar(300) DEFAULT NULL,
  `Name` varchar(300) DEFAULT NULL,
  `DOB` varchar(300) DEFAULT NULL,
  `Joindate` varchar(300) DEFAULT NULL,
  `Gender` varchar(300) DEFAULT NULL,
  `Address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Login`, `Password`, `Name`, `DOB`, `Joindate`, `Gender`, `Address`) VALUES
(1, 'tiger', 'xyz123', 'Victor Smith', '1/1/1990', '1/1/2018', 'M', '1000 Morris Ave., Union, NJ 07083'),
(2, 'panda', 'xyz333', 'John Lee', NULL, '1/1/2015', 'F', '133 Main St., Austin, TX'),
(5, 'Austin', 'bbb', 'Austin test', '1/1/1998', '1/1/1990', 'M', '71 Central Ave., Newark, NJ 07188'),
(6, 'monkey', '123', 'Tester Staff', NULL, '1/1/2020', 'M', '100 Main st. Edison, NJ 07777'),
(7, 'fish', '111', 'Tester2 Staff2', '1/10/2021', '1/1/2020', 'F', '100 Central st. Edison, NJ 07777');

-- --------------------------------------------------------

--
-- Table structure for table `temp_courses`
--

CREATE TABLE `temp_courses` (
  `cid` varchar(300) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `FacultyName` varchar(300) DEFAULT NULL,
  `Enrollment` int(3) DEFAULT NULL,
  `BuildingRoom` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_courses`
--

INSERT INTO `temp_courses` (`cid`, `name`, `FacultyName`, `Enrollment`, `BuildingRoom`) VALUES
('CSS1345', 'physical education', 'art', 10, '9001'),
('POS123', 'Research', 'hospitality', 29, '9004');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `temp_courses`
--
ALTER TABLE `temp_courses`
  ADD PRIMARY KEY (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
