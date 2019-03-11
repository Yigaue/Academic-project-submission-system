-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2017 at 12:47 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `acctype`
--

CREATE TABLE `acctype` (
  `acctypeid` int(11) NOT NULL,
  `acctype` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acctype`
--

INSERT INTO `acctype` (`acctypeid`, `acctype`) VALUES
(1, 'Savings'),
(2, 'Current'),
(3, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `admin_download_log`
--

CREATE TABLE `admin_download_log` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_download_log`
--

INSERT INTO `admin_download_log` (`id`, `project_id`, `time`, `date`, `admin_id`) VALUES
(1, 0, '12:14:08am', '12/03/17', 1),
(2, 0, '12:15:23am', '12/03/17', 1),
(3, 0, '12:19:11am', '12/03/17', 1),
(4, 0, '12:20:31am', '12/03/17', 1),
(5, 0, '12:42:20am', '12/03/17', 1),
(6, 0, '12:42:26am', '12/03/17', 1),
(7, 0, '12:45:27am', '12/03/17', 1),
(8, 0, '12:46:06am', '12/03/17', 1),
(9, 0, '12:46:49am', '12/03/17', 1),
(10, 0, '12:46:55am', '12/03/17', 1),
(11, 5, '01:02:09am', '12/03/17', 1),
(12, 4, '06:33:18am', '12/03/17', 1),
(13, 4, '06:34:13am', '12/03/17', 1),
(14, 4, '06:42:45am', '12/03/17', 1),
(15, 4, '08:34:26am', '12/03/17', 1),
(16, 5, '08:35:10am', '12/03/17', 1),
(17, 4, '08:36:51am', '12/03/17', 1),
(18, 4, '08:37:37am', '12/03/17', 1),
(19, 5, '08:37:58am', '12/03/17', 1),
(20, 4, '08:38:46am', '12/03/17', 1),
(21, 4, '08:39:13am', '12/03/17', 1),
(22, 4, '08:40:04am', '12/03/17', 1),
(23, 4, '08:41:54am', '12/03/17', 1),
(24, 4, '08:42:46am', '12/03/17', 1),
(25, 4, '08:44:39am', '12/03/17', 1),
(26, 4, '08:47:43am', '12/03/17', 1),
(27, 4, '08:48:31am', '12/03/17', 1),
(28, 4, '07:39:50pm', '12/03/17', 1),
(29, 5, '07:40:20pm', '12/03/17', 1),
(30, 4, '07:42:55pm', '12/03/17', 1),
(31, 6, '07:43:05pm', '12/03/17', 1),
(32, 4, '07:50:43pm', '12/03/17', 1),
(33, 6, '07:51:27pm', '12/03/17', 1),
(34, 6, '07:53:50pm', '12/03/17', 1),
(35, 4, '07:53:59pm', '12/03/17', 1),
(36, 6, '07:54:53pm', '12/03/17', 1),
(37, 5, '07:55:17pm', '12/03/17', 1),
(38, 5, '07:55:42pm', '12/03/17', 1),
(39, 4, '08:11:04pm', '12/03/17', 1),
(40, 4, '08:11:19pm', '12/03/17', 1),
(41, 4, '09:09:54pm', '12/03/17', 1),
(42, 6, '10:12:24pm', '12/03/17', 1),
(43, 4, '10:13:54pm', '12/03/17', 1),
(44, 4, '10:01:48pm', '13/03/17', 1),
(45, 6, '03:39:04am', '25/03/17', 1),
(46, 6, '04:11:33am', '25/03/17', 1),
(47, 6, '07:42:31pm', '26/03/17', 1),
(48, 5, '07:42:58pm', '26/03/17', 1),
(49, 5, '07:44:43pm', '26/03/17', 1),
(50, 6, '07:54:17am', '27/03/17', 1),
(51, 6, '07:54:38am', '27/03/17', 1),
(52, 6, '07:55:16am', '27/03/17', 1),
(53, 6, '07:55:41am', '27/03/17', 1),
(54, 6, '07:56:59am', '27/03/17', 1),
(55, 6, '07:57:18am', '27/03/17', 1),
(56, 6, '07:57:33am', '27/03/17', 1),
(57, 5, '10:43:01am', '07/04/17', 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `loginid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `logintime` varchar(15) NOT NULL,
  `logindate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`loginid`, `id`, `firstname`, `email`, `logintime`, `logindate`) VALUES
(1, 0, 'Providence', 'care@gmail.com', '01:54:34pm', '16/12/18'),
(2, 0, 'Providence', 'care@gmail.com', '10:30:46am', '16/12/22'),
(3, 0, 'Providence', 'care@gmail.com', '10:42:40am', '16/12/22'),
(4, 0, 'Providence', 'care@gmail.com', '10:46:17am', '16/12/22'),
(5, 0, 'Providence', 'care@gmail.com', '10:48:36am', '16/12/22'),
(6, 0, 'Providence', 'care@gmail.com', '10:52:27am', '16/12/22'),
(7, 0, 'Providence', 'care@gmail.com', '01:03:51pm', '16/12/22'),
(8, 0, 'Providence', 'care@gmail.com', '09:24:13pm', '16/12/22'),
(9, 0, 'Providence', 'care@gmail.com', '01:05:57am', '16/12/24'),
(10, 0, 'Providence', 'care@gmail.com', '07:02:55am', '16/12/24'),
(11, 0, 'Providence', 'care@gmail.com', '10:32:37am', '16/12/24'),
(12, 0, 'Providence', 'care@gmail.com', '09:29:40pm', '24/12/16'),
(13, 0, 'Providence', 'care@gmail.com', '09:32:50pm', '24/12/16'),
(14, 0, 'Providence', 'care@gmail.com', '10:39:59am', '26/12/16'),
(15, 0, 'Providence', 'care@gmail.com', '03:46:40pm', '26/12/16'),
(16, 0, 'Providence', 'care@gmail.com', '07:33:58pm', '26/12/16'),
(17, 0, 'Providence', 'care@gmail.com', '09:02:17pm', '26/12/16'),
(18, 0, 'Providence', 'care@gmail.com', '09:28:36pm', '26/12/16'),
(19, 0, 'Providence', 'care@gmail.com', '01:08:59pm', '27/12/16'),
(20, 0, 'Providence', 'care@gmail.com', '05:38:58pm', '03/01/17'),
(21, 0, 'Providence', 'care@gmail.com', '04:34:17pm', '27/12/16'),
(22, 0, 'Providence', 'care@gmail.com', '05:16:05pm', '27/12/16'),
(23, 0, 'Providence', 'care@gmail.com', '12:13:46pm', '29/12/16'),
(24, 0, 'Providence', 'care@gmail.com', '01:13:40pm', '29/12/16'),
(25, 0, 'Providence', 'care@gmail.com', '02:28:53pm', '29/12/16'),
(26, 0, 'Providence', 'care@gmail.com', '02:30:16pm', '29/12/16'),
(27, 1, 'Providence', 'care@gmail.com', '02:32:12pm', '29/12/16'),
(28, 1, 'Providence', 'care@gmail.com', '02:33:24pm', '29/12/16'),
(29, 1, 'Providence', 'care@gmail.com', '02:42:10pm', '29/12/16'),
(30, 1, 'Providence', 'care@gmail.com', '02:22:48pm', '30/12/16'),
(31, 1, 'Providence', 'care@gmail.com', '02:28:12pm', '30/12/16'),
(32, 1, 'Providence', 'care@gmail.com', '02:30:53pm', '30/12/16'),
(33, 1, 'Providence', 'care@gmail.com', '02:32:45pm', '30/12/16'),
(34, 1, 'Providence', 'care@gmail.com', '02:46:53pm', '30/12/16'),
(35, 1, 'Providence', 'care@gmail.com', '10:09:06pm', '01/01/17'),
(36, 1, 'Providence', 'care@gmail.com', '12:10:23am', '02/01/17'),
(37, 1, 'Providence', 'care@gmail.com', '12:53:16am', '02/01/17'),
(38, 1, 'Providence', 'care@gmail.com', '11:45:15pm', '02/01/17'),
(39, 1, 'Providence', 'care@gmail.com', '10:13:48am', '13/01/17'),
(40, 1, 'Providence', 'care@gmail.com', '10:32:51am', '13/01/17'),
(41, 1, 'Providence', 'care@gmail.com', '10:52:01am', '13/01/17'),
(42, 1, 'Providence', 'care@gmail.com', '03:28:13pm', '13/01/17'),
(43, 1, 'Providence', 'care@gmail.com', '09:27:21pm', '14/01/17'),
(44, 1, 'Providence', 'care@gmail.com', '03:51:57pm', '16/01/17'),
(45, 1, 'Providence', 'care@gmail.com', '07:38:48pm', '16/01/17'),
(46, 1, 'Providence', 'care@gmail.com', '12:24:15pm', '17/01/17'),
(47, 1, 'Providence', 'care@gmail.com', '03:05:12pm', '17/01/17'),
(48, 1, 'Providence', 'care@gmail.com', '03:07:34pm', '17/01/17'),
(49, 1, 'Providence', 'care@gmail.com', '06:22:30pm', '17/01/17'),
(50, 1, 'Providence', 'care@gmail.com', '06:21:59pm', '18/01/17'),
(51, 1, 'Providence', 'care@gmail.com', '08:10:09pm', '18/01/17'),
(52, 1, 'Providence', 'care@gmail.com', '06:16:02pm', '19/01/17'),
(53, 1, 'Providence', 'care@gmail.com', '10:29:42am', '20/01/17'),
(54, 1, 'Providence', 'care@gmail.com', '01:23:08pm', '20/01/17'),
(55, 1, 'Providence', 'care@gmail.com', '04:15:21pm', '20/01/17'),
(56, 1, 'Providence', 'care@gmail.com', '04:28:19pm', '20/01/17'),
(57, 1, 'Providence', 'care@gmail.com', '01:03:42pm', '21/01/17'),
(58, 1, 'Providence', 'care@gmail.com', '04:46:07pm', '21/01/17'),
(59, 1, 'Providence', 'care@gmail.com', '05:27:31pm', '21/01/17'),
(60, 1, 'Providence', 'care@gmail.com', '05:32:30pm', '21/01/17'),
(61, 1, 'Providence', 'care@gmail.com', '08:07:53pm', '21/01/17'),
(62, 1, 'Providence', 'care@gmail.com', '11:14:49pm', '21/01/17'),
(63, 1, 'Providence', 'care@gmail.com', '11:28:51pm', '21/01/17'),
(64, 1, 'Providence', 'care@gmail.com', '11:30:32pm', '21/01/17'),
(65, 1, 'Providence', 'care@gmail.com', '11:33:53pm', '21/01/17'),
(66, 1, 'Providence', 'care@gmail.com', '11:40:50am', '31/01/17'),
(67, 1, 'Providence', 'care@gmail.com', '09:41:13pm', '05/02/17'),
(68, 1, 'Providence', 'care@gmail.com', '06:02:26pm', '14/02/17'),
(69, 1, 'Providence', 'care@gmail.com', '01:19:59pm', '26/02/17'),
(70, 1, 'Providence', 'care@gmail.com', '03:27:34pm', '26/02/17'),
(71, 1, 'Providence', 'care@gmail.com', '04:24:13pm', '26/02/17'),
(72, 1, 'Providence', 'care@gmail.com', '09:35:56pm', '26/02/17'),
(73, 1, 'Providence', 'care@gmail.com', '01:21:38pm', '28/02/17'),
(74, 1, 'Providence', 'care@gmail.com', '08:54:10pm', '02/03/17'),
(75, 1, 'Providence', 'care@gmail.com', '09:09:10pm', '02/03/17'),
(76, 1, 'Providence', 'care@gmail.com', '07:45:51am', '03/03/17'),
(77, 1, 'Providence', 'care@gmail.com', '08:44:20am', '03/03/17'),
(78, 1, 'Providence', 'care@gmail.com', '06:11:19pm', '04/03/17'),
(79, 1, 'Providence', 'care@gmail.com', '06:20:21pm', '04/03/17'),
(80, 1, 'Providence', 'care@gmail.com', '06:26:53pm', '04/03/17'),
(81, 1, 'Providence', 'care@gmail.com', '06:32:12pm', '04/03/17'),
(82, 1, 'Providence', 'care@gmail.com', '11:07:32pm', '08/03/17'),
(83, 1, 'Providence', 'care@gmail.com', '03:14:01pm', '09/03/17'),
(84, 1, 'Providence', 'care@gmail.com', '04:11:41pm', '09/03/17'),
(85, 1, 'Providence', 'care@gmail.com', '06:29:34pm', '11/03/17'),
(86, 1, 'Providence', 'care@gmail.com', '06:34:32pm', '11/03/17'),
(87, 1, 'Providence', 'care@gmail.com', '06:39:29pm', '11/03/17'),
(88, 1, 'Providence', 'care@gmail.com', '06:43:20pm', '11/03/17'),
(89, 1, 'Providence', 'care@gmail.com', '06:55:36pm', '11/03/17'),
(90, 1, 'Providence', 'care@gmail.com', '07:28:38pm', '11/03/17'),
(91, 1, 'Providence', 'care@gmail.com', '10:30:51pm', '11/03/17'),
(92, 1, 'Providence', 'care@gmail.com', '12:19:00am', '12/03/17'),
(93, 1, 'Providence', 'care@gmail.com', '06:30:07am', '12/03/17'),
(94, 1, 'Providence', 'care@gmail.com', '08:31:35am', '12/03/17'),
(95, 1, 'Providence', 'care@gmail.com', '07:39:42pm', '12/03/17'),
(96, 1, 'Providence', 'care@gmail.com', '07:42:38pm', '12/03/17'),
(97, 1, 'Providence', 'care@gmail.com', '10:12:15pm', '12/03/17'),
(98, 1, 'Providence', 'care@gmail.com', '01:21:14pm', '13/03/17'),
(99, 1, 'Providence', 'care@gmail.com', '09:44:25pm', '13/03/17'),
(100, 1, 'Providence', 'care@gmail.com', '11:42:20am', '15/03/17'),
(101, 1, 'Providence', 'care@gmail.com', '06:36:43am', '22/03/17'),
(102, 1, 'Providence', 'care@gmail.com', '07:11:35am', '22/03/17'),
(103, 1, 'Providence', 'care@gmail.com', '09:40:06pm', '23/03/17'),
(104, 1, 'Providence', 'care@gmail.com', '09:45:59pm', '23/03/17'),
(105, 1, 'Providence', 'care@gmail.com', '03:19:29pm', '24/03/17'),
(106, 1, 'Providence', 'care@gmail.com', '02:00:09pm', '26/03/17'),
(107, 1, 'Providence', 'care@gmail.com', '07:02:20am', '27/03/17'),
(108, 1, 'Providence', 'care@gmail.com', '01:25:52am', '30/03/17'),
(109, 1, 'Providence', 'care@gmail.com', '04:32:19pm', '02/04/17'),
(110, 1, 'Providence', 'care@gmail.com', '11:37:52pm', '05/04/17'),
(111, 1, 'Providence', 'care@gmail.com', '10:39:20am', '07/04/17');

-- --------------------------------------------------------

--
-- Table structure for table `admin_logout`
--

CREATE TABLE `admin_logout` (
  `logoutid` int(11) NOT NULL,
  `loginid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `logouttime` varchar(15) NOT NULL,
  `logoutdate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_logout`
--

INSERT INTO `admin_logout` (`logoutid`, `loginid`, `id`, `firstname`, `email`, `logouttime`, `logoutdate`) VALUES
(1, 23, 0, 'Providence', 'care@gmail.com', '02:24pm', '16/12/29'),
(2, 23, 1, 'Providence', 'care@gmail.com', '02:29pm', '16/12/29'),
(3, 0, 1, 'Providence', 'care@gmail.com', '02:31pm', '16/12/29'),
(4, 27, 1, 'Providence', 'care@gmail.com', '02:32pm', '16/12/29'),
(5, 28, 1, 'Providence', 'care@gmail.com', '02:38pm', '16/12/29'),
(6, 29, 1, 'Providence', 'care@gmail.com', '02:27pm', '16/12/30'),
(7, 29, 1, 'Providence', 'care@gmail.com', '02:29pm', '16/12/30'),
(8, 29, 1, 'Providence', 'care@gmail.com', '02:32:26pm', '16/12/30'),
(9, 29, 1, 'Providence', 'care@gmail.com', '02:32:52pm', '16/12/30'),
(10, 37, 1, 'Providence', 'care@gmail.com', '12:54:49am', '17/01/02'),
(11, 37, 1, 'Providence', 'care@gmail.com', '10:18:21am', '17/01/13'),
(12, 37, 1, 'Providence', 'care@gmail.com', '10:49:20am', '17/01/13'),
(13, 37, 1, 'Providence', 'care@gmail.com', '03:07:03pm', '17/01/17'),
(14, 37, 1, 'Providence', 'care@gmail.com', '05:25:44pm', '17/01/21'),
(15, 37, 1, 'Providence', 'care@gmail.com', '11:27:51pm', '17/01/21'),
(16, 37, 1, 'Providence', 'care@gmail.com', '11:29:27pm', '17/01/21'),
(17, 37, 1, 'Providence', 'care@gmail.com', '11:31:52pm', '17/01/21'),
(18, 37, 1, 'Providence', 'care@gmail.com', '11:35:19pm', '17/01/21'),
(19, 37, 1, 'Providence', 'care@gmail.com', '11:47:49am', '17/01/31'),
(20, 37, 1, 'Providence', 'care@gmail.com', '01:20:19pm', '17/02/26'),
(21, 37, 1, 'Providence', 'care@gmail.com', '03:32:18pm', '17/02/26'),
(22, 37, 1, 'Providence', 'care@gmail.com', '04:24:31pm', '17/02/26'),
(23, 37, 1, 'Providence', 'care@gmail.com', '09:36:02pm', '17/02/26'),
(24, 0, 0, '', '', '09:36:03pm', '17/02/26'),
(25, 37, 1, 'Providence', 'care@gmail.com', '08:54:24pm', '17/03/02'),
(26, 37, 1, 'Providence', 'care@gmail.com', '09:10:25pm', '17/03/02'),
(27, 37, 1, 'Providence', 'care@gmail.com', '06:25:10pm', '17/03/04'),
(28, 37, 1, 'Providence', 'care@gmail.com', '06:31:35pm', '17/03/04'),
(29, 37, 1, 'Providence', 'care@gmail.com', '06:33:56pm', '17/03/04'),
(30, 37, 1, 'Providence', 'care@gmail.com', '06:34:12pm', '17/03/11'),
(31, 37, 1, 'Providence', 'care@gmail.com', '06:34:38pm', '17/03/11'),
(32, 37, 1, 'Providence', 'care@gmail.com', '06:42:54pm', '17/03/11'),
(33, 37, 1, 'Providence', 'care@gmail.com', '06:53:10pm', '17/03/11'),
(34, 37, 1, 'Providence', 'care@gmail.com', '06:56:51pm', '17/03/11'),
(35, 37, 1, 'Providence', 'care@gmail.com', '09:55:48pm', '17/03/11'),
(36, 37, 1, 'Providence', 'care@gmail.com', '12:17:31am', '17/03/12'),
(37, 37, 1, 'Providence', 'care@gmail.com', '07:40:48pm', '17/03/12'),
(38, 37, 1, 'Providence', 'care@gmail.com', '07:10:42am', '17/03/22'),
(39, 37, 1, 'Providence', 'care@gmail.com', '01:34:07am', '17/03/30'),
(40, 37, 1, 'Providence', 'care@gmail.com', '11:38:30pm', '17/04/05');

-- --------------------------------------------------------

--
-- Table structure for table `admin_members`
--

CREATE TABLE `admin_members` (
  `admin_id` int(11) NOT NULL,
  `approval` int(11) NOT NULL DEFAULT '0',
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(225) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `picture` varchar(225) NOT NULL DEFAULT 'images(1).jpg '
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_members`
--

INSERT INTO `admin_members` (`admin_id`, `approval`, `firstname`, `surname`, `email`, `password`, `time`, `date`, `picture`) VALUES
(1, 1, 'Providence', 'Ifeosame', 'care@gmail.com', 'ffead8f75bff3df51f1a81bcc8e15945', '01:49:26pm', '16/12/18', 'g.png'),
(2, 0, 'Providence', 'Ifeosame', 'providenceifeosame@gmail.com', '7a6427d1826be4ed2af94fb0f5bdfb75', '01:51:33pm', '16/12/18', 'g.png'),
(3, 0, 'Providence', 'Ifeosame', 'provi@gmail.com', 'ffead8f75bff3df51f1a81bcc8e15945', '02:00:09pm', '16/12/18', 'g.png');

-- --------------------------------------------------------

--
-- Table structure for table `admin_upload_log`
--

CREATE TABLE `admin_upload_log` (
  `id` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `time` varchar(20) NOT NULL,
  `date` varchar(20) NOT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_verification_log`
--

CREATE TABLE `admin_verification_log` (
  `log_id` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `admin_verification` int(11) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_verification_log`
--

INSERT INTO `admin_verification_log` (`log_id`, `admin_status`, `status`, `project_id`, `admin_id`, `admin_verification`, `time`, `date`) VALUES
(1, 1, 1, 2, 1, 0, '06:56:04pm', '11/03/17'),
(2, 1, 1, 3, 1, 1, '03:52:08pm', '16/01/17'),
(3, 1, 1, 4, 1, 0, '07:13:43am', '22/03/17'),
(4, 1, 1, 10, 1, 1, '03:14:14pm', '09/03/17'),
(5, 1, 1, 6, 1, 1, '06:33:16pm', '04/03/17'),
(6, 1, 1, 7, 1, 0, '06:33:37pm', '04/03/17'),
(7, 1, 1, 8, 1, 1, '12:15:46am', '09/03/17'),
(8, 1, 1, 9, 1, 1, '12:17:30am', '09/03/17'),
(9, 1, 1, 11, 1, 1, '03:14:31pm', '09/03/17'),
(10, 1, 1, 12, 1, 1, '03:30:43pm', '09/03/17'),
(11, 1, 1, 13, 1, 1, '03:30:57pm', '09/03/17'),
(12, 1, 1, 1, 1, 0, '06:56:06pm', '11/03/17'),
(13, 1, 1, 5, 1, 1, '10:44:18am', '07/04/17');

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `alumniid` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`alumniid`, `firstname`, `lastname`, `phone`) VALUES
(1, 'Providence', 'ifeosame', '08077937950'),
(2, 'FISH', 'RAT', '08100993100'),
(3, 'tatfo', 'linda ikeji', '080419666419'),
(4, 'master daniel ', 'ugboh', '09024147862'),
(5, 'Providence', 'ifeosame', '07031172366');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `bankid` int(11) NOT NULL,
  `bank` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`bankid`, `bank`) VALUES
(2, '[object HTMLDivElement]'),
(3, 'Eco bank '),
(4, 'Enterprise bank'),
(5, 'FCMB bank '),
(6, 'Fidelity bank '),
(7, 'First bank '),
(8, 'GT bank '),
(9, 'Keystone bank '),
(10, 'Mainstreet bank '),
(11, 'Skye bank '),
(12, 'Stanbic IBTC '),
(13, 'Sterling bank '),
(14, 'UBA bank '),
(15, 'Union bank '),
(16, 'Unity bank '),
(17, 'Wema bank  '),
(18, 'Zenith bank'),
(19, 'Diamond Bank'),
(20, 'Access Bank');

-- --------------------------------------------------------

--
-- Table structure for table `choice`
--

CREATE TABLE `choice` (
  `choiceid` int(11) NOT NULL,
  `choice` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choice`
--

INSERT INTO `choice` (`choiceid`, `choice`) VALUES
(1, 'Paid'),
(2, 'Free');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `commentid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `comment` varchar(2000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `name` varchar(225) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(11) NOT NULL,
  `department` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `department`) VALUES
(1, 'Agricultural Economics and Extension'),
(2, 'Crop and soil science'),
(3, 'Animal science'),
(4, 'Fisheries'),
(5, 'Foresty and Wildlife Management'),
(6, 'Petroleum Engineering'),
(7, 'Gas Engineering'),
(8, 'Chemical Engineering'),
(9, 'Civil Engineering'),
(10, 'Mechanical Engineering'),
(11, 'Environmaental Engineering'),
(12, 'Elect/Electronics  Engineering'),
(13, 'Pharmacy'),
(14, 'Phyiscs'),
(15, 'Physics/geophysics'),
(16, 'Physics/ Electronics'),
(17, 'Physics/ material science'),
(18, 'Maths and statistics'),
(19, 'Pure and Applied Mathematics'),
(20, 'Statistics'),
(21, 'Geology'),
(22, 'Computer Science'),
(23, 'Biochemistry'),
(24, 'Pure and Industrial Chemistry'),
(25, 'Microbiology'),
(26, 'Animal and Environmental Biology'),
(27, 'Plant Science and Biotechnology'),
(28, 'Biochemistry Technology'),
(29, 'Petrochemical Techbology'),
(30, 'Geology/ Mining Technology'),
(31, 'Microbiology Technology'),
(32, 'Physics/ Production'),
(33, 'Biomedical Technology'),
(34, 'Animal Health Psysiology'),
(35, 'Entomolgy and Pest management'),
(36, 'Enviromental Biology'),
(37, 'Fisheries and Hydrobiology'),
(38, 'Parasitology'),
(40, 'Finance and Banking'),
(41, 'Marketing'),
(42, 'Management'),
(43, 'Education Economics'),
(44, 'Education Phycology'),
(45, 'Education Accounting'),
(46, 'Human Kinetics and Health Education'),
(47, 'Adult and Non formal Education'),
(48, 'Philosophy'),
(49, 'History and Diplomatic Studies'),
(50, 'Religious and Cultural Studies'),
(51, 'English Studies'),
(52, 'Linguistics and Communication Studies'),
(53, 'Music'),
(54, 'Fine Art and Design'),
(55, 'Theatre Art'),
(56, 'Foreign Language and Litreature'),
(57, 'Accounting');

-- --------------------------------------------------------

--
-- Table structure for table `entry`
--

CREATE TABLE `entry` (
  `entryid` int(11) NOT NULL,
  `alumniid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `departmentid` int(11) NOT NULL,
  `schoolid` int(11) NOT NULL,
  `choiceid` int(11) NOT NULL,
  `protypeid` int(11) NOT NULL,
  `priceid` int(11) NOT NULL,
  `downloads` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entry`
--

INSERT INTO `entry` (`entryid`, `alumniid`, `projectid`, `yearid`, `departmentid`, `schoolid`, `choiceid`, `protypeid`, `priceid`, `downloads`) VALUES
(1, 1, 1, 52, 57, 76, 2, 1, 5, 0),
(4, 1, 4, 52, 57, 75, 1, 1, 1, 21),
(5, 1, 5, 52, 57, 72, 2, 1, 5, 0),
(6, 1, 6, 52, 57, 75, 2, 1, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `logintime` varchar(15) NOT NULL,
  `loginDate` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `id`, `firstname`, `email`, `logintime`, `loginDate`) VALUES
(8, 23, 'Provy', 'care@gmail.com', '11:19:00', '2016-12-13'),
(9, 23, 'Provy', 'care@gmail.com', '11:33:00', '2016-12-13'),
(10, 23, 'Provy', 'care@gmail.com', '11:34:00', '2016-12-13'),
(11, 23, 'Provy', 'care@gmail.com', '01:13:00', '2016-12-14'),
(12, 23, 'Provy', 'care@gmail.com', '11:02:00', '2016-12-14'),
(13, 23, 'Provy', 'care@gmail.com', '12:09:00', '2016-12-14'),
(14, 23, 'Providence', 'care@gmail.com', '06:26:00', '2016-12-15'),
(15, 23, 'Providence', 'care@gmail.com', '03:49:09', '2016-12-16'),
(16, 23, 'Providence', 'care@gmail.com', '04:13:57', '2016-12-16'),
(17, 23, 'Provy', 'care@gmail.com', '02:28:19', '2016-12-17'),
(18, 23, 'Provy', 'care@gmail.com', '08:32:06', '2016-12-17'),
(19, 23, 'Provy', 'care@gmail.com', '03:13:16', '2016-12-18'),
(20, 23, 'Provy', 'care@gmail.com', '08:37:45', '2016-12-18'),
(21, 23, 'Provy', 'care@gmail.com', '08:43:40', '2016-12-24'),
(22, 23, 'Provy', 'care@gmail.com', '10:44:54', '2024-12-16'),
(23, 23, 'Providence', 'care@gmail.com', '03:42:09', '2026-12-16'),
(24, 23, 'Providence', 'care@gmail.com', '03:46:04', '2026-12-16'),
(25, 23, 'Providence', 'care@gmail.com', '03:49:54', '0000-00-00'),
(26, 23, 'Providence', 'care@gmail.com', '03:54:17pm', '26/12/2016'),
(27, 23, 'Providence', 'care@gmail.com', '03:55:23pm', '26-12-16'),
(28, 23, 'Providence', 'care@gmail.com', '07:33:48pm', '26/12/16'),
(29, 23, 'Providence', 'care@gmail.com', '09:02:01pm', '26/12/16'),
(30, 23, 'Providence', 'care@gmail.com', '09:24:29pm', '26/12/16'),
(31, 23, 'Providence', 'care@gmail.com', '09:30:40pm', '26/12/16'),
(32, 23, 'Providence', 'care@gmail.com', '01:11:14am', '27/12/16'),
(33, 23, 'Providence', 'care@gmail.com', '05:38:34pm', '03/01/17'),
(34, 23, 'Providence', 'care@gmail.com', '04:33:45pm', '27/12/16'),
(35, 23, 'Providence', 'care@gmail.com', '10:05:30pm', '01/01/17'),
(36, 23, 'Providence', 'care@gmail.com', '12:50:30am', '02/01/17'),
(37, 23, 'Providence', 'care@gmail.com', '09:22:58pm', '14/01/17'),
(38, 23, 'Providence', 'care@gmail.com', '03:03:03pm', '17/01/17'),
(39, 23, 'Providence', 'care@gmail.com', '11:27:59pm', '21/01/17'),
(40, 23, 'Providence', 'care@gmail.com', '11:29:41pm', '21/01/17'),
(41, 23, 'Providence', 'care@gmail.com', '11:32:04pm', '21/01/17'),
(42, 23, 'Providence', 'care@gmail.com', '11:35:39pm', '21/01/17'),
(43, 23, 'Providence', 'care@gmail.com', '02:33:53am', '22/01/17'),
(44, 23, 'Providence', 'care@gmail.com', '11:00:29am', '22/01/17'),
(45, 23, 'Providence', 'care@gmail.com', '02:49:50pm', '22/01/17'),
(46, 23, 'Providence', 'care@gmail.com', '05:21:05pm', '29/01/17'),
(47, 23, 'Providence', 'care@gmail.com', '08:11:55am', '30/01/17'),
(48, 23, 'Providence', 'care@gmail.com', '11:38:33am', '31/01/17'),
(49, 23, 'Providence', 'care@gmail.com', '11:18:19am', '02/02/17'),
(50, 23, 'Providence', 'care@gmail.com', '05:07:37pm', '02/02/17'),
(51, 23, 'Providence', 'care@gmail.com', '05:55:54pm', '02/02/17'),
(52, 23, 'Providence', 'care@gmail.com', '06:53:26pm', '02/02/17'),
(53, 23, 'Providence', 'care@gmail.com', '07:10:39pm', '02/02/17'),
(54, 23, 'Providence', 'care@gmail.com', '07:11:37pm', '02/02/17'),
(55, 23, 'Providence', 'care@gmail.com', '08:55:50pm', '02/02/17'),
(56, 23, 'Providence', 'care@gmail.com', '09:17:37pm', '02/02/17'),
(57, 34, 'Ubong', 'uby@gmail.com', '10:07:52', '2005-02-17'),
(58, 35, 'Inno', 'ifesam@gmail.com', '10:15:47pm', '05/02/17'),
(59, 23, 'Providence', 'care@gmail.com', '05:23:20am', '08/02/17'),
(60, 23, 'Providence', 'care@gmail.com', '08:22:38am', '11/02/17'),
(61, 23, 'Providence', 'care@gmail.com', '09:46:31am', '11/02/17'),
(62, 23, 'Providence', 'care@gmail.com', '01:53:29pm', '12/02/17'),
(63, 23, 'Providence', 'care@gmail.com', '05:39:16am', '13/02/17'),
(64, 23, 'Providence', 'care@gmail.com', '05:40:01pm', '14/02/17'),
(65, 23, 'Providence', 'care@gmail.com', '05:20:37pm', '20/02/17'),
(66, 23, 'Providence', 'care@gmail.com', '12:42:08pm', '21/02/17'),
(67, 23, 'Providence', 'care@gmail.com', '06:28:48pm', '21/02/17'),
(68, 23, 'Providence', 'care@gmail.com', '01:06:46am', '22/02/17'),
(69, 23, 'Providence', 'care@gmail.com', '01:07:47am', '22/02/17'),
(70, 23, 'Providence', 'care@gmail.com', '01:09:30am', '22/02/17'),
(71, 23, 'Providence', 'care@gmail.com', '06:28:10am', '23/02/17'),
(72, 23, 'Providence', 'care@gmail.com', '09:33:45pm', '23/02/17'),
(73, 23, 'Providence', 'care@gmail.com', '11:44:07am', '25/02/17'),
(74, 36, 'Joshua', 'evuetaphajoshua@gmail.com', '07:44:51pm', '25/02/17'),
(75, 23, 'Providence', 'care@gmail.com', '08:20:14pm', '25/02/17'),
(76, 23, 'Providence', 'care@gmail.com', '12:34:51pm', '26/02/17'),
(77, 23, 'Providence', 'care@gmail.com', '12:36:09pm', '26/02/17'),
(78, 37, 'Nasty', 'nasty@gmail.com', '12:38:39pm', '26/02/17'),
(79, 23, 'Providence', 'care@gmail.com', '06:37:03pm', '26/02/17'),
(80, 23, 'Providence', 'care@gmail.com', '08:54:39pm', '02/03/17'),
(81, 23, 'Providence', 'care@gmail.com', '07:11:40am', '03/03/17'),
(82, 23, 'Providence', 'care@gmail.com', '08:20:20am', '03/03/17'),
(83, 23, 'Providence', 'care@gmail.com', '06:14:04pm', '04/03/17'),
(84, 23, 'Providence', 'care@gmail.com', '06:51:11pm', '04/03/17'),
(85, 23, 'Providence', 'care@gmail.com', '09:19:04pm', '08/03/17'),
(86, 23, 'Providence', 'care@gmail.com', '03:55:54pm', '09/03/17'),
(87, 23, 'Providence', 'care@gmail.com', '03:57:48pm', '09/03/17'),
(88, 23, 'Tombra', 'care@gmail.com', '04:08:58pm', '09/03/17'),
(89, 23, 'Tombra', 'care@gmail.com', '06:28:39pm', '11/03/17'),
(90, 23, 'Tombra', 'care@gmail.com', '06:53:26pm', '11/03/17'),
(91, 23, 'Tombra', 'care@gmail.com', '06:59:07pm', '11/03/17'),
(92, 23, 'Tombra', 'care@gmail.com', '12:17:45am', '12/03/17'),
(93, 23, 'Tombra', 'care@gmail.com', '07:40:58pm', '12/03/17'),
(94, 23, 'Tombra', 'care@gmail.com', '10:14:44am', '26/03/17'),
(95, 23, 'Providence', 'care@gmail.com', '11:09:47am', '26/03/17'),
(96, 23, 'Providence', 'care@gmail.com', '09:25:12pm', '29/03/17'),
(97, 23, 'Providence', 'care@gmail.com', '09:44:22am', '31/03/17'),
(98, 23, 'Providence', 'care@gmail.com', '10:35:15am', '31/03/17'),
(99, 23, 'Providence', 'care@gmail.com', '11:47:26am', '31/03/17'),
(100, 23, 'Providence', 'care@gmail.com', '11:55:18pm', '31/03/17'),
(101, 23, 'Providence', 'care@gmail.com', '04:50:20pm', '01/04/17'),
(102, 23, 'Providence', 'care@gmail.com', '11:38:43pm', '05/04/17'),
(103, 23, 'Providence', 'care@gmail.com', '10:24:16am', '07/04/17');

-- --------------------------------------------------------

--
-- Table structure for table `logout`
--

CREATE TABLE `logout` (
  `loginid` int(11) NOT NULL,
  `logoutid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `logouttime` varchar(225) NOT NULL,
  `logoutDate` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logout`
--

INSERT INTO `logout` (`loginid`, `logoutid`, `id`, `firstname`, `email`, `logouttime`, `logoutDate`) VALUES
(0, 2, 23, 'Provy', 'care@gmail.com', '11:19am', '16/12/13'),
(10, 3, 23, 'Provy', 'care@gmail.com', '11:35am', '16/12/13'),
(10, 4, 23, 'Provy', 'care@gmail.com', '11:03am', '16/12/14'),
(13, 5, 23, 'Providence', 'care@gmail.com', '02:22pm', '16/12/14'),
(13, 6, 23, 'Providence', 'care@gmail.com', '03:49pm', '16/12/16'),
(0, 7, 0, '', '', '03:49pm', '16/12/16'),
(13, 8, 23, 'Provy', 'care@gmail.com', '02:28am', '16/12/17'),
(4, 9, 2, 'Providence', 'care@gmail.com', '04:51pm', '16/12/17'),
(5, 10, 2, 'Providence', 'care@gmail.com', '04:54pm', '16/12/17'),
(13, 11, 23, 'Providence', 'care@gmail.com', '03:45pm', '16/12/26'),
(6, 12, 0, 'Providence', 'care@gmail.com', '03:49pm', '16/12/26'),
(13, 13, 23, 'Providence', 'care@gmail.com', '03:54pm', '16/12/26'),
(13, 14, 23, 'Providence', 'care@gmail.com', '03:55pm', '16/12/26'),
(13, 15, 23, 'Providence', 'care@gmail.com', '07:33pm', '16/12/26'),
(6, 16, 0, '', 'care@gmail.com', '09:24pm', '16/12/26'),
(13, 17, 23, 'Providence', 'care@gmail.com', '09:26pm', '16/12/26'),
(13, 18, 23, 'Providence', 'care@gmail.com', '09:33pm', '16/12/26'),
(13, 19, 23, 'Providence', 'care@gmail.com', '05:38pm', '17/01/03'),
(13, 20, 23, 'Providence', 'care@gmail.com', '04:33pm', '16/12/27'),
(36, 21, 23, 'Providence', 'care@gmail.com', '12:52am', '17/01/02'),
(36, 22, 23, 'Providence', 'care@gmail.com', '09:27pm', '17/01/14'),
(36, 23, 23, 'Providence', 'care@gmail.com', '03:04pm', '17/01/17'),
(0, 24, 0, '', '', '03:04pm', '17/01/17'),
(36, 25, 23, 'Providence', 'care@gmail.com', '11:28pm', '17/01/21'),
(36, 26, 23, 'Providence', 'care@gmail.com', '11:30pm', '17/01/21'),
(36, 27, 23, 'Providence', 'care@gmail.com', '11:33pm', '17/01/21'),
(36, 28, 23, 'Providence', 'care@gmail.com', '02:50pm', '17/01/22'),
(36, 29, 23, 'Providence', 'care@gmail.com', '11:40am', '17/01/31'),
(36, 30, 23, 'Providence', 'care@gmail.com', '05:08pm', '17/02/02'),
(36, 31, 23, 'Providence', 'care@gmail.com', '07:11pm', '17/02/02'),
(0, 32, 0, 'Erastus', 'erastus_uso@gmail.com', '09:16pm', '17/02/02'),
(0, 33, 0, 'Rastus', 'rastususo@gmail.com', '09:17pm', '17/02/02'),
(36, 34, 23, 'Providence', 'care@gmail.com', '09:27pm', '17/02/02'),
(0, 35, 29, 'Erastus', 'erasooooo@gmail.com', '09:33pm', '17/02/02'),
(0, 36, 0, '', '', '09:33pm', '17/02/02'),
(0, 37, 33, 'Tega', 'gideonking7443@gmail', '09:26pm', '17/02/05'),
(57, 38, 34, 'Ubong', 'uby@gmail.com', '10:15pm', '17/02/05'),
(36, 39, 23, 'Providence', 'care@gmail.com', '08:48am', '17/02/11'),
(36, 40, 23, 'Providence', 'care@gmail.com', '05:54pm', '17/02/14'),
(36, 41, 0, '', '', '01:06am', '17/02/22'),
(0, 42, 0, '', '', '01:06am', '17/02/22'),
(0, 43, 0, '', '', '01:06am', '17/02/22'),
(36, 44, 0, '', '', '01:07am', '17/02/22'),
(0, 45, 0, '', '', '01:09am', '17/02/22'),
(74, 46, 36, 'Joshua', 'evuetaphajoshua@gmail.com', '08:20pm', '17/02/25'),
(36, 47, 23, 'Providence', 'care@gmail.com', '08:43pm', '17/02/25'),
(36, 48, 23, 'Providence', 'care@gmail.com', '12:35pm', '17/02/26'),
(36, 49, 23, 'Providence', 'care@gmail.com', '12:37pm', '17/02/26'),
(78, 50, 37, 'Nasty', 'nasty@gmail.com', '12:40pm', '17/02/26'),
(36, 51, 23, 'Providence', 'care@gmail.com', '07:34pm', '17/02/26'),
(36, 52, 23, 'Providence', 'care@gmail.com', '09:08pm', '17/03/02'),
(36, 53, 23, 'Providence', 'care@gmail.com', '07:45am', '17/03/03'),
(36, 54, 23, 'Providence', 'care@gmail.com', '06:19pm', '17/03/04'),
(36, 55, 23, 'Providence', 'care@gmail.com', '11:06pm', '17/03/08'),
(36, 56, 23, 'Providence', 'care@gmail.com', '03:56pm', '17/03/09'),
(36, 57, 23, 'Providence', 'care@gmail.com', '04:07pm', '17/03/09'),
(36, 58, 23, 'Tombra', 'care@gmail.com', '04:09pm', '17/03/09'),
(36, 59, 23, 'Tombra', 'care@gmail.com', '06:29pm', '17/03/11'),
(36, 60, 23, 'Tombra', 'care@gmail.com', '06:55pm', '17/03/11'),
(36, 61, 23, 'Tombra', 'care@gmail.com', '07:28pm', '17/03/11'),
(36, 62, 23, 'Tombra', 'care@gmail.com', '12:18am', '17/03/12'),
(36, 63, 23, 'Tombra', 'care@gmail.com', '07:42pm', '17/03/12'),
(36, 64, 23, 'Providence', 'care@gmail.com', '04:54pm', '17/04/01'),
(36, 65, 23, 'Providence', 'care@gmail.com', '10:36am', '17/04/07');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `memberid` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(200) DEFAULT NULL,
  `surname` varchar(225) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `picture` varchar(225) NOT NULL DEFAULT 'images(1).jpg',
  `school` varchar(225) NOT NULL,
  `location` varchar(225) NOT NULL,
  `facebook` varchar(225) NOT NULL,
  `google` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `whatsapp` varchar(225) NOT NULL,
  `instagram` varchar(225) NOT NULL,
  `snapchat` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`memberid`, `time`, `date`, `password`, `firstname`, `surname`, `email`, `picture`, `school`, `location`, `facebook`, `google`, `twitter`, `whatsapp`, `instagram`, `snapchat`) VALUES
(23, '11:10:00', '2016-12-11', 'ffead8f75bff3df51f1a81bcc8e15945', 'lakia', 'Ifeosame', 'care@gmail.com', '2348160202182.jpg', 'Akwa Ibom State polytechnic', 'Lagos', 'www.facebook.com/fish', 'nerissaa', 'nerissaa', '08100993100', 'p', 'nerissaa'),
(24, '09:14:11', '2002-02-17', '4f022dae842ec1371df5ba7512ba4895', 'Erastus', 'Uso', 'erastususo@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(25, '09:15:16', '2002-02-17', '968ca39253fb15c21bec94bec127cd60', 'Erastus', 'Uso', 'erastus_uso@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(26, '09:16:53', '2002-02-17', '968ca39253fb15c21bec94bec127cd60', 'Rastus', 'Uso', 'rastususo@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(27, '09:28:21', '2002-02-17', 'b1576e82c6c6fb1503109f00315debf2', 'Erastus', 'Ifeosame', 'erasooo@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(28, '09:30:38', '2002-02-17', 'b1576e82c6c6fb1503109f00315debf2', 'Erastus', 'Ifeosame', 'erasoooo@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(29, '09:33:31', '2002-02-17', 'd6bc0671db720b3234765935f409a0aa', 'Erastus', 'Ifeosame', 'erasooooo@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', ''),
(30, '09:35:06', '2002-02-17', 'b29b73322574d0ea4b5d1220eaa77602', 'NairaBet', 'Providence', 'fboy@yahoo.com', '2348054022214.jpg', 'University of port-harcourt', '', '', '', '', '', '', ''),
(31, '10:45:01', '2002-02-17', 'b7bee6b36bd35b773132d4e3a74c2bb5', 'Daniel', 'Ugboh', 'dannykudz@gmail.com', 'Albert einstein.jpg', 'University of port-harcourt', 'ALAKAHIA', '', '', '', '', '', ''),
(32, '09:06:15', '2005-02-17', '818e884bd3394bc2771a4eeccd27c263', 'King', 'Gideon', 'gideonking555@gmail', 'New Doc 26_1.jpg', 'University of port-harcourt', 'nigeria', '', '', '', '08161379633', '', ''),
(33, '09:14:45', '2005-02-17', 'b5c0b187fe309af0f4d35982fd961d7e', 'Tega', 'King', 'gideonking7443@gmail', 'New Doc 26_1.jpg', 'University of port-harcourt', 'port harcourt', '', '', '', '08161379633', '', ''),
(34, '10:07:52', '2005-02-17', 'b1576e82c6c6fb1503109f00315debf2', 'Ubong', 'Akpa', 'uby@gmail.com', 'IMG_20140805_114635.jpg', '', '', '', '', '', '', '', ''),
(35, '10:15:47', '2005-02-17', 'b1576e82c6c6fb1503109f00315debf2', 'Inno', 'Ifeosame', 'ifesam@gmail.com', 'clinton.ikechukwu.jpg', '', '', '', '', '', '', '', ''),
(36, '07:44:49', '2025-02-17', 'd1133275ee2118be63a577af759fc052', 'Joshua', 'Evuetapha', 'evuetaphajoshua@gmail.com', '(angry)_scaled_45.png', 'University of port-harcourt', 'port hacourt', 'joshua', '', '', '09090867229', '', ''),
(37, '12:38:38', '2026-02-17', '5faf0e856db9b51f62e1ece977fb6e67', 'Nasty', 'C', 'nasty@gmail.com', 'images(1).jpg', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `paymentinfo`
--

CREATE TABLE `paymentinfo` (
  `paymentid` int(11) NOT NULL,
  `projectid` int(11) NOT NULL,
  `accname` varchar(100) NOT NULL,
  `accnum` varchar(14) NOT NULL,
  `email` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `acctypeid` int(11) NOT NULL,
  `bankid` int(11) NOT NULL,
  `phone` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paymentinfo`
--

INSERT INTO `paymentinfo` (`paymentid`, `projectid`, `accname`, `accnum`, `email`, `amount`, `acctypeid`, `bankid`, `phone`) VALUES
(1, 8, 'providence', '2133453423', 'provi@gmail.com', 1000, 1, 20, '2147483647'),
(2, 9, 'providence', '2110746621', 'providenceifeosame@gmail.com', 1000, 2, 20, '2147483647'),
(3, 4, 'providence', '2110746621', 'providenceifeosame@gmail.com', 1000, 2, 20, '08077937950');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `priceid` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`priceid`, `price`) VALUES
(1, 1000),
(2, 1500),
(3, 2000),
(4, 500),
(5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `admin_status` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `projectid` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `time` varchar(12) NOT NULL,
  `date` varchar(12) NOT NULL,
  `filename` varchar(225) NOT NULL,
  `type` varchar(6) NOT NULL,
  `downloads` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `memberid` int(11) NOT NULL,
  `description` text NOT NULL,
  `contents` text NOT NULL,
  `facebook` text NOT NULL,
  `youtube` text NOT NULL,
  `verification` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`admin_status`, `status`, `projectid`, `title`, `time`, `date`, `filename`, `type`, `downloads`, `price`, `memberid`, `description`, `contents`, `facebook`, `youtube`, `verification`) VALUES
(1, 1, 1, 'withyoiu', '06:54:15pm', '11/03/17', 'Management.docx', 'doc', 0, 0, 23, 'ccccccccccccccccccccccccccccccccccccccc', ' cccccccccccccccccccccffffffffffffffffffffffff', 'www.facebook.com/fish', '', 0),
(1, 1, 4, 'gras', '07:12:02pm', '11/03/17', 'assingnent(1)[1].docx', 'doc', 21, 1000, 23, 'fffffffffffffffffffffhhhhhhhhhhhhhhhhhhhssssssssssssx', ' bbbbbbbbbbbbbbbbbbxxxxxxxxxxxxxjjjjjjjjjjjjj', 'www.facebook.com/fish', '', 0),
(1, 0, 5, 'try', '12:18:35am', '12/03/17', '5_jarazone_project.pdf', 'pdf', 0, 0, 23, 'hhhhhhhhhhhhhhhhhhhcccccccccccccccctttttttttttttt', ' kjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjvccccccccccch', '', '', 1),
(0, 1, 6, 'pror', '07:42:11pm', '12/03/17', '6_jarazone_project(1).pdf', 'doc', 0, 0, 23, 'dssssssssssssssssmmmmmmmmmmmmmmmmmccccccccccccx', ' xxxxxxxxxxxxxxxxxaaaaaaaaaaaaaaccccccccccccccc', 'https://web.facebook.com/NG44-187792057933273/', '<iframe width="100%" height="55%" src="https://www.youtube.com/embed/rspQ4Cx6E_8?ecver=1" frameborder="0" allowfullscreen></iframe>', 0);

-- --------------------------------------------------------

--
-- Table structure for table `protype`
--

CREATE TABLE `protype` (
  `protypeid` int(11) NOT NULL,
  `protype` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `protype`
--

INSERT INTO `protype` (`protypeid`, `protype`) VALUES
(1, 'UnderGraduate'),
(2, 'Masters'),
(3, 'PHD'),
(4, 'Other');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolid` int(11) NOT NULL,
  `school` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolid`, `school`) VALUES
(1, 'University of Abuja'),
(2, 'University of Agriculture, Abeokuta'),
(3, 'University of Ado-Ekiti'),
(4, 'University of Benin'),
(5, 'University of Calabar'),
(6, 'University of Education, Ikere-Ekiti'),
(7, 'University of Ibadan'),
(8, 'University of Ilorin'),
(9, 'University of Jos'),
(10, 'University of Lagos'),
(11, 'University of Maiduguri'),
(12, 'University of Mkar, Mkar'),
(13, 'University of Nigeria'),
(14, 'University of port-harcourt'),
(15, 'University of Technology, Akwa-Ibom'),
(16, 'University Of Uyo'),
(18, 'ABTI-American University of Nigeria'),
(19, 'Abubakar Tafawa Balewa University'),
(20, 'Adamawa State University, Mubi'),
(21, 'Adekunle Ajasin University'),
(22, 'Ahmadu Bello University'),
(23, 'Ajayi Crowther University, Oyo'),
(24, 'Ambrose Alli University'),
(25, 'BStudents and exam malpracticesock University'),
(26, 'Bayero University, Kano'),
(27, 'Bells University'),
(28, 'Benson Idahosa University'),
(29, 'Bowen University, Iwo'),
(30, 'Cetep City University, Lagos'),
(31, 'Covenant University'),
(32, 'Crawford University,Oye Ekiti'),
(33, 'Cross River University of Technology'),
(34, 'Delta State University, Abraka'),
(35, 'Ebonyi State University'),
(36, 'Enugu State University of Science & Technology'),
(37, 'Federal University of Technology, Akure'),
(38, 'Federal University of Technology, Minna'),
(39, 'Federal University of Technology, Owerri'),
(40, 'Federal University Of Technology, Yola'),
(41, 'Gombe state University, Tudun, Wada'),
(42, 'Igbinedion University, Okada'),
(43, 'Imo State University'),
(44, 'Joseph Ayo Babalola University'),
(45, 'Katsina State University'),
(46, 'Kogi State University, Anyigba'),
(47, 'Ladoke Akintola University of Tech.'),
(48, 'Lagos State University'),
(49, 'Lead City University'),
(50, 'Landmark Unhj'),
(51, 'Michael Okpara University'),
(52, 'Nasarrawa State University'),
(53, 'National Open University of Nigeria'),
(54, 'Niger Delta University'),
(55, 'Nigerian Defence Academy'),
(56, 'Nnamdi Azikiwe University of Agriculture, Umudike'),
(57, 'Obafemi Awolowo University, ile-ife'),
(58, 'Olabisi Onabanjo University, Ago-Iwoye'),
(59, 'Osun State University'),
(60, 'pan African University, Lekki'),
(61, 'plateau State University'),
(62, 'Redeemer’s University'),
(63, 'Renaissance University, Enugu'),
(64, 'Rivers State University of Science and Technology'),
(65, 'Salem University, Lokoja'),
(66, 'St. paul’s University College, Awka'),
(67, 'Theological College of Northern Nigeria,Bukuru'),
(68, 'Tai Solarin University of Education, Ijebu-Ode'),
(69, 'Usmanu Danfodiyo University, Sokoto'),
(70, 'Wesley University, Ondo'),
(71, 'Anambra State University, Anambra'),
(72, 'Abia State polytechnic'),
(73, 'Adamawa State polytechnic, Yola'),
(74, 'Akanu Ibiam Federal polytechnic, Unwana'),
(75, 'Allover central polytechnic, Sango-Ota Ogun State'),
(76, 'Akwa Ibom State polytechnic'),
(77, 'Auchi polytechnic, Auchi'),
(78, 'Dorben polytechnic (formerly Abuja School of Accountancy and Computer Studies)'),
(79, 'Delta state polytechnic, Ozoro'),
(80, 'Federal polytechnic, Ado – Ekiti'),
(81, 'Federal polytechnic Offa'),
(82, 'Federal polytechnic Bida'),
(83, 'Federal polytechnic, Bauchi'),
(84, 'Federal polytechnic, Idah'),
(85, 'Federal polytechnic, Ilaro'),
(86, 'Federal polytechnic, Damaturu'),
(87, 'Federal polytechnic, Nassarawa'),
(88, 'Federal polytechnic, Mubi'),
(89, 'Federal polytechnic, Nekede'),
(90, 'Federal polytechnic, Oko'),
(91, 'Federal polytechnic, Ede'),
(92, 'Federal polytechnic, Birnin-Kebbi'),
(93, 'Federal coll. of Animal health & production Tech., Ibadan'),
(94, 'Gateway polytechnic Saapade'),
(95, 'Hussaini Adamu Federal polytechnic, kazaure'),
(96, 'Institute of Management Technology, Enugu'),
(97, 'Kaduna polytechnic'),
(98, 'Kano State polytechnic, Kano'),
(99, 'Kwara State polytechnic'),
(100, 'Lagos City polytechnic'),
(101, 'Lagos City Computer College'),
(102, 'Lagos State polytechnic'),
(103, 'Niger State polytechnic, Zungeru'),
(104, 'Nigerian Coll. of Aviation Tech., Zaira'),
(105, 'Maritime Academy of Nigeria, Oron'),
(106, 'Moshood Abiola polytechnic, Abeokuta'),
(107, 'Nuhu Bamalli polytechnic, Zaria, Kaduna State'),
(108, 'Osun State College of Technology, Esa-Oke'),
(109, 'Osun State polytechnic, Iree'),
(110, 'Ramat polytechnic, Maiduguri'),
(111, 'River State polytechnic, Bori'),
(112, 'Rufus Giwa polytechnic, Owo'),
(113, 'Shaka polytechnic'),
(114, 'The polytechnic, Ibadan'),
(115, 'Yaba College of Tech.'),
(116, 'Adeniran Ogunsanya College of Education'),
(117, 'Adeyemi College of Education, Ondo'),
(118, 'College of Education, Agbor'),
(119, 'College of Education, Afaha-Nsit'),
(120, 'College of Education, Akwanga'),
(121, 'College of Education, Ekiadolor'),
(122, 'College of Education, Ikere Ekiti'),
(123, 'College of Education, Katsina Ala'),
(124, 'College of Education, Zuba'),
(125, 'College of Education, Oro Kwara State'),
(126, 'College of Education, Azare'),
(127, 'College of Education, Warri'),
(129, 'College of Education, Akwanga'),
(130, 'College of Education, Gindiri'),
(131, 'College of Education, Katsina-Ala'),
(132, 'FCT College of Education, Zuba'),
(133, 'Federal College of Education, Zaira'),
(134, 'Federal College of Education, Okene'),
(135, 'Federal College of Education, Akoka'),
(136, 'Federal College of Education, Omoku'),
(137, 'Federal College of Education (Special), Oyo'),
(138, 'Federal College of Education, Zaria'),
(139, 'Federal College of Education (Technical) Gombe'),
(140, 'Federal College of Education, Obudu'),
(141, 'Federal College of Education, pankshin'),
(142, 'Federal College of Education, (Technical) Bich'),
(143, 'Federal College of Education (Technical) Gusau'),
(144, 'Federal College of Education, Yola'),
(145, 'Kano State College of Education, Kano'),
(146, 'Kwara State College of Education'),
(147, 'National Teachers Institute, kaduna'),
(148, 'Nwafor Orizu College of Education'),
(149, 'Osun State College of Education, Ilesa'),
(150, 'Osun State College of Education, Ila-Orangun'),
(151, 'Oyo State College Of Education, Oyo'),
(152, 'Rivers State College of Education'),
(153, 'Abia state University, Uturu');

-- --------------------------------------------------------

--
-- Table structure for table `verifiers`
--

CREATE TABLE `verifiers` (
  `id` int(11) NOT NULL,
  `time` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `surname` varchar(100) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `picture` varchar(225) NOT NULL DEFAULT 'images(1).jpg',
  `approval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifiers`
--

INSERT INTO `verifiers` (`id`, `time`, `date`, `firstname`, `surname`, `email`, `password`, `picture`, `approval`) VALUES
(2, '03:31:58pm', '16/12/16', 'Providence', 'Ifeosame', 'care@gmail.com', 'ffead8f75bff3df51f1a81bcc8e15945', 'g.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `verifier_login`
--

CREATE TABLE `verifier_login` (
  `loginid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logintime` varchar(50) NOT NULL,
  `logindate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifier_login`
--

INSERT INTO `verifier_login` (`loginid`, `id`, `firstname`, `email`, `logintime`, `logindate`) VALUES
(1, 2, 'Providence', 'care@gmail.com', '03:51:35pm', '16/12/16'),
(2, 2, 'Providence', 'care@gmail.com', '04:47:58pm', '16/12/17'),
(3, 2, 'Providence', 'care@gmail.com', '04:49:06pm', '16/12/17'),
(4, 2, 'Providence', 'care@gmail.com', '04:50:06pm', '16/12/17'),
(5, 2, 'Providence', 'care@gmail.com', '04:51:48pm', '16/12/17'),
(6, 2, 'Providence', 'care@gmail.com', '04:55:12pm', '16/12/17'),
(7, 2, 'Providence', 'care@gmail.com', '04:59:19pm', '16/12/17'),
(8, 2, 'Providence', 'care@gmail.com', '05:01:56pm', '16/12/17'),
(9, 2, 'Providence', 'care@gmail.com', '05:14:25pm', '16/12/17'),
(10, 2, 'Providence', 'care@gmail.com', '08:18:30pm', '16/12/17'),
(11, 2, 'Providence', 'care@gmail.com', '08:22:58pm', '16/12/17'),
(12, 2, 'Providence', 'care@gmail.com', '08:34:36pm', '16/12/17'),
(13, 2, 'Providence', 'care@gmail.com', '08:51:55pm', '16/12/17'),
(14, 2, 'Providence', 'care@gmail.com', '11:37:51pm', '16/12/17'),
(15, 2, 'Providence', 'care@gmail.com', '03:08:58am', '16/12/18'),
(16, 2, 'Providence', 'care@gmail.com', '03:16:11am', '16/12/18'),
(17, 2, 'Providence', 'care@gmail.com', '03:53:26am', '16/12/18'),
(18, 2, 'Providence', 'care@gmail.com', '06:57:28am', '16/12/18'),
(19, 2, 'Providence', 'care@gmail.com', '09:52:33am', '16/12/18'),
(20, 2, 'Providence', 'care@gmail.com', '01:37:17pm', '16/12/18'),
(21, 2, 'Providence', 'care@gmail.com', '10:53:51am', '16/12/22'),
(22, 2, 'Providence', 'care@gmail.com', '10:54:51am', '16/12/22'),
(23, 2, 'Providence', 'care@gmail.com', '09:06:11pm', '16/12/22'),
(24, 2, 'Providence', 'care@gmail.com', '02:38:49pm', '29/12/16'),
(25, 2, 'Providence', 'care@gmail.com', '02:27:42pm', '30/12/16'),
(26, 2, 'Providence', 'care@gmail.com', '02:30:29pm', '30/12/16'),
(27, 2, 'Providence', 'care@gmail.com', '02:33:13pm', '30/12/16'),
(28, 2, 'Providence', 'care@gmail.com', '12:38:54am', '02/01/17'),
(29, 2, 'Providence', 'care@gmail.com', '09:42:12pm', '12/01/17'),
(30, 2, 'Providence', 'care@gmail.com', '10:30:49am', '13/01/17'),
(31, 2, 'Providence', 'care@gmail.com', '10:49:47am', '13/01/17'),
(32, 2, 'Providence', 'care@gmail.com', '05:54:45pm', '14/02/17'),
(33, 2, 'Providence', 'care@gmail.com', '12:41:10pm', '26/02/17'),
(34, 2, 'Providence', 'care@gmail.com', '12:47:53pm', '26/02/17'),
(35, 2, 'Providence', 'care@gmail.com', '12:49:16pm', '26/02/17'),
(36, 2, 'Providence', 'care@gmail.com', '02:39:26pm', '26/02/17'),
(37, 2, 'Providence', 'care@gmail.com', '03:32:34pm', '26/02/17'),
(38, 2, 'Providence', 'care@gmail.com', '04:24:50pm', '26/02/17'),
(39, 2, 'Providence', 'care@gmail.com', '09:36:15pm', '26/02/17'),
(40, 2, 'Providence', 'care@gmail.com', '03:47:53am', '28/02/17'),
(41, 2, 'Providence', 'care@gmail.com', '05:55:19am', '28/02/17'),
(42, 2, 'Providence', 'care@gmail.com', '06:30:08am', '28/02/17'),
(43, 2, 'Providence', 'care@gmail.com', '08:08:56am', '28/02/17'),
(44, 2, 'Providence', 'care@gmail.com', '08:21:28am', '28/02/17'),
(45, 2, 'Providence', 'care@gmail.com', '06:25:25pm', '04/03/17'),
(46, 2, 'Providence', 'care@gmail.com', '06:31:51pm', '04/03/17'),
(47, 2, 'Providence', 'care@gmail.com', '03:02:02pm', '09/03/17'),
(48, 2, 'Providence', 'care@gmail.com', '06:34:58pm', '11/03/17'),
(49, 2, 'Providence', 'care@gmail.com', '06:57:08pm', '11/03/17'),
(50, 2, 'Providence', 'care@gmail.com', '06:05:03am', '22/03/17'),
(51, 2, 'Providence', 'care@gmail.com', '10:37:11am', '07/04/17');

-- --------------------------------------------------------

--
-- Table structure for table `verifier_logout`
--

CREATE TABLE `verifier_logout` (
  `loginid` int(11) NOT NULL,
  `logoutid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `logouttime` varchar(50) NOT NULL,
  `logoutdate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifier_logout`
--

INSERT INTO `verifier_logout` (`loginid`, `logoutid`, `id`, `firstname`, `email`, `logouttime`, `logoutdate`) VALUES
(14, 1, 2, 'Providence', 'care@gmail.com', '03:17am', '16/12/18'),
(14, 2, 2, 'Providence', 'care@gmail.com', '07:31am', '16/12/18'),
(2, 3, 0, 'Providence', 'care@gmail.com', '10:42am', '16/12/22'),
(3, 4, 0, 'Providence', 'care@gmail.com', '10:45am', '16/12/22'),
(4, 5, 0, 'Providence', 'care@gmail.com', '10:48am', '16/12/22'),
(5, 6, 0, 'Providence', 'care@gmail.com', '10:52am', '16/12/22'),
(14, 7, 2, 'Providence', 'care@gmail.com', '10:54am', '16/12/22'),
(6, 8, 0, 'Providence', 'care@gmail.com', '09:32pm', '16/12/24'),
(6, 9, 0, 'Providence', 'care@gmail.com', '05:38pm', '17/01/03'),
(14, 10, 2, 'Providence', 'care@gmail.com', '02:41pm', '16/12/29'),
(14, 11, 2, 'Providence', 'care@gmail.com', '02:27pm', '16/12/30'),
(14, 12, 2, 'Providence', 'care@gmail.com', '02:30:33pm', '16/12/30'),
(14, 13, 2, 'Providence', 'care@gmail.com', '02:46:31pm', '16/12/30'),
(28, 14, 2, 'Providence', 'care@gmail.com', '12:44:07am', '17/01/02'),
(28, 15, 2, 'Providence', 'care@gmail.com', '10:32:34am', '17/01/13'),
(28, 16, 2, 'Providence', 'care@gmail.com', '10:51:33am', '17/01/13'),
(33, 17, 2, 'Providence', 'care@gmail.com', '12:46:51pm', '17/02/26'),
(34, 18, 2, 'Providence', 'care@gmail.com', '12:48:54pm', '17/02/26'),
(35, 19, 2, 'Providence', 'care@gmail.com', '01:19:39pm', '17/02/26'),
(35, 20, 2, 'Providence', 'care@gmail.com', '03:27:20pm', '17/02/26'),
(35, 21, 2, 'Providence', 'care@gmail.com', '06:36:53pm', '17/02/26'),
(35, 22, 2, 'Providence', 'care@gmail.com', '01:16:43pm', '17/02/28'),
(35, 23, 2, 'Providence', 'care@gmail.com', '06:26:37pm', '17/03/04'),
(35, 24, 2, 'Providence', 'care@gmail.com', '06:31:59pm', '17/03/04'),
(35, 25, 2, 'Providence', 'care@gmail.com', '03:13:39pm', '17/03/09'),
(0, 26, 0, '', '', '03:13:43pm', '17/03/09'),
(35, 27, 2, 'Providence', 'care@gmail.com', '06:39:04pm', '17/03/11'),
(35, 28, 2, 'Providence', 'care@gmail.com', '06:57:33pm', '17/03/11'),
(35, 29, 2, 'Providence', 'care@gmail.com', '06:36:29am', '17/03/22'),
(35, 30, 2, 'Providence', 'care@gmail.com', '10:39:03am', '17/04/07');

-- --------------------------------------------------------

--
-- Table structure for table `verifier_verification_log`
--

CREATE TABLE `verifier_verification_log` (
  `log_id` int(11) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `verifier_id` int(11) NOT NULL,
  `verification` int(11) NOT NULL,
  `admin_verification` int(11) NOT NULL DEFAULT '0',
  `time` varchar(25) NOT NULL,
  `date` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifier_verification_log`
--

INSERT INTO `verifier_verification_log` (`log_id`, `admin_status`, `status`, `project_id`, `verifier_id`, `verification`, `admin_verification`, `time`, `date`) VALUES
(3, 0, 1, 2, 2, 0, 0, '06:57:23pm', '11/03/17'),
(4, 0, 1, 4, 2, 0, 0, '06:33:37am', '22/03/17'),
(5, 0, 1, 3, 2, 1, 0, '10:00:55pm', '12/01/17'),
(6, 0, 1, 10, 0, 0, 0, '06:01:41pm', '14/02/17'),
(7, 0, 1, 5, 2, 1, 0, '01:00:30pm', '26/02/17'),
(8, 0, 1, 6, 2, 0, 0, '10:38:44am', '07/04/17'),
(9, 0, 1, 7, 2, 0, 0, '06:31:55pm', '04/03/17'),
(10, 0, 1, 8, 2, 1, 0, '03:02:12pm', '09/03/17'),
(11, 0, 1, 1, 2, 0, 0, '06:57:26pm', '11/03/17');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `yearid` int(11) NOT NULL,
  `year` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`yearid`, `year`) VALUES
(1, 2016),
(2, 2015),
(3, 2014),
(4, 2013),
(5, 2012),
(6, 2011),
(7, 2010),
(8, 2009),
(9, 2008),
(10, 2007),
(11, 2006),
(12, 2005),
(13, 2004),
(14, 2003),
(15, 2002),
(16, 2001),
(17, 2000),
(18, 1999),
(19, 1998),
(20, 1997),
(21, 1996),
(22, 1995),
(23, 1994),
(24, 1993),
(25, 1992),
(26, 1991),
(27, 1990),
(52, 2017);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acctype`
--
ALTER TABLE `acctype`
  ADD PRIMARY KEY (`acctypeid`);

--
-- Indexes for table `admin_download_log`
--
ALTER TABLE `admin_download_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `admin_logout`
--
ALTER TABLE `admin_logout`
  ADD PRIMARY KEY (`logoutid`);

--
-- Indexes for table `admin_members`
--
ALTER TABLE `admin_members`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_upload_log`
--
ALTER TABLE `admin_upload_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_verification_log`
--
ALTER TABLE `admin_verification_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`alumniid`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`bankid`);

--
-- Indexes for table `choice`
--
ALTER TABLE `choice`
  ADD PRIMARY KEY (`choiceid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`commentid`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `entry`
--
ALTER TABLE `entry`
  ADD PRIMARY KEY (`entryid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `logout`
--
ALTER TABLE `logout`
  ADD PRIMARY KEY (`logoutid`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`memberid`);

--
-- Indexes for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  ADD PRIMARY KEY (`paymentid`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`priceid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`projectid`);

--
-- Indexes for table `protype`
--
ALTER TABLE `protype`
  ADD PRIMARY KEY (`protypeid`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolid`);

--
-- Indexes for table `verifiers`
--
ALTER TABLE `verifiers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `verifier_login`
--
ALTER TABLE `verifier_login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `verifier_logout`
--
ALTER TABLE `verifier_logout`
  ADD PRIMARY KEY (`logoutid`);

--
-- Indexes for table `verifier_verification_log`
--
ALTER TABLE `verifier_verification_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`yearid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acctype`
--
ALTER TABLE `acctype`
  MODIFY `acctypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_download_log`
--
ALTER TABLE `admin_download_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT for table `admin_logout`
--
ALTER TABLE `admin_logout`
  MODIFY `logoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `admin_members`
--
ALTER TABLE `admin_members`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_upload_log`
--
ALTER TABLE `admin_upload_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_verification_log`
--
ALTER TABLE `admin_verification_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `alumniid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `bankid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `choice`
--
ALTER TABLE `choice`
  MODIFY `choiceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `commentid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `entry`
--
ALTER TABLE `entry`
  MODIFY `entryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;
--
-- AUTO_INCREMENT for table `logout`
--
ALTER TABLE `logout`
  MODIFY `logoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `memberid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `paymentinfo`
--
ALTER TABLE `paymentinfo`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `priceid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `protype`
--
ALTER TABLE `protype`
  MODIFY `protypeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `schoolid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;
--
-- AUTO_INCREMENT for table `verifiers`
--
ALTER TABLE `verifiers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `verifier_login`
--
ALTER TABLE `verifier_login`
  MODIFY `loginid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `verifier_logout`
--
ALTER TABLE `verifier_logout`
  MODIFY `logoutid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `verifier_verification_log`
--
ALTER TABLE `verifier_verification_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `yearid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
