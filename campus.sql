-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 08:02 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `campus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `Name`, `email`, `username`, `password`) VALUES
(1, 'Admin12', 'admin@gmail.com', 'admin', '12345'),
(2, 'Tilak', 'Tat@gmail.com', 'abc', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `apply_job_post`
--

CREATE TABLE `apply_job_post` (
  `id_apply` int(11) NOT NULL,
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `PRN` varchar(30) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `apply_job_post`
--

INSERT INTO `apply_job_post` (`id_apply`, `id_jobpost`, `id_company`, `PRN`, `status`) VALUES
(7, 14, 7, '2046491245055', 0),
(5, 12, 7, '2046491245055', 2),
(6, 14, 7, '223761326548743', 1);

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `bid` varchar(20) NOT NULL,
  `bname` varchar(30) DEFAULT NULL,
  `branch` text DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `sec` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`bid`, `bname`, `branch`, `year`, `sec`) VALUES
('c24', 'civil2024', 'Civil', 2024, 'A'),
('cse2024', 'Computer2024', 'Computer Engineering', 2024, 'A'),
('me2024', 'Mechanical2024', 'Mechanical Engineering', 2024, 'A');

-- --------------------------------------------------------

--
-- Stand-in structure for view `batch_view`
-- (See below for the actual view)
--
CREATE TABLE `batch_view` (
`bname` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `batch_view1`
-- (See below for the actual view)
--
CREATE TABLE `batch_view1` (
`bname` varchar(30)
);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `headofficecity` varchar(255) NOT NULL,
  `contactno` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `companytype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id_company`, `companyname`, `headofficecity`, `contactno`, `website`, `companytype`, `email`, `password`, `createdAt`) VALUES
(6, 'ABC', 'Delhi', '', 'www.google.com', 'Startup', 'talwekar@gmail.com', '12345', '2023-04-20 16:07:57'),
(7, 'DRF', 'Mumbai', '', 'www.Googl.com', 'Service Based', 'tatalwekar@gmail.com', '12345', '2023-04-20 16:10:31');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE `job_post` (
  `id_jobpost` int(11) NOT NULL,
  `id_company` int(11) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `minimumsalary` varchar(255) NOT NULL,
  `maximumsalary` varchar(255) NOT NULL,
  `vacancy` bigint(255) DEFAULT NULL,
  `qualification` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`id_jobpost`, `id_company`, `jobtitle`, `description`, `minimumsalary`, `maximumsalary`, `vacancy`, `qualification`, `createdAt`) VALUES
(12, 7, 'Web Developer', '  Description:\r\nWe are seeking a skilled and experienced Web Developer to join our team. As a Web Developer, you will be responsible for designing, developing, and maintaining responsive and user-friendly websites. You will collaborate with cross-functional teams to understand project requirements and translate them into well-structured and efficient code. Your expertise in front-end and back-end web development will be crucial in delivering high-quality websites that meet client needs and adhere to industry best practices.\r\n\r\nResponsibilities:\r\n\r\nDevelop and maintain websites using HTML, CSS, JavaScript, and PHP.\r\nImplement responsive designs and ensure cross-browser compatibility.\r\nCollaborate with designers to translate visual concepts into functional websites.\r\nCreate and optimize database structures and queries for efficient data management.\r\nIntegrate third-party APIs and libraries as needed.\r\nPerform testing and debugging to ensure proper functionality and identify any issues.\r\nStay updated with the latest web development trends and technologies.\r\nTroubleshoot and resolve any website performance or functionality issues.\r\nCollaborate with cross-functional teams to understand project requirements and deliver projects on time.\r\nProvide technical guidance and support to team members when needed.  ', '20000', '30000', 203, 'BTech', '2023-05-28 09:23:09'),
(14, 7, 'Full Stack Developer', 'Abxbxsdaaaaaagjhhfa', '50000', '60000', 100, 'Any qualification', '2023-05-28 18:18:12'),
(15, 7, 'Web Developer 2.0', 'Abdhjh', '12', '13', 200, 'Btech', '2023-05-29 08:20:53');

-- --------------------------------------------------------

--
-- Table structure for table `superadmin`
--

CREATE TABLE `superadmin` (
  `id_sadmin` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `superadmin`
--

INSERT INTO `superadmin` (`id_sadmin`, `username`, `password`) VALUES
(1, 'superadmin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `PRN` varchar(30) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `CGPA` double DEFAULT NULL,
  `address` text DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `contactno` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `stream` varchar(255) DEFAULT NULL,
  `passingyear` varchar(255) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `bid` varchar(20) DEFAULT NULL,
  `resume` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`PRN`, `firstname`, `lastname`, `email`, `password`, `CGPA`, `address`, `city`, `state`, `contactno`, `qualification`, `stream`, `passingyear`, `dob`, `age`, `bid`, `resume`) VALUES
('2046491245039', NULL, NULL, 'a5524bc@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c24', NULL),
('20461656854', NULL, NULL, 'efewawg@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c24', NULL),
('2046491245011', NULL, NULL, 'co.2020.cadhatrak@bitwardha.ac.in', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'c24', NULL),
('2738190920932', NULL, NULL, 'abc@gmail.com', '12345', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cse2024', NULL),
('223761326548743', NULL, NULL, 'abcd@gmail.com', '123456', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'cse2024', '64737c7a16dcb.docx'),
('2046491245055', 'Tilak', 'Talwekar', 'Tilaktalwekar@gmail.com', '12345', 8, 'Laxminagar,Wardha', 'Wardha', 'Maharashtra', '1234567893', 'BTech', 'Computer Engineering', '2024-08-15', '2001-11-15', '20', 'cse2024', '64f80aaf3f8c2.docx');

-- --------------------------------------------------------

--
-- Structure for view `batch_view`
--
DROP TABLE IF EXISTS `batch_view`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `batch_view`  AS SELECT `batch`.`bname` AS `bname` FROM `batch` WHERE `batch`.`bid` = 'cse2024''cse2024'  ;

-- --------------------------------------------------------

--
-- Structure for view `batch_view1`
--
DROP TABLE IF EXISTS `batch_view1`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `batch_view1`  AS SELECT `batch`.`bname` AS `bname` FROM `batch` WHERE `batch`.`bid` = 'cse2024''cse2024'  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  ADD PRIMARY KEY (`id_apply`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id_company`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_post`
--
ALTER TABLE `job_post`
  ADD PRIMARY KEY (`id_jobpost`);

--
-- Indexes for table `superadmin`
--
ALTER TABLE `superadmin`
  ADD PRIMARY KEY (`id_sadmin`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`PRN`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `apply_job_post`
--
ALTER TABLE `apply_job_post`
  MODIFY `id_apply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id_company` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `job_post`
--
ALTER TABLE `job_post`
  MODIFY `id_jobpost` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
