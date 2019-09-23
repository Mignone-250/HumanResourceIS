-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 20, 2019 at 01:54 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_request`
--

CREATE TABLE IF NOT EXISTS `account_request` (
  `USER_ID` int(255) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `NATIONAL_ID` varchar(255) NOT NULL,
  `PHONE_NUMBER` varchar(255) NOT NULL,
  `DISTRICT` varchar(255) NOT NULL,
  `POSITION` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `PROFILE_PICTURE` longblob NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `USER_TYPE` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `POSTING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_request`
--


-- --------------------------------------------------------

--
-- Table structure for table `cancelled_leave`
--

CREATE TABLE IF NOT EXISTS `cancelled_leave` (
  `C_ID` int(255) NOT NULL AUTO_INCREMENT,
  `LEAVE_ID` int(255) NOT NULL,
  `USER_ID` int(255) NOT NULL,
  `LEAVE_TYPE` varchar(255) NOT NULL,
  `REASON` text NOT NULL,
  `TITLE` varchar(255) NOT NULL,
  `DESCRIPTION` text NOT NULL,
  `USER_TYPE` varchar(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  PRIMARY KEY (`C_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `cancelled_leave`
--

INSERT INTO `cancelled_leave` (`C_ID`, `LEAVE_ID`, `USER_ID`, `LEAVE_TYPE`, `REASON`, `TITLE`, `DESCRIPTION`, `USER_TYPE`, `STATUS`) VALUES
(31, 43, 17, 'Sick', 'I am sick', 'Cancelling leave request', 'I have recovered', 'User', 'CANCELLED'),
(32, 44, 17, 'Vacation', 'I want to travel abroad', 'Cancelling leave ', 'I changed my mind', 'User', 'CANCELLED');

-- --------------------------------------------------------

--
-- Table structure for table `create_account`
--

