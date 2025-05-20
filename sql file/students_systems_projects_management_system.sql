-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 07:17 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_systems_projects_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `staffno` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `staffno`, `username`, `password`) VALUES
(1, 'Mr. Wilfred', 'Gikaru', 'wggikaru@gmail.com', '3456', '3456', '1bc3ad3c8faaae2c805cc1dbf1e0ae9a');

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE `journal` (
  `id` int(11) NOT NULL,
  `student_reg_no` varchar(100) NOT NULL,
  `work_done` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `activity_status` varchar(100) NOT NULL,
  `activity_description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`id`, `student_reg_no`, `work_done`, `start_date`, `end_date`, `activity_status`, `activity_description`) VALUES
(1, 'S13/15357/16', 'Information gathering and proposal document writing.', '2019-09-07', '2019-10-08', 'complete', 'Data collection and information gathering on the project topic was done.'),
(2, 'S13/15357/16', 'Proposal document writing-first revision', '2019-10-09', '2019-10-15', 'complete', 'I wrote the first version of the proposal document'),
(3, 'S13/15357/16', 'Second revision of Proposal document', '2019-10-22', '2019-10-25', 'complete', 'I did corrections on the proposal document to produce the second version of the Proposal Document.'),
(4, 'S13/15357/16', 'SRS Writing', '2020-12-01', '2020-12-16', 'complete', 'Collected data regarding the software requirement'),
(5, 'S13/15357/16', 'SDD', '2020-01-08', '2020-01-16', 'complete', 'SDD Document writing');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer_details`
--

CREATE TABLE `lecturer_details` (
  `id` int(11) NOT NULL,
  `lecturer_name` varchar(100) NOT NULL,
  `staff_no` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer_details`
--

INSERT INTO `lecturer_details` (`id`, `lecturer_name`, `staff_no`, `username`, `password`) VALUES
(1, 'Mr. Kimani Njoroge', '3457', '3457', '1bc3ad3c8faaae2c805cc1dbf1e0ae9a'),
(2, 'Mr. Justine Omwoyo', '3458', '3458', '1bc3ad3c8faaae2c805cc1dbf1e0ae9a'),
(3, 'Mr. Jason Githeko', '3459', '3459', '1bc3ad3c8faaae2c805cc1dbf1e0ae9a'),
(4, 'Mr. Odongo', '3460', '3460', '1bc3ad3c8faaae2c805cc1dbf1e0ae9a');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(11) NOT NULL,
  `student_reg_no` varchar(50) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `project_type` varchar(50) NOT NULL,
  `project_session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_document`
--

CREATE TABLE `project_document` (
  `document_id` int(11) NOT NULL,
  `student_reg_no` varchar(50) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `document_version` varchar(50) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `submission_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `username` varchar(100) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_document`
--

INSERT INTO `project_document` (`document_id`, `student_reg_no`, `document_name`, `document_version`, `file_name`, `submission_date`, `username`, `comments`) VALUES
(1, 'S13/15357/16', 'SSPMS Proposal document', '1.0', 'Project Proposal document.docx', '2020-11-30 21:00:00', '3457', 'This is a proposal document for Students Systems Projects Management System'),
(2, 'S13/15331/16', 'Proposal document', '1.0', 'S13_15317_16 Seminar Paper.docx', '2020-12-01 21:00:00', '3457', 'Proposal document'),
(3, 'S13/15358/16', 'Proposal document', '1.0', 'KCIHtestplan.docx', '2020-11-28 21:00:00', '3458', 'This is a roposal documen'),
(4, 'S13/15358/16', 'Software Requirement Specification', '1.0', '185488339.docx', '2020-12-16 16:19:07', '3460', 'This is an srs document'),
(5, 'S13/15357/16', 'Software Requirement Specification', '1.0', 'SRS document Jackline Achieng Mboya.docx', '2020-12-17 08:38:55', '3457', 'Write your comment here');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `document_id` int(11) NOT NULL,
  `student_reg_no` varchar(50) NOT NULL,
  `document_name` varchar(50) NOT NULL,
  `review_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `file_name` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`document_id`, `student_reg_no`, `document_name`, `review_date`, `file_name`, `username`, `comments`) VALUES
(1, 'S13/15357/16', 'Reviewed Proposal document', '2020-12-17 08:09:57', 'Project Proposal document.docx', '3457', 'See the attached file for correction'),
(2, 'S13/15358/16', 'Proposal document', '2020-12-17 10:40:10', 'Project Proposal document.docx', '3458', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) NOT NULL,
  `student_reg_no` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `student_name`, `student_reg_no`, `username`, `project_title`, `password`) VALUES
