-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql308.byetcluster.com
-- Generation Time: Nov 23, 2023 at 09:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_33887276_chan`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `reg` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`reg`, `title`, `notes`) VALUES
('613520104006', 'Green Computing', 'Screenshot 2023-11-19 114351.png');

-- --------------------------------------------------------

--
-- Table structure for table `atta`
--

CREATE TABLE `atta` (
  `reg` varchar(20) NOT NULL,
  `slot1` varchar(5) NOT NULL,
  `no_p1` varchar(5) NOT NULL,
  `no_pr1` varchar(5) NOT NULL,
  `no_ab1` varchar(5) NOT NULL,
  `slot2` varchar(11) NOT NULL,
  `no_p2` varchar(5) NOT NULL,
  `no_pr2` varchar(5) NOT NULL,
  `no_ab2` varchar(5) NOT NULL,
  `slot3` varchar(5) NOT NULL,
  `no_p3` varchar(5) NOT NULL,
  `no_pr3` varchar(5) NOT NULL,
  `no_ab3` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `atta`
--

INSERT INTO `atta` (`reg`, `slot1`, `no_p1`, `no_pr1`, `no_ab1`, `slot2`, `no_p2`, `no_pr2`, `no_ab2`, `slot3`, `no_p3`, `no_pr3`, `no_ab3`) VALUES
('613520104006', '1', '40', '35', '5', '2', '30', '20', '10', '3', '50', '50', '0'),
('613520104007', '1', '50', '40', '10', '2', '50', '30', '20', '3', '50', '50', '0');

-- --------------------------------------------------------

--
-- Table structure for table `certi`
--

CREATE TABLE `certi` (
  `id` int(11) NOT NULL,
  `regist` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `certi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certi`
--

INSERT INTO `certi` (`id`, `regist`, `name`, `certi`) VALUES
(9, '613520104006', 'Angular', 'acknowledgementSlip_S1891846869000.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `circular`
--

CREATE TABLE `circular` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `news` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `circular`
--

INSERT INTO `circular` (`id`, `title`, `news`) VALUES
(21, 'Semenster 6', 'AU Semester Examination starts from 08.06.2023'),
(22, 'Semenster 6', 'AU Semester Examination starts from 08.06.2023'),
(23, 'Semesters 2023:', 'Nov-Dec 2023 Semester examinations are on progress...');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` int(11) NOT NULL,
  `sub` varchar(100) NOT NULL,
  `notes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `sub`, `notes`) VALUES
(24, 'CS8051', 'IMG-20230405-WA0037.jpeg'),
(25, 'CS8001', 'STUCOR_Syllabus_CSE2017-4.pdf'),
(26, 'CS8001', 'ANNEX-354509700099365 (2).pdf'),
(27, 'CS8602', 'grass_trees_hd_picture_165975.jpg'),
(28, 'Maithreyan', 'SAVE_20230405_185545.jpg'),
(29, 'Internet Programming', 'manickam2014.pdf'),
(30, 'cs8051', 'CD_feedback.pdf'),
(31, 'Chan', 'IP_4.pdf'),
(32, 'cs8551', 'Batch 2.pptx'),
(33, '1234', 'servelt.java'),
(34, 'cs8052', 'links.txt'),
(35, 'cs8052', 'links.txt'),
(36, 'IT8761', 'Screenshot 2023-11-19 114351.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(100) NOT NULL,
  `rnum` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `fname` varchar(100) NOT NULL,
  `fnum` varchar(20) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `community` varchar(50) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `income` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `rnum`, `dob`, `fname`, `fnum`, `mname`, `email`, `mobile`, `aadhar`, `gender`, `religion`, `community`, `caste`, `address`, `income`) VALUES
('Chandru', '613520104006', '2003-05-26', 'Duraiyan', '8098146840', 'Selvi', 'chan@gmail.com', '9360373727', '478580853478', 'Male', 'Hindu', 'MBC', 'Vanniyar', 'Elampillai', '1,00,000');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `regist` varchar(50) NOT NULL,
  `s1` varchar(50) NOT NULL,
  `g1` varchar(50) NOT NULL,
  `s2` varchar(50) NOT NULL,
  `g2` varchar(50) NOT NULL,
  `s3` varchar(50) NOT NULL,
  `g3` varchar(50) NOT NULL,
  `s4` varchar(50) NOT NULL,
  `g4` varchar(30) NOT NULL,
  `s5` varchar(20) NOT NULL,
  `g5` varchar(50) NOT NULL,
  `s6` varchar(50) NOT NULL,
  `g6` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `regist`, `s1`, `g1`, `s2`, `g2`, `s3`, `g3`, `s4`, `g4`, `s5`, `g5`, `s6`, `g6`) VALUES
(3, '1234', 'Tamil', 'A', 'English', '2', 'Maths', 'A+', 'Science', 'A', 'APC', 'o', '-', '-'),
(4, '613520104006', 'MPMC', 'A', 'B', 'A+', 'C', 'U', 'D', 'D', 'E', 'A', 'PQT', 'A'),
(5, '613520104006', 'MPMC', 'A', 'B', 'A+', 'C', 'U', 'D', 'D', 'E', 'A', 'PQT', 'A'),
(6, '613520104007', 'Tamil', '45', 'English', '40', 'Maths', '50', 'Science', '35', 'Social', '50', 'PQT', '100');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD UNIQUE KEY `title` (`title`);

--
-- Indexes for table `atta`
--
ALTER TABLE `atta`
  ADD PRIMARY KEY (`reg`);

--
-- Indexes for table `certi`
--
ALTER TABLE `certi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `circular`
--
ALTER TABLE `circular`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`rnum`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certi`
--
ALTER TABLE `certi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `circular`
--
ALTER TABLE `circular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
