-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 09:30 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--
CREATE DATABASE IF NOT EXISTS `voting` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `voting`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `name`) VALUES
(1, 'admin', 'admin', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `nominees`
--

CREATE TABLE `nominees` (
  `id` int(11) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `name` varchar(60) NOT NULL,
  `department` varchar(30) NOT NULL,
  `level` varchar(3) NOT NULL,
  `candidate_matricNo` varchar(12) NOT NULL,
  `images` varchar(50) NOT NULL,
  `votes` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nominees`
--

INSERT INTO `nominees` (`id`, `pos`, `name`, `department`, `level`, `candidate_matricNo`, `images`, `votes`) VALUES
(1, 'President', 'ADEOYE JOSEPH', 'Economics', '400', '20153456', 'img1.jpg', 15),
(2, 'President', 'JACK DANIELS', 'Law', '500', '20152345', 'img3.jfif', 2),
(3, 'VP', 'Carter, Vince M.', 'Mass communication', '400', '20159876', 'img5.jfif', 6),
(4, 'VP', 'Cruz, Juan D.', 'Micro Biology', '400', '20157865', 'img6.jfif', 9),
(5, 'Secretary', 'Winslet, Kate L.', 'Law', '400', '20152845', 'img7.jfif', 12),
(6, 'Secretary', 'Guivara, Jake S.', 'Computer science', '400', '20156754', 'img4.jfif', 6);

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `ID` int(5) NOT NULL,
  `matric_no` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `college` varchar(30) NOT NULL,
  `department` varchar(30) NOT NULL,
  `level` int(4) NOT NULL,
  `password` varchar(20) NOT NULL,
  `voted` varchar(3) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`ID`, `matric_no`, `firstname`, `lastname`, `gender`, `college`, `department`, `level`, `password`, `voted`) VALUES
(1, 20152936, 'Glory', 'Adeyemi', 'male', 'Management science', 'Accounting', 400, 'jesus', 'YES'),
(2, 20152937, 'Emmanuel', 'Famakinde', 'male', 'social', 'eco', 200, 'damilola12', 'YES'),
(3, 20152938, 'Olaoshebikan', 'Ayomide', 'male', 'Natural science', 'Computer science', 300, 'ajayi', 'NO'),
(4, 20152939, 'Adetunji', 'Adebare', 'male', 'Natural science', 'chemical', 200, 'mama', 'NO');

-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

CREATE TABLE `votes` (
  `id` int(11) NOT NULL,
  `pos` varchar(60) NOT NULL,
  `candidate_matricNo` int(11) NOT NULL,
  `matric_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nominees`
--
ALTER TABLE `nominees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nominees`
--
ALTER TABLE `nominees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
