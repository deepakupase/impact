-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 23, 2014 at 09:49 AM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `impact2`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni_info`
--

CREATE TABLE IF NOT EXISTS `alumni_info` (
  `alumni_id` int(8) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `degree_id` int(2) NOT NULL,
  `branch_id` int(2) NOT NULL,
  `dob` date DEFAULT NULL,
  `mar_status` tinyint(1) DEFAULT NULL,
  `mar_anniversary` date DEFAULT NULL,
  `photo` blob,
  `p_house_no` varchar(30) DEFAULT NULL,
  `p_street_name` varchar(30) DEFAULT NULL,
  `p_area` varchar(30) DEFAULT NULL,
  `p_city` varchar(30) DEFAULT NULL,
  `p_state` varchar(30) DEFAULT NULL,
  `p_country` varchar(30) DEFAULT NULL,
  `p_postal_code` varchar(10) DEFAULT NULL,
  `c_house_no` varchar(30) DEFAULT NULL,
  `c_street_name` varchar(30) DEFAULT NULL,
  `c_area` varchar(30) DEFAULT NULL,
  `c_city` varchar(30) DEFAULT NULL,
  `c_state` varchar(30) DEFAULT NULL,
  `c_country` varchar(30) DEFAULT NULL,
  `c_postal_code` int(6) DEFAULT NULL,
  `email_1` varchar(30) DEFAULT NULL,
  `email_2` varchar(30) DEFAULT NULL,
  `mobile_1` varchar(15) DEFAULT NULL,
  `mobile_2` varchar(15) DEFAULT NULL,
  `home_phone` varchar(15) DEFAULT NULL,
  `work_phone` varchar(15) DEFAULT NULL,
  `year_of_passing` int(4) NOT NULL,
  PRIMARY KEY (`alumni_id`),
  KEY `degree_id` (`degree_id`,`branch_id`),
  KEY `branch_id` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `branch_id` int(2) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `committee`
--

CREATE TABLE IF NOT EXISTS `committee` (
  `committee_id` int(2) NOT NULL AUTO_INCREMENT,
  `committee_name` varchar(50) NOT NULL,
  PRIMARY KEY (`committee_id`),
  UNIQUE KEY `committee_name` (`committee_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `degree`
--

