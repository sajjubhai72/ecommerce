-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2023 at 06:16 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'Tanner Castillo', 'lycawyk@mailinator.com', 'Reiciendis fugit si', 'Accusamus ex incidid'),
(3, 'Sajjad Ansari', 'quqaqure@mailinator.com', 'Motivation', 'main aap se bahut mohabbat karta hu. Aap wakai me bahut khubsurat hai.......'),
(4, 'Ocean Cote', 'gugolujet@mailinator.com', 'Consequatur Aliquip', 'Obcaecati rerum adip'),
(5, 'Jocelyn Harrington', 'pyrajosa@mailinator.com', 'Ea voluptatum vel au', 'Cum provident magna');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `published_date` date NOT NULL,
  `title` varchar(100) NOT NULL,
  `file` blob NOT NULL,
  `publisher` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `published_date`, `title`, `file`, `publisher`) VALUES
(17, '2023-09-22', 'public', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f437962657220536563757269747920536f6c7574696f6e2e706466, 'sajjad'),
(18, '2023-09-24', 'abscd', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f44424d532e646f6378, 'sajjad'),
(19, '2023-09-24', 'bbbb', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f437962657220536563757269747920536f6c7574696f6e2e706466, 'sajjad'),
(20, '2023-09-24', 'public data', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f456c656374726f6e69632d636f6d706f6e656e74732e706466, 'sajjad'),
(21, '2023-09-24', 'hamro data', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f5265706f72742074656d706c6174652e706466, 'sajjad'),
(22, '2023-09-26', 'results published ', 0x433a78616d70706874646f6373534d532050726f6a65637464617368626f6172642f2e2e2f6e6f746963655f75706c6f6164732f46696e616c5f48616e64736f75742e706466, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'Karyn Larson', 'Karleigh Booker', 'quqaqure@mailinator.com', '$2y$10$uTAlOx/vGooWVgn12bu/wOoD.v3cEfbxnT06WVtPwqw0Tt.4Hc.te');

-- --------------------------------------------------------

--
-- Table structure for table `tblquery`
--

CREATE TABLE `tblquery` (
  `id` int(11) NOT NULL,
  `teacherId` int(11) DEFAULT NULL,
  `fName` varchar(200) DEFAULT NULL,
  `emailId` varchar(200) DEFAULT NULL,
  `mobileNumber` bigint(10) DEFAULT NULL,
  `Query` mediumtext DEFAULT NULL,
  `queryDate` timestamp NULL DEFAULT current_timestamp(),
  `teacherNote` mediumtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblquery`
--

INSERT INTO `tblquery` (`id`, `teacherId`, `fName`, `emailId`, `mobileNumber`, `Query`, `queryDate`, `teacherNote`) VALUES
(2, 1, 'Amit Kumar', 'amitk43@gmail.com', 1122336655, 'This is for testing purpose. Test Query', '2022-03-12 10:03:49', 'This is for testing. Test notes'),
(3, 3, 'Sanjeev', 'sanjeev@gmail.com', 4758963214, 'Test query', '2022-03-14 17:03:03', 'Test notes');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubjects`
--

CREATE TABLE `tblsubjects` (
  `ID` int(10) NOT NULL,
  `Subject` varchar(120) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblsubjects`
--

INSERT INTO `tblsubjects` (`ID`, `Subject`, `CreationDate`) VALUES
(3, 'Chemistry', '2019-10-07 06:11:32'),
(6, 'English', '2019-10-07 06:11:56'),
(7, 'Science', '2019-10-07 06:12:06'),
(8, 'Social', '2019-10-07 06:12:19'),
(16, 'Opt Math', '2023-09-25 01:10:36'),
(17, 'Physics', '2023-09-25 04:42:04');

-- --------------------------------------------------------

--
-- Table structure for table `tblteacher`
--

CREATE TABLE `tblteacher` (
  `ID` int(10) NOT NULL,
  `Name` varchar(120) DEFAULT NULL,
  `Picture` varchar(200) NOT NULL,
  `Email` varchar(120) DEFAULT NULL,
  `MobileNumber` bigint(10) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Qualifications` varchar(120) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `TeacherSub` varchar(120) DEFAULT NULL,
  `description` mediumtext DEFAULT NULL,
  `teachingExp` varchar(10) DEFAULT NULL,
  `JoiningDate` varchar(120) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `isPublic` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tblteacher`
--

INSERT INTO `tblteacher` (`ID`, `Name`, `Picture`, `Email`, `MobileNumber`, `password`, `Qualifications`, `Address`, `TeacherSub`, `description`, `teachingExp`, `JoiningDate`, `RegDate`, `isPublic`) VALUES
(1, 'Manish Rai', '3f8c74e175d8fe46e5ead5d069eb65131695716252.png', 'manishrai@gmail.com', 9812364898, '5c428d8875d2948607f3e3fe134d71b4', 'D.Com', 'H 343 Wisdom Society Noida 20301', 'Chemistry', 'NA', '5', '2022-01-01', '2022-03-05 12:41:37', 1),
(3, 'Shishir Yakkha', '26af1dde480b959b3b56beea943e56f81695632735jpeg', 'shishiryekkha@gmail.com', 9865421376, 'f925916e2754e5e03f75dd58a5733251', 'BSC', 'abcdefghijk', 'Science', 'I have 10 year exp in chemistry', '10', '2022-02-08', '2022-03-14 17:01:04', 1),
(5, 'sajjad Ansari', '3100dd7014b6dc7fd39ab50a00f82cac1695617357jpeg', 'quqaqure@mailinator.com', 9817316003, NULL, '+2', 'HArinagar-06', 'Opt Math', 'adfsfsdkgjsklgjskl', '2', '2023-09-06', '2023-09-25 04:49:17', 1),
(6, 'sajjad Ansari', '3100dd7014b6dc7fd39ab50a00f82cac1695632356jpeg', 'saaajjjjj@gmail.com', 980000000, NULL, '+2', 'hahahahha', 'English', 'anythings', '2', '2023-09-02', '2023-09-25 08:59:16', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblquery`
--
ALTER TABLE `tblquery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tid` (`teacherId`);

--
-- Indexes for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Subject` (`Subject`);

--
-- Indexes for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `subname` (`TeacherSub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblquery`
--
ALTER TABLE `tblquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tblsubjects`
--
ALTER TABLE `tblsubjects`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tblteacher`
--
ALTER TABLE `tblteacher`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblquery`
--
ALTER TABLE `tblquery`
  ADD CONSTRAINT `tid` FOREIGN KEY (`teacherId`) REFERENCES `tblteacher` (`ID`);

--
-- Constraints for table `tblteacher`
--
ALTER TABLE `tblteacher`
  ADD CONSTRAINT `subname` FOREIGN KEY (`TeacherSub`) REFERENCES `tblsubjects` (`Subject`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
