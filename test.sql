-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2023 at 12:53 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scsvmv`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicyear`
--

CREATE TABLE `academicyear` (
  `sl` int(11) NOT NULL,
  `academicyear` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `sl` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `roleid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `bloodgroup`
--

CREATE TABLE `bloodgroup` (
  `bloodgroup` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `board`
--

CREATE TABLE `board` (
  `sl` int(11) NOT NULL,
  `boardid` int(11) NOT NULL,
  `boardname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `sl` int(11) NOT NULL,
  `cityid` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `cityname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `community`
--

CREATE TABLE `community` (
  `sl` int(11) NOT NULL,
  `communityid` int(11) NOT NULL,
  `community` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `sl` int(11) NOT NULL,
  `coursemodeid` int(11) NOT NULL,
  `coursemode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `disciplinary`
--

CREATE TABLE `disciplinary` (
  `sl` int(11) NOT NULL,
  `disciplinaryid` int(11) NOT NULL,
  `disciplinary` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mediumofinstruction`
--

CREATE TABLE `mediumofinstruction` (
  `sl` int(11) NOT NULL,
  `mediumid` int(11) NOT NULL,
  `medium` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mothertongue`
--

CREATE TABLE `mothertongue` (
  `sl` int(11) NOT NULL,
  `mothertongueid` int(11) NOT NULL,
  `mothertongue` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `nationality`
--

CREATE TABLE `nationality` (
  `sl` int(11) NOT NULL,
  `nationalityid` int(11) NOT NULL,
  `nationality` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `occupation`
--

CREATE TABLE `occupation` (
  `sl` int(11) NOT NULL,
  `occupationid` int(11) NOT NULL,
  `occupation` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `religion`
--

CREATE TABLE `religion` (
  `sl` int(11) NOT NULL,
  `religionId` int(11) NOT NULL,
  `religion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `sl` int(11) NOT NULL,
  `roleid` varchar(50) NOT NULL,
  `rolename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `sl` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicyear`
--
ALTER TABLE `academicyear`
  ADD PRIMARY KEY (`academicyear`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `board`
--
ALTER TABLE `board`
  ADD PRIMARY KEY (`boardid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`cityid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`communityid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`coursemodeid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `disciplinary`
--
ALTER TABLE `disciplinary`
  ADD PRIMARY KEY (`disciplinaryid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `mediumofinstruction`
--
ALTER TABLE `mediumofinstruction`
  ADD PRIMARY KEY (`mediumid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `mothertongue`
--
ALTER TABLE `mothertongue`
  ADD PRIMARY KEY (`mothertongueid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `nationality`
--
ALTER TABLE `nationality`
  ADD PRIMARY KEY (`nationalityid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `occupation`
--
ALTER TABLE `occupation`
  ADD PRIMARY KEY (`occupationid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `religion`
--
ALTER TABLE `religion`
  ADD PRIMARY KEY (`religionId`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`roleid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`stateid`),
  ADD UNIQUE KEY `sl` (`sl`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicyear`
--
ALTER TABLE `academicyear`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `board`
--
ALTER TABLE `board`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `community`
--
ALTER TABLE `community`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `disciplinary`
--
ALTER TABLE `disciplinary`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mediumofinstruction`
--
ALTER TABLE `mediumofinstruction`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mothertongue`
--
ALTER TABLE `mothertongue`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nationality`
--
ALTER TABLE `nationality`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `occupation`
--
ALTER TABLE `occupation`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `religion`
--
ALTER TABLE `religion`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
