-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 05, 2017 at 04:50 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(45) DEFAULT NULL,
  `course_code` varchar(45) DEFAULT NULL,
  `course_year` varchar(45) DEFAULT NULL,
  `credits` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

DROP TABLE IF EXISTS `degree`;
CREATE TABLE IF NOT EXISTS `degree` (
  `degree_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `duration` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  `start_year` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

DROP TABLE IF EXISTS `hostel`;
CREATE TABLE IF NOT EXISTS `hostel` (
  `hostel_id` int(11) NOT NULL,
  `location` varchar(45) DEFAULT NULL,
  `janitor` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`hostel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lecturer`
--

DROP TABLE IF EXISTS `lecturer`;
CREATE TABLE IF NOT EXISTS `lecturer` (
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
  `awards` varchar(50) NOT NULL,
  UNIQUE KEY `id` (`id`)
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

DROP TABLE IF EXISTS `scholarship`;
CREATE TABLE IF NOT EXISTS `scholarship` (
  `scol_id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `description` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`scol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(45) NOT NULL,
  `contact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staff_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
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
  `stu_image` varchar(50) NOT NULL,
  PRIMARY KEY (`s_id`),
  KEY `s_id` (`s_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `first_name`, `last_name`, `last_login`, `area`, `school`, `birthdate`, `race`, `religion`, `reg_date`, `out_date`, `active`, `gender`, `stu_image`) VALUES
('001', 'Kasun', 'Dissanayake', '2017-10-19 20:54:57', 'Panadura', 'Royal College', '1994-05-23', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/001.jpg'),
('002', 'Pasan', 'Basuru', '2017-08-13 11:36:47', 'Kelaniya', 'Mahanama College', '1994-08-26', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/002.jpg'),
('003', 'Mohan', 'Anuradha', '2017-08-25 16:10:11', 'Salawa', 'Hanwella Rgasinhala College', '1994-04-12', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/003.jpg'),
('004', 'Kasuni', 'Assalarachchi', '2017-08-13 11:28:21', 'Anuradhapura', 'Anuradhapura Central College', '1995-03-11', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'female', '../view/images/profile_pic/004.jpg'),
('005', 'Panduka', 'Liyanathanthri', '', 'Homagama', 'Royal College', '1994-05-23', 'Sinhalese', 'Buddhist', '2015-02-10', '', 0, 'male', '../view/images/profile_pic/005.jpg'),
('007', 'Wasura', 'Waththe', '', 'Moratuwa', 'St Peters', '08/28/2017', 'Sinhalese', 'Buddhist', '08/29/2017', '08/09/2017', 0, 'female', '../view/images/profile_pic/007.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_address`
--

DROP TABLE IF EXISTS `student_address`;
CREATE TABLE IF NOT EXISTS `student_address` (
  `s_id` varchar(20) NOT NULL,
  `number` varchar(45) DEFAULT NULL,
  `street` varchar(45) DEFAULT NULL,
  `town` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `s_id` (`s_id`)
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

DROP TABLE IF EXISTS `student_contact`;
CREATE TABLE IF NOT EXISTS `student_contact` (
  `contact1` varchar(45) DEFAULT NULL,
  `contact2` varchar(45) DEFAULT NULL,
  `s_id` varchar(11) NOT NULL,
  `emg_contact` varchar(45) DEFAULT NULL,
  `emg_person` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`),
  KEY `s_id` (`s_id`)
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

DROP TABLE IF EXISTS `student_course`;
CREATE TABLE IF NOT EXISTS `student_course` (
  `s_id` varchar(20) NOT NULL,
  `course_id` int(11) NOT NULL,
  `exam_grade` varchar(45) DEFAULT NULL,
  `assignment_grade` varchar(45) DEFAULT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `attendance` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`,`course_id`),
  KEY `s_id` (`s_id`),
  KEY `course_id` (`course_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_degree`
--

DROP TABLE IF EXISTS `student_degree`;
CREATE TABLE IF NOT EXISTS `student_degree` (
  `s_id` varchar(20) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  `class` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`,`degree_id`),
  KEY `s_id` (`s_id`),
  KEY `degree_id` (`degree_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_family`
--

DROP TABLE IF EXISTS `student_family`;
CREATE TABLE IF NOT EXISTS `student_family` (
  `s_id` varchar(20) NOT NULL,
  `father_name` varchar(45) DEFAULT NULL,
  `mother_name` varchar(45) DEFAULT NULL,
  `spouse` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_hostel`
--

DROP TABLE IF EXISTS `student_hostel`;
CREATE TABLE IF NOT EXISTS `student_hostel` (
  `s_id` varchar(20) NOT NULL,
  `hostel_id` int(11) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`,`hostel_id`),
  KEY `s_id` (`s_id`),
  KEY `hostel_id` (`hostel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_scholar`
--

DROP TABLE IF EXISTS `student_scholar`;
CREATE TABLE IF NOT EXISTS `student_scholar` (
  `s_id` varchar(20) NOT NULL,
  `scol_id` int(1) NOT NULL,
  `start_date` varchar(45) DEFAULT NULL,
  `end_date` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`s_id`,`scol_id`),
  KEY `s_id` (`s_id`),
  KEY `scol_id` (`scol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(40) NOT NULL,
  `last_name` varchar(40) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `nic` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

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
(50, 'mks', 'mks', '', '', 'mks@ucsc.cmb.ac.lk', 'lecturer', 995486251);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