CREATE TABLE IF NOT EXISTS `degree` (
  `degree_id` int(2) NOT NULL AUTO_INCREMENT,
  `degree_name` varchar(50) NOT NULL,
  PRIMARY KEY (`degree_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `designation_detail`
--

CREATE TABLE IF NOT EXISTS `designation_detail` (
  `desig_id` int(5) NOT NULL AUTO_INCREMENT,
  `alumni_id` int(8) NOT NULL,
  `organization_name` varchar(50) NOT NULL,
  `organization_address` varchar(100) NOT NULL,
  `organization_city` varchar(30) NOT NULL,
  `organization_contact` int(15) DEFAULT NULL,
  `website` varchar(50) NOT NULL,
  `organization_department` varchar(50) DEFAULT NULL,
  `position` varchar(25) NOT NULL,
  `from_year` int(4) DEFAULT NULL,
  `to_year` int(4) DEFAULT NULL,
  PRIMARY KEY (`desig_id`),
  KEY `alumni_id` (`alumni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `event_id` int(8) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(100) NOT NULL,
  `event_description` text NOT NULL,
  `event_datetime` datetime NOT NULL,
  PRIMARY KEY (`event_id`),
  UNIQUE KEY `event_name` (`event_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_hotel`
--

CREATE TABLE IF NOT EXISTS `event_hotel` (
  `eventhotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_address` text NOT NULL,
  `rooms_available` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`eventhotel_id`),
  KEY `event_id` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE IF NOT EXISTS `event_registration` (
  `eventreg_id` int(11) NOT NULL AUTO_INCREMENT,
  `alumni_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `accomodation` tinyint(4) DEFAULT NULL,
  `family_member` int(11) DEFAULT NULL,
  `arrival_travel` tinyint(4) DEFAULT NULL,
  `arrival_datetime` datetime DEFAULT NULL,
  `arrival_detail` text,
  `dept_datetime` datetime DEFAULT NULL,
  PRIMARY KEY (`eventreg_id`),
  KEY `alumni_id_index` (`alumni_id`),
  KEY `event_id_index` (`event_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `family_detail`
--

CREATE TABLE IF NOT EXISTS `family_detail` (
  `family_id` int(5) NOT NULL AUTO_INCREMENT,
  `alumni_id` int(8) NOT NULL,
  `name_of_member` varchar(30) DEFAULT NULL,
  `relation_id` int(2) NOT NULL,
  `occupation` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`family_id`),
  KEY `alumni_id` (`alumni_id`),
  KEY `relation_id` (`relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reservation`
--

CREATE TABLE IF NOT EXISTS `hotel_reservation` (
  `hotelres_id` int(11) NOT NULL AUTO_INCREMENT,
  `eventreg_id` int(11) NOT NULL,
  `eventhotel_id` int(11) NOT NULL,
  `roomno` varchar(10) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `comment` text,
  PRIMARY KEY (`hotelres_id`),
  KEY `eventreg_id` (`eventreg_id`),
  KEY `eventhotel_id` (`eventhotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `college_id` int(8) NOT NULL,
  `member_name` varchar(70) NOT NULL,
  `branch_id` int(2) NOT NULL,
  `year` int(4) NOT NULL,
  `gender` tinyint(1) NOT NULL,
  `dob` date DEFAULT NULL,
  `contact_no` int(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `photo` blob,
  `event_id` int(8) NOT NULL,
  `position_id` int(2) NOT NULL,
  `committee_id` int(2) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(2) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `degree_id` int(2) NOT NULL,
  PRIMARY KEY (`member_id`),
  KEY `event_id` (`event_id`,`position_id`,`committee_id`),
  KEY `position_id` (`position_id`),
  KEY `committee_id` (`committee_id`),
  KEY `role_index` (`role_id`),
  KEY `branch_id` (`branch_id`),
  KEY `degree_id` (`degree_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `other_qualification_detail`
--

CREATE TABLE IF NOT EXISTS `other_qualification_detail` (
  `oq_id` int(5) NOT NULL AUTO_INCREMENT,
  `alumni_id` int(8) NOT NULL,
  `name_of_institute` varchar(50) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year_of_passing` int(4) NOT NULL,
  `extras` varchar(30) NOT NULL,
  PRIMARY KEY (`oq_id`),
  KEY `alumni_id` (`alumni_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE IF NOT EXISTS `position` (
  `position_id` int(2) NOT NULL AUTO_INCREMENT,
  `position_name` varchar(50) NOT NULL,
  `position_description` text NOT NULL,
  PRIMARY KEY (`position_id`),
  UNIQUE KEY `position_name` (`position_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `relation`
--

CREATE TABLE IF NOT EXISTS `relation` (
  `relation_id` int(2) NOT NULL AUTO_INCREMENT,
  `relation_name` varchar(20) NOT NULL,
  PRIMARY KEY (`relation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(2) NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) NOT NULL,
  `role_desc` text NOT NULL,
  PRIMARY KEY (`role_id`),
  UNIQUE KEY `role_name` (`role_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alumni_info`
--
ALTER TABLE `alumni_info`
  ADD CONSTRAINT `alumni_info_ibfk_1` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `alumni_info_ibfk_2` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`);

--
-- Constraints for table `designation_detail`
--
ALTER TABLE `designation_detail`
  ADD CONSTRAINT `designation_detail_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `event_hotel`
--
ALTER TABLE `event_hotel`
  ADD CONSTRAINT `event_hotel_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD CONSTRAINT `event_registration_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`),
  ADD CONSTRAINT `event_registration_ibfk_2` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`);

--
-- Constraints for table `family_detail`
--
ALTER TABLE `family_detail`
  ADD CONSTRAINT `family_detail_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `family_detail_ibfk_2` FOREIGN KEY (`relation_id`) REFERENCES `relation` (`relation_id`);

--
-- Constraints for table `hotel_reservation`
--
ALTER TABLE `hotel_reservation`
  ADD CONSTRAINT `hotel_reservation_ibfk_1` FOREIGN KEY (`eventreg_id`) REFERENCES `event_registration` (`eventreg_id`),
  ADD CONSTRAINT `hotel_reservation_ibfk_2` FOREIGN KEY (`eventhotel_id`) REFERENCES `event_hotel` (`eventhotel_id`);

--
-- Constraints for table `member`
--
ALTER TABLE `member`
  ADD CONSTRAINT `member_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_2` FOREIGN KEY (`position_id`) REFERENCES `position` (`position_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_3` FOREIGN KEY (`committee_id`) REFERENCES `committee` (`committee_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `member_ibfk_4` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`),
  ADD CONSTRAINT `member_ibfk_5` FOREIGN KEY (`branch_id`) REFERENCES `branch` (`branch_id`),
  ADD CONSTRAINT `member_ibfk_6` FOREIGN KEY (`degree_id`) REFERENCES `degree` (`degree_id`);

--
-- Constraints for table `other_qualification_detail`
--
ALTER TABLE `other_qualification_detail`
  ADD CONSTRAINT `other_qualification_detail_ibfk_1` FOREIGN KEY (`alumni_id`) REFERENCES `alumni_info` (`alumni_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