(1, 'Jackline Mboya', 'S13/15357/16', 'S13/15357/16', 'Students Systems Projects Management Systems', '553ca795a87c1cac01fb566be1b1577e'),
(2, 'Victor Musembi', 'S13/15331/16', 'S13/15331/16', 'Blood Bank Management System', 'bb88917e7220207f98736641e11c52d9'),
(3, 'Smith Ouma', 'S13/15359/16', 'S13/15359/16', 'Automatic Answer Checker System.', '553ca795a87c1cac01fb566be1b1577e'),
(4, 'Brentone Alister', 'S13/15358/16', 'S13/15358/16', 'Artificial Intelligence', '553ca795a87c1cac01fb566be1b1577e'),
(5, 'Zack Ogoma', 'S13/15356/16', 'S13/1356/16', 'Fish Farm Management', '553ca795a87c1cac01fb566be1b1577e'),
(6, 'Samson Mutangili', 'S13/15317/16', 'S13/15317/16', 'School Management System', '553ca795a87c1cac01fb566be1b1577e'),
(7, 'Anthony Kipkemboi', 'S13/15330/16', 'S13/15330/16', 'Online Course Application', '553ca795a87c1cac01fb566be1b1577e'),
(8, 'Lorna Maina', 'S13/15316/16', 'S13/15316/16', 'Road Construction Management', '553ca795a87c1cac01fb566be1b1577e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `student_name` varchar(100) NOT NULL,
  `student_reg_no` varchar(100) NOT NULL,
  `project_title` varchar(100) NOT NULL,
  `lecturer_username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `student_name`, `student_reg_no`, `project_title`, `lecturer_username`) VALUES
(1, 'Jackline Mboya', 'S13/15357/16', 'Students Systems Projects Management Systems', '3457'),
(2, 'Victor Musembi', 'S13/15331/16', 'Blood Bank Management System', '3457'),
(3, 'Smith Ouma', 'S13/15359/16', 'Automatic Answer Checker System.', '3458'),
(4, 'Brentone Alister', 'S13/15358/16', 'Artificial Intelligence', '3460'),
(5, 'Samson Mutangili', 'S13/15317/16', 'School Management System', '3457'),
(6, 'Anthony Kipkemboi', 'S13/15330/16', 'Online Course Application', '3458');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`staffno`,`username`);

--
-- Indexes for table `journal`
--
ALTER TABLE `journal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer_details`
--
ALTER TABLE `lecturer_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `staff_no` (`staff_no`,`username`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`project_id`),
  ADD UNIQUE KEY `student_reg_no` (`student_reg_no`,`project_title`);

--
-- Indexes for table `project_document`
--
ALTER TABLE `project_document`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`document_id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_reg_no` (`student_reg_no`,`username`,`project_title`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_id` (`user_id`),
  ADD UNIQUE KEY `student_reg_no` (`student_reg_no`,`project_title`),
  ADD UNIQUE KEY `student_name` (`student_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `journal`
--
ALTER TABLE `journal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lecturer_details`
--
ALTER TABLE `lecturer_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_document`
--
ALTER TABLE `project_document`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
