-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2018 at 09:30 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studyhacks`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `status`) VALUES
(1, 'October-05-2018 20:42:25', 'Saurabh Dubey', 'dubeysaurabh134@gmail.com', 'Testing', 'ON'),
(2, 'October-08-2018 09:41:40', 'sanil', 'sanil@gmail.com', 'Testing', 'ON'),
(3, 'October-08-2018 09:41:56', 'oswin', 'oswin@gmail.com', 'testing', 'ON'),
(4, 'October-08-2018 09:42:05', 'sachin', 'sachin@gmail.com', 'testing', 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(10) NOT NULL,
  `username` varchar(200) NOT NULL DEFAULT 'saurabh',
  `password` varchar(200) NOT NULL DEFAULT 'saurabhsaurabh'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(2, 'saurabh', 'saurabh');

-- --------------------------------------------------------

--
-- Table structure for table `question_panel`
--

CREATE TABLE `question_panel` (
  `id` int(10) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `sem` varchar(10) NOT NULL,
  `pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_panel`
--

INSERT INTO `question_panel` (`id`, `branch`, `year`, `subject`, `sem`, `pdf`) VALUES
(1, 'Information Technology', '2017', '', '', ''),
(2, 'dddd', '2334', '', '', ''),
(3, 'dddd', '2334', '', '', ''),
(4, 'dsfdsfvf', '1334', '', '', ''),
(5, 'fdgdg', '2017', '', '', ''),
(21, 'IT', '2016', 'Data Structure and Analysis', '3', 'SEM-3_DSA.pdf'),
(22, 'IT', '2016', 'DataBase Management System', '3', 'SEM-3_DBMS.pdf'),
(23, 'IT', '2016', 'Logic Desgin', '3', 'SEM-3_LD.pdf'),
(24, 'IT', '2016', 'Principle of Communication', '3', 'SEM-3_PC.pdf'),
(25, 'IT', '2016', 'Maths', '3', 'SEM-3_AM.pdf'),
(26, 'IT', '2017', 'DataBase Management System', '3', 'SEM-3_DBMS_2017.pdf'),
(27, 'IT', '2017', 'Data Structure and Analysis', '3', 'SEM-3_DSA_2017.pdf'),
(28, 'IT', '2017', 'Maths', '3', 'SEM-3_AM_2017.pdf'),
(29, 'IT', '2017', 'Logic Desgin', '3', 'SEM-3_LD_2017.pdf'),
(30, 'IT', '2017', 'Principle of Communication', '3', 'SEM-3_PC_2017.pdf'),
(31, 'IT', '2016', 'ADMT', '5', 'SEM-5_ADMT_2016.pdf'),
(32, 'IT', '2017', 'ADMT', '5', 'SEM-5_ADMT_2017.pdf'),
(33, 'IT', '2016', 'CGVR', '5', 'SEM-5_CGVR_2016.pdf'),
(34, 'IT', '2017', 'CGVR', '5', 'SEM-5_CGVR_2017.pdf'),
(35, 'IT', '2016', 'MEP', '5', 'SEM-5_MEP_2016.pdf'),
(36, 'IT', '2017', 'MEP', '5', 'SEM-5_MEP_2017.pdf'),
(37, 'IT', '2016', 'COA', '4', 'SEM-4_COA_2016.pdf'),
(38, 'IT', '2017', 'COA', '4', 'SEM-4_COA_2017.pdf'),
(39, 'IT', '2016', 'CN', '4', 'SEM-4_CN_2016.pdf'),
(40, 'IT', '2017', 'CN', '4', 'SEM-4_CN_2017.pdf'),
(41, 'IT', '2016', 'AT', '4', 'SEM-4_AT_2016.pdf'),
(42, 'IT', '2017', 'AT', '4', 'SEM-4_AT_2017.pdf'),
(43, 'IT', '2016', 'Maths', '4', 'SEM-4_AM_2016.pdf'),
(44, 'IT', '2017', 'Maths', '4', 'SEM-4_AM_2017.pdf'),
(45, 'IT', '2016', 'OS', '4', 'SEM-4_OS_2016.pdf'),
(46, 'IT', '2017', 'OS', '4', 'SEM-4_OS_2017.pdf'),
(47, 'IT', '2016', 'Web Programming', '5', 'SEM-5_WP_2016.pdf'),
(48, 'IT', '2017', 'Web Programming', '5', 'SEM-5_WP_2017.pdf'),
(49, 'IT', '2017', 'Software Enginnering', '6', 'TE-IT_SEM6_SE_MAY17.pdf'),
(50, 'IT', '2018', 'Software Enginnering', '6', 'TE-IT_SEM6_SE_MAY18.pdf'),
(51, 'IT', '2017', 'Distributed Systems', '6', 'TE-IT_SEM6_DS_MAY17.pdf'),
(52, 'IT', '2018', 'Distributed Systems', '6', 'TE-IT_SEM6_DS_MAY18.pdf'),
(53, 'IT', '2017', 'System and Web security', '6', 'TE-IT_SEM6_SWS_MAY17.pdf'),
(54, 'IT', '2018', 'System and Web security', '6', 'TE-IT_SEM6_SWS_MAY18.pdf'),
(55, 'IT', '2017', 'Data mining and business intelligece', '6', 'TE-IT_SEM6_DMBI_MAY17.pdf'),
(56, 'IT', '2018', 'Data mining and business intelligece', '6', 'TE-IT_SEM6_DMBI_MAY18.pdf'),
(57, 'IT', '2018', 'Advanced internet technology', '6', 'TE-IT_SEM6_AIT_MAY17.pdf'),
(58, 'IT', '2018', 'Advanced internet technology', '6', 'TE-IT_SEM6_AIT_MAY18.pdf'),
(59, 'IT', '2017', 'software project management', '7', 'BE-IT_SEM7_SPM_MAY17.pdf'),
(60, 'IT', '2018', 'software project management', '7', 'BE-IT_SEM7_SPM_MAY18.pdf'),
(61, 'IT', '2017', 'cloud computing', '7', 'BE-IT_SEM7_CC_MAY17.pdf'),
(62, 'IT', '2018', 'cloud computing', '7', 'BE-IT_SEM7_CC_MAY18.pdf'),
(63, 'IT', '2017', 'intelligent system', '7', 'BE-IT_SEM7_IS_MAY17.pdf'),
(64, 'IT', '2018', 'intelligent system', '7', 'BE-IT_SEM7_IS_MAY18.pdf'),
(65, 'IT', '2017', 'wireless technology', '7', 'BE-IT_SEM7_WT_MAY17.pdf'),
(66, 'IT', '2018', 'wireless technology', '7', 'BE-IT_SEM7_WT_MAY18.pdf'),
(67, 'IT', '2017', 'image processing', '7', 'BE-IT_SEM7_IP_MAY17.pdf'),
(68, 'IT', '2018', 'image processing', '7', 'BE-IT_SEM7_IP_MAY18.pdf'),
(69, 'IT', '2017', 'software arcitecture', '7', 'BE-IT_SEM7_SA_MAY17.pdf'),
(70, 'IT', '2018', 'software arcitecture', '7', 'BE-IT_SEM7_SA_MAY18.pdf'),
(71, 'IT', '2017', 'ecommerce & business', '5', 'BE-IT_SEM7_ECEB_MAY17.pdf'),
(72, 'IT', '2018', 'ecommerce & business', '5', 'BE-IT_SEM7_ECEB_MAY18.pdf'),
(73, 'IT', '2017', 'mulitmedia systems', '7', 'BE-IT_SEM7_MS_MAY17.pdf'),
(74, 'IT', '2018', 'mulitmedia systems', '7', 'BE-IT_SEM7_MS_MAY18.pdf'),
(75, 'IT', '2017', 'storage network management & retrival', '8', 'BE-IT_SEM8_SNMR_MAY17.pdf'),
(76, 'IT', '2018', 'storage network management & retrival', '8', 'BE-IT_SEM8_SNMR_MAY18.pdf'),
(77, 'IT', '2017', 'big data analysis', '8', 'BE-IT_SEM8_BDA_MAY17.pdf'),
(78, 'IT', '2018', 'big data analysis', '8', 'BE-IT_SEM8_BDA_MAY18.pdf'),
(79, 'IT', '2017', 'computer simulation and modelling', '8', 'BE-IT_SEM8_CSM_MAY17.pdf'),
(80, 'IT', '2018', 'computer simulation and modelling', '8', 'BE-IT_SEM8_CSM_MAY18.pdf'),
(81, 'IT', '2017', 'enterprise resource planning', '8', 'BE-IT_SEM8_ERP_MAY17.pdf'),
(82, 'IT', '2018', 'enterprise resource planning', '8', 'BE-IT_SEM8_ERP_MAY18.pdf'),
(83, 'IT', '2017', 'soft computing', '8', 'BE-IT_SEM8_SC_MAY17.pdf'),
(84, 'IT', '2018', 'soft computing', '8', 'BE-IT_SEM8_SC_MAY18.pdf'),
(85, 'IT', '2017', 'software testing and quality assurance', '8', 'BE-IT_SEM8_STQA_MAY17.pdf'),
(86, 'IT', '2018', 'software testing and quality assurance', '8', 'BE-IT_SEM8_STQA_MAY18.pdf'),
(87, 'testing', '2228', 'Testing', '3', 'redmi_note_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `study_materials`
--

CREATE TABLE `study_materials` (
  `id` int(10) NOT NULL,
  `branch` varchar(500) NOT NULL,
  `subject` varchar(500) NOT NULL,
  `des` varchar(10000) NOT NULL,
  `pdf` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `study_materials`
--

INSERT INTO `study_materials` (`id`, `branch`, `subject`, `des`, `pdf`) VALUES
(10, 'IT', 'Internet Programming', 'Server Side Programming (PHP) Notes.Learn How to connect PHP to MYSQL and many more..', 'IP notes.pdf'),
(11, 'IT', 'Internet Programming', 'CSS 3 notes', 'CSS3.pdf'),
(12, 'testing', 'testing', 'testing', 'CaesarCipher.docx'),
(13, 'testing 2', 'testing 2', 'testing 2', 'New Microsoft Office Word Document.docx');

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `id` int(10) NOT NULL,
  `year` varchar(200) NOT NULL,
  `sem` varchar(200) NOT NULL,
  `pdf` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`id`, `year`, `sem`, `pdf`) VALUES
(1, '2018', '4', 'SE_SEM4(CBCGS)_FIRST HALF 2018-TIMETABLE.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_panel`
--
ALTER TABLE `question_panel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `study_materials`
--
ALTER TABLE `study_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_panel`
--
ALTER TABLE `question_panel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `study_materials`
--
ALTER TABLE `study_materials`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
