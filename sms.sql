-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2017 at 08:45 PM
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
(123456, 'anuradha', 'thilakarathne', 'mohan', 'male', '1994-10-03', '0776709705', 'mohan@gamil.com', '', '', '', '');

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
  `lect_username` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_code`, `course_year`, `credits`, `description`, `lect_username`) VALUES
(1, 'Software enginering', 'SCS1101', '2014/2015', '2', NULL, 'l1'),
(2, 'database', 'SCS1102', '2015/2016', '1', NULL, '123457');

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
(1, 'SCS1101', '2014/2015', 'final_result', '''l1'''),
(2, 'SCS1101', '2015/2016', 'assignment_result', '''l1''');

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
(34, 'l1', 'K.P.M.K.', 'Silva', 'Male', '2016-07-20', '0714576125', 'mks@ucsc.cmb.ac.lk', 'BSc - Computer Science Special (Colombo) 1992', 'Computer Hardware and Systems', 'Theory of Computing', 'Not included yet');

-- --------------------------------------------------------

--
-- Table structure for table `scholarship`
--

CREATE TABLE `scholarship` (
  `scol_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `indexno` varchar(45) DEFAULT NULL,
  `course` varchar(20) NOT NULL,
  `schol_type` varchar(40) NOT NULL,
  `schol_amount` int(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scholarship`
--

INSERT INTO `scholarship` (`scol_id`, `name`, `indexno`, `course`, `schol_type`, `schol_amount`) VALUES
(1, 'arafa', '123', 'IS', 'Mahapola', 5000),
(2, 'fathima', '456', 'CS', 'Bursary', 10000),
(3, 'angathan', '7895', 'CS', 'Mahapola', 5000),
(4, 'zahra', '141', 'CS', 'Mahapola', 5000),
(5, 'De soyza', '7895', 'IS', 'Bursary', 5000),
(8, 'angathan', '7895', 'CS', 'Mahapola', 5000);

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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` varchar(20) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `last_login` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `school` varchar(45) NOT NULL,
  `birthdate` varchar(45) NOT NULL,
  `race` varchar(45) NOT NULL,
  `religion` varchar(45) NOT NULL,
  `reg_date` varchar(45) NOT NULL,
  `out_date` varchar(45) NOT NULL,
  `active` int(11) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `stu_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `first_name`, `last_name`, `last_login`, `area`, `school`, `birthdate`, `race`, `religion`, `reg_date`, `out_date`, `active`, `gender`, `stu_image`) VALUES
('002', 'Pasan', 'Basuru', '2017-08-13 11:36:47', 'Kelaniya', 'Mahanama College', '1994-08-26', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/002.jpg'),
('003', 'Mohan', 'Anuradha', '2017-08-25 16:10:11', 'Salawa', 'Hanwella Rgasinhala College', '1994-04-12', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/003.jpg'),
('004', 'Kasuni', 'Assalarachchi', '2017-08-13 11:28:21', 'Anuradhapura', 'Anuradhapura Central College', '1995-03-11', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'female', '../view/images/profile_pic/004.jpg'),
('005', 'Panduka', 'Liyanathanthri', '', 'Homagama', 'Royal College', '1994-05-23', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/005.jpg'),
('007', 'Wasura', 'Waththe', '', 'Moratuwa', 'St Peters', '08/28/2017', 'Sinhalese', 'Buddhist', '08/29/2017', '08/09/2017', 0, 'female', '../view/images/profile_pic/007.jpg'),
('admin_A', 'AAA', 'BB', '', '', '', '', '', '', '', '', 0, '', ''),
('araffa', 'araffa', 'nn', '', '', '', '', '', '', '', '', 0, '', ''),
('kamal', 'kamal', 'kannan', '', '', '', '', '', '', '', '', 0, '', ''),
('sinthu', 'sinthu', 'nesan', '', '', '', '', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

CREATE TABLE `student_address` (
  `s_id` varchar(20) NOT NULL,
  `number` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_address`
--

INSERT INTO `student_address` (`s_id`, `number`, `street`, `town`) VALUES
('001', '12/A,', 'Galle Road,', 'Panadura'),
('002', 'No 1,', 'Main Road,', 'Kelaniya'),
('003', '23/AB,', 'De Silva Rd,', 'Salawa'),
('004', 'No 5,', 'Main Road,', 'Anuradhapura'),
('005', '9/B,', 'Silva Rd,', 'Homagama.');

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
  `year` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`s_id`, `course_id`, `exam_grade`, `assignment_grade`, `start_date`, `end_date`, `attendance`, `year`) VALUES