CREATE TABLE IF NOT EXISTS `create_account` (
  `USER_ID` int(255) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `POSTING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `create_account`
--

INSERT INTO `create_account` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `USERNAME`, `PASSWORD`, `POSTING_DATE`) VALUES
(26, 'Josiane', 'Uwimana', 'jojo', '*D2757F592F75F56A5B5FAA2FE99D350154374276', '2019-08-28 11:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `deductions`
--

CREATE TABLE IF NOT EXISTS `deductions` (
  `DID` int(255) NOT NULL AUTO_INCREMENT,
  `DEDUCTION_TYPE` varchar(255) NOT NULL,
  `DEDUCTION_AMOUNT` varchar(255) NOT NULL,
  PRIMARY KEY (`DID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `deductions`
--

INSERT INTO `deductions` (`DID`, `DEDUCTION_TYPE`, `DEDUCTION_AMOUNT`) VALUES
(10, 'allowance', '4000'),
(9, 'Retirement', '3000'),
(4, 'Total', '7000');

-- --------------------------------------------------------

--
-- Table structure for table `leave_application`
--

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
  PRIMARY KEY (`LEAVE_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `leave_application`
--

INSERT INTO `leave_application` (`LEAVE_ID`, `USER_ID`, `LEAVE_TYPE`, `DATE`, `REASON`, `LEAVE_DATE`, `REQUESTED_DAYS`, `RLEAVE_DAYS`, `TOTAL_DAYS`, `REMAINING_DAYS`, `STATUS`) VALUES
(43, 17, 'Sick', '2019-09-19 11:09:20', 'I am sick', '2019-09-21', 10, 10, 40, 30, 'CANCELLED'),
(44, 17, 'Vacation', '2019-09-19 11:16:00', 'I want to travel abroad', '2019-09-27', 5, 15, 30, 25, 'CANCELLED'),
(45, 17, 'Maternity', '2019-09-19 11:21:05', 'I am soon giving birth', '2019-09-30', 20, 10, 25, 5, 'CONFIRMED');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE IF NOT EXISTS `leave_types` (
  `TYPE_ID` int(255) NOT NULL AUTO_INCREMENT,
  `LEAVE_TYPE` varchar(255) NOT NULL,
  `LEAVE_DAYS` int(255) NOT NULL,
  PRIMARY KEY (`TYPE_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`TYPE_ID`, `LEAVE_TYPE`, `LEAVE_DAYS`) VALUES
(1, 'Maternity', 30),
(2, 'Sick', 20),
(3, 'Vacation', 20),
(4, 'Normal/Annual', 70);

-- --------------------------------------------------------

--
-- Table structure for table `paid_users`
--

CREATE TABLE IF NOT EXISTS `paid_users` (
  `PAID_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USER_ID` int(255) NOT NULL,
  `DATE_PAID` date NOT NULL,
  PRIMARY KEY (`PAID_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `paid_users`
--

INSERT INTO `paid_users` (`PAID_ID`, `USER_ID`, `DATE_PAID`) VALUES
(1, 1, '2019-09-19'),
(2, 1, '2019-10-23'),
(3, 1, '0000-00-00'),
(4, 17, '0000-00-00'),
(5, 1, '2019-09-19'),
(6, 1, '0000-00-00'),
(7, 1, '2019-09-18'),
(8, 1, '2019-09-18'),
(9, 1, '2019-09-19'),
(10, 1, '2019-09-18'),
(11, 1, '2019-09-18'),
(12, 1, '2019-09-20'),
(13, 1, '2019-09-17'),
(14, 1, '2019-09-19'),
(15, 1, '2019-09-25'),
(16, 1, '0000-00-00'),
(17, 1, '2019-09-26'),
(18, 1, '2019-09-26'),
(19, 19, '2019-09-18'),
(20, 19, '2019-09-26'),
(21, 19, '2019-09-26'),
(22, 1, '2019-09-19'),
(23, 1, '2019-09-19'),
(24, 1, '2019-09-22'),
(25, 1, '2019-09-20'),
(26, 1, '2019-09-26'),
(27, 1, '2019-09-25'),
(28, 1, '2019-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `PAYROLL_ID` int(255) NOT NULL AUTO_INCREMENT,
  `POSITION` varchar(255) NOT NULL,
  `GROSS_SALARY` float NOT NULL,
  `TOTAL_SUPPLEMENTS` int(255) NOT NULL,
  `TOTAL_DEDUCTIONS` int(255) NOT NULL,
  `NET_SALARY` int(255) NOT NULL,
  PRIMARY KEY (`PAYROLL_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`PAYROLL_ID`, `POSITION`, `GROSS_SALARY`, `TOTAL_SUPPLEMENTS`, `TOTAL_DEDUCTIONS`, `NET_SALARY`) VALUES
(1, 'Techinical Support', 200000, 8000, 7000, 201000),
(2, 'Software Developers', 500000, 8000, 7000, 501000),
(3, 'Chief Finance Manager', 150000, 8000, 7000, 151000),
(4, 'Chief Executive Officer', 200000, 8000, 7000, 201000),
(5, 'Chief Operation Manager', 600000, 8000, 7000, 601000);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `POST_ID` int(255) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(255) NOT NULL,
  `CONTENT` text NOT NULL,
  `CATEGORY` varchar(255) NOT NULL,
  `PICTURE` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  `POST_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`POST_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`POST_ID`, `TITLE`, `CONTENT`, `CATEGORY`, `PICTURE`, `DATE`, `POST_DATE`) VALUES
(1, 'COMPETITION', '\r\nWe are having a competition this week, where every employee will get a chance with an idea of implementing new technology in our organization. Don''t hesitate to compete because you might worn 50000$. You are all welcomed.', 'Funny', 'upload/COMP_1567106255.jpg', '2019-09-10', '2019-08-29 12:17:35'),
(2, 'WELCOMING NEW EMPLOYEES EVENT', 'This week, we are excited to welcome the new employees into the bright Mvend community. Congratulations for those who have becomed part of our team! In this upcoming event our whole team will welcome new employees such as them. W e look forward to enjoy with in that upcoming event. Welcome aboard.', 'News', 'upload/EMPLOYEES_1567106312.jpg', '2019-08-31', '2019-08-29 12:18:32'),
(5, 'heelo', 'I don''t need you to make noice', 'Funny', 'upload/payroll_1567799999.jpg', '2019-09-19', '2019-09-06 12:59:59');

-- --------------------------------------------------------

--
-- Table structure for table `post_draft`
--

CREATE TABLE IF NOT EXISTS `post_draft` (
  `POST_ID` int(255) NOT NULL AUTO_INCREMENT,
  `TITLE` varchar(255) NOT NULL,
  `CONTENT` text NOT NULL,
  `CATEGORY` varchar(255) NOT NULL,
  `PICTURE` varchar(255) NOT NULL,
  `DATE` date NOT NULL,
  PRIMARY KEY (`POST_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `post_draft`
--


-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

CREATE TABLE IF NOT EXISTS `supplements` (
  `SUPPLEMENTS_ID` int(255) NOT NULL AUTO_INCREMENT,
  `SUPPLEMENTS_NAME` varchar(255) NOT NULL,
  `SUPPLEMENTS_AMOUNT` int(255) NOT NULL,
  PRIMARY KEY (`SUPPLEMENTS_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`SUPPLEMENTS_ID`, `SUPPLEMENTS_NAME`, `SUPPLEMENTS_AMOUNT`) VALUES
(1, 'Perdiem', 4000),
(2, 'Total', 8000),
(5, 'mignone', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `total_days`
--

CREATE TABLE IF NOT EXISTS `total_days` (
  `DAYS_ID` int(2) NOT NULL AUTO_INCREMENT,
  `DAYS` int(255) NOT NULL,
  PRIMARY KEY (`DAYS_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `total_days`
--

INSERT INTO `total_days` (`DAYS_ID`, `DAYS`) VALUES
(1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `user_logs`
--

CREATE TABLE IF NOT EXISTS `user_logs` (
  `LOG_ID` int(255) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(255) NOT NULL,
  `LOGIN_TIME` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LOGOUT_TIME` varchar(255) NOT NULL,
  PRIMARY KEY (`LOG_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=301 ;

--
-- Dumping data for table `user_logs`
--

INSERT INTO `user_logs` (`LOG_ID`, `USERNAME`, `LOGIN_TIME`, `LOGOUT_TIME`) VALUES
(1, 'estella', '2019-08-23 17:54:15', '19-09-2019 02:21:33 AM'),
(2, 'amata', '2019-08-23 17:54:33', '19-09-2019 01:47:12 AM'),
(3, 'estella', '2019-08-23 17:54:48', '19-09-2019 02:21:33 AM'),
(4, 'amata', '2019-08-23 17:58:53', '19-09-2019 01:47:12 AM'),
(5, 'estella', '2019-08-23 18:00:28', '19-09-2019 02:21:33 AM'),
(6, 'estella', '2019-08-24 10:42:06', '19-09-2019 02:21:33 AM'),
(7, 'estella', '2019-08-25 10:54:56', '19-09-2019 02:21:33 AM'),
(8, 'estella', '2019-08-25 10:59:13', '19-09-2019 02:21:33 AM'),
(9, 'niyo', '2019-08-25 10:59:54', '19-09-2019 02:21:21 AM'),
(10, 'amata', '2019-08-27 09:34:50', '19-09-2019 01:47:12 AM'),
(11, 'amata', '2019-08-27 09:51:19', '19-09-2019 01:47:12 AM'),
(12, 'amata', '2019-08-27 09:54:21', '19-09-2019 01:47:12 AM'),
(13, 'estella', '2019-08-27 10:13:38', '19-09-2019 02:21:33 AM'),
(14, 'amata', '2019-08-27 10:16:05', '19-09-2019 01:47:12 AM'),
(15, 'estella', '2019-08-27 11:20:09', '19-09-2019 02:21:33 AM'),
(16, 'estella', '2019-08-27 11:31:31', '19-09-2019 02:21:33 AM'),
(17, 'estella', '2019-08-27 12:10:10', '19-09-2019 02:21:33 AM'),
(18, 'estella', '2019-08-27 12:22:04', '19-09-2019 02:21:33 AM'),
(19, 'amata', '2019-08-27 12:35:30', '19-09-2019 01:47:12 AM'),
(20, 'niyo', '2019-08-27 12:45:13', '19-09-2019 02:21:21 AM'),
(21, 'amata', '2019-08-27 12:45:39', '19-09-2019 01:47:12 AM'),
(22, 'estella', '2019-08-27 12:48:13', '19-09-2019 02:21:33 AM'),
(23, 'amata', '2019-08-27 12:52:03', '19-09-2019 01:47:12 AM'),
(24, 'estella', '2019-08-28 08:59:01', '19-09-2019 02:21:33 AM'),
(25, 'niyo', '2019-08-28 09:01:25', '19-09-2019 02:21:21 AM'),
(26, 'estella', '2019-08-28 09:02:08', '19-09-2019 02:21:33 AM'),
(27, 'niyo', '2019-08-28 09:02:49', '19-09-2019 02:21:21 AM'),
(28, 'estella', '2019-08-28 09:03:53', '19-09-2019 02:21:33 AM'),
(29, 'amata', '2019-08-28 09:43:51', '19-09-2019 01:47:12 AM'),
(30, 'amata', '2019-08-28 09:48:10', '19-09-2019 01:47:12 AM'),
(31, 'niyo', '2019-08-28 09:54:43', '19-09-2019 02:21:21 AM'),
(32, 'estella', '2019-08-28 10:19:07', '19-09-2019 02:21:33 AM'),
(33, 'niyo', '2019-08-28 10:19:58', '19-09-2019 02:21:21 AM'),
(34, 'estella', '2019-08-28 10:26:42', '19-09-2019 02:21:33 AM'),
(35, 'amata', '2019-08-28 11:16:36', '19-09-2019 01:47:12 AM'),
(36, 'estella', '2019-08-28 11:19:04', '19-09-2019 02:21:33 AM'),
(37, 'estella', '2019-08-28 11:34:28', '19-09-2019 02:21:33 AM'),
(38, 'amata', '2019-08-28 11:37:58', '19-09-2019 01:47:12 AM'),
(39, 'estella', '2019-08-28 11:38:41', '19-09-2019 02:21:33 AM'),
(40, 'amata', '2019-08-28 11:43:22', '19-09-2019 01:47:12 AM'),
(41, 'amata', '2019-08-28 11:43:44', '19-09-2019 01:47:12 AM'),
(42, 'estella', '2019-08-28 11:43:57', '19-09-2019 02:21:33 AM'),
(43, 'amata', '2019-08-28 12:36:22', '19-09-2019 01:47:12 AM'),
(44, 'estella', '2019-08-28 12:43:26', '19-09-2019 02:21:33 AM'),
(45, 'amata', '2019-08-28 12:47:22', '19-09-2019 01:47:12 AM'),
(46, 'estella', '2019-08-28 12:50:29', '19-09-2019 02:21:33 AM'),
(47, 'amata', '2019-08-28 13:08:36', '19-09-2019 01:47:12 AM'),
(48, 'estella', '2019-08-28 13:09:10', '19-09-2019 02:21:33 AM'),
(49, 'amata', '2019-08-28 13:17:44', '19-09-2019 01:47:12 AM'),
(50, 'estella', '2019-08-28 14:11:34', '19-09-2019 02:21:33 AM'),
(51, 'estella', '2019-08-29 08:54:08', '19-09-2019 02:21:33 AM'),
(52, 'amata', '2019-08-29 08:56:30', '19-09-2019 01:47:12 AM'),
(53, 'estella', '2019-08-29 08:57:13', '19-09-2019 02:21:33 AM'),
(54, 'amata', '2019-08-29 09:29:44', '19-09-2019 01:47:12 AM'),
(55, 'amata', '2019-08-29 09:40:20', '19-09-2019 01:47:12 AM'),
(56, 'estella', '2019-08-29 10:25:56', '19-09-2019 02:21:33 AM'),
(57, 'amata', '2019-08-29 10:48:13', '19-09-2019 01:47:12 AM'),
(58, 'estella', '2019-08-29 10:56:41', '19-09-2019 02:21:33 AM'),
(59, 'amata', '2019-08-29 11:02:31', '19-09-2019 01:47:12 AM'),
(60, 'estella', '2019-08-29 11:23:12', '19-09-2019 02:21:33 AM'),
(61, 'amata', '2019-08-29 11:29:00', '19-09-2019 01:47:12 AM'),
(62, 'estella', '2019-08-29 11:47:28', '19-09-2019 02:21:33 AM'),
(63, 'amata', '2019-08-29 12:07:24', '19-09-2019 01:47:12 AM'),
(64, 'estella', '2019-08-29 12:08:06', '19-09-2019 02:21:33 AM'),
(65, 'amata', '2019-08-29 12:09:01', '19-09-2019 01:47:12 AM'),
(66, 'estella', '2019-08-29 12:16:09', '19-09-2019 02:21:33 AM'),
(67, 'amata', '2019-08-29 12:18:48', '19-09-2019 01:47:12 AM'),
(68, 'estella', '2019-08-29 12:20:38', '19-09-2019 02:21:33 AM'),
(69, 'estella', '2019-08-29 13:37:12', '19-09-2019 02:21:33 AM'),
(70, 'estella', '2019-08-29 13:38:23', '19-09-2019 02:21:33 AM'),
(71, 'estella', '2019-08-29 13:38:36', '19-09-2019 02:21:33 AM'),
(72, 'estella', '2019-08-29 13:42:18', '19-09-2019 02:21:33 AM'),
(73, 'amata', '2019-08-29 13:50:13', '19-09-2019 01:47:12 AM'),
(74, 'amata', '2019-08-29 13:51:30', '19-09-2019 01:47:12 AM'),
(75, 'estella', '2019-08-29 13:58:25', '19-09-2019 02:21:33 AM'),
(76, 'amata', '2019-08-29 13:58:56', '19-09-2019 01:47:12 AM'),
(77, 'estella', '2019-08-29 13:59:12', '19-09-2019 02:21:33 AM'),
(78, 'esther', '2019-08-29 14:12:34', '29-08-2019 02:14:03 PM'),
(79, 'estella', '2019-08-29 14:14:11', '19-09-2019 02:21:33 AM'),
(80, 'amata', '2019-08-29 14:24:18', '19-09-2019 01:47:12 AM'),
(81, 'estella', '2019-08-29 14:29:53', '19-09-2019 02:21:33 AM'),
(82, 'amata', '2019-08-31 13:56:32', '19-09-2019 01:47:12 AM'),
(83, 'amata', '2019-08-31 13:58:51', '19-09-2019 01:47:12 AM'),
(84, 'amata', '2019-08-31 14:03:08', '19-09-2019 01:47:12 AM'),
(85, 'estella', '2019-08-31 14:06:07', '19-09-2019 02:21:33 AM'),
(86, 'amata', '2019-08-31 14:08:01', '19-09-2019 01:47:12 AM'),
(87, 'amata', '2019-08-31 14:23:55', '19-09-2019 01:47:12 AM'),
(88, 'estella', '2019-08-31 14:40:39', '19-09-2019 02:21:33 AM'),
(89, 'amata', '2019-08-31 15:05:08', '19-09-2019 01:47:12 AM'),
(90, 'estella', '2019-08-31 15:40:03', '19-09-2019 02:21:33 AM'),
(91, 'amata', '2019-08-31 15:40:47', '19-09-2019 01:47:12 AM'),
(92, 'estella', '2019-08-31 15:44:47', '19-09-2019 02:21:33 AM'),
(93, 'amata', '2019-08-31 15:46:28', '19-09-2019 01:47:12 AM'),
(94, 'estella', '2019-08-31 15:47:53', '19-09-2019 02:21:33 AM'),
(95, 'amata', '2019-08-31 15:48:25', '19-09-2019 01:47:12 AM'),
(96, 'estella', '2019-08-31 15:49:00', '19-09-2019 02:21:33 AM'),
(97, 'estella', '2019-09-02 09:18:45', '19-09-2019 02:21:33 AM'),
(98, 'amata', '2019-09-02 09:21:01', '19-09-2019 01:47:12 AM'),
(99, 'estella', '2019-09-02 09:22:07', '19-09-2019 02:21:33 AM'),
(100, 'amata', '2019-09-02 09:23:55', '19-09-2019 01:47:12 AM'),
(101, 'estella', '2019-09-02 09:24:44', '19-09-2019 02:21:33 AM'),
(102, 'amata', '2019-09-02 09:48:54', '19-09-2019 01:47:12 AM'),
(103, 'estella', '2019-09-02 09:50:03', '19-09-2019 02:21:33 AM'),
(104, 'amata', '2019-09-03 09:52:08', '19-09-2019 01:47:12 AM'),
(105, 'estella', '2019-09-03 09:59:39', '19-09-2019 02:21:33 AM'),
(106, 'estella', '2019-09-03 10:23:29', '19-09-2019 02:21:33 AM'),
(107, 'amata', '2019-09-03 10:55:11', '19-09-2019 01:47:12 AM'),
(108, 'estella', '2019-09-03 11:03:24', '19-09-2019 02:21:33 AM'),
(109, 'amata', '2019-09-03 11:06:04', '19-09-2019 01:47:12 AM'),
(110, 'estella', '2019-09-03 11:07:02', '19-09-2019 02:21:33 AM'),
(111, 'amata', '2019-09-03 11:08:01', '19-09-2019 01:47:12 AM'),
(112, 'niyo', '2019-09-03 11:33:32', '19-09-2019 02:21:21 AM'),
(113, 'amata', '2019-09-03 11:40:43', '19-09-2019 01:47:12 AM'),
(114, 'niyo', '2019-09-03 11:45:23', '19-09-2019 02:21:21 AM'),
(115, 'estella', '2019-09-03 11:45:48', '19-09-2019 02:21:33 AM'),
(116, 'niyo', '2019-09-03 11:48:02', '19-09-2019 02:21:21 AM'),
(117, 'estella', '2019-09-03 11:56:16', '19-09-2019 02:21:33 AM'),
(118, 'amata', '2019-09-03 12:11:38', '19-09-2019 01:47:12 AM'),
(119, 'estella', '2019-09-03 12:12:44', '19-09-2019 02:21:33 AM'),
(120, 'amata', '2019-09-03 13:48:35', '19-09-2019 01:47:12 AM'),
(121, 'estella', '2019-09-03 14:16:01', '19-09-2019 02:21:33 AM'),
(122, 'amata', '2019-09-03 14:17:27', '19-09-2019 01:47:12 AM'),
(123, 'estella', '2019-09-03 14:21:28', '19-09-2019 02:21:33 AM'),
(124, 'amata', '2019-09-03 14:22:10', '19-09-2019 01:47:12 AM'),
(125, 'amata', '2019-09-03 14:31:19', '19-09-2019 01:47:12 AM'),
(126, 'amata', '2019-09-03 14:32:54', '19-09-2019 01:47:12 AM'),
(127, 'niyo', '2019-09-03 14:35:00', '19-09-2019 02:21:21 AM'),
(128, 'estella', '2019-09-03 14:51:46', '19-09-2019 02:21:33 AM'),
(129, 'amata', '2019-09-03 14:55:23', '19-09-2019 01:47:12 AM'),
(130, 'niyo', '2019-09-03 14:57:15', '19-09-2019 02:21:21 AM'),
(131, 'amata', '2019-09-03 15:41:39', '19-09-2019 01:47:12 AM'),
(132, 'estella', '2019-09-03 15:42:07', '19-09-2019 02:21:33 AM'),
(133, 'niyo', '2019-09-03 15:42:36', '19-09-2019 02:21:21 AM'),
(134, 'estella', '2019-09-03 15:45:30', '19-09-2019 02:21:33 AM'),
(135, 'niyo', '2019-09-03 15:46:02', '19-09-2019 02:21:21 AM'),
(136, 'estella', '2019-09-04 10:07:48', '19-09-2019 02:21:33 AM'),
(137, 'amata', '2019-09-04 10:57:55', '19-09-2019 01:47:12 AM'),
(138, 'amata', '2019-09-04 11:07:49', '19-09-2019 01:47:12 AM'),
(139, 'amata', '2019-09-05 10:21:07', '19-09-2019 01:47:12 AM'),
(140, 'amata', '2019-09-05 12:33:04', '19-09-2019 01:47:12 AM'),
(141, 'estella', '2019-09-05 13:03:54', '19-09-2019 02:21:33 AM'),
(142, 'amata', '2019-09-05 13:04:23', '19-09-2019 01:47:12 AM'),
(143, 'estella', '2019-09-05 13:34:49', '19-09-2019 02:21:33 AM'),
(144, 'amata', '2019-09-05 13:41:29', '19-09-2019 01:47:12 AM'),
(145, 'amata', '2019-09-05 13:42:34', '19-09-2019 01:47:12 AM'),
(146, 'estella', '2019-09-05 13:43:16', '19-09-2019 02:21:33 AM'),
(147, 'amata', '2019-09-05 13:43:47', '19-09-2019 01:47:12 AM'),
(148, 'estella', '2019-09-05 13:45:33', '19-09-2019 02:21:33 AM'),
(149, 'amata', '2019-09-05 13:46:08', '19-09-2019 01:47:12 AM'),
(150, 'estella', '2019-09-05 17:58:24', '19-09-2019 02:21:33 AM'),
(151, 'amata', '2019-09-05 17:59:02', '19-09-2019 01:47:12 AM'),
(152, 'niyo', '2019-09-05 18:10:41', '19-09-2019 02:21:21 AM'),
(153, 'amata', '2019-09-06 10:53:07', '19-09-2019 01:47:12 AM'),
(154, 'estella', '2019-09-06 11:00:12', '19-09-2019 02:21:33 AM'),
(155, 'amata', '2019-09-06 11:12:41', '19-09-2019 01:47:12 AM'),
(156, 'estella', '2019-09-06 11:45:36', '19-09-2019 02:21:33 AM'),
(157, 'amata', '2019-09-06 11:47:03', '19-09-2019 01:47:12 AM'),
(158, 'niyo', '2019-09-06 12:47:31', '19-09-2019 02:21:21 AM'),
(159, 'amata', '2019-09-06 12:48:03', '19-09-2019 01:47:12 AM'),
(160, 'estella', '2019-09-06 12:58:38', '19-09-2019 02:21:33 AM'),
(161, 'amata', '2019-09-06 13:00:17', '19-09-2019 01:47:12 AM'),
(162, 'amata', '2019-09-06 13:17:12', '19-09-2019 01:47:12 AM'),
(163, 'amata', '2019-09-06 13:44:57', '19-09-2019 01:47:12 AM'),
(164, 'estella', '2019-09-06 13:52:30', '19-09-2019 02:21:33 AM'),
(165, 'amata', '2019-09-06 13:53:20', '19-09-2019 01:47:12 AM'),
(166, 'estella', '2019-09-06 13:54:30', '19-09-2019 02:21:33 AM'),
(167, 'amata', '2019-09-06 14:14:23', '19-09-2019 01:47:12 AM'),
(168, 'estella', '2019-09-06 14:15:21', '19-09-2019 02:21:33 AM'),
(169, 'amata', '2019-09-06 14:23:46', '19-09-2019 01:47:12 AM'),
(170, 'estella', '2019-09-06 14:25:08', '19-09-2019 02:21:33 AM'),
(171, 'amata', '2019-09-06 14:26:15', '19-09-2019 01:47:12 AM'),
(172, 'amata', '2019-09-06 14:44:09', '19-09-2019 01:47:12 AM'),
(173, 'estella', '2019-09-06 14:44:43', '19-09-2019 02:21:33 AM'),
(174, 'amata', '2019-09-06 14:46:38', '19-09-2019 01:47:12 AM'),
(175, 'estella', '2019-09-06 14:52:06', '19-09-2019 02:21:33 AM'),
(176, 'amata', '2019-09-06 14:57:16', '19-09-2019 01:47:12 AM'),
(177, 'estella', '2019-09-06 14:59:12', '19-09-2019 02:21:33 AM'),
(178, 'amata', '2019-09-06 15:13:22', '19-09-2019 01:47:12 AM'),
(179, 'estella', '2019-09-06 15:17:49', '19-09-2019 02:21:33 AM'),
(180, 'amata', '2019-09-06 15:33:48', '19-09-2019 01:47:12 AM'),
(181, 'estella', '2019-09-06 15:40:00', '19-09-2019 02:21:33 AM'),
(182, 'estella', '2019-09-08 10:06:10', '19-09-2019 02:21:33 AM'),
(183, 'amata', '2019-09-08 10:39:57', '19-09-2019 01:47:12 AM'),
(184, 'estella', '2019-09-08 10:48:13', '19-09-2019 02:21:33 AM'),
(185, 'estella', '2019-09-09 20:38:55', '19-09-2019 02:21:33 AM'),
(186, 'amata', '2019-09-09 20:43:28', '19-09-2019 01:47:12 AM'),
(187, 'estella', '2019-09-10 11:50:30', '19-09-2019 02:21:33 AM'),
(188, 'amata', '2019-09-10 13:56:14', '19-09-2019 01:47:12 AM'),
(189, 'estella', '2019-09-10 14:00:02', '19-09-2019 02:21:33 AM'),
(190, 'amata', '2019-09-10 14:30:42', '19-09-2019 01:47:12 AM'),
(191, 'estella', '2019-09-10 14:43:03', '19-09-2019 02:21:33 AM'),
(192, 'amata', '2019-09-10 14:46:45', '19-09-2019 01:47:12 AM'),
(193, 'estella', '2019-09-10 14:50:54', '19-09-2019 02:21:33 AM'),
(194, 'amata', '2019-09-10 14:51:45', '19-09-2019 01:47:12 AM'),
(195, 'estella', '2019-09-11 09:34:20', '19-09-2019 02:21:33 AM'),
(196, 'amata', '2019-09-11 09:40:35', '19-09-2019 01:47:12 AM'),
(197, 'estella', '2019-09-11 10:14:50', '19-09-2019 02:21:33 AM'),
(198, 'amata', '2019-09-11 10:19:40', '19-09-2019 01:47:12 AM'),
(199, 'niyo', '2019-09-11 10:21:19', '19-09-2019 02:21:21 AM'),
(200, 'niyo', '2019-09-11 10:55:15', '19-09-2019 02:21:21 AM'),
(201, 'amata', '2019-09-11 10:57:17', '19-09-2019 01:47:12 AM'),
(202, 'niyo', '2019-09-11 11:13:43', '19-09-2019 02:21:21 AM'),
(203, 'amata', '2019-09-11 11:20:25', '19-09-2019 01:47:12 AM'),
(204, 'estella', '2019-09-11 11:24:35', '19-09-2019 02:21:33 AM'),
(205, 'amata', '2019-09-11 11:42:15', '19-09-2019 01:47:12 AM'),
(206, 'niyo', '2019-09-11 11:47:22', '19-09-2019 02:21:21 AM'),
(207, 'estella', '2019-09-11 11:53:29', '19-09-2019 02:21:33 AM'),
(208, 'estella', '2019-09-11 12:07:19', '19-09-2019 02:21:33 AM'),
(209, 'estella', '2019-09-11 12:08:41', '19-09-2019 02:21:33 AM'),
(210, 'estella', '2019-09-11 16:55:08', '19-09-2019 02:21:33 AM'),
(211, 'estella', '2019-09-12 10:54:50', '19-09-2019 02:21:33 AM'),
(212, 'estella', '2019-09-13 11:46:19', '19-09-2019 02:21:33 AM'),
(213, 'amata', '2019-09-13 13:44:25', '19-09-2019 01:47:12 AM'),
(214, 'estella', '2019-09-13 16:22:06', '19-09-2019 02:21:33 AM'),
(215, 'estella', '2019-09-15 12:53:06', '19-09-2019 02:21:33 AM'),
(216, 'estella', '2019-09-17 09:36:05', '19-09-2019 02:21:33 AM'),
(217, 'estella', '2019-09-17 11:14:36', '19-09-2019 02:21:33 AM'),
(218, 'amata', '2019-09-17 11:21:25', '19-09-2019 01:47:12 AM'),
(219, 'estella', '2019-09-17 11:30:34', '19-09-2019 02:21:33 AM'),
(220, 'niyo', '2019-09-17 11:45:47', '19-09-2019 02:21:21 AM'),
(221, 'estella', '2019-09-17 12:31:16', '19-09-2019 02:21:33 AM'),
(222, 'niyo', '2019-09-17 12:42:58', '19-09-2019 02:21:21 AM'),
(223, 'amata', '2019-09-17 12:43:39', '19-09-2019 01:47:12 AM'),
(224, 'niyo', '2019-09-17 12:59:43', '19-09-2019 02:21:21 AM'),
(225, 'niyo', '2019-09-17 13:01:37', '19-09-2019 02:21:21 AM'),
(226, 'estella', '2019-09-17 13:02:51', '19-09-2019 02:21:33 AM'),
(227, 'niyo', '2019-09-17 13:04:45', '19-09-2019 02:21:21 AM'),
(228, 'estella', '2019-09-17 13:12:04', '19-09-2019 02:21:33 AM'),
(229, 'niyo', '2019-09-17 14:16:13', '19-09-2019 02:21:21 AM'),
(230, 'niyo', '2019-09-17 15:33:34', '19-09-2019 02:21:21 AM'),
(231, 'niyo', '2019-09-18 10:51:04', '19-09-2019 02:21:21 AM'),
(232, 'estella', '2019-09-18 11:10:35', '19-09-2019 02:21:33 AM'),
(233, 'niyo', '2019-09-18 11:26:01', '19-09-2019 02:21:21 AM'),
(234, 'estella', '2019-09-18 11:27:41', '19-09-2019 02:21:33 AM'),
(235, 'niyo', '2019-09-18 12:33:32', '19-09-2019 02:21:21 AM'),
(236, 'estella', '2019-09-18 13:39:12', '19-09-2019 02:21:33 AM'),
(237, 'niyo', '2019-09-18 13:40:45', '19-09-2019 02:21:21 AM'),
(238, 'estella', '2019-09-18 13:43:44', '19-09-2019 02:21:33 AM'),
(239, 'estella', '2019-09-18 13:48:28', '19-09-2019 02:21:33 AM'),
(240, 'niyo', '2019-09-18 13:48:41', '19-09-2019 02:21:21 AM'),
(241, 'amata', '2019-09-19 07:35:05', '19-09-2019 01:47:12 AM'),
(242, 'estella', '2019-09-19 07:37:51', '19-09-2019 02:21:33 AM'),
(243, 'amata', '2019-09-19 07:40:53', '19-09-2019 01:47:12 AM'),
(244, 'amata', '2019-09-19 07:44:56', '19-09-2019 01:47:12 AM'),
(245, 'estella', '2019-09-19 07:51:55', '19-09-2019 02:21:33 AM'),
(246, 'amata', '2019-09-19 07:53:07', '19-09-2019 01:47:12 AM'),
(247, 'estella', '2019-09-19 07:54:28', '19-09-2019 02:21:33 AM'),
(248, 'amata', '2019-09-19 07:55:23', '19-09-2019 01:47:12 AM'),
(249, 'estella', '2019-09-19 07:58:16', '19-09-2019 02:21:33 AM'),
(250, 'amata', '2019-09-19 07:58:57', '19-09-2019 01:47:12 AM'),
(251, 'estella', '2019-09-19 08:01:06', '19-09-2019 02:21:33 AM'),
(252, 'amata', '2019-09-19 08:37:02', '19-09-2019 01:47:12 AM'),
(253, 'estella', '2019-09-19 08:38:18', '19-09-2019 02:21:33 AM'),
(254, 'amata', '2019-09-19 08:38:44', '19-09-2019 01:47:12 AM'),
(255, 'estella', '2019-09-19 08:39:57', '19-09-2019 02:21:33 AM'),
(256, 'amata', '2019-09-19 08:55:38', '19-09-2019 01:47:12 AM'),
(257, 'estella', '2019-09-19 08:57:26', '19-09-2019 02:21:33 AM'),
(258, 'amata', '2019-09-19 08:57:51', '19-09-2019 01:47:12 AM'),
(259, 'estella', '2019-09-19 08:58:37', '19-09-2019 02:21:33 AM'),
(260, 'amata', '2019-09-19 09:01:11', '19-09-2019 01:47:12 AM'),
(261, 'amata', '2019-09-19 09:08:03', '19-09-2019 01:47:12 AM'),
(262, 'estella', '2019-09-19 09:12:11', '19-09-2019 02:21:33 AM'),
(263, 'amata', '2019-09-19 09:12:52', '19-09-2019 01:47:12 AM'),
(264, 'estella', '2019-09-19 09:29:22', '19-09-2019 02:21:33 AM'),
(265, 'amata', '2019-09-19 09:30:03', '19-09-2019 01:47:12 AM'),
(266, 'niyo', '2019-09-19 09:33:25', '19-09-2019 02:21:21 AM'),
(267, 'estella', '2019-09-19 09:34:19', '19-09-2019 02:21:33 AM'),
(268, 'niyo', '2019-09-19 09:34:40', '19-09-2019 02:21:21 AM'),
(269, 'amata', '2019-09-19 09:48:22', '19-09-2019 01:47:12 AM'),
(270, 'amata', '2019-09-19 10:02:33', '19-09-2019 01:47:12 AM'),
(271, 'estella', '2019-09-19 10:03:30', '19-09-2019 02:21:33 AM'),
(272, 'amata', '2019-09-19 10:03:45', '19-09-2019 01:47:12 AM'),
(273, 'estella', '2019-09-19 10:33:21', '19-09-2019 02:21:33 AM'),
(274, 'amata', '2019-09-19 10:35:27', '19-09-2019 01:47:12 AM'),
(275, 'estella', '2019-09-19 10:36:21', '19-09-2019 02:21:33 AM'),
(276, 'amata', '2019-09-19 10:36:40', '19-09-2019 01:47:12 AM'),
(277, 'estella', '2019-09-19 10:37:33', '19-09-2019 02:21:33 AM'),
(278, 'amata', '2019-09-19 10:37:48', '19-09-2019 01:47:12 AM'),
(279, 'amata', '2019-09-19 10:41:00', '19-09-2019 01:47:12 AM'),
(280, 'amata', '2019-09-19 10:45:21', '19-09-2019 01:47:12 AM'),
(281, 'amata', '2019-09-19 10:46:25', '19-09-2019 01:47:12 AM'),
(282, 'niyo', '2019-09-19 10:47:18', '19-09-2019 02:21:21 AM'),
(283, 'estella', '2019-09-19 10:48:12', '19-09-2019 02:21:33 AM'),
(284, 'niyo', '2019-09-19 10:48:37', '19-09-2019 02:21:21 AM'),
(285, 'estella', '2019-09-19 10:58:55', '19-09-2019 02:21:33 AM'),
(286, 'niyo', '2019-09-19 10:59:13', '19-09-2019 02:21:21 AM'),
(287, 'estella', '2019-09-19 11:02:48', '19-09-2019 02:21:33 AM'),
(288, 'niyo', '2019-09-19 11:03:25', '19-09-2019 02:21:21 AM'),
(289, 'niyo', '2019-09-19 11:04:24', '19-09-2019 02:21:21 AM'),
(290, 'niyo', '2019-09-19 11:08:56', '19-09-2019 02:21:21 AM'),
(291, 'estella', '2019-09-19 11:09:35', '19-09-2019 02:21:33 AM'),
(292, 'niyo', '2019-09-19 11:10:02', '19-09-2019 02:21:21 AM'),
(293, 'estella', '2019-09-19 11:12:22', '19-09-2019 02:21:33 AM'),
(294, 'niyo', '2019-09-19 11:13:31', '19-09-2019 02:21:21 AM'),
(295, 'estella', '2019-09-19 11:16:37', '19-09-2019 02:21:33 AM'),
(296, 'niyo', '2019-09-19 11:17:02', '19-09-2019 02:21:21 AM'),
(297, 'estella', '2019-09-19 11:18:58', '19-09-2019 02:21:33 AM'),
(298, 'niyo', '2019-09-19 11:19:48', '19-09-2019 02:21:21 AM'),
(299, 'estella', '2019-09-19 11:21:28', '19-09-2019 02:21:33 AM'),
(300, 'niyo', '2019-09-19 11:21:42', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE IF NOT EXISTS `user_registration` (
  `USER_ID` int(255) NOT NULL AUTO_INCREMENT,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `NATIONAL_ID` varchar(255) NOT NULL,
  `PHONE_NUMBER` varchar(255) NOT NULL,
  `DISTRICT` varchar(255) NOT NULL,
  `POSITION` varchar(255) NOT NULL,
  `DEPARTMENT` varchar(255) NOT NULL,
  `PROFILE_PICTURE` varchar(255) NOT NULL,
  `USERNAME` varchar(255) NOT NULL,
  `USER_TYPE` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `POSTING_DATE` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`USER_ID`, `FIRST_NAME`, `LAST_NAME`, `GENDER`, `NATIONAL_ID`, `PHONE_NUMBER`, `DISTRICT`, `POSITION`, `DEPARTMENT`, `PROFILE_PICTURE`, `USERNAME`, `USER_TYPE`, `PASSWORD`, `POSTING_DATE`) VALUES
(1, 'Esther', 'Tuyizere', 'Female', '', '', 'Kamonyi', '', 'IT Department', '', 'estella', 'Admin', '*D2757F592F75F56A5B5FAA2FE99D350154374276', '2019-08-12 23:22:25'),
(16, 'claire', 'niyonshuti', '', '', '', '', '', '', '', 'NIY12341', 'User', '*2997B2C9937288F200C9E6EB410827ECAAAC75D1', '2019-08-25 10:56:05'),
(3, 'Digne', 'Umwaliwase', '', '', '', '', '', '', '', 'digney', 'Admin', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '2019-08-12 23:58:56'),
(4, 'Migno', 'Unguyeneza', '', '', '', '', '', '', '', 'mingo', 'User', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '2019-08-13 00:01:29'),
(17, 'claire', 'niyo', 'Male', '', '', '', 'Software Developers', '', '', 'niyo', 'User', '*D2757F592F75F56A5B5FAA2FE99D350154374276', '2019-08-25 10:59:33'),
(6, 'Amatae', 'Uwimpuhwe', 'Female', '34567', '45678', 'Nyamasheke', 'Chief Finance Manager', 'Operational Department', '', 'amata', 'User', '*CCE6947E10F5365930F79546217E288917310C3C', '2019-08-13 00:25:32'),
(19, 'Annete', 'TUMUKUNDE', '', '', '', '', '', '', '', 'annette', 'User', '*23AE809DDACAF96AF0FD78ED04B6A265E05AA257', '2019-08-29 12:56:18');
