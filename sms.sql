-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2017 at 02:20 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sms`
--

-- --------------------------------------------------------

--
-- Table structure for table `ar_acedemic`
--

CREATE TABLE `ar_acedemic` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `research` varchar(50) NOT NULL,
  `courses` varchar(30) NOT NULL,
  `awards` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ar_acedemic`
--

INSERT INTO `ar_acedemic` (`id`, `username`, `first_name`, `last_name`, `gender`, `dob`, `telephone`, `email`, `education`, `research`, `courses`, `awards`) VALUES
(123456, 'mohan@gmail.com', 'thilakarathne', 'mohan', 'male', '1994-10-03', '0776709705', 'mohan@gamil.com', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `caa_academic`
--

CREATE TABLE `caa_academic` (
  `caa_id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `education` varchar(50) NOT NULL,
  `research` varchar(50) NOT NULL,
  `courses` varchar(30) NOT NULL,
  `awards` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `caa_academic`
--

INSERT INTO `caa_academic` (`caa_id`, `username`, `first_name`, `last_name`, `gender`, `dob`, `telephone`, `email`, `education`, `research`, `courses`, `awards`) VALUES
(123123, 'arafa@gmail.com', 'Arafa', 'Nihar', 'Female', '1995-06-06', '0769080868', 'arafanihar101@gmail.com', 'B. Sc in Information Systems', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `course_code` varchar(45) DEFAULT NULL,
  `course_year` varchar(45) DEFAULT NULL,
  `credits` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `lect_username` varchar(255) NOT NULL,
  `semester` varchar(255) NOT NULL,
  `c_type` varchar(255) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `course_year`, `credits`, `description`, `lect_username`, `semester`, `c_type`, `year`) VALUES
(1, 'Software enginering', 'SCS1101', '1', '2', NULL, 'l1', '1', 'm', '2016'),
(2, 'database', 'SCS1102', '1', '1', NULL, '33', '1', 'm', '2016');

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE `degree` (
  `degree_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `start_year` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree`
--

INSERT INTO `degree` (`degree_id`, `name`, `duration`, `description`, `start_year`) VALUES
(1, 'computer science(B.sc)', '3 years', NULL, '2002'),
(2, 'Information System(B.sc)', '3 years', NULL, '2002');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eventdate` varchar(20) NOT NULL,
  `eventtitle` varchar(100) NOT NULL,
  `eventdes` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eventdate`, `eventtitle`, `eventdes`) VALUES
('0000-00-00', 'vacation', 'Event Description'),
('12/08/2017', 'iygjuh', 'Event Description');

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(11) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `janitor` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `last_edited`
--

CREATE TABLE `last_edited` (
  `id` int(5) NOT NULL,
  `course_code` varchar(20) NOT NULL,
  `course_year` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `edited_user_name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `last_edited`
--

INSERT INTO `last_edited` (`id`, `course_code`, `course_year`, `type`, `edited_user_name`) VALUES
(1, 'SCS1101', '2015', 'final_result', '''l1'''),
(2, 'SCS1101', '2016', 'assignment_result', '''l1''');

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

CREATE TABLE `lecturer` (
  `id` int(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `telephone` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `education` varchar(50) NOT NULL,
  `research` varchar(50) NOT NULL,
  `courses` varchar(30) NOT NULL,
  `awards` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lecturer`
--

INSERT INTO `lecturer` (`id`, `username`, `first_name`, `last_name`, `gender`, `dob`, `telephone`, `email`, `education`, `research`, `courses`, `awards`) VALUES
(33, 'john01', 'John', 'Ward', 'male', '2017-10-03', '0771234567', 'a@gmail.com', 'BSc (Col),MSc (Swansea),PhD(Cardiff)', 'Multidatabase & Knowledgebases', 'SCS 2109 Database II', 'Not included yet'),
(34, 'l1', 'K.P.M.K.', 'Silva', 'male', '2016-07-20', '0777873108', 'mks@ucsc.cmb.ac.lk', 'BSc', 'Computer', 'Theory', 'Not');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `scol_id` int(11) NOT NULL,
  `type` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scol_id`, `type`) VALUES
(1, 'mahapola'),
(2, 'bursary'),
(3, 'other');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` int(11) NOT NULL,
  `type` varchar(45) NOT NULL,
  `contact` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
  `id` int(22) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`id`, `fname`, `lname`, `gender`) VALUES
(106, 'student1', 'male', 'slastname'),
(107, 'student2', 'male', 'slastname'),
(108, 'student3', 'male', 'slastname'),
(109, 'student4', 'female', 'slastname'),
(110, 'student5', 'female', 'slastname'),
(111, 'student6', 'male', '');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `mid_name` varchar(255) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `school` varchar(45) NOT NULL,
  `birthdate` varchar(45) NOT NULL,
  `race` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `reg_date` varchar(45) NOT NULL,
  `out_date` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `stu_image` varchar(50) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `index_no` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `first_name`, `mid_name`, `last_name`, `school`, `birthdate`, `race`, `religion`, `reg_date`, `out_date`, `gender`, `stu_image`, `nic`, `index_no`) VALUES
(1, 'Kasun', '', 'Dissanayake', 'Royal College', '1994-05-23', 'Sinhalese', 'Buddhist', '2015-02-10', '', 'male', '../view/images/profile_pic/941440754V.jpg', '941440754V', '15000371'),
(2, 'Pasan', '', 'Basuru', 'Mahanama College', '1994-08-26', 'Sinhalese', 'Buddhist', '2015-02-10', '', 'male', '../view/images/profile_pic/941440755V.jpg', '324234', '15000372'),
(3, 'Mohan', '', 'Anuradha', 'Hanwella Rgasinhala College', '1994-04-12', 'Sinhalese', 'Buddhist', '2015-02-10', '', 'male', '../view/images/profile_pic/34234.jpg', '34234', '15000373'),
(4, 'Kasuni', '', 'Assalarachchi', 'Anuradhapura Central College', '1995-03-11', 'Sinhalese', 'Buddhist', '2015-02-10', '', 'female', '../view/images/profile_pic/4.jpg', '453', '15000374'),
(5, 'Panduka', '', 'Liyanathanthri', 'Royal College', '1994-05-23', 'Sinhalese', 'Buddhist', '2015-02-10', '', 'male', '../view/images/profile_pic/5.jpg', '2423423', '15000375');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `s_id` varchar(20) NOT NULL,
  `number_` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  `p_code` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address`
--

INSERT INTO `student_address` (`s_id`, `number_`, `street`, `town`, `p_code`) VALUES
('001', '12/A,', 'Galle Road,', 'Panadura', ''),
('002', 'No 1,', 'Main Road,', 'Kelaniya', ''),
('003', '23/AB,', 'De Silva Rd,', 'Salawa', ''),
('004', 'No 5,', 'Main Road,', 'Anuradhapura', ''),
('005', '9/B,', 'Silva Rd,', 'Homagama.', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_contact`
--

CREATE TABLE `student_contact` (
  `contact1` varchar(45) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `s_id` varchar(11) NOT NULL,
  `emg_contact` varchar(45) DEFAULT NULL,
  `emg_person` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_contact`
--

INSERT INTO `student_contact` (`contact1`, `contact2`, `s_id`, `emg_contact`, `emg_person`) VALUES
('0382256455', '0711545558', '001', '0382256455', 'Mother'),
('0115548569', '0725584555', '002', '0115548569', 'Father'),
('0115546587', '0725634558', '003', '0115546587', 'Mother'),
('0812545698', '0711645558', '004', '0812545698', 'Mother'),
('0112254569', '0711655558', '005', '0112254569', 'Mother'),
('0115448566', '0711655584', '007', '0115448566', 'Father');

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `s_id` varchar(20) NOT NULL,
  `course_id` varchar(11) NOT NULL,
  `exam_grade` varchar(45) DEFAULT NULL,
  `assignment_grade` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `attendance` varchar(45) DEFAULT NULL,
  `attempt` int(5) NOT NULL,
  `year` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`s_id`, `course_id`, `exam_grade`, `assignment_grade`, `start_date`, `end_date`, `attendance`, `attempt`, `year`) VALUES
('001', 'SCS1101', 'A+', 'A-', NULL, NULL, NULL, 1, '2016'),
('002', 'SCS1101', 'B+', 'B-', NULL, NULL, NULL, 1, '2016'),
('003', 'SCS1101', 'C+', 'C-', NULL, NULL, NULL, 1, '2016');

-- --------------------------------------------------------

--
-- Table structure for table `student_degree`
--

CREATE TABLE `student_degree` (
  `s_id` varchar(20) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_family`
--

CREATE TABLE `student_family` (
  `s_id` varchar(20) NOT NULL,
  `father_name` varchar(45) DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `spouse` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_hostel`
--

CREATE TABLE `student_hostel` (
  `s_id` varchar(20) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_scholar`
--

CREATE TABLE `student_scholar` (
  `s_id` varchar(20) NOT NULL,
  `schol_id` int(1) NOT NULL,
  `schol_amount` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_scholar`
--

INSERT INTO `student_scholar` (`s_id`, `schol_id`, `schol_amount`) VALUES
('002', 1, '5000'),
('003', 2, '3000'),
('004', 1, '6000'),
('005', 3, '4000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `type` varchar(255) NOT NULL,
  `nic` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `type`, `nic`) VALUES
(33, 'basurupasan@gmail.com', '$2y$12$gGNIqrD/GIdm6JdbVevvsekRzeEH0NJk4oe26N4BWKVAk9CBJvZmG', 'anga', 'angathan', 'admin', NULL),
(34, 'l1', '$2y$12$WJ.ccZX/gQ5J7sTPm1hCRu7VoGpJ8BvJgY0wB.9i3qFbNDQoIx8Km', 'K.P.M.K.', 'Silva', 'lecturer', '111111111'),
(37, 'a2', '$2y$12$XdW/K5vRiNfLcPVR8xhj6uzIDyKuqSPDmmLZq1ajOQIWtyIxVrzKu', '', '', 'admin', NULL),
(38, 's1', '$2y$12$Zio8FQrdadoGJw1mDYALze9O13VIwtiXsqpgaegjwrrEJtnKWRgYS', '', '', 'student', NULL),
(39, 's2', '$2y$12$8Auu4gLKTAYRRZvqm8uSzehiS7SvgDkEQqXR9dvcB8A3NP0oYmJCy', '', '', 'student', NULL),
(40, 'SAR', '$2y$12$DlQc0sWW8vRc0SZw1tBSeObR4hBFBf3LuRCu/8TbrhveyLmx1Vgde', 'kasuni', 'kassa', 'SAR_examin', '1234567895'),
(42, 'student1', '$2y$12$PbYjaQQe50tfrMGsXq48z.Xu1Jkwuyd4IGUjhr1ivGn85sTZjwV5y', '', '', 'student', NULL),
(43, 'JacintaRCarpenter@armyspy.com', '$2y$12$c0XDXprJhW7jU9OunYV3MuIO.z8VIDkfUAXptn.WLbpprlmzNWzCm', '', '', 'student', NULL),
(45, '001', '$2y$12$E8cIy3Aa3KrGGxPsNQUC0OurefWWeZWnGICp8dkR.n6HoTJMyYdVq', '', '', 'student', NULL),
(46, '002', '$2y$12$bZBhQRP5r9KduKqzwKf3HuFzRm0uTXwW7XSo2ol.yp4l3uOM2FGZq', '', '', 'student', NULL),
(47, '003', '$2y$12$bjgTnV1UIaFQU.LoLD8rdu7JXiceVFL8uI0bwHAYPEG.yp13V.SzK', '', '', 'student', NULL),
(48, 'e', '$2y$12$4easLKnzbT5fZR3sHzIFzejV/7Bcnys73QDBOJg9Q9S1PXW7J9f/W', '', '', 'staff', NULL),
(49, 'aca1', '$2y$12$pqvpk4FvbCiXOBEN0sIFtehD6ai6TPIG2uzs1AoEx3fOXj3/y6qHq', '', '', 'ar', NULL),
(50, 'mks', 'mks', '', '', 'lecturer', '995486251'),
(123456, 'anuradha', '$2y$12$WJ.ccZX/gQ5J7sTPm1hCRu7VoGpJ8BvJgY0wB.9i3qFbNDQoIx8Km', 'anuradha', 'thilakarathne', 'ar_acedemic', '942770405'),
(123458, 'sar1', '$2y$12$J7lZui/zh.77ywYLdqYLA.3zcvVndxYC2TwSIkZyB6ghcMMC99tzS', '', '', 'SAR_exam', '12312312'),
(123459, 'kasun@gmail.com', '$2y$12$q00eIy0XgyOtSSloSKSsD.Tjv1nyWOToPSihvI2sJtuB3isUbYFei', 'Kasuni', 'Dissanayake', '', '923453456V'),
(123460, 'kp@gmail.com', '123', 'Kasun', 'Dissanayake', 'student', '941440754V'),
(123461, 'kpdissanayake@gmail.com', '123', 'Kasun', 'Silva', 'student', '94144'),
(123462, 'arafa@gmail.com', '$2y$12$sOCTLrrh.h7GJzdgsliL8uGFZd8RnQxn38IHp/XJOQ68LBFLs4qqO', 'arafa', 'aa', 'caa_academic', '44'),
(123463, 'mohan@gmail.com', '$2y$12$pHEGiC47KynCx0KOioopFeloPKkzuS7qKkiGTfwjiXuOfa5PayD2O', 'mohan', 'dasd', 'ar_acedemic', '456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_acedemic`
--
ALTER TABLE `ar_acedemic`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `caa_academic`
--
ALTER TABLE `caa_academic`
  ADD PRIMARY KEY (`caa_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `lect_id` (`lect_username`);

--
-- Indexes for table `degree`
--
ALTER TABLE `degree`
  ADD PRIMARY KEY (`degree_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eventdate`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `last_edited`
--
ALTER TABLE `last_edited`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturer`
--
ALTER TABLE `lecturer`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `scholarship`
--
ALTER TABLE `scholarship`
  ADD PRIMARY KEY (`scol_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fname` (`fname`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `nic` (`nic`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student_address`
--
ALTER TABLE `student_address`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student_contact`
--
ALTER TABLE `student_contact`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`s_id`,`course_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student_degree`
--
ALTER TABLE `student_degree`
  ADD PRIMARY KEY (`s_id`,`degree_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `degree_id` (`degree_id`);

--
-- Indexes for table `student_family`
--
ALTER TABLE `student_family`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `student_hostel`
--
ALTER TABLE `student_hostel`
  ADD PRIMARY KEY (`s_id`,`hostel_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `hostel_id` (`hostel_id`);

--
-- Indexes for table `student_scholar`
--
ALTER TABLE `student_scholar`
  ADD PRIMARY KEY (`s_id`,`schol_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `scol_id` (`schol_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `last_edited`
--
ALTER TABLE `last_edited`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `scol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `stu`
--
ALTER TABLE `stu`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123464;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
