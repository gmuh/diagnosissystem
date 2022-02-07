-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 05, 2015 at 02:41 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `expert_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE IF NOT EXISTS `admin_login` (
  `admin_id` int(20) NOT NULL AUTO_INCREMENT,
  `Username` varchar(10) NOT NULL,
  `Password` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `Username`, `Password`) VALUES
(1, 'admin', '123');


-- --------------------------------------------------------


--
-- Table structure for table `drugs`
--

CREATE TABLE IF NOT EXISTS `drugs` (
  `drugs_id` int(20) NOT NULL AUTO_INCREMENT,
  `Name` varchar(80) NOT NULL,
  `Duration` varchar(80) NOT NULL,
  `Dosage` varchar(80) NOT NULL,
  PRIMARY KEY (`drugs_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`drugs_id`, `Name`, `Duration` , `Dosage`) VALUES
(01, 'Chloroqueen Tables 600mg And Paracetamol Tables 500mg', '3 days' , '2 to be taken 2 Times daily'),
(02, 'Queeninn Tables 600mg And Paracetamol Tables 500mg', '5 days' , '2 to be taken 3 Times daily');

--
-- Table structure for table `answer_patient`
--

CREATE TABLE IF NOT EXISTS `answer_patient` (
  `answer_id` int(20) NOT NULL AUTO_INCREMENT,
  `Q_ID` int(20) NOT NULL,
  `admin_id` int(20) NOT NULL,
  `body` varchar(100) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `answer_patient`
--

INSERT INTO `answer_patient` (`answer_id`, `Q_ID`, `admin_id`, `body`, `Date`) VALUES
(1, 2, 1, 'defdsfdsagrqrefasfddsgfsd', '0000-00-00 00:00:00'),
(2, 2, 1, 'fdsfgdhfgskdgfiudgsfkjdsfdsg', '2013-07-13 10:32:30'),
(3, 2, 1, 'fdsfgdhfgskdgfiudgsfkjdsfdsg', '2013-07-13 13:57:13'),
(4, 2, 1, 'fdsfgdhfgskdgfiudgsfkjdsfdsg', '2013-07-13 13:59:35'),
(5, 3, 1, 'hdvcjhdvsfhjmsdbfkjdbgfjbgdklgfdsfds', '2013-07-13 15:17:20'),
(6, 4, 1, 'kughdsgiugdbcfkjdslkihosjfjosdpfkjsde', '2013-07-13 15:17:40'),
(7, 1, 1, 'gbjhbn', '2014-02-05 15:02:40'),
(8, 6, 1, 'Its a transmitted disease', '2014-02-20 10:56:40'),
(9, 1, 1, 'WERE6DFY', '2014-02-25 20:24:42'),
(10, 1, 1, 'it is the virus that causes Malaria', '2014-02-26 06:16:20'),
(11, 1, 1, 'srtged', '2014-02-26 06:22:07'),
(12, 7, 1, '2wet', '2014-02-26 06:23:55'),
(13, 1, 1, 'wwwwsf', '2014-02-26 06:33:54'),
(14, 2, 1, 'qasfdg', '2014-02-26 06:39:48'),
(15, 2, 1, 'huii', '2014-02-26 07:02:50'),
(16, 2, 1, 'sdsds', '2014-02-26 07:04:47'),
(17, 2, 1, 'iio', '2014-02-26 07:10:01'),
(18, 9, 1, 'dose it course skin rash', '2014-02-26 08:06:42'),
(19, 10, 1, 'is malaria transmitted through blood,is possible', '2014-02-26 08:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `forms_patient`
--

CREATE TABLE IF NOT EXISTS `forms_patient` (
  `form_id` int(20) NOT NULL,
  `Firstname` char(20) NOT NULL,
  `Lastname` char(20) NOT NULL,
  `Age` int(20) NOT NULL,
  `Gender` char(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `PhoneNo` int(20) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `forms_patient`
--

INSERT INTO `forms_patient` (`form_id`, `Firstname`, `Lastname`, `Age`, `Gender`, `Email`, `PhoneNo`, `Username`, `Password`) VALUES
(1, 'rahma', 'aminu', 23, 'fe', 'temmy@yahoo.com', 85677885, 'zee', '123'),
(2, 'zara', 'aminu', 23, 'fe', 'zara@yahoo.com', 85677885, 'zara', '122'),
(3, 'Ahmed', 'Ibrahim', 24, 'fe', 'ibrahim@yahoo.com', 2147483647, 'ibrahim', '456');


-- --------------------------------------------------------

--
-- Stand-in structure for view `myview`
--
CREATE TABLE IF NOT EXISTS `myview` (
`form_id` int(20)
,`Q_ID` int(50)
,`answer_id` int(20)
,`QAsk` varchar(500)
,`body` varchar(100)
,`date` timestamp
,`Username` varchar(10)
);
-- --------------------------------------------------------

--
-- Table structure for table `patient_question`
--

CREATE TABLE IF NOT EXISTS `patient_question` (
  `Q_ID` int(50) NOT NULL AUTO_INCREMENT,
  `form_id` int(20) NOT NULL,
  `QAsk` varchar(500) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Q_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `patient_question`
--

INSERT INTO `patient_question` (`Q_ID`, `form_id`, `QAsk`, `Date`) VALUES
(1, 17, 'wht is malaria all about', '2013-07-13 09:48:59'),
(2, 17, 'how is it transmitted', '2013-07-13 15:18:35'),
(5, 27, 'Is headache and vomitting a symptoms of malaria?', '2014-02-06 18:02:00'),
(6, 5, 'how dose the parasite transmit the ilness', '2014-02-20 10:54:15'),
(7, 0, 'Is the treatment expensive', '2014-02-26 06:10:16'),
(8, 0, 'what are the sign of malaria', '2014-02-26 06:11:27'),
(9, 2, 'have been having a very stubborn skin rash,does it coursed by Malaria??', '2014-02-26 08:03:53'),
(10, 2, 'What is the treatment like?', '2014-02-26 08:07:27');

-- --------------------------------------------------------

--
-- Structure for view `myview`
--
DROP TABLE IF EXISTS `myview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `myview` AS select `a`.`form_id` AS `form_id`,`b`.`Q_ID` AS `Q_ID`,`c`.`answer_id` AS `answer_id`,`b`.`QAsk` AS `QAsk`,`c`.`body` AS `body`,`c`.`Date` AS `date`,`d`.`Username` AS `Username` from (((`forms_patient` `a` join `patient_question` `b` on((`a`.`form_id` = `b`.`form_id`))) join `answer_patient` `c` on((`c`.`Q_ID` = `b`.`Q_ID`))) join `admin_login` `d` on((`d`.`admin_id` = `c`.`admin_id`)));