('001', 'SCS1101', 'A', 'A', NULL, NULL, NULL, '2015/2016'),
('002', 'SCS1101', 'C', 'C', NULL, NULL, NULL, '2015/2016'),
('003', 'SCS1101', 'A', 'A', NULL, NULL, NULL, '2014/2015');

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
  `scol_id` int(1) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

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
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `nic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `first_name`, `last_name`, `email`, `type`, `nic`) VALUES
(33, 'a', '$2y$12$gGNIqrD/GIdm6JdbVevvsekRzeEH0NJk4oe26N4BWKVAk9CBJvZmG', 'anga', 'angathan', NULL, 'admin', NULL),
(34, 'l1', '$2y$12$WJ.ccZX/gQ5J7sTPm1hCRu7VoGpJ8BvJgY0wB.9i3qFbNDQoIx8Km', 'K.P.M.K.', 'Silva', 'mks@ucsc.cmb.ac.lk', 'lecturer', 111111111),
(35, 'a1', '$2y$12$V6Frmy8B3QsD/cY2A5dxe.uEYatfLESri5S7G9AoHPjO3U.BUXTh2', '', '', NULL, 'admin', NULL),
(37, 'a2', '$2y$12$XdW/K5vRiNfLcPVR8xhj6uzIDyKuqSPDmmLZq1ajOQIWtyIxVrzKu', '', '', NULL, 'admin', NULL),
(38, 's1', '$2y$12$Zio8FQrdadoGJw1mDYALze9O13VIwtiXsqpgaegjwrrEJtnKWRgYS', '', '', NULL, 'student', NULL),
(39, 's2', '$2y$12$8Auu4gLKTAYRRZvqm8uSzehiS7SvgDkEQqXR9dvcB8A3NP0oYmJCy', '', '', NULL, 'student', NULL),
(40, 'SAR', '$2y$12$DlQc0sWW8vRc0SZw1tBSeObR4hBFBf3LuRCu/8TbrhveyLmx1Vgde', 'kasuni', 'kassa', 'asas@gmail.com', 'SAR_examin', 1234567895),
(41, 'caa', '$2y$12$kuCGs4HQ6ptnjn.beFKdBOtaXNK8RFtBehX6rJ8KwdQCEoM6l9w7a', 'araffa', 'fathima', 'aaa@gmail.com', 'caa_academic', 954621420),
(42, 'student1', '$2y$12$PbYjaQQe50tfrMGsXq48z.Xu1Jkwuyd4IGUjhr1ivGn85sTZjwV5y', '', '', NULL, 'student', NULL),
(43, 'JacintaRCarpenter@armyspy.com', '$2y$12$c0XDXprJhW7jU9OunYV3MuIO.z8VIDkfUAXptn.WLbpprlmzNWzCm', '', '', NULL, 'student', NULL),
(44, '', '$2y$12$FPLDakoNXuDax1V6KzWeI.Q2IzMTt3WRDDeuNlKkXMwnzCnC4QMuG', '', '', NULL, '', NULL),
(45, '001', '$2y$12$E8cIy3Aa3KrGGxPsNQUC0OurefWWeZWnGICp8dkR.n6HoTJMyYdVq', '', '', NULL, 'student', NULL),
(46, '002', '$2y$12$bZBhQRP5r9KduKqzwKf3HuFzRm0uTXwW7XSo2ol.yp4l3uOM2FGZq', '', '', NULL, 'student', NULL),
(47, '003', '$2y$12$bjgTnV1UIaFQU.LoLD8rdu7JXiceVFL8uI0bwHAYPEG.yp13V.SzK', '', '', NULL, 'student', NULL),
(48, 'e', '$2y$12$4easLKnzbT5fZR3sHzIFzejV/7Bcnys73QDBOJg9Q9S1PXW7J9f/W', '', '', NULL, 'staff', NULL),
(49, 'aca1', '$2y$12$pqvpk4FvbCiXOBEN0sIFtehD6ai6TPIG2uzs1AoEx3fOXj3/y6qHq', '', '', NULL, 'ar', NULL),
(50, 'mks', 'mks', '', '', 'mks@ucsc.cmb.ac.lk', 'lecturer', 995486251),
(123456, 'anuradha', '$2y$12$WJ.ccZX/gQ5J7sTPm1hCRu7VoGpJ8BvJgY0wB.9i3qFbNDQoIx8Km', 'anuradha', 'thilakarathne', 'anuradha@gmail.com', 'ar_acedemic', 942770405),
(123457, 'kamal', '$2y$12$OJwo2.p.9ECTpg7gCH3OweMmZURhRiyPdc/Zfk0fae9wfYjfFO0pm', 'kamal', 'kannan', 'a@gmail.com', 'lecturer', 942452110),
(123458, 'sinthu', '$2y$12$7ZBhmjlBDehX.BjD6wojhuP6qECq122ZCOVa5Q5rt.cXn7K8uS0r.', 'sinthu', 'nesan', 'b@gmail.com', 'lecturer', 942452110),
(123459, 'admin_A', '$2y$12$a1H/kRTbPWmggsmk7Yu2XuuJSpHAERh0spH1khnNPPiSt6EXpR52.', 'AAA', 'BB', 'k@gmail.com', 'admin', 942452110),
(123460, 'araffa', '$2y$12$zg8ydZPq4kOFb4phtQ1WFetmIJ48wOP7yXi5STgJls/U5984zflFi', 'araffa', 'nn', 'j@gmail.com', 'lecturer', 942452110),
(123461, 'kobi', '$2y$12$HfEYbQe.WeOYdmnEJUJTEuN0Xnkp75v9HnbjC38C6Ze6vLBdwFjhi', 'kobi', 'kk', 'k@mail.com', 'admin', 942452110),
(123462, 'd', '$2y$12$MWlmhX6VpiAln3TkLkJQxuoJFXrecVRoNNknOz3PwNguNI.4pmq7q', 'df', 'df', 'g@gmail.com', '@', 0),
(123463, 'lec_anga', '$2y$12$BckumA3L5kIJrAVEvmN2Ae1oM4N4F/b4mn0iKrrisJPKu2E0/HXty', 'anga', 'angathan', 'a@gmail.com', 'lecturer', 942452110);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ar_acedemic`
--
ALTER TABLE `ar_acedemic`
  ADD UNIQUE KEY `id` (`id`);

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
  ADD PRIMARY KEY (`degree_id`);

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
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
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
  ADD PRIMARY KEY (`s_id`,`scol_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `scol_id` (`scol_id`);

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
-- AUTO_INCREMENT for table `lecturer`
--
ALTER TABLE `lecturer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `scholarship`
--
ALTER TABLE `scholarship`
  MODIFY `scol_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123464;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
