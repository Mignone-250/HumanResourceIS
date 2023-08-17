-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 15, 2020 at 06:26 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_request`
--

DROP TABLE IF EXISTS `account_request`;
CREATE TABLE IF NOT EXISTS `account_request` (
  `USER_ID` int(255) NOT NULL,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `GENDER` varchar(255) DEFAULT NULL,
  `NATIONAL_ID` varchar(255) DEFAULT NULL,
  `PHONE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `DISTRICT` varchar(255) DEFAULT NULL,
  `POSITION` varchar(255) DEFAULT NULL,
  `DEPARTMENT` varchar(255) DEFAULT NULL,
  `PROFILE_PICTURE` longblob,
  `USERNAME` varchar(255) DEFAULT NULL,
  `RSSB` varchar(255) DEFAULT NULL,
  `USER_TYPE` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `POSTING_DATE` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_created_schedules`
--

DROP TABLE IF EXISTS `admin_created_schedules`;
CREATE TABLE IF NOT EXISTS `admin_created_schedules` (
  `sch_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) DEFAULT NULL,
  `week` varchar(255) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  PRIMARY KEY (`sch_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_created_schedules`
--

INSERT INTO `admin_created_schedules` (`sch_id`, `id`, `week`, `dates`) VALUES
(2, 0, 'WEEK1', '2020-02-04');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

DROP TABLE IF EXISTS `applicants`;
CREATE TABLE IF NOT EXISTS `applicants` (
  `applicant_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `cv` varchar(255) DEFAULT NULL,
  `coverletter` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `application_date` date DEFAULT NULL,
  PRIMARY KEY (`applicant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_id`, `fname`, `lname`, `dob`, `email`, `cv`, `coverletter`, `position`, `application_date`) VALUES
(5, 'Mignone', 'Unguyeneza', '2020-03-14', 'mignonneunguyeneza150@gmail.com', 'avatar-mini3.jpg', '', 'IT Support Engineer', '2020-03-15'),
(6, 'Grace', 'uwase', '2020-03-22', 'uwase@gmail.com', 'bg-1.jpg', 'bg-1.jpg', 'IT Support Engineer', '2020-03-22'),
(7, 'Cynthia', 'Agahire', '2020-03-29', 'ganzacynthia@gmail.com', 'beautiful-rwandan-woman.jpg', 'avatar-mini.jpg', 'IT Support Engineer', '2020-03-27'),
(8, 'Annick', 'Gikundiro', '2020-03-22', 'anick@gmail.com', 'avatar1_small.jpg', 'avatar1_small.jpg', 'RECEPTIONIST', '2020-03-04');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor_roll_call_attendance`
--

DROP TABLE IF EXISTS `bachelor_roll_call_attendance`;
CREATE TABLE IF NOT EXISTS `bachelor_roll_call_attendance` (
  `attenda_id` int(11) NOT NULL AUTO_INCREMENT,
  `tbl_id` int(11) DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `arrived_at` time DEFAULT NULL,
  `arrival_status` varchar(255) DEFAULT NULL,
  `left_at` time DEFAULT NULL,
  `leaving_status` varchar(255) DEFAULT NULL,
  `day_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`attenda_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelor_roll_call_attendance`
--

INSERT INTO `bachelor_roll_call_attendance` (`attenda_id`, `tbl_id`, `todate`, `arrived_at`, `arrival_status`, `left_at`, `leaving_status`, `day_status`) VALUES
(2, 1, '2020-04-16', '01:59:00', ' Before Time', '08:07:00', ' Before Time', 'Present'),
(3, 1, '2020-05-14', '11:01:00', ' Before Time', '18:49:00', ' Before Time', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `bachelor_students_registration`
--

DROP TABLE IF EXISTS `bachelor_students_registration`;
CREATE TABLE IF NOT EXISTS `bachelor_students_registration` (
  `tbl_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) DEFAULT NULL,
  `lname` varchar(255) DEFAULT NULL,
  `DOB` varchar(255) DEFAULT NULL,
  `gdates` varchar(255) DEFAULT NULL,
  `sid` varchar(255) DEFAULT NULL,
  `companyrecommended` varchar(255) DEFAULT NULL,
  `employmentstatus` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`tbl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bachelor_students_registration`
--

INSERT INTO `bachelor_students_registration` (`tbl_id`, `fname`, `lname`, `DOB`, `gdates`, `sid`, `companyrecommended`, `employmentstatus`, `comments`, `email`) VALUES
(1, 'ff', 'ff', '2020-02-23', '2020-02-22', 'fff', 'ffff', 'Employed', 'ffff', 'ffff'),
(2, 'Uwase', '', '', '', '', '', '', '', ''),
(3, 'Karara', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cancelled_leave`
--

DROP TABLE IF EXISTS `cancelled_leave`;
CREATE TABLE IF NOT EXISTS `cancelled_leave` (
  `C_ID` int(255) NOT NULL AUTO_INCREMENT,
  `LEAVE_ID` int(255) DEFAULT NULL,
  `USER_ID` int(255) DEFAULT NULL,
  `LEAVE_TYPE` varchar(255) DEFAULT NULL,
  `REASON` text,
  `TITLE` varchar(255) DEFAULT NULL,
  `DESCRIPTION` text,
  `USER_TYPE` varchar(255) DEFAULT NULL,
  `STATUS` varchar(255) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelled_leave`
--

INSERT INTO `cancelled_leave` (`C_ID`, `LEAVE_ID`, `USER_ID`, `LEAVE_TYPE`, `REASON`, `TITLE`, `DESCRIPTION`, `USER_TYPE`, `STATUS`) VALUES
(39, 57, 30, 'Maternity', 'I am pregnant', 'Please cancel this leave', 'I am no longer in need of this leave, I just want to continue working', 'User', 'CANCELLED'),
(40, 108, 31, 'Sick_Leave', 'I am sickee', 'rejecting leave application', 'You dont have to go on a leave, I will let you know another day', 'Admin', 'CANCELLED'),
(41, 59, 30, 'Maternity', 'Good afternoon HR, I am requesting this leave because I am soon giving birth and somehow tired of coming for a job every morning. Please accept my leave request. Thank you for understanding.', 'rejecting leave application', 'I made up my mind', 'Admin', 'CANCELLED'),
(42, 109, 43, 'Maternity', 'I am giving birth to my first child soon.', 'Cancelling my requested  Maternity leave', 'I would like to cancel leave due to the changes that I got from the doctors , that I still have 2 months for me to give birth', 'User', 'CANCELLED');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

DROP TABLE IF EXISTS `create_account`;
CREATE TABLE IF NOT EXISTS `create_account` (
  `USER_ID` int(255) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `RSSB` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `POSTING_DATE` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

DROP TABLE IF EXISTS `deductions`;
CREATE TABLE IF NOT EXISTS `deductions` (
  `DID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) DEFAULT NULL,
  `DEDUCTION_TYPE` varchar(255) DEFAULT NULL,
  `DEDUCTION_AMOUNT` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`DID`, `USER_ID`, `DEDUCTION_TYPE`, `DEDUCTION_AMOUNT`) VALUES
(14, 0, 'Pay as you earn', '5000'),
(13, 0, 'Retirement_Plans', '2000'),
(12, 0, 'Health_Insurance', '3000'),
(15, 0, 'Total', '20000'),
(16, 0, 'Allowance', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `department_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`) VALUES
(2, 'IT department'),
(3, 'Finance Department'),
(4, 'Academics'),
(5, 'Operations'),
(6, 'Internships'),
(7, 'M&E'),
(8, 'Administration');

-- --------------------------------------------------------

--
-- Table structure for table `dev`
--

DROP TABLE IF EXISTS `dev`;
CREATE TABLE IF NOT EXISTS `dev` (
  `dev_id` int(11) NOT NULL AUTO_INCREMENT,
  `year` int(11) NOT NULL,
  PRIMARY KEY (`dev_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dev`
--

INSERT INTO `dev` (`dev_id`, `year`) VALUES
(1, 2020);

-- --------------------------------------------------------

--
-- Table structure for table `e_learning_rollcall_attendance`
--

DROP TABLE IF EXISTS `e_learning_rollcall_attendance`;
CREATE TABLE IF NOT EXISTS `e_learning_rollcall_attendance` (
  `attendaa_id` int(11) NOT NULL AUTO_INCREMENT,
  `e_learning_id` int(11) DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `arrived_at` time DEFAULT NULL,
  `arrival_status` varchar(255) DEFAULT NULL,
  `left_at` time DEFAULT NULL,
  `leaving_status` varchar(255) DEFAULT NULL,
  `day_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`attendaa_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_learning_rollcall_attendance`
--

INSERT INTO `e_learning_rollcall_attendance` (`attendaa_id`, `e_learning_id`, `todate`, `arrived_at`, `arrival_status`, `left_at`, `leaving_status`, `day_status`) VALUES
(1, 1, '2020-05-14', '08:00:00', ' On Time', '18:00:00', ' On Time', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `e_learning_students_registration`
--

DROP TABLE IF EXISTS `e_learning_students_registration`;
CREATE TABLE IF NOT EXISTS `e_learning_students_registration` (
  `e_learning_id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `gdates` date NOT NULL,
  `sid` varchar(255) NOT NULL,
  `companyrecommended` varchar(255) NOT NULL,
  `employmentstatus` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`e_learning_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `e_learning_students_registration`
--

INSERT INTO `e_learning_students_registration` (`e_learning_id`, `fname`, `lname`, `DOB`, `gdates`, `sid`, `companyrecommended`, `employmentstatus`, `comments`, `email`) VALUES
(1, 'Uwase', 'Cynthia', '1996-06-14', '2020-02-15', 'UC123', 'Mariott', 'Not Employed', 'She did not meet their requirements', 'cynthia@gmail.com'),
(2, 'kaki', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(3, 'mama', '', '0000-00-00', '0000-00-00', '', '', '', '', ''),
(4, 'papa', '', '0000-00-00', '0000-00-00', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

DROP TABLE IF EXISTS `leave_application`;
CREATE TABLE IF NOT EXISTS `leave_application` (
  `LEAVE_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) NOT NULL,
  `LEAVE_TYPE` varchar(255) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `REASON` text NOT NULL,
  `LEAVE_DATE` date NOT NULL,
  `REQUESTED_DAYS` int(255) NOT NULL,
  `RLEAVE_DAYS` int(255) NOT NULL,
  `TOTAL_DAYS` int(255) NOT NULL,
  `REMAINING_DAYS` int(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `TOOO` date NOT NULL,
  `REPLACEMENT` varchar(255) NOT NULL,
  PRIMARY KEY (`LEAVE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`LEAVE_ID`, `USER_ID`, `LEAVE_TYPE`, `DATE`, `REASON`, `LEAVE_DATE`, `REQUESTED_DAYS`, `RLEAVE_DAYS`, `TOTAL_DAYS`, `REMAINING_DAYS`, `STATUS`, `TOOO`, `REPLACEMENT`) VALUES
(57, 30, 'Maternity', '2020-01-05 23:53:07', 'I am pregnant', '2020-01-07', 10, 20, 80, 70, 'CANCELLED', '0000-00-00', ''),
(59, 30, 'Maternity', '2020-01-06 00:10:47', 'Good afternoon HR, I am requesting this leave because I am soon giving birth and somehow tired of coming for a job every morning. Please accept my leave request. Thank you for understanding.', '2020-01-10', 5, 15, 70, 65, 'CANCELLED', '0000-00-00', ''),
(107, 31, 'Sick_Leave', '2020-04-02 00:38:55', 'njnjnejbj', '2020-04-17', 7, 13, 80, 73, 'CONFIRMED', '2020-04-18', 'Agahire Cynthia'),
(109, 43, 'Maternity', '2020-05-14 03:17:24', 'I am giving birth to my first child soon.', '2020-05-15', 20, 10, 80, 60, 'CANCELLED', '2020-06-12', 'Esther TUYIZERE');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

DROP TABLE IF EXISTS `leave_types`;
CREATE TABLE IF NOT EXISTS `leave_types` (
  `TYPE_ID` int(255) NOT NULL AUTO_INCREMENT,
  `LEAVE_TYPE` varchar(255) DEFAULT NULL,
  `LEAVE_DAYS` int(255) DEFAULT NULL,
  PRIMARY KEY (`TYPE_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`TYPE_ID`, `LEAVE_TYPE`, `LEAVE_DAYS`) VALUES
(9, 'Maternity', 30),
(8, 'Sick_Leave', 20),
(7, 'Vacation', 20),
(10, 'Normal/Annual', 80),
(11, 'Temporary_disability_ leave', 10);

-- --------------------------------------------------------

--
-- Table structure for table `onboarding`
--

DROP TABLE IF EXISTS `onboarding`;
CREATE TABLE IF NOT EXISTS `onboarding` (
  `on_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `year` varchar(255) DEFAULT NULL,
  `USER_ID` int(11) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`on_id`),
  UNIQUE KEY `on_id` (`on_id`),
  UNIQUE KEY `on_id_2` (`on_id`),
  UNIQUE KEY `on_id_3` (`on_id`),
  UNIQUE KEY `on_id_4` (`on_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `onboarding`
--

INSERT INTO `onboarding` (`on_id`, `first_name`, `last_name`, `age`, `year`, `USER_ID`, `status`) VALUES
(29, 'Submit personal information to Finance', 'Before your first day', '', '', 31, 'Pending'),
(28, 'Sign & return your offer letter', 'Before your first day', 'Make sure you do this within the time given', 'Google', 21, 'Pending'),
(30, 'Initial check-in with your manager', 'First day', 'This initial check-in with your manager will help you get a better understanding of your role and cover your tasks for the first week.', '', 31, 'Done'),
(31, 'Get a tour of the office', 'First day', 'Get a quick tour of the office from Jean! (P.S.â€”Check out the office map in the on boarding resources table.)', 'Office map', 31, 'Done'),
(32, 'mmiiqwirui', 'Before your first day', 'jwerjwjei', 'kkjerjhi', 21, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `paid_users`
--

DROP TABLE IF EXISTS `paid_users`;
CREATE TABLE IF NOT EXISTS `paid_users` (
  `PAID_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) DEFAULT NULL,
  `DATE_PAID` date DEFAULT NULL,
  `TYPE` varchar(255) DEFAULT NULL,
  `AMOUNT` float NOT NULL,
  PRIMARY KEY (`PAID_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paid_users`
--

INSERT INTO `paid_users` (`PAID_ID`, `USER_ID`, `DATE_PAID`, `TYPE`, `AMOUNT`) VALUES
(27, 21, '2020-05-13', 'Monthly salary', 493000);

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

DROP TABLE IF EXISTS `payroll`;
CREATE TABLE IF NOT EXISTS `payroll` (
  `PAYROLL_ID` int(255) NOT NULL AUTO_INCREMENT,
  `POSITION` varchar(255) DEFAULT NULL,
  `GROSS_SALARY` float DEFAULT NULL,
  `TOTAL_SUPPLEMENTS` int(255) DEFAULT NULL,
  `TOTAL_DEDUCTIONS` int(255) DEFAULT NULL,
  `NET_SALARY` int(255) DEFAULT NULL,
  PRIMARY KEY (`PAYROLL_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`PAYROLL_ID`, `POSITION`, `GROSS_SALARY`, `TOTAL_SUPPLEMENTS`, `TOTAL_DEDUCTIONS`, `NET_SALARY`) VALUES
(10, 'Chief Finance Manager', 700000, 3000, 20000, 683000),
(9, 'Techinical Support', 200000, 3000, 20000, 183000),
(8, 'Chief Technology Officer', 500000, 3000, 20000, 483000),
(7, 'Chief Operation Manager', 400000, 3000, 20000, 383000),
(6, 'Chief Executive Officer', 300000, 3000, 20000, 283000),
(11, 'Software Developers', 500000, 3000, 20000, 483000),
(12, 'Lecturer', 500000, 0, 20000, 480000),
(13, 'Finance Manager', 500000, 0, 20000, 480000),
(14, 'Receptionist', 600000, 0, 20000, 580000),
(15, 'IT manager', 800000, 0, 20000, 780000);

-- --------------------------------------------------------

--
-- Table structure for table `performance_review`
--

DROP TABLE IF EXISTS `performance_review`;
CREATE TABLE IF NOT EXISTS `performance_review` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) DEFAULT NULL,
  `accomplishments` varchar(3000) DEFAULT NULL,
  `communication` varchar(255) DEFAULT NULL,
  `employee_score1` int(11) DEFAULT NULL,
  `manager_score1` int(11) DEFAULT NULL,
  `comment1` varchar(255) DEFAULT NULL,
  `managerscomment` varchar(255) DEFAULT NULL,
  `urgency` varchar(255) DEFAULT NULL,
  `employee_score2` int(11) DEFAULT NULL,
  `manager_score2` int(11) DEFAULT NULL,
  `comment2` varchar(255) DEFAULT NULL,
  `managerscomment2` varchar(255) DEFAULT NULL,
  `attitude` varchar(255) DEFAULT NULL,
  `employee_score3` int(11) DEFAULT NULL,
  `manager_score3` int(11) DEFAULT NULL,
  `comment3` varchar(255) DEFAULT NULL,
  `managerscomment3` varchar(255) DEFAULT NULL,
  `ownership` varchar(255) DEFAULT NULL,
  `employee_score4` int(11) DEFAULT NULL,
  `manager_score4` int(11) DEFAULT NULL,
  `comment4` varchar(255) DEFAULT NULL,
  `managerscomment4` varchar(255) DEFAULT NULL,
  `Productivity` varchar(255) DEFAULT NULL,
  `employee_score5` int(11) DEFAULT NULL,
  `manager_score5` int(11) DEFAULT NULL,
  `comment5` varchar(255) DEFAULT NULL,
  `managerscomment5` varchar(255) DEFAULT NULL,
  `QualityWork` varchar(255) DEFAULT NULL,
  `employee_score6` int(11) DEFAULT NULL,
  `manager_score6` int(11) DEFAULT NULL,
  `comment6` varchar(255) DEFAULT NULL,
  `managerscomment6` varchar(255) DEFAULT NULL,
  `cost` varchar(255) DEFAULT NULL,
  `employee_score7` int(11) DEFAULT NULL,
  `manager_score7` int(11) DEFAULT NULL,
  `comment7` varchar(255) DEFAULT NULL,
  `managerscomment7` varchar(255) DEFAULT NULL,
  `employeesfeedback` varchar(255) DEFAULT NULL,
  `managersfeedback` varchar(255) DEFAULT NULL,
  `proactivity` varchar(255) DEFAULT NULL,
  `employee_score8` int(11) DEFAULT NULL,
  `manager_score8` int(11) DEFAULT NULL,
  `comment8` varchar(255) DEFAULT NULL,
  `managerscomment8` varchar(255) DEFAULT NULL,
  `teamwork` varchar(255) DEFAULT NULL,
  `employee_score9` int(11) DEFAULT NULL,
  `manager_score9` int(11) DEFAULT NULL,
  `comment9` varchar(255) DEFAULT NULL,
  `managerscomment9` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance_review`
--

INSERT INTO `performance_review` (`p_id`, `USER_ID`, `accomplishments`, `communication`, `employee_score1`, `manager_score1`, `comment1`, `managerscomment`, `urgency`, `employee_score2`, `manager_score2`, `comment2`, `managerscomment2`, `attitude`, `employee_score3`, `manager_score3`, `comment3`, `managerscomment3`, `ownership`, `employee_score4`, `manager_score4`, `comment4`, `managerscomment4`, `Productivity`, `employee_score5`, `manager_score5`, `comment5`, `managerscomment5`, `QualityWork`, `employee_score6`, `manager_score6`, `comment6`, `managerscomment6`, `cost`, `employee_score7`, `manager_score7`, `comment7`, `managerscomment7`, `employeesfeedback`, `managersfeedback`, `proactivity`, `employee_score8`, `manager_score8`, `comment8`, `managerscomment8`, `teamwork`, `employee_score9`, `manager_score9`, `comment9`, `managerscomment9`) VALUES
(30, 31, 'I managed to develop different features on HRMS\r\n\r\nI added one feature on academic bridge\r\n\r\nAssisted in computer maintenance and networking where it was necessary', 'Communication(10%)', 9, 0, 'I think I communicated well with my team , where things were going well and not well.', '', 'Delivering tasks on time - Sense of urgency (30%)', 15, 0, 'I believe that I delivered all tasks on  time and tried to meet all my deadlines', '', 'Attitude and Behavior (2%)', 2, 0, 'I believe that I behaved well and everyone could see that.', '', 'Ownership/ Accountability', 14, 0, 'I did everything that I could do.', '', 'Productivity (8%)', 7, 0, 'I think my production to the company in these last 3 months was good.', '', 'Quality Work/ Attention to detail (15%)', 14, 0, 'I I tried to be attentive on every details that were given to me.', '', 'Cost-Effectiveness (10%)', 8, 0, 'I also did well at this stage of cost effectiveness.', '', 'According to what I provided in comment boxes , I think I have done everything in the way I was supposed to do them.', '', 'Proactivity (2%)', 2, 0, 'I also tried to be proactive and carried my weather. I took initiative  and tried to be proactive.', '', 'Team Work (8%)', 7, 0, 'I worked with others well in team, tried to seek help from others and give help wherever it was necesssary.', ''),
(31, 31, 'I managed to develop different features on HRMS\r\n\r\nI added one feature on academic bridge\r\n\r\nAssisted in computer maintenance and networking where it was necessary', 'Communication(10%)', 9, 5, 'I think I communicated well with my team , where things were going well and not well.', 'You did well here', 'Delivering tasks on time - Sense of urgency (30%)', 15, 12, 'I believe that I delivered all tasks on  time and tried to meet all my deadlines', 'You need to improve here', 'Attitude and Behavior (2%)', 2, 2, 'I believe that I behaved well and everyone could see that.', 'You did well here', 'Ownership/ Accountability', 14, 13, 'I did everything that I could do.', 'You did well here', 'Productivity (8%)', 7, 2, 'I think my production to the company in these last 3 months was good.', 'You did well here', 'Quality Work/ Attention to detail (15%)', 14, 13, 'I I tried to be attentive on every details that were given to me.', 'You did well here', 'Cost-Effectiveness (10%)', 8, 9, 'I also did well at this stage of cost effectiveness.', 'You need to improve here', 'According to what I provided in comment boxes , I think I have done everything in the way I was supposed to do them.', 'I think you did great in these last three months but again you will need to improve for a better productivity', 'Proactivity (2%)', 2, 7, 'I also tried to be proactive and carried my weather. I took initiative  and tried to be proactive.', 'You need to improve here', 'Team Work (8%)', 7, 7, 'I worked with others well in team, tried to seek help from others and give help wherever it was necesssary.', 'You need to improve here'),
(32, 36, 'ygufytyt\r\nfyhffy\r\nugyujgyjfyuj', 'Communication(10%)', 5, 0, '', '', 'Delivering tasks on time - Sense of urgency (30%)', 16, 0, '', '', 'Attitude and Behavior (2%)', 1, 0, '', '', 'Ownership/ Accountability', 12, 0, '', '', 'Productivity (8%)', 6, 0, '', '', 'Quality Work/ Attention to detail (15%)', 14, 0, '', '', 'Cost-Effectiveness (10%)', 8, 0, '', '', 'kjkjkhiudddtdddtrgrd', '', 'Proactivity (2%)', 1, 0, '', '', 'Team Work (8%)', 7, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
CREATE TABLE IF NOT EXISTS `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(255) DEFAULT NULL,
  `department_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`position_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`position_id`, `position_name`, `department_name`) VALUES
(7, 'Finance Manager ', 'Finance Department'),
(10, 'Chief Executive Officer', ''),
(11, 'Receptionist', 'Operations'),
(12, 'Lecturer', 'Academics'),
(13, 'IT manager', 'IT department'),
(14, 'Deputy Head Of Academics', 'Academics'),
(15, 'IT assistant', 'IT department');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `POST_ID` int(255) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(255) DEFAULT NULL,
  `CONTENT` text,
  `CATEGORY` varchar(255) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  `POST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`POST_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`POST_ID`, `TITLE`, `CONTENT`, `CATEGORY`, `PICTURE`, `DATE`, `POST_DATE`) VALUES
(25, 'All employees meeting   ', 'Weâ€™ve planned out our new employees first day to help them get acclimated a bit easier. First, weâ€™ll start with a short stop for morning coffee in the office kitchen. Then weâ€™ll move on to human resources to sign an employment contract, benefit plan forms, and other important paperwork. After that, weâ€™ll get them settled into their new offices and set up their phones and computer. After that we will welcome them in the main hall at 7:00pm please find a way and make urself available on this special day!!', 'General', 'upload/metingiii_1578302228.png', '2020-07-21', '2020-01-06 09:17:08'),
(24, 'Introduction to a new developed system', 'Weâ€™ve planned out our new employees first day to help them get acclimated a bit easier. First, weâ€™ll start with a short stop for morning coffee in the office kitchen. Then weâ€™ll move on to human resources to sign an employment contract, benefit plan forms, and other important paperwork. After that, weâ€™ll get them settled into their new offices and set up their phones and computer. After that we will welcome them in the main hall at 7:00pm please find a way and make urself available on this special day!!', 'News', 'upload/learning_1578301959.png', '2020-06-28', '2020-01-06 09:12:39'),
(26, 'Welcoming New Employees Party', 'Weâ€™ve planned out our new employees first day to help them get acclimated a bit easier. First, weâ€™ll start with a short stop for morning coffee in the office kitchen. Then weâ€™ll move on to human resources to sign an employment contract, benefit plan forms, and other important paperwork. After that, weâ€™ll get them settled into their new offices and set up their phones and computer. After that we will welcome them in the main hall at 7:00pm please find a way and make urself available on this special day!!', 'News', 'upload/wecomiii_1578302262.jpg', '2020-08-29', '2020-01-06 09:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `post_draft`
--

DROP TABLE IF EXISTS `post_draft`;
CREATE TABLE IF NOT EXISTS `post_draft` (
  `POST_ID` int(255) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(255) DEFAULT NULL,
  `CONTENT` text,
  `CATEGORY` varchar(255) DEFAULT NULL,
  `PICTURE` varchar(255) DEFAULT NULL,
  `DATE` date DEFAULT NULL,
  PRIMARY KEY (`POST_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `roll_call_attendance`
--

DROP TABLE IF EXISTS `roll_call_attendance`;
CREATE TABLE IF NOT EXISTS `roll_call_attendance` (
  `attendance_id` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) DEFAULT NULL,
  `todate` date DEFAULT NULL,
  `arrived_at` time DEFAULT NULL,
  `arrival_status` varchar(255) DEFAULT NULL,
  `left_at` time DEFAULT NULL,
  `leaving_status` varchar(255) DEFAULT NULL,
  `day_status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roll_call_attendance`
--

INSERT INTO `roll_call_attendance` (`attendance_id`, `USER_ID`, `todate`, `arrived_at`, `arrival_status`, `left_at`, `leaving_status`, `day_status`) VALUES
(46, 43, '2020-05-14', '08:00:00', ' On Time', '18:00:00', ' On Time', 'Present'),
(45, 21, '2020-05-14', '08:00:00', ' On Time', '18:00:00', ' On Time', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) DEFAULT NULL,
  `day` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `task1` varchar(3000) DEFAULT NULL,
  `status_task1` varchar(255) DEFAULT NULL,
  `task2` varchar(3000) DEFAULT NULL,
  `status_task2` varchar(255) DEFAULT NULL,
  `task3` varchar(3000) DEFAULT NULL,
  `status_task3` varchar(255) DEFAULT NULL,
  `task4` varchar(3000) DEFAULT NULL,
  `status_task4` varchar(255) DEFAULT NULL,
  `task5` varchar(3000) DEFAULT NULL,
  `status_task5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`schedule_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`schedule_id`, `USER_ID`, `day`, `date`, `task1`, `status_task1`, `task2`, `status_task2`, `task3`, `status_task3`, `task4`, `status_task4`, `task5`, `status_task5`) VALUES
(8, 31, 'Wednesday', '2020-01-29', 'Working on Employee Scheduling Feature.\r\n\r\nI am planning to work on employee scheduling feature  and then make sure that it\'s done by the end of to day. After that I will continue with a new feature.', 'Pending', 'Working on Employee Scheduling Feature.\r\n\r\nI am planning to work on employee scheduling feature  and then make sure that it\'s done by the end of to day. After that I will continue with a new feature.', 'Pending', 'Working on Employee Scheduling Feature.\r\n\r\nI am planning to work on employee scheduling feature  and then make sure that it\'s done by the end of to day. After that I will continue with a new feature.', 'Pending', 'Working on Employee Scheduling Feature.\r\n\r\nI am planning to work on employee scheduling feature  and then make sure that it\'s done by the end of to day. After that I will continue with a new feature.', 'Pending', 'Working on Employee Scheduling Feature.\r\n\r\nI am planning to work on employee scheduling feature  and then make sure that it\'s done by the end of to day. After that I will continue with a new feature.', 'Pending'),
(9, 31, 'Thursday', '2020-01-30', 'Doing computer Maintenance by first cleaning up the system HDD and  continue with the second option which is task 3', '', 'Task 2 is just to  backup all the data that are in different machines and then make sure that I put them on a safe store.', '', '', '', '', '', '', ''),
(10, 31, 'Friday', '2020-01-31', 'Working on onboarding process', 'done', 'Working on onboarding process', 'done', 'Working on onboarding process', 'Pending', 'Working on onboarding process', 'Pending', 'Working on onboarding process', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `schedules2`
--

DROP TABLE IF EXISTS `schedules2`;
CREATE TABLE IF NOT EXISTS `schedules2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(11) DEFAULT NULL,
  `todaysdate` date DEFAULT NULL,
  `task1` varchar(255) DEFAULT NULL,
  `status_task1` varchar(255) DEFAULT NULL,
  `deadline_task1` date DEFAULT NULL,
  `challenge_task1` varchar(255) DEFAULT NULL,
  `task2` varchar(255) DEFAULT NULL,
  `status_task2` varchar(255) DEFAULT NULL,
  `deadline_task2` date DEFAULT NULL,
  `challenge_task2` varchar(255) DEFAULT NULL,
  `task3` varchar(255) DEFAULT NULL,
  `status_task3` varchar(255) DEFAULT NULL,
  `deadline_task3` date DEFAULT NULL,
  `challenge_task3` varchar(255) DEFAULT NULL,
  `task4` varchar(255) DEFAULT NULL,
  `status_task4` varchar(255) DEFAULT NULL,
  `deadline_task4` date DEFAULT NULL,
  `challenge_task4` varchar(255) DEFAULT NULL,
  `task5` varchar(255) DEFAULT NULL,
  `status_task5` varchar(255) DEFAULT NULL,
  `deadline_task5` date DEFAULT NULL,
  `challenge_task5` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedules2`
--

INSERT INTO `schedules2` (`id`, `USER_ID`, `todaysdate`, `task1`, `status_task1`, `deadline_task1`, `challenge_task1`, `task2`, `status_task2`, `deadline_task2`, `challenge_task2`, `task3`, `status_task3`, `deadline_task3`, `challenge_task3`, `task4`, `status_task4`, `deadline_task4`, `challenge_task4`, `task5`, `status_task5`, `deadline_task5`, `challenge_task5`) VALUES
(3, 31, '2020-02-04', 'Implementing Recruiting and Applicant feature', 'Done', '2020-02-07', 'I had a challenge of not getting enough resources  at the time of implementing this feature.', 'Implementing Recruiting and Applicant feature', 'Done', '2020-02-07', 'I had a challenge of not getting enough resources  at the time of implementing this feature.', 'Implementing Recruiting and Applicant feature', 'Pending', '2020-02-07', 'I had a challenge of not getting enough resources  at the time of implementing this feature.', 'Implementing Recruiting and Applicant feature', 'Done', '2020-02-07', 'I had a challenge of not getting enough resources  at the time of implementing this feature.', 'Implementing Recruiting and Applicant feature', 'Pending', '2020-02-07', 'I had a challenge of not getting enough resources  at the time of implementing this feature.');

-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

DROP TABLE IF EXISTS `supplements`;
CREATE TABLE IF NOT EXISTS `supplements` (
  `SUPPLEMENTS_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) DEFAULT NULL,
  `SUPPLEMENTS_NAME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`SUPPLEMENTS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`SUPPLEMENTS_ID`, `USER_ID`, `SUPPLEMENTS_NAME`) VALUES
(18, 0, 'Per Diem'),
(17, 0, 'Transport');

-- --------------------------------------------------------

--
-- Table structure for table `total_days`
--

DROP TABLE IF EXISTS `total_days`;
CREATE TABLE IF NOT EXISTS `total_days` (
  `DAYS_ID` int(2) NOT NULL AUTO_INCREMENT,
  `DAYS` int(255) DEFAULT NULL,
  PRIMARY KEY (`DAYS_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `total_days`
--

INSERT INTO `total_days` (`DAYS_ID`, `DAYS`) VALUES
(1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `trial`
--

DROP TABLE IF EXISTS `trial`;
CREATE TABLE IF NOT EXISTS `trial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trial`
--

INSERT INTO `trial` (`id`, `name`, `price`) VALUES
(1, 'mm', 300);

-- --------------------------------------------------------

--
-- Table structure for table `user_deduction`
--

DROP TABLE IF EXISTS `user_deduction`;
CREATE TABLE IF NOT EXISTS `user_deduction` (
  `DID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) DEFAULT NULL,
  `DEDUCTION_TYPE` varchar(255) DEFAULT NULL,
  `DEDUCTION_AMOUNT` float DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_deduction`
--

INSERT INTO `user_deduction` (`DID`, `USER_ID`, `DEDUCTION_TYPE`, `DEDUCTION_AMOUNT`, `datee`, `TOTAL`) VALUES
(13, 21, 'Pay as you earn', 1, '2020-05-13', 1.4),
(14, 21, 'Retirement_Plans', 0.4, '2020-05-13', 1.4);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

DROP TABLE IF EXISTS `user_logs`;
CREATE TABLE IF NOT EXISTS `user_logs` (
  `LOG_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) DEFAULT NULL,
  `LOGIN_TIME` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LOGOUT_TIME` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`LOG_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=693 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`LOG_ID`, `USERNAME`, `LOGIN_TIME`, `LOGOUT_TIME`) VALUES
(1, 'estella', '2019-08-23 15:54:15', '13-05-2020 05:53:48 PM'),
(2, 'amata', '2019-08-23 15:54:33', '04-01-2020 03:27:36 AM'),
(3, 'estella', '2019-08-23 15:54:48', '13-05-2020 05:53:48 PM'),
(4, 'amata', '2019-08-23 15:58:53', '04-01-2020 03:27:36 AM'),
(5, 'estella', '2019-08-23 16:00:28', '13-05-2020 05:53:48 PM'),
(6, 'estella', '2019-08-24 08:42:06', '13-05-2020 05:53:48 PM'),
(7, 'estella', '2019-08-25 08:54:56', '13-05-2020 05:53:48 PM'),
(8, 'estella', '2019-08-25 08:59:13', '13-05-2020 05:53:48 PM'),
(9, 'niyo', '2019-08-25 08:59:54', '08-10-2019 10:16:06 AM'),
(10, 'amata', '2019-08-27 07:34:50', '04-01-2020 03:27:36 AM'),
(11, 'amata', '2019-08-27 07:51:19', '04-01-2020 03:27:36 AM'),
(12, 'amata', '2019-08-27 07:54:21', '04-01-2020 03:27:36 AM'),
(13, 'estella', '2019-08-27 08:13:38', '13-05-2020 05:53:48 PM'),
(14, 'amata', '2019-08-27 08:16:05', '04-01-2020 03:27:36 AM'),
(15, 'estella', '2019-08-27 09:20:09', '13-05-2020 05:53:48 PM'),
(16, 'estella', '2019-08-27 09:31:31', '13-05-2020 05:53:48 PM'),
(17, 'estella', '2019-08-27 10:10:10', '13-05-2020 05:53:48 PM'),
(18, 'estella', '2019-08-27 10:22:04', '13-05-2020 05:53:48 PM'),
(19, 'amata', '2019-08-27 10:35:30', '04-01-2020 03:27:36 AM'),
(20, 'niyo', '2019-08-27 10:45:13', '08-10-2019 10:16:06 AM'),
(21, 'amata', '2019-08-27 10:45:39', '04-01-2020 03:27:36 AM'),
(22, 'estella', '2019-08-27 10:48:13', '13-05-2020 05:53:48 PM'),
(23, 'amata', '2019-08-27 10:52:03', '04-01-2020 03:27:36 AM'),
(24, 'estella', '2019-08-28 06:59:01', '13-05-2020 05:53:48 PM'),
(25, 'niyo', '2019-08-28 07:01:25', '08-10-2019 10:16:06 AM'),
(26, 'estella', '2019-08-28 07:02:08', '13-05-2020 05:53:48 PM'),
(27, 'niyo', '2019-08-28 07:02:49', '08-10-2019 10:16:06 AM'),
(28, 'estella', '2019-08-28 07:03:53', '13-05-2020 05:53:48 PM'),
(29, 'amata', '2019-08-28 07:43:51', '04-01-2020 03:27:36 AM'),
(30, 'amata', '2019-08-28 07:48:10', '04-01-2020 03:27:36 AM'),
(31, 'niyo', '2019-08-28 07:54:43', '08-10-2019 10:16:06 AM'),
(32, 'estella', '2019-08-28 08:19:07', '13-05-2020 05:53:48 PM'),
(33, 'niyo', '2019-08-28 08:19:58', '08-10-2019 10:16:06 AM'),
(34, 'estella', '2019-08-28 08:26:42', '13-05-2020 05:53:48 PM'),
(35, 'amata', '2019-08-28 09:16:36', '04-01-2020 03:27:36 AM'),
(36, 'estella', '2019-08-28 09:19:04', '13-05-2020 05:53:48 PM'),
(37, 'estella', '2019-08-28 09:34:28', '13-05-2020 05:53:48 PM'),
(38, 'amata', '2019-08-28 09:37:58', '04-01-2020 03:27:36 AM'),
(39, 'estella', '2019-08-28 09:38:41', '13-05-2020 05:53:48 PM'),
(40, 'amata', '2019-08-28 09:43:22', '04-01-2020 03:27:36 AM'),
(41, 'amata', '2019-08-28 09:43:44', '04-01-2020 03:27:36 AM'),
(42, 'estella', '2019-08-28 09:43:57', '13-05-2020 05:53:48 PM'),
(43, 'amata', '2019-08-28 10:36:22', '04-01-2020 03:27:36 AM'),
(44, 'estella', '2019-08-28 10:43:26', '13-05-2020 05:53:48 PM'),
(45, 'amata', '2019-08-28 10:47:22', '04-01-2020 03:27:36 AM'),
(46, 'estella', '2019-08-28 10:50:29', '13-05-2020 05:53:48 PM'),
(47, 'amata', '2019-08-28 11:08:36', '04-01-2020 03:27:36 AM'),
(48, 'estella', '2019-08-28 11:09:10', '13-05-2020 05:53:48 PM'),
(49, 'amata', '2019-08-28 11:17:44', '04-01-2020 03:27:36 AM'),
(50, 'estella', '2019-08-28 12:11:34', '13-05-2020 05:53:48 PM'),
(51, 'estella', '2019-08-29 06:54:08', '13-05-2020 05:53:48 PM'),
(52, 'amata', '2019-08-29 06:56:30', '04-01-2020 03:27:36 AM'),
(53, 'estella', '2019-08-29 06:57:13', '13-05-2020 05:53:48 PM'),
(54, 'amata', '2019-08-29 07:29:44', '04-01-2020 03:27:36 AM'),
(55, 'amata', '2019-08-29 07:40:20', '04-01-2020 03:27:36 AM'),
(56, 'estella', '2019-08-29 08:25:56', '13-05-2020 05:53:48 PM'),
(57, 'amata', '2019-08-29 08:48:13', '04-01-2020 03:27:36 AM'),
(58, 'estella', '2019-08-29 08:56:41', '13-05-2020 05:53:48 PM'),
(59, 'amata', '2019-08-29 09:02:31', '04-01-2020 03:27:36 AM'),
(60, 'estella', '2019-08-29 09:23:12', '13-05-2020 05:53:48 PM'),
(61, 'amata', '2019-08-29 09:29:00', '04-01-2020 03:27:36 AM'),
(62, 'estella', '2019-08-29 09:47:28', '13-05-2020 05:53:48 PM'),
(63, 'amata', '2019-08-29 10:07:24', '04-01-2020 03:27:36 AM'),
(64, 'estella', '2019-08-29 10:08:06', '13-05-2020 05:53:48 PM'),
(65, 'amata', '2019-08-29 10:09:01', '04-01-2020 03:27:36 AM'),
(66, 'estella', '2019-08-29 10:16:09', '13-05-2020 05:53:48 PM'),
(67, 'amata', '2019-08-29 10:18:48', '04-01-2020 03:27:36 AM'),
(68, 'estella', '2019-08-29 10:20:38', '13-05-2020 05:53:48 PM'),
(69, 'estella', '2019-08-29 11:37:12', '13-05-2020 05:53:48 PM'),
(70, 'estella', '2019-08-29 11:38:23', '13-05-2020 05:53:48 PM'),
(71, 'estella', '2019-08-29 11:38:36', '13-05-2020 05:53:48 PM'),
(72, 'estella', '2019-08-29 11:42:18', '13-05-2020 05:53:48 PM'),
(73, 'amata', '2019-08-29 11:50:13', '04-01-2020 03:27:36 AM'),
(74, 'amata', '2019-08-29 11:51:30', '04-01-2020 03:27:36 AM'),
(75, 'estella', '2019-08-29 11:58:25', '13-05-2020 05:53:48 PM'),
(76, 'amata', '2019-08-29 11:58:56', '04-01-2020 03:27:36 AM'),
(77, 'estella', '2019-08-29 11:59:12', '13-05-2020 05:53:48 PM'),
(78, 'esther', '2019-08-29 12:12:34', '29-08-2019 02:14:03 PM'),
(79, 'estella', '2019-08-29 12:14:11', '13-05-2020 05:53:48 PM'),
(80, 'amata', '2019-08-29 12:24:18', '04-01-2020 03:27:36 AM'),
(81, 'estella', '2019-08-29 12:29:53', '13-05-2020 05:53:48 PM'),
(82, 'amata', '2019-08-31 11:56:32', '04-01-2020 03:27:36 AM'),
(83, 'amata', '2019-08-31 11:58:51', '04-01-2020 03:27:36 AM'),
(84, 'amata', '2019-08-31 12:03:08', '04-01-2020 03:27:36 AM'),
(85, 'estella', '2019-08-31 12:06:07', '13-05-2020 05:53:48 PM'),
(86, 'amata', '2019-08-31 12:08:01', '04-01-2020 03:27:36 AM'),
(87, 'amata', '2019-08-31 12:23:55', '04-01-2020 03:27:36 AM'),
(88, 'estella', '2019-08-31 12:40:39', '13-05-2020 05:53:48 PM'),
(89, 'amata', '2019-08-31 13:05:08', '04-01-2020 03:27:36 AM'),
(90, 'estella', '2019-08-31 13:40:03', '13-05-2020 05:53:48 PM'),
(91, 'amata', '2019-08-31 13:40:47', '04-01-2020 03:27:36 AM'),
(92, 'estella', '2019-08-31 13:44:47', '13-05-2020 05:53:48 PM'),
(93, 'amata', '2019-08-31 13:46:28', '04-01-2020 03:27:36 AM'),
(94, 'estella', '2019-08-31 13:47:53', '13-05-2020 05:53:48 PM'),
(95, 'amata', '2019-08-31 13:48:25', '04-01-2020 03:27:36 AM'),
(96, 'estella', '2019-08-31 13:49:00', '13-05-2020 05:53:48 PM'),
(97, 'estella', '2019-09-02 07:18:45', '13-05-2020 05:53:48 PM'),
(98, 'amata', '2019-09-02 07:21:01', '04-01-2020 03:27:36 AM'),
(99, 'estella', '2019-09-02 07:22:07', '13-05-2020 05:53:48 PM'),
(100, 'amata', '2019-09-02 07:23:55', '04-01-2020 03:27:36 AM'),
(101, 'estella', '2019-09-02 07:24:44', '13-05-2020 05:53:48 PM'),
(102, 'amata', '2019-09-02 07:48:54', '04-01-2020 03:27:36 AM'),
(103, 'estella', '2019-09-02 07:50:03', '13-05-2020 05:53:48 PM'),
(104, 'amata', '2019-09-03 07:52:08', '04-01-2020 03:27:36 AM'),
(105, 'estella', '2019-09-03 07:59:39', '13-05-2020 05:53:48 PM'),
(106, 'estella', '2019-09-03 08:23:29', '13-05-2020 05:53:48 PM'),
(107, 'amata', '2019-09-03 08:55:11', '04-01-2020 03:27:36 AM'),
(108, 'estella', '2019-09-03 09:03:24', '13-05-2020 05:53:48 PM'),
(109, 'amata', '2019-09-03 09:06:04', '04-01-2020 03:27:36 AM'),
(110, 'estella', '2019-09-03 09:07:02', '13-05-2020 05:53:48 PM'),
(111, 'amata', '2019-09-03 09:08:01', '04-01-2020 03:27:36 AM'),
(112, 'niyo', '2019-09-03 09:33:32', '08-10-2019 10:16:06 AM'),
(113, 'amata', '2019-09-03 09:40:43', '04-01-2020 03:27:36 AM'),
(114, 'niyo', '2019-09-03 09:45:23', '08-10-2019 10:16:06 AM'),
(115, 'estella', '2019-09-03 09:45:48', '13-05-2020 05:53:48 PM'),
(116, 'niyo', '2019-09-03 09:48:02', '08-10-2019 10:16:06 AM'),
(117, 'estella', '2019-09-03 09:56:16', '13-05-2020 05:53:48 PM'),
(118, 'amata', '2019-09-03 10:11:38', '04-01-2020 03:27:36 AM'),
(119, 'estella', '2019-09-03 10:12:44', '13-05-2020 05:53:48 PM'),
(120, 'amata', '2019-09-03 11:48:35', '04-01-2020 03:27:36 AM'),
(121, 'estella', '2019-09-03 12:16:01', '13-05-2020 05:53:48 PM'),
(122, 'amata', '2019-09-03 12:17:27', '04-01-2020 03:27:36 AM'),
(123, 'estella', '2019-09-03 12:21:28', '13-05-2020 05:53:48 PM'),
(124, 'amata', '2019-09-03 12:22:10', '04-01-2020 03:27:36 AM'),
(125, 'amata', '2019-09-03 12:31:19', '04-01-2020 03:27:36 AM'),
(126, 'amata', '2019-09-03 12:32:54', '04-01-2020 03:27:36 AM'),
(127, 'niyo', '2019-09-03 12:35:00', '08-10-2019 10:16:06 AM'),
(128, 'estella', '2019-09-03 12:51:46', '13-05-2020 05:53:48 PM'),
(129, 'amata', '2019-09-03 12:55:23', '04-01-2020 03:27:36 AM'),
(130, 'niyo', '2019-09-03 12:57:15', '08-10-2019 10:16:06 AM'),
(131, 'amata', '2019-09-03 13:41:39', '04-01-2020 03:27:36 AM'),
(132, 'estella', '2019-09-03 13:42:07', '13-05-2020 05:53:48 PM'),
(133, 'niyo', '2019-09-03 13:42:36', '08-10-2019 10:16:06 AM'),
(134, 'estella', '2019-09-03 13:45:30', '13-05-2020 05:53:48 PM'),
(135, 'niyo', '2019-09-03 13:46:02', '08-10-2019 10:16:06 AM'),
(136, 'estella', '2019-09-04 08:07:48', '13-05-2020 05:53:48 PM'),
(137, 'amata', '2019-09-04 08:57:55', '04-01-2020 03:27:36 AM'),
(138, 'amata', '2019-09-04 09:07:49', '04-01-2020 03:27:36 AM'),
(139, 'amata', '2019-09-05 08:21:07', '04-01-2020 03:27:36 AM'),
(140, 'amata', '2019-09-05 10:33:04', '04-01-2020 03:27:36 AM'),
(141, 'estella', '2019-09-05 11:03:54', '13-05-2020 05:53:48 PM'),
(142, 'amata', '2019-09-05 11:04:23', '04-01-2020 03:27:36 AM'),
(143, 'estella', '2019-09-05 11:34:49', '13-05-2020 05:53:48 PM'),
(144, 'amata', '2019-09-05 11:41:29', '04-01-2020 03:27:36 AM'),
(145, 'amata', '2019-09-05 11:42:34', '04-01-2020 03:27:36 AM'),
(146, 'estella', '2019-09-05 11:43:16', '13-05-2020 05:53:48 PM'),
(147, 'amata', '2019-09-05 11:43:47', '04-01-2020 03:27:36 AM'),
(148, 'estella', '2019-09-05 11:45:33', '13-05-2020 05:53:48 PM'),
(149, 'amata', '2019-09-05 11:46:08', '04-01-2020 03:27:36 AM'),
(150, 'estella', '2019-09-05 15:58:24', '13-05-2020 05:53:48 PM'),
(151, 'amata', '2019-09-05 15:59:02', '04-01-2020 03:27:36 AM'),
(152, 'niyo', '2019-09-05 16:10:41', '08-10-2019 10:16:06 AM'),
(153, 'amata', '2019-09-06 08:53:07', '04-01-2020 03:27:36 AM'),
(154, 'estella', '2019-09-06 09:00:12', '13-05-2020 05:53:48 PM'),
(155, 'amata', '2019-09-06 09:12:41', '04-01-2020 03:27:36 AM'),
(156, 'estella', '2019-09-06 09:45:36', '13-05-2020 05:53:48 PM'),
(157, 'amata', '2019-09-06 09:47:03', '04-01-2020 03:27:36 AM'),
(158, 'niyo', '2019-09-06 10:47:31', '08-10-2019 10:16:06 AM'),
(159, 'amata', '2019-09-06 10:48:03', '04-01-2020 03:27:36 AM'),
(160, 'estella', '2019-09-06 10:58:38', '13-05-2020 05:53:48 PM'),
(161, 'amata', '2019-09-06 11:00:17', '04-01-2020 03:27:36 AM'),
(162, 'amata', '2019-09-06 11:17:12', '04-01-2020 03:27:36 AM'),
(163, 'amata', '2019-09-06 11:44:57', '04-01-2020 03:27:36 AM'),
(164, 'estella', '2019-09-06 11:52:30', '13-05-2020 05:53:48 PM'),
(165, 'amata', '2019-09-06 11:53:20', '04-01-2020 03:27:36 AM'),
(166, 'estella', '2019-09-06 11:54:30', '13-05-2020 05:53:48 PM'),
(167, 'amata', '2019-09-06 12:14:23', '04-01-2020 03:27:36 AM'),
(168, 'estella', '2019-09-06 12:15:21', '13-05-2020 05:53:48 PM'),
(169, 'amata', '2019-09-06 12:23:46', '04-01-2020 03:27:36 AM'),
(170, 'estella', '2019-09-06 12:25:08', '13-05-2020 05:53:48 PM'),
(171, 'amata', '2019-09-06 12:26:15', '04-01-2020 03:27:36 AM'),
(172, 'amata', '2019-09-06 12:44:09', '04-01-2020 03:27:36 AM'),
(173, 'estella', '2019-09-06 12:44:43', '13-05-2020 05:53:48 PM'),
(174, 'amata', '2019-09-06 12:46:38', '04-01-2020 03:27:36 AM'),
(175, 'estella', '2019-09-06 12:52:06', '13-05-2020 05:53:48 PM'),
(176, 'amata', '2019-09-06 12:57:16', '04-01-2020 03:27:36 AM'),
(177, 'estella', '2019-09-06 12:59:12', '13-05-2020 05:53:48 PM'),
(178, 'amata', '2019-09-06 13:13:22', '04-01-2020 03:27:36 AM'),
(179, 'estella', '2019-09-06 13:17:49', '13-05-2020 05:53:48 PM'),
(180, 'amata', '2019-09-06 13:33:48', '04-01-2020 03:27:36 AM'),
(181, 'estella', '2019-09-06 13:40:00', '13-05-2020 05:53:48 PM'),
(182, 'estella', '2019-09-08 08:06:10', '13-05-2020 05:53:48 PM'),
(183, 'amata', '2019-09-08 08:39:57', '04-01-2020 03:27:36 AM'),
(184, 'estella', '2019-09-08 08:48:13', '13-05-2020 05:53:48 PM'),
(185, 'estella', '2019-09-09 18:38:55', '13-05-2020 05:53:48 PM'),
(186, 'amata', '2019-09-09 18:43:28', '04-01-2020 03:27:36 AM'),
(187, 'estella', '2019-09-10 09:50:30', '13-05-2020 05:53:48 PM'),
(188, 'amata', '2019-09-10 11:56:14', '04-01-2020 03:27:36 AM'),
(189, 'estella', '2019-09-10 12:00:02', '13-05-2020 05:53:48 PM'),
(190, 'amata', '2019-09-10 12:30:42', '04-01-2020 03:27:36 AM'),
(191, 'estella', '2019-09-10 12:43:03', '13-05-2020 05:53:48 PM'),
(192, 'amata', '2019-09-10 12:46:45', '04-01-2020 03:27:36 AM'),
(193, 'estella', '2019-09-10 12:50:54', '13-05-2020 05:53:48 PM'),
(194, 'amata', '2019-09-10 12:51:45', '04-01-2020 03:27:36 AM'),
(195, 'estella', '2019-09-11 07:34:20', '13-05-2020 05:53:48 PM'),
(196, 'amata', '2019-09-11 07:40:35', '04-01-2020 03:27:36 AM'),
(197, 'estella', '2019-09-11 08:14:50', '13-05-2020 05:53:48 PM'),
(198, 'amata', '2019-09-11 08:19:40', '04-01-2020 03:27:36 AM'),
(199, 'niyo', '2019-09-11 08:21:19', '08-10-2019 10:16:06 AM'),
(200, 'niyo', '2019-09-11 08:55:15', '08-10-2019 10:16:06 AM'),
(201, 'amata', '2019-09-11 08:57:17', '04-01-2020 03:27:36 AM'),
(202, 'niyo', '2019-09-11 09:13:43', '08-10-2019 10:16:06 AM'),
(203, 'amata', '2019-09-11 09:20:25', '04-01-2020 03:27:36 AM'),
(204, 'estella', '2019-09-11 09:24:35', '13-05-2020 05:53:48 PM'),
(205, 'amata', '2019-09-11 09:42:15', '04-01-2020 03:27:36 AM'),
(206, 'niyo', '2019-09-11 09:47:22', '08-10-2019 10:16:06 AM'),
(207, 'estella', '2019-09-11 09:53:29', '13-05-2020 05:53:48 PM'),
(208, 'estella', '2019-09-11 10:07:19', '13-05-2020 05:53:48 PM'),
(209, 'estella', '2019-09-11 10:08:41', '13-05-2020 05:53:48 PM'),
(210, 'estella', '2019-09-11 14:55:08', '13-05-2020 05:53:48 PM'),
(211, 'estella', '2019-09-12 08:54:50', '13-05-2020 05:53:48 PM'),
(212, 'estella', '2019-09-13 09:46:19', '13-05-2020 05:53:48 PM'),
(213, 'amata', '2019-09-13 11:44:25', '04-01-2020 03:27:36 AM'),
(214, 'estella', '2019-09-13 14:22:06', '13-05-2020 05:53:48 PM'),
(215, 'estella', '2019-09-15 10:53:06', '13-05-2020 05:53:48 PM'),
(216, 'estella', '2019-09-17 07:36:05', '13-05-2020 05:53:48 PM'),
(217, 'estella', '2019-09-17 09:14:36', '13-05-2020 05:53:48 PM'),
(218, 'amata', '2019-09-17 09:21:25', '04-01-2020 03:27:36 AM'),
(219, 'estella', '2019-09-17 09:30:34', '13-05-2020 05:53:48 PM'),
(220, 'niyo', '2019-09-17 09:45:47', '08-10-2019 10:16:06 AM'),
(221, 'estella', '2019-09-17 10:31:16', '13-05-2020 05:53:48 PM'),
(222, 'niyo', '2019-09-17 10:42:58', '08-10-2019 10:16:06 AM'),
(223, 'amata', '2019-09-17 10:43:39', '04-01-2020 03:27:36 AM'),
(224, 'niyo', '2019-09-17 10:59:43', '08-10-2019 10:16:06 AM'),
(225, 'niyo', '2019-09-17 11:01:37', '08-10-2019 10:16:06 AM'),
(226, 'estella', '2019-09-17 11:02:51', '13-05-2020 05:53:48 PM'),
(227, 'niyo', '2019-09-17 11:04:45', '08-10-2019 10:16:06 AM'),
(228, 'estella', '2019-09-17 11:12:04', '13-05-2020 05:53:48 PM'),
(229, 'niyo', '2019-09-17 12:16:13', '08-10-2019 10:16:06 AM'),
(230, 'niyo', '2019-09-17 13:33:34', '08-10-2019 10:16:06 AM'),
(231, 'niyo', '2019-09-18 08:51:04', '08-10-2019 10:16:06 AM'),
(232, 'estella', '2019-09-18 09:10:35', '13-05-2020 05:53:48 PM'),
(233, 'niyo', '2019-09-18 09:26:01', '08-10-2019 10:16:06 AM'),
(234, 'estella', '2019-09-18 09:27:41', '13-05-2020 05:53:48 PM'),
(235, 'niyo', '2019-09-18 10:33:32', '08-10-2019 10:16:06 AM'),
(236, 'estella', '2019-09-18 11:39:12', '13-05-2020 05:53:48 PM'),
(237, 'niyo', '2019-09-18 11:40:45', '08-10-2019 10:16:06 AM'),
(238, 'estella', '2019-09-18 11:43:44', '13-05-2020 05:53:48 PM'),
(239, 'estella', '2019-09-18 11:48:28', '13-05-2020 05:53:48 PM'),
(240, 'niyo', '2019-09-18 11:48:41', '08-10-2019 10:16:06 AM'),
(241, 'amata', '2019-09-19 05:35:05', '04-01-2020 03:27:36 AM'),
(242, 'estella', '2019-09-19 05:37:51', '13-05-2020 05:53:48 PM'),
(243, 'amata', '2019-09-19 05:40:53', '04-01-2020 03:27:36 AM'),
(244, 'amata', '2019-09-19 05:44:56', '04-01-2020 03:27:36 AM'),
(245, 'estella', '2019-09-19 05:51:55', '13-05-2020 05:53:48 PM'),
(246, 'amata', '2019-09-19 05:53:07', '04-01-2020 03:27:36 AM'),
(247, 'estella', '2019-09-19 05:54:28', '13-05-2020 05:53:48 PM'),
(248, 'amata', '2019-09-19 05:55:23', '04-01-2020 03:27:36 AM'),
(249, 'estella', '2019-09-19 05:58:16', '13-05-2020 05:53:48 PM'),
(250, 'amata', '2019-09-19 05:58:57', '04-01-2020 03:27:36 AM'),
(251, 'estella', '2019-09-19 06:01:06', '13-05-2020 05:53:48 PM'),
(252, 'amata', '2019-09-19 06:37:02', '04-01-2020 03:27:36 AM'),
(253, 'estella', '2019-09-19 06:38:18', '13-05-2020 05:53:48 PM'),
(254, 'amata', '2019-09-19 06:38:44', '04-01-2020 03:27:36 AM'),
(255, 'estella', '2019-09-19 06:39:57', '13-05-2020 05:53:48 PM'),
(256, 'amata', '2019-09-19 06:55:38', '04-01-2020 03:27:36 AM'),
(257, 'estella', '2019-09-19 06:57:26', '13-05-2020 05:53:48 PM'),
(258, 'amata', '2019-09-19 06:57:51', '04-01-2020 03:27:36 AM'),
(259, 'estella', '2019-09-19 06:58:37', '13-05-2020 05:53:48 PM'),
(260, 'amata', '2019-09-19 07:01:11', '04-01-2020 03:27:36 AM'),
(261, 'amata', '2019-09-19 07:08:03', '04-01-2020 03:27:36 AM'),
(262, 'estella', '2019-09-19 07:12:11', '13-05-2020 05:53:48 PM'),
(263, 'amata', '2019-09-19 07:12:52', '04-01-2020 03:27:36 AM'),
(264, 'estella', '2019-09-19 07:29:22', '13-05-2020 05:53:48 PM'),
(265, 'amata', '2019-09-19 07:30:03', '04-01-2020 03:27:36 AM'),
(266, 'niyo', '2019-09-19 07:33:25', '08-10-2019 10:16:06 AM'),
(267, 'estella', '2019-09-19 07:34:19', '13-05-2020 05:53:48 PM'),
(268, 'niyo', '2019-09-19 07:34:40', '08-10-2019 10:16:06 AM'),
(269, 'amata', '2019-09-19 07:48:22', '04-01-2020 03:27:36 AM'),
(270, 'amata', '2019-09-19 08:02:33', '04-01-2020 03:27:36 AM'),
(271, 'estella', '2019-09-19 08:03:30', '13-05-2020 05:53:48 PM'),
(272, 'amata', '2019-09-19 08:03:45', '04-01-2020 03:27:36 AM'),
(273, 'estella', '2019-09-19 08:33:21', '13-05-2020 05:53:48 PM'),
(274, 'amata', '2019-09-19 08:35:27', '04-01-2020 03:27:36 AM'),
(275, 'estella', '2019-09-19 08:36:21', '13-05-2020 05:53:48 PM'),
(276, 'amata', '2019-09-19 08:36:40', '04-01-2020 03:27:36 AM'),
(277, 'estella', '2019-09-19 08:37:33', '13-05-2020 05:53:48 PM'),
(278, 'amata', '2019-09-19 08:37:48', '04-01-2020 03:27:36 AM'),
(279, 'amata', '2019-09-19 08:41:00', '04-01-2020 03:27:36 AM'),
(280, 'amata', '2019-09-19 08:45:21', '04-01-2020 03:27:36 AM'),
(281, 'amata', '2019-09-19 08:46:25', '04-01-2020 03:27:36 AM'),
(282, 'niyo', '2019-09-19 08:47:18', '08-10-2019 10:16:06 AM'),
(283, 'estella', '2019-09-19 08:48:12', '13-05-2020 05:53:48 PM'),
(284, 'niyo', '2019-09-19 08:48:37', '08-10-2019 10:16:06 AM'),
(285, 'estella', '2019-09-19 08:58:55', '13-05-2020 05:53:48 PM'),
(286, 'niyo', '2019-09-19 08:59:13', '08-10-2019 10:16:06 AM'),
(287, 'estella', '2019-09-19 09:02:48', '13-05-2020 05:53:48 PM'),
(288, 'niyo', '2019-09-19 09:03:25', '08-10-2019 10:16:06 AM'),
(289, 'niyo', '2019-09-19 09:04:24', '08-10-2019 10:16:06 AM'),
(290, 'niyo', '2019-09-19 09:08:56', '08-10-2019 10:16:06 AM'),
(291, 'estella', '2019-09-19 09:09:35', '13-05-2020 05:53:48 PM'),
(292, 'niyo', '2019-09-19 09:10:02', '08-10-2019 10:16:06 AM'),
(293, 'estella', '2019-09-19 09:12:22', '13-05-2020 05:53:48 PM'),
(294, 'niyo', '2019-09-19 09:13:31', '08-10-2019 10:16:06 AM'),
(295, 'estella', '2019-09-19 09:16:37', '13-05-2020 05:53:48 PM'),
(296, 'niyo', '2019-09-19 09:17:02', '08-10-2019 10:16:06 AM'),
(297, 'estella', '2019-09-19 09:18:58', '13-05-2020 05:53:48 PM'),
(298, 'niyo', '2019-09-19 09:19:48', '08-10-2019 10:16:06 AM'),
(299, 'estella', '2019-09-19 09:21:28', '13-05-2020 05:53:48 PM'),
(300, 'niyo', '2019-09-19 09:21:42', '08-10-2019 10:16:06 AM'),
(301, 'estella', '2019-10-04 12:53:01', '13-05-2020 05:53:48 PM'),
(302, 'niyo', '2019-10-04 12:54:59', '08-10-2019 10:16:06 AM'),
(303, 'estella', '2019-10-04 18:40:39', '13-05-2020 05:53:48 PM'),
(304, 'vivi', '2019-10-04 20:49:25', '08-10-2019 09:57:02 AM'),
(305, 'niyo', '2019-10-04 20:51:49', '08-10-2019 10:16:06 AM'),
(306, 'estella', '2019-10-04 20:56:45', '13-05-2020 05:53:48 PM'),
(307, 'niyo', '2019-10-04 21:01:24', '08-10-2019 10:16:06 AM'),
(308, 'niyo', '2019-10-04 21:03:09', '08-10-2019 10:16:06 AM'),
(309, 'estella', '2019-10-04 21:07:10', '13-05-2020 05:53:48 PM'),
(310, 'niyo', '2019-10-04 21:08:45', '08-10-2019 10:16:06 AM'),
(311, 'niyo', '2019-10-04 21:22:36', '08-10-2019 10:16:06 AM'),
(312, 'estella', '2019-10-04 21:29:39', '13-05-2020 05:53:48 PM'),
(313, 'estella', '2019-10-04 21:46:57', '13-05-2020 05:53:48 PM'),
(314, 'estella', '2019-10-04 22:04:15', '13-05-2020 05:53:48 PM'),
(315, 'niyo', '2019-10-04 22:15:15', '08-10-2019 10:16:06 AM'),
(316, 'estella', '2019-10-04 22:32:39', '13-05-2020 05:53:48 PM'),
(317, 'niyo', '2019-10-04 23:01:41', '08-10-2019 10:16:06 AM'),
(318, 'estella', '2019-10-04 23:05:54', '13-05-2020 05:53:48 PM'),
(319, 'estella', '2019-10-04 23:22:21', '13-05-2020 05:53:48 PM'),
(320, 'niyo', '2019-10-04 23:23:17', '08-10-2019 10:16:06 AM'),
(321, 'estella', '2019-10-04 23:24:59', '13-05-2020 05:53:48 PM'),
(322, 'estella', '2019-10-05 13:13:37', '13-05-2020 05:53:48 PM'),
(323, 'niyo', '2019-10-05 13:14:47', '08-10-2019 10:16:06 AM'),
(324, 'estella', '2019-10-05 13:20:50', '13-05-2020 05:53:48 PM'),
(325, 'niyo', '2019-10-05 17:02:37', '08-10-2019 10:16:06 AM'),
(326, 'estella', '2019-10-05 17:06:59', '13-05-2020 05:53:48 PM'),
(327, 'estella', '2019-10-07 19:21:02', '13-05-2020 05:53:48 PM'),
(328, 'niyo', '2019-10-07 20:10:17', '08-10-2019 10:16:06 AM'),
(329, 'estella', '2019-10-07 21:00:05', '13-05-2020 05:53:48 PM'),
(330, 'niyo', '2019-10-07 21:01:32', '08-10-2019 10:16:06 AM'),
(331, 'vivi', '2019-10-07 21:48:27', '08-10-2019 09:57:02 AM'),
(332, 'niyo', '2019-10-07 21:50:05', '08-10-2019 10:16:06 AM'),
(333, 'niyo', '2019-10-07 22:14:48', '08-10-2019 10:16:06 AM'),
(334, 'estella', '2019-10-07 22:23:27', '13-05-2020 05:53:48 PM'),
(335, 'niyo', '2019-10-07 23:24:46', '08-10-2019 10:16:06 AM'),
(336, 'estella', '2019-10-08 09:24:05', '13-05-2020 05:53:48 PM'),
(337, 'vivi', '2019-10-08 13:11:01', '08-10-2019 09:57:02 AM'),
(338, 'estella', '2019-10-08 13:18:51', '13-05-2020 05:53:48 PM'),
(339, 'niyo', '2019-10-08 13:22:30', '08-10-2019 10:16:06 AM'),
(340, 'estella', '2019-10-08 13:25:53', '13-05-2020 05:53:48 PM'),
(341, 'niyo', '2019-10-08 16:53:42', '08-10-2019 10:16:06 AM'),
(342, 'vivi', '2019-10-08 16:54:18', '08-10-2019 09:57:02 AM'),
(343, 'niyo', '2019-10-08 16:57:11', '08-10-2019 10:16:06 AM'),
(344, 'niyo', '2019-10-08 17:05:51', '08-10-2019 10:16:06 AM'),
(345, 'estella', '2019-10-08 17:16:19', '13-05-2020 05:53:48 PM'),
(346, 'estella', '2019-10-09 07:26:43', '13-05-2020 05:53:48 PM'),
(347, 'niyo', '2019-10-09 07:31:36', ''),
(348, 'estella', '2019-10-09 08:06:58', '13-05-2020 05:53:48 PM'),
(349, 'niyo', '2019-10-09 08:38:13', ''),
(350, 'estella', '2020-01-03 11:01:33', '13-05-2020 05:53:48 PM'),
(351, 'amata', '2020-01-03 11:05:58', '04-01-2020 03:27:36 AM'),
(352, 'amata', '2020-01-03 11:16:22', '04-01-2020 03:27:36 AM'),
(353, 'estella', '2020-01-03 11:16:34', '13-05-2020 05:53:48 PM'),
(354, 'amata', '2020-01-03 14:42:28', '04-01-2020 03:27:36 AM'),
(355, 'estella', '2020-01-03 14:48:11', '13-05-2020 05:53:48 PM'),
(356, 'amata', '2020-01-03 14:53:19', '04-01-2020 03:27:36 AM'),
(357, 'estella', '2020-01-03 14:59:52', '13-05-2020 05:53:48 PM'),
(358, 'estella', '2020-01-04 06:01:24', '13-05-2020 05:53:48 PM'),
(359, 'amata', '2020-01-04 08:31:52', '04-01-2020 03:27:36 AM'),
(360, 'estella', '2020-01-04 09:03:35', '13-05-2020 05:53:48 PM'),
(361, 'amata', '2020-01-04 09:12:03', '04-01-2020 03:27:36 AM'),
(362, 'amata', '2020-01-04 11:27:13', '04-01-2020 03:27:36 AM'),
(363, 'estella', '2020-01-04 11:27:55', '13-05-2020 05:53:48 PM'),
(364, 'amata', '2020-01-04 11:47:57', ''),
(365, 'estella', '2020-01-04 14:29:24', '13-05-2020 05:53:48 PM'),
(366, 'estella', '2020-01-04 14:32:12', '13-05-2020 05:53:48 PM'),
(367, 'mimi@123', '2020-01-04 14:41:15', '11-05-2020 03:42:57 PM'),
(368, 'mimi@123', '2020-01-04 19:55:16', '11-05-2020 03:42:57 PM'),
(369, 'jass@123', '2020-01-04 20:01:15', '14-05-2020 05:15:16 PM'),
(370, 'mimi@123', '2020-01-05 05:14:51', '11-05-2020 03:42:57 PM'),
(371, 'jass@123', '2020-01-05 05:17:34', '14-05-2020 05:15:16 PM'),
(372, 'mimi@123', '2020-01-05 05:28:04', '11-05-2020 03:42:57 PM'),
(373, 'jass@123', '2020-01-05 05:31:53', '14-05-2020 05:15:16 PM'),
(374, 'mimi@123', '2020-01-05 05:50:26', '11-05-2020 03:42:57 PM'),
(375, 'jass@123', '2020-01-05 05:53:15', '14-05-2020 05:15:16 PM'),
(376, 'mimi@123', '2020-01-05 05:58:25', '11-05-2020 03:42:57 PM'),
(377, 'mimi@123', '2020-01-05 06:01:51', '11-05-2020 03:42:57 PM'),
(378, 'jass@123', '2020-01-05 06:02:31', '14-05-2020 05:15:16 PM'),
(379, 'mimi@123', '2020-01-05 06:26:17', '11-05-2020 03:42:57 PM'),
(380, 'jass@123', '2020-01-05 06:28:07', '14-05-2020 05:15:16 PM'),
(381, 'mimi@123', '2020-01-05 08:21:31', '11-05-2020 03:42:57 PM'),
(382, 'jass@123', '2020-01-05 08:23:20', '14-05-2020 05:15:16 PM'),
(383, 'mimi@123', '2020-01-05 09:54:29', '11-05-2020 03:42:57 PM'),
(384, 'jass@123', '2020-01-05 09:56:55', '14-05-2020 05:15:16 PM'),
(385, 'jass@123', '2020-01-05 10:07:58', '14-05-2020 05:15:16 PM'),
(386, 'mimi@123', '2020-01-05 10:09:26', '11-05-2020 03:42:57 PM'),
(387, 'jass@123', '2020-01-05 10:11:35', '14-05-2020 05:15:16 PM'),
(388, 'jass@123', '2020-01-05 10:32:49', '14-05-2020 05:15:16 PM'),
(389, 'jass@123', '2020-01-05 10:35:15', '14-05-2020 05:15:16 PM'),
(390, 'jass@123', '2020-01-05 10:39:34', '14-05-2020 05:15:16 PM'),
(391, 'jass@123', '2020-01-05 23:49:12', '14-05-2020 05:15:16 PM'),
(392, 'mimi@123', '2020-01-05 23:56:19', '11-05-2020 03:42:57 PM'),
(393, 'jass@123', '2020-01-05 23:57:44', '14-05-2020 05:15:16 PM'),
(394, 'jass@123', '2020-01-06 00:01:46', '14-05-2020 05:15:16 PM'),
(395, 'mimi@123', '2020-01-06 00:11:55', '11-05-2020 03:42:57 PM'),
(396, 'mimi@123', '2020-01-06 00:11:59', '11-05-2020 03:42:57 PM'),
(397, 'mimi@123', '2020-01-06 00:12:03', '11-05-2020 03:42:57 PM'),
(398, 'jass@123', '2020-01-06 00:13:20', '14-05-2020 05:15:16 PM'),
(399, 'mimi@123', '2020-01-06 00:22:14', '11-05-2020 03:42:57 PM'),
(400, 'jass@123', '2020-01-06 00:39:55', '14-05-2020 05:15:16 PM'),
(401, 'mimi@123', '2020-01-06 00:45:07', '11-05-2020 03:42:57 PM'),
(402, 'jass@123', '2020-01-06 01:13:26', '14-05-2020 05:15:16 PM'),
(403, 'mimi@123', '2020-01-06 01:14:34', '11-05-2020 03:42:57 PM'),
(404, 'jass@123', '2020-01-06 03:59:37', '14-05-2020 05:15:16 PM'),
(405, 'mimi@123', '2020-01-06 04:03:43', '11-05-2020 03:42:57 PM'),
(406, 'mimi@123', '2020-01-06 04:38:40', '11-05-2020 03:42:57 PM'),
(407, 'jass@123', '2020-01-06 04:59:00', '14-05-2020 05:15:16 PM'),
(408, 'mimi@123', '2020-01-06 05:04:31', '11-05-2020 03:42:57 PM'),
(409, 'jass@123', '2020-01-06 05:50:51', '14-05-2020 05:15:16 PM'),
(410, 'mimi@123', '2020-01-06 05:51:50', '11-05-2020 03:42:57 PM'),
(411, 'jass@123', '2020-01-06 06:12:09', '14-05-2020 05:15:16 PM'),
(412, 'mimi@123', '2020-01-06 08:41:45', '11-05-2020 03:42:57 PM'),
(413, 'jass@123', '2020-01-06 08:43:02', '14-05-2020 05:15:16 PM'),
(414, 'mimi@123', '2020-01-06 09:00:24', '11-05-2020 03:42:57 PM'),
(415, 'jass@123', '2020-01-06 09:19:08', '14-05-2020 05:15:16 PM'),
(416, 'mimi@123', '2020-01-06 09:26:37', '11-05-2020 03:42:57 PM'),
(417, 'mimi@123', '2020-01-13 07:10:21', '11-05-2020 03:42:57 PM'),
(418, 'mimi@123', '2020-01-13 07:15:13', '11-05-2020 03:42:57 PM'),
(419, 'mimi@123', '2020-01-14 11:38:30', '11-05-2020 03:42:57 PM'),
(420, 'mimi@123', '2020-01-14 12:50:47', '11-05-2020 03:42:57 PM'),
(421, 'jass@123', '2020-01-14 15:15:58', '14-05-2020 05:15:16 PM'),
(422, 'mimi@123', '2020-01-14 15:42:05', '11-05-2020 03:42:57 PM'),
(423, 'mimi@123', '2020-01-14 15:43:31', '11-05-2020 03:42:57 PM'),
(424, 'jass@123', '2020-01-14 15:49:00', '14-05-2020 05:15:16 PM'),
(425, 'jass@123', '2020-01-14 15:51:14', '14-05-2020 05:15:16 PM'),
(426, 'jass@123', '2020-01-15 06:36:37', '14-05-2020 05:15:16 PM'),
(427, 'jass@123', '2020-01-15 06:46:18', '14-05-2020 05:15:16 PM'),
(428, 'jass@123', '2020-01-15 06:50:53', '14-05-2020 05:15:16 PM'),
(429, 'jass@123', '2020-01-15 06:52:50', '14-05-2020 05:15:16 PM'),
(430, 'jass@123', '2020-01-15 07:11:27', '14-05-2020 05:15:16 PM'),
(431, 'jass@123', '2020-01-15 07:13:15', '14-05-2020 05:15:16 PM'),
(432, 'jass@123', '2020-01-15 07:17:07', '14-05-2020 05:15:16 PM'),
(433, 'jass@123', '2020-01-15 07:17:47', '14-05-2020 05:15:16 PM'),
(434, 'jass@123', '2020-01-15 07:18:42', '14-05-2020 05:15:16 PM'),
(435, 'jass@123', '2020-01-15 07:19:47', '14-05-2020 05:15:16 PM'),
(436, 'jass@123', '2020-01-15 07:22:36', '14-05-2020 05:15:16 PM'),
(437, 'mimi@123', '2020-01-15 07:23:50', '11-05-2020 03:42:57 PM'),
(438, 'jass@123', '2020-01-15 07:25:40', '14-05-2020 05:15:16 PM'),
(439, 'mimi@123', '2020-01-15 08:27:28', '11-05-2020 03:42:57 PM'),
(440, 'jass@123', '2020-01-15 08:36:21', '14-05-2020 05:15:16 PM'),
(441, 'jass@123', '2020-01-15 10:04:51', '14-05-2020 05:15:16 PM'),
(442, 'jass@123', '2020-01-15 10:16:57', '14-05-2020 05:15:16 PM'),
(443, 'jass@123', '2020-01-15 10:18:16', '14-05-2020 05:15:16 PM'),
(444, 'jass@123', '2020-01-15 10:19:28', '14-05-2020 05:15:16 PM'),
(445, 'jass@123', '2020-01-15 11:56:15', '14-05-2020 05:15:16 PM'),
(446, 'jass@123', '2020-01-15 12:07:28', '14-05-2020 05:15:16 PM'),
(447, 'jass@123', '2020-01-16 16:32:01', '14-05-2020 05:15:16 PM'),
(448, 'mimi@123', '2020-01-16 17:55:19', '11-05-2020 03:42:57 PM'),
(449, 'jass@123', '2020-01-16 17:59:50', '14-05-2020 05:15:16 PM'),
(450, 'jass@123', '2020-01-16 18:11:08', '14-05-2020 05:15:16 PM'),
(451, 'jass@123', '2020-01-17 17:34:25', '14-05-2020 05:15:16 PM'),
(452, 'jass@123', '2020-01-17 18:16:41', '14-05-2020 05:15:16 PM'),
(453, 'jass@123', '2020-01-17 21:06:56', '14-05-2020 05:15:16 PM'),
(454, 'mimi@123', '2020-01-17 21:11:22', '11-05-2020 03:42:57 PM'),
(455, 'jass@123', '2020-01-17 21:13:29', '14-05-2020 05:15:16 PM'),
(456, 'jass@123', '2020-01-17 23:05:02', '14-05-2020 05:15:16 PM'),
(457, 'jass@123', '2020-01-18 00:46:08', '14-05-2020 05:15:16 PM'),
(458, 'jass@123', '2020-01-20 16:10:44', '14-05-2020 05:15:16 PM'),
(459, 'jass@123', '2020-01-20 16:30:14', '14-05-2020 05:15:16 PM'),
(460, 'jass@123', '2020-01-20 17:50:58', '14-05-2020 05:15:16 PM'),
(461, 'jass@123', '2020-01-21 05:57:11', '14-05-2020 05:15:16 PM'),
(462, 'mimi@123', '2020-01-22 02:09:20', '11-05-2020 03:42:57 PM'),
(463, 'jass@123', '2020-01-22 02:11:07', '14-05-2020 05:15:16 PM'),
(464, 'jass@123', '2020-01-22 06:24:23', '14-05-2020 05:15:16 PM'),
(465, 'jass@123', '2020-01-22 18:12:07', '14-05-2020 05:15:16 PM'),
(466, 'jass@123', '2020-01-23 17:28:35', '14-05-2020 05:15:16 PM'),
(467, 'jass@123', '2020-01-24 17:04:46', '14-05-2020 05:15:16 PM'),
(468, 'estella', '2020-01-24 18:09:37', '13-05-2020 05:53:48 PM'),
(469, 'mimi@123', '2020-01-25 00:58:53', '11-05-2020 03:42:57 PM'),
(470, 'umimana', '2020-01-25 01:02:10', '30-04-2020 09:27:24 PM'),
(471, 'mimi@123', '2020-01-25 01:46:48', '11-05-2020 03:42:57 PM'),
(472, 'jass@123', '2020-01-26 18:08:42', '14-05-2020 05:15:16 PM'),
(473, 'mimi@123', '2020-01-27 12:01:35', '11-05-2020 03:42:57 PM'),
(474, 'mimi@123', '2020-01-28 17:00:54', '11-05-2020 03:42:57 PM'),
(475, 'umimana', '2020-01-28 17:03:22', '30-04-2020 09:27:24 PM'),
(476, 'jass@123', '2020-01-28 19:57:57', '14-05-2020 05:15:16 PM'),
(477, 'umimana', '2020-01-28 20:11:33', '30-04-2020 09:27:24 PM'),
(478, 'umimana', '2020-01-29 16:50:04', '30-04-2020 09:27:24 PM'),
(479, 'umimana', '2020-01-30 00:03:01', '30-04-2020 09:27:24 PM'),
(480, 'umimana', '2020-01-30 16:49:54', '30-04-2020 09:27:24 PM'),
(481, 'umimana', '2020-01-31 17:15:26', '30-04-2020 09:27:24 PM'),
(482, 'umimana', '2020-01-31 22:48:30', '30-04-2020 09:27:24 PM'),
(483, 'umimana', '2020-02-04 16:36:12', '30-04-2020 09:27:24 PM'),
(484, 'mimi@123', '2020-02-04 23:52:31', '11-05-2020 03:42:57 PM'),
(485, 'mimi@123', '2020-02-05 00:27:43', '11-05-2020 03:42:57 PM'),
(486, 'umimana', '2020-02-05 16:40:42', '30-04-2020 09:27:24 PM'),
(487, 'mimi@123', '2020-02-05 17:12:40', '11-05-2020 03:42:57 PM'),
(488, 'mimi@123', '2020-02-06 16:17:35', '11-05-2020 03:42:57 PM'),
(489, 'mimi@123', '2020-02-06 18:23:11', '11-05-2020 03:42:57 PM'),
(490, 'mimi@123', '2020-02-10 16:29:38', '11-05-2020 03:42:57 PM'),
(491, 'mimi@123', '2020-02-11 16:28:46', '11-05-2020 03:42:57 PM'),
(492, 'mimi@123', '2020-02-12 16:08:45', '11-05-2020 03:42:57 PM'),
(493, 'mimi@123', '2020-02-12 21:39:51', '11-05-2020 03:42:57 PM'),
(494, 'umimana', '2020-02-13 01:28:15', '30-04-2020 09:27:24 PM'),
(495, 'umimana', '2020-02-13 16:13:27', '30-04-2020 09:27:24 PM'),
(496, 'mimi@123', '2020-02-13 16:47:21', '11-05-2020 03:42:57 PM'),
(497, 'umimana', '2020-02-13 17:09:41', '30-04-2020 09:27:24 PM'),
(498, 'mimi@123', '2020-02-13 17:31:07', '11-05-2020 03:42:57 PM'),
(499, 'umimana', '2020-02-13 17:37:51', '30-04-2020 09:27:24 PM'),
(500, 'umimana', '2020-02-13 18:21:41', '30-04-2020 09:27:24 PM'),
(501, 'umimana', '2020-02-13 20:54:18', '30-04-2020 09:27:24 PM'),
(502, 'mimi@123', '2020-02-13 22:53:36', '11-05-2020 03:42:57 PM'),
(503, 'mimi@123', '2020-02-14 16:58:44', '11-05-2020 03:42:57 PM'),
(504, 'mimi@123', '2020-02-17 16:26:42', '11-05-2020 03:42:57 PM'),
(505, 'mimi@123', '2020-02-19 16:30:57', '11-05-2020 03:42:57 PM'),
(506, 'umimana', '2020-02-19 18:10:18', '30-04-2020 09:27:24 PM'),
(507, 'mimi@123', '2020-02-20 17:40:44', '11-05-2020 03:42:57 PM'),
(508, 'umimana', '2020-02-20 18:17:54', '30-04-2020 09:27:24 PM'),
(509, 'mimi@123', '2020-02-21 17:11:02', '11-05-2020 03:42:57 PM'),
(510, 'umimana', '2020-02-21 17:55:50', '30-04-2020 09:27:24 PM'),
(511, 'umimana', '2020-02-24 16:44:09', '30-04-2020 09:27:24 PM'),
(512, 'umimana', '2020-02-24 17:13:34', '30-04-2020 09:27:24 PM'),
(513, 'umimana', '2020-02-25 00:55:31', '30-04-2020 09:27:24 PM'),
(514, 'umimana', '2020-02-25 16:26:20', '30-04-2020 09:27:24 PM'),
(515, 'mimi@123', '2020-02-25 17:08:23', '11-05-2020 03:42:57 PM'),
(516, 'mimi@123', '2020-02-25 18:26:35', '11-05-2020 03:42:57 PM'),
(517, 'umimana', '2020-02-25 19:55:44', '30-04-2020 09:27:24 PM'),
(518, 'mimi@123', '2020-02-25 22:20:13', '11-05-2020 03:42:57 PM'),
(519, 'mimi@123', '2020-02-26 17:16:22', '11-05-2020 03:42:57 PM'),
(520, 'umimana', '2020-02-26 17:19:06', '30-04-2020 09:27:24 PM'),
(521, 'mimi@123', '2020-02-26 18:28:29', '11-05-2020 03:42:57 PM'),
(522, 'umimana', '2020-02-26 22:31:05', '30-04-2020 09:27:24 PM'),
(523, 'umimana', '2020-02-26 22:45:16', '30-04-2020 09:27:24 PM'),
(524, 'mimi@123', '2020-02-26 23:46:20', '11-05-2020 03:42:57 PM'),
(525, 'umimana', '2020-02-26 23:47:04', '30-04-2020 09:27:24 PM'),
(526, 'mimi@123', '2020-02-27 17:07:10', '11-05-2020 03:42:57 PM'),
(527, 'mimi@123', '2020-02-27 17:09:08', '11-05-2020 03:42:57 PM'),
(528, 'mimi@123', '2020-02-27 18:28:43', '11-05-2020 03:42:57 PM'),
(529, 'cycyagahire', '2020-02-27 18:35:15', '16-04-2020 01:26:30 PM'),
(530, 'mimi@123', '2020-02-27 19:55:58', '11-05-2020 03:42:57 PM'),
(531, 'cycyagahire', '2020-02-27 20:27:03', '16-04-2020 01:26:30 PM'),
(532, 'cycyagahire', '2020-02-27 21:37:21', '16-04-2020 01:26:30 PM'),
(533, 'cycyagahire', '2020-02-27 21:51:31', '16-04-2020 01:26:30 PM'),
(534, 'cycyagahire', '2020-02-27 21:53:52', '16-04-2020 01:26:30 PM'),
(535, 'cycyagahire', '2020-02-27 21:57:17', '16-04-2020 01:26:30 PM'),
(536, 'cycyagahire', '2020-02-27 22:05:00', '16-04-2020 01:26:30 PM'),
(537, 'cycyagahire', '2020-02-27 22:48:02', '16-04-2020 01:26:30 PM'),
(538, 'cycyagahire', '2020-02-27 22:53:58', '16-04-2020 01:26:30 PM'),
(539, 'cycyagahire', '2020-02-27 23:00:56', '16-04-2020 01:26:30 PM'),
(540, 'cycyagahire', '2020-02-28 00:16:59', '16-04-2020 01:26:30 PM'),
(541, 'cycyagahire', '2020-02-28 00:22:59', '16-04-2020 01:26:30 PM'),
(542, 'cycyagahire', '2020-02-28 00:48:20', '16-04-2020 01:26:30 PM'),
(543, 'cycyagahire', '2020-02-28 18:45:15', '16-04-2020 01:26:30 PM'),
(544, 'cycyagahire', '2020-03-02 17:09:58', '16-04-2020 01:26:30 PM'),
(545, 'mimi@123', '2020-03-02 17:11:43', '11-05-2020 03:42:57 PM'),
(546, 'cycyagahire', '2020-03-02 17:46:00', '16-04-2020 01:26:30 PM'),
(547, 'umimana', '2020-03-02 18:46:18', '30-04-2020 09:27:24 PM'),
(548, 'mimi@123', '2020-03-03 01:53:28', '11-05-2020 03:42:57 PM'),
(549, 'cycyagahire', '2020-03-03 17:55:43', '16-04-2020 01:26:30 PM'),
(550, 'mimi@123', '2020-03-03 18:43:11', '11-05-2020 03:42:57 PM'),
(551, 'cycyagahire', '2020-03-03 18:44:21', '16-04-2020 01:26:30 PM'),
(552, 'mimi@123', '2020-03-04 01:28:48', '11-05-2020 03:42:57 PM'),
(553, 'mimi@123', '2020-03-04 17:21:23', '11-05-2020 03:42:57 PM'),
(554, 'mimi@123', '2020-03-05 01:41:02', '11-05-2020 03:42:57 PM'),
(555, 'mimi@123', '2020-03-05 10:24:07', '11-05-2020 03:42:57 PM'),
(556, 'cycyagahire', '2020-03-05 10:36:20', '16-04-2020 01:26:30 PM'),
(557, 'mimi@123', '2020-03-05 10:38:03', '11-05-2020 03:42:57 PM'),
(558, 'cycyagahire', '2020-03-05 10:41:35', '16-04-2020 01:26:30 PM'),
(559, 'mimi@123', '2020-03-05 10:42:49', '11-05-2020 03:42:57 PM'),
(560, 'mimi@123', '2020-03-05 16:25:14', '11-05-2020 03:42:57 PM'),
(561, 'cycyagahire', '2020-03-05 17:12:52', '16-04-2020 01:26:30 PM'),
(562, 'mimi@123', '2020-03-05 17:36:46', '11-05-2020 03:42:57 PM'),
(563, 'mimi@123', '2020-03-06 00:06:54', '11-05-2020 03:42:57 PM'),
(564, 'terry@123', '2020-03-06 00:11:30', '14-05-2020 08:05:40 AM'),
(565, 'mimi@123', '2020-03-06 03:45:14', '11-05-2020 03:42:57 PM'),
(566, 'mimi@123', '2020-03-06 05:51:24', '11-05-2020 03:42:57 PM'),
(567, 'mimi@123', '2020-03-06 14:53:50', '11-05-2020 03:42:57 PM'),
(568, 'mimi@123', '2020-03-06 14:59:00', '11-05-2020 03:42:57 PM'),
(569, 'cycyagahire', '2020-03-06 15:00:14', '16-04-2020 01:26:30 PM'),
(570, 'jass@123', '2020-03-06 15:08:08', '14-05-2020 05:15:16 PM'),
(571, 'cycyagahire', '2020-03-06 15:12:28', '16-04-2020 01:26:30 PM'),
(572, 'jass@123', '2020-03-06 15:22:48', '14-05-2020 05:15:16 PM'),
(573, 'cycyagahire', '2020-03-06 15:23:42', '16-04-2020 01:26:30 PM'),
(574, 'mimi@123', '2020-03-06 15:31:41', '11-05-2020 03:42:57 PM'),
(575, 'mimi@123', '2020-03-06 17:47:42', '11-05-2020 03:42:57 PM'),
(576, 'cycyagahire', '2020-03-06 18:27:13', '16-04-2020 01:26:30 PM'),
(577, 'mimi@123', '2020-03-06 18:54:07', '11-05-2020 03:42:57 PM'),
(578, 'cycyagahire', '2020-03-09 20:33:28', '16-04-2020 01:26:30 PM'),
(579, 'umimana', '2020-03-09 22:08:20', '30-04-2020 09:27:24 PM'),
(580, 'umimana', '2020-03-10 15:55:24', '30-04-2020 09:27:24 PM'),
(581, 'jass@123', '2020-03-10 22:04:54', '14-05-2020 05:15:16 PM'),
(582, 'cycyagahire', '2020-03-10 22:21:58', '16-04-2020 01:26:30 PM'),
(583, 'mimi@123', '2020-03-10 22:57:39', '11-05-2020 03:42:57 PM'),
(584, 'umimana', '2020-03-10 23:39:38', '30-04-2020 09:27:24 PM'),
(585, 'cycyagahire', '2020-03-11 15:47:57', '16-04-2020 01:26:30 PM'),
(586, 'mimi@123', '2020-03-11 15:52:42', '11-05-2020 03:42:57 PM'),
(587, 'mimi@123', '2020-03-11 15:57:16', '11-05-2020 03:42:57 PM'),
(588, 'cycyagahire', '2020-03-11 16:10:51', '16-04-2020 01:26:30 PM'),
(589, 'umimana', '2020-03-11 16:26:56', '30-04-2020 09:27:24 PM'),
(590, 'mimi@123', '2020-03-11 16:28:04', '11-05-2020 03:42:57 PM'),
(591, 'umimana', '2020-03-11 16:28:55', '30-04-2020 09:27:24 PM'),
(592, 'umimana', '2020-03-11 21:30:31', '30-04-2020 09:27:24 PM'),
(593, 'cycyagahire', '2020-03-12 16:02:55', '16-04-2020 01:26:30 PM'),
(594, 'mimi@123', '2020-03-12 16:04:13', '11-05-2020 03:42:57 PM'),
(595, 'umimana', '2020-03-12 16:09:07', '30-04-2020 09:27:24 PM'),
(596, 'mimi@123', '2020-03-12 16:32:08', '11-05-2020 03:42:57 PM'),
(597, 'mimi@123', '2020-03-12 21:25:52', '11-05-2020 03:42:57 PM'),
(598, 'Perez', '2020-03-12 21:28:12', '12-03-2020 03:03:38 PM'),
(599, 'jass@123', '2020-03-12 21:47:12', '14-05-2020 05:15:16 PM'),
(600, 'Perez', '2020-03-12 21:52:02', '12-03-2020 03:03:38 PM'),
(601, 'umimana', '2020-03-12 22:04:01', '30-04-2020 09:27:24 PM'),
(602, 'mimi@123', '2020-03-16 17:58:06', '11-05-2020 03:42:57 PM'),
(603, 'mimi@123', '2020-03-16 18:03:43', '11-05-2020 03:42:57 PM'),
(604, 'mimi@123', '2020-03-16 18:36:04', '11-05-2020 03:42:57 PM'),
(605, 'mimi@123', '2020-03-16 22:09:38', '11-05-2020 03:42:57 PM'),
(606, 'mimi@123', '2020-03-19 01:11:29', '11-05-2020 03:42:57 PM'),
(607, 'mimi@123', '2020-03-20 01:02:51', '11-05-2020 03:42:57 PM'),
(608, 'mimi@123', '2020-03-20 16:19:09', '11-05-2020 03:42:57 PM'),
(609, 'mimi@123', '2020-03-20 18:18:46', '11-05-2020 03:42:57 PM'),
(610, 'cycyagahire', '2020-03-23 17:06:34', '16-04-2020 01:26:30 PM'),
(611, 'mimi@123', '2020-03-23 18:44:07', '11-05-2020 03:42:57 PM'),
(612, 'MiriamDogo', '2020-03-23 18:47:43', '23-03-2020 11:50:35 AM'),
(613, 'MiriamDogo', '2020-03-23 18:51:13', ''),
(614, 'cycyagahire', '2020-03-24 17:39:06', '16-04-2020 01:26:30 PM'),
(615, 'umimana', '2020-03-24 17:41:50', '30-04-2020 09:27:24 PM'),
(616, 'umimana', '2020-03-25 23:00:42', '30-04-2020 09:27:24 PM'),
(617, 'umimana', '2020-03-25 23:01:50', '30-04-2020 09:27:24 PM'),
(618, 'mimi@123', '2020-03-25 23:09:15', '11-05-2020 03:42:57 PM'),
(619, 'umimana', '2020-03-26 17:21:33', '30-04-2020 09:27:24 PM'),
(620, 'umimana', '2020-03-26 17:25:34', '30-04-2020 09:27:24 PM'),
(621, 'umimana', '2020-03-30 22:24:50', '30-04-2020 09:27:24 PM'),
(622, 'umimana', '2020-03-31 16:16:59', '30-04-2020 09:27:24 PM'),
(623, 'mimi@123', '2020-03-31 17:28:40', '11-05-2020 03:42:57 PM'),
(624, 'mimi@123', '2020-03-31 17:37:56', '11-05-2020 03:42:57 PM'),
(625, 'umimana', '2020-03-31 17:41:01', '30-04-2020 09:27:24 PM'),
(626, 'umimana', '2020-04-02 00:22:48', '30-04-2020 09:27:24 PM'),
(627, 'mimi@123', '2020-04-02 00:45:47', '11-05-2020 03:42:57 PM'),
(628, 'mimi@123', '2020-04-03 13:39:40', '11-05-2020 03:42:57 PM'),
(629, 'umimana', '2020-04-03 14:35:48', '30-04-2020 09:27:24 PM'),
(630, 'mimi@123', '2020-04-03 14:38:53', '11-05-2020 03:42:57 PM'),
(631, 'mimi@123', '2020-04-07 15:05:44', '11-05-2020 03:42:57 PM'),
(632, 'mimi@123', '2020-04-07 18:11:09', '11-05-2020 03:42:57 PM'),
(633, 'mimi@123', '2020-04-07 18:30:09', '11-05-2020 03:42:57 PM'),
(634, 'mimi@123', '2020-04-07 22:36:49', '11-05-2020 03:42:57 PM'),
(635, 'mimi@123', '2020-04-08 13:17:45', '11-05-2020 03:42:57 PM'),
(636, 'mimi@123', '2020-04-09 13:53:01', '11-05-2020 03:42:57 PM'),
(637, 'mimi@123', '2020-04-09 18:25:49', '11-05-2020 03:42:57 PM'),
(638, 'umimana', '2020-04-09 18:26:26', '30-04-2020 09:27:24 PM'),
(639, 'mimi@123', '2020-04-09 22:58:53', '11-05-2020 03:42:57 PM'),
(640, 'mimi@123', '2020-04-13 17:59:33', '11-05-2020 03:42:57 PM'),
(641, 'umuhireCla', '2020-04-13 18:11:21', '13-04-2020 11:11:36 AM'),
(642, 'mimi@123', '2020-04-13 18:11:59', '11-05-2020 03:42:57 PM'),
(643, 'mimi@123', '2020-04-13 18:46:44', '11-05-2020 03:42:57 PM'),
(644, 'mimi@123', '2020-04-14 13:41:05', '11-05-2020 03:42:57 PM'),
(645, 'mimi@123', '2020-04-14 23:07:41', '11-05-2020 03:42:57 PM'),
(646, 'mimi@123', '2020-04-14 23:09:45', '11-05-2020 03:42:57 PM'),
(647, 'mimi@123', '2020-04-14 23:52:57', '11-05-2020 03:42:57 PM'),
(648, 'terry@123', '2020-04-14 23:57:20', '14-05-2020 08:05:40 AM'),
(649, 'jass@123', '2020-04-15 01:34:59', '14-05-2020 05:15:16 PM'),
(650, 'cycyagahire', '2020-04-15 01:36:18', '16-04-2020 01:26:30 PM'),
(651, 'mimi@123', '2020-04-15 01:49:51', '11-05-2020 03:42:57 PM'),
(652, 'jass@123', '2020-04-15 05:30:00', '14-05-2020 05:15:16 PM'),
(653, 'cycyagahire', '2020-04-15 13:12:14', '16-04-2020 01:26:30 PM'),
(654, 'mimi@123', '2020-04-15 14:07:36', '11-05-2020 03:42:57 PM'),
(655, 'cycyagahire', '2020-04-15 15:06:55', '16-04-2020 01:26:30 PM'),
(656, 'mimi@123', '2020-04-15 16:24:20', '11-05-2020 03:42:57 PM'),
(657, 'cycyagahire', '2020-04-15 16:52:14', '16-04-2020 01:26:30 PM'),
(658, 'mimi@123', '2020-04-16 00:43:15', '11-05-2020 03:42:57 PM'),
(659, 'cycyagahire', '2020-04-16 01:01:25', '16-04-2020 01:26:30 PM'),
(660, 'mimi@123', '2020-04-16 01:08:07', '11-05-2020 03:42:57 PM'),
(661, 'terry@123', '2020-04-16 13:55:12', '14-05-2020 08:05:40 AM'),
(662, 'jass@123', '2020-04-16 18:13:33', '14-05-2020 05:15:16 PM'),
(663, 'cycyagahire', '2020-04-16 19:41:53', '16-04-2020 01:26:30 PM'),
(664, 'mimi@123', '2020-04-16 20:26:57', '11-05-2020 03:42:57 PM'),
(665, 'jass@123', '2020-04-16 20:37:27', '14-05-2020 05:15:16 PM'),
(666, 'mimi@123', '2020-04-16 21:00:19', '11-05-2020 03:42:57 PM'),
(667, 'jass@123', '2020-04-16 21:01:07', '14-05-2020 05:15:16 PM'),
(668, 'terry@123', '2020-04-20 16:51:16', '14-05-2020 08:05:40 AM'),
(669, 'terry@123', '2020-04-20 17:50:29', '14-05-2020 08:05:40 AM'),
(670, 'jass@123', '2020-04-20 17:59:48', '14-05-2020 05:15:16 PM'),
(671, 'jass@123', '2020-04-20 18:22:20', '14-05-2020 05:15:16 PM'),
(672, 'jass@123', '2020-04-20 18:39:05', '14-05-2020 05:15:16 PM'),
(673, 'jass@123', '2020-04-21 15:28:22', '14-05-2020 05:15:16 PM'),
(674, 'terry@123', '2020-04-21 18:16:32', '14-05-2020 08:05:40 AM'),
(675, 'terry@123', '2020-04-21 22:53:55', '14-05-2020 08:05:40 AM'),
(676, 'mimi@123', '2020-04-21 22:57:25', '11-05-2020 03:42:57 PM'),
(677, 'terry@123', '2020-04-21 22:59:41', '14-05-2020 08:05:40 AM'),
(678, 'jass@123', '2020-04-21 23:17:14', '14-05-2020 05:15:16 PM'),
(679, 'terry@123', '2020-04-23 12:53:22', '14-05-2020 08:05:40 AM'),
(680, 'mimi@123', '2020-04-23 13:33:28', '11-05-2020 03:42:57 PM'),
(681, 'estella', '2020-04-23 13:37:40', '13-05-2020 05:53:48 PM'),
(682, 'mimi@123', '2020-04-23 13:40:06', '11-05-2020 03:42:57 PM'),
(683, 'estella', '2020-04-23 13:44:39', '13-05-2020 05:53:48 PM'),
(684, 'umimana', '2020-04-23 13:46:01', '30-04-2020 09:27:24 PM'),
(685, 'mimi@123', '2020-04-23 13:51:37', '11-05-2020 03:42:57 PM'),
(686, 'terry@123', '2020-04-23 13:52:49', '14-05-2020 08:05:40 AM'),
(687, 'mimi@123', '2020-04-23 14:00:47', '11-05-2020 03:42:57 PM'),
(688, 'mimi@123', '2020-04-24 00:29:57', '11-05-2020 03:42:57 PM'),
(689, 'estella', '2020-04-24 12:45:28', '13-05-2020 05:53:48 PM'),
(690, 'umimana', '2020-04-24 13:41:07', '30-04-2020 09:27:24 PM'),
(691, 'estella', '2020-04-24 13:51:52', '13-05-2020 05:53:48 PM'),
(692, 'jass@123', '2020-04-24 14:01:46', '14-05-2020 05:15:16 PM');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

DROP TABLE IF EXISTS `user_registration`;
CREATE TABLE IF NOT EXISTS `user_registration` (
  `USER_ID` int(255) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(255) DEFAULT NULL,
  `LAST_NAME` varchar(255) DEFAULT NULL,
  `GENDER` varchar(255) DEFAULT NULL,
  `NATIONAL_ID` varchar(255) DEFAULT NULL,
  `PHONE_NUMBER` varchar(255) DEFAULT NULL,
  `EMAIL` varchar(255) DEFAULT NULL,
  `DISTRICT` varchar(255) DEFAULT NULL,
  `POSITION` varchar(255) DEFAULT NULL,
  `DEPARTMENT` varchar(255) DEFAULT NULL,
  `PROFILE_PICTURE` varchar(255) DEFAULT NULL,
  `USERNAME` varchar(255) DEFAULT NULL,
  `RSSB` varchar(255) DEFAULT NULL,
  `USER_TYPE` varchar(255) DEFAULT NULL,
  `PASSWORD` varchar(255) DEFAULT NULL,
  `POSTING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER`, `NATIONAL_ID`, `PHONE_NUMBER`, `EMAIL`, `DISTRICT`, `POSITION`, `DEPARTMENT`, `PROFILE_PICTURE`, `USERNAME`, `RSSB`, `USER_TYPE`, `PASSWORD`, `POSTING_DATE`) VALUES
(21, 'Esther', 'TUYIZERE', 'Female', '123456789', '0789563421', 'Esther@gmail.com', 'Kayonza', 'Lecturer', 'Operational Department', 'upload/profile-avatar_1578056179.jpg', 'estella', '1345678999', 'User', '*7F583B4365FEBD65805B3338BE7968A050C47103', '2019-10-04 20:07:04'),
(30, 'Mutesa', 'Jusmina', 'Female', '7867657575757575', '0789594991', 'mutesijusmin11@gmail.com', 'Gasabo', 'Receptionist', 'Finance Department', 'upload/beautiful-rwandan-woman_1578200124.jpg', 'jass@123', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-01-04 19:55:53'),
(29, 'Nicole', 'Bamukunde', 'Female', '789898989898989', '0789594991', 'n.bamukunde@vatel.rw', 'Nyarugenge', 'Chief Executive Officer', 'Administration', '', 'nbamukunde', '', 'Admin', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-01-04 14:33:37'),
(31, 'Liliane', 'Uwiamana', 'Female', '9876456789838479738', '07856565765675757', 'uwimanalily@gmail.com', 'Nyagatare', 'IT manager', 'IT Department', 'upload/1486079532CAROLINE-UMUTONI_1579914237.jpg', 'umimana', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-01-25 00:59:26'),
(32, 'solange', 'uwase', '', '', '', 'uwasesolange@gmail.com', '', 'IT assistant', 'IT Department', '', 'uwase@123', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-01-25 01:47:14'),
(33, 'Agahire', 'Cynthia', 'Female', '12345678909876', '0789594991', 'ganzacynthia@gmail.com', 'Gasabo', 'Software Developer', 'IT Department', 'upload/f9d1152547c0bde01830b7e8bd60024c_1582832348.jpg', 'cycyagahire', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-02-27 17:25:05'),
(34, 'Terry', 'Kibui', 'Female', '', '', 'terrykibui@gmail.com', '', 'Deputy Head Of Academics', 'Academics', 'upload/1486079532CAROLINE-UMUTONI_1583453580.jpg', 'terry@123', '1345678999', 'Admin', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-06 00:09:21'),
(35, 'Nadia', 'Mukeshimana', '', '', '', 'unguyenezamignonne@akilahinstitute.org', '', '', '', '', 'Nadja', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-12 21:26:37'),
(36, 'Perez', 'Ogayo', 'Female', '', '', 'perezogayo@gmail.com', '', 'Lecturer', 'IT Department', 'upload/1486079532CAROLINE-UMUTONI_1584048551.jpg', 'Perez', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-12 21:26:48'),
(37, 'Germaine', 'Mukarugwiza', '', '', '', 'sharonmutoni01@gmail.com', '', '', '', '', 'Germy', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-16 18:08:26'),
(38, 'Eric', 'Bisengimana', '', '', '', 'famcompanyltd@gmail.com', '', '', '', '', 'Oppa', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-16 18:08:43'),
(39, 'Dogo', 'Miriam', 'Female', '', '', 'dogomiriam@gmail.com', '', '', '', 'upload/mignone_1584989337.JPG', 'MiriamDogo', '1345678999', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-03-23 18:44:36'),
(40, 'Odette', 'Mukasekuru', '', '', '', 'tuyizereesther@akilahinstitute.org', '', '', '', '', 'Odette', '12345678', 'User', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-04-09 23:03:04'),
(41, 'Umuhire ', 'Clarisse', '', '', '', '', '', '', '', '', 'UmuhireCla', '123456787', 'Admin', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-04-13 18:10:32'),
(42, 'Kara', 'Neil', '', '', '', 'rwandavtl@gmail.com', '', 'Lecturer', 'Operational Department', NULL, 'Umutoni', '1234567', 'Admin', '*73D2E5CF780AD775F4B8E7DE7EB627ADB7F24642', '2020-05-01 04:50:14'),
(43, 'Solange', 'Irankunda', 'Female', '12345678787', '250789594991', 'ishimwemunezaprince@gmail.com', 'Nyagatare', 'IT assistant', 'IT department', 'upload/beautiful-rwandan-woman_1588887197.jpg', 'Soso', '19691922j', 'User', '*4109CA24E3EB0AFC6FAF74C3156554EC8CB9DE0E', '2020-05-05 15:32:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_supplement`
--

DROP TABLE IF EXISTS `user_supplement`;
CREATE TABLE IF NOT EXISTS `user_supplement` (
  `SID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) DEFAULT NULL,
  `SUPPLEMENT_TYPE` varchar(255) DEFAULT NULL,
  `SUPPLEMENT_AMOUNT` float DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  PRIMARY KEY (`SID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_supplement`
--

INSERT INTO `user_supplement` (`SID`, `USER_ID`, `SUPPLEMENT_TYPE`, `SUPPLEMENT_AMOUNT`, `datee`, `TOTAL`) VALUES
(9, 21, 'Per Diem', 1000, '2020-05-13', 3000),
(10, 21, 'Transport', 2000, '2020-05-13', 3000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
